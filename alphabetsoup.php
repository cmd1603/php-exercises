<?php

fwrite(STDOUT, "Gimme a few words! I'll alphabetize each word and return it to you." . PHP_EOL);

$string = trim(fgets(STDIN));

function alphabetSoup($string) {
	$stringArray = explode(" ", $string);
	foreach ($stringArray as $key => $word) {
		$wordArray = str_split($word);
		sort($wordArray);
		$stringArray[key] = implode("", $wordArray);
	}
	return implode(" ", $stringArray);
}

fwrite(STDOUT, "Alphabetized string: " . alphabetSoup($string) . PHP_EOL);