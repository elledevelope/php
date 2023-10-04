<?php


// phpinfo(); // gives info about yout php version 

require './functions.php';

$titre = "Tableaux php";


// ---------------------TABLEAUX INDECSES :
$tab1 = [];

$notes = [12, 14, 6, 10];

$tab1[] = 'Janvier';
$tab1[] = 45;
$tab1[] = true;

array_push($tab1, 'Voiture', 10.5, [45, true, 'Truc']); //add elemets to array

$tabFusion = array_merge($tab1,$notes); //merge 2 arrays


dbug($tabFusion);

dd($tabFusion[5][2]); //shows 2d element in th 5th element


require './index.view.php';
?>