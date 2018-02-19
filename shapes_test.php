<?php

require_once 'rectangle.php';
require_once 'square.php';

$rect1 = new Rectangle(3,5);
$rect2 = new Rectangle(4,6);
$square1 = new Square(3);
$square2 = new Square(9);

$rectArea = new Rectangle(10,8);
var_dump($rectArea);
echo "The rectangle's area is: " . $rectArea->area() . PHP_EOL;
echo "The rectangle's perimeter is: " . $rectArea->perimeter() . PHP_EOL;

$square = new Square(5,5);

echo "The square's perimeter is: " . $square->perimeter() . PHP_EOL;
echo "The square's area is: " . $square->area() . PHP_EOL;