<?php


class Chiffre
{
	public function encrypt($plaintext, $key)
	{
		$iv_size = mcrypt_get_iv_size(MCRYPT_RIJNDAEL_256, MCRYPT_MODE_CBC);
		$iv = mcrypt_create_iv($iv_size, MCRYPT_RAND);
		$ciphertext = mcrypt_encrypt(MCRYPT_RIJNDAEL_256, $key, $plaintext, MCRYPT_MODE_CBC, $iv);
		$ciphertext = $iv.$ciphertext;
		$ciphertext_base64 = base64_encode($ciphertext);
		return $ciphertext_base64;
	}

	public function decrypt($ciphertext, $key)
	{
		$ciphertext_dec = base64_decode($ciphertext);
		$iv_size = mcrypt_get_iv_size(MCRYPT_RIJNDAEL_256, MCRYPT_MODE_CBC);
		$iv_dec = substr($ciphertext_dec, 0, $iv_size);
		$ciphertext_dec = substr($ciphertext_dec, $iv_size);
		$plaintext_dec = mcrypt_decrypt(MCRYPT_RIJNDAEL_256, $key, $ciphertext_dec, MCRYPT_MODE_CBC, $iv_dec);
		return $plaintext_dec;
	}
}
