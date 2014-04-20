<?php

namespace Lesson1\Base;

use Xmlnuke\Core\Database\BaseModel as XmlnukeBaseModel;

class BaseModel extends XmlnukeBaseModel
{
	public function __construct($object=null)
	{
		$this->setPropertyPattern("_", "");
		parent::__construct($object);
	}	
}
