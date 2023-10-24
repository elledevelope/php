<?php

$user = 'root'; //Database server - User: root@localhost 
$pass = ''; //password of MySQL server (we don't have password)

$connexion = new PDO('mysql:host=localhost;dbname=notes', $user, $pass); //connection PHP to server MySQL via class PDO

dd($connexion);

?>