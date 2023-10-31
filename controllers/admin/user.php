<?php

require 'models/Database.php';

if (!isset($_GET['id']) || !is_numeric($_GET['id'])) :
  abort();
endif;

$id = $_GET['id'];

$user = $connexion->prepare('SELECT * FROM `user` AS u
INNER JOIN note AS n 
ON n.user_id = u.user_id
WHERE u.id= :id'); 

$user->bindParam(':id',$id);
$user->execute();
$user = $user->fetch();
// dd($user);
 

require 'views/admin/user.view.php';
