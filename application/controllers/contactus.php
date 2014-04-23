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

	public function sendmessage()
	{
		$this->load->model('Communication_expert');

		if($_SESSION['captchatoken'] == NULL || $_POST['contacttoken'] != $_SESSION['captchatoken'])
		{
			redirect('/contactus');
			return;
		}

		$_SESSION['captchatoken'] = NULL;

		$id = $this->Communication_expert->send_message_database('email', $_POST['name'], $_POST['contact'], $_POST['question']);

		$this->Communication_expert->send_message_email($_POST['name'], $_POST['contact'], $_POST['question'], $id);



	}

	// JSON
	public function checkcaptcha($challenge, $response)
	{
		$this->load->helper('captcha');

		validate_captcha($challenge, $response);

		$result = array();

		if($_SESSION['captchatoken'] != NULL)
		{
			$result = array(
				"valid" => "ok",
				"token" => $_SESSION['captchatoken']
			);
		}
		else
		{
			$result = array(
				"valid" => "nok"
			);
		}

		echo json_encode($result);



	}



}

