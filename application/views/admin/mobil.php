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
										<h2>Transportasi</h2>
										<p>Bus & Mobil</span></p>
									</div>
								</div>
							</div>
							<div class="col-lg-6 col-md-6 col-sm-6 col-xs-3">
								<div class="breadcomb-report">
									<a href="<?php echo site_url('Mobil/tambah'); ?>"><button data-toggle="tooltip" data-placement="left" title="Tambah Kendaraan" class="btn"><i class="notika-icon notika-up-arrow"></i></button></a>

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
                                        <th>Kategori</th>
                                        <th>Nama Kendaraan</th>
                                        <th>Harga Sewa</th>
                                        <th>Gambar</th>
                                        <th>Menu</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php foreach ($mobil as $data) { ?>
                                            <tr>
                                                <td> <?php echo $data['kategori_mobil']; ?> </td>
                                                <td> <?php echo $data['nama_mobil']; ?> </td>
                                                <td> <?php echo $data['harga_mobil']; ?> </td>
                                                <td> <img src="<?php echo base_url('assets_upload/mobil_gambar/'.$data['gambar_mobil']) ; ?>" style="width:100px;height:100px"; > </td>
                                                <td><a href = "<?php echo base_url('Mobil/edit/'.$data['id_mobil']); ?>"> Edit </a> | <a href = "<?php echo base_url('Mobil/hapus/'.$data['id_mobil']); ?>"> Hapus </a></td>
                                            </tr>
                                        <?php } ?>
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