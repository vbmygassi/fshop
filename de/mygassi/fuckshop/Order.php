<?php
require_once("de/mygassi/fuckshop/Locale.php");

class Order
{
	public $OID; // real order id, like the one order id like for real
	public $customer;
	public $cart;
	public $shipping;
	public $invoice;
	public $packaging;
	public $dicsount;

	protected $revisions;
	protected $state;	
	
	const INITED = "inited";
	const CANCELED = "canceled";
	const PAID = "paid";
	const INVOICED = "invoiced";
	const HOLDED = "holded";
	const SENT = "sent";
	
	public function __construct($customer, $cart, $shipping)
	{
		$this->OID = 0; // all time unique generated id
		$this->customer = $customer;
		$this->shipping = $shipping;
		$this->revisions = array();
		$this->cart = $cart;
	}

	public function setCart($cart)
	{
		$this->cart = $cart;
	}
	
	public function toJSON()
	{
		return json_encode($this);
	}

	public function toString()
	{
		return serialize($this);
	}

	public function setState($revision)
	{
		$this->state = $revision->state;
		$this->revisions[]= $revision;
	}

	public function getRevisions()
	{
		return $this->revisions;
	}

	public function cancelOrder()
	{
		$this->setState($revision = new Revision($this->OID, L::__("Die Bestellung ist Storniert."), self::CANCELED));
	}

	public function setOrderPayed()
	{
		$this->setState($revision = new Revision($this->OID, L::__("Die Bestellung ist bezahlt."), self::PAID));
	}

	public function setOrderSent()
	{
		$this->setState($revision = new Revision($this->OID, L::__("Die Bestellung ist versandt worden."), self::SENT));
	}
}


?>
