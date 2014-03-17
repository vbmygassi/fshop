<?php

class TaxRule
{
	private $title;
	private $taxInPercent;

	public function __construct($title, $taxInPercent)
	{
		$this->title = $title;
		$this->taxInPercent = $taxInPercent;
	}

	public function getTaxInPercent()
	{
		return $this->taxInPercent;
	}
}


?>
