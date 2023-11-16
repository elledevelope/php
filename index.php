<?php
session_start(); // session_start() is always on top of a page

// $_SESSION['CouleurFavorite'] = 'vert';
$_SESSION['isConnected'] = true;

?>




<p><a href="./session.php">Lira la variable session</a></p>
<p><a href="./kill_session.php">Tuer la session</a></p>