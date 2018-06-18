<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {
     public function __construct(){
        parent::__construct();
         $this->load->database();
         $this->load->helper('url');
		 $this->load->model('user_model');
         $this->load->library('session');
         
    }
	public function index(){
        if($this->session->userdata('logged_in') == true){
             redirect('welcome/profile'); 
         }else{
            $this->load->view('template/header');
            $this->load->view('welcome_message');
            $this->load->view('template/footer');
	   }
    }
	   public function google_user_register(){
		    $data['success'] = false;   
            $google_user = $this->user_model->google_register();
            if($google_user){
           $userdata = array('user_id' => $google_user,'logged_in' => true);
           $this->session->set_userdata($userdata);
			 $data['success'] = true;   
            $data['redirect'] = 'welcome/profile';
			}
        echo json_encode($data);
    }
    public function profile(){
        if($this->session->userdata('logged_in') == true){
             $data['userdata'] = $this->user_model->get_userdata($this->session->userdata('user_id'));
        $this->load->view('template/header');
        $this->load->view('dashboard', $data);
        $this->load->view('template/footer');
        }else{
            redirect('./');
        }
       
    }
     public function logout(){
        $this->session->sess_destroy();
        redirect('./');
    }
}
