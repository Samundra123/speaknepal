<?php

/**
 * @author Owner
 * @copyright 2015
 */

class Notice_model extends CI_Model
{
    
    public function __construct()
    {
        
        $this->load->helper('url');
        
        $this->load->database();
        
    }
    
    public function get_items()
    {
        
        $query=$this->db->query("SELECT * FROM items");
        
        return $query->result();
        
    }
    
    
    
   
/**

* Does insert operation

**/

    public function put_notice()
    {

        $title= $this->input->post('title');

        $notice = $this->input->post('notice');

        $data = date("Y-m-d");

        $this->db->query("INSERT into notice (notice_title,notice_description,ndate) value ('$title','$notice','$data') ");
    }



/**

*   This function will get the notice message

**/


    public function get_notice()
    {
        $query=$this->db->query("SELECT * FROM notice");
        
        return $query->result();
    }

/**

*   This function will get the notice message

**/

    public function get_notice_1($id)
    {

        $query=$this->db->query("SELECT * FROM notice where notice_id='$id'");

        return $query->result();
    }
    

/**

*   This function will delete the notice message

**/

    public function delete_notice($id)
    {

        $this->db->query("DELETE FROM notice where notice_id='$id'");

    }

/**

*    This function will edit the notice message

**/

    public function edit_notice($id,$title,$description)

    {

        $this->db->query("UPDATE notice SET notice_title='$title',notice_description='$description' where notice_id='$id' ");
    }
   
    
}

?>