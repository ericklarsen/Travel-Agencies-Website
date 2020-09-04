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
    <script src="<?php echo base_url()?>assets_editor/tinymce/js/tinymce/tinymce.min.js"></script> 
    <script>
  tinymce.init({
    selector: '#mytextarea'
  });
  </script>
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
                                  <h2>Tambah Artikel</h2>
                                  <p>Berita - berita terbaru</span></p>
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
                    <form enctype="multipart/form-data" action="<?php echo site_url('Artikel/edit_aksi');?>" method="POST">
                    <?php foreach ($artikel as $data){?>
                    <div class="form-example-int mg-t-15">
                        <div class="form-group">
                            <label>Judul Artikel</label>
                            <div class="nk-int-st">
                                <input type="text" name="judul" class="form-control input-sm" placeholder="Judul Artikel" value="<?php echo $data['judul_artikel'];?>">
                            </div>
                        </div>
                    </div>

                    <div class="form-example-int mg-t-15">
                        <div class="form-group">
                            <label>Ringkasan Awal Artikel</label>
                            <textarea name='ringkasan' class="form-control" ><?php echo $data['ringkasan_artikel'];?></textarea>
                            
                        </div>
                    </div>

                    <div class="form-example-int mg-t-15">
                        <div class="form-group">
                            <label>Isi Artikel</label>
                            <textarea name='isi' class="form-control" id="mytextarea"><?php echo $data['isi_artikel'];?></textarea>
                            
                        </div>
                    </div>

                    <div class="form-example-int mg-t-15">
                        <div class="form-group">
                            <input type="hidden" name="foto_old" value="<?php echo $data['gambar_artikel'];?>">
                            <input type="hidden" name="id_artikel" value="<?php echo $data['id_artikel'];?>">
                            <img id="output" width="200px" src="<?php echo base_url()."assets_upload/artikel_gambar/"; ?><?php echo $data['gambar_artikel'];?>"><br><label>Gambar Artikel</label>
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
                    <div class="form-example-int mg-t-15">
                        <div class="form-group">
                            <label>Tanggal Upload</label>
                            <input type="date" name="tanggal" class="form-control input-sm" value="<?php echo $data['tanggal'];?>">
                            
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
<!-- Script -->
 </body>
<?php
$this->load->view('admin/css/footer');
?>
</body>

</html>