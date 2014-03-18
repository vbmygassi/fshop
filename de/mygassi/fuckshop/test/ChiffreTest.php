<?php
require_once("de/mygassi/fuckshop/Chiffre.php");
require_once("de/mygassi/fuckshop/test/Test.php");

class ChiffreTest extends Test
{
	private $key;
	private $message;
	private $chiffre;	

	public function __construct()
	{
		$this->chiffre = new Chiffre();
		$this->message = "Kennen Sie diesen Mann? Er weiss nicht, dass seine Frau mich sucht.";
		$this->key = hash("SHA256", "Gödöllö", true);
	}
	
	public function testEncrypt()
	{
		$res = $this->chiffre->encrypt($this->message, $this->key);
		$this->printMessage("ChiffreTest::testEncrypt():succeeded: " . $res);
	}

	public function testDecrypt()
	{
		$res = $this->chiffre->encrypt($this->message, $this->key);
		$res = $this->chiffre->decrypt($res, $this->key);
		if(trim($this->message) == trim($res)){
			$this->printMessage("ChiffreTest::testDecrypt():succeeded: " . $res);
		}
		else{
			$this->printError("ChiffreTest::testDecrypt():failed");
		}
	}
}

?>
