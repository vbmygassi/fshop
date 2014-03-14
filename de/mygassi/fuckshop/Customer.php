<?php

class Customer
{
	protected $id;
	public $firstname;
	public $lastname;
	public $name;
	public $m;
	
	public function __construct($firstname="Firstname", $lastname="Lastname", $m="")
	{
		$this->firstname = $firstname;
		$this->lastname = $lastname;
		$this->m = $m;
		$this->name = $firstname . " " . $m . " " .$lastname;
	}
}
