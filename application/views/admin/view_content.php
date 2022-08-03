
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

                        <div class="container-fluid">

                            <div class="row">
                                <div class="col-md-12"> 
                                    <center><h3 style="margin-top:20px">Content List</h3></center>
                                    <hr>
                                    <table class="table table-striped" id="datatable" >
                                        <thead>
                                            <th>Sno.</th>
                                            <th>Name</th>
                                            <th>Video Link</th>
                                            <th>Description</th>
                                            
                                            <th>Action</th>
                                        </thead>
                                        <tbody>
                                           <?php $i = 0; foreach($content as $key){ ?>
                                                <tr>
                                                    <td><?php echo ++$i; ?></td>
                                                    <td><?php echo $key['name'] ?></td>
                                                    <td><?php echo $key['link']; ?></td>
                                                    <td><?php echo $key['description']; ?></td>
                                                   
                                                    <td>
                                                        
                                                        <a class="btn btn-success" href="<?php echo base_url('index.php/admin/edit_content?id='.$key['id'].'') ?>"><i class="fa fa-edit"></i></a>

                                                        <button  style="margin:5px" class="btn btn-danger btn-sm" data-id="<?php echo $key['id'] ?>" onclick="  delete_pro(this)"><i class="fa fa-trash" ></i></button>
                                                    </td>
                                                </tr>
                                            <?php } ?>
                                        </tbody>
                                    </table>
                                </div>
                            </div>



                            </div> <!-- container -->

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


         <!-- Datatable js -->
        <script src="<?php echo base_url('assets/for_admin/') ?>public/plugins/datatables/jquery.dataTables.min.js"></script>
        <script src="<?php echo base_url('assets/for_admin/') ?>public/plugins/datatables/dataTables.bootstrap4.min.js"></script>
        <!-- Responsive examples -->
        <script src="<?php echo base_url('assets/for_admin/') ?>public/plugins/datatables/dataTables.responsive.min.js"></script>
        <script src="<?php echo base_url('assets/for_admin/') ?>public/plugins/datatables/responsive.bootstrap4.min.js"></script>


    </body>

    <script>
            $(document).ready(function () {
                $('#datatable').DataTable();
            });





         


    function delete_pro(val){
    var id = val.getAttribute('data-id');

    if(confirm('Are you sure to delete ? ')){

                $.ajax({
                url:"<?php echo base_url('index.php/admin/delete_function');?>",
                method:'POST',
                data:"id="+id,
                success:function(data){
                  
                  if(data == "deleted"){
                    window.location.reload();
                  }
                  
                }
          });

            }


   }


        </script>

</html>