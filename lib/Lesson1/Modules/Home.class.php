<?php

namespace Lesson1\Modules;

use Lesson1\Base\BaseModule as Lesson1BaseModule;
use Xmlnuke\Core\Classes\XmlBlockCollection;
use Xmlnuke\Core\Classes\XmlnukeText;
use Xmlnuke\Core\Classes\XmlParagraphCollection;
use Xmlnuke\Core\Enum\BlockPosition;

class Home extends Lesson1BaseModule
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

		$p = new XmlParagraphCollection();
		$p->addXmlnukeObject(new XmlnukeText("Template Text"));
		$block->addXmlnukeObject($p);

		return $this->defaultXmlnukeDocument;
	}

	public function requiresAuthentication()
	{
		return false;
	}

}
