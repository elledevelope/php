<?php


// phpinfo(); // gives info about yout php version 

require './functions.php';

$titre = "Conditions php";


/* if/else/elseif 
>
<
>=
<=
==
===
!=
!==
*/

$user = [
    'nom' => 'Doupet Lucien',
    'email' => 'ldoupe@yaya.com',
    'competance' => ['php', 'react', 'python']
];

// ---Syntaxe_1:
/* $age = 10;
if($age >= 18) {
    echo 'Peut voter';
}
else {
        echo 'Ne peut pas voter!';
    }; */
    
// ---Syntaxe_2:
$age = 10;
if ($age >= 18) :
    echo 'Peut voter';
else :
    echo 'Ne peut pas voter!';
endif;









// require './index.view.php';
