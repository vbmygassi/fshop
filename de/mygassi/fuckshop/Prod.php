<?php

class Prod
{
	public $SKU;
	public $title;
	public $qty;
	public function __construct($SKU, $title, $qty)
	{
		$this->SKU = $SKU;
		$this->title = $title;
		$this->qty = $qty;
	}
}
