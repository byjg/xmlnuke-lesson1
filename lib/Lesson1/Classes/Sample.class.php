<?php

namespace Lesson1\Classes;

class Sample
{
	
	protected $_total;
	
	public function __construct($total)
	{
		$this->_total = $total;
	}
	
	public function add($value)
	{
		$this->_total += $value;
	}
	
	public function getTotal()
	{
		return $this->_total;
	}
	
	
}
