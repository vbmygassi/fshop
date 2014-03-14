<?php

class Session
{
	public function __construct()
	{
		if(null == session_id()){
			session_start();
		}
	}

	/*
	Sets an array of key=>value pairs to the session model
	*/
	public function set($key, $value)
	{
		if(!isset($_SESSION)){
			return false;	
		}
		$_SESSION[$key] = $value;
		return true;
	}

	/*
	Returns a session var by a given key
	*/
	public function get($key)
	{
		$res = null;
		if(!isset($_SESSION)){
			return $res;
		}
		if(isset($_SESSION[$key])){
			$res = $_SESSION[$key];
		}
		return $res;
	}

	/*
	Unsets session
	*/
	public function truncate()
	{
		session_unset();
	}

	/*
	Sets login level
	*/
	public function auth($group)
	{
		if(!isset($_SESSION)){
			return false;
		}
		$_SESSION["auth"] = $group;
		return true;
	} 

	public function toString()
	{
		$res = $_SESSION;
		$res[]= session_id();
		return serialize($res);
	}

	public function toJSON()
	{
		$res = $_SESSION;
		$res[]= session_id();
		return json_encode($res);
	}
}







?>
