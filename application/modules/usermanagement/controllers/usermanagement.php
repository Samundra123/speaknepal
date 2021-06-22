<?php

/**
 * @author samundra
 * @copyright 2015
 */

class Usermanagement extends MX_Controller
{
    
    public function __construct()
    {
        
        $this->load->helper('url');
        
        $this->load->helper('form');
        
        $this->load->library('session');
        
        $this->load->library('try_lib');
        
        $this->load->model('Usermanagement_Model');
        
    }
    
    public function index()
    {
        
        $this->try_lib->checkloggedin();

        $data['admin_user']=$this->Usermanagement_Model->get_user();
        
        $this->load->view('status/header');
        
        $this->load->view('status/sidebar');
        
        $this->load->view('Usermanagement_view',$data);
        
        $this->load->view('status/footer');
        
    }

    function insert_registered_user()
    {
        
        $this->load->library('form_validation');

        $this->form_validation->set_rules('username', 'Username', 'required');

        $this->form_validation->set_rules('email', 'Email', 'required');

        $this->form_validation->set_rules('password', 'Password', 'required');

        $this->form_validation->set_rules('password', 'Password', 'required|matches[cpassword]');
            
        $this->form_validation->set_rules('cpassword', 'Password Confirmation', 'required');

        $user1=$this->input->post('username');

        $num=$this->Usermanagement_Model->check_registered_admin($user1);
     
        
        
            
        if($this->form_validation->run() == TRUE)
        {
         
            if($num==0)
            {
                //add configuration of the uploaded file
                $config['upload_path'] = './images/profile_image_upload/';
    
                $config['allowed_types'] = 'gif|jpg|png';
    
                //loads the upload library
                $this->load->library('upload', $config);
    
                //trys to upload the file if not displays error
                if(!$this->upload->do_upload())
     
                {
     
                  $register_error=$this->upload->display_errors(); 
                  $this->session->set_flashdata("email_sent" ,"<font style='color:red;'>". $register_error."</font>");
                  redirect('usermanagement');
     
                }
                
                else{
            
                //call the insert registered data function in model
                $this->Usermanagement_Model->insert_registered_user_detail();

                    redirect('usermanagement');
                    
                   
                    
                    
                    

                }
            }

            else
            {
                    $this->session->set_flashdata("email_sent" , "<font style='color:red;'>There is a another user with this Name</font>");
                    redirect('usermanagement');

            }
            
        }
        
        else
        {

             $this->session->set_flashdata("email_sent" , "<font style='color:red;'>There is a form validtion error</font>");

            redirect('usermanagement');

        }
    
        

    }


    /**

    ** Edit the data of the admin user

    **/

    public function update_registered_user()
    {

        redirect('usermanagement');
    }


    /**

    ** Delete admin User

    **/

    public function delete_registered_user()
    {

        $id= $this->input->post('id');

        $this->Usermanagement_Model->delete_admin_user($id);

        redirect('usermanagement');
    }
    
    
    
    
    
}

?>

