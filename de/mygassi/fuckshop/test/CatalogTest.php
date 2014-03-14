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
		$this->catalog->addCat(new Cat("1", "Test Cati 1", "Es gibt immer einen, der es noch billiger macht.", "100/200/200/1234456/1"));
		$this->catalog->addCat(new Cat("2", "Test Cati 2", "Software ist wie die Wurst, von der man zu Nullkosten immer eine Scheibe abschneiden kann.", "100/200/200/1234456/2"));
		$this->catalog->addProd(new Prod("eU12i_eE", "16er Flantsch", array(100, 200, 300)));
		$this->catalog->addProd(new Prod("eU12i_dE", "Querspannlenkwanne", array(100, 200, 300)));
		$this->catalog->addProd(new Prod("eU12i_fE", "Siemenslufthaken", array(100, 200, 300, 1298)));
		$this->catalog->addProd(new Prod("eU12i_fE", "Siemenslufthaken", array(100, 200, 300, 1298)));
		$this->catalog->addProd(new Prod("eU12i_fE", "Siemenslufthaken", array(100, 200, 300, 1298)));
		$this->catalog->addProd(new Prod("eU12i_fE", "Das Problem mit Software ist; jeder hat sie.", array(100, 200, 300, 1298)));
		$this->catalog->addProd(new Prod("eU12i_fE", "Wissen erlangt man nicht durch logisches Denken.", array(100, 200, 300, 1298)));
		$this->catalog->addProd(new Prod("eU12i_fE", "Bizt du aukh zo glücklikch, wie ich?", array(100, 200, 300, 1298)));
		$this->catalog->addProd(new Prod("eU12i_fE", "Siemenslufthaken", array(100, 200, 300, 1298)));
		$this->catalog->addProd(new Prod("eU12i_fE", "Man sieht die Menschen meist nur, wenn sie oben sind.", array(100, 200, 300, 1298)));
		$this->catalog->addProd(new Prod("eU12i_fE", "Wir können die Zinsen unserer Schulden nicht mehr tilgen.", array(100, 200, 300, 1298)));
		$this->catalog->addProd(new Prod("eU12i_fE", "Um 1900 gab es 1.5 Milliarden Menschen.", array(100, 200, 300, 1298)));
		$this->catalog->addProd(new Prod("eU12i_fE", "In Hamburg hat es seit dem August 2013 zwei mal geregnet.", array(100, 200, 300, 1298)));
		$this->catalog->addProd(new Prod("eU12i_fE", "Siemenslufthaken", array(100, 200, 300, 1298)));
		$this->catalog->addProd(new Prod("eU12i_fE", "Siemenslufthaken", array(100, 200, 300, 1298)));
		$this->catalog->addProd(new Prod("eU12i_fE", "Siemenslufthaken", array(100, 200, 300, 1298)));
		$this->catalog->addProd(new Prod("eU12i_fE", "Siemenslufthaken", array(100, 200, 300, 1298)));
		$this->catalog->addProd(new Prod("eU12i_fE", "Bin ich wirklich so schwer zu verstehen?", array(100, 200, 300, 1298)));
		$this->catalog->addProd(new Prod("eU12i_fE", "Siemenslufthaken", array(100, 200, 300, 1298)));
		$this->catalog->addProd(new Prod("eU12i_fE", "Warum sollte man, zum Beispiel PHP in XML tun?", array(100, 200, 300, 1298)));
		$this->catalog->addProd(new Prod("eU12i_fE", "-Wo ist Ulrich? -Ach, Urlik wohnen jetzt andere Haus. Seine Frojndi kommt mit Auto und weg. Er wohnt da hinten jetzt im grossen Haus.", array(100, 200, 300, 1298)));
		$this->catalog->addProd(new Prod("eU12i_fE", "Siemenslufthaken", array(100, 200, 300, 1298)));
		
		$this->printMessage(json_encode($this->catalog));
	}

	public function testLoadCatalogByCategoryId($cid)
	{
		// selects products of a cateogory: beats me... 
		$this->printMessage(json_encode($this->catalog->loadCatalogByCategoryId($cid)));
	}
}
