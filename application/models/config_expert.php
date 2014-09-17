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
		$_SESSION['config_technicalemail'] = $row->technicalemail;

	}

	function get_values()
	{
		$query = $this->db->get('config');

		return $query->row(); 
	}

	function apply_change($key, $value)
	{
		$data = array($key => $value);
		$res = $this->db->update('config', $data, array('id' => '1'));
		
		if(!$res)
			return false;
		return true;

	}


}
?>