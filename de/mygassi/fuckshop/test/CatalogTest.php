<?php
require_once("de/mygassi/fuckshop/Catalog.php");
require_once("de/mygassi/fuckshop/Cat.php");
require_once("de/mygassi/fuckshop/Prod.php");
require_once("de/mygassi/fuckshop/test/Test.php");

class CatalogTest extends Test
{
	protected $catalog;
	protected $cats;
	protected $prods;
	
	public function __construct()
	{
		$this->catalog = new Catalog();
		$this->catalog->addCat(new Cat("1", "Test Cati 1", "Es gibt immer einen, der es billiger macht", "100/200/200/1234456/1"));
		$this->catalog->addCat(new Cat("2", "Test Cati 2", "Es gibt immer einen, der es billiger macht", "100/200/200/1234456/2"));
		$this->catalog->addProd(new Prod("eU12i_eE", "16er Flantsch", array(100, 200, 300)));
		$this->catalog->addProd(new Prod("eU12i_dE", "Querspannlenkwanne", array(100, 200, 300)));
		$this->catalog->addProd(new Prod("eU12i_fE", "Siemenslufthaken", array(100, 200, 300, 1298)));
		$this->catalog->addProd(new Prod("eU12i_fE", "Siemenslufthaken", array(100, 200, 300, 1298)));
		$this->catalog->addProd(new Prod("eU12i_fE", "Siemenslufthaken", array(100, 200, 300, 1298)));
		$this->catalog->addProd(new Prod("eU12i_fE", "Siemenslufthaken", array(100, 200, 300, 1298)));
		$this->catalog->addProd(new Prod("eU12i_fE", "Siemenslufthaken", array(100, 200, 300, 1298)));
		$this->catalog->addProd(new Prod("eU12i_fE", "Siemenslufthaken", array(100, 200, 300, 1298)));
		$this->catalog->addProd(new Prod("eU12i_fE", "Siemenslufthaken", array(100, 200, 300, 1298)));
		$this->catalog->addProd(new Prod("eU12i_fE", "Siemenslufthaken", array(100, 200, 300, 1298)));
		$this->catalog->addProd(new Prod("eU12i_fE", "Siemenslufthaken", array(100, 200, 300, 1298)));
		$this->catalog->addProd(new Prod("eU12i_fE", "Siemenslufthaken", array(100, 200, 300, 1298)));
		$this->catalog->addProd(new Prod("eU12i_fE", "Siemenslufthaken", array(100, 200, 300, 1298)));
		$this->catalog->addProd(new Prod("eU12i_fE", "Siemenslufthaken", array(100, 200, 300, 1298)));
		$this->catalog->addProd(new Prod("eU12i_fE", "Siemenslufthaken", array(100, 200, 300, 1298)));
		$this->catalog->addProd(new Prod("eU12i_fE", "Siemenslufthaken", array(100, 200, 300, 1298)));
		$this->catalog->addProd(new Prod("eU12i_fE", "Siemenslufthaken", array(100, 200, 300, 1298)));
		$this->catalog->addProd(new Prod("eU12i_fE", "Siemenslufthaken", array(100, 200, 300, 1298)));
		$this->catalog->addProd(new Prod("eU12i_fE", "Siemenslufthaken", array(100, 200, 300, 1298)));
		$this->catalog->addProd(new Prod("eU12i_fE", "Siemenslufthaken", array(100, 200, 300, 1298)));
		$this->catalog->addProd(new Prod("eU12i_fE", "Siemenslufthaken", array(100, 200, 300, 1298)));
		$this->catalog->addProd(new Prod("eU12i_fE", "Siemenslufthaken", array(100, 200, 300, 1298)));
		$this->printMessage(json_encode($this->catalog));
	}
}
