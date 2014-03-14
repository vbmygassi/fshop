<?php
require_once("de/mygassi/fuckshop/Session.php");

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
		$this->prods = $this->getSessionCart();
		if(null == $this->prods){
			$this->prods = array();
		}
	}
	
	/*
	Adds an prod to the cart
	*/
	public function add($prod)
	{
		$this->prods[]= $prod;
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
		$prods = array();
		foreach($this->prods as $prod){
			if($prod->SKU != $SKU){
				$prods[]= $prod;
			}
		}
		$this->prods = $prods;
		$this->setSessionCart();
	}

	/*
	Truncates cart
	*/
	public function truncate()
	{
		$this->prods = array();
		$this->setSessionCart();
	}		
	
	/*
	Gets amount of prods added the cart
	*/
	public function getProdCount()
	{
		$res = count($this->prods);
		return $res;
	}

	/*
	Writes prods in the cart to session
	*/
	protected function setSessionCart()
	{
		$this->session->set("cart", $this->prods);
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
		return json_encode($this->prods);
	}

	/*
	Returns products as string
	*/
	public function toString()
	{
		return serialize($this->prods);
	}
}





?>
