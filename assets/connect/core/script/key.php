<?php
require_once '../../../require-one.php';

$DATA = $_POST;
$sMessage = [];

$mKey = [
    'ActivationKey' => trim( $DATA['input_ActivationKey'] ),
    'UserNotBot' => trim( $DATA['input_UserNotBot'] )
];

try {
    if( $mUser['UserNotBot'] != $_SESSION['Captcha'] ) {
        echo $sMessage[] = 'Проверка на бота провалилась!';
        
        echo '<div><a href="/page/main/">На главную</a></div>';
        //echo '<script>setTimeout(\'location="/page/main/"\', 5000)</script>';
    } else {
        $sSql = 'SELECT db_UserId, db_UserEmail, db_UserPassword, db_UserDateVisit FROM users WHERE db_UserEmail = :UserEmail';
        $mParams = [
            'UserEmail' => $mUser['UserEmail'],
        ];
        $stmt = $pdo->prepare($sSql);
        $stmt->execute($mParams);
        $sSearchEmail = $stmt->fetchAll(PDO::FETCH_ASSOC);
    }
} catch (Exception $exc) {
    //echo $exc->getTraceAsString();
    //echo MyDump($exc);
    echo $sMessage[] = 'Exception: activation.php!';
}
