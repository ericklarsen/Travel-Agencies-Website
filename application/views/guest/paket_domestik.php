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
								Domestik				
							</h1>	
							<p class="text-white link-nav"><a href="index.html">Paket Wisata </a>  <span class="lnr lnr-arrow-right"></span>  <a href="packages.html"> Domestik</a></p>
						</div>	
					</div>
				</div>
			</section>
			<!-- End banner Area -->	

			<!-- Start hot-deal Area -->
			<section class="hot-deal-area section-gap">
				<div class="container">
		            <div class="row d-flex justify-content-center">
		                <div class="menu-content pb-70 col-lg-8">
		                    <div class="title text-center">
		                        <h1 class="mb-10">Today’s Hot Deals</h1>
		                        <p>Promo paket wisata yang bumbastis!</p>
		                    </div>
		                </div>
		            </div>						
					<div class="row justify-content-center">
						<div class="col-lg-10 active-hot-deal-carusel">
							<?php foreach ($promo as $data) { ?>
							<div class="single-carusel">
								<div class="thumb relative">
									<div class="overlay overlay-bg"></div>
									<img  src="<?php echo base_url()."assets_upload/paket_gambar/"; ?><?php echo $data['gambar_paket']; ?>" alt="">
								</div>
								<div class="price-detials">
									<a href="<?php echo base_url('assets_upload/paket_pdf/'.$data['file_pdf']) ; ?>" class="price-btn">Mulai dari <span><?php echo $data['harga_paket']; ?></span></a>
								</div>
								<div class="details">
									<h4 class="text-white"><?php echo $data['nama_paket']; ?></h4>
									<p class="text-white">
										<?php echo $data['destinasi_paket']; ?>
									</p>
								</div>								
							</div>
							<?php } ?>		

						</div>
					</div>
				</div>	
			</section>
			<!-- End hot-deal Area -->
			

			<!-- Start destinations Area -->
			<section class="destinations-area section-gap">
				<div class="container">
		            <div class="row d-flex justify-content-center">
		                <div class="menu-content pb-40 col-lg-8">
		                    <div class="title text-center">
		                        <h1 class="mb-10">Destinasi Yang Tersedia</h1>
		                        <p>Berikut adalah destinasi yang kami tawarkan untuk anda.</p>
		                    </div>
		                </div>
		            </div>						
					<div class="row">
						<?php foreach ($paket as $data) { 
								if ($data['kategori_paket'] == "domestik") {
									
								?>
						<div class="col-lg-4">
							
							<div class="single-destinations">
								<div class="thumb">
									<img src="<?php echo base_url('assets_upload/paket_gambar/'.$data['gambar_paket']) ; ?>" alt="">
								</div>
								<div class="details">
									<h4><?php echo $data['nama_paket']; ?></h4>
									<p>
										<?php echo $data['destinasi_paket']; ?>
									</p>
									<ul class="package-list">
										<li class="d-flex justify-content-between align-items-center">
											<span>Durasi</span>
											<span><?php echo $data['durasi_paket']; ?></span>
										</li>

										<li class="d-flex justify-content-between align-items-center">
											<span>Harga Mulai Dari</span>
											<span><?php echo $data['harga_paket']; ?></span>
										</li>
										
										<li class="d-flex justify-content-between align-items-center">
											<span>Silahkan Download Untuk Info Lebih Lanjut</span>
											<a href="<?php echo base_url('assets_upload/paket_pdf/'.$data['file_pdf']) ; ?>" class="price-btn"><font color="white">Download</font></a>
										</li>													
									</ul>
								</div>
							</div>
						
						</div>
						<?php
								}} ?>

					</div>
				</div>	
			</section>
			<!-- End destinations Area -->
			

			<!-- End home-about Area -->
<?php
				$this->load->view('footer');
				?>
		</body>
	</html>