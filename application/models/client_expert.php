<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Client_expert extends CI_Model
{
	function __construct()
	{
		parent::__construct();
	}

	function add_booking($bookingmodel)
	{
		// try to find an existing contact by phone + email
		$bookingmodel['phone'] = preg_replace("/[^0-9]/","",$bookingmodel['phone']);

		$q = "select `id` from `customer` where `phone` = ? and `email` = ?";
		$result = $this->db->query($q, array($bookingmodel['phone'], $bookingmodel['email']));
		$customerid = null;

		// should do something with `previousbook`?
		$previousbook = $bookingmodel['previousbook'];

		$emailmodel['previousbook'] = $bookingmodel['previousbook'];

		unset($bookingmodel['previousbook']);
		unset($bookingmodel['submit']);
		unset($bookingmodel['id']);


		$contactmodal['firstdatechoice'] = $bookingmodel['firstdatechoice'];
		$contactmodal['firstdatechoice-until'] = $bookingmodel['firstdatechoice-until'];
		$contactmodal['seconddatechoice'] = $bookingmodel['seconddatechoice'];
		@$contactmodal['seconddatechoice-until'] = $bookingmodel['seconddatechoice-until'];
		$contactmodal['comment'] = $bookingmodel['comment'];

		$emailmodel['title'] = $bookingmodel['title'];
		$emailmodel['whoname'] = $bookingmodel['whoname'];
		$emailmodel['phone'] = $bookingmodel['phone'];
		$emailmodel['email'] = $bookingmodel['email'];
		$emailmodel['address'] = $bookingmodel['address'];
		$emailmodel['address2'] = $bookingmodel['address2'];
		$emailmodel['postalcode'] = $bookingmodel['postalcode'];
		$emailmodel['firstdatechoice'] = $bookingmodel['firstdatechoice'];
		$emailmodel['firstdatechoice-until'] = $bookingmodel['firstdatechoice-until'];
		$emailmodel['seconddatechoice'] = $bookingmodel['seconddatechoice'];
		@$emailmodel['seconddatechoice-until'] = $bookingmodel['seconddatechoice-until'];
		$emailmodel['quote_type'] = $_SESSION['bookingtype'];
		$emailmodel['quote_total'] = $_SESSION['quotevalue'];
		$emailmodel['comment'] = $bookingmodel['comment'];


		unset($bookingmodel['firstdatechoice']);
		unset($bookingmodel['firstdatechoice-until']);
		unset($bookingmodel['seconddatechoice']);
		unset($bookingmodel['seconddatechoice-until']);
		unset($bookingmodel['comment']);


		$row = null;
		if($result->num_rows() > 0)
		{
			$row = $result->row();
			$customerid = $row->id;
		}
		else
		{
			$this->db->insert('customer', $bookingmodel);
			$customerid = $this->db->insert_id();
		}



		$contactmodal['session'] = json_encode($_SERVER);
		$contactmodal['quote_type'] = $_SESSION['bookingtype'];
		$contactmodal['quote_rows'] = json_encode($_SESSION['quotetype']);
		$contactmodal['quote_total'] = $_SESSION['quotevalue'];


		$contactmodal['customerid'] = $customerid;

		$this->db->insert('booking', $contactmodal);


		$emailmodel['id'] = $this->db->insert_id();

		// Send the email to the owner
		$this->load->library('parser');
		$this->load->library('email');


		$mailbody = $this->parser->parse('emails/booking', $emailmodel, TRUE);

		$this->email->from($emailmodel['email'], $emailmodel['whoname'] . " (via HDWindows.ca Booking Form)");
		$this->email->to($_SESSION['config_contactemail']); 

		$this->email->subject('HDWindows.ca booking from ' . $emailmodel['whoname']);
		$this->email->message($mailbody);	

		$this->email->send();


		// Send an email to the user
		$config['useragent'] = 'HDWindows.ca';
		$config['wordwrap'] = FALSE;
		$config['mailtype'] = 'html';

		$this->email->initialize($config);

		$emailtouser['firstname'] = preg_replace('/\W\w+\s*(\W*)$/', '$1', $emailmodel['whoname']);

		$mailbody = $this->parser->parse('emails/booking_user', $emailtouser, TRUE);

		$this->email->from($_SESSION['config_contactemail'], "HD Window Cleaners of Calgary");
		$this->email->to($emailmodel['email']); 

		$this->email->subject("Thank you for your booking request at HDWindows.ca!");
		$this->email->message($mailbody);	

		$this->email->send();




		
	}
	




}

?>