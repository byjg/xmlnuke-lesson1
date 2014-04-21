<?php

namespace Lesson1\Modules;

use Lesson1\Base\BaseModule;
use Lesson1\Classes\Model1;
use Xmlnuke\Core\Classes\XmlBlockCollection;
use Xmlnuke\Core\Classes\XmlnukeMediaGallery;
use Xmlnuke\Core\Enum\BlockPosition;

class Sample6 extends BaseModule
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

		$form = new \Xmlnuke\Core\Classes\XmlFormCollection($this->_context, 'module:Lesson1.Sample6', 'Select the Option');
		$block->addXmlnukeObject($form);

		$buttons = new \Xmlnuke\Core\Classes\XmlInputButtons();
		$buttons->addClickEvent('Add Series Manually', 'Manually');
		$buttons->addClickEvent('Add Series From Iterator', 'Iterator');
		$buttons->addClickEvent('Add summed series of iterator', 'IteratorSum');
		$form->addXmlnukeObject($buttons);

		$this->processEvent();

		return $this->defaultXmlnukeDocument;
	}
	
	public function Manually_Event()
	{
		$block = new XmlBlockCollection("Chart Result", BlockPosition::Center);
		$this->defaultXmlnukeDocument->addXmlnukeObject($block);
		
		$chart = new \Xmlnuke\Core\Classes\ChartObject('Sample Chart Manually');
		$chart->setChartType(\Xmlnuke\Core\Enum\ChartType::Column);
		$chart->setTitleHorizontal('Title Horizontal');
		$chart->setTitleVertical('Title Vertical');
		//$chart->setIs3d(true);
		$chart->addSerie('Year2', \Xmlnuke\Core\Enum\ChartColumnType::String, [2004, 2005, 2006, 2007]);
		$chart->addSerie('Sales2', \Xmlnuke\Core\Enum\ChartColumnType::Number, [1000, 1170, 660, 1030]);
		$chart->addSerie('Expenses2', \Xmlnuke\Core\Enum\ChartColumnType::Number, [400, 460, 1120, 540]);

		$block->addXmlnukeObject($chart);

	}

	public function Iterator_Event()
	{
		$block = new XmlBlockCollection("Chart Result", BlockPosition::Center);
		$this->defaultXmlnukeDocument->addXmlnukeObject($block);

		$anydata = new \Xmlnuke\Core\AnyDataset\AnyDataSet();

		$anydata->addField('y', 2004);
		$anydata->addField('s', 1000);
		$anydata->addField('e', 400);

		$anydata->appendRow();
		$anydata->addField('y', 2005);
		$anydata->addField('s', 1170);
		$anydata->addField('e', 460);

		$anydata->appendRow();
		$anydata->addField('y', 2006);
		$anydata->addField('s', 660);
		$anydata->addField('e', 1120);

		$chart = new \Xmlnuke\Core\Classes\ChartObject('Sample Chart from Iterator');
		$chart->setChartType(\Xmlnuke\Core\Enum\ChartType::Bar);
		$chart->setTitleHorizontal('Title Horizontal');
		$chart->setTitleVertical('Title Vertical');
		$chart->addSeriesIterator($anydata->getIterator(),
			array(
				[ "column" => "y", "type" => \Xmlnuke\Core\Enum\ChartColumnType::String, "name" => "Ano" ],
				[ "column" => "s", "type" => \Xmlnuke\Core\Enum\ChartColumnType::Number, "name" => "Vendas" ],
				[ "column" => "e", "type" => \Xmlnuke\Core\Enum\ChartColumnType::Number, "name" => "Despesas" ],
			)
		);

		$block->addXmlnukeObject($chart);

	}

	public function IteratorSum_Event()
	{
		$block = new XmlBlockCollection("Chart Result", BlockPosition::Center);
		$this->defaultXmlnukeDocument->addXmlnukeObject($block);

		$anydata = new \Xmlnuke\Core\AnyDataset\AnyDataSet();

		$anydata->addField('y', 2004);
		$anydata->addField('s', 1000);
		$anydata->addField('e', 400);

		$anydata->appendRow();
		$anydata->addField('y', 2005);
		$anydata->addField('s', 1170);
		$anydata->addField('e', 460);

		$anydata->appendRow();
		$anydata->addField('y', 2006);
		$anydata->addField('s', 660);
		$anydata->addField('e', 1120);

		$chart = new \Xmlnuke\Core\Classes\ChartObject('Sample Chart from Iterator');
		$chart->setTitleHorizontal('Title Horizontal');
		$chart->setTitleVertical('Title Vertical');
		$chart->addSeriesIterator($anydata->getIterator(),
			array(
				[ "column" => "y", "type" => \Xmlnuke\Core\Enum\ChartColumnType::String, "name" => "Ano" ],
				[ "column" => "s", "type" => \Xmlnuke\Core\Enum\ChartColumnType::Number, "name" => "Vendas" ],
				[ "column" => "e", "type" => \Xmlnuke\Core\Enum\ChartColumnType::Number, "name" => "Despesas" ],
			), true
		);

		$block->addXmlnukeObject($chart);

	}
}
