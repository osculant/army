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
    $data['data'] = $this->Model_welcome->get_total_content();
		$this->load->view('admin/dashboard',$data);
		
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


  public function edit_content(){
    $this->index();
    $info = $this->input->get('id');
    $data['content_detail'] = $this->Model_welcome->get_content_data($info);
    $this->load->view('admin/edit_content',$data);
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



        if ($_FILES['audio']['name'] != "") {
            if (($_FILES['audio']['type'] == "audio/mp3") || ($_FILES['audio']['type'] == "audio/mpeg")) {
                if ($_FILES["audio"]["size"] < 16777216) {           
                        move_uploaded_file($_FILES["audio"]["tmp_name"], "assets/files/" . $_FILES["audio"]["name"]);
                       // echo "File has been stored in your uploads directory.";
                      }
                else {    

                  // echo "Please upload a file that is under 2 mb!";

                }
                
            } else {
              
              // echo "Please upload a mp3 file!";
        
            exit;}
        }


        // if(isset($_FILES['audio']["name"])){


        //       $config['upload_path'] = "./assets/files/";
        //        $config['allowed_types'] = "mp3";
        //       $this->load->library('upload', $config);

        //       if (!$this->upload->do_upload('audio') ) {
        //           // $this->load->view('admin/admin', $error);
        //           $error = array('error' => $this->upload->display_errors());
        //           print_r($error);
        //       } else {
        //         $data = array('image_metadata' => $this->upload->data());
        //         // echo  $data['image_metadata']["file_name"];
        //         $name=$data['image_metadata']["file_name"];
        //         $path= 'assets/files/'.$name;
        //         // print_r($data);
        //         $audio_arr=array(
                  
                  
        //           'audio'   => base_url().$path,
              
        //         );

               
        //     }
        // } 


    $arr = array(
      'name'=> $this->input->post('name'),
      'link'=> $this->input->post('link'),
      'description'=> $this->input->post('description'),
      'icon'=> $imagearr['icon'],
      'audio'=> $_FILES["audio"]["name"],
    );

    // print_r($arr);

    $key = $this->db->insert('links',$arr);


    if($key){
      echo "done";
    }


  }




   public function edit_content_func(){

    $id = $this->input->post('id');
    $this->db->where('id',$id);
    $data = $this->db->get('links')->row_array();


        if(isset($_FILES['icon']["name"])){
            $config['upload_path'] = "./assets/files/";
              $config['allowed_types'] = 'jpg|jpeg|png';
              $this->load->library('upload', $config);

              if (!$this->upload->do_upload('icon') ) {
                  // $this->load->view('admin/admin', $error);
                  $error = array('error' => $this->upload->display_errors());
                  // echo '<p style="color:red">The filetype you are attempting to upload is not allowed.</p>';
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



        if ($_FILES['audio']['name'] != "") {
            if (($_FILES['audio']['type'] == "audio/mp3") || ($_FILES['audio']['type'] == "audio/mpeg")) {
                if ($_FILES["audio"]["size"] < 16777216) {           
                        move_uploaded_file($_FILES["audio"]["tmp_name"], "assets/files/" . $_FILES["audio"]["name"]);
                       // echo "File has been stored in your uploads directory.";
                      }
                else {    

                  // echo "Please upload a file that is under 2 mb!";

                }
                
            } else {
              
              // echo "Please upload a mp3 file!";
        
            exit;}
        }


if($_FILES['icon']["name"] != ""){

  $icon = $imagearr['icon'];

}else{



  $icon = $data['icon'];

}
     
if ($_FILES['audio']['name'] != "") {

  $audio = $_FILES['audio']['name'];

}else{

$audio = $data['audio'];

}





    $arr = array(
      'name'=> $this->input->post('name'),
      'link'=> $this->input->post('link'),
      'description'=> $this->input->post('description'),
      'icon'=> $icon,
      'audio'=> $audio,
    );

    // print_r($arr);
            $this->db->where('id',$id);
    $key = $this->db->update('links',$arr);


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