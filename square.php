<?php

require_once 'rectangle.php';

class Square extends Rectangle
{
	public function perimeter()
	{
		return $this->height * 2 + $this->width * 2;
	}
}