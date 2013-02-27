<?php
class Stack implements \Interfaces\Stack, \Iterator {
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

	public function peek(){
		return $this->top;
	}


	public function __toArray(){
		$items	= array();
		
		foreach($this as $node){
			$items[]	= $node->get_value();
		}
		return $items;
	}

	public function __toString(){
		$items	= $this->__toArray();

		return implode(', ', $items);
	}


	/* Iterator */
	protected $iterator_position	= 0;
	protected $iterator_item;

	public function current(){
		return $this->iterator_item;
	}

	public function key(){
		return $this->iterator_position;
	}

	public function next(){
		$this->iterator_item	= $this->iterator_item->get_next();
	}

	public function rewind(){
		$this->iterator_item	= $this->top;
	}

	public function valid(){
		return isset($this->iterator_item);
	}
};
