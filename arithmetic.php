<?php

function add($a, $b)
{
	if (is_numeric($a) && is_numeric($b)) {
		return $a + $b;
	} else
    	return "Error, both arguments must be numbers\n";
}
echo add("string", 4). PHP_EOL;

function subtract($a, $b)
{
	if (is_numeric($a) && is_numeric($b)) {
    	return $a - $b;
    } else
    	return "Error, both arguments must be numbers\n";
}
echo subtract(5, 4). PHP_EOL;

function multiply($a, $b)
{
	if (is_numeric($a) && is_numeric($b)) {
    	return $a * $b;
    } else
    	return "Error, both arguments must be numbers\n";
}
echo multiply(5, 4). PHP_EOL;

function divide($a, $b)
{
	if (is_numeric($a) && is_numeric($b) && $b != 0) {
    	return $a / $b;
    } else
    	return "Error, both arguments must be numbers and divisor not equal to zero.\n";
}
echo divide(20, -2). PHP_EOL;

function modulus($a, $b)
{
	if (is_numeric($a) && is_numeric($b)) {
		return $a % $b;
	} else
		return "Error, both arguments must be numbers\n";	
}
echo modulus(10, "string"). PHP_EOL;