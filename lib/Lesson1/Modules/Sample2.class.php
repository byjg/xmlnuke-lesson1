<?php

namespace Lesson1\Modules;

use Lesson1\Base\BaseModule;
use Xmlnuke\Core\Classes\XmlBlockCollection;
use Xmlnuke\Core\Classes\XmlEasyList;
use Xmlnuke\Core\Classes\XmlFormCollection;
use Xmlnuke\Core\Classes\XmlInputButtons;
use Xmlnuke\Core\Classes\XmlInputDateTime;
use Xmlnuke\Core\Classes\XmlInputMemo;
use Xmlnuke\Core\Classes\XmlInputTextBox;
use Xmlnuke\Core\Enum\BlockPosition;
use Xmlnuke\Core\Enum\DATEFORMAT;
use Xmlnuke\Core\Enum\EasyListType;
use Xmlnuke\Core\Enum\INPUTTYPE;

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

		$form = new XmlFormCollection($this->_context, "module:Lesson1.Sample2", 'Sample Form');
		$block->addXmlnukeObject($form);

		$input1 = new XmlInputTextBox('Name', 'name', '');
		$input1->setRequired(true);
		$form->addXmlnukeObject($input1);

		$input2 = new XmlInputTextBox('Age (between 18 and 99)', 'age', '');
		$input2->setInputTextBoxType(INPUTTYPE::NUMBER);
		$input2->setRange(18, 99);
		$form->addXmlnukeObject($input2);

		$input3 = new XmlInputDateTime('Registration Date', 'date', DATEFORMAT::MDY, false);
		$form->addXmlnukeObject($input3);

		$gender = array('M'=>'Male', 'F'=>'Female');
		$list = new XmlEasyList(EasyListType::RADIOBOX, 'gender', 'Gender', $gender);
		$form->addXmlnukeObject($list);

		$memo = new XmlInputMemo('Description', 'description', '');
		$memo->setVisualEditor(true);
		$form->addXmlnukeObject($memo);

		$form->addXmlnukeObject(XmlInputButtons::CreateSubmitButton("Send data"));

		return $this->defaultXmlnukeDocument;
	}

}
