<?php
require './functions.php';

// dd($_SERVER['REQUEST_URI']);


//parse_url — Analyse une URL et retourne ses composants  https://www.php.net/manual/fr/function.parse-url.php :
// dd(parse_url($_SERVER['REQUEST_URI'])['path']);
$uri = parse_url($_SERVER['REQUEST_URI'])['path'];
dd($uri);

if ($uri === '/php/') :
    header('./php/index.php');
    die();
    echo 'Je suis à la racine de mon dossier de travail ';
elseif ($uri == '/php/contact') :
echo 'contact.php';
endif;
