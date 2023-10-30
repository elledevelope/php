<?php require 'partials/header.php';
// dbug($users);
?>

<h2>Modifier cette note</h2>

<?php dbug($noteUpdate); ?>



<form method="POST">
    <label for="titre">Titre :</label>
    <input type="text" name="titre" id="titre" value="<?= isset($_POST['titre']) ? $_POST['titre'] : $noteUpdate['titre'] ?>">

    <label for="content">Contenu :</label>
    <textarea name="content" id="content" cols="30" rows="10"><?= isset($_POST['content']) ? $_POST['content'] :  $noteUpdate['content']  ?></textarea> 


    <label for="user">Auteur :</label>
    <select name="user" id="user">

        <option value=""></option>

        <?php foreach ($users as $user) : ?>
            <option value="<?= $user['user_id'] ?>" 

            <?php 
            if(isset($_POST['user'])) {
                $user_id = (int) $_POST['user'];}
             else { 
                $user_id = (int) $noteUpdate['user_id'];
              };
            
            
            if (isset($_POST['user']) && ($user === $user['user_id'])) : ?>     
                selected 
                
            <?php endif; ?>
            >
            
            <?= $user['name'] ?>

            </option>
        <?php endforeach; ?>
        <!-------------------------------------->
    </select>

    <input id="btn" type="submit" value="Modifier">
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