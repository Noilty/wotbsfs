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
        
        echo '<div><a href="/page/main/">На главную</a></div>';
        //echo '<script>setTimeout(\'location="/page/main/"\', 5000)</script>';
    } else {
        $bSearchKey = false;
        $bKeyActivated = false;
        $sSql = 'SELECT * FROM `keys`';
        $mAllKeys = $pdo->query($sSql)->fetchAll(PDO::FETCH_ASSOC);
        
        for ($i = 0; $i < count($mAllKeys); $i++) {
            if( $mAllKeys[$i]['db_KeyName'] === strtoupper($mKey['ActivationKey']) ) {
                $bSearchKey = true;
                if( $mAllKeys[$i]['db_KeyStatus'] ) {
                    $bKeyActivated = true;
                } else {
                    $test = $mAllKeys[$i]['db_KeyId'];
                }
            }
        }
        
        if( !$bSearchKey ) {
            echo $sMessage[] = 'Не нашли ключ';
        } else {
            //Нашли ключ
            if( $bKeyActivated ) {
                echo $sMessage[] = 'Ключ недействителен! попробуйте другой.';
            } else {
                //У ключа статус false т.е он не занят
                $sSql = 'INSERT INTO keys_users(db_KeyId, db_UserId) VALUES(:KeyId, :UserId)';
                $mParams = [
                    'KeyId' => $test,
                    'UserId' => $_SESSION['db_UserId']
                ];
                $stmt = $pdo->prepare($sSql);
                $stmt->execute($mParams);
                
                if( $stmt ) {
                    echo $sMessage[] = 'Ключ активирован!';
                    
                    $sSql = 'UPDATE `keys` SET db_KeyStatus = :KeyStatus WHERE db_KeyId = :KeyId';
                    $mParams = [
                        'KeyStatus' => 1,
                        'KeyId' => $test
                    ];
                    $stmt = $pdo->prepare($sSql);
                    $stmt->execute($mParams);
                    
                    $_SESSION['ActivatedAccount'] = true;
                }
            }
        }
    }
} catch (Exception $exc) {
    //echo $exc->getTraceAsString();
    //echo MyDump($exc);
    echo $sMessage[] = 'Exception: key.php!';
}