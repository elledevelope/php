<?php


// phpinfo(); // gives info about yout php version 

require './functions.php';

$titre = 'Operateurs PHP';

$x = 4;
$y = 2;
$z = 5;


/* 
---------------------------OPERATEURS :
+
-
*
/
** возведение в степень
% modulo остаток от деления

 */


//  $calcul = $x + $y;
//  dd($calcul);

//  $calcul = $x - $y;
//  dd($calcul);

//  $calcul = $x * $y;
//  dd($calcul);

//  $calcul = $x / $y;
//  dd($calcul);

// $calcul = $x ** $y;  // cube
// dd($calcul);

// $calcul = $x % $y;  // modulo = le reste de la divistion 
// dd($calcul);

//  $calcul = ($x + $z) * $y;
// dd($calcul);

// $x +=5;
// dd($x);

// $x **=5; // $x + 5
// dd($x);


// $i = 0;
// $i++; // $i = $i + 1;  // $i += 1;   --all the same
// dd($i);


// $anneeDeNaissance = 1990;
// $age = date("Y") - $anneeDeNaissance;
// dd(date("Y")); //to show the year of a now
// dd($age);


//Calcule le prix TTC
$prixHT = 34;
$tva = 10;

$prixTTC = $prixHT + ($tva * $prixHT) / 100;
dd($prixTTC);

require './index.view.php';
?>
