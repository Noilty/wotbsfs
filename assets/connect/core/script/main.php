<?php
require_once '../../../require-one.php';

$DATA = $_POST;
$sMessage = [];

$mMain = [
    'input_DamagePlayer1' => trim( $DATA['input_DamagePlayer1'] ),
    'input_DamagePlayer2' => trim( $DATA['input_DamagePlayer2'] ),
    'input_DamagePlayer3' => trim( $DATA['input_DamagePlayer3'] ),
    'input_BattleResult' => trim( $DATA['input_BattleResult'] ),
    'UserNotBot' => trim( $DATA['input_UserNotBot'] )  
];

try {
    //
} catch (Exception $exc) {
    //echo $exc->getTraceAsString();
    //echo MyDump($exc);
    echo $sMessage[] = 'Exception: main.php!';
}
