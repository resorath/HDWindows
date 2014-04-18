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
		$this->load->helper('keys');

		$data['subcontenttitle'] = "Contact Us";

		$data['publickey'] = get_recaptcha_public_key();

		$this->loadview('contactus', $data);
	}

	public function sendmessage($token)
	{


	}

	public function checkcaptcha($challenge, $response)
	{
		$this->load->helper('captcha');

		
		validate_captcha('asdf', 'asdf');


	}



}

