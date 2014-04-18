<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Contactus extends MY_Controller {

	function __construct()
	{
		parent::__construct();

		$this->load->database();

		$this->load->helper('recaptchalib');

	}

	public function index()
	{
		$data['subcontenttitle'] = "Contact Us";

		$data['publickey'] = get_recaptcha_public_key(); // you got this from the signup page


		$this->loadview('contactus', $data);
	}

	public function sendmessage()
	{
		$privatekey = get_recaptcha_private_key();

	}


}

