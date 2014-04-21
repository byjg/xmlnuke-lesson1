<?php

namespace Lesson1\Classes;

use chart;

class SampleChart
{

	public function __construct()
	{
	}

	/**
	 *
	 * @return \Xmlnuke\Core\Classes\ChartObject
	 */
	public function getChartObject()
	{
		$chart = new \Xmlnuke\Core\Classes\ChartObject('Sample Chart Manually');
		$chart->setChartType(\Xmlnuke\Core\Enum\ChartType::Column);
		$chart->setTitleHorizontal('Title Horizontal');
		$chart->setTitleVertical('Title Vertical');
		//$chart->setIs3d(true);
		$chart->addSerie('Year2', \Xmlnuke\Core\Enum\ChartColumnType::String, [2004, 2005, 2006, 2007]);
		$chart->addSerie('Sales2', \Xmlnuke\Core\Enum\ChartColumnType::Number, [1000, 1170, 660, 1030]);
		$chart->addSerie('Expenses2', \Xmlnuke\Core\Enum\ChartColumnType::Number, [400, 460, 1120, 540]);

	    return $chart;
	}
}
