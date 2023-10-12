<?php require './functions.php';
$titre = "Formulaire php";


// dbug($_GET);
// dbug($_POST);
dbug($_REQUEST);

dbug(htmlspecialchars($_GET['name'])); // htmlspecialchars — Convert special characters to HTML entities


/* -------------------EXERCICE  :   
    Afficher des phrases avec les informations du formulaire:
    Votre nom est :
    Votre email est :
    Vos Competances sont : , ,  */

/* 
//-------------------SOLUTION_1  :  
    $nom = $_POST['name'];
    $email = $_POST['email'];
    $competences = $_POST['competance'];   
    $niveau = $_POST['level'];
    echo "Votre nom est : " . $nom . "<br>";
    echo "Votre email est : " . $email . "<br>";
    echo "Votre niveau est : " . $niveau . "<br>";
    echo "Vos compétences sont : " . implode(', ', $competences); */


//-------------------SOLUTION_1  :  
if (isset($_POST['submitted'])) :  // this can be replaces with -> if ($SERVER[$REQUEST_METHOD] !=== 'POST') :
    echo "Votre nom est : <strong> " . $_POST['name']  . "</strong><br>";
    echo "Votre email est : <strong> " . $_POST['email'] . "</strong><br>";
    echo "Votre niveau est : <strong> " . $_POST['level'] . "</strong><br>";
    echo "Votre commentaire est : <strong> " . $_POST['comment']  . "</strong><br>";
    echo "Vos compétences sont : <strong> " . implode(', ', $_POST['competance']) . "</strong><br>";
// else:
//     exit('Validation echoué')
endif;
