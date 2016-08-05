<?php

date_default_timezone_set('America/Chicago');

class Log
{

    private $filename;
    private $handle;
    public $date;
    public $dateTime;


    public function __construct($prefix = 'log')
    {
        $logTime = date('m-d-y h:i:s');
        $this->setFileName("{prefix}-{$logTime}.log");
        $this->handle = fopen($this->filename, 'a');
    }

    private function setFileName($filename)
    {
        if(is_string($filename) && touch($filename) && is_writable($filename)) {
            $this->filename = $filename;
        } else {
            echo "ERROR";
        }
    }

    public function logMessage($logLevel, $message)
    {
        $currentDate = date('Y-m-d h:i:s=T');
        fwrite($this->handle, PHP_EOL . $currentDate . " " . "[" . $logLevel . "]" . " " . $message);
    }

    public function info($logMessage)
    {
        $this->logMessage('INFO', $logMessage);
    }

    public function error($logMessage)
    {
        $this->logMessage('ERROR', $logMessage);
    }

    public function __destruct()
    {
        fclose($this->handle);
    }

}