<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Getstarted extends MY_Controller {

	public function index()
	{
		$data['subcontenttitle'] = "Get Started";
		$this->loadview('getstarted', $data);
	}

	public function lookuppostalcode($code)
	{
		$_SESSION['postalcode'] = $code;

		if($this->Quote_expert->PostalCodeInServiceArea($code))
		{
			echo "yes";
			$_SESSION['postalcodevalid'] = true;
		}
		else
		{
			$_SESSION['postalcodevalid'] = false;
			echo "no";
		}

	}
}

