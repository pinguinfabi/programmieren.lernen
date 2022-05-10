<?php
include_once 'functions.php';
sec_session_start();

// Delete variables and cookies
$_SESSION = array();

$params = sessions_get_cookie_params();
setcookie(session_name(),
 '', time() - 42000,
 $params["path"],
 $params["domain"],
 $params["secure"],
 $params["httponly"]);

// Destroy Session
session_destroy();

// To login page
header('Location: index.html');

?>