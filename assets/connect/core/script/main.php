<?php
require_once '../../../require-one.php';

$DATA = $_POST;
$sMessage = [];

$mMain = [
    'input_DamagePlayer1' => (int)filterDataForms( $DATA['input_DamagePlayer1'] ),
    'input_DamagePlayer2' => (int)filterDataForms( $DATA['input_DamagePlayer2'] ),
    'input_DamagePlayer3' => (int)filterDataForms( $DATA['input_DamagePlayer3'] ),
    'input_BattleResult' => (bool)filterDataForms( $DATA['input_BattleResult'] ) 
];

try {
    //Проверяем переменные на пустоту
    if( EmptyCheck($mMain) ) {
        foreach (EmptyCheck($mMain) as $value) {
            echo $value.'<br />';
        }
        echo '<div><a href="/page/main/">Попробовать снова</a></div>';
    } else {
        //good
        $sSql = [
            'resultbattles' => 'INSERT INTO resultbattles(db_UserId, db_Battle, db_DamageOnePlayer, db_DamageTwoPlayer, db_DamageThreePlayer, db_BattleResult, db_BattleDate, db_BattleDateEdit) VALUES(:UserId, :Battle, :DamageOnePlayer, :DamageTwoPlayer, :DamageThreePlayer, :BattleResult, NOW(), :BattleDateEdit)'
        ];
        $mParams = [
            'resultbattles' => [
                'UserId' => (int)$_SESSION['db_UserId'],
                'Battle' => 1,
                'DamageOnePlayer' => $mMain['input_DamagePlayer1'],
                'DamageTwoPlayer' => $mMain['input_DamagePlayer2'],
                'DamageThreePlayer' => $mMain['input_DamagePlayer3'],
                'BattleResult' => $mMain['input_BattleResult'],
                'BattleDateEdit' => NULL
            ]
        ];
        
        $stmtMain = $pdo->prepare($sSql['resultbattles']);
        $stmtMain->execute($mParams['resultbattles']);
        
        if ( $stmtMain ) {
            echo $sMessage[] = 'Успех!';
            echo '<div><a href="/page/main/">Играем дальше</a></div>';
        } else {
            echo $sMessage[] = 'Что-то пошло не так!';
            echo '<div><a href="/page/main/">Исправить</a></div>';
        }
    }
} catch (Exception $exc) {
    //echo $exc->getTraceAsString();
    //echo MyDump($exc);
    echo $sMessage[] = 'Exception: main.php!';
}
