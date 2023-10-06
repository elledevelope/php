<?php


// phpinfo(); // gives info about yout php version 

require './functions.php';

$titre = "Boucles (loops) php";


$planetes = ['mars', 'terre', 'uranus', 'venus', 'jupiter', 'mercure'];  //=> TABLEAU INDECXE (Indexed Array)

$planetes2 = [                      //=>TABLEAU ASSOCIATIF (Associative Array)
    'm' => 'mars',
    't' => 'terre',
    'u' => 'uranus',
    'v' => 'venus',
    'j' => 'jupiter',
    'm' => 'mercure'
];


require './index.view.php';
?>

