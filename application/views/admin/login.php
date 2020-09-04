<!doctype html>
<html class="no-js" lang="">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Admin Login</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- favicon
		============================================ -->
    <link rel="shortcut icon" type="image/x-icon" href="img/favicon.ico">
    <!-- Google Fonts
		============================================ -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:100,300,400,700,900" rel="stylesheet">
    <!-- Bootstrap CSS
		============================================ -->
    <link rel="stylesheet" href="<?php echo base_url()."assets_admin/"; ?>css/bootstrap.min.css">
    <!-- font awesome CSS
		============================================ -->
    <link rel="stylesheet" href="<?php echo base_url()."assets_admin/"; ?>css/font-awesome.min.css">
    <!-- owl.carousel CSS
		============================================ -->
    <link rel="stylesheet" href="<?php echo base_url()."assets_admin/"; ?>css/owl.carousel.css">
    <link rel="stylesheet" href="<?php echo base_url()."assets_admin/"; ?>css/owl.theme.css">
    <link rel="stylesheet" href="<?php echo base_url()."assets_admin/"; ?>css/owl.transitions.css">
    <!-- animate CSS
		============================================ -->
    <link rel="stylesheet" href="<?php echo base_url()."assets_admin/"; ?>css/animate.css">
    <!-- normalize CSS
		============================================ -->
    <link rel="stylesheet" href="<?php echo base_url()."assets_admin/"; ?>css/normalize.css">
    <!-- mCustomScrollbar CSS
		============================================ -->
    <link rel="stylesheet" href="<?php echo base_url()."assets_admin/"; ?>css/scrollbar/jquery.mCustomScrollbar.min.css">
    <!-- wave CSS
		============================================ -->
    <link rel="stylesheet" href="<?php echo base_url()."assets_admin/"; ?>css/wave/waves.min.css">
    <!-- Notika icon CSS
		============================================ -->
    <link rel="stylesheet" href="<?php echo base_url()."assets_admin/"; ?>css/notika-custom-icon.css">
    <!-- main CSS
		============================================ -->
    <link rel="stylesheet" href="<?php echo base_url()."assets_admin/"; ?>css/main.css">
    <!-- style CSS
		============================================ -->
    <link rel="stylesheet" href="<?php echo base_url()."assets_admin/"; ?>style.css">
    <!-- responsive CSS
		============================================ -->
    <link rel="stylesheet" href="<?php echo base_url()."assets_admin/"; ?>css/responsive.css">
    <!-- modernizr JS
		============================================ -->
    <script src="<?php echo base_url()."assets_admin/"; ?>js/vendor/modernizr-2.8.3.min.js"></script>
