<?php 

	// multidimensional array

	$blogs = [
		['title' => 'mario party', 'author' => 'mario', 'content' => 'lorem'],
		['title' => 'mariokart cheats', 'author' => 'toad', 'content' => 'lorem'],
		['title' => 'zelda hidden chests', 'author' => 'link', 'content' => 'lorem']
	];

	//print_r($blogs);
	//print_r($blogs[2]); //shows 3d child-array inside a of parent-array
	//echo $blogs[1]['title'];
	//echo count($blogs); //counts the number of elements inside a parent-array

	$blogs[] = ['title' => 'castle party', 'author' => 'peach', 'content' => 'lorem']; //adds new element(child-array) into a parent-array
	//print_r($blogs);

	$popped = array_pop($blogs); //pops out (removes) the last element-child-array) from a parent-array
	//print_r($popped);


?>
