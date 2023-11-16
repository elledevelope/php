<?php require 'views/partials/header.php';  ?>

<h2>Notes :</h2>


<ul class="row">
    <?php
    $i = 1;
    foreach ($notes as $note) : ?>
        <li class="col s12 li-notes">
            <?= $i ?>. <a class="black-text" href="/note?id=<?= $note['id'] ?>">
                <?= $note['titre'] ?>
            </a> 
            <a href="/note-delete?id=<?= $note['id'] ?>" onClick="return confirm('Etes-vous certain de vouloir supprimer cette note?');"> <span  class="waves-effect red lighten-1 btn btn-delete">x</span></a>
        </li> <br> <br> <hr>

    <?php
        $i = $i + 1;
    endforeach;
    ?>
</ul>

<div>
    <a class="btn brand z-depth-1" href="/note-new">Ajouter une note</a>
</div>


<?php require 'views/partials/footer.php';  ?>