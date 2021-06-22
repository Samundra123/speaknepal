<?php

/**
 * @author Owner
 * @copyright 2015
 */

class Credit_Model extends CI_Model
{
    
    public function __construct()
    {
        
        $this->load->helper('url');
        
        $this->load->database();
        
    }
    
    /** get the user count **/
     public function get_user_count()
    {
        
        
        $query = $this->db->query("SELECT * FROM employee_login where role>0 or role is NULL ");
        
        return $query->num_rows;
        
        
    }
    
    /** get the user detail for pagination view **/
    public  function get_employee_data( $limit, $start)
    {
        
        $query = $this->db->query("SELECT * FROM employee_login where role>0 or role is NULL  limit $start,$limit");
        
        return $query->result();
        
    }
    
    /** assign role **/
    public function assign_role()
    {
        
        $role=$this->input->post('role');
        
        $employee_id=$this->input->post('employee_id');
        
        $this->db->query("UPDATE employee_login set role='$role' where employee_id='$employee_id'");
        
    }
    
    
}

?>