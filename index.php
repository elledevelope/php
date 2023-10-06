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

$age = 10;
if($age >= 18) {
    echo 'Peut voter';
};
// Another syntaxe:
$age = 10;
if($age >= 18) :
    echo 'Peut voter';
endif;









// require './index.view.php';
