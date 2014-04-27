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

		// no captcha token might mean no javascript, lets validate the captcha manually.
		if($_POST['contacttoken'] == '')
		{
			$result = $this->checkcaptcha($_POST['recaptcha_challenge_field'], $_POST['recaptcha_response_field'], false);
			if($result['valid'] != 'ok')
			{
				redirect('/contactus');
				return;
			}

		}
		else if($_SESSION['captchatoken'] == NULL || $_POST['contacttoken'] != $_SESSION['captchatoken'])
		{
			redirect('/contactus');
			return;
		}

		$_SESSION['captchatoken'] = NULL;

		$id = $this->Communication_expert->send_message_database('email', $_POST['name'], $_POST['contact'], $_POST['question']);

		$this->Communication_expert->send_message_email($_POST['name'], $_POST['contact'], $_POST['question'], $id);

		$data['subcontenttitle'] = "Contact Us";
		$this->loadview('contactussuccess', $data);



	}

	// JSON
	public function checkcaptcha($challenge, $response, $jsonresult = true)
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

		if($jsonresult)
			echo json_encode($result);
		else
			return $result;



	}



}

