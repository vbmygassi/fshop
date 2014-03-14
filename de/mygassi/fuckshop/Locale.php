<?php

class L
{
	static public $locale = "de_DE";
	static protected $map = array();
	
	/*
	Selects mapped String
	*/
	static public function __($key)
	{
		if(!isset(self::$map[$key])){
			return $key;	
		}		
		return self::$map[$key];	
	}

	/*
	Sets current locale
	*/
	static public function setLocale($locale)
	{
		self::$locale = $locale;

		// todo: Load locale mappings from somewhere sometime 
		self::$map = array(); 
	}
}
