<?php

/**
 * @author Owner
 * @copyright 2015
 */

class Usermanagement_Model extends CI_Model
{
    
    public function __construct()
    {
        
        $this->load->helper('url');
        
        $this->load->database();
        
    }
    
    /** get the user count **/
     public function get_user()
    {
        
        
        $query = $this->db->query("SELECT * FROM admin_login");
        
        return $query->result();
        
        
    }
   
    
   
     /** inserts data from user registeration to the database **/
    public function insert_registered_user_detail()
    {
        
        
        
         $username=$this->input->post('username');
        
         $email=$this->input->post('email');
        
         $password=sha1($this->input->post('password'));
        
        $logo_image_data = $this->upload->data();

         $images=$logo_image_data['file_name'];
        
        $this->db->query("INSERT INTO admin_login (username,email,password,image) values('$username','$email','$password','$images')");
        
        
        
    }
    
    /** checks if there is any existing user name similar to  registered ones **/
    public function check_registered_admin($user1)
    {
        
        $query=$this->db->query("SELECT * FROM admin_login where `username`='$user1'");
        
        return $query->num_rows;
        
    }

    /**

    * Delete registered user

    **/


    public function delete_admin_user($id)
    {

        $this->db->query("DELETE FROM admin_login where a_id='$id'");
    }
    
}

?>