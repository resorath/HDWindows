<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Client_expert extends CI_Model
{
	function __construct()
	{
		parent::__construct();
	}

	function add_group($contactmodal)
	{
		$this->db->insert('customer', $contactmodal);
	}




}

?>