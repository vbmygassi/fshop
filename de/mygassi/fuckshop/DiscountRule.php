<?php

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
