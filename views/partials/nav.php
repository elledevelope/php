<div class="header row">
    <nav>
        <div class="nav-wrapper col s12">
            <a class="brand-logo" href="/">LogoNotes</a>
            <ul class="right hide-on-med-and-down">

                <li>
                    <?php
                    if (isset($_SESSION['isLogged']) === true) :
                    // echo $loginUser['name'];
                    endif;
                    ?>

                </li>

                <li><a href="/admin">[Admin]</a></li>
                <li><a href="/notes">Notes</a></li>
                <li><a href="/note-new">Ajouter Note</a></li>
                <!-- <li><a href="/dashborad">Dashborad</a></li> -->
                <li><a href="/user-new">Créer user</a></li>
                <li><a href="/contact">Contact</a></li>


                <?php
                // dbug($_SESSION['isLogged']);
                if (isset($_SESSION['isLogged'])) :    ?>
                    <li><a class="btn brand" href="/logout">Log out</a></li>
                <?php else :     ?>
                    <li><a class="btn brand" href="/login">Log in</a></li>
                <?php endif;
                ?>

            </ul>
        </div>
    </nav>

</div>