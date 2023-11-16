<?php

require 'models/Database.php';
if (isset($_SESSION['isLogged']) && isset($_SESSION['userId'])) :

    $notes = $connexion->query('SELECT * FROM note AS n
INNER JOIN user AS u
ON n.user_id = u.user_id
WHERE u.status = 1 AND u.role = `role_user` AND u.user_id = :userid
ORDER BY id DESC');
    $notes->bindValue(':userid', $_SESSION['userId'], PDO::PARAM_STR);
    $notes->bindValue(':password', $password, PDO::PARAM_STR);
    $notes->execute();
    $notes = $notes->fetchAll();
else :
    header('Location: /');
    die();
endif;

// $notes = $connexion->query('SELECT * FROM note ORDER BY id DESC')->fetchAll(); 
// dd($notes);

require 'views/note/notes.view.php';
