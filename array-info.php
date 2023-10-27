<?php 

	//------------------------------------------------------- indexed arrays:

//Two ways of creating an array --first way:

	$peopleOne = ['shaun', 'crystal', 'ryu']; //array with string
//                             --second way:
	$peopleTwo = array('ken', 'chun-li');
	

	$ages = [20, 30, 40, 50]; //array with numbers
	//print_r($ages);

	$ages[1] = 25; //--replace 1st element in an array
	//print_r($ages);

	$ages[] = 10; //--One way: add an element to the end of an array
	array_push($ages, 70);  //--Another way: add an element to the end of an array
	//print_r($ages);

	//echo array_pop($ages); // array_pop() function removes the last element from an array (pops it out)
	//print_r($ages);

	//echo count($ages); //--counts the number of elements in an array

	$peopleThree = array_merge($peopleOne, $peopleTwo); // merging two or more arrays into one
	//print_r($peopleThree);

///////////////////////////////////////////////////////////////

//-------------------------------------------------------  associative array (key & value pairs):

	$ninjasOne = ['shaun' => 'black', 'mario' => 'orange', 'luigi' => 'brown'];
	//echo $ninjasOne['mario'];
	//print_r($ninjasOne);

	$ninjasTwo = array('bowser' => 'green', 'peach' => 'yellow');
	//print_r($ninjasTwo);

	$ninjasTwo['toad'] = 'pink';

	//echo count($ninjasTwo);

	$ninjasThree = array_merge($ninjasOne, $ninjasTwo);
	print_r($ninjasThree);



?>
