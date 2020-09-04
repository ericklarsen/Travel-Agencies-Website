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
		<style>
		.mySlides1 {display: none;}
		.fades {
			-webkit-animation-name: fade;
			-webkit-animation-duration: 3.5s;
			animation-name: fade;
			animation-duration: 3.5s;
		}
		.actives {
			background-color: #717171;
		}
		.dot {
			height: 15px;
			width: 15px;
			margin: 0 2px;
			background-color: #bbb;
			border-radius: 50%;
			display: inline-block;
			transition: background-color 1.6s ease;
		}
		@-webkit-keyframes fade {
			from {opacity: .4} 
			to {opacity: 1}
		}

		@keyframes fade {
			from {opacity: .4} 
			to {opacity: 1}
		}

		/* On smaller screens, decrease text size */
		@media only screen and (max-width: 300px) {
			.text {font-size: 11px}
		}

	</style>	<!--
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
							<p class="text-white link-nav">Kami memberikan informasi terkini dari Indonesia.</p>
						</div>	
					</div>
				</div>
			</section>
			<!-- End banner Area -->					  

			<!-- Start top-category-widget Area -->
			<section class="top-category-widget-area pt-90 pb-90 ">
				
			</section>
			<!-- End top-category-widget Area -->
			
			<!-- Start post-content Area -->
			<section class="post-content-area">
				<div class="container">
					<div class="row">
						<?php foreach ($artikel as $data) { ?>
						<div class="col-lg-11 posts-list">
							<div class="single-post row">
								<div class="col-lg-3  col-md-3 meta-details">
									<div class="user-details row">
										<p class="user-name col-lg-12 col-md-12 col-6"><a href="#">Admin</a> <span class="lnr lnr-user"></span></p>
										<p class="date col-lg-12 col-md-12 col-6"><a href="#"><?php echo $data['tanggal']; ?></a> <span class="lnr lnr-calendar-full"></span></p>				
									</div>
								</div>
								<div class="col-lg-9 col-md-9 ">
									<div class="feature-img">
										<img class="img-fluid" src="<?php echo base_url('assets_upload/artikel_gambar/'.$data['gambar_artikel']) ; ?>" alt="">
									</div>
									<a class="posts-title" href="blog-single.html"><h3><?php echo $data['judul_artikel']; ?></h3></a>
									<p class="excert">
										<?php echo $data['ringkasan_artikel']; ?>
									</p>
									<a href = "<?php echo base_url('Artikel/isi/'.$data['id_artikel']); ?>" class="primary-btn">View More</a>
								</div>
							</div>
											
						</div>
						<br>
					<?php } ?>
					</div>
				</div>	
			</section>
			<!-- End post-content Area -->
			<script>
				var slideIndex = 0;
				showSlides();

				function showSlides() {
					var i;
					var slides = document.getElementsByClassName("mySlides1");
					var dots = document.getElementsByClassName("dot");
					for (i = 0; i < slides.length; i++) {
						slides[i].style.display = "none";  
					}
					slideIndex++;
					if (slideIndex > slides.length) {slideIndex = 1}    

						slides[slideIndex-1].style.display = "block";  
  setTimeout(showSlides, 4000); // Change image every 2 seconds
}
</script>
			<?php
			$this->load->view('footer');
			?>
		</body>
	</html>