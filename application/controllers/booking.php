<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Booking extends MY_Controller {

  private $data;

  public function __construct()
  {
      parent::__construct();

      $this->data['additionalscripts'][] = 'select2.min.js';
      $this->data['additionalscripts'][] = 'bootstrap-datetimepicker.min.js';
      $this->data['additionalscripts'][] = 'jquery.timepicker.min.js';

      $this->data['additionalstyles'][] = 'select2.css';
      $this->data['additionalstyles'][] = 'bootstrap-datetimepicker.min.css';
      $this->data['additionalstyles'][] = 'jquery.timepicker.css';

      $this->data['subcontenttitle'] = "Booking";
  }

	public function index()
	{
    $this->load->helper(array('form', 'url'));

    $this->load->library('form_validation');

    $this->form_validation->set_rules('whoname', 'Contact Name', 'required|trim|xss_clean');
    $this->form_validation->set_rules('email', 'E-Mail Address', 'required|valid_email|trim|xss_clean');
    $this->form_validation->set_rules('address', 'Street Address', 'required|trim|xss_clean');
    $this->form_validation->set_rules('postalcode', 'Postal Code', 'required|trim|xss_clean');
    $this->form_validation->set_rules('phone', 'Phone Number', 'required|trim|xss_clean');
    $this->form_validation->set_rules('firstdatechoice', 'First Date Choice', 'required|trim|xss_clean');
    $this->form_validation->set_rules('firstdatechoice-until', 'First Date Choice (until)', 'required|trim|xss_clean');

    $this->form_validation->set_rules('title', 'Title', 'xss_clean');
    $this->form_validation->set_rules('address2', 'Address Line 2', 'xss_clean');
    $this->form_validation->set_rules('seconddatechoice', 'Second Date Choice', 'xss_clean');
    $this->form_validation->set_rules('seconddatechoice-until', 'Second Date Choice (until)', 'xss_clean');
    $this->form_validation->set_rules('referral', 'Referral', 'xss_clean');
    $this->form_validation->set_rules('previousbook', 'Previously Booked', 'xss_clean');

    $this->form_validation->set_error_delimiters('<div class="alert alert-danger"><p><strong><span class="glyphicon glyphicon-wrench superglyph"></span> Sorry, please check the following issues:</strong></p>', '</div>');

    if ($this->form_validation->run() == FALSE)
    {
      $this->loadview('booking', $this->data);
    }
    else
    {
      $this->loadview('bookingsuccess', $this->data);
    }
	}


}

