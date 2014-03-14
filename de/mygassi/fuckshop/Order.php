<?php
require_once("de/mygassi/fuckshop/Locale.php");

class Order
{
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
	
	public function __construct($customer, $cart, $shipping)
	{
		$this->customer = $customer;
		$this->cart = $cart;
		$this->shipping = $shipping;
		$this->revisions = array();
	}

	public function toJSON()
	{
		return json_encode($this);
	}

	public function toString()
	{
		return serialize($this);
	}

	public function addRevision($revision)
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
		$this->state = self::CANCELED;
		$this->addRevision($revision = new Revision(L::__("Die Bestellung ist Storniert."), self::CANCELED));
	}
}


?>
