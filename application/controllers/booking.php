<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Booking extends MY_Controller {

	public function index()
	{

  		$data['additionalscripts'][] = 'select2.min.js';
  		$data['additionalscripts'][] = 'bootstrap-datetimepicker.min.js';
  		$data['additionalscripts'][] = 'jquery.timepicker.min.js';

  		$data['additionalstyles'][] = 'select2.css';
  		$data['additionalstyles'][] = 'bootstrap-datetimepicker.min.css';
  		$data['additionalstyles'][] = 'jquery.timepicker.css';

		$this->loadview('booking', $data);
	}

}

