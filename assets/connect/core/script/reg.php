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
        echo '<div><a href="/page/signup/">Попробовать снова</a></div>';
    } else {
        $_SESSION['Captcha'] = NULL;
        
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
            echo '<div><a href="/page/signup/">Попробовать снова</a></div>';
        } else {
            if( $mUser['UserPassword'] != $mUser['UserPasswordRe'] ) {
                echo $sMessage[] = 'Пароли не совпадают!';
                echo '<div><a href="/page/signup/">Попробовать снова</a></div>';
            } else {
                if( !EmptyCheck($mUser) ) {
                    $sSql = [
                        'users' => 'INSERT INTO users(db_UserNickName, db_UserPassword, db_UserEmail, db_UserEmailConfirmed, db_UserDateRegister) VALUES(:UserNickName, :UserPassword, :UserEmail, :UserEmailConfirmed, NOW())',
                        'settings' => 'INSERT INTO settings(db_CountPlayer, db_CountElement, db_TemplateId, db_NickNamePlayer1, db_NickNamePlayer2, db_NickNamePlayer3) VALUES(:CountPlayer, :CountElement, :TemplateId, :NickNamePlayer1, :NickNamePlayer2, :NickNamePlayer3)'
                    ];
                    $mParams = [
                        'users' => [
                            'UserNickName' => $mUser['UserNickName'],
                            'UserPassword' => password_hash($mUser['UserPassword'], PASSWORD_DEFAULT),
                            'UserEmail' => $mUser['UserEmail'],
                            'UserEmailConfirmed' => 0
                        ],
                        'settings' => [
                            'CountPlayer' => 3,
                            'CountElement' => 50,
                            'TemplateId' => 0,
                            'NickNamePlayer1' => 'Player 1',
                            'NickNamePlayer2' => 'Player 2',
                            'NickNamePlayer3' => 'Player 3'
                        ]
                    ];
                    $stmtUsers = $pdo->prepare($sSql['users']);
                    $stmtUsers->execute($mParams['users']);
                    
                    $stmtSettings = $pdo->prepare($sSql['settings']);
                    $stmtSettings->execute($mParams['settings']);

                    if( $stmtUsers && $stmtSettings ) {
                        echo $sMessage[] = 'Регистрация успешна!';
                        echo '<div><a href="/page/main/">Значит можно работать</a></div>';
                    }
                } else {
                    foreach (EmptyCheck($mUser) as $value) {
                        echo $value.'<br />';
                    }
                    echo '<div><a href="/page/signup/">Попробовать снова</a></div>';
                }
            }
        }
    }
} catch (Exception $exc) {
    //echo $exc->getTraceAsString();
    echo MyDump($exc);
    echo $sMessage[] = 'Exception: signup.php!';
}
