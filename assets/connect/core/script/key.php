<?php
require_once '../../../require-one.php';

$DATA = $_POST;
$sMessage = [];

$mKey = [
    'ActivationKey' => trim( strtoupper($DATA['input_ActivationKey']) ),
    'UserNotBot' => trim( $DATA['input_UserNotBot'] )
];

try {
    if( $mKey['UserNotBot'] != $_SESSION['Captcha'] ) {
        echo $sMessage[] = 'Проверка на бота провалилась!';
        echo '<div><a href="/page/key/">Попробовать снова</a></div>';
    } else {
        $_SESSION['Captcha'] = NULL;
        
        $bSearchKey = false;
        $bKeyActivated = false;
        $sSql = 'SELECT * FROM `keys`';
        $mAllKeys = $pdo->query($sSql)->fetchAll(PDO::FETCH_ASSOC);
        
        for ($i = 0; $i < count($mAllKeys); $i++) {
            //Проверяем существует ли ключ в БД который ввел пользователь
            if( $mAllKeys[$i]['db_KeyName'] === strtoupper($mKey['ActivationKey']) ) {
                $bSearchKey = true;
                //Проверяем статус ключа
                if( $mAllKeys[$i]['db_KeyStatus'] ) {
                    $bKeyActivated = true;
                } else {
                    $KeyId = $mAllKeys[$i]['db_KeyId'];
                }
            }
        }
        
        if( !$bSearchKey ) {
            echo $sMessage[] = 'Проверьте правильность ввода ключа.';
            echo '<div><a href="/page/key/">Попробовать снова</a></div>';
        } else {
            //Если статус ключа false то его можно использовать
            if( $bKeyActivated ) {
                echo $sMessage[] = 'Этот ключ уже активирован.';
                echo '<div><a href="/page/key/">Попробовать снова</a></div>';
            } else {
                //Если аккаунт уже был активирован запрещаем использование ключа
                if( $_SESSION['ActivatedAccount'] ) {
                    echo $sMessage[] = 'Аккаунт уже активирован! Повторная активация не требуется.';
                    echo '<div><a href="/page/key/">Попробовать снова</a></div>';
                } else {
                    //У ключа статус false т.е он не занят следовательно пишем его в keys_users
                    $sSql = 'INSERT INTO keys_users(db_KeyId, db_UserId, db_KeyActivationDate) VALUES(:KeyId, :UserId, NOW())';
                    $mParams = [
                        'KeyId' => $KeyId,
                        'UserId' => $_SESSION['db_UserId']
                    ];
                    $stmt = $pdo->prepare($sSql);
                    $stmt->execute($mParams);
                    
                    //Если запрос вернул true активируем ключ
                    if( $stmt ) {
                        echo $sMessage[] = 'Ключ активирован!';
                        echo '<div><a href="/page/main/">Значит можно работать</a></div>';

                        $sSql = 'UPDATE `keys` SET db_KeyStatus = :KeyStatus WHERE db_KeyId = :KeyId';
                        $mParams = [
                            'KeyStatus' => 1,
                            'KeyId' => $KeyId
                        ];
                        $stmt = $pdo->prepare($sSql);
                        $stmt->execute($mParams);

                        $_SESSION['ActivatedAccount'] = true;
                    }
                }
            }
        }
    }
} catch (Exception $exc) {
    //echo $exc->getTraceAsString();
    //echo MyDump($exc);
    echo $sMessage[] = 'Exception: key.php!';
}