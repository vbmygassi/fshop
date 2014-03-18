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
		$this->message = "Fuck your face.";
		$this->key = "Vizekanzler";
	}
	
	public function testEncrypt()
	{
		$res = $this->chiffre->mc_encrypt($this->message, $this->key);
		$ares = "kBI2JmibrORdLyrY32Ze1YchJktiEqflLMaRNYGKFKA=";
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
		
		$ares = $this->message;
		$ares = "Fuck your fucking face.";

		if($ares == $res){
			$this->printMessage("ChiffreTest::testDecrypt():succeeded");
		}
		else{
			$this->printError("ChiffreTest::testDencrypt():failed");
		}
	}
}

?>
