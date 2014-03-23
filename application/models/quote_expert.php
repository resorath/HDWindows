<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Quote_expert extends CI_Model
{
	function __construct()
	{
		parent::__construct();
	}

	function PostalCodeInServiceArea($code)
	{
		$serviceurl = "http://api.geonames.org/postalCodeLookupJSON?country=CA&username=resorath&postalcode=";

		// Don't hardcode these
		$servicearea = array('Calgary', 'Airdrie', 'Cochrane');

		// safety check the postal code format
		if(!preg_match("/^([ABCEGHJKLMNPRSTVXY]\d[ABCEGHJKLMNPRSTVWXYZ])\ {0,1}(\d[ABCEGHJKLMNPRSTVWXYZ]\d)$/i", $code))
		{
			return false;
		}

		$response = file_get_contents($serviceurl . str_replace(' ', '', $code));

		if($response)
			$data = json_decode($response);

		if(!is_object($data) || empty($data->postalcodes))
		{
			return false;
		}

		$country = $data->postalcodes[0]->countryCode;
		if($country != "CA")
		{
			return false;
		}


		$province = $data->postalcodes[0]->adminCode1;

		if(strcmp(trim($province), "AB") != 0)
		{
			return false;
		}

		$citiesdata = explode(' ', $data->postalcodes[0]->placeName);

		$city = $citiesdata[0];

		if(in_array($city, $servicearea))
		{
			return true;
		}

		return false;
	}


}

?>