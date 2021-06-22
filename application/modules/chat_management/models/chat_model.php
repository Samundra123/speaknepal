<?php

/**
 * @author Owner
 * @copyright 2015
 */
 
 
 class Chat_Model extends CI_Model
 {
    
    
    public function __construct()
    {
        
        $this->load->database();
        
        $this->load->helper('url');
        
    } 
    
   
    public function set_registerid($uid,$gcm_registerid)
    {
        
        $query=$this->db->query("SELECT * FROM gcm_user_register where uid=$uid");
        $count=$query->num_rows();

        if($count==0)
        {

            $this->db->query("INSERT into gcm_user_register (uid,gcm_register) value ($uid,'$gcm_registerid')");
        }

        else
        {

            $this->db->query("UPDATE gcm_user_register set gcm_register='$gcm_registerid' where uid=$uid");


        }
        
        
        
    }


    /**

    ** Get registered gcm regid 

    **/

    public function get_registerid($uid)
    {

         $query=$this->db->query("SELECT * FROM gcm_user_register where uid=$uid");

         return $query->result();
    }
    
    
    
   
    
       
    
}
 



?>