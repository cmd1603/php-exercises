<?php



$names = ['Tina', 'Dana', 'Mike', 'Amy', 'Adam'];

$compare = ['Tina', 'Dean', 'Mel', 'Amy', 'Michael'];

$query = 'Mike';

$result = array_search($query, $names);

if ($result) {
	echo $names[$result] . PHP_EOL;
} else {
	echo "The person does not exist" . PHP_EOL;
}


function compareArrays($compare, $names){
	$matchingnumber = 0;
	foreach ($names as $index => $name) {
		$check = array_search($name, $compare);
		if($check !== false){
			$matchingnumber++;
		}
	}echo $matchingnumber . PHP_EOL;
}


compareArrays($compare, $names);