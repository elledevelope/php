<?php

require 'models/Database.php';

// dd($_GET);
$id = $_GET['id'];

$note = $connexion->prepare('SELECT * FROM `note` WHERE id = :id'); //query is requette, fetchAll is to get all info from table note
//fetchAll(PDO::FETCH_ASSOC) is to make array associative 

$note->bindParam(':id',$id);
$note->execute();
$note = $note->fetch(PDO::FETCH_ASSOC);
// dd($note);


require 'views/note.view.php';

?>