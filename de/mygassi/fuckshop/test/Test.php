<?php
require_once("de/mygassi/fuckshop/Locale.php");

class Test
{
	protected function printError($message)
	{
		print L::__("!!!E: ");
		print $message;
		print PHP_EOL;
	}

	protected function printMessage($message)
	{
		print $message;
		print PHP_EOL;
	}
}


?>
