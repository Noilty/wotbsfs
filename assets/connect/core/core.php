<?php

/*main.php*/
if ( !empty($_SESSION['db_UserId']) ) {
    $sql_TableDB__resultbattles = 'SELECT * FROM resultbattles WHERE db_UserId = ' . $_SESSION['db_UserId'] . ' ORDER BY db_BattleDate DESC';
    $row_TableDB__resultbattles = $pdo->query($sql_TableDB__resultbattles)->fetchAll(PDO::FETCH_ASSOC);
    unset($sql_TableDB__resultbattles);
    
    $sql_TableDB__settings = 'SELECT * FROM settings WHERE db_UserId = ' . $_SESSION['db_UserId'];
    $row_TableDB__settings = $pdo->query($sql_TableDB__settings)->fetchAll(PDO::FETCH_ASSOC);
    unset($sql_TableDB__settings);

    //$sf = numberBattles($row_TableDB__resultbattles); //СИГРАЛИ БОЕВ
    //$win = numberBattles($request_choice_battle); //ПОБЕДИЛИ
    //$lose = $sf-$win; //ПРОИГРАЛИ
}

//MyDump($row_mainTableDateBase);