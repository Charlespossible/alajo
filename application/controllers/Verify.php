<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Verify extends CI_Controller {
    
    public function __construct(){
        parent::__construct();
        
        $this->load->helper('form');
        $this->load->library('form_validation');
        $this->load->library('session');
        $this->load->helper('url');
        $this->load->database();
        $this->load->model('User_Model');    
    }
    
    public function index()
	{
         
		$this->load->view('templates/header');
        $this->load->view('pages/verify');
        $this->load->view('templates/footer');


}
}