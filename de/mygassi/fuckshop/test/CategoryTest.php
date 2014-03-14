<?php

require_once("de/mygassi/fuckshop/Category.php");
require_once("de/mygassi/fuckshop/test/Test.php");

class CategoryTest extends Test
{
	public $cat;
	public function __construct()
	{
		$this->cat = new Category("12345", "Noch billiger!", "Hach, wer will das noch kaufen?", "12/300/12345", "http://amazon.de/nocheinshop/test.png");
		$this->printMessage(json_encode($this->cat));
	}	
}

?>
