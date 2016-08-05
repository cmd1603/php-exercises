<?php

class Model
{
	protected static $table = '';
	//This is an array to store our key/value data
	
	private $attributes = [];

	//This magic setter is used to populate $attributes array
	public function __set($name, $value)
	{	
		//Set the $name key to hold $value in $attributes
		$this->attributes[$name] = $value;
	}

	//Magic getter to retrieve values from $attributes
	public function __get($name)
	{
		//Check if the array key name exists
		if(array_key_exists($name, $this-> attributes)) {
			return $this->attributes[$name];
		}

		return null;
	}

	public static function getTableName()
	{
		return static::$table;
	}	
}