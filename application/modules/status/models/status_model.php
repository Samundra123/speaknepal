<?php

/**
 * @author Owner
 * @copyright 2015
 */


class Status_Model extends CI_Model 
{
    
    public function __construct()
    {
        
        $this->load->database();
        
        $this->load->helper('url');
        
    } 
    
     public function total_notification()
    {
        
        $query=$this->db->query("SELECT SUM(count) AS value_sum FROM notification");
        
        return $query->result();
        
    }  
    
    public function get_notification()
    {
        
        $query=$this->db->query("SELECT * FROM notification where count>0");
        
        return $query->result();
    } 
    
}

?>