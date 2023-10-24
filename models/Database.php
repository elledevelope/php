<?php

$user = 'root'; //Database server - User: root@localhost 
$pass = ''; //password of MySQL server (we don't have password)

$connexion = new PDO('mysql:host=localhost;dbname=notes', $user, $pass); //connection PHP to server MySQL via class PDO

// dd($connexion); //checking than connextion to Database MySQL works

$notes = $connexion->query('SELECT * FROM note')->fetchAll(PDO::FETCH_ASSOC); //query is requette, fetchAll is to get all info from table note
//fetchAll(PDO::FETCH_ASSOC) is to make array associative 
// dd($notes);

include 'views/notes.view.php';

?>