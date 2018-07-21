<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {
    
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
        $this->load->view('pages/login');
        $this->load->view('templates/footer');


}
     public function login_validation(){
        
        $this->form_validation->set_rules('Username','Username', 'trim|required');
        $this->form_validation->set_rules('Password','Password', 'trim|required');
        
        if($this->form_validation->run() == false){
            $this->load->view('templates/header');
            $this->load->view('pages/login');
            $this->load->view('templates/footer');
            
        }

        else

        {
            
            $username = $this->input->post('Username');
            $password = md5($this->input->post('Password'));
            
            $this->User_Model->can_login($username, 
                $password);
            
                 $userInfo = $this->User_Model->can_login(
                    $username, $password);
            if ($userInfo) {
               
               foreach ($userInfo as $user) {
                $hold = array();
                $hold['id']      = $user->id;
                $hold['Fname']     = $user->Fname;
                $hold['Username']  = $user->Username;
                $hold['email']  = $user->email;
                $hold['Phone']  = $user->Phone;
                $hold['Plans']  =$user->Plans;
                $hold['adminCharge'] = $user->adminCharge;

                $this->session->set_userdata($hold);
               }
                    
                if(!$this->session->userdata('adminCharge') == 1){
                
               		redirect('fdashboard');
               		
               }
               
               elseif($this->session->userdata('adminCharge') == 1 && $this->session->userdata('Plans') == ('Regular')){
                
               		redirect('dashboard/regulartargetsaver');
               		
               }
               
                elseif($this->session->userdata('adminCharge') == 1 && $this->session->userdata('Plans') == ('Exclusive')){
                
               		redirect('dashboard/exclusivetargetsaver');
               		
               }
               

                
            }else{
                $this->session->set_flashdata('login_msg', '<div class="alert alert-danger text-center">Login Failed!! Please try again.</div>');
                $this->load->view('templates/header');
                $this->load->view('pages/login');
                $this->load->view('templates/footer');
                
            }
        }
    }
    
   public function logout(){
        
    $logout = $this->session->sess_destroy();

    if ($logout = true) {
        $this->load->view('templates/header');
        $this->load->view('pages/login');
        $this->load->view('templates/footer');
    }

    else
    {
      echo "Failed";
    }
    
    }
}