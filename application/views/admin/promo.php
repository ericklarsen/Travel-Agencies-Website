<!doctype html>
<html class="no-js" lang="">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Admin</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php
            $this->load->view('admin/css/css');
            ?>
</head>

<body>
    <!--[if lt IE 8]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->
    
    <?php
            $this->load->view('admin/css/menu');
            ?>
	<!-- Breadcomb area Start-->
	<div class="breadcomb-area">
		<div class="container">
			<div class="row">
				<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
					<div class="breadcomb-list">
						<div class="row">
							<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
								<div class="breadcomb-wp">
									<div class="breadcomb-icon">
										<i class="notika-icon notika-windows"></i>
									</div>
									<div class="breadcomb-ctn">
										<h2>Daftar Promo & Destinasi Populer</h2>
										<p>Paket Wisata Domestik & Internasional</span></p>
									</div>
								</div>
							</div>
							<div class="col-lg-6 col-md-6 col-sm-6 col-xs-3">
								<div class="breadcomb-report">
									<a href="<?php echo site_url('promo/tambah'); ?>"><button data-toggle="tooltip" data-placement="left" title="Tambah Promo" class="btn"><i class="notika-icon notika-up-arrow"> Promo</i></button></a>
                                    <a href="<?php echo site_url('promo/tambah_populer'); ?>"><button data-toggle="tooltip" data-placement="left" title="Tambah Destinasi Terpopuler" class="btn"><i class="notika-icon notika-up-arrow"> Destinasi</i></button></a>

								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- Breadcomb area End-->
    <!-- Data Table area Start-->
    <div class="data-table-area">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="data-table-list">
                        <div class="table-responsive">
                            <table id="data-table-basic" class="table table-striped">
                                <thead>
                                    <tr>
                                        <th>Nama Paket</th>
                                        <th>Menu</th>
                                    </tr>
                                </thead>
                                <tbody>
                                       <?php
                                       if (is_array($promo) || is_object($promo))
                                       { 
                                       foreach ($promo as $data) { ?>
                                            <tr>
                                                <td> <?php echo $data['nama_paket']; ?> </td>
                                                <td><a href = "<?php echo base_url('Promo/hapus/'.$data['id_promo']); ?>"> Hentikan Promo </a></td>
                                            </tr>
                                        <?php }} ?>     
                                        </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>  
<br>
    <div class="data-table-area">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="data-table-list">
                        <div class="table-responsive">
                            <table id="data-table-basic" class="table table-striped">
                                <thead>
                                    <tr>
                                        <th>Nama Paket</th>
                                        <th>Menu</th>
                                    </tr>
                                </thead>
                                <tbody>
                                       <?php
                                       if (is_array($populer) || is_object($populer))
                                       { 
                                       foreach ($populer as $data) { ?>
                                            <tr>
                                                <td> <?php echo $data['nama_paket']; ?> </td>
                                                <td><a href = "<?php echo base_url('Promo/hapus_populer/'.$data['id_populer']); ?>"> Hentikan Populer Destinasi </a></td>
                                            </tr>
                                        <?php }} ?>     
                                        </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Data Table area End-->
    <!-- Start Footer area-->
   <?php
            $this->load->view('admin/css/footer');
            ?>
</body>

</html>