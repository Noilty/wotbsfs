<?php
require_once '../../../require-one.php';

$_SESSION = [];

//if( isset($_COOKIE['session_name']) ) {
//    setcookie(session_name(), '', time() - 3600, '/');
//}

session_destroy();

header('Location: /page/login/');