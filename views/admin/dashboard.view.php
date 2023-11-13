<?php require 'views/partials/header.php';
// dbug($notes);
?>

<h2>Dashborad</h2>


<table border="1">
    <thead>
        <tr>
            <th>#</th>
            <th>user_id</th>
            <th>Titre</th>
            <th>Content</th>
            <th>Action</th>

        </tr>
    </thead>
    <tbody>
        <?php
        $i = 1;
        foreach ($notes as $note) : ?>
            <tr>
                <td><?= $i ?></td>
                <td><?php echo $note['user_id']; ?></td>
                <td><?php echo $note['titre']; ?></td>
                <td><?php echo substr($note['content'], 0, 50); ?></td>
                <td>
                <p><a style="width: 150px;" href="/note-update?id=<?= $note['id'] ?>" class="btn">Modifier</a></p>

                <p><a style="width: 150px;" href="/note-delete?id=<?= $note['id'] ?>" onClick="return confirm('Etes vous certain de vouloir supprimer cette note !?');" class="btn brand red lighten-1 ">Supprimer</a></p>

                <p><a style="width: 150px;" href="/notes" class="btn">Voir</a></p>
            </td>
            </tr>

        <?php
            $i = $i + 1;
        endforeach; ?>
    </tbody>
</table>


<?php require 'views/partials/footer.php'; ?>