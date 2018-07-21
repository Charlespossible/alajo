<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Exclusive extends CI_Controller {
    
    public function __construct(){
        parent::__construct();
    }


    public function index()
    {
    	$this->load->view('templates/header');
    	$this->load->view('pages/exclusive');
    	$this->load->view('templates/footer');
    }
}
