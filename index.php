<?php
require './functions.php';

// dd($_SERVER);
// dd($_SERVER['REQUEST_URI']);
// dd(parse_url($_SERVER['REQUEST_URI'])['path']);

$uriPath = parse_url($_SERVER['REQUEST_URI'])['path'];
//dd($uri);

$routes = [
    '/' => 'controllers/index.php',
    '/contact' => 'controllers/contact.php',
    '/notes' => 'controllers/notes.php',
];
// dbug($routes);

$urlToControllers = match($uriPath) {
    '/' => 'controllers/index.php',
    '/contact' => 'controllers/contact.php',
};
// dbug($urlToControllers);

require $urlToControllers;
exit();