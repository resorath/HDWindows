<?php

	function get_recaptcha_public_key()
	{
		// valid for localhost
		return "6LfCFfISAAAAAPsR0MwfTvRFjJQ0ZAG_TEVk7iYY";
	}

	function get_recaptcha_private_key()
	{
		// valid for localhost
		return "6LfCFfISAAAAAEQDeDYsAyBLsGr_WhTkbccSEi5U";
	}

	function rand_sha1($length) {
	  $max = ceil($length / 40);
	  $random = '';
	  for ($i = 0; $i < $max; $i ++) {
	    $random .= sha1(microtime(true).mt_rand(10000,90000));
	  }
	  return substr($random, 0, $length);
	}


?>