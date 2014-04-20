<?php

namespace Lesson1\Base;

use Xmlnuke\Core\Enum\AccessLevel;
use Lesson1\Base\BaseModule as Lesson1BaseModule;

class AdminBaseModule extends Lesson1BaseModule
{
	public function CreateDocument($title) 
	{
		parent::CreateDocument($title);
	}

	public function requiresAuthentication() 
	{
		return true;
	}
	
	public function getAccessLevel() 
	{
		return AccessLevel::OnlyAdmin;
	}
	
	public function CreatePage() 
	{
		return $this->defaultXmlnukeDocument;
	}
}
