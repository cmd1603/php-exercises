<?php

// Array Work
// Write a function to put the following array in alphabetical order:

$letters = ['e', 'f', 'g', 'c', 'i', 'd', 'a', 'b', 'h'];

// using the "sort" function below to solve the problem
sort($letters);
foreach ($letters as $letter => $value) {
	echo " [" . $letter . "] = " . $value . "\n";
}

//solving the problem with a function below
for ($i = 0; $i < count($letters); $i++) {
	for ($j = $i + 1; $j < count($letters); $j++) {
		if ($letters[$i] > $letters[$j]) {
			$temp = $letters[$i];
			$letters[i]=$letters[j];
			$letters[j]=$temp;
		}
	}
}

print_r($letters);