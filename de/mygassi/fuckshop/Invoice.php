<?php
require_once("de/mygassi/fuckshop/Locale.php");

class Invoice
{
	public $order;
	public $PDF;
	
	public function __construct($order)
	{
		$this->order = $order;
	}

	public function getPDF()
	{
		$this->PDF = $this->initPDF();
		return $this->PDF;
	}

	protected function initPDF()
	{
		$this->PDF = L::__("[%PDF]Very Important PDF Document");		
		return $this->PDF;
	}
}






?>
