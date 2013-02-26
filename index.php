<?php
spl_autoload_register(function($class){
	require(str_replace('\\', '/', $class).'.php');
});


function demo_stack(){
	$items	= array(10, 2, 5, 8, 1, 7);

	$stack	= new \NumberStack();
	echo 'Pushing'.PHP_EOL;
	foreach($items as $item){
		echo $item.' , ';
		$stack->push(new \Node($item));
	}

	try {
		echo 'Popping'.PHP_EOL;
		while(true){
			echo $stack->pop()->get_value().' , ';
		}
	} catch(\Exception $e){}
}
