<?php
// emailer.php
/**
* 
*/
class Emailer
{
	private $sender;
	private $recipients;
	private $subject;
	private $body;

	function __construct($sender)
	{
		$this->sender = $sender;
		$this->recipients = array();
	}

	public function addRecipients($recipient) {
		array_push($this->recipients, $recipient);
	}

	public function setSubject($subject) {
		$this->subject = $subject;
	}

	public function setBody($body) {
		$this->body = $body;
	}

	public function sendEmail() {
		foreach ($this->recipients as $recipient) {
			$result = mail($recipient, $this->subject, $this->body,
				"From: {$this->sender}\r\n");
			if($result) echo "Mail successfully sent to 
				{$recipient}<br/>";
		}
	}
}

$emailer = new emailer("chris@chrisdavila.net");
$emailer->addRecipients("chris@somewherein.net");
$emailer->setSubject("Just a test");
$emailer->setBody("Hi Chris, How are you?");
$emailer->sendEmail();












