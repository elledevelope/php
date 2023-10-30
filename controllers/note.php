<?php

require 'models/Database.php';


// dd($_GET);
/* 
 if(!isset($_GET['id']) || !is_numeric($_GET['id'])) :
    abort();
endif;

if (empty($note) )  :
    abort();
endif;
*/

if (!isset($_GET['id']) || !is_numeric($_GET['id'])) :
  abort();
endif;

$id = $_GET['id'];

$note = $connexion->prepare('SELECT * FROM `note` AS n
INNER JOIN user AS u 
ON n.user_id = u.user_id
WHERE n.id= :id'); 

$note->bindParam(':id',$id);
$note->execute();
$note = $note->fetch();
// dd($note);
 


/* 
$id = $_GET['id'];

$query = 'SELECT note.id, note.titre, note.content, note.created_at, user.name
          FROM note
          JOIN user ON note.user_id = user.user_id
          WHERE note.id = :id';

$note = $connexion->prepare($query); //The prepare() method is used to create a prepared statement from an SQL query.
$note->bindParam(':id', $id);
$note->execute();
$note = $note->fetch(PDO::FETCH_ASSOC); //method is called on the prepared statement to retrieve one row of data from the result set in the form of an associative array. The PDO::FETCH_ASSOC option specifies that you want the data organized in the form of an associative array, where column names are associated with their values.
  */

require 'views/note.view.php';
