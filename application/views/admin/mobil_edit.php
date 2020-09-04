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
                                  <h2>Tambah Transportasi</h2>
                                  <p>Bus & Mobil</span></p>
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
                    <form enctype="multipart/form-data" action="<?php echo site_url('Mobil/edit_aksi');?>" method="POST">
                      <?php foreach ($mobil as $data){?>
                    <div class="form-example-int">
                        <div class="form-group">
                            <label>Kategori</label>
                            <div class="nk-int-st">
                                <select name="kategori" class="form-control input-sm">
                                    <?php if ($data['kategori_mobil'] == "bus") { ?>
                                    <option value="" selected disabled>Kategori</option>
                                    <option value="bus" selected>Bus</option>
                                    <option value="mobil">Mobil</option>
                                  <?php } ?>
                                  <?php if ($data['kategori_mobil'] == "mobil") { ?>
                                    <option value="" selected disabled>Kategori</option>
                                    <option value="bus" >Bus</option>
                                    <option value="mobil"selected>Mobil</option>
                                  <?php } ?>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="form-example-int mg-t-15">
                        <div class="form-group">
                            <label>Nama Kendaraan</label>
                            <div class="nk-int-st">
                                <input type="text" name="namakendaraan" class="form-control input-sm" placeholder="Nama Kendaraan" value="<?php echo $data['nama_mobil'];?>">
                            </div>
                        </div>
                    </div>

                    <div class="form-example-int mg-t-15">
                        <div class="form-group">
                            <label>Harga Kendaraan</label>
                            <div class="nk-int-st">
                                <input type="text" name="hargakendaraan" class="form-control input-sm" placeholder="Harga Kendaraan" value="<?php echo $data['harga_mobil'];?>">
                            </div>
                        </div>
                    </div>

                    <div class="form-example-int mg-t-15">
                        <div class="form-group">

                            <img id="output" width="200px" src="<?php echo base_url()."assets_upload/mobil_gambar/"; ?><?php echo $data['gambar_mobil'];?>"><br>
                            <label>Gambar</label>
                            <input type="hidden" name="foto_old" value="<?php echo $data['gambar_mobil'];?>">
                            <input type="hidden" name="id_mobil" value="<?php echo $data['id_mobil'];?>">
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