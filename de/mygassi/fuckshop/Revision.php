<?php

class Revision
{
	public $orderID;
	public $message;
	public $state;
	public $timestamp;

	public function __construct($oid, $message, $state)
	{
		$this->orderID = $oid;
		$this->message = $message;
		$this->state = $state;
		$this->timestamp = microtime();
	}
}
