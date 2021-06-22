<?php

/**
 * @author samundra
 * @copyright 2015
 */

class App_User extends MX_Controller
{
    
    public function __construct()
    {
        
        $this->load->helper('url');
        
        $this->load->helper('form');
        
        $this->load->library('session');
        
         $this->load->library('try_lib');
        
        $this->load->model('app_user_model');


              //Load email library 
         $this->load->library('email'); 

    
        
    }
    
    public function index()
    {
        
        $this->try_lib->checkloggedin();
        
        
        $data['user']=$this->app_user_model->get_user_data();

        $this->load->view('status/header');
        
        $this->load->view('status/sidebar');
        
        $this->load->view('app_user_view',$data);
        
        $this->load->view('status/footer');
    }

    /**

    *   Adding the app user


    **/

    public function add_user()
    {
        $chars = "abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789!@#$%^&";

        $password = substr( str_shuffle( $chars ), 0, 8 );

        $email=$this->input->post('email');


        $check=$this->app_user_model->check_email_exists($email);

        if ($check<1){

             $this->app_user_model->add_user($email,$password);


      
            $this->email->from('nrnacomuniapp@nrna.org.np', 'NRNA Communitation');
            $this->email->to($email);
     
            $this->email->subject('NRN communication App Access detail');
        
            $message= "Dear sir,\n Welcome to NRN communiction App . The access detail is associtated with this mail: \n USERNAME : ". $email." \n PASSWORD : ".$password." \nThankyou\n\n
                This is automated message please do not reply to this";
            $this->email->message($message);
        
            if($this->email->send()) 
                 $this->session->set_flashdata("email_sent","Email sent successfully."); 
            else 
                 $this->session->set_flashdata("email_sent","Error in sending Email."); 
            

        }

        else
        {
            $this->session->set_flashdata("email_sent" , "The Email address is already used");
        }

       

        redirect("app_user");
    }


    /**

    * add user with excelsheet

    **/

     public function excel_add_appuser()
    {

                //add configuration of the uploaded file
                $config['upload_path'] = './others/userexcel/';
    
                $config['allowed_types'] = 'xlsx|csv|xls';
    
                //loads the upload library
                $this->load->library('upload', $config);

                $email_error='<h1>Repeated Emails</h1><br>';
                
                
    
                //trys to upload the file if not displays error
                if(!$this->upload->do_upload())
     
                {
     
                  echo $this->upload->display_errors();
                  
                 
                  
     
                }
                
                else{
            
                //call the insert registered data function in model
                
                    
                   

                     $logo_image_data = $this->upload->data();
                     
                     

                    $data=$this->read_excel($logo_image_data['file_name']);
                    
                   
                    
                    
                    
                    for($i=2;$i<count($data);$i++)
                    {
                                                 
                        $chars = "abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789!@#$%^&";
                        $password = substr( str_shuffle( $chars ), 0, 8 );
                
                        $email=$data[$i]['A'];

                        $check=$this->app_user_model->check_email_exists($email);

                        if($check<1)
                        {
                            $this->app_user_model->add_user($email,$password);
                         
                         
                            $this->email->from('nrnacomuniapp@nrna.org.np', 'NRNA Communitation');
                            $this->email->to($data[$i]['A']);
 
                            $this->email->subject('NRN communication App Access detail');
    
                            $message= "Dear sir/madem,\n Welcome to NRN communiction App . The access detail is associtated with this mail: \n USERNAME : ". $email." \n PASSWORD : ".$password." \n Thankyou\n\n
            This is automated message please do not reply to this";
                        
                            $this->email->message($message);
    
                            if($this->email->send()) 
                             $this->session->set_flashdata("email_sent","Email sent successfully."); 
                            else 
                             $this->session->set_flashdata("email_sent","Error in sending Email."); 
                            
                            ob_start();

                            echo $data[$i]['A']."<br>";
                         
                    }

                    else
                    {
                        $email_error .= '<font class="redAlert">'.$data[$i]['A']."</font> ";



                    }



                }

                    $email_error .= "<br><br><br>";

                    $this->session->set_flashdata("email_error",$email_error);

                     redirect("app_user");

                }
                
               
    }
    

