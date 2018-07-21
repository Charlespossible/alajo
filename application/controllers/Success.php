<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Success extends CI_Controller {
    
    public function __construct(){
        parent::__construct();
        
        $this->load->helper('form');
        $this->load->library('form_validation');
        $this->load->library('session');
        $this->load->helper('url');
        $this->load->database();
        $this->load->model('User_Model');    
    }
    
    public function Index()
    
    {
     
    $this->load->view('templates/header');
    $this->load->view('pages/success');
}


    public function Successpage() {
        
    $this->load->view('templates/header');
    $this->load->view('pages/successpage');
    }

    public function successValidate() {
        
        $mydata = $this->session->userdata('Username');
    	if($this->User_Model->redirection($mydata)){
         $this->session->set_flashdata('info', '<div class="alert alert-success text-center">Login to your dashboard now!</div>');
    	   redirect('Login/Index');
    }
    	else{
    		return $this->session->set_flashdata('info-msg', '<div class="alert alert-success text-center">System Failure, Contact Admin</div>');
    	}
        
    }
}