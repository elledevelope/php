<?php

require 'models/Database.php';

$users = $connexion->query('SELECT * FROM user')->fetchAll(PDO::FETCH_ASSOC);

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // dd($_POST);

    // $errors = [];
    $errors = '';

    $titre = trim(filter_var($_POST['titre'], FILTER_SANITIZE_FULL_SPECIAL_CHARS));

    $content = trim(filter_var($_POST['content'], FILTER_SANITIZE_FULL_SPECIAL_CHARS));

    $user = trim(filter_var($_POST['user'], FILTER_SANITIZE_NUMBER_INT));

    // Limit number of symbols  & not allows 0 symbol in titre and content:
/*     if (strlen($titre) >= 100 || strlen($titre) === 0) {
        $errors[] = 'Titre trop long!!';
    }
    if (strlen($content) >= 1000) {
        $errors[] = 'Text trop long!!';
    }
 */
    if (strlen($content) >= 1000 || strlen($titre) === 0 || strlen($titre) >= 100 || strlen($content) === 0) {
        $errors = 'Le titre et le text sont incorrects!!';
    };

    if (empty($errors)) {
        $noteNew = $connexion->prepare('INSERT INTO note (titre, content, user_id) VALUES (:titre, :content, :user_id)');
        $noteNew->bindParam(':titre', $_POST['titre']);
        $noteNew->bindParam(':content', $_POST['content']);
        $noteNew->bindParam(':user_id', $_POST['user_id']);
        $noteNew->execute();

        header('Location: /notes');
        exit();
    }
}

require 'views/note-new.view.php';
