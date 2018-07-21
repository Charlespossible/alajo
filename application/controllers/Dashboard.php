<?php

if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Dashboard extends CI_Controller {
    
     public function __construct(){
        parent::__construct();
        
        $this->load->helper('url_helper');
        $this->load->model('User_Model');
        $this->load->helper(array('form', 'url'));
        $this->load->library('email');
        $this->load->library('form_validation');
        $this->load->library('session');
        
        }

public function index()

        {
            
            $this->load->view('pages/dashboard');	
        }
        
        

public function exclusive() 

  {
    
 $data['total_amount'] =  $this->User_Model->totalAmount()->result();
  $this->load->view('extensions/header');
 $this->load->view('pages/exclusive_dashboard' , $data);
 }
 

        
public function regular() 
        
        {
            
            $this->load->view('extensions/header');
            $this->load->view('pages/regular_dashboard');
        }
        

public function RegularTargetSaver() 
        
        {
            //Set Up Validation rules
        $this->form_validation->set_rules('frequency' , 'Frequency' , 'trim|required');
        $this->form_validation->set_rules('TOB','Time Of Debit', 'trim|required');
        $this->form_validation->set_rules('month','Month In Numbers', 'trim');
        $this->form_validation->set_rules('week','Days Of The Week', 'trim');
        $this->form_validation->set_rules('days','Days Of The Month', 'trim');
        $this->form_validation->set_rules('amount', 'Amount To Debit', 'trim|required');
        $this->form_validation->set_rules( 'whenToWithdraw', 'When To Withdraw','trim|required' );
        $this->form_validation->set_rules( 'email', 'Registered email','trim|required' );
   
         if($this->form_validation->run() == false){
             
            $this->load->view('extensions/header');
            $this->load->view('pages/regular_target_saver');
            
        }

        else

        {
            //Create a local variable via an array

            $regular = array(
                 'Frequency' => $this->input->post('frequency'),
                'TOB' => $this->input->post('TOB'),
                'month'=>$this->input->post('month'),
                'Amount' => $this->input->post('amount'),
                'Days_Of_Week' =>$this->input->post('week'),
                'Days_Of_Month' =>$this->input->post('days'),
                'WhenToWithdraw' => $this->input->post('whenToWithdraw'),
                'Email'=> $this->input->post('email')
                );
            
             $this->session->set_userdata($regular);
         
           
                if($this->User_Model->Insertregular( $regular)) {
                redirect('Dashboard/rsuccess');
            
            }

            else{
                
                 $this->load->view('extensions/header');
                $this->load->view('pages/regular_target_saver');
                
            }
           

    }

            
        }
        
    public function ExclusiveTargetSaver() {
        
            //Set Up Validation rules
        $this->form_validation->set_rules('frequency' , 'Frequency' , 'trim|required');
        $this->form_validation->set_rules('TOB','Time Of Debit', 'trim|required');
        $this->form_validation->set_rules('month','Month In Numbers', 'trim');
        $this->form_validation->set_rules('week','Days Of The Week', 'trim');
        $this->form_validation->set_rules('days','Days Of The Month', 'trim');
        $this->form_validation->set_rules('amount', 'Amount To Debit', 'trim|required');
        $this->form_validation->set_rules( 'whenToWithdraw', 'When To Withdraw','trim|required' );
        $this->form_validation->set_rules( 'email', 'Registered email','trim|required' );
        
   
         if($this->form_validation->run() == false){
             
             $this->load->view('extensions/header');
            $this->load->view('pages/exclusive_target_saver');
            
        }

        else

        {
            //Create a local variable via an array
            
            $exclusive = array(
                'Frequency' => $this->input->post('frequency'),
                'TOB' => $this->input->post('TOB'),
                'month'=>$this->input->post('month'),
                'Amount' => $this->input->post('amount'),
                'Days_Of_Week' =>$this->input->post('week'),
                'Days_Of_Month' =>$this->input->post('days'),
                'WhenToWithdraw' => $this->input->post('whenToWithdraw'),
                'Email'=> $this->input->post('email')
                
            );
                 $this->session->set_userdata( $exclusive );
                   
             
         
           
                if($this->User_Model->Insertexclusive( $exclusive)) {
                redirect('Dashboard/Esuccess');
            
            }

            else{
                
                $this->load->view('extensions/header');
                $this->load->view('pages/exclusive_target_saver');
                
            }
           

    }

            
        }
        
        
        
        
        
        
        
        
public function fastsaver()
        {
            $this->load->helper('url');
             $this->load->view('extensions/header');
            $this->load->view('pages/fast_saver');
        }
        
                
public function Withdraw()
        {
            
            //Set Up Validation rules
        $this->form_validation->set_rules('email' , 'Email' , 'trim|required');
        $this->form_validation->set_rules('amount','Withdrawal Value', 'trim|required');
        $this->form_validation->set_rules('BankName', 'Bank Name', 'trim|required');
        $this->form_validation->set_rules( 'accountname', 'Account Name','trim|required' );
        $this->form_validation->set_rules( 'accountnumber', 'Account Number','trim|required' );
        $this->form_validation->set_rules( 'pwd', 'alajo Password','trim|required' );
   
         if($this->form_validation->run() == false){
            $this->load->view('extensions/header');
            $this->load->view('pages/withdraw');
            
        }

        else

        {
            //Create a local variable via an array

            $withdraw = array(
                'email' => $this->input->post('email'),
                'withdraw_value' => $this->input->post('amount'),
                'Bankname' => $this->input->post('BankName'),
                'Accountsname' => $this->input->post('accountname'),
                'Accountsnumber' => $this->input->post('accountnumber'),
                'Alajopwd' => $this->input->post('pwd')
                 );
            
             $this->session->set_userdata( $withdraw);
             
         
           
                if($this->User_Model->Insertwithdraw($withdraw)) {
                redirect('Dashboard/Exclusive');
            
            }

            else{
                
                 $this->load->view('extensions/header');
                $this->load->view('pages/withdraw');
                
            }
           

    }
        }
        
        
        
 public function Esuccess(){
    
    $this->load->view('templates/header');
    $this->load->view('pages/esuccess');
   
}


public function Rsuccess(){
    
    $this->load->view('templates/header');
    $this->load->view('pages/rsuccess');
    
}

}
    

                
