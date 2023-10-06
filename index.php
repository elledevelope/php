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


/* $chaine = implode(",",$fruits); // IMPLODE affiche les valeurs of tableaux and you choose separateur, in this case is ","
// dd($chaine);
$fruits2 = explode(",", $chaine);  // EXPLODE is the opposide of IMPLODE 
dd($fruits2);
 */





/* 
sort — Trie un tableau en ordre croissant
asort — Trie un tableau en ordre croissant et conserve l'association des index
rsort  — Sort an array in descending order - r=reverse 
ksort  — Trie un tableau en fonction des clés en ordre croissant
arsort — Sort an array in descending order and maintain index association
krsort  — Trie un tableau en fonction des clés en ordre décroissant
*/
/* $planetes = ['mars', 'terre', 'uranus', 'venus', 'jupiter', 'mercure'];  //=> TABLEAU INDECXE

$planetes2 = [                      //=>TABLEAU ASSOCIATIF
    'm' => 'mars',
    't' => 'terre',
    'u' => 'uranus',
    'v' => 'venus',
    'j' => 'jupiter',
    'm' => 'mercure'
];

// dbug($planetes);
dbug($planetes2);

sort($planetes2);
dd($planetes2); */



//Ecrire le mot CEPPIC avec les lettres du tableau $tab :
/* $tab = [];
$tab[] = ['A', 'B', 'C'];
$tab[] = ['Q', 'R', 'T'];
$tab[] = ['E', 'U', 'P', 'I'];
dbug($tab);
dd($tab[0][2] . $tab[2][0] . $tab[2][2] . $tab[2][2] . $tab[2][3] . $tab[0][2]); //resolution 1
/* $ceppic = $tab[0][2] . $tab[2][0] . $tab[2][2] . $tab[2][2] . $tab[2][3] . $tab[0][2];  //resolution 2
echo $ceppic; */ 


/////////////////////////////////
// Afficher les phrases suivantes :
//Le nom de Lucie est Dupond.
//L'email de Michel MOURAD est moumi@caramail.com.
$person1 = [
    'nom' => 'Carle',
    'prenom' => 'Awa',
    'email' => 'cawa@wahoo.com'
];

$people = [
    $person1,
    [
        'nom' => 'Mourad',
        'prenom' => 'Michel',
        'email' => 'moumi@caramail.com'
    ],
    [
        'nom' => 'Dupond',
        'prenom' => 'Lucie',
        'email' => 'ludo@gimayle.com'
    ]
];
dbug($people);
// unset($people); //destroys the specified variables

dd('le nom de '. $people[2]['prenom'] . ' est ' . $people[2]['nom']);
dd('L\'email de '. $people[1]['prenom'] . ' ' . strtoupper($people[1]['nom']) . ' est ' . $people[1]['email']);


//json_encode — Returns the JSON representation of a value :
$jsonPeople =json_encode($people);




// require './index.view.php';
?>