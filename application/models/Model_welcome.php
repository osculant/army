<?php
  
  class Model_welcome extends CI_Model
  {


public function get_data(){
    $this->db->order_by('id','desc');
  $get = $this->db->get('links')->result_array();
  return $get;
}



public function get_content_data($info){
  $this->db->where('id',$info);
  $get = $this->db->get('links')->row_array();
  return $get;
}

public function get_data_detail($info){
  $this->db->where('id',$info);
  $get = $this->db->get('links')->row_array();
  return $get;
}

public function get_total_content(){
  $get = $this->db->get('links')->num_rows();

  return $get;
}
    

public function get_machine(){

  $key = $this->db->get('machine_type')->result_array();
  return $key;
}

public function get_data_by_machine($id){
   $this->db->where('machine_type',$id);
   $key = $this->db->get('links')->result_array();
   return $key;
}

  }
  ?>