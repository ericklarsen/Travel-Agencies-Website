<link rel="stylesheet" href="<?php echo base_url()."assets_utama/"; ?>css/linearicons.css">
			<link rel="stylesheet" href="<?php echo base_url()."assets_utama/"; ?>css/font-awesome.min.css">
			<link rel="stylesheet" href="<?php echo base_url()."assets_utama/"; ?>css/bootstrap.css">
			<link rel="stylesheet" href="<?php echo base_url()."assets_utama/"; ?>css/magnific-popup.css">
			<link rel="stylesheet" href="<?php echo base_url()."assets_utama/"; ?>css/jquery-ui.css">				
			<link rel="stylesheet" href="<?php echo base_url()."assets_utama/"; ?>css/nice-select.css">							
			<link rel="stylesheet" href="<?php echo base_url()."assets_utama/"; ?>css/animate.min.css">
			<link rel="stylesheet" href="<?php echo base_url()."assets_utama/"; ?>css/owl.carousel.css">				
			<link rel="stylesheet" href="<?php echo base_url()."assets_utama/"; ?>css/main.css">

			<!-- Smartsupp Live Chat script -->
<script type="text/javascript">
var _smartsupp = _smartsupp || {};
_smartsupp.key = '269c1e7210e8d6910e872bd63a1358d1947d0f3d';
window.smartsupp||(function(d) {
  var s,c,o=smartsupp=function(){ o._.push(arguments)};o._=[];
  s=d.getElementsByTagName('script')[0];c=d.createElement('script');
  c.type='text/javascript';c.charset='utf-8';c.async=true;
  c.src='https://www.smartsuppchat.com/loader.js?';s.parentNode.insertBefore(c,s);
})(document);
</script>
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