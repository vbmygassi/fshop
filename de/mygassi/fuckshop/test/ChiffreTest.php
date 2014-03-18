<?php
require_once("de/mygassi/fuckshop/Chiffre.php");
require_once("de/mygassi/fuckshop/test/Test.php");

class ChiffreTest extends Test
{
	private $message;
	private $key;
	private $chiffre;	

	public function __construct()
	{
		$this->chiffre = new Chiffre();
		$this->message = "Entschuldigen Sie, kennen Sie diesen Mann? Er weiss nicht, dass seine Frau mich sucht.";
		$this->key = "Gödöllö";
	}
	
	public function testEncrypt()
	{
		$res = $this->chiffre->mc_encrypt($this->message, $this->key);
		$ares = "plGUg/o/NqwjyuEkZ0oUsRNUpaRGlK7G7lbLh5c6qFzw61TelJrpzE3qxx+pQ/r7IA2k8wqRACFQBaxBGQhBu3lBaO9wSZ5+ynn9UVYEvyDxfwE50LfWfZmSXKCbYPGN";
		if($ares == $res){
			$this->printMessage("ChiffreTest::testEncrypt():succeeded");
		}
		else{
			$this->printError("ChiffreTest::testEncrypt():failed");

		}
	}

	public function testDecrypt()
	{
		$res = $this->chiffre->mc_encrypt($this->message, $this->key);
		$res = $this->chiffre->mc_decrypt($res, $this->key);

		if($this->message == $res){
			$this->printMessage("ChiffreTest::testDecrypt():succeeded");
		}
		else{
			$this->printError("ChiffreTest::testDecrypt():failed");
		}
	}
}

?>
