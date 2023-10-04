<?php

// include './header.php'; == include('./header.php');

// include_once './header.php';

// include './header.php'; and require './header.php'; are the same, but require when there is un error code do not work (good for bases de données)
require './functions.php';
require './header.php';

// echo "<h1>CEPPIC PHP</h1>";


// $variable = 'une variable';
// $Variable = 'Une Variable'; //differet

// concatenated together and passed as a single argument
// echo $variable . $Variable;

// echo $variable . " " . $Variable;
// echo $variable . ' ' . $Variable;


// echo '$variable'; DO NOT USE ' ', they do not unterprate the names of variable
// echo "$variable"; 

// echo "$variable . $Variable";


/* $camelCase = 'une variable en camel case';
$snake_case = 'une variable en snake case';
$PascalCase = 'une variable en pascal case'; */
// $kebab-case  = 'une variable en kebab case'; do not use in php

// $nombre = 45; 
// $nombreDecimale = 10.5;
// $booleen = false;

// print_r($nombre);        // like console.log
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


//ARRAY :
$tableau = array(); //old syntaxe
$tableau = [
    'groupe', 
    23, 
    4.5, 
    false,
    [1,2,3, true]
];

dbug($tableau);
dd($tableau); // dd = dbug and die 
// die('Script php arrété !!!');
dbug($titre);






?>

<!-- <h3><?//=$titre ?></h3> -->





<?php
require './footer.php';
//  echo "$titre";
?>