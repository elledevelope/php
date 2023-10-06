<?php


// phpinfo(); // gives info about yout php version 

require './functions.php';

$titre = "Conditions php";


/* if/else/elseif 
>
<
>=
<=
==   //comparaison d'égalité en valeur
===  //comparaison d'égalité en valeur et en type
!=
!==
*/

/* $user = [
    'nom' => 'Doupet Lucien',
    'email' => 'ldoupe@yaya.com',
    'competance' => ['php', 'react', 'python']
]; */

// ---Syntaxe_1:
/* $age = 10;
if($age >= 18) {
    echo 'Peut voter';
}
else {
        echo 'Ne peut pas voter!';
    }; */

// ---Syntaxe_2:
/* $age = 10;
if ($age >= 18) :
    echo 'Peut voter';
else :
    echo 'Ne peut pas voter!';
endif; */


// $heure = 15;
/* $heure = date('H');  //date('H'): serves to obtain the current hour of the day as a string and store it in the variable $heure.
dbug($heure);
if ($heure <= 12) :
    echo 'On est le matin';
elseif ($heure >= 18) :
    echo "On est le soir";
else :
    echo "On est l'apres-midi";
endif; */


$a = 20;
$b = '5';

/* if($b !== 3): //------  != operator is used to compare two values for inequality  ---- !== operator is used for strict inequality comparison. It checks whether two values are not only different in value but also of different types. I
    echo 'La varuable $b n\'est pas égale à 3';
endif;
 */

 if($b == 5): //------  
    echo 'La varuable $b n\'est pas égale à 5';
endif;




// require './index.view.php';
