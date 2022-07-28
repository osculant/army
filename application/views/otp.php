<!DOCTYPE html>
<html lang="en">
<head>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">  
  <title>ORASCAN</title>

      <style>
         
         <?php include 'common/css/welcome_message.css'; ?>
        


         @media(max-width: 768px){

          

        


      }
      </style>
      <!--links-->
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
      <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"/>
      <link href="https://fonts.googleapis.com/css2?family=Dancing+Script:wght@600&display=swap&family=Pacifico&display=swap" rel="stylesheet">
      <link href="https://fonts.googleapis.com/css2?family=Kaushan+Script&display=swap" rel="stylesheet">
      <link href='https://fonts.googleapis.com/css?family=Sofia' rel='stylesheet'>
      <link href="https://fonts.googleapis.com/css2?family=Cormorant+SC&display=swap" rel="stylesheet">
      <link href="https://fonts.googleapis.com/css2?family=Bilbo+Swash+Caps&display=swap" rel="stylesheet">
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"/>
      <!--links end-->

      <!--script-->
      <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
      <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
      <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.3/Chart.min.js"></script>
      <script src="https://canvasjs.com/assets/script/jquery-1.11.1.min.js"></script>
      <script src="https://canvasjs.com/assets/script/jquery.canvasjs.min.js"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/waypoints/4.0.1/jquery.waypoints.js" integrity="sha512-ZKNVEa7gi0Dz4Rq9jXcySgcPiK+5f01CqW+ZoKLLKr9VMXuCsw3RjWiv8ZpIOa0hxO79np7Ec8DDWALM0bDOaQ==" crossorigin="anonymous"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/waypoints/4.0.1/jquery.waypoints.js" integrity="sha512-ZKNVEa7gi0Dz4Rq9jXcySgcPiK+5f01CqW+ZoKLLKr9VMXuCsw3RjWiv8ZpIOa0hxO79np7Ec8DDWALM0bDOaQ==" crossorigin="anonymous"></script>
      <!--script end-->
</head>
<body style="background: linear-gradient(to bottom, #b7d2f5 0%, #f3d8e1 100%);height: 100vh">


<div class="container">

  <a onclick="goBack()"><p style="margin-top: 15px;color:#388EE9"><i class="fa fa-arrow-left"></i></p></a>
    
    <div class="row d-flex justify-content-center">
      <div class="first">
        <img src="<?php echo base_url('assets/images/main.png') ?>" style="width: 87px;margin-top: 58px;">
      </div>

    </div>

    <div class="row" style="margin-top: 9px;">
      <div class="col-12">
      <div class="tag"><h2 style="color: white; text-align: center;text-shadow: 2px 2px 4px black;">ORASCAN 2.0</h2></div>
    </div>
    </div>




    <div class="row" style="margin-top: 30px">
      <div class="col-12">
        <p class="heading" style="text-transform: uppercase;font-size: 1.8rem;color: #388EE9;font-weight: bold">Enter Your OTP</p>
        <p style="color: gray;margin-top: -18px;text-transform: uppercase;font-size: 0.7rem;">Sent to your registered Email..</p>
        <hr>
      </div>

      <div class="col-12">
        
        <p style="float:right"><span id="counter"></span></p>
        <div id="resend_btn"></div>

      </div>

      <div class="col-12">
        <div class="form-group">

          <div class="alert alert-danger" role="alert" style="display:none" id="wrong">
  Invalid OTP    </div>

          <form id="otp_submit">
            <?php //echo $this->session->userdata('otp'); ?>

              <input type="text" name="otp" placeholder="Enter Your OTP" class="form-control" style="background-color: transparent;border: 1px solid white;border-radius: 11px;padding:22px">

             
             <br>


              <center><button class="btn btn-info" type="submit" style="width: 15rem;background: #388EE9;;border: 2px solid #388EE9;;color:white;border-radius: 16px;">Submit <i id = 'signupspinner' class="fa fa-spinner fa-spin" style="display: none;"></i></button></center>



        <!--       <div class="btnGroup">
        <span class="Btn" id="verifiBtn">
          <button type="submit">Verify</button>
        </span>
        <span class="timer">
          
        </span>
      </div> -->


              <br>
              <!-- <p style="color: red;display: none" id="wrong"></p> -->
          </form>

        </div>
      </div>
    </div>


  
</div>
</body>
<script type="text/javascript">


function countdown() {
        var seconds = 59;
        function tick() {
          var counter = document.getElementById("counter");
          seconds--;
          counter.innerHTML =
            "0:" + (seconds < 10 ? "0" : "") + String(seconds);
          if (seconds > 0) {
            setTimeout(tick, 1000);
          } else {

            document.getElementById("resend_btn").innerHTML = `
                <div class="Btn" style="float: right;margin-bottom: 16px;">
                    <button type="button" onclick="resend_otp()" class="btn btn-info btn-sm">Resend OTP </button>
                </div>
            `;
            document.getElementById("counter").innerHTML = "";
          }
        }
        tick();
      }
      countdown();




function goBack() {
  window.history.back();
}


$(document).ready(function(){
    $('#otp_submit').on('submit',function(e){
         e.preventDefault();
         //alert('check1');
         
       $("#signupspinner").show();
         


      //    var password = document.getElementById("password");
      //   var confirm_password = document.getElementById("confirm_password");


      // if(password.value != confirm_password.value) {
        
      //   // confirm_password.setCustomValidity("Passwords Don't Match");

      //   // alert('not match');
      //   $("#signupspinner").hide();

      //   $('#match_nhihua').show();
  
      // } else {
      //   // confirm_password.setCustomValidity('');
    


        
          $.ajax({
                url:"<?php echo base_url('index.php/Login/chekotp_and_signup');?>",
                method:'POST',
                data:new FormData(this),
                contentType: false,
                cache: false,
                processData:false,
                success:function(data){
                  
                  
                  //alert(data);

                  
                   // window.location = "<?php echo base_url('index.php/welcome/')?>";

                   if(data == "wrong"){
                   $("#signupspinner").hide();
                    $("#wrong").show();
                  }else{
                    window.location = "<?php echo base_url('index.php/welcome/login') ?>";
                  }

                  //  }else if(data == "Invalid"){
                    
                  //   $("#invalid").show();
                  //   $("#signupspinner").hide();
                  // }
                  // else{
                  //   // window.location.reload();

                  //   window.location = "<?php echo base_url('index.php/login/switching')?>";
                  // }

                            
                  
                }
          });
         // }//else
    });
        

});




function resend_otp(){


    var email = "<?php echo $_GET['email'] ?>";


    $.ajax({
      url:"<?php echo base_url('index.php/login/resend_otp') ?>",
      method:"POST",
      data:"email="+email,
      success:function(data){


            var obj = JSON.parse(data);

          /*  in ajax */
                      $.ajax({
                        url:"http://osculant.in/mail_file/index.php/home/mail_send",
                        method:'POST',
                        data: "msg="+obj.content+"&to_email="+obj.to_email,
                        success:function(data1){

                          // if(data1 == "success"){

                            // window.location = "<?php echo base_url('index.php/welcome/otp') ?>";
                          // }

                            window.location.reload();

                        },

                        error: function (textStatus, errorThrown) {
                          // window.location = "<?php echo base_url('index.php/welcome/otp') ?>";

                            
                            window.location.reload();
                        }



                      });

                      // in ajax end 



      }
    });

}



</script>

</html>