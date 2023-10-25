<?php require 'partials/header.php';  ?>

<h2>Ajout d'une nouvelle note</h2>

<form action="">
    <label for="titre">Titre :</label>
    <input type="text" name="titre" id="titre">

    <label for="content">Contenu :</label>
    <textarea name="content" id="content" cols="30" rows="10"></textarea>

    <label for="user">Auteur :</label>
    <select name="user" id="user">
        <option value="" selected></option>
        <option value="1">John Doe</option>
        <option value="2">Jane Doe</option>
    </select>


    <input id="btn" type="submit" value="Ajouter">

</form>

<?php require 'partials/footer.php';  ?>