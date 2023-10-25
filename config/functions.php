<?php

declare(strict_types=1); //---------Typage de fontions forcée 12.10.23

function dbug($value) {
echo '<pre 
style="background-color:pink;
color:white;
overflow:auto;
paddind:1 rem;"
font-family:monospace;
font-size:1 rem;>';
print_r($value);
// var_dump($value);
echo '</pre>';
}; 

function dd($value) {
dbug($value);
die('Script php arrété !!!');
};
 