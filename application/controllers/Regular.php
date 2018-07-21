<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Regular extends CI_Controller {
    
    public function __construct(){
        parent::__construct();
    }


    public function index()
    {
    	$this->load->view('templates/header');
    	$this->load->view('pages/regular');
    	$this->load->view('templates/footer');
    }
}
