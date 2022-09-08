<?php








function cat($id){

   $ci =& get_instance(); 

   $ci->db->select("*");
   $ci->db->where('id',$id);
   $ci->db->from("machine_type");
   
   return $ci->db->get()->row_array();

}


function sub_cat($id){

   $ci =& get_instance(); 

   $ci->db->select("*");
   $ci->db->where('id',$id);
   $ci->db->from("links");
   
   return $ci->db->get()->row_array();

}






 ?>