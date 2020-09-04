<!doctype html>
<html class="no-js" lang="">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Admin</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
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
                                  <h2>Edit Voucher Hotel</h2>
                                  <p>Hotel Seluruh Indonesia</span></p>
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
                    <form enctype="multipart/form-data" action="<?php echo site_url('Hotel/edit_aksi');?>" method="POST">
                      <?php foreach ($hotel as $data) {
                        $data2 = $this->Hotel_model->ambil_semua_kamar($data['id_hotel']); 
                        $data3 = $this->Hotel_model->ambil_semua_kamar($data['id_hotel']);?>
                    <div class="form-example-int mg-t-15">
                        <div class="form-group">
                            <label>Nama Hotel</label>
                            <div class="nk-int-st">
                                <input type="text" name="namahotel" class="form-control input-sm" placeholder="Nama Hotel" value="<?php echo $data['nama_hotel']; ?>">
                            </div>
                        </div>
                    </div>

                    <div class="form-example-int mg-t-15">
                        <div class="form-group">
                            <label>Daerah Hotel</label>
                            <div class="nk-int-st">
                                <input type="text" name="daerahhotel" class="form-control input-sm" placeholder="Daerah Hotel" value="<?php echo $data['daerah_hotel']; ?>">
                            </div>
                        </div>
                    </div>

                    <div class="form-example-int mg-t-15">
                        <div class="form-group">
                            <button type="button" id="btn-tambah-form" class="btn btn-success notika-btn-success">Tambah Kamar</button>
                            <button type="button" id="btn-reset-form" class="btn btn-success notika-btn-success">Reset Form</button>
                        </div>
                    </div>
                    <?php foreach ($data2 as $data2) {?>
                    <div class="form-example-int mg-t-15">
                        <div class="form-group">
                            <label>Tipe Kamar</label>
                            <div class="nk-int-st">
                                <input type="text" name="tkamar[]" class="form-control input-sm" placeholder="Tipe Kamar" value="<?php echo $data2['nama_tkamar']; ?>">
                            </div>
                        </div>
                    </div>
                    <input type="hidden" name="id_tkamar[]" class="form-control input-sm" placeholder="Tipe Kamar" value="<?php echo $data2['id_tkamar']; ?>">
                    <div class="form-example-int mg-t-15">
                        <div class="form-group">
                            <label>Harga Per Malam</label>
                            <div class="nk-int-st">
                                <input type="text" name="hargakamar[]" class="form-control input-sm" placeholder="Harga Per Malam" value="<?php echo $data2['harga_tkamar']; ?>">
                            </div>
                        </div>
                    </div>
                  <?php } ?>
                    <div id="insert-form"></div>
                    <div class="form-example-int mg-t-15">
                        <div class="form-group">

                            <input type="hidden" name="foto_old" value="<?php echo $data['gambar_hotel'];?>">
                            <input type="hidden" name="id_hotel" value="<?php echo $data['id_hotel'];?>">
                            <img id="output" width="200px" src="<?php echo base_url()."assets_upload/hotel_gambar/"; ?><?php echo $data['gambar_hotel'];?>"><br><label>Gambar Hotel</label>
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

                    <input type="hidden" id="jumlah-form" value="1">
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Data Table area End-->
<!-- Start Footer area-->
<script>
  $(document).ready(function(){ // Ketika halaman sudah diload dan siap
    $("#btn-tambah-form").click(function(){ // Ketika tombol Tambah Data Form di klik
      var jumlah = parseInt($("#jumlah-form").val()); // Ambil jumlah data form pada textbox jumlah-form
      var nextform = jumlah + 1; // Tambah 1 untuk jumlah form nya
      
      // Kita akan menambahkan form dengan menggunakan append
      // pada sebuah tag div yg kita beri id insert-form
      $("#insert-form").append("<br><b>Tipe Tambahan :</b>" +
        "<div class='form-example-int mg-t-15'>"+
                        "<div class='form-group'>"+
                            "<label>Tipe Kamar</label>"+
                            "<div class='nk-int-st'>"+
                                "<input type='text' name='tkamar2[]' class='form-control input-sm' placeholder='Tipe Kamar'>"+
                            "</div>"+
                        "</div>"+
                    "</div>"+

                    "<div class='form-example-int mg-t-15'>"+
                        "<div class='form-group'>"+
                            "<label>Harga Per Malam</label>"+
                            "<div class='nk-int-st'>"+
                                "<input type='text' name='hargakamar2[]' class='form-control input-sm' placeholder='Harga Per Malam'>"+
                            "</div>"+
                        "</div>"+
                    "</div>");
      
      $("#jumlah-form").val(nextform); // Ubah value textbox jumlah-form dengan variabel nextform
    });
    
    // Buat fungsi untuk mereset form ke semula
    $("#btn-reset-form").click(function(){
      $("#insert-form").html(""); // Kita kosongkan isi dari div insert-form
      $("#jumlah-form").val("1"); // Ubah kembali value jumlah form menjadi 1
    });
  });
  </script>
<?php
$this->load->view('admin/css/footer');
?>
</body>

</html>