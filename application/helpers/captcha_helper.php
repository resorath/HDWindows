<?php

	$ci =& get_instance();

	$ci->load->helper('recaptchalib');
	$ci->load->helper('keys');

	function validate_captcha($challenge, $response)
	{
		$privatekey = get_recaptcha_private_key();

		$resp = recaptcha_check_answer ($privatekey, $_SERVER["REMOTE_ADDR"], $challenge, $response);

		if($resp->is_valid)
		{
			$_SESSION['captchatoken'] = rand_sha1(60);
		}
		else
		{
			$_SESSION['captchatoken'] = NULL;
		}
	}



?>