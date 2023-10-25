<?php require 'partials/header.php';  ?>

<h2>Note</h2>
<h2><?=$note['titre']?></h2>
<p><?=$note['content']?></p>
<p>Publiée le <?=$note['created_at']?> par <strong><?= $note['name']?></strong></p>

<p><a href="/note-delete?id=<?=$note['id']?>">Supprimer cette note</a></p>

<a href="/notes">Retour à la liste des notes</a>

<?php require 'partials/footer.php';  ?>




