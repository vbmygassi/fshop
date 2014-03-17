<?php
/*
 A discount-rule has 
	a title,
	a description,
	frontend related odd bull 
	a rule 
		"price is greater than" or
		"customer is of group" or 
		"customer is a first timer" or such

	a rule gets applied
		clerk-typed switched with different calculations oda?

	ja wie würdest du denn das machen?
	ich meine, wie, wie sollte das gehen, du eierhals?
	ja aufschreiben, oder?
	ja, wenn, wenn der kunde 20% bekommt beim ersten mal dann, dann, dann halt 
	apply so; im Discount; 
	switch(ruleType){
		case "CUSTOMER_FIRST_TIMER"
			price = price -15;
		
	}
	odai?
	woher soll ich wissen, was die von mir wollen ja?
*/
class DiscountRule
{
	private $title;
	private $amount;
	private $percent;
	private $percentOrAmount;
	const AMOUNT = "AMOUNT";
	const PERCENT = "PERCENT";

	public function __construct($title="", $amount=0, $percent=0)
	{
		$this->title = $title;
		if(0 != $amount){
			$this->percentOrAmount = self::AMOUNT;
			$this->amount = $amount;
		}
		else if(0 != $percent){
			$this->percentOrAmount = self::PERCENT;
			$this->percnet = $percent;	
		}
	}
}
