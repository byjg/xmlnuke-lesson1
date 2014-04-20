<?php

namespace Lesson1\Base;

use Xmlnuke\Core\Classes\XmlnukeDocument;
use Xmlnuke\Core\Module\BaseModule as XmlnukeBaseModule;

class BaseModule extends XmlnukeBaseModule
{
	public function CreateDocument($title)
	{
		$this->defaultXmlnukeDocument = new XmlnukeDocument($title, "");
	}
	
	public function CreatePage() 
	{
		return $this->defaultXmlnukeDocument;
	}
	
	/**
	 * Returns if use cache
	 *
	 * @return bool
	 */
	public function useCache() 
	{
		return false;
	}

	/**
	 * 
	 * @return boolean 
	 */
	public function requiresAuthentication()
	{
		return false;
	}
	
}

?>
