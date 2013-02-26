<?php
class NumberStack extends Stack implements \Interfaces\NumberStack {
	protected $highest;

	public function get_highest(){
		if(!isset($this->highest)){
			throw new \OutOfRangeException('Stack is empty');
		}

		$item	= $this->highest;
		$this->highest	= $item->get_next_highest();

		return $item;
	}
};
