<!DOCTYPE html>
<html lang="en">
<head>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Orascan</title>

      <style>
         
         <?php include 'common/header/header.css'; ?>
         <?php include 'common/footer/footer.css'; ?>
        

         .bannerclass{
          background-image: url('<?php echo base_url('assets/images/cover.jpg') ?>');min-height: 38rem;
    background-size: cover;
      background-position: bottom;
         }

         @media(max-width: 768px){
          .bannerclass{
            background-image: url('<?php echo base_url('assets/images/cover.jpg') ?>');
                min-height: 19rem;
    background-size: cover;
    background-position: top;
          }
         }


      .p_image{
          height: 9rem;
         }

         .card_1{
          margin-bottom: 10px;
         }  


         .btn_red_voilet{
          background-color: #013A6B;
          background-image: -webkit-linear-gradient(70deg, #fd0d0d 50%, #770095 50%);

          }

          .btn_green_voilet{
          background-color: #013A6B;
          background-image: -webkit-linear-gradient(70deg, #fd0d0d 50%, green 50%);

          }
      
     .changingarrows{
            border-radius: 50%;
    width: 2rem !important;
    height: 2rem !important;
    padding: 7px;
    background-color: lightgrey;
    font-weight: bold !important;
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
      <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.20/css/jquery.dataTables.css">
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
      <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.js"></script>
      <!--script end-->
</head>
<body style="background: linear-gradient(to bottom, #b7d2f5 0%, #f3d8e1 100%);height: 100vh">


<?php include "common/header.php" ?>

<!------------------header finish-------------------->


  



<div class="container">
  


  <div class="row">
    <div class="col-md-12" style="margin-bottom:5rem">
      <center><h5 style="margin-top:20px">All RESULTS</h5></center>
      <hr style="margin-top: ;border: 1px solid blue;">
      <table class="table table-striped " id="tb" style="overflow-y: auto;">
        <thead>
          <th style="font-weight: 500 !important; font-size: 0.8rem;text-align: center;">Sno.</th>
          <th style="font-weight: 500 !important; font-size: 0.8rem;text-align: center;">Image</th>
          <th style="font-weight: 500 !important; font-size: 0.8rem;text-align: center;">Result</th>
          
        </thead>
        <tbody>
          <?php $i=0; foreach($result as $key){ ?>
          <tr>
              <td style="font-weight: 500 !important; font-size: 0.8rem;text-align: center;"><?php echo ++$i; ?></td>
              <td style="font-weight: 500 !important; font-size: 0.8rem;text-align: center;"><img src="<?php echo $key['image'] ?>" style="width:5rem"></td>
              <td style="font-weight: 500 !important; font-size: 0.8rem;text-align: center;">

                <?php 
                $ex = explode(",", $key['result']);

                $per = array_values(array_filter(explode(" ", $ex[0])));

                $all = array();
                for ($i=0; $i < count($per) ; $i++) {

                  $in_per = preg_replace('/[^a-zA-Z0-9. -]/s', '',$per[$i]) * 100;

                  $arr = array(
                    'percentage'=> round($in_per,2),
                    'disease'=> preg_replace('/[^a-zA-Z0-9_ -]/s', '', $ex[$i+1]),
                  );

                  array_push($all, $arr);
                }

                ?>

                  <?php foreach($all as $dise){ ?>

                    <p><?php echo $dise['disease'] ?> - (<?php echo $dise['percentage'] ?>)</p>

                    <?php } ?>

                </td>
            </tr>
          <?php } ?>
        </tbody>
      </table>
    </div>
  </div>

</div>












<?php include "common/footer.php" ?>


</body>
<script type="text/javascript">
  
    $(document).ready( function () {
    $('#tb').DataTable({
      "pageLength": 10,
      "showNEntries" : false,
       "searching": false,
       "ordering":false,
          "pagingType": "simple",


         language: {
    paginate: {
      next: '<i class="fa fa-fw fa-angle-right changingarrows">',
      previous: '<i class="fa fa-fw fa-angle-left changingarrows">'  
    }
  }
    });
}); 


</script> 

</html>