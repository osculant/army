<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Controller {
  function __construct(){
    parent::__construct();
    $this->load->model('User_model');
    $this->load->library('email');
  }


public function dashboard(){
  // $data['test'] = $this->User_model->test();
	$this->load->view('user/dashboard');
}

public function result(){
  $data['result'] = $this->User_model->get_all_results();
  $this->load->view('user/result',$data);
}


public function upload_image(){
  $this->User_model->upload_image();
}

public function check_terms(){
  $id = $this->input->post('id');

  $this->db->where('id',$id);
  $key = $this->db->get('users')->row_array();

  if($key['term_accept'] == "No"){
    echo "no";
  }else{
    echo "yes";
  }

}


public function accept_terms(){
  $id = $this->session->userdata('id');

  $arr = array(
    'term_accept'=> 'yes',
  );

  $this->db->where('id',$id);
  $this->db->update('users',$arr);
}

public function get_my_result(){
  $this->User_model->get_my_result();
}


}?>