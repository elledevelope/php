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

// $urlToControllers = match($uriPath) {
//     '/' => 'controllers/index.php',
//     '/contact' => 'controllers/contact.php',
//     default =>'views/404.php',
// };
// // dbug($urlToControllers);

// require $urlToControllers;
// exit();

function urlToControllers($uriPath, $routes)
{
    if( array_key_exists($uriPath, $routes) ) :
        require $routes[$uriPath];
    else:
        abort();
    endif;
};

function abort()
{
require 'views/404.php';
exit();
};

urlToControllers($uriPath, $routes);
