<?php
class Stack implements \Interfaces\Stack {
	/**
	 * @var \Interfaces\Node
	 */
	protected $top;

	public function push(\Interfaces\Node $item){
		if(isset($this->top)){
			$item->set_next($this->top);
		}

		$this->top	= &$item;
	}

	public function pop(){
		if(!isset($this->top)){
			throw new \OutOfRangeException('Stack is empty');
		}

		$item	= $this->top;
		$this->top	= $item->get_next();

		return $item;
	}
};
