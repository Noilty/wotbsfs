<?php
require_once '../../../require-one.php';

$DATA = $_POST;
$sMessage = [];

$mUser = [
    'UserEmail' => trim( $DATA['input_UserEmail'] ),
    'UserPassword' => trim( $DATA['input_UserPassword'] ),
    'UserNotBot' => trim( $DATA['input_UserNotBot'] )
];

try {
    if( $mUser['UserNotBot'] != $_SESSION['Captcha'] ) {
        echo $sMessage[] = 'Проверка на бота провалилась!';
        
        echo '<div><a href="/page/main/">На главную</a></div>';
        //echo '<script>setTimeout(\'location="/page/main/"\', 5000)</script>';
    } else {
        if( EmptyCheck($mUser) ) {
            foreach (EmptyCheck($mUser) as $value) {
                echo $value.'<br />';
            }
            
            echo '<div><a href="/page/main/">На главную</a></div>';
            //echo '<script>setTimeout(\'location="/page/main/"\', 5000)</script>';
        } else {
            $sSql = 'SELECT * FROM users WHERE db_UserEmail = :UserEmail';
            $mParams = [
                'UserEmail' => $mUser['UserEmail'],
            ];
            $stmt = $pdo->prepare($sSql);
            $stmt->execute($mParams);
            $sSearchEmail = $stmt->fetchAll(PDO::FETCH_ASSOC);

            if( !$sSearchEmail ) {
                echo $sMessage[] = 'Аккаунт не найден!';
                
                echo '<div><a href="/page/main/">На главную</a></div>';
                //echo '<script>setTimeout(\'location="/page/main/"\', 5000)</script>';
            } else {
                if( !password_verify($mUser['UserPassword'], $sSearchEmail[0]['db_UserPassword']) ) {
                    echo $sMessage[] = 'Неверный пароль!';
                } else {
                    echo $sMessage[] = 'Пароль принят!';
                    
                    $sSql = [
                        'keys_users' => 'SELECT db_KeyId, db_UserId FROM keys_users WHERE db_UserId = :UserId',
                        'users' => 'UPDATE users SET db_UserDateVisit = NOW() WHERE db_UserEmail = :UserEmail'
                    ];
                    $mParams = [
                        'keys_users' => [
                            'UserId' => $sSearchEmail[0]['db_UserId']
                        ],
                        'users' => [
                            'UserEmail' => $sSearchEmail[0]['db_UserEmail']
                        ]
                    ];
                    
                    $stmtKeysUsers = $pdo->prepare($sSql['keys_users']);
                    $stmtKeysUsers->execute($mParams['keys_users']);
                    $sSearchKeyUser = $stmtKeysUsers->fetchAll(PDO::FETCH_ASSOC);
                    
                    $stmt1Users = $pdo->prepare($sSql['users']);
                    $stmt1Users->execute($mParams['users']);
                    
                    if ( $sSearchKeyUser ) {
                        $_SESSION['ActivatedAccount'] = true;
                    } else {
                        $_SESSION['ActivatedAccount'] = false;
                    }
                    
                    $_SESSION['UserLogged'] = $sSearchEmail[0]['db_UserNickName'];
                    
                    foreach ($sSearchEmail[0] as $key => $value) {
                        $_SESSION[$key] = $sSearchEmail[0][$key];
                    }
                    
                    echo '<div><a href="/page/main/">На главную</a></div>';
                    //echo '<script>setTimeout(\'location="/page/main/"\', 5000)</script>';
                }
            }
        }
    }
} catch (Exception $exc) {
    //echo $exc->getTraceAsString();
    //echo MyDump($exc);
    echo $sMessage[] = 'Exception: auth.php!';
}