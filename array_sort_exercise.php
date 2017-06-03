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


//Array Work 2

//Write a function to remove all the vowels from the following:

$letters = array('a', 'b', 'c', 'd', 'e', 'f', 'g', 'h', 'i');
//    unset($letters[0], $letters [4], $letters [8]);

//print_r($letters);

function removeVowels(&$vowels)
{
    foreach ($vowels as $index => $vowel) {
        if ($vowel == 'a' || $vowel == 'e' || $vowel == 'i' || $vowel == 'o' || $vowel == 'u') {
            unset($vowels[$index]);
        }
    }
    return $vowels;
}

removeVowels($letters);

print_r($letters);
