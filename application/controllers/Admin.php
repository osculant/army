<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {
  function __construct(){
    parent::__construct();
    // $this->load->model('Admin_model');
    $this->load->model('User_model');
    $this->load->library('email');
  }

function index(){
    // $user_type = $this->session->userdata();
    // print_r($user_type);
    if($this->session->userdata("logged_in") == True and $this->session->userdata("user_type") == 'admin'){
      // redirect('login/switching');
    }else {
      redirect( base_url('home'));
      //   # code...
      
      //       $this->load->model('Model_welcome');
        
      //   $this->load->view('home');
    }
    
  }



  public function login(){
  	$this->load->view('admin_login');
  }

	public function dashboard(){
    $this->index();
		$this->load->view('admin/dashboard');
		
	}

  public function change_password(){
    $this->index();
    $this->load->view('admin/change_password');
  }

	
 

}

?>