<?php
function throwErrorMessage($message) {
	
	return ($message);

}	
function add($a, $b)
{
	if (!is_numeric($a) || !is_numeric($b)) {
		return throwErrorMessage("Error, both arguments must be numbers\n");
	}
		return $a + $b;	
}
echo add(4, 4). PHP_EOL;

function subtract($a, $b)
{
    	return $a - $b;

}
echo subtract(5, 4). PHP_EOL;

function multiply($a, $b)
{
    	return $a * $b;

}
echo multiply(5, 4). PHP_EOL;

function divide($a, $b)
{
	if($b == 0) {
    	return trigger_error("divisor can't be 0");
	} else {
		return $a / $b;
	}


}
echo divide(20, 0). PHP_EOL;

function modulus($a, $b)
{
		return $a % $b;	
}
echo modulus(10, 2). PHP_EOL;

?>