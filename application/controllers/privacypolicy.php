<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Privacypolicy extends MY_Controller {

	public function index()
	{
		$data['subcontenttitle'] = "Privacy Policy";
		$this->loadview('privacypolicy', $data);
	}

}

