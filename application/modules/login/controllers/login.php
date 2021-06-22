<?php 

class Login extends MX_Controller
{
    
    function __Construct()
    {
        
        $this->load->helper('url');
        
        $this->load->helper('form');
        
        $this->load->library('session');
        
        $this->load->model('Login_Model');
        
    }
    
    
    function index()
    {
        
        $this->load->view("login_view");
        
    }
    
    function register()
    {
        $this->load->view("register_view");
    }
    
    function forgot_password()
    {
        
        $this->load->view("forgot_password_view");
    }
    
    function forgot_password_email_sent()
    {
        
        $this->load->view("forgot_password_email_sent");
    }
    
    function insert_registered_user()
    {
        
        $this->load->library('form_validation');

        $this->form_validation->set_rules('fullname','Full name','required');

        $this->form_validation->set_rules('username', 'Username', 'required');

        $this->form_validation->set_rules('email', 'Email', 'required');

        $this->form_validation->set_rules('password', 'Password', 'required');

        $this->form_validation->set_rules('password', 'Password', 'required|matches[cpassword]');
			
        $this->form_validation->set_rules('cpassword', 'Password Confirmation', 'required');

        $user1=$this->input->post('username');

        $num=$this->Login_Model->check_registered_employee($user1);
     
        
        
			
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
     
             	  echo $this->upload->display_errors();
                  
                  
                  
     
           		}
                
                else{
    		
    			//call the insert registered data function in model
    			$this->Login_Model->insert_registered_user_detail();

					$this->employee_registered();
                    
                   
                    
                    
                    

				}
                }

				else
				{

					redirect('login/register');

				}
			
}
			else
			{

				$this->load->view('login/register_view');

			}


			


		
        
        

    }
    
    /** to display message after registration is sucessful **/
    public function employee_registered()
    {
        redirect('login');
        
    }
    
    /** checks the login **/
    public function login_check()
    {
        
        $login=$this->Login_Model->check_login();
        
        $num = count($login);
        
        
        
        
        
        if ($num==1)
        {
            $sess_array=array('id'=>$login[0]->username,
            
            'role'=>$login[0]->role,
            'user_image'=>$login[0]->image);
            
            $this->session->set_userdata($sess_array);
            
            echo $login[0]->username;
            echo $login[0]->role; 
            
                                              
            
            redirect('overview');
        }
        
        else
        {
            redirect('login');
        }
    }
    
    
	/** user logout **/
		public function logout()
	{

		$this->session->sess_destroy();

		redirect('login');

	}
    
    
    
}