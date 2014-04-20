<?php

namespace Lesson1\Classes;

class Model2 extends \Lesson1\Base\BaseModel
{
	protected $_name;

	public function getName()
	{
		return $this->_name;
	}

	public function setName($name)
	{
		$this->_name = $name;
	}

	protected $_age;

	protected $_gender;

	protected $_description;

	protected $_date;

	public function getAge()
	{
		return $this->_age;
	}

	public function getGender()
	{
		return $this->_gender;
	}

	public function getDescription()
	{
		return $this->_description;
	}

	public function getDate()
	{
		return $this->_date;
	}

	public function setAge($age)
	{
		$this->_age = $age;
	}

	public function setGender($gender)
	{
		$this->_gender = $gender;
	}

	public function setDescription($description)
	{
		$this->_description = $description;
	}

	public function setDate($date)
	{
		$this->_date = $date;
	}


}
