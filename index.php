<?php


// phpinfo(); // gives info about yout php version 

require './functions.php';

$titre = "Tableaux php";


// ---------------------TABLEAUX INDECXES :
/* $tab1 = [];
$notes = [12, 14, 6, 10];

$tab1[] = 'Janvier';
$tab1[] = 45;
$tab1[] = true;

array_push($tab1, 'Voiture', 10.5, [45, true, 'Truc']); //add elemets to array

$tabFusion = array_merge($tab1,$notes); //merge 2 arrays


dbug($tabFusion); */

// dd($tabFusion[5][2]); //shows 2d element in th 5th element



// ---------------------TABLEAUX ASSOCIATIFS :

$fruits = [
    'banane' => 'jaune',
    'pomme' => 'rouge',
    'kiwi' => 'vert'
];
// dd($fruits['pomme']);  // == call valeur (rouge) of a clé (pomme)  in a tableaux

/* $fruits['poire'] ='vert'; //added new key/valeur to a tableaux
dd($fruit); */


$chaine = implode(",",$fruits); // IMPLODE affiche les valeurs of tableaux and you choose separateur, in this case is ","
// dd($chaine);
$fruits2 = explode(",", $chaine);  // EXPLODE is the opposide of IMPLODE 
dd($fruits2);



// require './index.view.php';
?>