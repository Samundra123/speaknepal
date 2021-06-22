<?php

class Status Extends MX_Controller
{
    
    public function __construct()
    {
        
        $this->load->helper('url');
        
        $this->load->model('Status_Model');
        
    }

	public function header()
	{
		
       
        
		$this->load->view('header');

	}

	public function footer()
	{


		$this->load->view('footer');

	}
	
    
    public function gethint()
    {
        $total=$this->Status_Model->total_notification();
        
        echo $total[0]->value_sum;
    }
    
    public function get_notification()
    {
        
        $notification=$this->Status_Model->get_notification();
        
        for($i=0;$i<count($notification);$i++)
        {
            
            
            echo "<li ><!-- start notification -->";
            echo '          <a href="#">';
            echo '<i class="fa fa-users text-aqua">' . $notification[$i]->count . ' ' . $notification[$i]->n_type . '</i>'; 
            echo '           </a>
                      </li><!-- end notification -->';
            
           
        }
        
        
    }
}