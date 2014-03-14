<?php
require_once("de/mygassi/fuckshop/Locale.php");

class Order
{
	public $OID; // real order id
	
	public $customer;
	public $cart;
	public $shipping;
	public $invoice;
	public $packaging;
	protected $revisions;
	protected $state;	
	
	const CANCELED = "canceled";
	const INITED = "inited";
	const SENT = "sent";
	const PAYED = "payed";
	const HOLDED = "holded";
	
	public function __construct($customer, $cart, $shipping)
	{
		$this->customer = $customer;
		$this->cart = $cart;
		$this->shipping = $shipping;
		$this->revisions = array();
		$this->OID = 0; // all time unique generated id
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
		$this->setState($revision = new Revision($this->OID, L::__("Die Bestellung ist bezahlt."), self::PAYED));
	}

	public function setOrderSent()
	{
		$this->setState($revision = new Revision($this->OID, L::__("Die Bestellung ist versandt worden."), self::PAYED));
	}
}


?>
