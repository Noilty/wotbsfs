<?php
require_once '../../../require-one.php';

$DATA = $_POST;
$sMessage = [];

//Данные с формы
$mUser = [
    'UserEmail' => filterDataForms( $DATA['input_UserEmail'] ),
    'UserPassword' => filterDataForms( $DATA['input_UserPassword'] ),
    'UserNotBot' => filterDataForms( $DATA['input_UserNotBot'] )
];

try {
    if( $mUser['UserNotBot'] != $_SESSION['Captcha'] ) {
        echo $sMessage[] = 'Проверка на бота провалилась!';
        echo '<div><a href="/page/login/">Попробовать снова</a></div>';
    } else {
        $_SESSION['Captcha'] = NULL;
        
        if( EmptyCheck($mUser) ) {
            foreach (EmptyCheck($mUser) as $value) {
                echo $value.'<br />';
            }
            echo '<div><a href="/page/auth/">Попробовать снова</a></div>';
        } else {
            $sSql = 'SELECT * FROM users WHERE db_UserEmail = :UserEmail';
            $mParams = [
                'UserEmail' => $mUser['UserEmail'],
            ];
            
            //Тянем почту пользователя
            $stmt = $pdo->prepare($sSql);
            $stmt->execute($mParams);
            $sSearchUser = $stmt->fetchAll(PDO::FETCH_ASSOC);

            if( !$sSearchUser ) {
                echo $sMessage[] = 'Аккаунт не найден!';
                echo '<div><a href="/page/auth/">Попробовать снова</a></div>';
            } else {
                if( !password_verify($mUser['UserPassword'], $sSearchUser[0]['db_UserPassword']) ) {
                    echo $sMessage[] = 'Неверный пароль!';
                    echo '<div><a href="/page/auth/">Попробовать снова</a></div>';
                } else {
                    echo $sMessage[] = 'Пароль принят!';
                    echo '<div><a href="/page/main/">Значит можно работать</a></div>';
                    
                    $mSql = [
                        'keys_users' => 'SELECT db_KeyId, db_UserId FROM keys_users WHERE db_UserId = :UserId',
                        'users' => 'UPDATE users SET db_UserDateVisit = NOW() WHERE db_UserEmail = :UserEmail',
                        'roles_users' => [
                            1 => 'SELECT * FROM roles_users WHERE db_UserId = :UserId',
                            2 => 'INSERT INTO roles_users(db_RoleId, db_UserId) VALUE(:RoleId, :UserId)'
                        ]
                    ];
                    $mParams = [
                        'keys_users' => [
                            'UserId' => $sSearchUser[0]['db_UserId']
                        ],
                        'users' => [
                            'UserEmail' => $sSearchUser[0]['db_UserEmail']
                        ],
                        'roles_users' => [
                            1 => [
                                'UserId' => $sSearchUser[0]['db_UserId']
                            ],
                            2 => [
                                'RoleId' => 2,
                                'UserId' => $sSearchUser[0]['db_UserId']
                            ]
                        ]
                    ];
                    
                    //Тянем ключ пользователя
                    $stmtKeysUsers = $pdo->prepare($mSql['keys_users']);
                    $stmtKeysUsers->execute($mParams['keys_users']);
                    $sSearchKeyUser = $stmtKeysUsers->fetchAll(PDO::FETCH_ASSOC);
                    
                    //Проверяем активирован ли ключ у пользователя
                    if ( $sSearchKeyUser ) {
                        $_SESSION['ActivatedAccount'] = true;
                    } else {
                        $_SESSION['ActivatedAccount'] = false;
                    }
                    
                    //При успешной аутентификации обновляем дату визита
                    $stmt1Users = $pdo->prepare($mSql['users']);
                    $stmt1Users->execute($mParams['users']);
                    
                    //Тянем роль пользователя
                    $stmt1Roles = $pdo->prepare($mSql['roles_users'][1]);
                    $stmt1Roles->execute($mParams['roles_users'][1]);
                    $sSearchRoles = $stmt1Roles->fetchAll(PDO::FETCH_ASSOC);
                    
                    //Если у пользователя нет роли
                    if( !$sSearchRoles ) {
                        //Пишем роль "Пользователь" в roles_users
                        $stmt1Roles = $pdo->prepare($mSql['roles_users'][2]);
                        $stmt1Roles->execute($mParams['roles_users'][2]);
                    } else {
                        //Если у пользователя > одной роли он Администратор или Спонсор (Доработать)
                        if( count($sSearchRoles) > 1 && count($sSearchRoles) < 3 ) {
                            $_SESSION['UserRole'] = $sSearchRoles[1]['db_RoleId'];
                        } else {
                            $_SESSION['UserRole'] = $sSearchRoles[0]['db_RoleId'];
                        }
                    }
                    
                    //Пишем в сессию никнейм пользователя
                    $_SESSION['UserLogged'] = $sSearchUser[0]['db_UserNickName'];
                    
                    //Пишем в сессию информацию о пользователе
                    foreach ($sSearchUser[0] as $key => $value) {
                        $_SESSION[$key] = $sSearchUser[0][$key];
                    }
                }
            }
        }
    }
} catch (Exception $exc) {
    //echo $exc->getTraceAsString();
    //echo MyDump($exc);
    echo $sMessage[] = 'Exception: auth.php!';
}