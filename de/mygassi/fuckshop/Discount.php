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

	public function apply()
	{
		return 100.0;
	}
}
