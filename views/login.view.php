<?php require 'views/partials/header.php';
?>
<section class="container">
    <h2>Connextion</h2>
    
    <form method="POST">

        <!------------------------------------------------------------- email --------------------------------------------------------------->
        <label class="black-text" for="email">Email :</label>
        <input class="input-field white" type="email" name="email" id="email" value="<?= isset($_POST['email']) ? $_POST['email'] : '' ?>">

        <!-------------------------------------------------------- password ---------------------------------------------------------------->
        <label class="black-text" for="password">Password :</label>
        <input class="input-field white" type="password" name="password" id="password">

        <!------------------------------------------------------- SUBMIT BTN ---------------------------------------------------------------->
        <div style="margin: 30px auto;">
            <input class="btn brand" id="btn" type="submit" value="Connextion">
        </div>

    </form>
</section>

<?php require 'views/partials/footer.php';




if (isset($errors) && !empty($errors)) :
    foreach ($errors as $error) :
?>
        <p class="error"><?= $error ?></p>
<?php
    endforeach;
endif;
?>