<?php

if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Pages extends CI_Controller {

        public function __construct()
        {
        parent::__construct();
        
        }

        public function index()
      
        {

        $this->load->helper('url');
        $this->load->view('templates/header');
        $this->load->view('pages/home');
        $this->load->view('templates/footer');
        
        }       
}


