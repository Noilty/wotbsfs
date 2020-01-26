<?php
require_once '../../../require-one.php';

$DATA = $_POST;
$sMessage = [];

$mMain = [
    'input_DamagePlayer1' => filterDataForms( $DATA['input_DamagePlayer1'] ),
    'input_DamagePlayer2' => filterDataForms( $DATA['input_DamagePlayer2'] ),
    'input_DamagePlayer3' => filterDataForms( $DATA['input_DamagePlayer3'] ),
    'input_BattleResult' => filterDataForms( $DATA['input_BattleResult'] ) 
];

try {
    //Проверяем переменные на пустоту
    if( EmptyCheck($mMain) ) {
        foreach (EmptyCheck($mProfile) as $key => $value) {
            echo $value.'<br />';
        }
        echo '<div><a href="/page/main/">Попробовать снова</a></div>';
    } else {
        $dmg1Player = is_int($mMain['input_DamagePlayer1']);
        $dmg2Player = is_int($mMain['input_DamagePlayer2']);
        $dmg3Player = is_int($mMain['input_DamagePlayer3']);
        $battleResult = is_bool($mMain['input_BattleResult']);
        //Проверяем переменные на тим int
        if( (!$dmg1Player) || (!$dmg2Player) || (!$dmg3Player) ) {
            //errors
        } elseif( !$battleResult ) {
            //errors
        } else {
            //good
        }
    }
} catch (Exception $exc) {
    //echo $exc->getTraceAsString();
    //echo MyDump($exc);
    echo $sMessage[] = 'Exception: main.php!';
}
