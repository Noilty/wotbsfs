<?php
//require_once '../../../require-one.php'; //Подкл. в page/admin

$DATA = $_POST;
$sMessage = [];

try {
    $mSql = [
        'users' => 'SELECT * FROM users',
        'keys' => 'SELECT * FROM `keys`',
        'keys_users' => 'SELECT * FROM keys_users',
        'roles' => 'SELECT * FROM roles',
        'roles_users' => 'SELECT * FROM roles_users'
    ];
    
    //Тянем всех пользователей из таблицы users
    $mAllUsers = $pdo->query($mSql['users'])->fetchAll(PDO::FETCH_ASSOC);
    
    //Тянем все ключи из таблицы keys
    $mAllKeys = $pdo->query($mSql['keys'])->fetchAll(PDO::FETCH_ASSOC);
    
    //Тянем все ключи которые были активированы из таблицы keys_users
    $mAllKeysActivated = $pdo->query($mSql['keys_users'])->fetchAll(PDO::FETCH_ASSOC);
    
    //Тянем все роли из таблицы roles
    $mAllRoles = $pdo->query($mSql['roles'])->fetchAll(PDO::FETCH_ASSOC);
    
    //Тянем все активные роли из таблицы roles_users
    $mAllRolesUsers = $pdo->query($mSql['roles_users'])->fetchAll(PDO::FETCH_ASSOC);
    
} catch (Exception $exc) {
    //echo $exc->getTraceAsString();
    //echo MyDump($exc);
    echo $sMessage[] = 'Exception: auth.php!';
}