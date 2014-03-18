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
		$this->key = hash("SHA256", "Gödöllö", true);
	}
	
	public function testEncrypt()
	{
		$res = $this->chiffre->mc_encrypt($this->message, $this->key);
		$ares = "mjFD8LbVxOjRDQdJUkg7qI1dkrdBtSw3WOVFZMSK43MSLIHnNq6A91sRfdPwHW7O98YvzDEGBNA9oOD13VGrjMtqAG1cIPotZxa6SRPVol2Heohl2hAmoqccUiWDvHy6";
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
