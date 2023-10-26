<?php require 'partials/header.php';  ?>

<h2>Notes :</h2>
    <ul id="notes-view-ul">
    <?php foreach ($notes as $note) : ?>
    <li id="notes-view-li">
        <a href="/note?id=<?=$note['id']?>">
        <?=$note['titre']?>
        </a> - <a href="/note-delete?id=<?=$note['id']?>" onClick="return confirm('Etes-vous certain de vouloir supprimer cette note?');">x</a>
    </li>

<?php 
endforeach;
?>
    </ul>

    <p>
        <a href="/note-new">Ajouter une note</a>
    </p>

<?php require 'partials/footer.php';  ?>





