<?php

// foreach (range(1, 100) as $i) {
// 	echo $i . "\n";
// 	if ($i == 5) {
// 		break;
// 	}
// }

foreach (range(1, 100) as $i) {
	echo $i . "\n";
	if ($i == 10) {
		break;
	}
}

// both are correct ways to make a loop that breaks 

for ($i = 0; $i <= 100; $i++) {
	echo $i . "\n";
	if ($i % 2 == 1) {
		continue;
	}
	echo "^ that is an even number.\n";
}