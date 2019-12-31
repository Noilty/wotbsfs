<?php
require_once '../../../require-one.php';

$DATA = $_POST;
$sMessage = [];

$mProfile = [
    'UserName' => trim( $DATA['input_UserName'] ),
    'UserGender' => trim( $DATA['select_UserGender'] ),
    'UserSecretWord' => trim( $DATA['input_UserSecretWord'] ),
    'UserPassword' => trim( $DATA['input_UserPassword'] ),
    'UserDateBirth' => trim( $DATA['input_UserDateBirth'] ),
    'UserNotBot' => trim( $DATA['input_UserNotBot'] )
];

try {
    if( $mProfile['UserNotBot'] != $_SESSION['Captcha'] ) {
        echo $sMessage[] = 'Проверка на бота провалилась!';
        echo '<div><a href="/page/profile/">Попробовать снова</a></div>';
    } else {
        $_SESSION['Captcha'] = NULL;
        
        if( EmptyCheck($mProfile) ) {
            foreach (EmptyCheck($mProfile) as $key => $value) {
                echo $value.'<br />';
            }
            echo '<div><a href="/page/profile/">Попробовать снова</a></div>';
        } else {
            $sSql = 'SELECT db_UserPassword FROM users WHERE db_UserPassword = :UserPassword';
            $mParams = [
                'UserPassword' => $_SESSION['db_UserPassword'],
            ];
            
            //Тянем зашифрованный пароль пользователя
            $stmt = $pdo->prepare($sSql);
            $stmt->execute($mParams);
            $sUserPasswordHash = $stmt->fetchAll(PDO::FETCH_ASSOC);
            
            //Сравниваем пароль с тем, что ввел пользователь с тем который хранится в БД
            if( !password_verify($mProfile['UserPassword'], $sUserPasswordHash[0]['db_UserPassword']) ) {
                echo $sMessage[] = 'Неверный пароль!';
                echo '<div><a href="/page/profile/">Попробовать снова</a></div>';
            } else {
                $sSql = 'UPDATE users SET db_UserName = :UserName, db_UserGender = :UserGender, db_UserSecretWord = :UserSecretWord, db_UserDateBirth = :UserDateBirth WHERE db_UserEmail = :UserEmail';
                $mParams = [
                    'UserName' => $mProfile['UserName'],
                    'UserGender' => $mProfile['UserGender'],
                    'UserSecretWord' => $mProfile['UserSecretWord'],
                    'UserDateBirth' => $mProfile['UserDateBirth'],
                    'UserEmail' => $_SESSION['db_UserEmail']
                ];
                
                $stmt = $pdo->prepare($sSql);
                $stmt->execute($mParams);
                
                if( !$stmt ) {
                    echo 'No';
                } else {
                    $sSql = 'SELECT * FROM users WHERE db_UserEmail = :UserEmail';
                    $mParams = [
                        'UserEmail' => $_SESSION['db_UserEmail']
                    ];
                    
                    //Тянем всю информацию о пользователе
                    $stmt = $pdo->prepare($sSql);
                    $stmt->execute($mParams);
                    $sAllInfoUser = $stmt->fetchAll(PDO::FETCH_ASSOC);
                    
                    //Обновляем информацию в сессии о пользователе
                    foreach ($sAllInfoUser[0] as $key => $value) {
                        $_SESSION[$key] = $sAllInfoUser[0][$key];
                    }
                    
                    echo 'Действие выполнено успешно!';
                    echo '<div><a href="/page/profile/">Значит можно работать</a></div>';
                }
            }
        }
    }
} catch (Exception $exc) {
    //echo $exc->getTraceAsString();
    //echo MyDump($exc);
    echo $sMessage[] = 'Exception: profile.php!';
}