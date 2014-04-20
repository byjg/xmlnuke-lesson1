<?php

namespace Lesson1\Modules;

use Lesson1\Base\BaseDBAccess;
use Lesson1\Classes\Model5;
use Xmlnuke\Core\AnyDataset\DBDataSet;
use Xmlnuke\Core\Classes\ServiceDocument;
use Xmlnuke\Core\Enum\OutputData;
use Xmlnuke\Core\Module\BaseService;

class Sample5 extends BaseService
{

	public function Get($postData, $id = "")
	{
		// It's important create a ServiceDocument instead a XmlnukeDocument
		$this->defaultXmlnukeDocument = new ServiceDocument();

		// Please, don't do it.
		// Create a DAL class that extends BaseDBAccess and put the SQL there, ok?
		$db = new DBDataSet(BaseDBAccess::DatabaseName());
		$iterator = $db->getIterator('select * from client');

		// Fill the result
		foreach($iterator as $singleRow)
		{
			$this->defaultXmlnukeDocument->addXmlnukeObject(new Model5($singleRow));
		}
		
		return $this->defaultXmlnukeDocument;
	}

	// Override this function you can force a DEFAULT output format without
	// have to specify the raw=json
	public function getOutputFormat()
	{
		return OutputData::Json;
	}


	public function GetOne($postData, $id = "")
	{
		// Please, don't do it.
		// Create a DAL class that extends BaseDBAccess and put the SQL there, ok?
		$db = new DBDataSet(BaseDBAccess::DatabaseName());
		$param = array('id' => $id);
		$iterator = $db->getIterator('select * from client where id = [[id]]', $param);

		$this->defaultXmlnukeDocument->addXmlnukeObject(new Model5($iterator));

		return $this->defaultXmlnukeDocument;

	}
}
