<?php
class WordCounter {
	const ASC = 1;
	const DESC = 2;
	private $words;

	function __construct($filename) {
		$file_content = file_get_contents($filename);
		$this->words = (array_count_values(str_word_count(strtolower($file_content), 1)));
	}

	public function count($order) {
		if($order == self::ASC) {
			asort($this->words);
		} elseif ($order == self::DESC) {
			arsort($this->words);	
		}
		foreach ($this->words as $key => $value) {
			echo $key . " = " . $value . PHP_EOL;
		}
	}
}

$wc = new WordCounter("words.txt");
$wc->count(WordCounter::DESC);