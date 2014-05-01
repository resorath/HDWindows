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

		unset($bookingmodel['previousbook']);
		unset($bookingmodel['submit']);
		unset($bookingmodel['id']);


		$contactmodal['firstdatechoice'] = $bookingmodel['firstdatechoice'];
		$contactmodal['firstdatechoice-until'] = $bookingmodel['firstdatechoice-until'];
		$contactmodal['seconddatechoice'] = $bookingmodel['seconddatechoice'];
		@$contactmodal['seconddatechoice-until'] = $bookingmodel['seconddatechoice-until'];
		$contactmodal['comment'] = $bookingmodel['comment'];

		unset($bookingmodel['firstdatechoice']);
		unset($bookingmodel['firstdatechoice-until']);
		unset($bookingmodel['seconddatechoice']);
		unset($bookingmodel['seconddatechoice-until']);
		unset($bookingmodel['comment']);



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

		
	}




}

?>