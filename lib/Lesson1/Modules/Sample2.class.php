<?php

namespace Lesson1\Modules;

use Lesson1\Base\BaseModule;
use Lesson1\Classes\Model1;
use Xmlnuke\Core\Classes\XmlBlockCollection;
use Xmlnuke\Core\Classes\XmlnukeMediaGallery;
use Xmlnuke\Core\Enum\BlockPosition;

class Sample2 extends BaseModule
{
	/**
	*@desc Default constructor
	*/
	public function __construct()
	{}

	public function CreatePage()
	{
		$myWords = $this->WordCollection();

		$this->CreateDocument("Template");

		$block = new XmlBlockCollection("Template Block", BlockPosition::Center);
		$this->defaultXmlnukeDocument->addXmlnukeObject($block);



		return $this->defaultXmlnukeDocument;
	}

}
