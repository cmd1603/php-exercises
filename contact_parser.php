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

var_dump(parseContacts('contacts.txt'));
