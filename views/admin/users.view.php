<?php require 'partialsAdmin/header.php' ;
// dd($users);
?>

<h2>Users List :</h2> 

<p><a class="btn brand z-depth-0"  href="/user-new">Créer user</a></p>

<table border="1">
    <thead>
        <tr>
            <th>#</th>
            <th>user_id</th>
            <th>Name</th>
            <th>Email</th>

        </tr>
    </thead>
    <tbody>
        <?php
        $i = 1;
        foreach ($users as $user) : ?>
            <tr>
                <td><?= $i ?></td>
                <td><?php echo $user['user_id']; ?></td>
                <td><?php echo $user['name']; ?></td>
                <td><?php echo $user['email']; ?></td>
                <td></a><a href="/admin/user-delete?id=<?=$user['user_id']?>" onClick="return confirm('Etes-vous certain de vouloir supprimer cet user?');"> <span class="waves-effect  red lighten-1 btn">x</span></a></td>

               
            </tr>
        <?php
            $i = $i + 1;
        endforeach; ?>
    </tbody>
</table>

<?php require 'partialsAdmin/footer.php' ?>





