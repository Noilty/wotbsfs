<?php

$db = [
    'driver' => 'mysql',
    'host' => 'localhost',
    'name' => 'wotbsfs',
    'user' => 'root',
    'pass' => '',
    'charset' => 'utf8',
    'options' => [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION]
];

try {
    $pdo = new PDO("$db[driver]:host=$db[host];dbname=$db[name];charset=$db[charset]",$db[user],$db[pass],$db[options]);
} catch (PDOException $ex) {
    die('No connect to MySQL');
}

/*
 * $result = $pdo->querty('SELECT * FROM movies');
 * $row = $result->fetch(PDO::FETCH_ASSOC);
 */

/*
 * PDO::FETCH_NUM   - возвращает обычный пронумерованный массив
 + PDO::FETCH_ASSOC - возвращает ассоциативный массив с названиями столбцов в виде ключей
 * PDO::FETCH_BOTH  - возвращает пронумерованный и ассоциативный массив рдновременно (параметр по умолчанию)
 + PDO::FETCH_OBJ   - возвращает строку как объект с именами свойств, которые соответствуют именам столбцов
 */

/*
 * Подготовка вырожений (защита от SQL инъекций)
 */

#PDO::prepare — Подготавливает запрос к выполнению и возвращает связанный с этим запросом объект
#PDOStatement::execute — Запускает подготовленный запрос на выполнение

#Именованные плейсхолдеры
//$sql = 'SELECT title FROM movies WHERE duration = :duration';
//$stmt = $pdo->prepare($sql);
//
//$stmt->execute( [':duration' => '141'] );
//$rows = $stmt->fetchAll(PDO::FETCH_ASSOC);

#Позиционные плейсхолдеры (строгий последовательный порядок)
//$sql = 'SELECT title FROM movies WHERE duration = ?';
//$stmt = $pdo->prepare($sql);
//
//$stmt->execute( ['141'] );
//$rows = $stmt->fetchAll(PDO::FETCH_ASSOC);

/*
 * Межсайтовый скриптинг xss (INPUT)
 */

#trim() - Удаляет пробелы из начала и конца строки
#htmlentities() - Преобразует символы в соответствующие HTML сущности

//$$user_input = '<script>some magic here</script>';
//$safe_input = htmlentities($user_input);