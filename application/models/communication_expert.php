<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Communication_expert extends CI_Model
{
	function __construct()
	{
		parent::__construct();
	}

	function send_message_database($type, $name, $contactdetails, $message)
	{
		$sql = "INSERT INTO `communication` (`id`, `type`, `name`, `contactdetails`, `message`, `session`) VALUES (NULL, ?, ?, ?, ?, ?)";
		$this->db->query($sql, array($type, $name, $contactdetails, $message, implode("\n", $_SERVER)));
		return $this->db->insert_id();
	}

	function send_message_email($name, $contactdetails, $message, $id)
	{
		$this->load->library('parser');
		$this->load->library('email');

		$data = array(
			'contact_name' => $name,
			'contact_email' => $contactdetails,
			'contact_time' => date('r'),
			'contact_message' => $message,
			'contact_id' => $id
			);

		$mailbody = $this->parser->parse('emails/contactus', $data, TRUE);

		$this->email->from('donotreply@hdwindows.ca', $name + " (via HDWindows.ca Contact Form)");
		$this->email->to($_SESSION['config_contactemail']); 

		$this->email->subject('HDWindows.ca query from ' + $name);
		$this->email->message($message);	

		$this->email->send();


	}



}

?>