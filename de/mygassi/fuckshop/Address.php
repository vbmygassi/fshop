<?php

class Address
{
	public $street;
	public $nr;
	public $zip;
	public $city;
	public $country;

	public function __construct($street, $nr, $zip, $city, $country)
	{
		$this->street = $street;
		$this->nr = $nr;
		$this->zip = $zip;
		$this->city = $city;
		$this->country = $country;
	}
}


?>
