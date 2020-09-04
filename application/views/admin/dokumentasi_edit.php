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
                    <form enctype="multipart/form-data" action="<?php echo site_url('Dokumentasi/edit_aksi');?>" method="POST">
                    <?php foreach ($dokumentasi as $data){?>
                    <div class="form-example-int mg-t-15">
                        <div class="form-group">
                            <label>Judul Perjalanan</label>
                            <div class="nk-int-st">
                                <input type="text" name="judul" class="form-control input-sm" placeholder="Judul Perjalanan" value="<?php echo $data['judul_dokumentasi'];?>">
                            </div>
                        </div>
                    </div>

                    <div class="form-example-int mg-t-15">
                        <div class="form-group">
                            <label>Deskripsi</label>
                            <div class="nk-int-st">
                              <textarea class="form-control input-sm" cols="50" rows="10" name="deskripsi" placeholder="Deskripsi"><?php echo $data['deskripsi_dokumentasi'];?></textarea>
                            </div>
                        </div>
                    </div>

                    
                    <div class="form-example-int mg-t-15">
                        <div class="form-group">

                            <img id="output" width="200px" src="<?php echo base_url()."assets_upload/dokumentasi_gambar/"; ?><?php echo $data['gambar_dokumentasi'];?>"><br>
                            <label>Gambar</label>
                            <input type="hidden" name="id_dokumentasi" value="<?php echo $data['id_dokumentasi'];?>">
                            <input type="hidden" name="foto_old" value="<?php echo $data['gambar_dokumentasi'];?>">
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