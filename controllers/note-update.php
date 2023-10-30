<?php

require 'models/Database.php';


//USER:
$requete = "SELECT user_id,name FROM user";
$users = $connexion->query($requete)->fetchAll();


//NOTE:
if ( !isset($_GET['id']) || !is_numeric($_GET['id']) || empty($_GET['id']) ) :
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

if ( empty($noteUpdate) || $noteUpdate === false ) :
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

    /*     if (strlen($titre) >= 100 || strlen($titre) === 0) :
        $errors[] = 'Titre trop long !!!';
    endif; */

    /*     if (strlen($titre) >= 100 || strlen($titre) === 0) :
        $errors[] = 'Titre trop long !!!';
    endif;

    if (strlen($content) >= 100 || strlen($content) === 0) :
        $errors[] = 'Contenue trop long bouuuu !!!';
    endif; */

    /*     if (strlen($titre) >= 100 || strlen($titre) === 0 || strlen($content) >= 1000 || strlen($content) === 0) :
        $errors = 'Le titre ou le contenue de votre note est incorrect !!!';
    endif; */

    if (empty($errors)) :
        $noteNew = $connexion->prepare('INSERT INTO note (titre,content,user_id) VALUES (:titre , :content , :user_id)');
        $noteNew->bindValue(':titre', $titre, PDO::PARAM_STR); //PDO::PARAM_STR - precise what we whan it in string format
        $noteNew->bindValue(':content', $content, PDO::PARAM_STR);
        $noteNew->bindValue(':user_id', $user, PDO::PARAM_STR);
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

include 'views/note-update.view.php';