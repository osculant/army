<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {
  function __construct(){
    parent::__construct();
    $this->load->model('Login_model');
     $this->load->library('email');
  }


public function signup(){
  $this->Login_model->signup();
}
 

function auth(){
    
   
  $email=$this->input->post('email');
  $password=$this->input->post('password');  


  //$this->load->model('Login_model');
  $auth=$this->Login_model->validate($email,$password);

  if(!empty($auth)){
      $data     = $auth;
      $id       = $data['id'];
      $name     = $data['name'];
      $mobile   = $data['mobile'];
      $email    = $data['email'];
      $user_type= $data['user_type'];
      
      
      $sesdata = array(
        'id'      =>$id,
        'name'    =>$name,
        'mobile'   =>$mobile,
        'email'   =>$email,
        'user_type'=> $user_type,
        
        'logged_in'=>TRUE,
        );
        $this->session->set_userdata($sesdata);
        $this->session->set_flashdata('msg','Sucess'); 
        $this->switching();
        
    }else{
      echo 'Incorrect User Id or Password';
    }
}




function switching(){

  $user_type = $this->session->userdata('user_type');

  if($user_type == 'admin'){

    $this->load->view('admin/dashboard');
  
  }elseif ($user_type == 'user') {

    $this->load->view('user/dashboard');
  
  }
    
}





function logout(){
    
  if($this->session->userdata('logged_in')==TRUE){
  $this->session->sess_destroy();
  redirect('welcome');
  // $this->index();
  }else{
    redirect('welcome');
  }
}



function send_otp(){


  $input = $this->input->post();


  $this->db->where('email',$input['email']);
  $check = $this->db->get('users')->num_rows();

if($check == 0){

  $arr = array(
     'user_name'  =>    $input['name'],
     'user_mobile'  =>  $input['mobile'],
     'user_password' => $input['password'],
     'user_email'    => $input['email'],
     

  );

  $this->session->set_userdata($arr);

$generator = "1357902468";
  $result = "";
  
    for ($i = 1; $i <= 6; $i++) {
        $result .= substr($generator, (rand()%(strlen($generator))), 1);
    }





  $this->session->set_userdata('otp' , $result);


$msg = "<b>Your OTP from Orascan $result </b>";




$arr = array(
  'to_email'=> $input['email'],
  'content'=> $msg,
 'status'=> 'success',

);


print_r(json_encode($arr));



// $abc = $this->db->insert('send_mail',$arr);

// if($abc){
//   echo "sucess";
// }else{
//   echo "no";
// }

// $from = "orascan@osculant.in";

//   $headers  = 'MIME-Version: 1.0' . "\r\n";
// $headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
// $headers .= 'From:'.$from."\n";

// $subject = "OTP FROM ORASCAN";
// // $to= $input['email'];
// // $ab = mail($to,$subject,$msg,$headers);

// $result=$this->email
//   ->from('info@brajsolar.com')
//   ->reply_to('')
//   ->to($input['email'])
//   ->cc('')
//   ->subject($subject)
//   ->message($msg)
//   ->send(FALSE);

//   if($result== 1){
//     echo "success";
//   }else{
//     echo "no";
//   }



          // $to_email = $input['email'];
          //  $subject = "OTP FROM ORASCAN";
           
          //  $mail_message = "<p>Your OTP is $result </p>";
          //  $header = "From:orascan@osculant.in \r\n";
          

          

          // $header .= "MIME-Version: 1.0\r\n";

          // $header .= "Content-type: text/html\r\n";
          
          // $retval = mail ($to_email,$subject,$mail_message,$header);

// if($retval){
//   echo "sucess";
// }else{
//   echo "no";
// }


}else{

  $arr = array(
    'status'=> 'already',
  );
  print_r(json_encode($arr));
}

}


public function chekotp_and_signup(){


  $input = $this->input->post();


  $session_otp = $this->session->userdata('otp');

  $user_otp  = $input['otp'];

  if($session_otp == $user_otp){



     $arr = Array(
           'name'  => $this->session->userdata('user_name'),
           'mobile'  => $this->session->userdata('user_mobile'),
           'password' => $this->session->userdata('user_password'),
           'email'    => $this->session->userdata('user_email'),
           'user_type'=> 'user',
                   
      );
     $this->db->insert('users',$arr);

     $this->session->unset_userdata('user_name');
     $this->session->unset_userdata('user_mobile');
     $this->session->unset_userdata('user_password');
     $this->session->unset_userdata('user_email');
     $this->session->unset_userdata('otp');


     echo "done";



  }else{
    echo "wrong";
  }

}



function resend_otp(){

    $input = $this->input->post();

    $generator = "1357902468";
    $result = "";
  
    for ($i = 1; $i <= 6; $i++) {
        $result .= substr($generator, (rand()%(strlen($generator))), 1);
    }

    $this->session->set_userdata('otp' , $result);

    $msg = "<b>Your OTP from Orascan $result </b>";

    $arr = array(
      'to_email'=> $input['email'],
      'content'=> $msg,
      'status'=> 'success',   
    );

    print_r(json_encode($arr));



}


function forgot_otp(){

$input = $this->input->post();


  $this->db->where('email',$input['email']);
  $check = $this->db->get('users')->num_rows();

if($check == 0){

  $arr = array(
    'status'=> 'not_exist',
  );

  print_r(json_encode($arr));

}else{



$generator = "1357902468";
  $result = "";
  
    for ($i = 1; $i <= 6; $i++) {
        $result .= substr($generator, (rand()%(strlen($generator))), 1);
    }





  $this->session->set_userdata('otp' , $result);


$msg = "<b>Your OTP from Orascan $result </b>";




$arr = array(
  'to_email'=> $input['email'],
  'content'=> $msg,
 'status'=> 'success',

);

print_r(json_encode($arr));




}

}



function change_password_on_forgot(){

  $otp = $this->input->post('otp');
  $session_otp = $this->session->userdata('otp');

$input = $this->input->post();

  if($session_otp == $otp){


    $arr = array(
      'password'=> $input['password'],
    );


    $this->db->where('email',$input['email']);
    $key = $this->db->update('users',$arr);

    if($key){
      echo "success";
    }

  }else{
    echo "wrong";
  }

}














}
?>