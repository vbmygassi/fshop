<?php

class Discount 
{
	private $rules;
	
	public function __construct()
	{
		$this->rules = array();
	}
	
	public function addRule($rule)
	{
		$this->rules[]= $rule;
	}

	/*
	This is ugly.
	An order consists of products, taxes, discounts whatsoever.
	The order (and the products whithin that might "consume" a given discount-rule, or | coupon
		sets up an invoice
			that "freezes" and gets presented as html, pdf and email and db record 
			and gets payed
			than the order sets up the "lieferschein" (hello, mr. liefersheyn...)
			and retoure and than
			and than 
			and than.

		The order *consumes the given discount rules and or coupons (for the products each or for the emtire cart or for the order 
				...
	
	an ORDER has a discount
		->and generates an invoice
			->that gets delivered to the client
		->order generates the lieferscheyen and such
	*/
	public function apply($amount)
	{
		$res = 0;
		foreach($this->rules as $rule){
			switch($rule->type){
				case "presserabatt":
					$res = $amount -22;
					break;
				case "first_time_customer":
					$res = $amount -10.0;
					break;
				case "tourist": 
					$res = $amount *2;
					break;
			}
		}
		return $res;
	}
}
