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
	An order consists of products, taxes, discount whatsoever.
	The order (and the products whithin thit might apply a given discount-rule, or | even an coupon
		sets up an invoice
		that gets presented
			that "freezes" 
			and than gets payed
		"clazz Discount" is bull.
		The Order applies the given discount rules (as for products or for the cart or for whatever reason
			and generates 
				the invoice
				the packaging
				...
		fuckdiss discount	
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
