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
                                  <h2>Tambah Paket Wisata</h2>
                                  <p>Domestik & Internasional</span></p>
                              </div>
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
                <div class="form-example-wrap">
                    <form enctype="multipart/form-data" action="<?php echo site_url('Paket/edit_aksi');?>" method="POST">
                    <?php foreach ($paket as $data){?>
                    <div class="form-example-int">
                        <div class="form-group">
                            <label>Kategori</label>
                            <div class="nk-int-st">
                                <select name="kategori" class="form-control input-sm">
                                  <?php if ($data['kategori_paket'] == "domestik") { ?>
                                    <option value="" selected disabled>Kategori</option>
                                    <option value="domestik" selected>Domestik</option>
                                    <option value="Internasional">Internasional</option>
                                  <?php } ?>
                                  <?php if ($data['kategori_paket'] == "Internasional") { ?>
                                    <option value="" selected disabled>Kategori</option>
                                    <option value="domestik" >Domestik</option>
                                    <option value="Internasional" selected>Internasional</option>
                                  <?php } ?>
                                </select>
                            </div>
                        </div>
                    </div>
                    
                    <input type="hidden" name="id_paket" value=<?php echo $data['id_paket'];?>>
                    <div class="form-example-int mg-t-15">
                        <div class="form-group">
                            <label>Nama Paket</label>
                            <div class="nk-int-st">
                                <input type="text" name="namapaket" class="form-control input-sm" value="<?php echo $data['nama_paket'];?>">
                            </div>
                        </div>
                    </div>

                    <div class="form-example-int mg-t-15">
                        <div class="form-group">
                            <label>Destinasi</label>
                            <div class="nk-int-st">
                                <input type="text" name="destinasi" class="form-control input-sm" value="<?php echo $data['destinasi_paket'];?>">
                            </div>
                        </div>
                    </div>

                    <div class="form-example-int mg-t-15">
                        <div class="form-group">
                            <label>Durasi</label>
                            <div class="nk-int-st">
                                <input type="text" name="durasi" class="form-control input-sm" value="<?php echo $data['durasi_paket'];?>">
                            </div>
                        </div>
                    </div>

                    <div class="form-example-int mg-t-15">
                        <div class="form-group">
                            <label>Harga Mulai Dari</label>
                            <div class="nk-int-st">
                                <input type="text" name="harga" class="form-control input-sm" value="<?php echo $data['harga_paket'];?>">
                            </div>
                        </div>
                    </div>

                    <div class="form-example-int mg-t-15">
                        <div class="form-group">
                            <label>File PDF Itinerary</label>
                            <input type="file" name="pdf" class="form-control input-sm"><br>
                            <input type="hidden" name="pdf_old" value="<?php echo $data['file_pdf'];?>">
                            <a href="<?php echo $data['file_pdf'];?>"><?php echo $data['file_pdf'];?></a>
                        </div>
                    </div>

                    <div class="form-example-int mg-t-15">
                        <div class="form-group">

                            <img id="output" width="200px" src="<?php echo base_url()."assets_upload/paket_gambar/"; ?><?php echo $data['gambar_paket'];?>"><br>
                            <input type="hidden" name="foto_old" value="<?php echo $data['gambar_paket'];?>">
                            <label>Gambar</label>
                            <input type="file" class="form-control input-sm" name="foto" accept="image/*" onchange="loadFile(event)">
                            <script>
                                              var loadFile = function(event) {
                                                var reader = new FileReader();
                                                reader.onload = function(){
                                                  var output = document.getElementById('output');
                                                  output.src = reader.result;
                                              };
                                              reader.readAsDataURL(event.target.files[0]);
                                          };
                                      </script>

                        </div>
                    </div> 

                                <?php } ?>  
                    <div class="form-example-int mg-t-15">
                        <button class="btn btn-success notika-btn-success">Submit</button>
                    </div>
                    </form>
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