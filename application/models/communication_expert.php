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
		$this->db->query($sql, array($type, $name, $contactdetails, $message, json_encode($_SERVER)));
		return $this->db->insert_id();
	}

	function send_message_email($name, $contactdetails, $message, $id, $to = NULL, $subject = NULL)
	{
		$this->load->library('parser');
		$this->load->library('email');

		if(is_null($to))
			$to = $_SESSION['config_contactemail'];

		if(is_null($subject))
			$subject = "HDWindows.ca query from " . $name;


		$data = array(
			'contact_name' => $name,
			'contact_email' => $contactdetails,
			'contact_time' => date('r'),
			'contact_message' => $message,
			'contact_id' => $id
			);

		$mailbody = $this->parser->parse('emails/contactus', $data, TRUE);

		$this->email->from('donotreply@hdwindows.ca', $name . " (via HDWindows.ca Contact Form)");
		$this->email->to($to); 

		$this->email->subject($subject);
		$this->email->message($mailbody);	

		$this->email->send();


	}


	function send_error_email($contactdetails, $message)
	{
		$this->load->library('parser');
		$this->load->library('email');

		$to = $_SESSION['config_technicalemail'];

		$subject = "HDWindows.ca error report";


		$data = array(
			'contact_email' => $contactdetails,
			'contact_time' => date('r'),
			'contact_message' => $message,
			'contact_referer' => $_SESSION['ref'],
			'contact_user_agent' => $_SERVER['HTTP_USER_AGENT'],
			'contact_remote_addr' => $_SERVER['REMOTE_ADDR'],
			'contact_session' => json_encode($_SESSION)
			);

		$mailbody = $this->parser->parse('emails/error_report', $data, TRUE);

		$this->email->from('donotreply@hdwindows.ca', "HDWindows.ca Error Reporting Bot");
		$this->email->to($to); 

		$this->email->subject($subject);
		$this->email->message($mailbody);	

		$this->email->send();


	}


}

?>