<?php

class Shipping
{
	public $address;
	public $customer; 

	public function __construct($address, $customer)
	{
		$this->address = $address;
		$this->customer = $customer;
	}	
}
