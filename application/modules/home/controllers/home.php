<?php

/**
 * @author samundra
 * @copyright 2015
 */

class Home extends MX_Controller
{
    
    public function __construct()
    {
        
        $this->load->helper('url');
        
        $this->load->helper('form');
        
        $this->load->library('session');
        
         $this->load->library('try_lib');
        
        $this->load->model('home_model');


              //Load email library 
         $this->load->library('email'); 

    
        
    }
    
    public function index()
    {
        
       

        
        $this->load->view('home_view');
        
       
    }

}


?>