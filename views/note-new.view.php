<?php require 'partials/header.php';

// dbug($users);
?>

<h2>Ajout d'une nouvelle note</h2>



<form method="POST" action="">
    <label for="titre">Titre :</label>
    <input type="text" name="titre" id="titre">

    <label for="content">Contenu :</label>
    <textarea name="content" id="content" cols="30" rows="10"></textarea>

    <label for="user">Auteur :</label>
    <select name="user" id="user">
        <option value="" selected></option>

        <?php foreach ($users as $user) { ?>
            <option value="<?= $user['user_id'] ?>"><?= $user['name'] ?></option>
        <?php } ?>
    </select>


    <input id="btn" type="submit" value="Ajouter">

</form>

<?php require 'partials/footer.php'; ?>