</head>
<?php 
if ($this->session->flashdata('error')) {
 ?>
<script> alert('<?php 
echo $this->session->flashdata('error');?>'); </script>
<?php } ?>
   <?php 
if ($this->session->flashdata('logout')) {
 ?>
<script> alert('<?php 
echo $this->session->flashdata('logout');?>'); </script>
<?php } ?>
<body>
    <!--[if lt IE 8]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->
    <!-- Login Register area Start-->
    <div class="login-content">
        <!-- Login -->
        <div class="nk-block toggled" id="l-login">
            <form id="myForm" method="POST" action="<?php echo site_url('Admin/aksi_login'); ?>">
            <div class="nk-form">
                Admin Login PT. Eksis Tour and Travel
                <div class="input-group">
                    <span class="input-group-addon nk-ic-st-pro"><i class="notika-icon notika-support"></i></span>
                    <div class="nk-int-st">
                        <input type="text" name="username" class="form-control" placeholder="Username">
                    </div>
                </div>
                <div class="input-group mg-t-15">
                    <span class="input-group-addon nk-ic-st-pro"><i class="notika-icon notika-edit"></i></span>
                    <div class="nk-int-st">
                        <input type="password" name="password" class="form-control" placeholder="Password">
                    </div>
                </div>
                <a href="#" onclick="document.getElementById('myForm').submit();" class="btn btn-login btn-success btn-float"><i class="notika-icon notika-right-arrow right-arrow-ant"></i></a>
            </div>
            </form>
        </div>

    </div>
    <!-- Login Register area End-->
    <!-- jquery
		============================================ -->
    <script src="<?php echo base_url()."assets_admin/"; ?>js/vendor/jquery-1.12.4.min.js"></script>
    <!-- bootstrap JS
		============================================ -->
    <script src="<?php echo base_url()."assets_admin/"; ?>js/bootstrap.min.js"></script>
    <!-- wow JS
		============================================ -->
    <script src="<?php echo base_url()."assets_admin/"; ?>js/wow.min.js"></script>
    <!-- price-slider JS
		============================================ -->
    <script src="<?php echo base_url()."assets_admin/"; ?>js/jquery-price-slider.js"></script>
    <!-- owl.carousel JS
		============================================ -->
    <script src="<?php echo base_url()."assets_admin/"; ?>js/owl.carousel.min.js"></script>
    <!-- scrollUp JS
		============================================ -->
    <script src="<?php echo base_url()."assets_admin/"; ?>js/jquery.scrollUp.min.js"></script>
    <!-- meanmenu JS
		============================================ -->
    <script src="<?php echo base_url()."assets_admin/"; ?>js/meanmenu/jquery.meanmenu.js"></script>
    <!-- counterup JS
		============================================ -->
    <script src="<?php echo base_url()."assets_admin/"; ?>js/counterup/jquery.counterup.min.js"></script>
    <script src="<?php echo base_url()."assets_admin/"; ?>js/counterup/waypoints.min.js"></script>
    <script src="<?php echo base_url()."assets_admin/"; ?>js/counterup/counterup-active.js"></script>
    <!-- mCustomScrollbar JS
		============================================ -->
    <script src="<?php echo base_url()."assets_admin/"; ?>js/scrollbar/jquery.mCustomScrollbar.concat.min.js"></script>
    <!-- sparkline JS
		============================================ -->
    <script src="<?php echo base_url()."assets_admin/"; ?>js/sparkline/jquery.sparkline.min.js"></script>
    <script src="<?php echo base_url()."assets_admin/"; ?>js/sparkline/sparkline-active.js"></script>
    <!-- flot JS
		============================================ -->
    <script src="<?php echo base_url()."assets_admin/"; ?>js/flot/jquery.flot.js"></script>
    <script src="<?php echo base_url()."assets_admin/"; ?>js/flot/jquery.flot.resize.js"></script>
    <script src="<?php echo base_url()."assets_admin/"; ?>js/flot/flot-active.js"></script>
    <!-- knob JS
		============================================ -->
    <script src="<?php echo base_url()."assets_admin/"; ?>js/knob/jquery.knob.js"></script>
    <script src="<?php echo base_url()."assets_admin/"; ?>js/knob/jquery.appear.js"></script>
    <script src="<?php echo base_url()."assets_admin/"; ?>js/knob/knob-active.js"></script>
    <!--  Chat JS
		============================================ -->
    <script src="<?php echo base_url()."assets_admin/"; ?>js/chat/jquery.chat.js"></script>
    <!--  wave JS
		============================================ -->
    <script src="<?php echo base_url()."assets_admin/"; ?>js/wave/waves.min.js"></script>
    <script src="<?php echo base_url()."assets_admin/"; ?>js/wave/wave-active.js"></script>
    <!-- icheck JS
		============================================ -->
    <script src="<?php echo base_url()."assets_admin/"; ?>js/icheck/icheck.min.js"></script>
    <script src="<?php echo base_url()."assets_admin/"; ?>js/icheck/icheck-active.js"></script>
    <!--  todo JS
		============================================ -->
    <script src="<?php echo base_url()."assets_admin/"; ?>js/todo/jquery.todo.js"></script>
    <!-- Login JS
		============================================ -->
    <script src="<?php echo base_url()."assets_admin/"; ?>js/login/login-action.js"></script>
    <!-- plugins JS
		============================================ -->
    <script src="<?php echo base_url()."assets_admin/"; ?>js/plugins.js"></script>
    <!-- main JS
		============================================ -->
    <script src="<?php echo base_url()."assets_admin/"; ?>js/main.js"></script>
</body>

</html>