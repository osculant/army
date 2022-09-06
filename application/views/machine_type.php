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

<!-- <link href="https://fonts.googleapis.com/css2?family=Combo&display=swap" rel="stylesheet"> -->

<link href="https://fonts.googleapis.com/css2?family=Combo&family=Volkhov&display=swap" rel="stylesheet">
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



      /*------------overlay for header--------------*/

      .circle{
        width: 16rem;
    height: 16rem;
    background: #77D6B4;
    position: absolute;
    right: -48px;
    border-radius: 50%;
    top: -39px;
      }


       .circle2{
          width: 11rem;
    height: 11rem;
    background: #64ab92;
    position: absolute;
    right: -23px;
    border-radius: 50%;
    bottom: -63px;
      }
      .overlay {
            opacity: 0.97;
          height: 100%;
          width: 0;
          position: fixed;
          z-index: 100;
          top: 0;
          left: 0;
          background-color: black;
          
          overflow-x: hidden;
          transition: 0.5s;
           box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
              /* border-top: 6px solid brown;*/
        }

        .overlay-content {
             position: relative;
            top: 22%;
            width: 100%;
            text-align: center;
        }


        .overlay a {
            padding: 8px;
            text-decoration: none;
            font-size: 18px;
            color: white;
            display: block;
            transition: 0.3s;
            /*border: 1px solid white;*/
            margin: 10px;
            /*border-radius: 6px;*/
            text-transform: uppercase;
            font-weight: 200;
            box-shadow: 0 0 0px 0 rgb(0 0 0 / 10%), 0 0px 8px 0 rgb(0 0 0 / 19%);
            margin-top: 4px;
            text-align: initial;
            
            
        }



        .overlay a:hover, .overlay a:focus {
          color: #f1f1f1;
        }

        .overlay .closebtn {
          position: absolute;
            top: 21px;
            font-size: 20px;
            right: 14px;
        }

      /*------------overlay for header end-----------*/


        
        .demo-wrap {
  position: relative;
  height: 100vh;
}

.demo-wrap:before {
  content: ' ';
  display: block;
  position: absolute;
  /*left: 15%;*/
  /*top: 7%;*/
  width: 100%;
  height: 100%;
  opacity: 0.9;
  /*background-image: url('<?php echo base_url('assets/bg.jpg') ?>');*/
  background-repeat: no-repeat;
  background-position: 50% 0;
  background-size: cover;
     /*border-top-left-radius: 71px; */
         /*background-color: #069a6d;*/
         /*background: linear-gradient(to bottom, #1fcb42 0%, #e8f3d8 100%);*/
         background-color: black;
}

/*.demo-content {
  position: relative;
}*/


.rr{
  font-size: 1.8rem;
  font-weight: bold;
  color: green;
    /*text-shadow: 2px 0px 2px black;*/
    font-family: 'Poppins', sans-serif;
}

.continuebtn{
      background-color: white;
    margin-top: 8px;
    border-radius: 37px;
    font-size: 1.5rem;
    margin-top: 45px;
    position: absolute;
    bottom: 188px;
    height: 4rem;
    padding-top: 10px;
    width: 15rem;
    left: 21%;
        right: 50%;
}

.blank_space{
      position: absolute;
    bottom: 0px;
    width: 7rem;
    height: 195px;
    background-color: white;
}

.arc{
  color: white;
  font-weight: bold;
}



@media only screen and (min-width:200px) and (max-width: 400px){
  .logoimage{
    width: 30%;
    /*margin-top: 36%;*/
  }
}

@media only screen and (min-width: 400px) and  (max-width: 768px)  {
  .logoimage{
    width: 30%;
    /*margin-top: 60%;*/
  }
}

.d-block{
  height: 18rem !important;
}


    .lds-ripple {
    display: inline-block;
    position: absolute;
    width: 80px;
    height: 80px;
    top: 50%;
    left: 50%;
    transform: translate(-50%, -50%);
    z-index: 9999;
    background: black;
}
.lds-ripple div {
  position: absolute;
  border: 4px solid teal;
  opacity: 1;
  border-radius: 50%;
  animation: lds-ripple 1s cubic-bezier(0, 0.2, 0.8, 1) infinite;
}
.lds-ripple div:nth-child(2) {
  animation-delay: -0.5s;
}
@keyframes lds-ripple {
  0% {
    top: 36px;
    left: 36px;
    width: 0;
    height: 0;
    opacity: 0;
  }
  4.9% {
    top: 36px;
    left: 36px;
    width: 0;
    height: 0;
    opacity: 0;
  }
  5% {
    top: 36px;
    left: 36px;
    width: 0;
    height: 0;
    opacity: 1;
  }
  100% {
    top: 0px;
    left: 0px;
    width: 72px;
    height: 72px;
    opacity: 0;
  }
}


