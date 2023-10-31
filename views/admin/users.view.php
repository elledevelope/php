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
        foreach ($users as $users) : ?>
            <tr>
                <td><?= $i ?></td>
                <td><?php echo $users['user_id']; ?></td>
                <td><?php echo $users['name']; ?></td>
                <td><?php echo $users['email']; ?></td>
                <td>

            </td>
            </tr>
        <?php
            $i = $i + 1;
        endforeach; ?>
    </tbody>
</table>

<?php require 'partialsAdmin/footer.php' ?>





