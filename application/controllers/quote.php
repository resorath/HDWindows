<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Quote extends MY_Controller {

	public function index()
	{

  		$data['additionalscripts'][] = 'bootstrap-slider.js';

  		$data['additionalscripts'][] = 'quotes.js';

  		$data['additionalstyles'][] = 'slider.css';

  		$data['title'] = "Get a Quote";

  		$data['subcontenttitle'] = "Get a Quote";

		$this->loadview('quote/start', $data);
           
	}

	public function memorizeBookingType($type)
	{
		// this should only be residential, lightcommercial or commercial
		if($type == "residential" || $type == "lightcommercial" || $type == "commercial")
			$_SESSION['bookingtype'] = $type;

	}

}