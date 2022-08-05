
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

        <!-- App Icons -->
        <link rel="shortcut icon" href="<?php echo base_url('assets/for_admin/') ?>public/assets/images/favicon.ico">

<!-- C3 charts css -->
<link href="<?php echo base_url('assets/for_admin/') ?>public/plugins/c3/c3.min.css" rel="stylesheet" type="text/css" />


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

                        <div class="container-fluid">

                            <div class="row">
                               <div class="col-md-12">

                                <h1>EDIT CONTENT</h1>
                                <hr>

                                   <form id="submit_form">

                                     <label>Machine Type</label>
                                        <select name="machine_type" class="form-control" required>
                                            <option style="" disabled>Choose</option>
                                            <?php foreach($machine_type as $key ){ ?>
                                                <option <?php if($content_detail['machine_type'] == $key['id'] ){ echo "selected"; } ?> value="<?php echo $key['id'] ?>"><?php echo $key['name'] ?></option>
                                            <?php } ?>
                                        </select>

                                       
                                       <label>Title</label>
                                       <input type="text" class="form-control" name="name" placeholder="Enter Title" value="<?php echo $content_detail['name'] ?>">


                                       <hr>
                                       <?php if($content_detail['icon'] != ""){ ?>
                                       <img src="<?php echo base_url().$content_detail['icon'] ?>" style="width:7rem">
                                       <?php } ?>
                                       <br> 
                                       <label>Icon</label>
                                       <input type="file" class="form-control" name="icon">





                                       <label>Description</label>
                                       <textarea class="form-control" name="description"><?php echo $content_detail['description'] ?></textarea>


                                       <label>Video Link</label>
                                       <input type="text" name="link" class="form-control" value="<?php echo $content_detail['link'] ?>">


                                       <label>Audio File</label>
                                       <input type="file" name="audio" class="form-control">
                                        <?php if($content_detail['audio'] != ""){ ?>

                                         <audio controls>

                                              <source src="<?php echo base_url() ?>assets/files/<?php echo $content_detail['audio'] ?>" type="audio/mp3">
                                            Your browser does not support the audio element.
                                        </audio>

                                        <?php } ?>
                                       <br>

                                       <input type="hidden" name="id" value="<?php echo $content_detail['id'] ?>">
                                       <button class="btn btn-success">Submit <i class="fa fa-spinner fa-spin" style="display:none" id="spinner"></i></button>
                                   </form>
                               </div>
                                
                            </div>


                            <!-- container -->

                    </div> <!-- Page content Wrapper -->

                </div> <!-- content -->

                <?php
                    include 'common/footer.php';
                ?>
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
    </body>
<script type="text/javascript">
$(document).ready(function(){
    $('#submit_form').on('submit',function(e){
         e.preventDefault();
         //alert('check1');
         
       $("#spinner").show();
         


    
        
          $.ajax({
                url:"<?php echo base_url('index.php/Admin/edit_content_func');?>",
                method:'POST',
                data:new FormData(this),
                contentType: false,
                cache: false,
                processData:false,
                success:function(data){
                  
                  
                if(data == "done"){
                    alert('Updated');

                   window.location = "<?php echo base_url('index.php/admin/view_content')?>";

                }else{

                    alert('Error Occured Try Again');
                }
                
              
                            
                  
                }
          });
    });
        

});
</script>
</html>