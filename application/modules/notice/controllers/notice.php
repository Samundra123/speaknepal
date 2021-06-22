<?php

/**
 * @author samundra
 * @copyright 2015
 */

class Notice extends MX_Controller
{
    
    public function __construct()
    {
        
        $this->load->helper('url');
        
        $this->load->helper('form');
        
        $this->load->library('session');
        
       $this->load->library('try_lib');
        
        $this->load->model('Notice_model');
        
    }
    
    public function index()
    {
        
        $this->try_lib->checkloggedin();
        
        $data['notice']=$this->Notice_model->get_notice();
        
        $this->load->view('status/header');
        
        $this->load->view('status/sidebar');
        
        $this->load->view('allitem_view',$data);
        
        $this->load->view('status/footer');
    }
    
    public function add_inflow()
    {
        $this->Notice_model->add_inflow();
        
        redirect('allitem');
    }
    
    public function add_outflow()
    {
        
        $this->Notice_model->add_outflow();
        
        redirect('allitem');
    }
    
    public function damaged()
    {
        
        $this->Notice_model->damaged();
        
        redirect('allitem');
        
    }

    /**

    * Put notice into database

    **/

    public function put_notice()
    {

        $this->Notice_model->put_notice();

        redirect('notice');
    }

    /**

    * api for notice total and

    */

    public function nt($id=NULL)
    {
        if(isset($id))
        {
             $data['notice']=$this->Notice_model->get_notice_1($id);
        }

        else{
                $data['notice']=$this->Notice_model->get_notice();
            }

        
        echo json_encode($data['notice']);

    }


    /**

    *

    */

    public function delete()

    {

        $id=$this->input->post('id');
        $this->Notice_model->delete_notice($id);

        redirect('notice');


    }

    /**

    *

    **/

    public function edit_notice()

    {

        $id=$this->input->post('notice_id');
        $title=$this->input->post('notice_title');
        $description=$this->input->post('notice_description');

        $this->Notice_model->edit_notice($id,$title,$description);

        redirect('notice');
    }

    
    
}

?>