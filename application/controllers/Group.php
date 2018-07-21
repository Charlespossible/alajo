<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Group extends CI_Controller {
    
    public function __construct(){
        parent::__construct();
    }


    public function index()
    {
    	$this->load->view('templates/header');
    	$this->load->view('pages/group');
    	$this->load->view('templates/footer');
    }
}
