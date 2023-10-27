<?php 
// Titorial loops: https://www.youtube.com/watch?v=TBUgZ84tTgU&list=PL4cUxeGkcC9gksOX3Kd9KPo-O68ncT05o&index=9

	$ninjas = ['shaun', 'ryu', 'yoshi'];

	// for($i = 0; $i < count($ninjas); $i++){ // -- $i=0 -- we are setting it to be at index 0 at the beggining of a loop // $i < count($ninjas) -- условие: пока $i меньше размера переменной $ninjas, продолжать loop // --$i++ -- we increase index by one after each loop
	// 	echo $ninjas[$i] . '<br />';
	// }

	// foreach($ninjas as $ninja){
	// 	echo $ninja . ' <br/>';
	// }

	$products = [
		['name' => 'shiny star', 'price' => 20],
		['name' => 'green shell', 'price' => 10],
		['name' => 'red shell', 'price' => 15],
		['name' => 'gold coin', 'price' => 5],
		['name' => 'lightning bolt', 'price' => 40],
		['name' => 'banana skin', 'price' => 2]
	];

	// foreach($products as $product){
	// 	echo $product['name'] .' - '. $product['price'];
	// 	echo '<br />';
	// }

	$i = 0;

	while($i < count($products)){
		echo $products[$i]['name'];
		echo '<br />';
		$i++;
	}


?>

<!DOCTYPE html>
<html>
<head>
	<title>PHP Tutorials</title>
</head>
<body>

	<h1>Products</h1>
	<ul>
		<?php foreach($products as $product){ ?>
			<h3><?php echo $product['name']; ?></h3>
			<p>£<?php echo $product['price']; ?></p>
		<?php } ?>
	</ul>

</body>
</html>
