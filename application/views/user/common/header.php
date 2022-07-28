
<div class="row" style="margin-left: 0px; margin-right: 0px; margin-top: 20px">
  <div class="col-3">
    <div><i onclick="openNav()" class="fa fa-bars" style="font-weight: bold; font-size: 1.8rem;text-shadow: 2px 1px 4px black;color: white"></i></div>
  </div>
  <div class="col-6" style="text-align: center;">
    <h4 style="color: white;">ORASCAN 2.0</h4>
  </div>
</div>


<!-- header overlay -->

<div id="myNav" class="overlay">
  <button class="btn btn-link closebtn" style="background-color: transparent;" onclick="closeNav()"><i class="fa fa-arrow-left"></i></button>
  <div class="overlay-content">
  <!-- <hr style="margin-top: 0rem;"> -->

    
    <a href="<?php echo base_url('index.php/user/dashboard') ?>">Home</a>
    <a href="<?php echo base_url('index.php/user/result') ?>">Results</a>
    <a href="https://www.tripleodiagnostics.com">Visit Our Website</a>

    <a href="<?php echo base_url('index.php/login/logout') ?>">Logout</a>
    
    
  </div>
   
  </div>


</div>
<!-- overlay end -->



<script type="text/javascript">
  

    function openNav() {
  document.getElementById("myNav").style.width = "74%";
  

}

function closeNav() {
  document.getElementById("myNav").style.width = "0%";

}

</script>