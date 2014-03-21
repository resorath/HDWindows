<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Quote extends MY_Controller {

	public function index()
	{
  		$data['additionalscripts'][] = 'quotes.js';
  		$data['title'] = "Get a Quote";

		$this->loadview('quote/start', $data);
           
	}

}