<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Problem extends MY_Controller {

  private $data;

  public function __construct()
  {
      parent::__construct();


      $this->load->helper('recaptchalib');
      $this->load->helper('keys');

      $this->data['additionalscripts'][] = 'jquery.rotate.js';
      $this->data['subcontenttitle'] = "Report a Problem";
  }

	public function index()
	{

    $_SESSION['ref'] = $_SERVER['HTTP_REFERER'];

    $this->loadview('problem/problem', $this->data);

	}

  public function website()
  {
    $this->data['publickey'] = get_recaptcha_public_key();
    $this->loadview('problem/website', $this->data);
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
        redirect('/problem/website');
        return;
      }

    }
    else if($_SESSION['captchatoken'] == NULL || $_POST['contacttoken'] != $_SESSION['captchatoken'])
    {
      redirect('/problem/website');
      return;
    }

    $_SESSION['captchatoken'] = NULL;

    $this->Communication_expert->send_error_email($_POST['contact'], $_POST['report']);

    $this->loadview('problem/reportsuccess', $this->data);



  }


}

