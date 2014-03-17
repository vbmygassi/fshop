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

	public function testApplyToAmount()
	{
		$this->discount->addRule(new DiscountRule("TestRule1", 5.0, 0)); // 5 Euro 
		$this->discount->addRule(new DiscountRule("TestRule2", 3.0, 0)); // 3 Euro 
		$res = $this->discount->apply(100.0); // apply to a value (amount, price)
		$ares = round(93.0, 2);
		if($ares == $res){
			$this->printMessage("DiscountTest::succeeded");				
		}
		else{
			$this->printError("DiscountTest::failed: " . $ares . " : " . $res);
		}
	}	
}
