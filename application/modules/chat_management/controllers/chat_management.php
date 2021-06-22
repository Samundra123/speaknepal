<?php

/**
 * @author Owner
 * @copyright 2015
 */
 
 class Chat_Management extends MX_Controller
{
    
    public function __construct()
    {
        
        $this->load->helper('url');
        
        $this->load->helper('form');
        
        $this->load->library('session');
        
         $this->load->library('try_lib');
        
        $this->load->model('Chat_Model');
        
    }
    
    public function index()
    {
        $this->try_lib->checkloggedin();
        
        $this->load->view('status/header');
        
        $this->load->view('status/sidebar');
        
        $this->load->view('chat_view');
        
        $this->load->view('status/footer');
    }
    
 
    
   
   
    
    
    
    public function chat_registerid($uid,$gcm_registerid)
    {
        
        
       
        
         $this->Chat_Model->set_registerid($uid,$gcm_registerid);
        
     
        
        
    }

    /**

    ** single_user chat

    **/

    public function single_chat()
    {


        $from_regid=$_POST['regid'];

        echo $from_regid;
        
        $to_uid=$_POST['to_uid'];
        $message=$_POST['message'];

        $reg_uid=$this->Chat_Model->get_registerid($to_uid);

        $reg_uid=$reg_uid[0]->gcm_register;

        $this->send($reg_uid,$from,$message);


    }



    // sending push message to single user by gcm registration id
    public function send($to,$from, $message) {

        $data1 = array("from" => $from,
                        "message" => $message);
        $fields = array(
            'to' => $to,
            'data' => $data1,
        );
        return $this->sendPushNotification($fields);
    }
 
    // Sending message to a topic by topic id
    public function sendToTopic($to, $message) {
        $fields = array(
            'to' => '/topics/' . $to,
            'data' => $message,
        );
        return $this->sendPushNotification($fields);
    }
 
    // sending push message to multiple users by gcm registration ids
    public function sendMultiple($registration_ids, $message) {
        $fields = array(
            'registration_ids' => $registration_ids,
            'data' => $message,
        );
 
        return $this->sendPushNotification($fields);
    }
 
    // function makes curl request to gcm servers
    private function sendPushNotification($fields) {
 
        // include config
        include_once __DIR__ . '/../../include/config.php';
 
        // Set POST variables
        $url = 'https://gcm-http.googleapis.com/gcm/send';

        $google_api_key = "AIzaSyAOsvNDfJ7FbFPcosNi5qKA2m8GLPl3ntY";
 
        $headers = array(
            'Authorization: key=' . $google_api_key,
            'Content-Type: application/json'
        );
        // Open connection
        $ch = curl_init();
 
        // Set the url, number of POST vars, POST data
        curl_setopt($ch, CURLOPT_URL, $url);
 
        curl_setopt($ch, CURLOPT_POST, true);
        curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
 
        // Disabling SSL Certificate support temporarly
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
 
        curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($fields));
 
        // Execute post
        $result = curl_exec($ch);
        if ($result === FALSE) {
            die('Curl failed: ' . curl_error($ch));
        }
 
        // Close connection
        curl_close($ch);
 
        return $result;
    }




    
    
    
}



?>