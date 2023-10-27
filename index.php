<?php

// include './header.php'; == include('./header.php');

// include_once './header.php';

// include './header.php'; and require './header.php'; are the same, but require when there is un error code do not work (good for bases de données)
require './functions.php';
require './header.php';

// echo "<h1>CEPPIC PHP</h1>";


//------------------------------VARIABLES :

// $variable = 'une variable';
// $Variable = 'Une Variable'; //differet

// concatenated together and passed as a single argument :
// echo $variable . $Variable;

// echo $variable . " " . $Variable;
// echo $variable . ' ' . $Variable;


// echo '$variable'; DO NOT USE ' ', they do not interpret the names of variable
// echo "$variable"; 

// echo "$variable . $Variable";


//------------------------------CASES :

/* $camelCase = 'une variable en camel case';
$snake_case = 'une variable en snake case';
$PascalCase = 'une variable en pascal case'; */
// $kebab-case  = 'une variable en kebab case'; do not use in php


//------------------------------TYPES :

// $nombre = 45; 
// $nombreDecimale = 10.5;
// $booleen = false;

//------------------------------PRINT_T AND VAR_DUMP :

// print_r($nombre);        // like console.log  //print_redeable 
// var_dump($nombre);       //like console.dir (gives more info: type, ect)
// var_dump($nombreDecimale);
// var_dump($booleen);
// var_dump($variable);



// $fruit1 = 'pomme';
// $fruit2 = 'banane';
// var_dump($fruit1);

/* echo "<p>$fruit1" . "<br>" . "$fruit2</p>";
echo "<p>$fruit1" . "<br" . "$fruit2</p>";
echo '<p>' . $fruit1 . '<br>' . $fruit2 . '</p>'; */


// Aujourd'hui il fait beau
/* echo "Aujourd'hui il fait beau";
echo 'Aujourd\'hui il fait beau';  */  // AltGr8 \


/* $resultat = ''; 
$resultat .= '<h1>';
$resultat .= 'Cours PHP';
$resultat .= '</h1>';
echo "$resultat";
 */

//  echo "$titre";


//------------------------------ARRAY :
$tableau = array(); //old syntaxe
$tableau = [
    'groupe', 
    23, 
    4.5, 
    false,
    [1,2,3, true]
];

// dbug($tableau);
// dd($tableau); // dd = dbug and die 
// die('Script php arrété !!!');
// dbug($titre);



//------------------------------CONSTANT :
define('USER', 'Jon Doe'); //constant can be string
define('NOTES', [12, 16, 2, 6]); //constant can be array
define('ONLINE', false); //constant can be booleen
define('AGE', 32); //constant can be number

// echo USER;
dd(AGE);





?>

<!-- <h3><?//=$titre ?></h3> -->





<?php
require './footer.php';
//  echo "$titre";
?>
