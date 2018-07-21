<?php

class Register extends CI_Controller 
	{
    public function __construct(){
        parent::__construct();
        
        $this->load->helper('url_helper');
        $this->load->model('User_Model');
        $this->load->helper(array('form', 'url'));
        $this->load->library('email');
        $this->load->library('form_validation');
        $this->load->library('session');
        //$this->get_email();
       
        
        
    }
    
   

     public function index()
     {
     
    	 //Set Up Validation rules
        $this->form_validation->set_rules('Fname' , 'FullName' , 'trim|required');
    	$this->form_validation->set_rules('Username','Username', 'trim|required|is_unique[users.Username]',

        array(

            'required'      => 'You have not provided %s.',
            'is_unique'     => 'This Username already         exists,choose another one.'

            ));
        //$this->form_validation->set_rules('email','Email', 'trim|required');
        $this->form_validation->set_rules('email','Email', 'trim|required|valid_email|is_unique[users.email]',  
        array(
        'required'      => 'You have not provided %s.',
                'is_unique'     => 'This email address already exists, choose another one.'
        ));
        
        $this->form_validation->set_rules('Phone','Phone', 'trim|required');
        $this->form_validation->set_rules('Plans', 'Plans', 'required|callback_select_validate'); 
         
            /*if($this->form_validation->run() == true ){
    /*user has selected. use the data now*/
//}else{
    /*user has not sleected data, throw error back*/
//};
        $this->form_validation->set_rules('Name', 'Name', 'trim|required');
        $this->form_validation->set_rules('KPhone', 'Phone Of Kin', 'trim|required');
        $this->form_validation->set_rules( 'relationship', 'Relationship','trim|required' );
        $this->form_validation->set_rules('Password','Password', 'trim|required');
        $this->form_validation->set_rules('cpassword', 'Password Confirmation', 'trim|required|matches[Password]');
   
         if($this->form_validation->run() == false){
            $this->load->view('templates/header');
    		$this->load->view('pages/register');
    		$this->load->view('templates/footer');
            
        }

        else

        {
            //Create a local variable via an array

            $data = array(
                'FName' => $this->input->post('Fname'),
                'Username' => $this->input->post('Username'),
                'Email' => $this->input->post('email'),
                'Phone' => $this->input->post('Phone'),
                'Plans' => $this->input->post('Plans'),
                'Name_Of_Kin' => $this->input->post('Name'),
                'Phone_number_Of_Kin' => $this->input->post('KPhone'),
                'Relationship_With_Kin' => $this->input->post('relationship'),
                'password' => md5($this->input->post('Password')),
                'hash' => md5($this->input->post('email'))
                
                
            );
            
            $this->session->set_userdata($data);
         
           
            
          
                    
            


                if($this->User_Model->Insertusers( $data)) {
                //send email to the user for account activation
                if($this->User_Model->sendEmail($this->input->post('email')));
                $this->session->set_flashdata('msg', '<div class="alert alert-success text-center">Successfully registered. Please confirm the mail that has been sent to your email. </div>');

                    $this->load->view('templates/header');
                    $this->load->view('pages/register');
                    $this->load->view('templates/footer');
}

            else{
                $this->load->view('templates/header');
                $this->load->view('pages/register');
                $this->load->view('templates/footer');
            }
           

    }

}
            public function Reset(){
                
            $email = $this->input->post('email');      
         $findemail = $this->User_Model->ForgotPassword($email);  
         if($findemail){
          $this->User_Model->sendpassword($findemail);        
           }else{
          $this->session->set_flashdata('msg',' Email not found!');
          $this->load->view('templates/header');
            $this->load->view('pages/password_reset');
      }
                
               
                
            }
            

            function select_validate($abcd)
            {
        // 'none' is the first option that is default "-------Choose Plan-------"
        if($abcd=="none"){
        $this->form_validation->set_message('select_validate', 'Please Select Your Plan.');
          
        return false;
        } else{
        // User picked something.
        return true;
        }
        }
        
        
            
       
       
  

       function confirmEmail(){
           
           $hashkey = $this->session->userdata('Username');
           $this->User_Model->verifyEmail($hashkey);
           if($hashkey ==  true) {
                    
                 $this->session->set_flashdata('verify', '<div class="alert alert-success text-center">Email address is confirmed. Please login to the system</div>');
                redirect('Login/index');
            }
             else{   $this->session->set_flashdata('verify', '<div class="alert alert-danger text-center">Email address is not confirmed. Please try to re-register.</div>');
                redirect('Register/index');
            
            
        }
            
       
    }

	}	



 
         