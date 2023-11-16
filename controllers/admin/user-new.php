<?php
require 'models/Database.php';
session_start();

// Fetch user data
$requete = "SELECT * FROM `user`";
$users = $connexion->query($requete)->fetchAll();

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $name = $_POST['name'];
    $email = $_POST['email'];

    $errors = [];


    // Sanitize   
    $name = trim(filter_var($_POST['name'], FILTER_SANITIZE_FULL_SPECIAL_CHARS));
    $email = trim(filter_var($_POST['email'], FILTER_SANITIZE_FULL_SPECIAL_CHARS));

    //errors    
    if (strlen($email) === 0) :
        $errors[] = 'Contenu vide !!!';
    endif;

    if (strlen($email) >= 1000) :
        $errors[] = 'Contenu supérieur à 1000 caratéres !!!';
    endif;

    if (empty($_POST['name'])) :
        $errors[] = 'Aucun auteur séléctionné!!!';
    endif;

    if (empty($errors)) {
        $userNew = $connexion->prepare('INSERT INTO `user`(`name`, `email`) VALUES (:name, :email)');
        $userNew->bindValue(':name', $name, PDO::PARAM_STR);
        $userNew->bindValue(':email', $email, PDO::PARAM_STR);
        $userNew->execute();

        $lastInsertId = $connexion->lastInsertId();
        if ($lastInsertId) {
            // Redirect to a success page 
            header('Location: /');
            exit();
        } else {
            // Handle insert failure
            echo "Insertion failed.";
        };
    };
};


include 'views/admin/user-new.view.php';
