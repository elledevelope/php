<?php require 'partialsAdmin/header.php' ?>

<h2><?= $user['name'] ?></h2>
<p><?= $user['email'] ?></p>



<p><a href="/user-update?id=<?=$user['id']?>" class="btn">Modifier cette article</a></p>

<p></a><a href="/admin/user-delete?id=<?=$user['user_id']?>" onClick="return confirm('Etes-vous certain de vouloir supprimer cet utilisateur?');"> <span class="waves-effect  red lighten-1 btn">x</span></a></p>

<p><a href="/admin/users" class="btn">Retour à la liste des utilisateur</a></p>

<?php require 'partialsAdmin/footer.php' ?>