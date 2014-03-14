<?php

class Catalog
{
	public $prods;
	public $cats;
	
	public function __construct()
	{
		$this->prods = array();
		$this->cats = array();
	}

	public function addCat($cat)
	{
		$this->cats[]= $cat;
	}

	public function addProd($prod)
	{
		$this->prods[]= $prod;
	}
}

?>
