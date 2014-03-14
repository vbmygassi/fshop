<?php

class CartItem
{
	public $prod;
	public $qty;

	public function __construct($prod, $qty)
	{
		$this->prod = $prod;
		$this->qty = $qty;
	}
}
