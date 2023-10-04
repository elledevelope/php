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
**
%

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


$i = 0;
$i++; // $i = $i + 1;  // $i += 1;   --all the same
dd($i);


require './index.view.php';
?>