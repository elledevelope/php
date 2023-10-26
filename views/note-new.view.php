<?php require 'partials/header.php';

// dbug($users);
?>

<h2>Ajout d'une nouvelle note</h2>



<form method="POST">
    <label for="titre">Titre :</label>
    <input type="text" name="titre" id="titre" value="<?= isset($_POST['titre']) ? $_POST['titre'] : '' ?>">
    <?php //if(isset($_POST['titre'])) { echo $_POST['titre']; } 
    ?>

    <label for="content">Contenu :</label>
    <textarea name="content" id="content" cols="30" rows="10"><?= isset($_POST['content']) ? $_POST['content'] : '' ?></textarea> <!--- pre-fill an input field with a value that was previously submitted through a form --->
    <?php //if(isset($_POST['content'])) : { echo $_POST['content']; } 
    ?>
    <!---Explanation:     
    --- When the form is initially displayed, the $content variable is set to an empty string because the form has not been submitted yet.
    ---- If the form is submitted, the $content variable is updated with the value of $_POST['content'], which contains the user's content.
    --- The <textarea> in the form is set to display the value of $content, which can be either the user's input if the form was submitted or an empty string if it's the initial form display.
    --- This way, when the form is redisplayed (e.g., due to validation errors), the previously submitted content is shown in the <textarea>, allowing the user to edit or resubmit it without losing their input.  --->


    <label for="user">Auteur :</label>
    <select name="user" id="user">

        <option value=""></option>

        <!-------------------Pre-fill: option user------------------->
        <?php foreach ($users as $user) : ?>
            <option value="<?= $user['user_id'] ?>" 

            <?php if (isset($_POST['user']) && ($_POST['user'] == $user['user_id'])) : ?>  
                selected 
            <?php endif; ?>
            >
            <!--($_POST['user'] == $user['user_id']): This part checks if the value submitted in $_POST['user'] (from the form) is equal to the user_id of the current user in the loop. In other words, it checks if the user's choice matches the current option in the loop.-->
            
            <?= $user['name'] ?>

            </option>
        <?php endforeach; ?>
        <!-------------------------------------->
    </select>

    <input id="btn" type="submit" value="Ajouter">
</form>



<?php require 'partials/footer.php';

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