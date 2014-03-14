<?php
require_once("de/mygassi/fuckshop/Cart.php");
require_once("de/mygassi/fuckshop/Prod.php");
require_once("de/mygassi/fuckshop/Order.php");
require_once("de/mygassi/fuckshop/Invoice.php");
require_once("de/mygassi/fuckshop/Shipping.php");
require_once("de/mygassi/fuckshop/Address.php");
require_once("de/mygassi/fuckshop/Customer.php");
require_once("de/mygassi/fuckshop/Revision.php");
require_once("de/mygassi/fuckshop/test/Test.php");

class OrderTest extends Test
{
	public function testNewOrder()
	{	
		// selects current customer
		$customer = new Customer("Viktor", "", "Berzsinszky");
		
		// selects a shipping address
		$address = new Address("Teststrasse", "42", "21098", "Hamburg", "de_DE");
		
		// shipping copies 
		// customer and shipping addres, 
		// even if the data gets deleted, shipping still has a customer and an address
		$shipping = new Shipping($customer, $address);
	
		// selects current cart
		$cart = new Cart(); 	
		$cart->add($prod = new Prod("007", "Banane"), 4);
		$cart->add($prpd = new Prod("009", "ColaCo"), 9);
		
		// sets up an order 	
		$this->order = new Order($customer, $shipping, $cart);
		
		// prints order json
		$this->printMessage($this->order->toJSON());
	}

	public function testInitInvoice()
	{
		// sets up an order
		$customer = new Customer("Viktor", "Berzsinszky");
		$address = new Address("Teststrasse", "42", "21098", "Hamburg", "de_DE");
		$shipping = new Shipping($customer, $address);
		$cart = new Cart(); 	
		$cart->add($prod = new Prod("007", "Banane"), 4);
		$cart->add($prpd = new Prod("009", "ColaCo"), 4);
		$this->order = new Order($customer, $shipping, $cart);
			
		// generates invoice
		$this->invoice = new Invoice($this->order);
		$this->printMessage($this->invoice->getPDF());
	}

	public function testAddRevision()
	{
		// sets up an order
		$customer = new Customer("Viktor", "Berzsinszky");
		$address = new Address("Teststrasse", "42", "21098", "Hamburg", "de_DE");
		$shipping = new Shipping($customer, $address);
		$cart = new Cart(); 	
		$cart->add($prod = new Prod("007", "Banane"), 4);
		$cart->add($prpd = new Prod("009", "ColaCo"), 4);
		$this->order = new Order($customer, $shipping, $cart);
	
		// adds revisions
		$this->order->addRevision(new Revision(L::__("Ihre Bestellung ist eingegangen."), Order::INITED));	
		$this->order->addRevision(new Revision(L::__("Ihre Bestellung ist versandt worden"), Order::SENT));	
		$this->order->addRevision(new Revision(L::__("Ihre Bestellung ist storniert worden"), Order::CANCELED));	

		// dumps the list
		$this->printMessage(json_encode($this->order->getRevisions()));
	}

	public function testCancelOrder()
	{
		// sets up an order
		$customer = new Customer("Viktor", "Berzsinszky");
		$address = new Address("Teststrasse", "42", "21098", "Hamburg", "de_DE");
		$shipping = new Shipping($customer, $address);
		$cart = new Cart(); 	
		$cart->add($prod = new Prod("007", "Banane"), 4);
		$cart->add($prpd = new Prod("009", "ColaCo"), 4);
		$this->order = new Order($customer, $shipping, $cart);
		$this->order->cancelOrder();	
		$this->printMessage(json_encode($this->order));
	}	
}
