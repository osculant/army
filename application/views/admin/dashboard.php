
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

<link rel="stylesheet" href="<?php echo base_url('assets/for_admin/') ?>cal/css/bootstrap.min.css" />
<script src="<?php echo base_url('assets/for_admin/') ?>cal/js/jquery.slim.min.js" type="text/javscript"></script>
<script src="<?php echo base_url('assets/for_admin/') ?>cal/js/bootstrap.min.js" type="text/javscript"></script>
<script src="<?php echo base_url('assets/for_admin/') ?>cal/js/moment.min.js" type="text/javscript"></script>
<link rel="stylesheet" href="<?php echo base_url('assets/for_admin/') ?>cal/css/calendar.css" rel="stylesheet" type="text/css" />
<link rel="stylesheet" href="<?php echo base_url('assets/for_admin/') ?>cal/css/spinner.css" rel="stylesheet" type="text/css" />
<script src="<?php echo base_url('assets/for_admin/') ?>cal/js/calendar.js" type="module"></script>
<script src="<?php echo base_url('assets/for_admin/') ?>cal/js/spinner.js" type="module"></script>
<script src="<?php echo base_url('assets/for_admin/') ?>cal/js/mockData.js" type="module"></script>
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
                                <div class="col-md-6 col-xl-4">
                                    <div class="mini-stat clearfix bg-white">
                                        <span class="mini-stat-icon bg-purple mr-0 float-right"><i class="fa fa-content"></i></span>
                                        <div class="mini-stat-info">
                                             <span class="counter text-purple"><?php echo $data;?></span>
                                            Total Content
                                        </div>
                                        <div class="clearfix"></div>
                                        <p class=" mb-0 m-t-20 text-muted"></p>
                                    </div>
                                </div>
                                <div class="row">
                                    <div id="calendar"> drftgyhujikol</div>
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

 <script> 
 
import {Spinner} from 'spinner.js';
const Spinner = require('spinner.js');
import {mockData} from 'mockData.js';

import {Calendar} from 'calendar.js';
 Calendar = require('calendar.js');
const mockData = require('mockData.js');
document.addEventListener("DOMContentLoaded", async ()=>{
  var cal = Calendar('calendar');
  var spr = Spinner('calendar'); 
  await spr.renderSpinner().delay(0);
  cal.bindData(mockData);
  cal.render();
});
</script>

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

</html>