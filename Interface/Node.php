<?php
interface Node {
	public function &get_next();

	public function set_next(\Interfaces\Node &$next);

	public function get_value();

	public function set_value($value);
};
