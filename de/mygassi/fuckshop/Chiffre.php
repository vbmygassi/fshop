<?php

class Chiffre
{
	/* http://phpsnaps.com/snaps/view/rijndael-256-bit-encryption-using-mcrypt/*/
	public function mc_encrypt($encrypt, $mc_key)
	{
		// http://stackoverflow.com/questions/3422759/php-aes-encrypt-decrypt
		// $iv = mcrypt_create_iv(mcrypt_get_iv_size(MCRYPT_RIJNDAEL_256, MCRYPT_MODE_ECB), MCRYPT_RAND);
		$iv = mcrypt_create_iv(mcrypt_get_iv_size(MCRYPT_RIJNDAEL_256, MCRYPT_MODE_CBC), MCRYPT_RAND);
		$passcrypt = trim(mcrypt_encrypt(MCRYPT_RIJNDAEL_256, $mc_key, trim($encrypt), MCRYPT_MODE_ECB, $iv));
		$encode = base64_encode($passcrypt);
		return $encode;
	}

	function mc_decrypt($decrypt, $mc_key)
	{
		$decoded = base64_decode($decrypt);
		// $iv = mcrypt_create_iv(mcrypt_get_iv_size(MCRYPT_RIJNDAEL_256, MCRYPT_MODE_ECB), MCRYPT_RAND);
		$iv = mcrypt_create_iv(mcrypt_get_iv_size(MCRYPT_RIJNDAEL_256, MCRYPT_MODE_CBC), MCRYPT_RAND);
		$decrypted = trim(mcrypt_decrypt(MCRYPT_RIJNDAEL_256, $mc_key, trim($decoded), MCRYPT_MODE_ECB, $iv));
		return $decrypted;
	}
}

?>
