<?php
require 'config/routes.php';

$uriPath = parse_url($_SERVER['REQUEST_URI'])['path'];
//dd($uri);



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

function abort($code=404)
{
http_response_code($code);
require "views/$code.php";
exit();
};

urlToControllers($uriPath, $routes);