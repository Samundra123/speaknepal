<?php

/**
 * @author Owner
 * @copyright 2015
 */

class app_user_model extends CI_Model
{
    
    public function __construct()
    {
        $this->load->database();
        
        $this->load->helper('url');
    }


    /**

    *  Add App user 

    *  Generate random password

    **/

    public function add_user($email,$password)
    {

        

       // $chars = "abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789!@#$%^&";
        //$password = substr( str_shuffle( $chars ), 0, 8 );
    
        
         $this->db->query("INSERT INTO app_user (email,password) value ('$email','$password')");

    }


    /**

    *   getting data for api

    *   

    **/

    public function get_user_data()
    {

        $query=$this->db->query("SELECT * FROM app_user");
        
        return $query->result();
    }


    /**

    * delete app user

    **/

    public function  delete_user($id)
    {

        $this->db->query("DELETE FROM app_user where app_user_id='$id'");
    }
    

    
    /**

    * check mail does it exists

    **/

    public function check_email_exists($email)
    {

        $query=$this->db->query("SELECT * FROM app_user where email='$email'");

        

        return $query->num_rows();
    }

    /**

    * check user for login

    **/

    public function check_user($user,$password)
    {

        $query= $this->db->query("SELECT app_user_id,fullname,email,notimes FROM app_user where email='$user' and password='$password'");


        return $query->result();
    }

/**

* insert location

**/

public function insert_location($uid,$loc){

     $this->db->query("UPDATE app_user set location=$loc where app_user_id=$uid");
}



/**

* reset password

**/

public function reset_password($uid,$password){

     $this->db->query("UPDATE app_user set password='$password' where app_user_id='$uid'");
}

/**

* insert app user data from application

**/

public function insert_app_user_api($uid,$fullname,$address1,$address2,$phone){
    
    $notimes="b";

     $this->db->query("UPDATE app_user set fullname='$fullname',address1='$address1',address2='$address2',phone='$phone',notimes='$notimes' where app_user_id=$uid");
}


 /**

    * Get data for the api for contact list

    **/

    public function get_contact()
    {

        $query= $this->db->query("SELECT app_user_id,fullname,email,address1,address2,phone FROM app_user");


        return $query->result();
    }



    
    
}



?>