<!doctype html>
<html lang="en">
 <meta http-equiv="content-type" content="text/html;charset=UTF-8" />
<head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
        <title>Admin Panel</title>
        <meta content="Admin Dashboard" name="description" />
        <meta content="Themesbrand" name="author" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />

    
<style type="text/css">
  
  .heading{
        font-size: 1.5rem;
        font-weight: bold;
        text-transform: uppercase;
        margin-top: 20px;
       }

       @media(max-width: 768px){
        .heading{
          font-weight: bold;
          font-size: 1.1rem;
        }
       }

</style>

<!-- App Icons -->
  <link rel="shortcut icon" href="<?php echo base_url('assets/for_admin/') ?>public/assets/images/favicon.ico">
  <!-- C3 charts css -->
  <link href="<?php echo base_url('assets/for_admin/') ?>public/plugins/c3/c3.min.css" rel="stylesheet" type="text/css" />
  <!-- DataTables -->
  <link href="<?php echo base_url('assets/for_admin/') ?>public/plugins/datatables/dataTables.bootstrap4.min.css" rel="stylesheet" type="text/css" />
  <!-- Responsive datatable examples -->
  <link href="<?php echo base_url('assets/for_admin/') ?>public/plugins/datatables/responsive.bootstrap4.min.css" rel="stylesheet" type="text/css" />
  <!-- App css -->
  <link href="<?php echo base_url('assets/for_admin/') ?>public/assets/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
  <link href="<?php echo base_url('assets/for_admin/') ?>public/assets/css/icons.css" rel="stylesheet" type="text/css" />
  <link href="<?php echo base_url('assets/for_admin/') ?>public/assets/css/style.css" rel="stylesheet" type="text/css" />
</head>
<body class="fixed-left">

        <div id="preloader"><div id="status"><div class="spinner"></div></div></div>
        <!-- Begin page -->
        <div id="wrapper">

<!-- ========== Left Sidebar Start ========== -->
       <?php
            include 'common/sidebar.php';
            ?>
