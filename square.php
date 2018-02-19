<?php

require_once 'rectangle.php';

class Square extends Rectangle
{
	public function __construct($height)
	{
		$this->setWidth($height);
		$this->setHeight($height);
	}
	
	public function perimeter()
	{
		return "Perimeter of this square: " . ($this->getHeight()) * 4;
	}
	
	public function area()
	{
		return "Area of this square: " . ($this->getHeight() * $this->getHeight());
	}

}
