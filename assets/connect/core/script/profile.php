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
                echo 'OK';
            }
        }
    }
} catch (Exception $exc) {
    //echo $exc->getTraceAsString();
    //echo MyDump($exc);
    echo $sMessage[] = 'Exception: profile.php!';
}
