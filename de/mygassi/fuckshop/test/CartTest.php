<?php
require_once("de/mygassi/fuckshop/Cart.php");
require_once("de/mygassi/fuckshop/Prod.php");
require_once("de/mygassi/fuckshop/Locale.php");
require_once("de/mygassi/fuckshop/test/Test.php");

class CartTest extends Test
{
	protected $cart;
	
	public function __construct()
	{
		$this->cart = new Cart();
	}
	
	public function setup()
	{
	}

	public function testAdd()
	{
		$this->cart->truncate();
		
		$this->cart->add($prod = new Prod("007", "Banane"), 2);
		$this->cart->add($prpd = new Prod("009", "ColaCo"), 5);
		
		$prodCount = $this->cart->getProdCount();
		if(2 == $prodCount){
			$this->printMessage(L::__("CartTest::testAdd():succeeded"));
		} 
		else {
			$this->printError(L::__("CartTest::testAdd():failed: ") . $prodCount);
		}
	}

	public function testRemove()
	{
		$this->cart->truncate();
		$this->cart->add($prod = new Prod("007", "Banane"), 2);
		$this->cart->add($prpd = new Prod("009", "ColaCo"), 5);
		$this->cart->add($prpd = new Prod("012", "FcCklL"), 5);
		$this->cart->remove($prod);
		
		$prodCount = $this->cart->getProdCount();
		if(2 == $prodCount){
			$this->printMessage(L::__("CartTest::testRemove():succeeded"));
		}
		else {
			$this->printError(L::__("CartTest::testRemove():failed: ") . $prodCount);
		}
	}

	public function testRemoveBySKU()
	{
		$this->cart->truncate();
		$this->cart->add($prpd = new Prod("009", "ColaCo"), 5);
		$this->cart->add($prod = new Prod("007", "Banane"), 2);
		$this->cart->removeBySKU($prod->SKU);
		
		$prodCount = $this->cart->getProdCount();
		if(1 == $prodCount){
			$this->printMessage(L::__("CartTest::removeBySKU():succeeded"));
		}
		else {
			$this->printError(L::__("CartTest::removeBySKU():failed: ") . $prodCount);
		}	
	}

	public function testToJSON()
	{
		$this->cart->truncate();
		$this->cart->add($prpd = new Prod("009", "ColaCo"), 5);
		$this->cart->add($prod = new Prod("007", "Banane"), 2);
		$json = $this->cart->toJSON();
		print $json;	
		print PHP_EOL;
	}
}

?>
