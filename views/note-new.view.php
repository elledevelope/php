<?php require 'partials/header.php';

// dbug($users);
?>

<h2>Ajout d'une nouvelle note</h2>



<form method="POST">
<label for="titre">Titre :</label>
<input type="text" name="titre" id="titre" value="<?php if(isset($_POST['titre'])) { echo $_POST['titre']; } ?>">
 <!-- required -->

    <label for="content">Contenu :</label>
    <textarea name="content" id="content" cols="30" rows="10"><?= isset($_POST['content']) ? $_POST['content'] : '' ?></textarea> <!--- pre-fill an input field with a value that was previously submitted through a form --->
   

    <label for="user">Auteur :</label>
    <select name="user" id="user"> <!-- Updated name to "user_id" -->

        <option value="" selected></option>

        <?php foreach ($users as $user) { ?>
            <option value="<?= $user['user_id'] ?>" ><?= $user['name'] ?></option>
        <?php }; ?>

    </select>

    <input id="btn" type="submit" value="Ajouter">
</form>



<?php require 'partials/footer.php';

if (isset($errors) && !empty($errors)) : //isset — Determine if a variable is declared and is different than null
    foreach ($errors as $error) :
?>
        <p class="error"><?= $error ?></p>
        <!--<p class="error"><? //=$errors?></p>-->
<?php
    endforeach;
endif;
?>