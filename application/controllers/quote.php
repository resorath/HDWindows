<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Quote extends MY_Controller {

	public function index()
	{

  		$data['additionalscripts'][] = 'bootstrap-slider.js';

  		$data['additionalscripts'][] = 'quotes.js';

  		$data['additionalstyles'][] = 'slider.css';

  		$data['title'] = "Get a Quote";

		$this->loadview('quote/start', $data);
           
	}

}