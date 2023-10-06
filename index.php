<?php


// phpinfo(); // gives info about yout php version 

require './functions.php';

$titre = "Boucles php";


$planetes = ['mars', 'terre', 'uranus', 'venus', 'jupiter', 'mercure'];  //=> TABLEAU INDECXE

$planetes2 = [                      //=>TABLEAU ASSOCIATIF
    'm' => 'mars',
    't' => 'terre',
    'u' => 'uranus',
    'v' => 'venus',
    'j' => 'jupiter',
    'm' => 'mercure'
];


require './index.view.php';
?>

