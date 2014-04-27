<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Client_expert extends CI_Model
{
	function __construct()
	{
		parent::__construct();
	}

	function add_booking($contactmodal)
	{
		// try to find an existing contact by phone + email
		$contactmodal['phone'] = preg_replace("/[^0-9]/","",$contactmodal['phone']);

		$q = "select `id` from `customer` where `phone` = ? and `email` = ?";
		$result = $this->db->query($q, array($contactmodal['phone'], $contactmodal['email']));
		$customerid = null;

		// should do something with `previousbook`?
		$previousbook = $contactmodal['previousbook'];

		unset($contactmodal['previousbook']);
		unset($contactmodal['submit']);
		unset($contactmodal['id']);

		$contactmodal['session'] = json_encode($_SERVER);

		if($result->num_rows() > 0)
		{
			$row = $result->row();
			$customerid = $row->id;
		}
		else
		{
			$this->db->insert('customer', $contactmodal);
			$customerid = $this->db->insert_id();
		}

		$contactmodal['customerid'] = $customerid;

		$this->db->insert('booking', $contactmodal);

		
	}




}

?>