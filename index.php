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
    <form action="./traitment_php.php" method="get"> <!-- to use with dbug($_POST)//// or action="./traitment_php.php" // method="get" or method="post"-->
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

// require './index.view.php';
?>