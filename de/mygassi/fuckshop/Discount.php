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

	public function apply($amount)
	{
		$res = -100;
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