    /**

    * API function

    **/
    public function userdata()
    {

        $data['user']=$this->app_user_model->get_user_data();

        echo json_encode($data['user']);


    }


    /** reading excel file **/

    public function read_excel($i)
    {
        
        $file = './others/userexcel/'.$i;
        //load the excel library
        $this->load->library('excel');
        //read file from path
        $objPHPExcel = PHPExcel_IOFactory::load($file);
        //get only the Cell Collection
        $cell_collection = $objPHPExcel->getActiveSheet()->getCellCollection();
        //extract to a PHP readable array format
        foreach ($cell_collection as $cell) {
            $column = $objPHPExcel->getActiveSheet()->getCell($cell)->getColumn();
            $row = $objPHPExcel->getActiveSheet()->getCell($cell)->getRow();
            $data_value = $objPHPExcel->getActiveSheet()->getCell($cell)->getValue();
            //header will/should be in row 1 only. of course this can be modified to suit your need.
           

            if ($row == 1) {
                $header[$row][$column] = $data_value;
            } else {
                $arr_data[$row][$column] = $data_value;
            }
        }
        //send the data in an array format
        $data['header'] = $header;
        $data['values'] = $arr_data;
        
        return $arr_data;

       
        
    
    }


    /** 

    * app user delete

    **/

    public function delete_appuser()
    {
        $id=$this->input->post('id');
        $this->app_user_model->delete_user($id);

        redirect('app_user');



    }


     /**

    * api for  checking user and

    */

    public function check_user($user=NULL,$password=NULL)
    {
        if(isset($user))
        {
             $data['user']=$this->app_user_model->check_user($user,$password);

            

             if(1!=count($data['user']))
             {
                echo '[{"app_user_id":"false"}]';
             }
             
             else{
             
                    echo json_encode($data['user']);
             }
        }

        else{
                echo '[{"app_user_id":"false"}]';
            }

        
        

    }



     /**

    * api for get location 

    */

    public function set_location($userid=NULL,$network_location=NULL)
    {
        


      
        if(isset($userid))
        {
            if($network_location!=NULL){

                if($network_location=="np")
                {
                    $network_location=1;
                }
                else
                {
                    $network_location=0;
                }
             $data['user']=$this->app_user_model->insert_location($userid,$network_location);
             echo $userid.$network_location;
            }

             
        }

        

    }


    /**

    *   Reset Password

    **/

    public function reset_password()
    {

         $chars = "abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789!@#$%^&";

        $password = substr( str_shuffle( $chars ), 0, 8 );

        $email=$this->input->post('email');

        $uid=$this->input->post('uid');


        

       

             $this->app_user_model->reset_password($uid,$password);


      
            $this->email->from('nrnacomuniapp@nrna.org.np', 'NRNA Communitation');
            $this->email->to($email);
     
            $this->email->subject('NRN communication App Access detail');
        
            $message= "Dear sir,\n Welcome to NRN communiction App . The access detail is associtated with this mail: \n USERNAME : ". $email." \n PASSWORD : ".$password." \nThankyou\n\n
                This is automated message please do not reply to this";
            $this->email->message($message);
        
            if($this->email->send()) 
                 $this->session->set_flashdata("email_sent","Email sent successfully."); 
            else 
                 $this->session->set_flashdata("email_sent","Error in sending Email."); 
            


       

        redirect("app_user");



    }
    
    
    
    

     /**

    * api for get location 

    */

    public function set_user_data($userid,$fullname=NULL,$address1=NULL,$address2=NULL,$phone=NULL)
    {
        

    
   
      
        if(isset($userid))
        {
        
                
        
            
             $data['user']=$this->app_user_model->insert_app_user_api($userid,$fullname,$address1,$address2,$phone);
             
             echo '[{"reply":"true","userid":"'. $userid .'"}]';
             
            

             
        }

        

    }


       /**

    * api for contact list

    */

    public function contact_list()
    {
           $data['user']=$this->app_user_model->get_contact();
             
            echo json_encode($data['user']);
       
          

        
        

    }
    
    
  


    
}

?>