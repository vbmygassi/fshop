<?php

class Prod
{
	public $SKU;
	public $title;
	
	public $catIDs;
	
	public function __construct($SKU="0", $title="", $catIDs=array())
	{
		$this->title = $title;
		$this->SKU = $SKU;
		$this->catIDs = $catIDs;
	}

	/*
	Links prodcut to a category
	*/
	public function addCatID($id)
	{
		$this->catIDs[]= $id;
	}
}
