<?php

namespace Lesson1\Base;

use Xmlnuke\Core\Database\BaseDBAccess as XmlnukeBaseDBAccess;

class BaseDBAccess extends XmlnukeBaseDBAccess
{
	public static function DatabaseName()
	{
		return "lesson1";
	}
	public function getDataBaseName()
	{
		return self::DatabaseName();
	}
	//put your code here
}
