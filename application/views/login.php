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
<body style="
background-image: linear-gradient(315deg, #b1ade2 0%, #7ddff8 74%);height: 100vh">


<div class="container">

  <a onclick="goBack()"><p style="margin-top: 15px;color:#388EE9"><i class="fa fa-arrow-left"></i></p></a>
    
    <div class="row d-flex justify-content-center">
      <div class="first">
        <img src="<?php echo base_url('assets/images/main.png') ?>" style="width: 87px;margin-top: 58px;">
      </div>

    </div>

    <div class="row" style="margin-top: 9px;">
      <div class="col-12">
      <div class="tag"><h2 style="color: white; text-align: center;text-shadow: 2px 2px 4px black;">Demo App</h2></div>
    </div>
    </div>




    <div class="row" style="margin-top: 30px">
      <div class="col-12">
        <p class="heading" style="text-transform: uppercase;font-size: 1.8rem;color: #388EE9;font-weight: bold">Login</p>
        <p style="color: gray;margin-top: -18px;text-transform: uppercase;font-size: 0.7rem;">Login into your account..</p>
        <hr>
      </div>
      <div class="col-12">
        <div class="form-group">
          <form id="login">
          <input type="email" name="email" placeholder="Enter Your Email ID" class="form-control" style="background-color: transparent;border: 1px solid white;border-radius: 11px;padding:22px">

          <br>
          <input type="Password" name="password" placeholder="Enter Your Password" class="form-control" style="background-color: transparent;border: 1px solid white;border-radius: 11px;padding:22px">

          <p style="margin-top: 5px;display: none;color: blue;text-transform: uppercase;" id="incorrect">Incorrect Id or Password</p>

          <br>

          <center><button class="btn btn-info" type="submit" style="    width: 15rem;background: #388EE9;;border: 2px solid #388EE9;;color:white;border-radius: 16px;">Login <i id = 'signupspinner' class="fa fa-spinner fa-spin" style="display: none;"></i></button></center>


          <!-- <center><a  href="<?php echo base_url('index.php/welcome/forgot_password') ?>">Forgot Password</a></center> -->

        </form>
        </div>
      </div>
    </div>


  
</div>
</body>
<script type="text/javascript">

function goBack() {
  window.history.back();
}


  
$(document).ready(function(){
    $('#login').on('submit',function(e){
         e.preventDefault();
         //alert('check1');
         
       $("#signupspinner").show();
         

        
          $.ajax({
                url:"<?php echo base_url('index.php/Login/auth');?>",
                method:'POST',
                data:new FormData(this),
                contentType: false,
                cache: false,
                processData:false,
                success:function(data){
                  
                  
                  //alert(data);

                  if(data == "Incorrect User Id or Password"){
                    $("#incorrect").show();
                   $("#signupspinner").hide();
                    //window.location.reload();
                  }else{
                    window.location = "<?php echo base_url('index.php/login/switching')?>";
                    //window.location.reload();
                  }


                            
                  
                }
          });
         // }
    });
        
});


</script>

</html>