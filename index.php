<?php
//COOKIE
$value = 'Valeur de test';

// setcookie("TestCookie", $value);
// setcookie("TestCookie", $value, time()+3600);  //3600sec = 1h
setcookie("TestCookie", $value, time()-3600);  // negative time is used to delete cookie

echo $_COOKIE["TestCookie"];


//SESION