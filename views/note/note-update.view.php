<?php require 'views/partials/header.php';
// dbug($users);
?>

<h2>Modifier cette note</h2>

<?php dbug($noteUpdate); ?>


<section class="container">
    <form method="POST" enctype="multipart/form-data"> <!--------------  enctype="multipart/form-data" for IMG UPLOAD------------------->
        <!------------------------------------------------------------- TITRE --------------------------------------------------------------->
        <label class="black-text" for="titre">Titre :</label>
        <div class="input-field white">
            <input type="text" name="titre" id="titre" value="<?= isset($_POST['titre']) ? $_POST['titre'] : $noteUpdate['titre'] ?>">
        </div>

        <!-------------------------------------------------------- CONTENUE ---------------------------------------------------------------->
        <label class="black-text" for="content">Contenu :</label>
        <div class="input-field white">
            <textarea name="content" id="content" cols="30" rows="10"><?= isset($_POST['content']) ? $_POST['content'] :  $noteUpdate['content']  ?></textarea>
        </div>


        <!-------------------------------------------------------- AUTHEUR ---------------------------------------------------------------->
        <label class="black-text" for="user">Auteur :</label>
        <select class="browser-default" name="user" id="user">

            <option value=""></option>

            <?php foreach ($users as $user) : ?>
                <option value="<?= $user['user_id'] ?>" <?php
                                                        if (isset($_POST['user'])) {
                                                            $user_id = (int) $_POST['user'];
                                                        } else {
                                                            $user_id = (int) $noteUpdate['user_id'];
                                                        };


                                                        if (isset($user_id) && ($user_id === $user['user_id'])) : ?> selected <?php endif; ?>>

                    <?= $user['name'] ?>

                </option>
            <?php endforeach; ?>
        </select>

        <!---------------------------------------------------------- IMG UPLOAD ------------------------------------------------------------->
        <?php if ($noteUpdate['image']) : ?>
            <p><img src="uploads/<?= $noteUpdate['image'] ?>" alt=""></p>
        <?php endif; ?>
        <label class="black-text"  for="image">Image:</label> <br>
        <input type="file" name="image" id="image">


        <!------------------------------------------------------- SUBMIT BTN ---------------------------------------------------------------->
        <br>
        <br>
        <div>
            <input class="btn brand" id="btn" type="submit" value="Modifier">
        </div>
        <br>
        <br>

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