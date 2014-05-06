<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Test extends MY_Controller {

	public function index()
	{
           
	}

	public function layout()
	{
		$this->loadview('test/layout');
	}

	public function slides()
	{
		$this->load->view('test/slides');
	}

	public function hamburger()
	{
		$this->load->view('test/hamburger');
	}

	public function emailmessage()
	{
		$this->load->view('emails/booking_user');
	}
}