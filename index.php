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

dbug($planetes);

foreach($planetes as $planete) {
    echo ucwords("$planete<br>");  // --- ucwords  ---  is to capitalizer 1 letter of a word
    //echo $planete . <br>;  - is the same as the upper line, two different syntaxe 

};




?>





<?php
// require './index.view.php';
?>

