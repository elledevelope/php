<?php
// require './fonctions.php';

// dd($_SERVER);
// dd($_SERVER['REQUEST_URI']);
// dd(parse_url($_SERVER['REQUEST_URI'])['path']);

$uri = parse_url($_SERVER['REQUEST_URI'])['path'];

$routes = [
    '/php' => 'contolleurs/index.php',
    '/contact' => 'contolleurs/contact.php',
    '/notes' => 'contolleurs/notes.php',
];