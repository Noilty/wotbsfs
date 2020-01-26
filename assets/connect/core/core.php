<?php

/*main.php*/
$sql_mainTableDateBase = 'SELECT * FROM resultbattles WHERE db_UserId = ' . $_SESSION['db_UserId'];
$row_mainTableDateBase = $pdo->query($sql_mainTableDateBase)->fetchAll(PDO::FETCH_ASSOC);

//MyDump($row_mainTableDateBase);