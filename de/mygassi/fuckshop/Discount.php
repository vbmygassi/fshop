<?php

class Discount 
{
	private $rules;
	
	public function __construct()
	{
		$this->rule = array();
	}
	
	public function addRule($rule)
	{
		$this->rules[]= $rule;
	}

	public function apply($amount)
	{
		return $amount +13.8;
	}
}
