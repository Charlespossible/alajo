<?php

class User_Model extends CI_Model{

    function __construct(){
        
        parent::__construct();
        $this->load->database();
        $this->load->library('session');
        $this->load->library('email');
        $this->load->helper('url_helper');
        $this->load->helper(array('form', 'url'));
    }
    
    //insert users details to users table
    public function Insertusers($data){
        
        return $this->db->insert('users', $data);
      
    }
    
    //Insert Into Regular Target Table
    public function Insertregular($regular){
        
        return $this->db->insert('regulartarget' , $regular);
    }
    
    //Insert Into Exclusive Table
     public function Insertexclusive($exclusive){
        
        return $this->db->insert('exclusivetarget' , $exclusive);
    }
    
   public function totalAmount(){
       
       $email = $this->session->userdata('Email');
       return  $this->db->query("select amount  from exclusivetarget where email = '$email' order by id desc limit 1");
        
       
   }
    
    
    
    //Insert Into Withdraw Table
     public function Insertwithdraw($withdraw){
        
        return $this->db->insert('withdraw' , $withdraw);
    }


    
   public function can_login($username, $password)  
      {  
           $query = $this->db->get_where('users', array('Username' => $username, 'Password' => $password,'status'=> 1 ));   //status should be 1
        
        if($query->num_rows() == 1){
            
            $userArr = array();
            foreach($query->result() as $row){
                $userArr[0] = $row->id;
                $userArr[1] = $row->Fname;
                
            }
            $userData = array(
                'id' => $userArr[0],
                'Fname' => $userArr[1]
                
            );
            $this->session->set_userdata($userData);
            
            return $query->result();
        }else{
            return false;
        }

      }

  

//send confirm mail
    public function sendEmail(){
        $hashcode = $this->session->userdata('hash');
        $from = "info@alajo.com.ng";    //senders email address
        $subject = 'Verify email address';  //email subject
        $fullname = $this->input->post('Fname'); //full name
        
      $message = '<html><body>';
    $message .= "<h4>Thanks for signing up,". $this->input->post('Fname')  ."!</h4>";
    $message .='<a href="http://alajo.com.ng" target="_blank">
    <img src="alajo.com.ng/assets/images/logo.png" alt="Logo" style="width:80px; margin-left: 50%"/>
     </a>';
    $message .= '<img src="alajo.com.ng/assets/images/ezra.jpg" alt="Image Banner" style="display: block;border:0"; height="50%" width="100%"';
    $message .= '<table rules="all" style="border-color: #666;" cellpadding="10">';
    $message .= "<tr style='background: #eee;'><td><strong>Full Name:</strong> </td><td>" . $this->input->post('Fname')  . "</td></tr>";
    $message .= "<tr><td><strong>Email:</strong> </td><td>" . $this->input->post('email')  . "</td></tr>";
    $message .= "<tr><td><strong>Password:</strong> </td><td>" . $this->input->post('Password')  . "</td></tr>";
    $message .= "</table>";
    $message .= "<p>Please click this link to activate your account:"
     . base_url() . "Register/ConfirmEmail?" . 
    "Username=" . $this->input->post('Username'); 
    "</p>";
    $message .= "</body></html>";
        
        
        
        //config email settings
        $config['protocol'] = 'smtp';
        $config['smtp_host'] = 'ssl://box5514.bluehost.com';
        $config['smtp_port'] = '465';
        $config['smtp_user'] = $from;
        $config['smtp_pass'] = 'alajocash@123';  //sender's password
        $config['mailtype'] = 'html';
        $config['charset'] = 'iso-8859-1';
        $config['wordwrap'] = 'TRUE';
        $config['newline'] = "\r\n"; 
        
        $this->load->library('email', $config);
		$this->email->initialize($config);
        //send email
        $this->email->from($from);
        $this->email->to($this->input->post('email'));
        $this->email->subject($subject);
        $this->email->message($message);
        
        if($this->email->send()){
            
            return true;
        }else{
            echo "email send failed";
            return false;
        }
        
       
    }
    
    //activate account
    
      public  function verifyEmail($key){
        $data = array('status' => 1);
        $this->db->where('Username' , $key);
        $this->db->update('users', $data);   //update status as 1 to make active user
    }
    
    
     public function redirection($redirectData){
        $charge = array('adminCharge' => '1');
        $this->db->where('Username' , $redirectData );
        return $this->db->update('users', $charge);
    }
    
    
    /* public function ForgotPassword($email)
    {
        $this->db->select('email');
        $this->db->from('users'); 
        $this->db->where('email', $email); 
        $query=$this->db->get();
        return $query->row_array();
    }*/
    
   
    
   
    
      }



