<?php
require_once("de/mygassi/fuckshop/Catalog.php");
require_once("de/mygassi/fuckshop/test/Test.php");

class CatalogTest extends Test
{
	protected $catalog;
	protected $cats;
	protected $prods;
	
	public function __construct()
	{
		$this->catalog = new Catalog();
	}
}
