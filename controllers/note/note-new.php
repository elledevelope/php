<?php
require 'models/Database.php';

// Fetch user data
$requete = "SELECT user_id,name FROM user";
$users = $connexion->query($requete)->fetchAll();

if ($_SERVER['REQUEST_METHOD'] === 'POST') :
    $errors = [];
    //$errors = '';


    // Sanitize and validate user inputs
    $titre = trim(filter_var($_POST['titre'], FILTER_SANITIZE_FULL_SPECIAL_CHARS));
    $content = trim(filter_var($_POST['content'], FILTER_SANITIZE_FULL_SPECIAL_CHARS));
    $user = trim(filter_var($_POST['user'], FILTER_SANITIZE_NUMBER_INT));
    $image = trim(filter_var($_FILES["image"]["name"], FILTER_SANITIZE_NUMBER_INT));


    //Validate input lengths and other conditions
    if (strlen($titre) === 0) :
        $errors[] = 'Titre vide !!!';
    endif;

    if (strlen($titre) >= 100) :
        $errors[] = 'Titre trop long !!!';
    endif;

    if (strlen($content) === 0) :
        $errors[] = 'Contenu vide !!!';
    endif;

    if (strlen($content) >= 1000) :
        $errors[] = 'Contenu supérieur à 1000 caratéres !!!';
    endif;

    if (empty($_POST['user'])) :
        $errors[] = 'Aucun auteur séléctionné!!!';
    endif;

    // -------------------------------------------------IMAGE

    $target_dir = "uploads/";
    $target_file = $target_dir . basename($_FILES["image"]["name"]);
    $uploadOk = 1;
    $imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));

    // Check if $uploadOk is set to 0 by an error
    if ($uploadOk == 0) {
        echo "Sorry, your file was not uploaded.";
        // Handle the error as needed
    } else {
        if (move_uploaded_file($_FILES["image"]["tmp_name"], $target_file)) {
            echo "The file " . htmlspecialchars(basename($_FILES["image"]["name"])) . " has been uploaded.";

            // Store the file name in the database
            $image = htmlspecialchars(basename($_FILES["image"]["name"]));
        } else {
            echo "Sorry, there was an error uploading your file.";
            // Handle the error as needed
        };
    };

//Mehdi:
// $target_dir = "uploads/";
// $target_file = $target_dir . basename($_FILES["image"]["name"]);
// if (move_upload_file($_FILES["image"]["tmp_name"], $uploadfile)):
//     $imageInsert = basename($_FILES["image"]["name"]);
// else:
//     $errors [] = "Erreur d'upload de votre image!";
// endif;


    if (empty($errors)) :
        $noteNew = $connexion->prepare('INSERT INTO note (titre,content,user_id,image) VALUES (:titre, :content, :user_id, :image)');

        $noteNew->bindValue(':titre', $titre, PDO::PARAM_STR); //PDO::PARAM_STR - precise what we whan it in string format
        $noteNew->bindValue(':content', $content, PDO::PARAM_STR);
        // $noteNew->bindValue(':user_id', $user, PDO::PARAM_STR);
        $noteNew->bindValue(':user_id', $user, PDO::PARAM_INT);
        $noteNew->bindParam(':image', $image, PDO::PARAM_STR);

        $noteNew->execute();


        $lastInsertId = $connexion->lastInsertId();
        if ($lastInsertId) :
            header('Location: /notes');
            exit();
        else :
            abort();
        endif;
    endif;
endif;

include 'views/note/note-new.view.php';
