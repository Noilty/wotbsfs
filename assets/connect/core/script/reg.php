<?php
require_once '../../../require-one.php';

$DATA = $_POST;
$sMessage = [];

$mUser = [
    'UserNickName' => trim( $DATA['input_UserNickName'] ),
    'UserPassword' => trim( $DATA['input_UserPassword'] ),
    'UserPasswordRe' => trim( $DATA['input_UserPasswordRe'] ),
    'UserEmail' => trim( $DATA['input_UserEmail'] ),
    'UserNotBot' => trim( $DATA['input_UserNotBot'] )
];

try {
    if( $mUser['UserNotBot'] != $_SESSION['Captcha'] ) {
        echo $sMessage[] = 'Проверка на бота провалилась!';
        echo '<div><a href="/page/reg/">Попробовать снова</a></div>';
    } else {
        $bSearchUser = false;
        $sSql = 'SELECT db_UserNickName, db_UserEmail FROM users';
        $mUsers = $pdo->query($sSql)->fetchAll(PDO::FETCH_ASSOC);

        for ($i = 0; $i < count($mUsers); $i++) {
            if( mb_strtolower($mUsers[$i]['db_UserNickName']) == mb_strtolower($mUser['UserNickName']) ) {
                $bSearchUser = true;
            } elseif ( mb_strtolower($mUsers[$i]['db_UserEmail']) == mb_strtolower($mUser['UserEmail']) ) {
                $bSearchUser = true;
            }
        }
        
//        $sSql = 'SELECT EXISTS( SELECT db_UserNickName, db_UserEmail FROM users WHERE db_UserNickName = :UserNickName AND db_UserEmail = :UserEmail )';
//        $stmt = $pdo->prepare($sSql);
//        $mParams = [
//            'UserNickName' => $mUser['UserNickName'],
//            'UserEmail' => $mUser['UserEmail']
//        ];
//        $stmt->execute($mParams);
//        $stmt->fetchColumn()
        
        if( $bSearchUser ) {
            echo $sMessage[] = 'Логин и(или) Электронная почта уже используются!';
            echo '<div><a href="/page/reg/">Попробовать снова</a></div>';
        } else {
            if( $mUser['UserPassword'] != $mUser['UserPasswordRe'] ) {
                echo $sMessage[] = 'Пароли не совпадают!';
                echo '<div><a href="/page/reg/">Попробовать снова</a></div>';
            } else {
                if( !EmptyCheck($mUser) ) {
                    $sSql = 'INSERT INTO users(db_UserNickName, db_UserPassword, db_UserEmail, db_UserEmailConfirmed, db_UserDateRegister) VALUES(:UserNickName, :UserPassword, :UserEmail, :UserEmailConfirmed, NOW())';
                    $mParams = [
                        'UserNickName' => $mUser['UserNickName'],
                        'UserPassword' => password_hash($mUser['UserPassword'], PASSWORD_DEFAULT),
                        'UserEmail' => $mUser['UserEmail'],
                        'UserEmailConfirmed' => 'false',
                    ];
                    $stmt = $pdo->prepare($sSql);
                    $stmt->execute($mParams);

                    if( $stmt ) {
                        echo $sMessage[] = 'Регистрация успешна!';
                        echo '<div><a href="/page/main/">Значит можно работать</a></div>';
                    }
                } else {
                    foreach (EmptyCheck($mUser) as $value) {
                        echo $value.'<br />';
                    }
                    echo '<div><a href="/page/reg/">Попробовать снова</a></div>';
                }
            }
        }
    }
} catch (Exception $exc) {
    //echo $exc->getTraceAsString();
    //echo MyDump($exc);
    echo $sMessage[] = 'Exception: reg.php!';
}
