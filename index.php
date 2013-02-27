<?php
spl_autoload_register(function($class){
	require(str_replace('\\', '/', $class).'.php');
});


function demo_stack(){
	$items	= array(10, 2, 5, 8, 1, 7);

	$stack	= new \Stack();
	foreach($items as $item){
		echo 'Push ( '.$item.' )'.PHP_EOL;
		$stack->push(new \Node($item));
	}

	try {
		while(true){
			echo 'Pop ( '.$stack->pop()->get_value().' )'.PHP_EOL;
		}
	} catch(\Exception $e){}
}


function demo_number_stack(){
	$items	= array(5, 10, 2, 5, 12, 1, 13, 2);

	$stack	= new \NumberStack();
	foreach($items as $item){
		echo 'Push ( '.$item.' )'.PHP_EOL;
		$stack->push(new \Node($item));
	}

	echo 'Highest: '.$stack->get_highest()->get_value().PHP_EOL;

	try {
		while(true){
			echo 'Pop ( '.$stack->pop()->get_value().' )'.PHP_EOL;
		}
	} catch(\Exception $e){}
}

?>
<h2>Standard Stack</h2>
<pre><?php
demo_stack();
?></pre>

<h2>Number Stack</h2>
<pre><?php
demo_number_stack();
?></pre>
