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
			<!--
			CSS
			============================================= -->
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
								Artikel				
							</h1>	
							<p class="text-white link-nav">Artikel<span class="lnr lnr-arrow-right"></span>Detail </p>
						</div>	
					</div>
				</div>
			</section>
			<!-- End banner Area -->					  
			
			<!-- Start post-content Area -->
			<section class="post-content-area single-post-area">
				<div class="container">
					<div class="row">
						<?php foreach ($artikel as $data) { ?>
						<div class="col-lg-15 posts-list">
							<div class="single-post row">
								<div class="col-lg-12">
									<div class="feature-img">
										<img class="img-fluid" src="<?php echo base_url('assets_upload/artikel_gambar/'.$data['gambar_artikel']) ; ?>" alt="">
									</div>									
								</div>
								<div class="col-lg-12  col-md-3 meta-details">
									<div class="user-details row">
										<p class="user-name col-lg-12 col-md-12 col-6">Admin, <?php echo $data['tanggal']; ?> <span class="lnr lnr-user"></p>							
									</div>
								</div>
								<div class="col-lg-12 mt-30">
									<h3 class="mt-20 mb-20"><?php echo $data['judul_artikel']; ?></h3>
									<p class="excert">
										<?php echo $data['isi_artikel']; ?>
									</p>
								</div>
							</div>
							
						</div>
					<?php } ?>
					</div>
				</div>	
			</section>
			<!-- End post-content Area -->
			
			<!-- start footer Area -->		
			
			<?php
			$this->load->view('footer');
			?>
		</body>
	</html>