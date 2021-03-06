<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class MY_Controller extends CI_Controller {

    private $_controller;

    public $slogger;

    function __construct()
    {
        parent::__construct();

        $this->_controller = $this->router->fetch_class();

        $this->bootstrap();
        
    }
    
    // Startup procedure goes here for every pageload
    private function bootstrap()
    {
        // Don't run in CLI mode
        if($this->input->is_cli_request())
        {
            die("Sorry, Can't run in SLI mode :( :( :(");
        }

        @session_start();

        // Load database and config values into memory (except for the home page)
        //if($this->_controller != "home")
        //{
            $this->load->database();
            $this->load->model('Config_expert');

            $this->Config_expert->load_values();
        //}

        // start the logger
        //$this->slogger = Slogger::getInstance();
        //$this->slogger->setController($this->_controller);

    }

        
    // overrides $this->load->view()
    public function loadview($content_view, $data = Array())
    {
        // Set default variables neccesary for headers/footers if not set
        
        // Title
        if(key_exists('title', $data))
            $data['title'] .= " - ";
        @$data['title'] .= "HD Window Cleaning - Calgary Window Cleaning Services";
        
        // Navigation
        //if(!key_exists('nav', $data))
        //    $data['nav'] = "none";
        
        $data['content'] = $this->load->view($content_view, $data, true);
        $this->load->view('templates/master', $data);

    }

    
}