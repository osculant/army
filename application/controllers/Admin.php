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




        if(isset($_FILES['icon']["name"])){
            $config['upload_path'] = "./assets/files/";
              $config['allowed_types'] = 'jpg|jpeg|png';
              $this->load->library('upload', $config);

              if (!$this->upload->do_upload('icon') ) {
                  // $this->load->view('admin/admin', $error);
                  $error = array('error' => $this->upload->display_errors());
                  echo '<p style="color:red">The filetype you are attempting to upload is not allowed.</p>';
                  // print_r($error);
              } else {
                $data = array('image_metadata' => $this->upload->data());
                // echo  $data['image_metadata']["file_name"];
                $name=$data['image_metadata']["file_name"];
                $path= 'assets/files/'.$name;
                // print_r($data);
                $imagearr=array(
                  
                  
                  'icon'   => $path,
              
                );

               
            }
        } 


        if(isset($_FILES['audio']["name"])){


              $config['upload_path'] = "./assets/files/";
               $config['allowed_types'] = 'mp3|ogg';
              $config['encrypt_name'] = TRUE;
              $this->load->library('upload', $config);

              if (!$this->upload->do_upload('audio') ) {
                  // $this->load->view('admin/admin', $error);
                  $error = array('error' => $this->upload->display_errors());
                  print_r($error);
              } else {
                $data = array('image_metadata' => $this->upload->data());
                // echo  $data['image_metadata']["file_name"];
                $name=$data['image_metadata']["file_name"];
                $path= 'assets/files/'.$name;
                // print_r($data);
                $audio_arr=array(
                  
                  
                  'audio'   => base_url().$path,
              
                );

               
            }
        } 


    $arr = array(
      'name'=> $this->input->post('name'),
      'link'=> $this->input->post('link'),
      'description'=> $this->input->post('description'),
      'icon'=> $imagearr['icon'],
      'audio'=> $audio_arr['audio'],
    );



    // $key = $this->db->insert('links',$arr);


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