<!-- Left Sidebar End -->

            <!-- Start right Content here -->
            <div class="content-page">
                <!-- Start content -->
                <div class="content">

                    <!-- Top Bar Start -->
                    <?php
                        include 'common/header.php';
                    ?>
                    <!-- Top Bar End -->

                    <!-- ==================
                         PAGE CONTENT START
                         ================== -->

                    <div class="page-content-wrapper">
                      <div class="row">
                          
                        <div class="col-md-12">
                          <center><p class="heading">Add IMAGE/VIDEO in Gallery</p></center>
                        </div>

                        <div class="col-md-6">
                          
                          <form id="add_image">
                            
                            <label>Image</label><br>
                            <input type="file" name="file" required class="form-control">

                            <input type="hidden" name="type" value="image">
                            <br>

                            <button type="submit" class="btn btn-success">ADD <i id = 'spin10' class="fa fa-spinner fa-spin" style="display: none;"></i></button>
                          </form>
                          
                          </div>
                          
                          <div class="col-md-6">
                          <form id="add_video">
                            
                            <label>Video</label><br>
                            <input type="text" name="video_link" required placeholder="Enter Video Link Here" class="form-control">

                            <input type="hidden" name="type" value="video">
                            <br>

                            <button type="submit" class="btn btn-success">ADD <i id = 'spin' class="fa fa-spinner fa-spin" style="display: none;"></i></button>
                          </form>
                        </div>




                        <div class="col-md-12">
                          
                          <hr>
                          <center><h2>Gallery</h2></center>
                          <hr>
                          <table class="table table-bordered">
                            <thead>
                              <th>File</th>
                              <th>Type</th>
                              <th>Action</th>
                            </thead>
                            <tbody>
                              <?php $gallery = gallery(); ?>
                              <?php foreach($gallery as $key){ ?>
                                  <tr>
                                    <td><a href="<?php echo $key['file'] ?>" target="_blank">View</a></td>
                                    <td><?php echo $key['type']; ?></td>

                                      <td>
                                        
                                        <button class="btn btn-danger" data_id="<?php echo $key['id'] ?>" data_table="gallery" onclick="delete_data(this)" ><i class="fa fa-trash"></i></button>


                                      </td>
                                  </tr>
                              <?php } ?>
                            </tbody>
                          </table>


                        </div>


                      </div> <!-- row -->
      
                    </div> <!-- Page content Wrapper -->

                </div> <!-- content -->

               
            </div>
            <!-- End Right content here -->

        </div>
        <!-- END wrapper -->

 

          <script src="<?php echo base_url('assets/for_admin/') ?>public/assets/js/jquery.min.js"></script>
        <script src="<?php echo base_url('assets/for_admin/') ?>public/assets/js/bootstrap.bundle.min.js"></script>
        <script src="<?php echo base_url('assets/for_admin/') ?>public/assets/js/modernizr.min.js"></script>
        <script src="<?php echo base_url('assets/for_admin/') ?>public/assets/js/jquery.slimscroll.js"></script>
        <script src="<?php echo base_url('assets/for_admin/') ?>public/assets/js/waves.js"></script>
        <script src="<?php echo base_url('assets/for_admin/') ?>public/assets/js/jquery.nicescroll.js"></script>
        <script src="<?php echo base_url('assets/for_admin/') ?>public/assets/js/jquery.scrollTo.min.js"></script>

        <!-- Peity chart JS -->
        <script src="<?php echo base_url('assets/for_admin/') ?>public/plugins/peity-chart/jquery.peity.min.js"></script>

        <!--C3 Chart-->
        <script src="<?php echo base_url('assets/for_admin/') ?>public/plugins/d3/d3.min.js"></script>
        <script src="<?php echo base_url('assets/for_admin/') ?>public/plugins/c3/c3.min.js"></script>

        <!-- KNOB JS -->
        <script src="<?php echo base_url('assets/for_admin/') ?>public/plugins/jquery-knob/excanvas.js"></script>
        <script src="<?php echo base_url('assets/for_admin/') ?>public/plugins/jquery-knob/jquery.knob.js"></script>

        <!-- Page specific js -->
        <script src="<?php echo base_url('assets/for_admin/') ?>public/assets/pages/dashboard.js"></script>

        <!-- App js -->
        <script src="<?php echo base_url('assets/for_admin/') ?>public/assets/js/app.js"></script>


         <!-- Datatable js -->
        <script src="<?php echo base_url('assets/for_admin/') ?>public/plugins/datatables/jquery.dataTables.min.js"></script>
        <script src="<?php echo base_url('assets/for_admin/') ?>public/plugins/datatables/dataTables.bootstrap4.min.js"></script>
        <!-- Responsive examples -->
        <script src="<?php echo base_url('assets/for_admin/') ?>public/plugins/datatables/dataTables.responsive.min.js"></script>
        <script src="<?php echo base_url('assets/for_admin/') ?>public/plugins/datatables/responsive.bootstrap4.min.js"></script>


    </body>


     <script type="text/javascript">
    
   $(document).ready(function () {
                $('#tb').DataTable();
            });







   $(document).ready(function(){
    $('#add_video').on('submit',function(e){
         e.preventDefault();
         //alert('check1');
         
       $("#spin").show();
         


    
        
          $.ajax({
                url:"<?php echo base_url('index.php/admin/add_video');?>",
                method:'POST',
                data:new FormData(this),
                contentType: false,
                cache: false,
                processData:false,
                success:function(data){
                  
                  
                if(data == "done"){
                  window.location.reload();
                }else{
                  alert('some error occured try again');
                  $('#spin').hide();
                }

                            
                  
                }
          });
    });
        

});


 $(document).ready(function(){
    $('#add_image').on('submit',function(e){
         e.preventDefault();
         //alert('check1');
         
       $("#spin10").show();
         


    
        
          $.ajax({
                url:"<?php echo base_url('index.php/admin/add_image');?>",
                method:'POST',
                data:new FormData(this),
                contentType: false,
                cache: false,
                processData:false,
                success:function(data){
                  
                  
                if(data == "done"){
                  window.location.reload();
                }else{
                  alert('some error occured try again');
                  $('#spin10').hide();
                }

                            
                  
                }
          });
    });
        

});


function delete_data(val){
  var id = val.getAttribute('data_id');

  var table = val.getAttribute('data_table');

  $.ajax({

      url:"<?php echo base_url('index.php/admin/delete'); ?>",
      method:"POST",
      data:"id="+id+"&table_name="+table,
      success: function(data){

        if(data == "done"){
          alert('Pack Deleted');
          window.location.reload();
        }

      }

  });


}





  </script>

</html>

