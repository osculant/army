<!DOCTYPE html>
<html lang="en">
<head>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">  
  <title>DEWS</title>

      <style>
         
         @media(max-height: 1024px){

      body{
        height: 100vh;
      }

    }
         
        

        @media(max-height: 700px){
          body{
            height: 130vh;
          }
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
      <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;300;500&display=swap" rel="stylesheet">

      <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;300;500&display=swap" rel="stylesheet">
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

      <style type="text/css">
        
        .demo-wrap {
  position: relative;
  height: 100vh;
}

.demo-wrap:before {
  content: ' ';
  display: block;
  position: absolute;
  left: 0;
  top: 0;
  width: 100%;
  height: 100%;
  opacity: 0.6;
  background-image: url('<?php echo base_url('assets/bg.jpg') ?>');
  background-repeat: no-repeat;
  background-position: 50% 0;
  background-size: cover;
}

.demo-content {
  position: relative;
}


.rr{
  font-size: 1.8rem;
  font-weight: bold;
  color: green;
    /*text-shadow: 2px 0px 2px black;*/
    font-family: 'Poppins', sans-serif;
}

      </style>
</head>
<body style="height:100vh;overflow:hidden">
<!-- <body style="background-image: url('<?php echo base_url('assets/bg.jpg') ?>');">   -->


    <div class="demo-wrap">
      <div class="demo-content">
        <div class="container">
          <div class="row" style="margin-top: 0px;">
            <div class="col-md-12" style="margin-top:19px">
              <center><img src="<?php echo base_url('assets/logo.png') ?>" style="width: 30%;"></center>
            </div>
            <div class="col-12" style="margin-bottom:-104px;margin-top: 33px;" >
                <img src="<?php echo base_url('assets/logoimg.png') ?>" style="width: inherit;">
                <p style="font-size:1.1rem;text-align: center;color: crimson;font-weight: bold;margin-top: -14px;margin-bottom: 23px;"><span id="arc">  WASTE DISPOSAL SYSTEM</p>
            </div>
          </div>
          <div class="row" style="margin-top:50px">
              <div class="col-md-12">
                  <center>   
                    <img src="<?php echo base_url('assets/middellogo.png') ?>" style="width: max-content;;margin-top: 25px;">
                  </center>
                  <center>
                      <a class="btn btn-light " href="<?php echo base_url('index.php/welcome/content2') ?>" style="background-color: #1ebb28;margin-top: 8px;    border-radius: 23px;font-size: 1.5rem;margin-top: 45px;">Continue <i class="fa fa-arrow-circle-right"></i></a>
                  </center>
              </div>
          </div>
        </div>
      </div>
    </div>


</body>
<script type="text/javascript">


</script>

</html>