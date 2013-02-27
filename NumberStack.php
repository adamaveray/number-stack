<?php
class NumberStack extends Stack implements \Interfaces\NumberStack {
	/**
	 * @var \Interfaces\NumberNode
	 */
	protected $highest;

	public function push(\Interfaces\Node $item){
		if(!($item instanceof \Interfaces\NumberNode)){
			// Standard node - upgrade
			$item	= new NumberNode($item->get_value());
		}

		// Add to stack
		parent::push($item);

		// Compare value
		if(!isset($this->highest) || $item->get_value() > $this->highest->get_value()){
			// New highest
			if(isset($this->highest)){
				$item->set_next_highest($this->highest);
			}
			$this->highest	= $item;
		}
	}

	public function pop(){
		$item	= parent::pop();

		if($item === $this->highest){
			// Popping highest - update
			$this->highest	= $this->highest->get_next_highest();
		}

		return $item;
	}

	public function peek_highest(){
		if(!isset($this->highest)){
			throw new \OutOfRangeException('Stack is empty');
		}

		return $this->highest;
	}
};
