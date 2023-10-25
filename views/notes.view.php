<?php require 'partials/header.php';  ?>

<h1>Notes</h1>
    <ul>
    <?php foreach ($notes as $note) : ?>
    <li>
        <a href="/note?id=<?=$note['id']?>">
        <?=$note['titre']?>
        </a>
    </li>

<?php 
endforeach;
?>
    </ul>

<?php require 'partials/footer.php';  ?>





