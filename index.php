<?php require './functions.php';
$titre = "Formulaire php";

// dd($GLOBALS); //$GLOBALS — Référence toutes les variables disponibles dans un contexte global
//dd($_SERVER);  //$_SERVER — Variables de serveur et d'exécution

// dbug($_GET); //this is Superglobal
// dbug($_POST); //this is Superglobal
?>

<!-----------------------------------------Formulaire PHP: -------------------------------------->
<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulaire</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/water.css@2/out/water.css">
    <link rel="stylesheet" href="./assets/style.css">
</head>

<body>
    <h1>Formulaire</h1>
    <form action="" method="post"> <!-- to use with dbug($_POST)//// or action="./traitment_php.php" -->
        <label for="name">Name:
            <input type="text" name="name" required placeholder="Your Name">
        </label>

        <label for="email">Email:
            <input type="email" name="email">
        </label>

        <label for="comment">Comment :
            <textarea name="comment" id="comment" cols="30" rows="10"></textarea>
        </label>

        <label for="Level"> Level :
            <input id="ls" type="radio" name="level" value="debutant">Débutant
            <input id="ls" type="radio" name="level" value="intermediaire">Intermediaire
            <input id="ls" type="radio" name="level" value="expert">Expert
        </label>

        <label for="competance">Competance :
            PHP <input type="checkbox" name="competance[]" value="php">
            Python <input type="checkbox" name="competance[]" value="Phyton">
            CSS <input type="checkbox" name="competance[]" value="css">
            JS <input type="checkbox" name="competance[]" value="js">

        </label>

        <input type="submit" name="submitted" value="Valider">
    </form>
</body>

</html>



<?php
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
if (isset($_POST['submitted'])) :
    echo "Votre nom est : " . $_POST['name']  . "<br>";
    echo "Votre email est : " . $_POST['email'] . "<br>";
    echo "Votre niveau est : " . $_POST['level'] . "<br>";
    echo "Votre commentaire est : " . $_POST['comment']  . "<br>";
    echo "Vos compétences sont : " . implode(', ', $_POST['competance']);
endif;


// require './index.view.php';
?>