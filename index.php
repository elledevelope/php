<?php


// phpinfo(); // gives info about yout php version 

require './functions.php';

$titre = "Boucles (loops) php";


/* $planetes = ['mars', 'terre', 'uranus', 'venus', 'jupiter', 'mercure'];  //=> TABLEAU INDECXE (Indexed Array)

$planetes2 = [                      //=>TABLEAU ASSOCIATIF (Associative Array)
    'm' => 'mars',
    't' => 'terre',
    'u' => 'uranus',
    'v' => 'venus',
    'j' => 'jupiter',
    'm' => 'mercure'
]; */

//A//////////////////////------------------Enonce: afficher dans une liste ul toutes les donées de ce user avec foreach:///////////////////
$user = [
    'nom' => 'Doupet Lucien',
    'email' => 'ldoupe@yaya.com',
    'competance' => ['php', 'react', 'python']
];
dbug($user);
foreach($user as $key => $value) :    
    echo $key . ' : ' . $value . '<br>';
endforeach;






require './index.view.php';
