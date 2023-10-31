<?php

require 'models/Database.php';

$users = $connexion->query('SELECT * FROM user ORDER BY user_id ASC ')->fetchAll();
// dd($users);


require 'views/admin/users.view.php';
