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

public function get_total_content(){
  $get = $this->db->get('links')->num_rows();

  return $get;
}
    

  }
  ?>