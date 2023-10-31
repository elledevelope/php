<?php require 'partials/header.php';  ?>

<h2>Notes :</h2>
    <ul style="height: 300px; display: flex; flex-direction: column; flex-wrap: wrap;" id="notes-view-ul">
    <?php 
    $i = 1;
    foreach ($notes as $note) : ?>
    <li style="padding: 20px;"  id="notes-view-li">
        <?=$i?>. <a class="black-text" href="/note?id=<?=$note['id']?>">
        <?=$note['titre']?>
        </a> - <a href="/note-delete?id=<?=$note['id']?>" onClick="return confirm('Etes-vous certain de vouloir supprimer cette note?');"> <span class="waves-effect  red lighten-1 btn">x</span></a>
    </li> <br>

<?php 
$i = $i + 1;
endforeach;
?>
    </ul>

    <div id="ajout-note-btn">
        <a class="btn brand z-depth-0"  href="/note-new">Ajouter une note</a>
</div>

<?php require 'partials/footer.php';  ?>





