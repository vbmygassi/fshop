<?php
require_once("de/mygassi/fuckshop/TaxRule.php");

class Tax
{
	private $rule;

	/*
	Sets a given Tax Rule
		like: "MwSt." : 19%
	*/	
	public function setRule($rule)
	{
		$this->rule = $rule;
	}

	/*
	Returns tax of a "netto" (net) "price" (amount) 
		as rounded(2) float value
	*/
	public function getTaxFromNetAmount($amount)
	{
		$res = 0;
		if(0 >= $amount){ return 0; }
		$one = $amount /100;
		$res = $one *$this->rule->getTaxInPercent();
		$res = round($res, 2);
		return $res;	
	}

	/*
	Returns tax of a "brutto" (gross) price (amount) 
		as rounded(2) float value
	*/	
	public function getTaxFromGrossAmount($amount)
	{
		$res = 0;
		if(0 >= $amount){ return 0; }
		$one = $amount /(100 +$this->rule->getTaxInPercent());
		$res = $one *$this->rule->getTaxInPercent();
		$res = round($res, 2);
		return $res;
	}
}

?>
