<?php

// Write a program that prints the numbers from 1 to 100. But for multiples of three print “Fizz” instead of the number and for the multiples of five print “Buzz”. For numbers which are multiples of both three and five print “FizzBuzz”.

//for ($i = 1; $i <= 100; $i++) {
//	if($i % 3 == 0 && $i % 5 == 0){
//		echo "FizzBuzz \n";
//	} elseif ($i %3 == 0) {
//		echo "Fizz \n";
//	} elseif ($i % 5 == 0) {
//		echo "Buzz \n";
//	}else {
//		echo "$i \n" ;
//	}
//}

$count = 2;
for ($i=0; $i < 2; $i++) {
    for ($j=0; $j < 2; $j++) {
        echo $i . $j . PHP_EOL;
        if ($j == 1) {
            break $count;
        }
    }
}