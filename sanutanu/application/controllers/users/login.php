<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

	function __construct() {
        parent::__construct();
        $this->load->helper('url');
            $this->load->library('email');

		$config['protocol'] = 'smtp';
		$config['smtp_host'] = 'ssl://smtp.googlemail.com';
		$config['smtp_user'] = 'its.techsupport@gmail.com';
		$config['smtp_pass'] = '03328140718';
		$config['smtp_port'] = 465;
		 
		$config['charset'] = 'utf-8';
		$config['mailtype'] = 'html';
		$config['newline'] = "\r\n";
		ini_set("SMTP","ssl://smtp.gmail.com");
ini_set("smtp_port","465");
    }

    public function save_registration(){
    	$this->load->library('email');
 
        $this->email->from('its.dev.4.2019@gmail.com')
            ->to('mr.ayaannazir@gmail.com')
            ->subject('Welcome')
            ->message('test email');
 
        $this->email->send(); 
      
        $arr = array('msg' => 'Something went wrong try again lator', 'success' =>false);
 
        if($this->email->send()){
         $arr = array('msg' => 'Mail has been sent successfully', 'success' =>true);
        }
    	print_r("registration's working");
    }
}