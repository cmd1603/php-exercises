<?php

require_once 'rectangle.php';

require_once 'square.php';

$rectArea = new Rectangle(10,8);

echo $rectArea->area() . PHP_EOL;

$square = new Square(5,7);

echo $square->perimeter() . PHP_EOL;