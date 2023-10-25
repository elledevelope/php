<?php require 'partials/header.php';  ?>

<h2>Ajout d'une nouvelle note</h2>

<form action="">
    <label for="titre">Titre :</label>
    <input type="text" name="titre" id="titre">

    <label for="content">Contenu :</label>
    <textarea name="content" id="content" cols="30" rows="10"></textarea>
    
    <input type="submit" value="Ajouter">
</form>

<?php require 'partials/footer.php';  ?>