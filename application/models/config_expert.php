<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Config_expert extends CI_Model
{
	function __construct()
	{
		parent::__construct();
	}

	function load_values()
	{
		$query = $this->db->get('config');

		$row = $query->row(); 

		$_SESSION['config_contactemail'] = $row->contactemail;
		$_SESSION['config_contactphone'] = $row->contactphone;

	}


}
?>