<?php

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
function calculPrixTTC($prixHT, $tva)
{
    return $prixHT + ($tva * $prixHT) / 100;
};
echo calculPrixTTC(34,10);

/////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
//Créer une foction qui calcil l'age d'une personne en lui donnant sa date de naissance:
function calculAge($anneeNaissance)
{
    $anneeEnCour = date("Y");
    return $anneeEnCour - $anneeNaissance;
};
echo calculAge(1990);



?>