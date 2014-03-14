<?php
require_once("de/mygassi/fuckshop/Session.php");
require_once("de/mygassi/fuckshop/test/Test.php");

class SessionTest extends Test
{
	protected $session;
	public function __construct()
	{
		$this->session = new Session();	
	}

	public function testToJSON()
	{
		$this->printMessage($this->session->toJSON());
	}

	public function testToString()
	{
		$this->printMessage($this->session->toString());
	}

	public function testTruncate()
	{
		$this->session->truncate();	
		$this->printMessage($this->session->toString());
	}
}
