<?php

declare(strict_types=1); //---------Typage de fontions forcée 12.10.23

function dbug($value) {
echo '<pre style="background-color:pink;color:white;overflow:auto;paddind:10px;">';
print_r($value);
// var_dump($value);
echo '</pre>';
};

function dd($value) {
dbug($value);
// die('Script php arrété !!!');
};


//________________________________________________________________________________12.10.2023________________________________:
/* function calcul($a , $b)
{
    // $c = $a + $b;
    // return $c;
    // echo 'Calcul';
    return $a + $b;
} ; */
// echo calcul(10,12);
/////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
/* function calcul($a , $b = 12)
{
    return $a + $b;
} ;
echo calcul(15, 15);
 */


/////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
//Créer une foction qui calcul le prix TCC en lui passant un prix HT et la TVA:
/* function calculPrixTTC($prixHT, $tva)
{
    return $prixHT + ($tva * $prixHT) / 100;
};
echo calculPrixTTC(34,10);
 */
/////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
//Créer une foction qui calcul l'age d'une personne en lui donnant sa date de naissance:
/* function calculAge($anneeNaissance)
{
    $anneeEnCour = date("Y");
    return $anneeEnCour - $anneeNaissance;
};
echo calculAge(1990); */

//////////////------------------------------------------------------Function anonyme:
/* $calcul = function ($nb) {
    return $nb + 1;
};
echo $calcul(25); */


//////////////------------------------------------------------------ Typage de fontions --int(number entier), float (decimail)-- (avant au debut de la page il faut mettre: declare(strict_types=1); ):

/* function calcul(int $a , $b)
{
    return $a + $b;
} ;
echo calcul("2", 5); //echo will give ERROR because int $a forces $a to be a number and "2" is not a number  */

///////
/* function calcul(float  $a , int | float $b) //  pipe symbol |  means "or"
{
    return $a + $b;
} ;
echo calcul(2.5, 5.5);  */

////////////////------------------------------------the `global` keyword:
$x = 5;
$y = 3;
function calcul($xPasseEnParametre) {
    // global $y; //the global keyword is used to declare a variable as a global variable within the current scope. When a variable is declared as global, it can be accessed and modified from both the current scope and any nested function or code blocks within that scope.
    $y = 7;
    return $xPasseEnParametre + $y;
};
echo calcul(5);
dd($y);


?>