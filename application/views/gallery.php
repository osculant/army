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
 
 <link href="https://fonts.googleapis.com/css2?family=Rubik+Moonrocks&display=swap" rel="stylesheet">
       <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
      <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"/>
      <link href="https://fonts.googleapis.com/css2?family=Dancing+Script:wght@600&display=swap&family=Pacifico&display=swap" rel="stylesheet">
      <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
       <link rel="stylesheet" href="https://rawgit.com/LeshikJanz/libraries/master/Bootstrap/baguetteBox.min.css">
      <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
      <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
      <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.3/Chart.min.js"></script>
      <script src="https://canvasjs.com/assets/script/jquery-1.11.1.min.js"></script>
      <script src="https://canvasjs.com/assets/script/jquery.canvasjs.min.js"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/waypoints/4.0.1/jquery.waypoints.js" integrity="sha512-ZKNVEa7gi0Dz4Rq9jXcySgcPiK+5f01CqW+ZoKLLKr9VMXuCsw3RjWiv8ZpIOa0hxO79np7Ec8DDWALM0bDOaQ==" crossorigin="anonymous"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/baguettebox.js/1.8.1/baguetteBox.min.js"></script>

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
    left: -23px;
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
  /*content: ' ';*/
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

.sub_item_card{
      border-bottom-left-radius: 136px;
    border-bottom-right-radius: 136px;
    margin-top: 20px;
    min-height: 256px;
    max-height: 256px;
    position: absolute;
    bottom: 0;
    overflow: auto;
    width: 14rem;

}

 .navigation1{
         margin-left: 32px;
         font-size: 0.5rem;
         color: white;
        }



.container.gallery-container {
    background-color: ;
    color: #35373a;
    min-height: 100vh;
    padding: 30px 50px;
}

.gallery-container h1 {
    text-align: center;
    margin-top: 50px;
    font-family: 'Droid Sans', sans-serif;
    font-weight: bold;
}

.gallery-container p.page-description {
    text-align: center;
    margin: 25px auto;
    font-size: 18px;
    color: #999;
}

.tz-gallery {
    padding: 40px;
}

@media(max-width: 768px){
    .tz-gallery{
            padding: 18px;
    }
}

/* Override bootstrap column paddings */
.tz-gallery .row > div {
    padding: 2px;
}

.tz-gallery .lightbox img {
    width: 100%;
    border-radius: 0;
    position: relative;
}

.tz-gallery .lightbox:before {
    position: absolute;
    top: 50%;
    left: 50%;
    margin-top: -13px;
    margin-left: -13px;
    opacity: 0;
    color: ;
    font-size: 26px;
    
    content: '';
    pointer-events: none;
    z-index: 9000;
    transition: 0.4s;
}


.tz-gallery .lightbox:after {
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    opacity: 0;
    background-color: rgba(46, 132, 206, 0.7);
    content: '';
    transition: 0.4s;
}

.tz-gallery .lightbox:hover:after,
.tz-gallery .lightbox:hover:before {
    opacity: 1;
}

.baguetteBox-button {
    background-color: transparent !important;
}

@media(max-width: 768px) {
    body {
        padding: 0;
    }
}


@media only screen and (max-width: 500px) {
  button{
    display: block;
  }

  .baguetteBox-button{
    display: block;
  }

  #baguetteBox-overlay .full-image img {
    max-height: 62%; 
    max-width: 77%;
  }

  .col-sm-6{
    margin-bottom:10px;
  }
}



.image_ga{
    height: 18rem;
    box-shadow: 0 4px 8px 0 rgb(0 0 0 / 20%), 0 6px 20px 0 rgb(0 0 0 / 19%);
    margin: 2px;
}

@media(max-width: 768px){
    .image_ga{
    height: 10rem;
    box-shadow: 0 4px 8px 0 rgb(0 0 0 / 20%), 0 6px 20px 0 rgb(0 0 0 / 19%);
    margin: 0px;
}

.container.gallery-container{
  padding: 0px 16px !important;
   
}

}

#baguetteBox-overlay .full-image {
   
    background: black !important;
    opacity: 0.8 !important;
}

      </style>
</head>
<body style="background-color:black">
<!-- <body style="background-image: url('<?php echo base_url('assets/bg.jpg') ?>');">   -->

<div class="lds-ripple" id="loader" style="background-color:black"><div></div><div></div></div>

<div id="main_id" style="display: none;">

    <div class="demo-wrap">
      <div class="demo-content">
        <div class="container">
         

           <div class="main-wrapper">
          <div class="navbar two-action no-hairline" style="background-color: black;">
            <div class="navbar-inner d-flex align-items-center">
               
               <div class="sliding custom-title" style="text-align: left;margin-top: 2px;">
                   


                <h5 style="color: #9FE0CE;margin-top: 28px;margin-left: 0px;text-align: left;font-family: 'Rubik Moonrocks', cursive;">DHRUVA ECO-FRIENDLY</h5>
                <p><span class="arc" style="color:#9FE0CE;text-align:left;font-family: 'Rubik Moonrocks', cursive;">  WASTE DISPOSAL SYSTEM</span></p>
             

               </div>
               <div class="right d-flex">
                  
                  <p><i onclick="openNav()" class="fa fa-bars" style="color:gray;margin-top: 16px;margin-left: 77px;font-size: 1.5rem;"></i></p>
               
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

    
  <?php include "common/sidebar.php" ?>

  </div>
   
  </div>


</div>
<!-- overlay end -->


         <div class="navigation1">

            <p><a href="<?php echo base_url(); ?>" style="text-decoration: none;color: white;">HOME </a> / GALLERY</p>
      
         </div>

          <div class="container  gallery-container" >
            


            <!--  <h1 style="font-family: 'Dancing Script', cursive; "> Our Gallery</h1>
    <center><hr style="width: 10rem;border: 1px solid;"></center> -->
   <div class="row d-flex justify-content-center" style="margin-top:20px">
       
       <button onclick="show_image()" class="btn btn-light btn-outline-success" style="margin:10px">PHOTOS</button>

        <button onclick="show_video()" class="btn btn-light btn-outline-success" style="margin:10px">VIDEOS</button>
   </div>


   <div id="photo" >
     
                <div class="tz-gallery">

                    <div class="row">

                        <?php $gallery = gallery(); ?>

                        <?php foreach($gallery as $key){ 

                            if($key['type'] == "image"){
                            ?>

                        <div class="col-6 col-md-4">
                            <a class="lightbox" href="<?php echo $key['file']; ?>">
                                <img class="image_ga" src="<?php echo $key['file']; ?>" alt="Bridge">
                            </a>
                        </div>

                    <?php } } ?>
                        
                       

                    </div>

                </div>

    </div>


    <div id="video" style="display:none">
        
        <div class="row" style="margin-top:20px">
            
            

                        <?php foreach($gallery as $key){ 

                            if($key['type'] == "video"){
                            ?>


            <div class="col-md-4 col-12" >
              <iframe style="width: inherit;margin: 5px" src="<?php echo $key['file'] ?>" title="YouTube video player"  allow="accelerometer;  clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>

            </div>

        <?php } } ?>

        </div>

    </div>

          


          
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


baguetteBox.run('.tz-gallery');



function show_image(){
    $('#photo').show();
     $('#video').hide();
}

function show_video(){
    $('#video').show();
     $('#photo').hide();
}


</script>

</html>