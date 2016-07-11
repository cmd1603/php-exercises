<?php



$names = ['Tina', 'Dana', 'Mike', 'Amy', 'Adam'];

$compare = ['Tina', 'Dean', 'Mel', 'Amy', 'Michael'];

function combineArrays ($array1, $array2)
{
	$array3 = [];

	foreach ($array1 as $key => $value) {
		
		if($array2[$key] !== $array1[$key]) {

			array_push($array3, $array1[$key]);
			array_push($array3, $array2[$key]);

		} else {

			array_push($array3, $value);
		}
	} //end of foreach function

	return var_dump($array3);
} //end of combineArrays

echo combineArrays($names, $compare) . PHP_EOL;

