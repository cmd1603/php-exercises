<?php

// Create a file named foreach.php in you exercises directory. Commit each step and push to GitHub.

// Construct a loop that iterates through each value and outputs its type as either integer, float, boolean, array, null, or string.

// Construct a loop that iterates through each value and outputs only values with a type that is scalar.

// Create a loop that will echo out every value, including those nested in arrays. 

$things = array('Sgt. Pepper', "11", null, array(1,2,3), 3.14, "12 + 7", false, (string) 11);


// foreach ($things as $thing) {
// 		if (is_numeric($thing)) {
// 			echo "{$thing} is a number \n";
// 		} elseif (is_string($thing)) {
// 			echo "{$thing} is a string \n";
// 		} elseif (is_bool($thing)) {
// 			echo "{$thing} is a boolean \n";
// 		} elseif (is_array($thing)) {
// 			echo "{$thing} is an array \n";
// 		} elseif (is_integer($thing)) {
// 			echo "{$thing} is an integer \n";
// 		}

// }

foreach ($things as $thing) {
	if (is_scalar($thing)) {
		echo "{$thing} is a scalar \n";
	}
}