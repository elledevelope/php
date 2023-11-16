<?php
session_start();
require 'models/Database.php';


//Traitment de login
if ($_SERVER['REQUEST_METHOD'] === 'POST') :
    $errors = [];

    $email = trim(filter_var($_POST['email'], FILTER_VALIDATE_EMAIL));
    $password = $_POST['password'];

    if (strlen($email) === 0) :
        $errors[] = 'Email vide !!!';
    endif;

    if (strlen($email) >= 50) :
        $errors[] = 'Email trop long !!!';
    endif;

    if (empty($errors)) :
        $loginUser = $connexion->prepare('SELECT * FROM user WHERE email = :email AND password = :password AND status = 1');
        $loginUser->bindValue(':email', $email, PDO::PARAM_STR);
        $loginUser->bindValue(':password', $password, PDO::PARAM_STR);
        $loginUser->execute();
        $loginUser = $loginUser->fetch();

        if (!is_array($loginUser)) :
            $errors[] = 'Email ou password incorrect';
        else :
            //SESSION
            $_SESSION['isLogged'] = true;
            $_SESSION['userId'] = $loginUser['user_id'];

            header('Location: /notes');

        endif;

        dd($loginUser);


    endif;
endif;

require 'views/login.view.php';
