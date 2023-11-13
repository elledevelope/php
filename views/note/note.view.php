<?php require 'views/partials/header.php' ?>

<h2><?= $note['titre'] ?></h2>
<p><?= $note['content'] ?></p>
<p class=" grey-text text-darken-1">Publiée le <?= $note['created_at'] ?> par <span style="font-weight: 700;"><?= $note['name'] ?></span></p>


<p><a href="/note-update?id=<?=$note['id']?>" class="btn">Modifier cette article</a></p>

<p><a href="/note-delete?id=<?=$note['id']?>" onClick="return confirm('Etes vous certain de vouloir supprimer cette note !?');" class="btn brand red lighten-1 ">Supprimer cette note</a></p>

<p><a href="/notes" class="btn">Retour à la liste des notes</a></p>
<?php require 'views/partials/footer.php' ?>