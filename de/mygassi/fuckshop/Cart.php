<?php
require_once("de/mygassi/fuckshop/Session.php");
require_once("de/mygassi/fuckshop/CartItem.php");

Class Cart
{
	protected $prods;
	protected $session;
	/*
	Reads Cart from session
	*/	
	public function __construct()
	{
		$this->session = new Session();
		$this->items = $this->getSessionCart();
		if(null == $this->items){
			$this->items = array();
		}
	}
	
	/*
	Adds an prod to the cart
	*/
	public function add($prod, $qty)
	{
		$item = new CartItem($prod, $qty);
		$this->items[]= $item;
		$this->setSessionCart();
	}

	/*
	Removes an prod from the cart
	*/
	public function remove($prod)
	{
		$this->removeBySKU($prod->SKU);
	}

	/*
	Removes an prod from cart by SKU
	*/
	public function removeBySKU($SKU)
	{
		$items = array();
		foreach($this->items as $item){
			if($item->prod->SKU != $SKU){
				$items[]= $item;
			}
		}
		$this->items = $items;
		$this->setSessionCart();
	}

	/*
	Truncates cart
	*/
	public function truncate()
	{
		$this->items = array();
		$this->setSessionCart();
	}		
	
	/*
	Gets amount of prods added the cart
	*/
	public function getProdCount()
	{
		$res = count($this->items);
		return $res;
	}

	/*
	Writes prods in the cart to session
	*/
	protected function setSessionCart()
	{
		$this->session->set("cart", $this->items);
	}

	protected function getSessionCart()
	{
		return $this->session->get("cart");
	}

	/*
	Returns products as JSON
	*/
	public function toJSON()
	{
		return json_encode($this->items);
	}

	/*
	Returns products as string
	*/
	public function toString()
	{
		return serialize($this->items);
	}
}





?>
