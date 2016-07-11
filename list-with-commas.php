<?php

$physicistsString = 'Gordon Freeman, Samantha Carter, Sheldon Cooper, Quinn Mallory, Bruce Banner, Tony Stark';

$famousFakePhysicists = [];

$physicistsArray = explode(', ', $physicistsString);

print_r ($physicistsArray) . PHP_EOL;

$physicistsString = implode(', ', $physicistsArray);



function humanizedList($string, $alphabetize = false) 
{
	$array = explode(', ', $string);

	if($alphabetize) {
		sort($array);
	}

	// var_dump($array);


	$lastItem = array_pop($array);

	$humanizedList = implode(', ', $array);

	$humanizedString = $humanizedList . " and " . $lastItem;

	return $humanizedString;

}

$famousFakePhysicists = humanizedList($physicistsString, TRUE);

echo "Some of the most famous fictional theoretical physicists are {$famousFakePhysicists}." . PHP_EOL;

