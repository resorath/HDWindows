<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Communication_expert extends CI_Model
{
	function __construct()
	{
		parent::__construct();
	}

	function send_message($type, $name, $contactdetails, $message)
	{
		$sql = "INSERT INTO `communication` (`id`, `type`, `name`, `contactdetails`, `message`) VALUES (NULL, ?, ?, ?, ?)";
		$this->db->query($sql, array($type, $name, $contactdetails, $message));
	}



}

?>