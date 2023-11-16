<?php
session_start();

//deconnextion
$_SESSION = [];
session_unset(); 
session_destroy();

setcookie('PHPESSID', '', -1);

header('Location: session.php');
die();