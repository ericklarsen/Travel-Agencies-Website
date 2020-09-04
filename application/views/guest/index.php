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
		<title>Eksis Tour and Travel</title>
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

		#ABC {
      background: url(../img/hero-bg.jpg) center;
    }

	</style>
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
			<!-- #header -->
			
			<!-- start banner Area -->
			<section class="banner-area relative">
				<div  class="overlay overlay-bg"></div>				
				<div class="container">
					<div class="row fullscreen align-items-center justify-content-between">
						<div class="col-lg-6 col-md-6 banner-left">
							<div class="mySlides1 fades">
								<h6 class="text-white">Harga Paket Wisata Bersahabat</h6>
								<h1 class="text-white">Internasional & Domestik Travel</h1>
								<p class="text-white">
									Harga yang kami tawarkan akan cocok dengan kantong anda.
								</p>
							</div>

							<div class="mySlides1 fades">
								<h6 class="text-white">Harga Kamar hotel yang bersahabat</h6>
								<h1 class="text-white">Voucher Kamar Hotel</h1>
								<p class="text-white">
									Harga yang kami tawarkan akan cocok dengan kantong anda.
								</p>
								<a href="<?php echo site_url('Home/voucher_hotel');?>" class="primary-btn text-uppercase">Cek Harga</a>
							</div>

						</div>
						<div class="col-lg-4 col-md-6 banner-right">
							<ul class="nav nav-tabs" id="myTab" role="tablist">
								<li class="nav-item">
									<a class="nav-link active" id="flight-tab" data-toggle="tab" href="#flight" role="tab" aria-controls="flight" aria-selected="true">Paket Wisata</a>
								</li>
								<li class="nav-item">
									<a class="nav-link" id="hotel-tab" data-toggle="tab" href="#hotel" role="tab" aria-controls="hotel" aria-selected="false">Hotel</a>
								</li>
								<li class="nav-item">
									<a class="nav-link" id="holiday-tab" data-toggle="tab" href="#holiday" role="tab" aria-controls="holiday" aria-selected="false">Transportasi</a>
								</li>
							</ul>
							<div class="tab-content" id="myTabContent">
								<div class="tab-pane fade show active" id="flight" role="tabpanel" aria-labelledby="flight-tab">
									<form class="form-wrap" method="POST" action="<?php echo site_url('Home/paket');?>">
										<select class="form-control" size="1" name="kategori2">
											<option value="" selected disabled>Kategori</option>
											<option value="domestik">Domestik</option>
											<option value="Internasional">Internasional</option>
										</select>									

										<input type="submit" value="Cari Paket Wisata" class="primary-btn text-uppercase">									
									</form>
								</div>
								<div class="tab-pane fade" id="hotel" role="tabpanel" aria-labelledby="hotel-tab">
									<form class="form-wrap" action="<?php echo site_url('Home/voucher_hotel_daerah');?>" method="POST">
							<select class="form-control" name="kategori" id="kategori" size="1">
								<?php if ($daerah == "semua" ) {
									# code...
								} ?>
								<option value="semua" >Seluruh Hotel</option>
								<?php foreach ($hotel_daerah as $data) { ?>
									<option value="<?php echo $data['daerah_hotel']; ?>"><?php echo $data['daerah_hotel']; ?></option>
								<?php } ?>
							</select>
							<input type="submit" value="Cari Hotel" class="primary-btn text-uppercase">
							</form>					  	
								</div>
								<div class="tab-pane fade" id="holiday" role="tabpanel" aria-labelledby="holiday-tab">
									<form class="form-wrap" method="POST" action="<?php echo site_url('Home/rental');?>">
										<select class="form-control" size="1" name="kategori">
											<option value="" selected disabled>Jenis</option>
											<option value="mobil">Rental Mobil</option>
											<option value="bus">Rental Bus</option>
										</select>						
										<input type="submit" value="Cari Transportasi" class="primary-btn text-uppercase">									
									</form>							  	
								</div>
							</div>
						</div>
					</div>
				</div>					
			</section>
			<!-- End banner Area -->

			<!-- Start popular-destination Area -->
			<section class="popular-destination-area section-gap">
				<div class="container">
		            <div class="row d-flex justify-content-center">
		                <div class="menu-content pb-70 col-lg-8">
		                    <div class="title text-center">
		                        <h1 class="mb-10">3 Destinasi Populer</h1>
		                        <p>We all live in an age that belongs to the young at heart. Life that is becoming extremely fast, day.</p>
		                    </div>
		                </div>
		            </div>						
					<div class="row">
						<?php
						if (is_array($populer) || is_object($populer))
                                       { 
                                       foreach ($populer as $data) { ?>
                                            
						<div class="col-lg-4">
							<div class="single-destination relative">
								<div class="thumb relative">
									<div class="overlay overlay-bg"></div>
									<img  src="<?php echo base_url()."assets_upload/paket_gambar/"; ?><?php echo $data['gambar_paket']; ?>" alt="">
								</div>
								<div class="desc">	
									<a href="<?php echo base_url('assets_upload/paket_pdf/'.$data['file_pdf']) ; ?>" class="price-btn"><?php echo $data['harga_paket']; ?></a>			
									<h4><?php echo $data['nama_paket']; ?></h4>
									<p></p>			
								</div>
							</div>
						</div>

                                        <?php }} ?> 
					</div>

				</div>	
			</section>
			<!-- End popular-destination Area -->
			

			<!-- Start price Area -->
			<section class="price-area testimonial-area section-gap">
				<div class="container">
					<div class="row d-flex justify-content-center">
						<div class="menu-content pb-70 col-lg-8">
							<div class="title text-center">
								<h1 class="mb-10">Dokumentasi Wisata</h1>
								<p>Kumpulan foto - foto perjalanan wisata bersama PT. Eksis Tour and Travel</p>
							</div>
						</div>
					</div>
					<div class="row">
						<div class="active-testimonial">
							<?php foreach ($dokumentasi as $data) { ?>
							<div class="single-testimonial item d-flex flex-row">
								
								<div class="desc">
									<img height="250px" src="<?php echo base_url()."assets_upload/dokumentasi_gambar/"; ?><?php echo $data['gambar_dokumentasi']; ?>" alt=""><br>
									<p>
										<?php echo $data['deskripsi_dokumentasi']; ?>
									</p>
									<h4><?php echo $data['judul_dokumentasi']; ?></h4>
								</div>
							</div>                 
							<?php } ?>  		                    
						</div>
					</div>
				</div>
			</section>
			<!-- End price Area -->
			

			<!-- Start other-issue Area -->
			<section class="other-issue-area section-gap">
				<div class="container">
					<div class="row d-flex justify-content-center">
						<div class="menu-content pb-70 col-lg-9">
							<div class="title text-center">
								<h1 class="mb-10">Kami Dapat Membantu Anda</h1>
								<p>Hal - hal yang dapat kami lakukan.</p>
							</div>
						</div>
					</div>					
					<div class="row">
						<div class="col-lg-3 col-md-6">
							<div class="single-other-issue">
								<div class="thumb">
									<img   src="<?php echo base_url()."assets_utama/"; ?>img/o1.jpg" alt="">					
								</div>
								<a href="#">
									<h4>Rental Mobil</h4>
								</a>
								<p>
									The preservation of human life is the ultimate value, a pillar of ethics and the foundation.
								</p>
							</div>
						</div>
						<div class="col-lg-3 col-md-6">
							<div class="single-other-issue">
								<div class="thumb">
									<img   src="<?php echo base_url()."assets_utama/"; ?>img/o2.jpg" alt="">					
								</div>
								<a href="#">
									<h4>Tours</h4>
								</a>
								<p>
									I was always somebody who felt quite sorry for myself, what I had not got compared.
								</p>
							</div>
						</div>
						<div class="col-lg-3 col-md-6">
							<div class="single-other-issue">
								<div class="thumb">
									<img   src="<?php echo base_url()."assets_utama/"; ?>img/o3.jpg" alt="">					
								</div>
								<a href="#">
									<h4>Hotel</h4>
								</a>
								<p>
									The following article covers a topic that has recently moved to center stage–at least it seems.
								</p>
							</div>
						</div>
						<div class="col-lg-3 col-md-6">
							<div class="single-other-issue">
								<div class="thumb">
									<img   src="<?php echo base_url()."assets_utama/"; ?>img/o4.jpg" alt="">					
								</div>
								<a href="#">
									<h4>Travel</h4>
								</a>
								<p>
									There are many kinds of narratives and organizing principles. Science is driven by evidence.
								</p>
							</div>
						</div>																		
					</div>
				</div>	
			</section>
			<!-- End other-issue Area -->
			

			<!-- Start testimonial Area -->
			<section class="testimonial-area recent-blog-area section-gap">
				<div class="container">
					<div class="row d-flex justify-content-center">
						<div class="menu-content pb-60 col-lg-9">
							<div class="title text-center">
								<h1 class="mb-10">Artikel Terbaru Dari Kami</h1>
								<p>Berita terkini dan terupdate.</p>
							</div>
						</div>
					</div>							
					<div class="row">
						<div class="active-recent-blog-carusel">
							<?php foreach ($artikel as $data) { ?>
							<div class="single-recent-blog-post item">
								<div class="thumb">
									<img  src="<?php echo base_url('assets_upload/artikel_gambar/'.$data['gambar_artikel']) ; ?>" alt="">
								</div>
								<div class="details">
									<a href="<?php echo base_url('Artikel/isi/'.$data['id_artikel']); ?>"><h4 class="title"><?php echo $data['judul_artikel']; ?></h4></a>
									<p>
										<?php echo $data['ringkasan_artikel']; ?>
									</p>
									<h6 class="date"><?php echo $data['tanggal']; ?>, by Admin</h6>
								</div>	
							</div>
						<?php } ?>
						</div>
					</div>
				</div>	
			</section>
			<!-- End testimonial Area -->

			<!-- Start home-about Area -->
			<section class="home-about-area">
				<div class="container-fluid">
					<div class="row align-items-center justify-content-end">
						<div class="col-lg-6 col-md-12 home-about-left">
							<h1>
								Ingin liburan beramai? <br>
								Silahkan tanyakan kepada kami. <br>
							</h1>
							<p>
								inappropriate behavior is often laughed off as “boys will be boys,” women face higher conduct standards especially in the workplace. That’s why it’s crucial that, as women, our behavior on the job is beyond reproach. inappropriate behavior is often laughed.
							</p>
							<a href="<?php echo site_url('Home/kontak'); ?>" class="primary-btn text-uppercase">request custom price</a>
						</div>
						<div class="col-lg-6 col-md-12 home-about-right no-padding">
							<img   src="<?php echo base_url()."assets_utama/"; ?>img/about-img.jpg" alt="">
						</div>
					</div>
				</div>	
			</section>
			<!-- End home-about Area -->
				
			<?php
			$this->load->view('footer');
			?>
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


</body>
</html>