<?php

require 'models/Database.php';

$notes = $connexion->query('SELECT * FROM note')->fetchAll(PDO::FETCH_ASSOC); //query is requette, fetchAll is to get all info from table note
//fetchAll(PDO::FETCH_ASSOC) is to make array associative 
// dd($notes);


require 'views/notes.view.php';
