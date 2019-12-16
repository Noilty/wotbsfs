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
    if( $mUser['UserNotBot'] != $_SESSION['rand_code'] ) {
        echo $sMessage[] = 'Проверка на бота провалилась!';
    } else {
        if( EmptyCheck($mUser) ) {
            foreach (EmptyCheck($mUser) as $value) {
                echo $value.'<br />';
            }
        } else {
            $sSql = 'SELECT db_UserEmail, db_UserPassword FROM users WHERE db_UserEmail = :UserEmail';
            $mParams = [
                'UserEmail' => $mUser['UserEmail'],
            ];
            $stmt = $pdo->prepare($sSql);
            $stmt->execute($mParams);
            $sSearchEmail = $stmt->fetchAll(PDO::FETCH_ASSOC);

            if( !$sSearchEmail ) {
                echo $sMessage[] = 'Аккаунт не найден!';
            } else {
                if( !password_verify($mUser['UserPassword'], $sSearchEmail[0]['db_UserPassword']) ) {
                    echo $sMessage[] = 'Неверный пароль!';
                } else {
                    echo $sMessage[] = 'Пароль принят!';
                    echo '<div><a href="/page/main/">На главную</a></div>';
                }
            }
        }
    }
} catch (Exception $exc) {
    //echo $exc->getTraceAsString();
    //echo MyDump($exc);
    echo $sMessage[] = 'Exception: auth.php!';
}
