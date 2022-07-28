<!DOCTYPE html>
<html lang="en">
<head>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">  
  <title>ORASCAN</title>

      <style>
         
         <?php include 'common/css/welcome_message.css'; ?>
        


         @media(max-width: 768px){

          

        


      }

      .wrapper{
        height: 200px;
        width: 200px;
        border: 5px solid white;
        border-radius: 50%;
        background: url('<?php echo base_url('assets/images/upload.png') ?>');
        background-size: 100% 86%;
        margin: 60px auto;
        overflow: hidden;
        position: relative;
      }

      .my_file{
        position: absolute;
        bottom: 0;
        outline: none;
        color: transparent;
        width: 100%;
        box-sizing: border-box;
        padding: 2px 81px; 
        cursor: pointer;
        transition: 0.5s;
        background:rgb(0 0 0 / 29%);
        opacity: 1;
      }
      .my_file::-webkit-file-upload-button{
       visibility: hidden;
        
      }

      .my_file::before{
        content: '\f030';
        font-family: fontAwesome;
        font-size: 19px;
        color: white;
        display: inline-block;
        -webkit-user-select: none;
        position: absolute;
        left: 86px;
      }

      .my_file::after{
        content: 'Upload';
        font-family: 'arial';
        font-weight: bold;
        color: white;
        display: block;
        top: 70px;
        font-size: 9px;
      }

      .my_file:hover{
        opacity: 2;
      }




      /*------------overlay for header--------------*/
      .overlay {
          height: 100%;
          width: 0;
          position: fixed;
          z-index: 100;
          top: 0;
          left: 0;
          background-color: aliceblue;
          
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
            color: black;
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



      .lds-ripple {
      display: inline-block;
    /* position: relative; */
    width: 80px;
    height: 80px;
    position: absolute;
    top: 50%;
    left: 50%;
    margin-right: -50%;
    transform: translate(-50%, -50%);
}
.lds-ripple div {
  position: absolute;
  border: 4px solid #fff;
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



.captur_box{
      width: inherit;
    background-color: #f3f3f3;
    height: 3rem;
    position: absolute;
    bottom: 0px;
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

<div class="lds-ripple" id="loader" style="display:none"><div></div><div></div></div>



<div class="main" id="main12" >

  <?php include 'common/header.php'; ?>

</div>

<div class="main" id="main10" >


<div class="container">

  <div class="row d-flex justify-content-center">
    <!-- <p style="text-align:justify;margin: 10px;">Orascan is an oragnization who will help you out to find your mouth disease.<br>To procced upload you disese Image.</p> -->
  </div>
    
  <div class="row d-flex justify-content-center" style="margin-top: 0px">
    <div class="wrapper" style="position: relative;">
      <form id="submit_image">

        <input type="file" name="file" class="my_file" id="image_id007" style="display:none"  onchange="upload_image()">



        <img id="display_here" style="width: 12rem;position: absolute;top: 32px;" >
        
        <button type="submit" style="display:none" id="click_to_submit"></button>
      </form>

      <div class="captur_box" id="box_cp" onclick="capture_func()">
        
        <p style="text-align:center;margin-top: 10px;"><i class="fa fa-camera" aria-hidden="true" style="color: gray;font-size: 1.3rem;"></i></p>

      </div>
    </div>
  </div>

  <div class="row d-flex justify-content-center"  >

    <center><i class="fa fa-spinner fa-spin" style="display:none" id="spinner"></i></center>

    <center><h4 style="display:none;color:gray" id="abcde" >You Will Get Result in<br> <span id="countdown"></span></h4></center>

    <center><h5 style="display:none" id="after_result">Recommended Diseases Are:</h5></center>


  </div>

  <div id="result_here">
  
  </div>




</div>



<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal" style="display: none;" id="modal_btn">
  Launch demo modal
</button>


<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" data-backdrop="static" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Terms And Conditions</h5>
        <!-- <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button> -->
      </div>
      <div class="modal-body">


        <div id="carouselContent" class="carousel slide" data-ride="carousel">
    <div class="carousel-inner" role="listbox">
        <div class="carousel-item active">
              <p> The medical information on this application
                  is provided as an information resource only,
                  and is not to be used on for any diagnostics
                  or treatment purpose. This information
                  does not create any patient-physician
                  relationship and should not be used as a
                  substitute for professional diagnosis and
                  treatment. Please consult your health care
                  provider before making any health care
                  decision or for guidance about a specific
                  medical condition. ORASCAN 2.0 expressly
                  disclaims responsibility,and shall have
                  no liability for any damages,loss,injury or
                  liability whatsoever suffered as a result of
                  your reliance on the information contained
                  in this site. if you do not agree to the
                  foregoing terms and conditions ,you should
                  not enter this site.So click away or upload an
                  image...its FREE!!!!</p>
        </div>
        <div class="carousel-item">
            <p>ORASCAN 2.0 App has been designed
              keeping in mind patients having diseases
              of the soft tissue of the mouth.Early
              diagnosis of an oral disease may save
              your life.</p>

             <ul style="text-transform:uppercase;">   
              <li>Click on Camera</li>
              <li>After reading disclaimer click "Accept" if u agree otherwise "cancel"</li>
              <li>Select image from gallery or capture with camera to upload to server.</li>
              <li>A CLEAR,COMPLETE FRONT IMAGE OF THE LESION OR DISEASED AREA REQUIRED TO BE UPLOADED ON THIS APP FOR OPTIMUM RESULTS</li>
              <li>Wait for Result.</li>
            </ul>
        </div>
    </div>
    <a class="carousel-control-prev" href="#carouselContent" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#carouselContent" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
    </a>
</div>
     
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" style="display:none" id="close_btn" data-dismiss="modal">Close</button>
        <a href="<?php echo base_url('index.php/login/logout') ?>" class="btn btn-secondary" >Cancel</a>
        <button type="button" class="btn btn-primary" onclick="accept_terms()">ACCEPT</button>
      </div>
    </div>
  </div>
</div>









<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal_other" style="display: none;" id="modal_btn1010">
  Launch demo modal
</button>


<!-- Modal -->
<div class="modal fade" id="exampleModal_other" tabindex="-1" data-backdrop="static" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Terms And Conditions</h5>
        <!-- <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button> -->
      </div>
      <div class="modal-body">


        <div id="carouselContent" class="carousel slide" data-ride="carousel">
    <div class="carousel-inner" role="listbox">
        <div class="carousel-item active">
              <p> The medical information on this application
                  is provided as an information resource only,
                  and is not to be used on for any diagnostics
                  or treatment purpose. This information
                  does not create any patient-physician
                  relationship and should not be used as a
                  substitute for professional diagnosis and
                  treatment. Please consult your health care
                  provider before making any health care
                  decision or for guidance about a specific
                  medical condition. ORASCAN 2.0 expressly
                  disclaims responsibility,and shall have
                  no liability for any damages,loss,injury or
                  liability whatsoever suffered as a result of
                  your reliance on the information contained
                  in this site. if you do not agree to the
                  foregoing terms and conditions ,you should
                  not enter this site.So click away or upload an
                  image...its FREE!!!!</p>
        </div>
        <div class="carousel-item">
            <p>ORASCAN 2.0 App has been designed
keeping in mind patients having diseases
of the soft tissue of the mouth.Early
diagnosis of an oral disease may save
your life.</p>

            <ul style="text-transform:uppercase;">   
              <li>Click on Camera</li>
              <li>After reading disclaimer click "Accept" if u agree otherwise "cancel"</li>
              <li>Select image from gallery or capture with camera to upload to server.</li>
              <li>A CLEAR,COMPLETE FRONT IMAGE OF THE LESION OR DISEASED AREA REQUIRED TO BE UPLOADED ON THIS APP FOR OPTIMUM RESULTS</li>
              <li>Wait for Result.</li>
            </ul>
        </div>
    </div>
    <a class="carousel-control-prev" href="#carouselContent" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#carouselContent" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
    </a>
</div>
     
      </div>
      <div class="modal-footer">
        <!-- <button type="button" class="btn btn-secondary" style="display:none" id="close_btn" data-dismiss="modal">Close</button> -->
        <!-- <a href="<?php echo base_url('index.php/login/logout') ?>" class="btn btn-secondary" >Cancel</a> -->
        <button type="button" class="btn btn-primary" data-dismiss="modal" onclick="upload_image_open()" >ACCEPT</button>
      </div>
    </div>
  </div>
</div>



<?php include "common/footer.php" ?>


</div> <!-- main-->

</body>
<script type="text/javascript">

window.onload = (event) => {
  

var user_id = "<?php echo $this->session->userdata('id') ?>";

$.ajax({
     url:"<?php echo base_url('index.php/user/check_terms');?>",
     method:'POST',
     data:"id="+user_id,
     success:function(data){

        if(data == "no"){
          $('#modal_btn').click();
        }else{

        }

     }

});




};


function show_modal() {
  $('#modal_btn1010').click();
}


function upload_image(){

  $('#click_to_submit').click();
}


function upload_image_open(){

  $('#image_id007').click();
}



$(document).ready(function(){
    $('#submit_image').on('submit',function(e){
         e.preventDefault();
         //alert('check1');
         
         $('#main12').hide();
       $('#main10').hide();  
       $("#loader").show();
         

        
          $.ajax({
                url:"<?php echo base_url('index.php/user/upload_image');?>",
                method:'POST',
                data:new FormData(this),
                contentType: false,
                cache: false,
                processData:false,
                success:function(data){
                  
                  var obj = JSON.parse(data);

                  if(obj.status == 'uploaded'){

                    $("#loader").hide();


                    $('#main12').show();
                    $('#main10').show();  

                    $('#abcde').show();


                    $('#display_here').attr('src', obj.image);

                    $('#image_id007').hide();

                    $('#box_cp').hide();

                    var time = obj.end_time;
                    var countDownDate = new Date(time).getTime();

                    // Update the count down every 1 second
                    var x = setInterval(function() {

                    // Get today's date and time
                    var now = new Date().getTime();
                      
                    // Find the distance between now and the count down date
                    var distance = countDownDate - now;
                      
                    // Time calculations for days, hours, minutes and seconds
                    var days = Math.floor(distance / (1000 * 60 * 60 * 24));
                    var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
                    var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
                    var seconds = Math.floor((distance % (1000 * 60)) / 1000);
                      
                    // Output the result in an element with id="demo"
                    document.getElementById("countdown").innerHTML =  minutes + "m " + seconds + "s ";
                      
                    // If the count down is over, write some text 


                      if (distance < 0) {
                        clearInterval(x);
                        document.getElementById("countdown").innerHTML = "..";

                               
                                        
                                          // window.location.reload();

                                          var result_id = obj.id;

                                          $.ajax({
                                            url:"<?php echo base_url('index.php/user/get_my_result');?>",
                                            method:'POST',
                                            data:"id="+result_id,
                                            success:function(data){

                                            var obj = JSON.parse(data);

                                            $('#abcde').hide();
                                            $('#countdown').hide();


                                            $('#after_result').show();


                                            $(obj).each(function(x,y){
                                                  
                                                  var percentage = y.percentage;
                                                  var disease = y.disease;


                                                $('#result_here').append(`<div class="row" style="margin-left:0px; margin-right:0px">
                                                                              <div class="col-12" style="text-align:center;">`+disease+`</div>
                                                                              </div>`);
                                            });
                                            

                                            $('#result_here').append(`<div class="row" style="margin-top:30px">
                                                                      <div class="col-md-12">
                                                                      <center><a href="http://www.tripleodiagnostics.com/">Click Here</a></center>
                                                                      <center>For further help click Here👆🏽👆🏽</center>
                                                                      </div>
                                                                      </div>`);

                                            }

                                          });

                      }
                      }, 1000);




                  }
                  

                            
                  
                }
          });
         // }
    });
        
});


function accept_terms() {

  $.ajax({
     url:"<?php echo base_url('index.php/user/accept_terms');?>",
     method:'POST',
     
     success:function(data){

        $('#close_btn').click();

     }

});
  
}


function capture_func(){
   $('#modal_btn1010').click();
}

</script>

</html>