<?php

class Revision
{
	public $message;
	public $state;
	public $timestamp;

	public function __construct($message, $state)
	{
		$this->message = $message;
		$this->state = $state;
		$this->timestamp = microtime();
	}
}
