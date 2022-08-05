<!DOCTYPE html>
<!-- saved from url=(0044)https://inspirestory.co.in/amazing-fact/home -->
<html lang="en"><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
      
      <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, minimum-scale=1, minimal-ui, viewport-fit=cover">
      <meta name="apple-mobile-web-app-capable" content="yes">
      <meta name="apple-mobile-web-app-status-bar-style" content="#3a57c4">
      <title>DEWS</title>
      <!-- <link rel="shortcut icon" type="image/x-icon" href="https://inspirestory.co.in/amazing-fact/assets/img/favicon.png"> -->
      <link rel="stylesheet" href="<?php echo base_url('assets/attachment') ?>/bootstrap.min.css">
      <link rel="stylesheet" href="<?php echo base_url('assets/attachment') ?>/fontawesome.min.css">
      <link rel="stylesheet" href="<?php echo base_url('assets/attachment') ?>/all.min.css">
      <link rel="stylesheet" href="<?php echo base_url('assets/attachment') ?>/swiper.min.css">
      <link rel="stylesheet" href="<?php echo base_url('assets/attachment') ?>/circle.css">
      <link rel="stylesheet" href="<?php echo base_url('assets/attachment') ?>/style.css">
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

       <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"/>


      <link rel="stylesheet" type="text/css" href="<?php echo base_url('asets/loader/') ?>normalize.css">
      <link rel="stylesheet" type="text/css" href="<?php echo base_url('asets/loader/') ?>demo.css">
      <link rel="stylesheet" type="text/css" href="<?php echo base_url('asets/loader/') ?>component.css">
      <script type="text/javascript" async="" src="<?php echo base_url('asets/loader/') ?>ga.js.download"></script>
      <script src="<?php echo base_url('asets/loader/') ?>snap.svg-min.js.download"></script>
<style type="text/css">
   


      /*------------overlay for header--------------*/
      .overlay {
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
            top: 9%;
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
            border: 1px solid white;
            margin: 10px;
            border-radius: 6px;
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
            left: 14px;
        }

      /*------------overlay for header end-----------*/


</style>
      
   </head>
   <body >
      <div class="main-wrapper">
          <div class="navbar two-action no-hairline" style="background-color: black;">
            <div class="navbar-inner d-flex align-items-center">
                <div class="left d-flex">
                  <p><i onclick="openNav()" class="fa fa-bars" style="color:gray;    margin-top: 16px;
    font-size: 1.5rem;"></i></p>
               </div>
               <div class="sliding custom-title" style="text-align: center;margin-top: 2px;">Machine's</div>
             
            </div>
         </div>
      </div>


      <!-- header overlay -->

<div id="myNav" class="overlay">
  <button class="btn btn-link closebtn" style="background-color: transparent;" onclick="closeNav()"><i class="fa fa-arrow-left"></i></button>
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


      <div class="page-content" style="height:100vh">
         <div class="social-media-col pages-list-col">
            <div class="container">
               <div class="list">
                  <ul>
                      
                  
                  <?php foreach($machine_type as $key){ ?>



                    <li style="width:100%;margin:5px" class="animate__animated animate__lightSpeedInLeft">
                        
                        <a href="<?php echo base_url('index.php/welcome/main?id='.$key['id'].'') ?>">
                        <div class="card" style="font-size: 1.1rem;font-weight: 700;padding: 27px;height: 10rem;text-align: center;border-radius: 13px;background-color: teal;color: white;">
                           <p style="margin-top:25px;font-size: 1.4rem;"> <?php echo $key['name'] ?></p>
                        </div>
                        </a>
                       
                     </li>

                     <?php } ?>
                                          <li>
                      
                              
                                       </ul>
               </div>
            </div>
         </div>
      </div>
       <!-- <div class="footer-cont">
         <ul class="ul-footers">
            <li><a href="notifications.html" class="icon-only" style="cursor: pointer;"><i class="fa fa-share-alt" aria-hidden="true"></i></a></li>
            <li><a onclick="myFunction()" href="#" class="link icon-only darsjht"><i class="fa fa-adjust" aria-hidden="true"></i></a></li>
            <li><a class="link icon-only darsjht"><i class="fa fa-share"></i></a></li>
         </ul>
          </div> -->
                   
       
       <script src="<?php echo base_url('assets/attachment') ?>/jquery-3.5.1.min.js.download"></script>
       <script src="<?php echo base_url('assets/attachment') ?>/popper.min.js.download"></script>
       <script src="<?php echo base_url('assets/attachment') ?>/bootstrap.min.js.download"></script>
       <script src="<?php echo base_url('assets/attachment') ?>/swiper.min.js.download"></script>
       <script src="<?php echo base_url('assets/attachment') ?>/script.js.download"></script>

       <script src="<?php echo base_url('assets/loader/') ?>classie.js.download"></script>
       <script src="<?php echo base_url('assets/loader/') ?>svgLoader.js.download"></script>
       <script>
         
function myFunction() {
   var element = document.body;
   element.classList.toggle("dark-mode");
}
</script>
       

       <script type="text/javascript">
  

    function openNav() {
  document.getElementById("myNav").style.width = "74%";
  

}

function closeNav() {
  document.getElementById("myNav").style.width = "0%";

}

</script>

<script type="text/javascript">
   


   (function() {
            var pageWrap = document.getElementById( 'pagewrap' ),
               pages = [].slice.call( pageWrap.querySelectorAll( 'div.container' ) ),
               currentPage = 0,
               triggerLoading = [].slice.call( pageWrap.querySelectorAll( 'a.pageload-link' ) ),
               loader = new SVGLoader( document.getElementById( 'loader' ), { speedIn : 300, easingIn : mina.easeinout } );

            function init() {
               triggerLoading.forEach( function( trigger ) {
                  trigger.addEventListener( 'click', function( ev ) {
                     ev.preventDefault();
                     loader.show();
                     // after some time hide loader
                     setTimeout( function() {
                        loader.hide();

                        classie.removeClass( pages[ currentPage ], 'show' );
                        // update..
                        currentPage = currentPage ? 0 : 1;
                        classie.addClass( pages[ currentPage ], 'show' );

                     }, 2000 );
                  } );
               } );  
            }

            init();
         })();


</script>
   
</body></html>