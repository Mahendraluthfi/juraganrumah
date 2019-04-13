            <div class="slider-area">
            <div class="slider">
                <div id="bg-slider" class="owl-carousel owl-theme">

                    <div class="item"><img src="<?php echo base_url() ?>assets/img/slide1/slider-image-1.jpg" alt="GTA V"></div>
                    <div class="item"><img src="<?php echo base_url() ?>assets/img/slide1/slider-image-2.jpg" alt="The Last of us"></div>
                    <div class="item"><img src="<?php echo base_url() ?>assets/img/slide1/slider-image-1.jpg" alt="GTA V"></div>

                </div>
            </div>
            <div class="slider-content">
                <div class="row">
                    <div class="col-lg-10 col-lg-offset-1 col-md-10  col-sm-12">
                        <h2>PENCARIAN PROPERTI BEGITU MUDAH</h2>
                        <p>Begitu Mudahnya Mendapatkan Properti Sesuai Keinginan, Sebab kini semuanya berada dalam genggaman Anda!</p>
                        <div class="search-form wow pulse" data-wow-delay="0.8s">

                            <form action="" class="form-inline">
                                <div class="form-group">
                                    <input type="text" class="form-control" placeholder="Key word">
                                </div>
                                <div class="form-group">                                   
                                    <select id="prov" name="provinsi" class="selectpicker form-control" data-live-search="true" data-live-search-style="begins" title="Pilih Kota Anda">
                                        <option value="" selected="Provinsi">Provinsi</option>
                                        <?php foreach ($prov as $dprov) { ?>                          
                                        <option value="<?php echo $dprov->id_prov ?>"><?php echo $dprov->nama_prov ?></option>
                                        <?php } ?>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <select name="kabkot" id="kabkot" class="kabkot form-control" style="width: 100%;" >
                                         <option value="" selected="Kota / Kab">Kota / Kab</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <select name="kecamatan" id="kec" class="kec form-control" style="width: 100%;" >
                                        <option value="" selected="Kecamatan">Kecamatan</option>
                                    </select>
                                </div> 
                                <button class="btn search-btn" type="submit"><i class="fa fa-search"></i></button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
		
		<!-- property area -->
        <div class="content-area home-area-1 recent-property" style="background-color: #FCFCFC; padding-bottom: 55px;">
            <div class="container">
                <div class="row">
                    <br>
                    <br>
                    <br>
                    <div class="col-md-10 col-md-offset-1 col-sm-12 text-center page-title">
                        <!-- /.feature title -->
                        <h2>PENAWARAN TERBAIK</h2>
                        <p>Lupakan habiskan banyak waktu tuk mencari dan menemukan properti idaman Anda. Sebab kini semuanya berada dalam genggaman Anda. . </p>
                    </div>
                </div>

                <div class="row">
                    <div class="proerty-th">

                    <?php foreach($produk as $su){ ?>
                        <div class="col-sm-6 col-md-3 p0">
                            <div class="box-two proerty-item">
                                <div class="item-thumb">
                                    <a href="<?php echo site_url() ?>properti_detail?id_produk=<?php echo $su->id_produk?>&nama_produk=<?php echo $su->nama_produk?>"><img src="assets/backend/fotoproduk/<?php echo $su->file ?>"></a>
                                </div>
                                <div class="item-entry overflow">
                                    <h5><a href="<?php echo site_url() ?>properti_detail"><?php echo $su->nama_produk ?></a></h5>
                                    <div class="dot-hr"></div>
                                    <span class="pull-left"><b>Luas :</b> <?php echo $su->luas_total ?> M</span>
                                    <span class="proerty-price pull-right">Rp <?php echo $su->harga ?></span>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6 col-md-3 p0">
                            <div class="box-tree more-proerty text-center">
                                <div class="item-tree-icon">
                                    <i class="fa fa-th"></i>
                                </div>
                                <div class="more-entry overflow">
                                    <h5><a href="<?php echo site_url() ?>properti" >TIDAK BISA MEMUTUSKAN? </a></h5>
                                    <h5 class="tree-sub-ttl">Tampilkan semua properti</h5>
                                    <button class="btn border-btn more-black" onclick=' window.open("<?php echo site_url() ?>properti")'>Semua properti</button>
                                </div>
                            </div>
                        </div>
                    <?php ;}
                    if(empty($produk)){ ?>
                                        <div class="col-md-12 col-xs-12">
                                            <div class="error-template">
                                                <h1>
                                                    Oops!</h1>
                                                <h2>
                                                    404 Not Found</h2>
                                                <div class="error-details">
                                                    Maaf, telah terjadi kesalahan, halaman yang Diminta tidak ditemukan!
                                                </div>
                                                <div class="error-actions">
                                                    <a href="mailto:info@juraganrumah.net" class="btn btn-success"><span class="fa fa-envelope fa-2x"></span> Kontak Support </a>
                                                </div>
                                            </div>
                                        </div>
                                <?php } ?>

                    </div>
                </div>
            </div>
        </div>
		
		<!--Welcome area -->
        <div class="Welcome-area">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 Welcome-entry  col-sm-12">
                        <div class="col-md-5 col-md-offset-2 col-sm-6 col-xs-12">
                            <div class="welcome_text wow fadeInLeft" data-wow-delay="0.3s" data-wow-offset="100">
                                <div class="row">
                                    <div class="col-md-10 col-md-offset-1 col-sm-12 text-center page-title">
                                        <!-- /.feature title -->
                                        <h2><img style="margin-top:-5px;padding:5px" src="assets/img/juragan_rumah_logo.png" alt=""></h2>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-5 col-sm-6 col-xs-12">
                            <div  class="welcome_services wow fadeInRight" data-wow-delay="0.3s" data-wow-offset="100">
                                <div class="row">
                                    <div class="col-xs-6 m-padding">
                                        <div class="welcome-estate">
                                            <div class="welcome-icon">
                                                <i class="pe-7s-home pe-4x"></i>
                                            </div>
                                            <h3>PROPERTI APA PUN</h3><!--Link Ke list Property-->
                                        </div>
                                    </div>
                                    <div class="col-xs-6 m-padding">
                                        <div class="welcome-estate">
                                            <div class="welcome-icon">
                                                <i class="pe-7s-users pe-4x"></i>
                                            </div>
                                            <h3>Lebih banyak Developer</h3><!--Link ke list Developer-->
                                        </div>
                                    </div>


                                    <div class="col-xs-12 text-center">
                                        <i class="welcome-circle"></i>
                                    </div>

                                    <div class="col-xs-6 m-padding">
                                        <div class="welcome-estate">
                                            <div class="welcome-icon">
                                                <i class="pe-7s-notebook pe-4x"></i>
                                            </div>
                                            <h3>Mudah digunakan</h3>
                                        </div>
                                    </div>
                                    <div class="col-xs-6 m-padding">
                                        <div class="welcome-estate">
                                            <div class="welcome-icon">
                                                <i class="pe-7s-help2 pe-4x"></i>
                                            </div>
                                            <h3>Bantuan apa saja </h3>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
		
		<!--TESTIMONIALS -->
        <div class="testimonial-area recent-property" style="background-color: #FCFCFC; padding-bottom: 15px;">
            <div class="container">

                <div class="row">
                    <div class="row testimonial">
                        <div class="col-md-12">
                            <div id="testimonial-slider">
                                <div class="item">
                                    <div class="client-text">
                                    <h4 class="text-center"><strong>MUDAH</strong></h4>                                
                                        <p>Lupakan habiskan banyak waktu tuk mencari dan menemukan properti idaman Anda. Sebab kini semuanya berada dalam genggaman Anda.</p>
                                    </div>
                                    <div class="client-face wow fadeInRight" data-wow-delay=".9s"> 
                                        <img src="assets/img/icons-okhand.png" alt="">
                                    </div>
                                </div>
                                <div class="item">
                                    <div class="client-text">
                                    <h4 class="text-center"><strong>NYAMAN</strong></h4>                               
                                        <p>Jangan terburu-buru memutuskan, silahkan hubungi saja dulu Kami untuk Konsultasi dulu. Gratis kok dan Kami siap melayani kapanpun Anda butuhkan.</p>
                                    </div>
                                    <div class="client-face">
                                        <img src="assets/img/icons-callfemale.png" alt="">
                                    </div>
                                </div>
                                <div class="item">
                                    <div class="client-text">  
                                    <h4 class="text-center"><strong>TERPERCAYA</strong></h4>                              
                                        <p>Pastikan Anda telah mengetahui dengan detail untuk tiap properti yang menjadi pilihan Anda. Silahkan survei langsung saja, petugas lapangan Kami siap mendampingi Anda selalu.</p>
                                    </div>
                                    <div class="client-face">
                                        <img src="assets/img/icons-trust.png" alt="">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
		
		<!-- Count area -->
        <div class="count-area">
            <div class="container">
                <div class="row">
                    <div class="col-md-10 col-md-offset-1 col-sm-12 text-center page-title">
                        <!-- /.feature title -->
                        <h2>ANDA BISA PERCAYA KAMI</h2> 
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12 col-xs-12 percent-blocks m-main" data-waypoint-scroll="true">
                        <div class="row">
                            <div class="col-sm-3 col-xs-6">
                                <div class="count-item">
                                    <div class="count-item-circle">
                                        <span class="pe-7s-users"></span>
                                    </div>
                                    <div class="chart" data-percent="5000">
                                        <h2 class="percent" id="counter">0</h2>
                                        <h5>KEPUASAN PELANGGAN </h5>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-3 col-xs-6">
                                <div class="count-item">
                                    <div class="count-item-circle">
                                        <span class="pe-7s-home"></span>
                                    </div>
                                    <div class="chart" data-percent="12000">
                                        <h2 class="percent" id="counter1">0</h2>
                                        <h5>STOK PROPERTI</h5>
                                    </div>
                                </div> 
                            </div> 
                            <div class="col-sm-3 col-xs-6">
                                <div class="count-item">
                                    <div class="count-item-circle">
                                        <span class="pe-7s-flag"></span>
                                    </div>
                                    <div class="chart" data-percent="120">
                                        <h2 class="percent" id="counter2">0</h2>
                                        <h5>KOTA TERDAFTAR</h5>
                                    </div>
                                </div> 
                            </div> 
                            <div class="col-sm-3 col-xs-6">
                                <div class="count-item">
                                    <div class="count-item-circle">
                                        <span class="pe-7s-graph2"></span>
                                    </div>
                                    <div class="chart" data-percent="5000">
                                        <h2 class="percent"  id="counter3">5000</h2>
                                        <h5>PENGEMBANG PROPERTI</h5>
                                    </div>
                                </div> 

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
		
		<!-- boy-sale area -->
        <div class="boy-sale-area">
            <div class="container">
                <div class="row">

                            <!-- fORM JANJI SERVEI-->
                        <div class="register-area" style="background-color: rgb(249, 249, 249);">
                            <div class="container">
                            <div class="col-md-12 col-xs-12 register-blocks">
                                <h2 style="color:grey">Buat janji survei </h2> 
                                <form action="" method="post">
                                <div class="col-md-3"></div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label style="color:grey" for="produk">Produk</label>
                                        <input type="text" name="id_produk" class="form-control" id="produk" required="required">
                                    </div>
    								<div class="form-group">
                                        <label style="color:grey" for="tgl_survei">Tanggal Survei</label>
                                        <input type="date"  name="tgl_survei" class="form-control" id="tgl_survei" required="required">
                                    </div>
    								<div class="form-group">
                                        <label style="color:grey" for="jam_survei">Jam Survei</label>
                                        <input type="time" name="jam_survei" class="form-control" id="jam_survei" required="required">
                                    </div>
                                <?php 
                                $buyer =  $this->session->userdata('ses_nama');
                                if($buyer){ ?>
                                    <div class="text-center">
                                        <button type="submit" class="btn btn-warning">Kirimkan</button>
                                    </div>
                                </form>
                                <?php }else { ?>
                                    <div class="text-center">
                                        <a href="<?php echo site_url().'register_buyer'?>" class="btn btn-warning">Kirimkan</a>
                                    </div>
                                <?php } ?>
                                </div>
                                <div class="col-md-3"></div>
                                    </div>  
                            </div> 
                     </div> 
                    
                </div>
            </div>
        </div>
		
		