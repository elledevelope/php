<?php

require 'models/Database.php';

$users = $connexion->query('SELECT * FROM user')->fetchAll(PDO::FETCH_ASSOC);

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // dd($_POST);

    $titre = filter_var($_POST['titre'], FILTER_SANITIZE_FULL_SPECIAL_CHARS);

    $content = filter_var($_POST['content'], FILTER_SANITIZE_FULL_SPECIAL_CHARS);

    $user = filter_var($_POST['user'], FILTER_SANITIZE_NUMBER_INT);


    //Limit number of symbols in titre and content:
    if (strlen($titre) >= 100) :
        dd('Titre trop loooooooooooooooooog!!!!!');
    endif;

    if (strlen($content) >= 1000) :
        dd('Text trop loooooooooooooooooog!!!!!');
    endif;






    $noteNew = $connexion->prepare('INSERT INTO note (titre, content, user_id)
    VALUES (:titre, :content, :user_id)');

    $noteNew->bindParam(':titre', $_POST['titre']);
    $noteNew->bindParam(':content', $_POST['content']);
    $noteNew->bindParam(':user_id', $_POST['user_id']);
    $noteNew->execute();

    header('Location: /notes');
    exit();
};

require 'views/note-new.view.php';
