<?php
class NumberNode extends Node implements \Interfaces\NumberNode {
	protected $next_highest;

	public function &get_next_highest(){
		return $this->next_highest;
	}

	public function set_next_highest(\Interfaces\NumberNode &$node){
		$this->next_highest	= $next_highest;
	}
};
