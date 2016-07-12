<?php

function parseContacts($filename)
{
    $contacts = array();
    $handle = fopen($filename, 'r');
    $contents = fread($handle, filesize($filename));
    fclose($handle);
    $contentsArray = explode("\n", trim($contents));

    foreach ($contentsArray as $value) {
    	$divide = explode("|", $value);

    	$name = $divide[0];
    	$phone = $divide[1];
    	$areaCode = substr($phone, 0, 3);
    	$prefix = substr($phone, 3, 3);
    	$last = substr($phone, -4);
    	$phone = $areaCode.'-'.$prefix.'-'.$last;
    	$contacts[] = [
    		'name' => $name,
    		'phone' => $phone,
    	];
    }

    // todo - read file and parse contacts

    return $contacts;
}

$contacts = parseContacts('contacts.txt');
function searchByName ($array, $name)
{
	$filtered = [];
	foreach ($array as $contact) {
		if (strpos($names['name'], $name) !== false) {
			$filtered[] = $contact;
		}
	}
	return $filtered;
}

var_dump($contacts);
function formatContact ($array) {
	echo "\n";
	echo str_pad('Name', 12, " ", STR_PAD_RIGHT);
	echo str_pad(' | ', 12, " ", STR_PAD_RIGHT);
	// foreach ($array as $contact) {
	// echo str_pad('');
}

do {
	echo '1. View Contacts', PHP_EOL;
	echo '2. Add a new contact.', PHP_EOL;
	echo '3. Search a contact by name.', PHP_EOL;
	echo '4. Delete an existing contact.', PHP_EOL;
	echo '5. Exit.', PHP_EOL;
	echo 'Enter an option (1, 2, 3, 4 or 5):', PHP_EOL;
	$selection = trim(fgets(STDIN));
	switch ($selection) {
		case 1:
			formatContact($contacts);
			break;
		case 2:
			break;
		case 3:
			echo 'Please enter a name:';
			$name = trim(fgets(STDIN));
			$searchedContact = (searchByName($contacts,$name));
			formatContact($searchedContact);
			break;
	}
} while ($option != '5');

