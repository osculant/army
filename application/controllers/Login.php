<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {
  function __construct(){
    parent::__construct();
    $this->load->model('Login_model');
     $this->load->library('email');
  }


public function signup(){
  $this->Login_model->signup();
}
 

function auth(){
    
   
  $email=$this->input->post('email');
  $password=$this->input->post('password');  


  //$this->load->model('Login_model');
  $auth=$this->Login_model->validate($email,$password);

  if(!empty($auth)){
      $data     = $auth;
      $id       = $data['id'];
      $name     = $data['name'];
      $mobile   = $data['mobile'];
      $email    = $data['email'];
      $user_type= $data['user_type'];
      
      
      $sesdata = array(
        'id'      =>$id,
        'name'    =>$name,
        'mobile'   =>$mobile,
        'email'   =>$email,
        'user_type'=> $user_type,
        
        'logged_in'=>TRUE,
        );
        $this->session->set_userdata($sesdata);
        $this->session->set_flashdata('msg','Sucess'); 
        $this->switching();
        
    }else{
      echo 'Incorrect User Id or Password';
    }
}




function switching(){

  $user_type = $this->session->userdata('user_type');

  if($user_type == 'admin'){

    $this->load->view('admin/dashboard');
  
  }elseif ($user_type == 'user') {

    $this->load->view('user/dashboard');
  
  }
    
}





function logout(){
    
  if($this->session->userdata('logged_in')==TRUE){
  $this->session->sess_destroy();
  redirect('welcome');
  // $this->index();
  }else{
    redirect('welcome');
  }
}


function adminauth(){
       
  $email=$this->input->post('email');
  $password=$this->input->post('password');  


  //$this->load->model('Login_model');
  $auth=$this->Login_model->admin_validate($email,$password);

  if(!empty($auth)){
      $data     = $auth;
      $id       = $data['id'];
      $name     = $data['user_name'];
     
      $user_type= $data['type'];
      
      
      $admin_sesdata = array(
        'admin_id'      =>$id,
        'name'    =>$name,
        
        'user_type'=> $user_type,
        
        'logged_in'=>TRUE,
        );
        $this->session->set_userdata($admin_sesdata);
        $this->session->set_flashdata('msg','Sucess'); 
        // $this->switching();
        
    }else{
      echo 'Incorrect User Id or Password';
    }
}






function admin_switching(){

  $user_type = $this->session->userdata('user_type');
 
 if ($user_type == 'admin') {
    
    $this->load->view('admin/dashboard');
  
  }
    
}









}
?>