<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed'); 

class Try_Lib {

   /** checks login */
	public function checkloggedin()
	{
		$session=& get_instance();
		$session->load->library('session');

		if(!($session->session->userdata('id')))
		{

			redirect('login');
		}
	}
}

/* End of file Someclass.php */