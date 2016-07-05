<?php

// var_dump($argc);
// var_dump($argv);


$min = 1;
$max = 100;

if ($argc === 3)  {
		if (is_numeric($argv[1]) && is_numeric($argv[2])) {
		$min = $argv[1];
		$max = $argv[2];
	} else {
		fwrite(STDERR, 'You need to pass 2 numeric values');
		exit(1);
	}
}

$randomNumber = mt_rand(1, 100);
$guessCount = 0;


do {
	fwrite(STDOUT, 'Guess: ');
	$guess = trim(fgets(STDIN));

	if ($guess < $randomNumber) {
		fwrite(STDOUT, "HIGHER\n");
	} elseif ($guess > $randomNumber) {
		fwrite(STDOUT, "Lower\n");
	} else {
		fwrite(STDOUT, "GOOD GUESS!!\n");
	}
	$guessCount++;
} while ($guess != $randomNumber);

	fwrite(STDOUT, "You guessed $guessCount times.");

exit(0);