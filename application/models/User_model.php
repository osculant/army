<?php
  
  class User_model extends CI_Model
  {



  public function upload_image(){


     if(isset($_FILES['file']["name"])){
        $config['upload_path'] = "./assets/images/";
        $config['allowed_types'] = 'jpg|jpeg|png.raw|.cr2|.nef|.orf|.sr2|.bmp|.tif|.tiff';
        $this->load->library('upload', $config);

        if (!$this->upload->do_upload('file') ) {
            // $this->load->view('admin/admin', $error);
            $error = array('error' => $this->upload->display_errors());
            echo '<p style="color:red">The filetype you are attempting to upload is not allowed.</p>';
            print_r($error);
        } else {
          $data = array('image_metadata' => $this->upload->data());
          // echo  $data['image_metadata']["file_name"];
          $name=$data['image_metadata']["file_name"];
          $path= 'assets/images/'.$name;
          // print_r($data);
          $imagearr=array(
            
            
            'image'   => base_url().$path,
        
          );

          $second_arr = array(
            'im_name'=> $name,
          );

         
      }
  }


$user_id = $this->session->userdata('id');

  $arr = array(
    'user_id'=> $user_id,
    'image'=> $imagearr['image'],
    'status'=> 'pending',
    'image_name'=> $second_arr['im_name'],
  );

  $insert = $this->db->insert('result',$arr);


  if($insert){
  
  $last_id = $this->db->insert_id();

  $this->db->where('id',$last_id);
  $key = $this->db->get('result')->row_array();

  date_default_timezone_set('Asia/Kolkata');
  $current_time = date('Y-m-d H:i:s');

  $one_extra = strtotime("+1 minutes",strtotime($current_time));

  // $th = date("H:i", $one_extra);

  $a = date("F j, Y G:i:s", $one_extra); 

  $abc = array(
    'image'=> $key['image'],
    'status'=> 'uploaded',
    'end_time'=> $a,
    'id'=> $last_id,
  );

  print_r(json_encode($abc));
  
  }else{


    $abc = array(
      'status'=> 'not',
    );

    print_r(json_encode($abc));
  }


  }



public function get_all_results(){
  $user_id = $this->session->userdata('id');

  $this->db->where('user_id',$user_id);
  $this->db->order_by('id','DESC');
  $key = $this->db->get('result')->result_array();
  return $key;
}


public function get_my_result(){
  $id = $this->input->post('id');

   $this->db->where('id',$id);
  $key = $this->db->get('result')->row_array();

  // print_r(json_encode($key['result']));

  $ex = explode(",", $key['result']);

  

  $per = array_values(array_filter(explode(" ", $ex[0])));

  $all = array();
  for ($i=0; $i < count($per) ; $i++) {

    $in_per = preg_replace('/[^a-zA-Z0-9. -]/s', '',$per[$i]) * 100;

    $arr = array(
      'percentage'=> round($in_per,2),
      'disease'=> preg_replace('/[^a-zA-Z0-9_ -]/s', '', $ex[$i+1]),
    );

    array_push($all, $arr);
  }

  print_r(json_encode($all));
}


public function test(){
  $id = '45';

  $this->db->where('id',$id);
  $key = $this->db->get('result')->row_array();

  // print_r(json_encode($key['result']));

  $ex = explode(",", $key['result']);

  

  $per = array_values(array_filter(explode(" ", $ex[0])));

  $all = array();
  for ($i=0; $i < count($per) ; $i++) {

    $in_per = preg_replace('/[^a-zA-Z0-9. -]/s', '',$per[$i]) * 100;

    $arr = array(
      'percentage'=> round($in_per,2),
      'disease'=> preg_replace('/[^a-zA-Z0-9_ -]/s', '', $ex[$i+1]),
    );

    array_push($all, $arr);
  }

  print_r($all)   ;

  // return $key;
}
    

  }
  ?>
