<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {
  function __construct(){
    parent::__construct();
    $this->load->model('Model_welcome');
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

  public function add_content(){
    $this->index();
    $this->load->view('admin/add_content');
  }

  public function view_content(){
    $this->index();
    $data['content'] = $this->Model_welcome->get_data();
    $this->load->view('admin/view_content',$data);
  }


  public function add_content_func(){

    $arr = array(
      'name'=> $this->input->post('name'),
      'link'=> $this->input->post('link'),
      'description'=> $this->input->post('description'),
    );

    $key = $this->db->insert('links',$arr);


    if($key){
      echo "done";
    }


  }


  public function delete_function(){
    $id = $this->input->post('id');

    $this->db->where('id',$id);
    $this->db->delete('links');
    echo "deleted";
  }
	
 

}

?>