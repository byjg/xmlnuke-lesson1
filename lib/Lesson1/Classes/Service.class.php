<?php

namespace Lesson1\Classes;

class Service
{
	protected $loop = 0;

	public function execute()
	{
		$this->loop++;
		echo $this->loop ."\n";

		return true;
	}

}
