<?php

namespace Lesson1\Classes;

class Model1
{
	public $Image;
	public $Thumb;
	public $Description;

	function __construct($Image, $Thumb, $Description)
	{
		$this->Image = $Image;
		$this->Thumb = $Thumb;
		$this->Description = $Description;
	}

}
