<?php require 'partials/header.php';  ?>

<h2>Notes :</h2>
    <ul id="notes-view-ul">
    <?php 
    $i = 1;
    foreach ($notes as $note) : ?>
    <li id="notes-view-li">
        <?=$i?>. <a href="/note?id=<?=$note['id']?>">
        <?=$note['titre']?>
        </a> - <a href="/note-delete?id=<?=$note['id']?>" onClick="return confirm('Etes-vous certain de vouloir supprimer cette note?');">x</a>
    </li>

<?php 
$i = $i + 1;
endforeach;
?>
    </ul>

    <p id="ajout-note-btn">
        <a href="/note-new">Ajouter une note</a>
    </p>

<?php require 'partials/footer.php';  ?>





