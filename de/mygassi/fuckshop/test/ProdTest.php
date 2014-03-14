<?php
require_once("de/mygassi/fuckshop/Prod.php");
require_once("de/mygassi/fuckshop/test/Test.php");

class ProdTest extends Test
{
	public $prod;
	public function __construct()
	{
		$this->prod = new Prod("1", "Ace Of Spades Tennisschlaäger", array("300", "412", "22122"));
		$this->printMessage(json_encode($this->prod));
	}
}
