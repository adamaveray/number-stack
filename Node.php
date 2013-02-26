<?php
class Node implements \Interfaces\Node {
	protected $value;
	protected $next;

	public function __construct($value = null){
		if(isset($value)){
			$this->set_value($value);
		}
	}

	public function &get_next(){
		return $this->next;
	}

	public function set_next(\Interfaces\Node &$next){
		$this->next	= $next;
	}

	public function get_value(){
		return $this->value;
	}

	public function set_value($value){
		$this->value	= $value;
	}
};
