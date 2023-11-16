<?php
session_start();

//Like btn deconnecter
$_SESSION = [];
session_unset(); 
session_destroy();

setcookie('PHPESSID', '', -1);

header('Location: session.php');
die();