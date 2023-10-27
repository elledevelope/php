<?php


// phpinfo(); // gives info about yout php version 

require './functions.php';

$titre = "Conditions php";


/* ------------------------------------------------if/else/elseif :
>
<
>=
<=
==   //comparaison d'égalité en valeur //loose equal
===  //comparaison d'égalité en valeur et en type //strict equal
!=  //not equal 
!==
*/

/* $user = [
    'nom' => 'Doupet Lucien',
    'email' => 'ldoupe@yaya.com',
    'competence' => ['php', 'react', 'python']
]; */

// --------------------------------------------------Syntaxe_1:
/* $age = 10;
if($age >= 18) {
    echo 'Peut voter';
}
else {
        echo 'Ne peut pas voter!';
    }; */

// --------------------------------------------------Syntaxe_2:
/* $age = 10;
if ($age >= 18) :
    echo 'Peut voter';
else :
    echo 'Ne peut pas voter!';
endif; */

// --------------------------------------------------Syntaxe_3:
/* $age = 10;
echo ($age >= 18) ? 'Peut voter' : 'Ne peut pas voter'; */

////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
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

////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
// $a = 20;
// $b = '5';

/* if($b !== 3): //------  != operator is used to compare two values for inequality  ---- !== operator is used for strict inequality comparison. It checks whether two values are not only different in value but also of different types. I
    echo 'La varuable $b n\'est pas égale à 3';
endif;
 */

//  if($b == 5): //------  
//     echo 'La varuable $b n\'est pas égale à 5';
// endif;



///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
//________________________________________________________________12.10.2023______________________:

//---------------------Syntaxe alternative-1:
/* $vrai = false;
$vrai = 0;
if($vrai):
    echo 'Vrai';
else:
    echo 'Faux';
endif; */
//---------------------Syntaxe alternative-2:
/*$vrai = false; 
if($vrai) {
    echo 'Vrai';
} else {
    echo 'Faux';
}; */
//---------------------Syntaxe alternative-3:
/* $vrai = false;
echo $vrai ? "Vrai" : 'Faux';
 */

 ///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

/* $vote = 7500;
dbug($vote);
$votesPrecedents = 1254;
($vote > $votesPrecedents) ? $vote-- : $vote++; //if $vote bigger than $votesPrecedents then $vote is 7500-1 if not $vote 7500+1
dbug($vote); //7499 */



////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
//---------------------------------------Switch case:
$couleur = 'violet';
switch($couleur) {
    case 'red':
        echo 'Your favorite color is red';
        break;
    case 'blue':
        echo 'Your favorite color is bleu';
        break;
    case 'green':
        echo 'Your favorite color is green';
        break;
    default:
    echo 'Your favorite clor not red, not bleu, not green';
};



// require './index.view.php';
