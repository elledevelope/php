<?php 
//Tutorial youtube: https://www.youtube.com/watch?v=438PsnpJj5E&list=PL4cUxeGkcC9gksOX3Kd9KPo-O68ncT05o&index=13&pp=iAQB

	// To create a function we use key word "function", then we name our function (here: sayHello() ):
	function sayHello($name = 'shaun', $time = 'morning'){ //внутри скобок мы указываем локальные переменные (here: $name, $time), по желанию/необходимости перменным можно задать параметры по умолчанию (here: 'shaun', 'morning')
		echo "Good $time, $name";
	}

	//sayHello(); //вызов функции
	sayHello('mario', 'night'); // передача нового значения функции (теперь вместо shaun она будет показывать mario, вместо morning - night). Чтобы увидеть функцию в действии надо сделать echo



	function formatProduct($product){
		// echo "{$product['name']} costs £{$product['price']} to buy <br />";
		return "The {$product['name']} costs £{$product['price']} to buy <br />"; // return используется для того, чтобы передать переменным новые параметры, но не выводя на экран, чтобы вывести на экран, надо функцию заключить в новую переменню см.ниже $formatted
	}
	
	//formatProduct(['name' => 'gold star', 'price' => 20]); // передача значения функции

	// $formatted = formatProduct(['name' => 'gold star', 'price' => 20]); // заключаем функцию в переменную
	// echo $formatted; // выводим переменную на экран (она покажет результат функции)

?>
