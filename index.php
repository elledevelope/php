<?php


// phpinfo(); // gives info about yout php version 

require './functions.php';

$titre = "Tableaux php";


//////////////////////////////////////////// ---------------------TABLEAUX INDECXES (Index Array):
/* $tab1 = [];
$notes = [12, 14, 6, 10];

$tab1[] = 'Janvier';
$tab1[] = 45;
$tab1[] = true;

array_push($tab1, 'Voiture', 10.5, [45, true, 'Truc']); ////////////--------------------------add elemets to array

$tabFusion = array_merge($tab1,$notes); //////////////-----------------------------------------merge 2 arrays

dbug($tabFusion); */

// dd($tabFusion[5][2]); /////////////////////--------------------------------------------------shows 2d element in th 5th element



///////////////////////////////////////////// ---------------------TABLEAUX ASSOCIATIFS (Associative Array) :

$fruits = [
    'banane' => 'jaune',
    'pomme' => 'rouge',
    'kiwi' => 'vert'
];
// dd($fruits['pomme']);  //-------------- call valeur (rouge) of a clé (pomme)  in an array

/* $fruits['poire'] ='vert'; ///////////--------------------------------------------------------added new key/value to an array
dd($fruit); */


/* $chaine = implode(",",$fruits); /////--------------IMPLODE: affiche les valeurs of tableaux and you choose separateur, in this case is ","
// dd($chaine);
$fruits2 = explode(",", $chaine);  ////---------------EXPLODE is the opposide of IMPLODE 
dd($fruits2);
 */


///////////////////////////////////////////////////-----Trie un tableau----//////////////////////////////////////////////////////////////////
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

////////////////////////////////////------------------Enonce-1 CEPPIC---------------------/////////////////////////////////////////////////
//Ecrire le mot CEPPIC avec les lettres du tableau $tab :
/* $tab = [];
$tab[] = ['A', 'B', 'C'];
$tab[] = ['Q', 'R', 'T'];
$tab[] = ['E', 'U', 'P', 'I'];
dbug($tab);
dd($tab[0][2] . $tab[2][0] . $tab[2][2] . $tab[2][2] . $tab[2][3] . $tab[0][2]); //resolution 1
/* $ceppic = $tab[0][2] . $tab[2][0] . $tab[2][2] . $tab[2][2] . $tab[2][3] . $tab[0][2];  //resolution 2
echo $ceppic; */


////////////////////////////////////------------------Enonce-2---------------------/////////////////////////////////////////////////
// Afficher les phrases suivantes :
//Le nom de Lucie est Dupond.
//L'email de Michel MOURAD est moumi@caramail.com.
/* $person1 = [
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
 */


//////////////////////////////////////////////----------------json-----------------/////////////////////////////////////////////////////
//json_encode — Returns the JSON representation of a value :
/* $jsonPeople =json_encode($people);
dd($jsonPeople); */

$jsonPerson = '{
    "nom" : "Pontpasneuf",
    "prenom" : "Albert",
    "email" : "pontal@gmail.com",
    "couleur" : ["rouge", "vert", "jaune"],
    "image" : "https://ximg.es/128x128/000/fff"
}';

$jsonPersonArrayPhp = json_decode($jsonPerson, true);
dbug($jsonPersonArrayPhp);
////////////////////////////////////------------------Enonce-3 Pokemon---------------------/////////////////////////////////////////////////
//Afficher une card pour cette personne

//////////////////////////================ AIP EMPLOYEES: 
$urlApiEmployees = 'https://dummy.restapiexample.com/api/v1/employees';
$jsonApiEmployees = file_get_contents($urlApiEmployees);
dd($jsonApiEmployees);


//////////////////////////================ AIP POKEMON: 
$urlApiPokemon = 'https://pokeapi.co/api/v2/pokemon/ditto';
$jsonApiPokemon = file_get_contents($urlApiPokemon);
$jsonApiArrayPokemon = json_decode($jsonApiPokemon, true);
//dd($jsonApiArrayPokemon['abilities'][0]['ability']['name']);  //----------------------------shows selected item in api array
dd($jsonApiArrayPokemon);
dd($jsonApiArrayPokemon['sprites']['back_default']); //img


/* function getFrontSprite($pokemon){
    $jsonAPI = file_get_contents("https://pokeapi.co/api/v2/pokemon/" . $pokemon);
    $jsonAPIL = json_decode($jsonAPI,true);
    echo "<img src=" . $jsonAPIL["sprites"]["versions"]["generation-v"]["black-white"]["front_default"] . '>';
} */


?>

<!-- <figure>
    <img src=" //$jsonPersonArrayPhp['image']?>" alt="">
        <figurecaption>
            <ul>
                <li>  //$jsonPersonArrayPhp['prenom']?>  //$jsonPersonArrayPhp['nom']?> </li>
                <li> //$jsonPersonArrayPhp['email']?></li>
            </ul>
        </figurecaption>
    </img>
</figure>
 -->

<!-- <img src="" alt="">  -->



<?php
// require './index.view.php';
?>