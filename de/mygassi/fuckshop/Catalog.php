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

	public function loadCatalogByCategoryId($cid)
	{
		$this->cats = array();
		$this->prods = array();
		$this->addCat(new Cat("1", "Ist es das?", "Hast du gefunden, was du hier gesucht hast?", "100/200/200/1234456/1"));
		$this->addProd(new Prod("eU12i_fE", "Hey, who draw this dick into my face?", array(100, 200, 300, 1298)));
		$this->addProd(new Prod("eU12i_fE", "Wasn't your face always like this??", array(100, 200, 300, 1298)));
		return $this;
	}
}

?>
