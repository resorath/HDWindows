<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Auth_expert extends CI_Model
{
	function __construct()
	{
		parent::__construct();
	}

	function fetch($username)
	{
		$q = "select * from `user` where `username` = ?";
		$result = $this->db->query($q, array($username));

		if($result->num_rows() > 0)
			return $result->row(); 
		else
			return null;
	}


}
?>