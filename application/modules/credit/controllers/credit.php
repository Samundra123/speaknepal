<?php

/**
 * @author samundra
 * @copyright 2015
 */

class Credit extends MX_Controller
{
    
    public function __construct()
    {
        
        $this->load->helper('url');
        
        $this->load->helper('form');
        
        $this->load->library('session');
        
        $this->load->library('try_lib');
        
        $this->load->model('Credit_Model');
        
    }
    
    public function index()
    {
		$this->load->view('status/header');
		
		$this->load->view('status/sidebar');
		$this->load->view('credit_view');
		$this->load->view('status/footer');
		
        

    }
    
   
    
}

?>

