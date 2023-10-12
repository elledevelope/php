<?php require './functions.php';
$titre = "Formulaire php";


// dbug($_GET)
// dbug($_POST)
?>


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
        <label for="nom">Nom:
        <input type="text" name="nom" required>
        </label>

        <label for="email">Email:
        <input type="email" name="email">
        </label>
        
        <input type="submit" value="Valider">
    </form>
</body>

</html>



<?php
// require './index.view.php';
?>