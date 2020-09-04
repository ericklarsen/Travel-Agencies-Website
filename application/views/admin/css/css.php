<?php 
if ($_SESSION['status'] == false) {
    redirect('Admin');
}
 ?>
<!-- favicon
  ============================================ -->
  <link rel="shortcut icon" type="image/x-icon" href="img/favicon.ico">
  <link rel="stylesheet" href="<?php echo base_url()."assets_admin/"; ?>css/bootstrap-select/bootstrap-select.css">
  <link rel="stylesheet" href="<?php echo base_url()."assets_admin/"; ?>css/dropzone/dropzone.css">
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
    <!-- meanmenu CSS
      ============================================ -->
      <link rel="stylesheet" href="<?php echo base_url()."assets_admin/"; ?>css/meanmenu/meanmenu.min.css">
    <!-- animate CSS
      ============================================ -->
      <link rel="stylesheet" href="<?php echo base_url()."assets_admin/"; ?>css/animate.css">
    <!-- normalize CSS
      ============================================ -->
      <link rel="stylesheet" href="<?php echo base_url()."assets_admin/"; ?>css/normalize.css">
	<!-- wave CSS
		============================================ -->
        <link rel="stylesheet" href="<?php echo base_url()."assets_admin/"; ?>css/wave/waves.min.css">
        <link rel="stylesheet" href="<?php echo base_url()."assets_admin/"; ?>css/wave/button.css">
    <!-- mCustomScrollbar CSS
      ============================================ -->
      <link rel="stylesheet" href="<?php echo base_url()."assets_admin/"; ?>css/scrollbar/jquery.mCustomScrollbar.min.css">
    <!-- Notika icon CSS
      ============================================ -->
      <link rel="stylesheet" href="<?php echo base_url()."assets_admin/"; ?>css/notika-custom-icon.css">
    <!-- Data Table JS
      ============================================ -->
      <link rel="stylesheet" href="<?php echo base_url()."assets_admin/"; ?>css/jquery.dataTables.min.css">
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
      <?php 
      if ($this->session->flashdata('success')) {
       ?>
       <script> alert('<?php 
       echo $this->session->flashdata('success');?>'); </script>
   <?php } ?>
   <?php 
   if ($this->session->flashdata('error')) {
       ?>
       <script> alert('<?php 
       echo $this->session->flashdata('error');?>'); </script>
       <?php } ?>
