<?php

require 'models/Database.php';


//USER:
$requete = "SELECT user_id,name FROM user";
$users = $connexion->query($requete)->fetchAll();


//NOTE:
if (!isset($_GET['id']) || !is_numeric($_GET['id']) || empty($_GET['id'])) :
    abort();
endif;

$id = $_GET['id'];

/* $noteUpdate = $connexion->prepare('SELECT 
n.id,
u.user_id,
n.titre,
n.content,
n.created_at,
n.image
u.name
FROM note AS n
INNER JOIN user AS u 
ON n.user_id = u.user_id
WHERE n.id = :id'); */

$noteUpdate = $connexion->prepare('SELECT * FROM note AS n
INNER JOIN user AS u 
ON n.user_id = u.user_id
WHERE n.id = :id');

$noteUpdate->bindParam(':id', $id);

$noteUpdate->execute();

$noteUpdate = $noteUpdate->fetch();

if (empty($noteUpdate) || $noteUpdate === false) :
    abort();
endif;
///////////////////////////////////////////////


//VALIDATION DU FORMULER:
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


    /*     if (empty($errors)) :
        //SQL statement for an update operation on a database:
        $noteNewUpdate = $connexion->prepare('UPDATE note SET titre = :titre , content = :content , user_id = :user_id, image = :image WHERE id = :id');

        $noteNewUpdate->bindValue(':titre', $titre, PDO::PARAM_STR); //PDO::PARAM_STR - precise what we want it in a string format
        $noteNewUpdate->bindValue(':content', $content, PDO::PARAM_STR);
        // $noteNewUpdate->bindValue(':user_id', $user, PDO::PARAM_STR);
        $noteNewUpdate->bindValue(':user_id', $user, PDO::PARAM_INT);
        $noteNewUpdate->bindValue(':id', $id, PDO::PARAM_STR);

        $noteNewUpdate->bindParam(':image', $image, PDO::PARAM_STR);

        $noteNewUpdate->execute();

        header('Location: /notes');
        exit();
    endif; */



    // Check if a file is provided in the update form
    if (!empty($_FILES["image"]["name"])) {
        // Handle file upload
        $target_dir = "uploads/";
        $target_file = $target_dir . basename($_FILES["image"]["name"]);
        $uploadOk = 1;
        $imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));

        // ... (your existing file upload checks)

        if ($uploadOk != 0) {
            // Move the uploaded file to the target directory
            if (move_uploaded_file($_FILES["image"]["tmp_name"], $target_file)) {
                // Store the new file name in the $image variable
                $image = htmlspecialchars(basename($_FILES["image"]["name"]));
            } else {
                // Handle file upload failure
                echo "Sorry, there was an error uploading your file.";
            };
        };
    };

    if (empty($errors)) {
        // SQL statement for an update operation on the database:
        $noteNewUpdate = $connexion->prepare('UPDATE note SET titre = :titre , content = :content , user_id = :user_id, image = :image WHERE id = :id');

        $noteNewUpdate->bindValue(':titre', $titre, PDO::PARAM_STR);
        $noteNewUpdate->bindValue(':content', $content, PDO::PARAM_STR);
        $noteNewUpdate->bindValue(':user_id', $user, PDO::PARAM_INT);
        $noteNewUpdate->bindValue(':id', $id, PDO::PARAM_STR);

        // If a new image is provided, bind it to the SQL statement
        if (isset($image)) {
            $noteNewUpdate->bindValue(':image', $image, PDO::PARAM_STR);
        } else {
            // If no new image is provided, use the existing image from the database
            $noteNewUpdate->bindValue(':image', $noteUpdate['image'], PDO::PARAM_STR);
        }

        $noteNewUpdate->execute();

        header('Location: /notes');
        exit();
    };
    
endif;


include 'views/note/note-update.view.php';
