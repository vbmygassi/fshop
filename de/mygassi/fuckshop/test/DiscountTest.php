<?php
require_once("de/mygassi/fuckshop/Discount.php");
require_once("de/mygassi/fuckshop/DiscountRule.php");
require_once("de/mygassi/fuckshop/test/Test.php");

class DiscountTest extends Test
{
	private $discount;
	public function __construct()
	{
		$this->discount = new Discount();
	}

	public function testApply()
	{
		$this->discount->addRule(new DiscountRule("Weihnachten", "Ribatt for Weihnackter", "christmas"));  
		$res = $this->discount->apply(100.0); 
		$ares = round(93.0, 2);
		if($ares == $res){
			$this->printMessage("DiscountTest::succeeded");				
		}
		else{
			$this->printError("DiscountTest::failed: " . $ares . " : " . $res);
		}
	}	
}
