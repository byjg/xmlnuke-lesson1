<?php

namespace Lesson1\Modules;

use Lesson1\Base\BaseModule;
use Lesson1\Classes\Model1;
use Xmlnuke\Core\Classes\XmlBlockCollection;
use Xmlnuke\Core\Classes\XmlnukeMediaGallery;
use Xmlnuke\Core\Enum\BlockPosition;

class Sample4 extends BaseModule
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

		$fieldCollection = new \Xmlnuke\Core\Classes\CrudFieldCollection();

		# The Field 'id' is a AUTOINC PRIMARY KEY
		$field = \Xmlnuke\Core\Classes\CrudField::FactoryMinimal('id', '#', 0, true, true);
		$field->dataType = \Xmlnuke\Core\Enum\INPUTTYPE::NUMBER;
		$field->editable = false;
		$field->key = true;
		$fieldCollection->addCrudField($field);

		# The Field 'name'
		$field = \Xmlnuke\Core\Classes\CrudField::FactoryMinimal('name', 'Name', 40, true, true);
		$field->maxLength = 200;
		$fieldCollection->addCrudField($field);

		# The Field 'age' is number in the range of 18 and 99
		$field = \Xmlnuke\Core\Classes\CrudField::FactoryMinimal('age', 'Age', 3, true, true);
		$field->dataType = \Xmlnuke\Core\Enum\INPUTTYPE::NUMBER;
		$field->rangeMin = 18;
		$field->rangeMax = 99;
		$fieldCollection->addCrudField($field);

		# The Field 'date' is datetime field
		$field = \Xmlnuke\Core\Classes\CrudField::FactoryMinimal('date', 'Date', 12, true, true);
		$field->dataType = \Xmlnuke\Core\Enum\INPUTTYPE::DATETIME;
		$field->fieldXmlInput = \Xmlnuke\Core\Enum\XmlInputObjectType::DATETIME;
		$fieldCollection->addCrudField($field);

		$crud = new \Xmlnuke\Core\Classes\XmlnukeCrudDB(
			$this->_context,
			$fieldCollection,          // The dictionary defined above
			'Editing the Client',      // The title of this crud
			'module:Lesson1.Sample4',  // This module
			null,                      // Custom buttons
			'client',                  // The table
			'lesson1'                  // The connection
		);

		$block->addXmlnukeObject($crud);


		return $this->defaultXmlnukeDocument;
	}

}
