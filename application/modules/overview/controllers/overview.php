<?php

/**
 * @author samundra
 * @copyright 2015
 */

class Overview extends MX_Controller
{
    
    public function __construct()
    {
        
        $this->load->helper('url');
        
        $this->load->helper('form');
        
        $this->load->library('session');
        
        $this->load->model('overview_model');
        
        $this->load->library('try_lib');
        
    }
    
    public function index()
    {
        
        $this->try_lib->checkloggedin();
        
       
        
        $this->load->view('status/header');
        
        $this->load->view('status/sidebar');
        
        $this->load->view('overview_view');
        
        $this->load->view('status/footer');
    }
    
  
    
    
}

?>