<?php

namespace Lesson1\Modules;

use Lesson1\Base\BaseModule;
use Lesson1\Classes\Model1;
use Xmlnuke\Core\Classes\XmlBlockCollection;
use Xmlnuke\Core\Classes\XmlnukeMediaGallery;
use Xmlnuke\Core\Enum\BlockPosition;

class Sample1 extends BaseModule
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

		$data = array(
			new Model1("http://lorempixel.com/800/600/city/1/", "http://lorempixel.com/200/150/city/1/", "Description of image 1"),
			new Model1("http://lorempixel.com/800/600/city/2/", "http://lorempixel.com/200/150/city/2/", "Description of image 2"),
			new Model1("http://lorempixel.com/800/600/city/3/", "http://lorempixel.com/200/150/city/3/", "Description of image 3"),
			new Model1("http://lorempixel.com/800/600/city/4/", "http://lorempixel.com/200/150/city/4/", "Description of image 4"),
		);

		$gallery = new XmlnukeMediaGallery();

		foreach ($data as $item)
		{
			$gallery->addImage($item->Image, $item->Thumb, $item->Description);
		}

		$block->addXmlnukeObject($gallery);


		return $this->defaultXmlnukeDocument;
	}

}
