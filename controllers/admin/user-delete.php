<?php

require 'models/Database.php';

/* if(!isset($_GET['id']) || !is_numeric($_GET['id'])) :
    abort();
endif; */

$id = $_GET['id'];

$users = $connexion->prepare('DELETE FROM `user` WHERE user_id = :user_id');

$users->bindParam(':user_id', $id, PDO::PARAM_INT);
$users->execute();


header('Location: //admin/users');
exit();
