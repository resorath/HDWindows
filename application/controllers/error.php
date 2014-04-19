<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Error extends MY_Controller {

	public function index()
	{

	}
        
    public function h404($page)
    {
    	$this->output->set_status_header('404');
        $data['errorpage'] = $page;
        $data['subcontenttitle'] = " ";

        $replacetargets = array("<", ">", "\n");
        $replacesolution = array("&lt;", "&gt", "<br>");

        $bashkeydontuse = 0;
        if(array_key_exists('bashindex', $_SESSION))
        	$bashkeydontuse = $_SESSION['bashindex'];

        do
        {
        	$bashkey = rand(1,4);
        }while($bashkey == $bashkeydontuse);
        $_SESSION['bashindex'] = $bashkey;

        $data['bashquote'] = str_replace($replacetargets, $replacesolution, $this->load->view("bashquotes/" . $bashkey, '', true));

        
        $this->loadview("404", $data);
    }
}