<?php
class Login_model extends CI_Model{
 



function validate($email,$password){
    
  $this->db->where('email',$email);
  $this->db->where('password',$password);
  $result = $this->db->get('users');
  return $result->row_array();
}


  function admin_validate($email,$password){
  
  $pass = md5($password);  

  $this->db->where('user_name',$email);
  $this->db->where('password',$pass);
  $result = $this->db->get('admin');
  return $result->row_array();
}


 



public function signup(){

  $arr1=$this->input->post();
         
      
  $this->db->where('mobile',$arr1['mobile']);
  $queryResult=$this->db->get('users');  
  $foundRows = $queryResult->num_rows();
 
  if($foundRows >= 1) {
    echo "You are already registered";
  }else{
         

      
        $arr = Array(
                   'name'  => $arr1['name'],
                   'mobile'  => $arr1['mobile'],
                   'password' => $arr1['password'],
                   // 'email_id'    => $arr1['email'],
                   'user_type'=> 'user',
                   
            );
            $this->db->insert('users',$arr);

        // $last_id = $this->db->insert_id();


        // $sesdata = array(
        // 'id'      =>$last_id,
        // 'name'    =>$arr1['name'],
        // 'mobile'   =>$$arr1['mobile'],
        // //'email_id'   =>$email,
        // 'user_type'=> 'user',
        
        // 'logged_in'=>TRUE,
        // );
        // $this->session->set_userdata($sesdata);
        // $this->session->set_flashdata('msg','Sucess'); 

}


}


 }?>