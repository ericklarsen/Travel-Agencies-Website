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
                                  <h2>Pengaturan Akun</h2>
                                  <p>Ubah Password Admin</span></p>
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
                    <form enctype="multipart/form-data" action="<?php echo site_url('Admin/edit_aksi');?>" method="POST">
                      <?php foreach ($admin as $data){?>
                    <div class="form-example-int mg-t-15">
                        <div class="form-group">
                            <label>Username</label>
                            <div class="nk-int-st">
                                <?php echo $data['username'];?>
                                </div>
                        </div>
                    </div>

                    <div class="form-example-int mg-t-15">
                        <div class="form-group">
                            <label>Password</label>
                            <div class="nk-int-st">
                              <input type="hidden" name="username" value="<?php echo $data['username'];?>">
                                <input type="password" name="password" class="form-control input-sm" placeholder="Harga Kendaraan" value="<?php echo $data['password'];?>">
                            </div>
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