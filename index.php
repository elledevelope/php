<?php require './functions.php';
$titre = "Formulaire php";

// dd($GLOBALS); //$GLOBALS — Référence toutes les variables disponibles dans un contexte global
//dd($_SERVER);  //$_SERVER — Variables de serveur et d'exécution

// dbug($_GET) //this is Superglobal
// dbug($_POST) //this is Superglobal
?>

<!-----------------------------------------Formulaire PHP: -------------------------------------->
<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulaire</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/water.css@2/out/water.css">
</head>

<body>
    <h1>Formulaire</h1>
    <form action="./traitment_php.php" method="post"> <!-- to use with dbug($_POST) -->
        <label for="name">Name:
        <input type="text" name="name" required placeholder="Your Name">
        </label>

        <label for="email">Email:
        <input type="email" name="email">
        </label>

        <label for="comment">Comment :
        <textarea name="comment" id = "comment" cols = "30" rows ="10"></textarea>
        </label>

        <input type="submit" value="Valider">
    </form>
</body>

</html>



<?php
// require './index.view.php';
?>