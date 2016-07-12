<?php


date_default_timezone_set('America/Chicago');

function logMessage($logLevel, $message)
{
    $filename = 'log-' . date('m-d-Y') . '.log';
    $handle = fopen($filename, 'a');
    fwrite($handle, date('m-d-Y h:i:s') . " [$logLevel] $message");
    fclose($handle);
}


function logInfo($message)
{
	return logMessage('INFO', $message) . PHP_EOL;
}

function logError($message)
{
	return logMessage('ERROR', $message) . PHP_EOL;
}

logInfo("We are all addicted to Pokemon");
logError("No Pokemon for you");

