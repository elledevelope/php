<?php

require 'models/Database.php';

$users = $connexion->query('SELECT * FROM user')->fetchAll(PDO::FETCH_ASSOC);

if($_SERVER['REQUEST_METHOD'] === 'POST') :
    dd($_POST);
endif;


require 'views/note-new.view.php';
