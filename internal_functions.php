<?php

// TODO: Create your inspect() function here

function inspect($a) {
	switch (gettype($a)) {
		case 'string': 
			return ($a == "") ? "The string is empty" : "The string is {$a}";	
			break;
		case 'boolean':
			return ($a == 1) ? "The boolean is TRUE" : "The boolean is FALSE";	
			break;
		case 'array':
			return ($a == []) ? "The value is an empty array" : "The value is an array"; 
			break;
		case 'NULL':
			return "The value is NULL"; 
			break;
		default: //Case for integer, double, non-empty string
			return "The " . gettype($a) . " is {$a}";
			break;
	}
}

// Do not mofify these variables!
$string1 = "I'm a little teapot";
$string2 = '';
$array1 = [];
$array2 = [1, 2, 3];
$bool1 = true;
$bool2 = false;
$num1 = 0;
$num2 = 0.0;
$num3 = 12;
$num4 = 14.4;
$null = NULL;


echo 'Inspecting $num1: ' . inspect($num1) . PHP_EOL;
echo 'Inspecting $num2: ' . inspect($num2) . PHP_EOL;
echo 'Inspecting $num3: ' . inspect($num3) . PHP_EOL;
echo 'Inspecting $num4: ' . inspect($num4) . PHP_EOL;
echo 'Inspecting $null: ' . inspect($null) . PHP_EOL;
echo 'Inspecting $bool1: ' . inspect($bool1) . PHP_EOL;
echo 'Inspecting $bool2: ' . inspect($bool2) . PHP_EOL;
echo 'Inspecting $string1: ' . inspect($string1) . PHP_EOL;
echo 'Inspecting $string2: ' . inspect($string2) . PHP_EOL;
echo 'Inspecting $array1: ' . inspect($array1) . PHP_EOL;
echo 'Inspecting $array2: ' . inspect($array2) . PHP_EOL;