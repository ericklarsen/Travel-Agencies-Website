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
								Rental Mobil				
							</h1>	
							<p class="text-white link-nav"><a href="index.html">Transportasi </a>  <span class="lnr lnr-arrow-right"></span>  <a href="packages.html"> Rental Mobil</a></p>
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
		                        <h1 class="mb-10">Armada Kami</h1>
		                        <p>Kualitas kendaraan kami menjadi nomor satu untuk pelanggan.</p>
		                    </div>
		                </div>
		            </div>						
					<div class="row">
						<?php foreach ($mobil as $data) { ?>
						<div class="col-lg-4">
							<div class="single-destinations">
								<div class="thumb">
									<img src="<?php echo base_url()."assets_upload/mobil_gambar/"; ?><?php echo $data['gambar_mobil']; ?>" alt="">
								</div>
								<div class="details">
									<h4><?php echo $data['nama_mobil']; ?></h4>
									<p>
										Detail
									</p>
									<ul class="package-list">
										
										<li class="d-flex justify-content-between align-items-center">
											<span>Harga Sewa per Hari</span>
											<a href="#" class="price-btn"><?php echo $data['harga_mobil']; ?></a>
										</li>													
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