.card_image{
  border-radius: 50%;
  width: 13rem;
  height: 13rem;
  margin-top: 6%;
  /*box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);*/
}


      </style>
</head>
<body style="height:100vh;overflow:hidden;background-color:black">
<!-- <body style="background-image: url('<?php echo base_url('assets/bg.jpg') ?>');">   -->

<div class="lds-ripple" id="loader" style="background-color:black"><div></div><div></div></div>

<div id="main_id" style="display: none;">

    <div class="demo-wrap">
      <div class="demo-content">
        <div class="container">
          <!-- <div class="row" style="margin-top: 0px;">
              <div class="col-md-12" style="margin-top:0px">

              <center>
                <h4 style="color: #9FE0CE;font-weight: bold;margin-top: 28px;margin-left: 21px;">DHRUVA ECO-FRIENDLY</h4>
                <p><span class="arc" style="color:#9FE0CE">  WASTE DISPOSAL SYSTEM</span></p>
              </center>
            </div> 
           
          </div> -->

           <div class="main-wrapper">
          <div class="navbar two-action no-hairline" style="background-color: black;">
            <div class="navbar-inner d-flex align-items-center">
               
               <div class="sliding custom-title" style="text-align: left;margin-top: 2px;">
                   


                <h4 style="color: #9FE0CE;font-weight: bold;margin-top: 28px;margin-left: 0px;text-align: left;">DHRUVA ECO-FRIENDLY</h4>
                <p><span class="arc" style="color:#9FE0CE;text-align:left;">  WASTE DISPOSAL SYSTEM</span></p>
             

               </div>
               <div class="right d-flex">
                  
                  <p><i onclick="openNav()" class="fa fa-bars" style="color:gray;margin-top: 16px;margin-left: 49px;font-size: 1.5rem;"></i></p>
               
               </div>
            </div>
         </div>
      </div>


      <!-- header overlay -->

<div id="myNav" class="overlay">
    <div class="circle"></div>
    <div class="circle2"></div>
  <button class="btn btn-link closebtn" style="background-color: transparent;" onclick="closeNav()"><i class="fa fa-close"></i></button>
  <div class="overlay-content">
  <!-- <hr style="margin-top: 0rem;"> -->

    
    <a href="<?php echo base_url('index.php') ?>">Home</a>
    <a href="<?php echo base_url('index.php/contact_us') ?>">Contact US</a>
    <a href="<?php echo base_url('index.php/about_us') ?>">About Us</a>
    <!-- <a href="https://www.tripleodiagnostics.com">Visit Our Website</a> -->

    <!-- <a href="<?php echo base_url('index.php/login/logout') ?>">Logout</a> -->
    
    
  </div>
   
  </div>


</div>
<!-- overlay end -->

          <div class="container"  style="display:-webkit-inline-box;overflow-x: scroll;margin-top: 50px;">
            

            <?php foreach($machine_type as $key){ ?>
                
                
                <div class="card" style="height:28rem;width:14rem;margin: 0 12px;background: #8AD08C;border-radius: 136px ;">
                        <a href="<?php echo base_url('index.php/welcome/main?id='.$key['id'].'') ?>">
                    
                  <center>
                    <div class="image">
                      <img class="card_image" src="<?php echo base_url('assets/'.$key['image'].'') ?>" >
                    </div>
                  </center>


                  <center><p style="margin-top: 35px;margin-left:0px;color: yellow;">*****</p></center>
                   <p style="text-align: left;color:white;text-transform: uppercase;font-size: 1.2rem;font-weight: bold;font-family: 'Volkhov', serif;margin-left:10px"> <?php echo $key['name'] ?></p>
                  
                </a>
                </div>

            <?php } ?>


          
          </div>

               
                      
         
        </div>
      </div>
    </div>



</body>
<script type="text/javascript">

   function openNav() {
  document.getElementById("myNav").style.width = "100%";
  

}

function closeNav() {
  document.getElementById("myNav").style.width = "0%";

}

window.onload = function(){  
    
    setTimeout(function(){ $('#loader').hide();  $('#main_id').show();   }, 2000);

}  
</script>

</html>