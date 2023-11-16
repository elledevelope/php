<?php require 'views/partials/header.php';
// dbug($users);
?>

<h2>Créer user</h2>

<section>
    <form method="POST">
        <label class="black-text" for="name">User Name :</label>
        <div class="white">
            <input type="text" name="name" id="name" value="<?= isset($_POST['name']) ? $_POST['name'] : '' ?>">
        </div>

        <label class="black-text" for="email">Email :</label>
        <div class="white">
            <input type="email" name="email" id="email" value="<?= isset($_POST['email']) ? $_POST['email'] : '' ?>">
        </div>

        <div style="margin: 30px auto;">
            <input class="btn brand" id="btn" type="submit" value="Ajouter">
        </div>
    </form>
</section>



<?php require 'views/partials/footer.php'; ?>