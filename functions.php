<?php

function dbug($value) 
{

echo '<pre style="background-color:pink;color:white;overflow:auto;paddind:10px;">';
print_r($value);
// var_dump($value);
echo '</pre>';

};

// dbug("Test");

function dd($value) 
{
dbug($value);
// die('Script php arrété !!!');
};

?>