<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Admin extends MY_Controller {

  public function __construct()
  {
      parent::__construct();

      $this->data['additionalscripts'][] = 'select2.min.js';
      $this->data['additionalscripts'][] = 'bootstrap-datetimepicker.min.js';
      $this->data['additionalscripts'][] = 'jquery.timepicker.min.js';
      $this->data['additionalscripts'][] = 'jquery.rotate.js';
      $this->data['additionalscripts'][] = 'admin.js';

      $this->data['additionalstyles'][] = 'select2.css';
      $this->data['additionalstyles'][] = 'bootstrap-datetimepicker.min.css';
      $this->data['additionalstyles'][] = 'jquery.timepicker.css';


      // Check authentication
      if(!array_key_exists("user", $_SESSION) && 
      	$this->router->fetch_method() != "authenticate" && 
      	$this->router->fetch_method() != "doauthenticate" &&
      	$this->router->fetch_method() != "sha1")
      {
      	$_SESSION['targetpage'] = current_url();
      	redirect('/admin/authenticate');
      	exit();
      }
  }

	public function index()
	{		
		$this->loadview('admin/dashboard', $this->data);

	}

	public function authenticate()
	{
	  if(array_key_exists("user", $_SESSION))
      {
      	redirect('/admin');
      	exit();
      }

      $this->loadview('admin/authenticate', $this->data);
	}

	public function doauthenticate()
	{


		$this->load->model('Auth_expert');


		$username = $_POST['username'];
		$password = $_POST['password'];

		$userrow = $this->Auth_expert->fetch($username);

		if($userrow == null)
		{
			$this->data['autherror'] = true;
			$this->loadview('admin/authenticate', $this->data);
			return;
		}


		$hashedpassword = sha1($userrow->salt . $password);


		if(strcmp($hashedpassword, $userrow->password) == 0)
		{
			$_SESSION['user'] = $userrow->username;
			redirect($_SESSION['targetpage']);

		}
		else
		{
			$this->data['autherror'] = true;
			$this->loadview('admin/authenticate', $this->data);
		}

	}

	public function sha1($words)
	{
		echo(sha1($words));
	}
}
