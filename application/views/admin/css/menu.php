<!-- Start Header Top Area -->
    <div class="header-top-area">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                    <div class="logo-area">
                        <a href="#"><img src="img/logo/logo.png" alt="" /></a>
                    </div>
                </div>
                <div class="col-lg-8 col-md-8 col-sm-12 col-xs-12">
                    <div class="header-top-menu">
                        <ul class="nav navbar-nav notika-top-nav">
                           
                            <li class="nav-item"><a href="<?php echo site_url('Admin/logout'); ?>" class="nav-link dropdown-toggle"><span>Log out</span></a>
                                
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Header Top Area -->
<!-- Mobile Menu start -->
    <div class="mobile-menu-area">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="mobile-menu">
                        <nav id="dropdown">
                            <ul class="mobile-menu-nav">
                                <li><a data-toggle="collapse" data-target="#demodepart" href="#">Tables</a>
                                    <ul id="demodepart" class="collapse dropdown-header-top">
                                        <li><a href="normal-table.html">Paket Wisata</a></li>
                                        <li><a href="data-table.html">Trans</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Mobile Menu end -->
    <!-- Main Menu area start-->
    <div class="main-menu-area mg-tb-40">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    
                    <div class="tab-content custom-menu-content">
                        <div id="Tables" class="tab-pane active notika-tab-menu-bg animated flipInX">
                            <ul class="notika-main-menu-dropdown">
                                <li><a href="<?php echo site_url('Paket'); ?>">Paket Wisata</a>
                                </li>
                                <li><a href="<?php echo site_url('Mobil'); ?>">Transportasi</a>
                                </li>
                                <li><a href="<?php echo site_url('Artikel'); ?>">Artikel</a>
                                </li>
                                <li><a href="<?php echo site_url('Hotel'); ?>">Voucher Hotel</a>
                                </li>
                                <li><a href="<?php echo site_url('Promo'); ?>">Promo & Destinasi Populer</a>
                                </li>
                                <li><a href="<?php echo site_url('Dokumentasi'); ?>">Dokumentasi Perjalanan</a>
                                </li>
                                <li><a href="<?php echo site_url('Admin/edit/'.$_SESSION["username"]); ?>">Pengaturan Akun</a>
                                </li>
                                <li><a href="<?php echo site_url('Pesan'); ?>">Pesan User</a>
                                </li>
                                <li><a href="<?php echo site_url('Admin/ganti_bg'); ?>">Ganti Background Website</a>
                                </li>
                                <li><a href="<?php echo site_url('Home'); ?>" target="_blank" rel="noopener noreferrer">Kembali ke Website</a>
                                </li>
                                
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Main Menu area End-->