<?php
require_once("de/mygassi/fuckshop/test/Test.php");
require_once("de/mygassi/fuckshop/Tax.php");

class TaxTest extends Test
{
	private $tax;

	public function __construct()
	{
		$this->tax = new Tax();
	}

	public function testTaxFromGermanGrossAmount()
	{
		$res = $this->tax->setRule(new TaxRule("19% Mehrwertsteuer", 19.0));
		$res = $this->tax->getTaxFromGrossAmount(149.99);
		
		$assumedRes = round(23.94798319327737, 2);	
		if($assumedRes === $res){
			$this->printMessage("TaxTest::testTaxFromGermanGrossAmount::succeeded");
		}
		else {
			$this->printError("TaxTest::testTaxFromGermanGrossAmount:failed: " . $res);
		}
	}

	public function testTaxFromGermanNetAmount()
	{	
		$res = $this->tax->setRule(new TaxRule("19% Mehrwertsteuer", 19.0));
		$res = $this->tax->getTaxFromNetAmount(12.50);
		
		$assumedRes = round(2.375, 2);	
		
		if($assumedRes === $res){
			$this->printMessage("TaxTest::testTaxFromGermanNetAmount::succeeded");
		}
		else{
			$this->printError("TaxTest::testTaxFromGermanNetAmount:failed: " . $res);
		}	
	}

	public function testTaxFromNoSuchGrossAmount()
	{
		$res = $this->tax->setRule(new TaxRule("No SUCH tax", 2.98));
		$res = $this->tax->getTaxFromGrossAmount(100);
		
		$assumedRes = round(2.89376577976306, 2);	
		
		if($assumedRes === $res){
			$this->printMessage("TaxTest::testTaxFromNoSuchGrossAmount::succeeded");
		}
		else{
			$this->printError("TaxTest::testTaxFromNoSuchGrossAmount:failed: " . $res);
		}	
	}
}

?>
