<?php require 'views/partials/header.php';

// dbug($users);
?>

<h2>Ajout d'une nouvelle note</h2>


<section style="width:1200px; margin:auto">
    <form method="POST" enctype="multipart/form-data"> <!--------------  enctype="multipart/form-data" for IMG UPLOAD------------------->

        <!------------------------------------------------------------- TITRE --------------------------------------------------------------->
        <label class="black-text" for="titre">Titre :</label>
        <div class="white">
            <input type="text" name="titre" id="titre" value="<?= isset($_POST['titre']) ? $_POST['titre'] : '' ?>">
            <?php //if(isset($_POST['titre'])) { echo $_POST['titre']; } 
            ?>
        </div>

        <!-------------------------------------------------------- CONTENUE ---------------------------------------------------------------->
        <label class="black-text" for="content">Contenu :</label>
        <div class="input-field white">
            <textarea name="content" id="content" cols="30" rows="10"><?= isset($_POST['content']) ? $_POST['content'] : '' ?></textarea>
        </div>

        <!-------------------------------------------------------- AUTHEUR ---------------------------------------------------------------->
        <label class="black-text" for="user">Auteur :</label>
        <select class="browser-default" name="user" id="user">

            <option value=""></option>
            <!------------------------------------------------ Pre-fill: option user -------------------------------------------------->
            <?php foreach ($users as $user) : ?>
                <option value="<?= $user['user_id'] ?>" <?php
                                                        if (isset($_POST['user'])) :
                                                            $user_id = (int) $_POST['user'];
                                                        endif;


                                                        if (isset($_POST['user']) && ($_POST['user'] == $user['user_id'])) : ?> selected <?php endif; ?>>
                    <!--($_POST['user'] == $user['user_id']): This part checks if the value submitted in $_POST['user'] (from the form) is equal to the user_id of the current user in the loop. In other words, it checks if the user's choice matches the current option in the loop.-->
                    <?= $user['name'] ?>
                </option>
            <?php endforeach; ?>
        </select>

        <!---------------------------------------------------------- IMG UPLOAD ------------------------------------------------------------->
        <br>
        <label class="black-text"  for="image">Image:</label> <br>
        <input type="file" name="image" id="image">

        <!------------------------------------------------------- SUBMIT BTN ---------------------------------------------------------------->
        <div style="margin: 30px auto;">
            <input class="btn brand" id="btn" type="submit" value="Ajouter">
        </div>

    </form>
</section>



<?php require 'views/partials/footer.php';




if (isset($errors) && !empty($errors)) : //isset — Determine if a variable is declared and is different than null
    foreach ($errors as $error) :
?>
        <p class="error"><?= $error ?></p>
        <!--<p class="error"><? //=$errors
                                ?></p>-->
<?php
    endforeach;
endif;
?>