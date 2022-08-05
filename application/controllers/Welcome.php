<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {
  function __construct(){
    parent::__construct();
    $this->load->model('Model_welcome');
    $this->load->library('email');
  }


public function index(){
	$this->load->view('home');
}

public function login(){
	$this->load->view('login');
}



public function content1(){
  $this->load->view('content1');
}

public function content2(){
  $this->load->view('content2');
}

public function machine_type(){
  $data['machine_type'] = $this->Model_welcome->get_machine();
  $this->load->view('machine_type',$data);
}

public function main(){
  $id = $this->input->get('id');
  $data['data'] = $this->Model_welcome->get_data_by_machine($id);
	$this->load->view('main',$data);
}

public function detail(){
  $info = $this->input->get('id');
  $data['data'] = $this->Model_welcome->get_data_detail($info);
	$this->load->view('detail',$data);
}

public function signup(){
	$this->load->view('signup');
}


public function otp(){
  $this->load->view('otp');
}


public function contact_us(){
  $this->load->view('contact_us');
}



public function about_us(){
  $this->load->view('about_us');
}


public function forgot_password(){
  $this->load->view('forget_password');
}

public function testing_py(){
    // ob_start();
    // system('/lib/python2.7/site-packages /var/www/html/orascan/assets/test.py', $return_value);
    // system('full/path/to/python /full/path/to/test.py', $return_value);
    // $output = ob_get_clean(); 
    //echo "abc";
    // echo $return_value;
  ob_start();
  passthru('/lib/python2.7/site-packages /var/www/html/orascan/assets/test.py');
  $output = ob_get_clean();
  echo $output;
  }
	

}

?>