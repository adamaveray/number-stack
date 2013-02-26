<?php
namespace Interfaces;

interface NumberNode extends Node {
	public function &get_next_highest();

	public function set_next_highest(\Interfaces\NumberNode &$next);
};
