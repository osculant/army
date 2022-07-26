<?php
  
  class Model_welcome extends CI_Model
  {


public function get_data(){
    $this->db->order_by('id','desc');
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

public function get_machine_data(){
  $key = $this->db->get('links')->result_array();
  return $key;
}

public function get_data_by_machine($id){
   $this->db->where('machine_type',$id);
   $this->db->order_by('id','desc');
   $key = $this->db->get('links')->result_array();
   return $key;
}

public function get_machine_name($id){
  $this->db->where('id',$id);
  $key = $this->db->get('machine_type')->row_array();
  return $key;
}

  }
  ?>