<?php
namespace Interfaces;

interface Stack {
	public function push(\Interfaces\Node $item);
	public function pop();
};
