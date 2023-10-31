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

$noteUpdate = $connexion->prepare('SELECT 
n.id,
u.user_id,
n.titre,
n.content,
n.created_at,
u.name
FROM note AS n
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


    if (empty($errors)) :
        //SQL statement for an update operation on a database:
        $noteNewUpdate = $connexion->prepare('UPDATE note SET titre = :titre , content = :content , user_id = :user_id WHERE id = :id');

        $noteNewUpdate->bindValue(':titre', $titre, PDO::PARAM_STR); //PDO::PARAM_STR - precise what we want it in a string format
        $noteNewUpdate->bindValue(':content', $content, PDO::PARAM_STR);
        $noteNewUpdate->bindValue(':user_id', $user, PDO::PARAM_STR);
        $noteNewUpdate->bindValue(':id', $id, PDO::PARAM_STR);
        $noteNewUpdate->execute();

        header('Location: /notes');
        exit();
    endif;
endif;

include 'views/note-update.view.php';
