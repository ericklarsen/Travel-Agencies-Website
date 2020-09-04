	<!DOCTYPE html>
	<html lang="zxx" class="no-js">
	<head>
		<!-- Mobile Specific Meta -->
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<!-- Favicon-->
		<link rel="shortcut icon" href="img/fav.png">
		<!-- Author Meta -->
		<meta name="author" content="colorlib">
		<!-- Meta Description -->
		<meta name="description" content="">
		<!-- Meta Keyword -->
		<meta name="keywords" content="">
		<!-- meta character set -->
		<meta charset="UTF-8">
		<!-- Site Title -->
		<title>Travel</title>

		<link href="https://fonts.googleapis.com/css?family=Poppins:100,200,400,300,500,600,700" rel="stylesheet"> 
		<?php
		$this->load->view('css');
		?>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-cookie/1.4.1/jquery.cookie.js"></script>
		
	</head>
	<body>	
		<?php
		$this->load->view('menu');
		?>

		<!-- start banner Area -->
		<section class="banner-area relative">
			<div class="overlay overlay-bg"></div>
			<div class="container">				
				<div class="row d-flex align-items-center justify-content-center">
					<div class="about-content col-lg-12">
						<h1 class="text-white">
							Voucher Hotel				
						</h1>	

					</div>	
				</div>
			</div>
		</section>
		<!-- End banner Area -->	

		<!-- Start destinations Area -->
		<section class="destinations-area section-gap">
			<div class="container">
				<div class="row d-flex justify-content-center">
					<div class="menu-content pb-40 col-lg-8">
						<div class="title text-center">
							<h1 class="mb-10">Hotel - hotel di Indonesia</h1>
							<p>Harga kamar yang kami tawarkan lebih murah dari tempat lain.</p>
							<form action="<?php echo site_url('Home/voucher_hotel_daerah');?>" method="POST">
							<select class="form-control" name="kategori" id="kategori" onchange='this.form.submit()'>

								<option value="semua" >Seluruh Hotel</option>
								<?php foreach ($hotel_daerah as $data) { 
									if ($data['daerah_hotel'] == $daerah) {
									
										?>
									<option value="<?php echo $data['daerah_hotel']; ?>" selected><?php echo $data['daerah_hotel']; ?></option>
								<?php }
								else
								{ ?>
									<option value="<?php echo $data['daerah_hotel']; ?>"><?php echo $data['daerah_hotel']; ?></option>
								<?php }} ?>
							</select>
							<noscript><input type="submit" value="Submit"></noscript>
							</form>
				
						</div>
					</div>
				</div>					
				<div class="row subkategori ">
					<?php foreach ($hotel as $data) {
						?>

						<div class="col-lg-4">
							
							<div class="single-destinations">
								<div class="thumb">
									<img src="<?php echo base_url()."assets_upload/hotel_gambar/"; ?><?php echo $data['gambar_hotel']; ?>" alt="">
								</div>
								<div class="details">
									<h4><?php echo $data['nama_hotel']; ?></h4>
									<p>
										<?php echo $data['daerah_hotel']; ?>
									</p>
									<ul class="package-list">
										<?php 
										$data2 = $this->Hotel_model->ambil_semua_kamar($data['id_hotel']); 
										$data3 = $this->Hotel_model->ambil_semua_kamar($data['id_hotel']);?>

										<?php foreach ($data2 as $data2) {?>
											<li class="d-flex justify-content-between align-items-center">



												<span><?php echo $data2['nama_tkamar']; ?></span>
												<span><?php echo $data2['harga_tkamar']; ?><br></span>

											</li>
										<?php } ?>		
									</ul>
								</div>
							</div>
						</div>	

					<?php } ?>																										
				</div>
			</div>	
		</section>
		<!-- End destinations Area -->

		<?php
		$this->load->view('footer');
		?>
		
	</body>
	</html>