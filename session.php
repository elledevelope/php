<?php
//---------------------------------------------- SESSION:
session_start();

// var_dump($_SESSION['CouleurFavorite']);

if (isset($_SESSION['isConnected'])) :
    echo 'Vous etes connecté';
else :
    echo 'Vous etes deconnecté';
endif;
