            <div class="slider-area">
            <div class="slider">
                <div id="bg-slider" class="owl-carousel owl-theme">
                    <div class="item"><img src="<?php echo base_url() ?>assets/img/Baner_Beranda/photo6170283183350851753.jpg" alt="Juragan Rumah"></div>
                    <div class="item"><img src="<?php echo base_url() ?>assets/img/Baner_Beranda/photo6170283183350851754.jpg" alt="Juragan Rumah"></div>
                    <div class="item"><img src="<?php echo base_url() ?>assets/img/Baner_Beranda/photo6170283183350851755.jpg" alt="Juragan Rumah"></div>
                    <div class="item"><img src="<?php echo base_url() ?>assets/img/Baner_Beranda/photo6170283183350851756.jpg" alt="Juragan Rumah"></div>
                    <div class="item"><img src="<?php echo base_url() ?>assets/img/Baner_Beranda/photo6170283183350851757.jpg" alt="Juragan Rumah"></div>
                    <div class="item"><img src="<?php echo base_url() ?>assets/img/Baner_Beranda/photo6170283183350851758.jpg" alt="Juragan Rumah"></div>
                    <div class="item"><img src="<?php echo base_url() ?>assets/img/Baner_Beranda/photo6170445133682681981.jpg" alt="Juragan Rumah"></div>
                </div>
            </div>

            <div class="slider-content">
                <div class="row">
                    <div class="col-lg-10 col-lg-offset-1 col-md-10  col-sm-12">
                        <div class="search-form wow pulse" data-wow-delay="0.8s">
                            <form action="<?php echo site_url() ?>properti" method="post" class="form-inline">
                                <div class="form-group">
                                    <input type="text" class="form-control" name="nama_produk" placeholder="Pencarian Properti">
                                </div>
                                <div class="form-group">                                   
                                    <select id="prov" name="provinsi" class="selectpicker form-control" data-live-search="true" data-live-search-style="begins" title="Pilih Provinsi Anda">
                                        <option value="" selected="Provinsi">Provinsi</option>
                                        <?php foreach ($prov as $dprov) { ?>                          
                                        <option value="<?php echo $dprov->id_prov ?>"><?php echo $dprov->nama_prov ?></option>\
                                        <?php } ?>
                                    </select>
                                </div>

                                <div class="form-group">
                                    <select name="kabupaten" id="kabkot" class="kabkot form-control" data-live-search="true" data-live-search-style="begins" title="Pilih Kota Anda" style="width: 100%;" >
                                         <option value="" selected="Kota / Kab">Kota / Kab</option>
                                    </select>
                                </div>

                                <div class="form-group">
                                    <select name="kecamatan" id="kec" class="kec form-control" style="width: 100%;" >
                                        <option value="" selected="Kecamatan">Kecamatan</option>
                                    </select>
                                </div> 

                                <button class="btn search-btn" name="search_beranda" value="submit" type="submit"><i class="fa "></i></button>
                            </form>

                        </div>
                    </div>
                </div>
            </div>
        </div>
		
        <!--Logo Developer Logo Developer area -->
            <div class="container" style="margin-top: 100px; margin-bottom : 55px">
              <h2 class="list-group-item-text text-center" style="margin-bottom : 50px">MITRA DEVELOPER<hr></h2>
               <section class="customer-logos slider">
                  <div class="slide">
                    <a href="#one!"><img class="size" title="" alt="" src="<?php echo base_url() ?>assets/img/logo_developer/738266301.png"></a>
                  </div>
                  <div class="slide">
                    <a href="#two!"><img class="size" title="" alt="" src="<?php echo base_url() ?>assets/img/logo_developer/IMG-20180801-WA0051.jpg"></a>
                  </div>
                  <div class="slide">
                     <a  href="#three!"><img class="size" title="" alt="" src="<?php echo base_url() ?>assets/img/logo_developer/puntan1.png"></a>
                  </div>
                  <div class="slide">
                    <img title="LOGO" alt="MITRA DEVELOPER" src=""></div>
                  <div class="slide">
                    <img title="LOGO" alt="MITRA DEVELOPER" src=""></div>
                  <div class="slide">
                    <img title="LOGO" alt="MITRA DEVELOPER" src=""></div>
                  <div class="slide">
                    <img title="LOGO" alt="MITRA DEVELOPER" src=""></div>
                  <div class="slide">
                    <img title="LOGO" alt="MITRA DEVELOPER" src=""></div>
               </section>
            </div>

		<!-- property area PENAWARAN TERBAIK -->
        <div class="content-area home-area-1 recent-property" style="background-color: #FCFCFC; padding-bottom: 55px;">
            <div class="container">
                <div class="row">
                    <div class="col-md-10 col-md-offset-1 col-sm-12 text-center page-title">
                        <!-- /.feature title -->   
                        <blockquote><cite><span class="text-primary"><i class="pe-7s-notebook pe-4x"></i></span>
                            <h4 class="list-group-item-text">Lupakan habiskan banyak waktu tuk mencari dan menemukan properti idaman Anda. Sebab kini semuanya berada dalam genggaman Anda</h4>
                        </cite></blockquote>
                        <h2 class="list-group-item-text">PENAWARAN TERBAIK</h2>
                        <br>
                    </div>
                </div>
                <div class="row">
                    <div class="proerty-th">
                        <?php foreach($produk as $su){ ?>
                            <div class="col-sm-6 col-md-4 p0">
                                <div class="box-two proerty-item">
                                    <div class="item-thumb">
                                        <a href="<?php echo site_url() ?>properti_detail?id_produk=<?php echo $su->id_produk?>&nama_produk=<?php echo $su->nama_produk?>"><img src="assets/backend/fotoproduk/<?php echo $su->file ?>"></a>
                                    </div>
                                    <div class="proerty-th proerty-item item-entry">
                                        <h5><a href="<?php echo site_url() ?>properti_detail?id_produk=<?php echo $su->id_produk?>&nama_produk=<?php echo $su->nama_produk?>"><?php echo substr($su->nama_produk, 0, 63).'...' ?></a></h5>
                                        <div class="dot-hr"></div>
                                          <ul class="card-info dflex">
                                            <li>
                                              <h4> &nbsp;&nbsp;<i class="pe-7s-map"></i></h4>
                                              <div class="text-default">
                                                <?php echo $su->luas_tanah ?> M &nbsp;&nbsp;
                                              </div>
                                            </li>
                                            <li>
                                              <h4> &nbsp;&nbsp;<i class="pe-7s-home"></i></h4>
                                              <div class="text-default"><?php echo $su->luas_bangunan ?> M &nbsp;&nbsp;
                                              </div>
                                            </li>
                                            <li>
                                              <h4> &nbsp;&nbsp;<i class="pe-7s-ribbon"></i></h4>
                                              <div class="text-default">
                                                <?php echo $su->sertifikat ?> &nbsp;&nbsp;
                                                  
                                              </div>
                                            </li>
                                            <li class="text-center">
                                            <h4 class="text-center" ><i class="pe-7s-cash"></i></h4>
                                              <div class="text-warning strong ">
                                                 <strike><?php echo number_format($su->harga) ?></strike>
                                                 <?php echo number_format($su->harga_promo) ?>
                                              </div>
                                            </li>
                                          </ul>
                                    </div>
                                </div>
                            </div>
                        <?php ;}
                        if(empty($produk)){ ?>
                        <div class="col-md-12 col-xs-12">
                            <div class="error-template">
                                <h1>Maaf!</h1>
                                <h2>Sepertinya data yang anda Cari Belum Tersedia..</h2>
                                 <div class="error-actions">
                                <div class="error-actions">
                                    <a href="mailto:info@juraganrumah.net" class="btn btn-success"><span class="fa fa-envelope fa-2x"></span> Kontak Support </a>
                                </div>
                            </div>
                        </div>
                        <?php }else{ ?>
                        <div class="col-sm-6 col-md-4 p0">
                            <div class="box-tree more-proerty text-center">
                                <br>
                                <br>
                                <br>
                                <br>
                                <div class="more-entry overflow">
                                    <h5><a href="<?php echo site_url() ?>properti" >Selengkapnya</a></h5>
                                    <button class="btn border-btn more-black" onclick=' window.open("<?php echo site_url() ?>properti")'>Semua properti Promo</button>
                                </div>
                                <div class="item-tree-icon-beranda">
                                    <i class="fa fa-angle-down"></i>
                                </div>
                            </div>
                        </div>
                    <?php } ?>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- property area Listing RUMAH Subsidi -->
    <?php if(!empty($produk2)){ ?>
        <div class="content-area home-area-1 recent-property" style="background-color: #FCFCFC; padding-bottom: 55px;">
            <div class="container">
                <div class="row">
                    <div class="col-md-10 col-md-offset-1 col-sm-12 text-center page-title">
                        <!-- /.feature title -->
                        <h2>LISTING PERUMAHAN SUBSIDI</h2>
                        <br>
                    </div>
                </div>
                <div class="row">
                    <div class="proerty-th">
                    <?php ;} ?>
                        <?php foreach($produk2 as $su){ ?>
                            <div class="col-sm-6 col-md-3 p0">
                                <div class="box-two proerty-item">
                                    <div class="item-thumb">
                                        <a href="<?php echo site_url() ?>properti_detail?id_produk=<?php echo $su->id_produk?>&nama_produk=<?php echo $su->nama_produk?>"><img src="assets/backend/fotoproduk/<?php echo $su->file ?>"></a>
                                    </div>
                                    <div class="proerty-th proerty-item item-entry">
                                        <h5><a href="<?php echo site_url() ?>properti_detail?id_produk=<?php echo $su->id_produk?>&nama_produk=<?php echo $su->nama_produk?>"><?php echo substr($su->nama_produk, 0, 63).'...' ?></a></h5>
                                        <div class="dot-hr"></div>
                                          <ul class="card-info dflex">
                                            <li>
                                              <h4> &nbsp;&nbsp;<i class="pe-7s-map"></i></h4>
                                              <div class="text-default">
                                                <?php echo $su->luas_tanah ?> M &nbsp;&nbsp;
                                              </div>
                                            </li>
                                            <li>
                                              <h4> &nbsp;&nbsp;<i class="pe-7s-home"></i></h4>
                                              <div class="text-default"><?php echo $su->luas_bangunan ?> M &nbsp;&nbsp;
                                              </div>
                                            </li>
                                            <li>
                                              <h4> &nbsp;&nbsp;<i class="pe-7s-ribbon"></i></h4>
                                              <div class="text-default">
                                                <?php echo $su->sertifikat ?> &nbsp;&nbsp;
                                                  
                                              </div>
                                            </li>
                                            <li class="text-center">
                                              <h4 class="text-center" ><i class="pe-7s-cash"></i></h4>
                                              <div class="text-warning strong ">
                                                 &nbsp;<?php echo number_format($su->harga) ?>
                                              </div>
                                            </li>
                                          </ul>
                                    </div>
                                </div>
                            </div>
                        <?php ;}
                        if(!empty($produk2)){ ?>
                        <div class="col-sm-6 col-md-3 p0">
                            <div class="box-tree more-proerty text-center">
                                <br>
                                <br>
                                <br>
                                <br>
                                <div class="more-entry overflow">
                                    <h5><a href="<?php echo site_url() ?>properti_rumah_subsidi" >Selengkapnya </a></h5>
                                    <button class="btn border-btn more-black" onclick=' window.open("<?php echo site_url() ?>properti_rumah_subsidi")'>Semua Rumah Subsidi</button>
                                </div>
                                <div class="item-tree-icon-beranda">
                                    <i class="fa fa-angle-down"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
<?php } ?>


    <!-- property area Listing Rumah -->
        <div class="content-area home-area-1 recent-property" style="background-color: #FCFCFC; padding-bottom: 55px;">
            <div class="container">
                <div class="row">
                    <div class="col-md-10 col-md-offset-1 col-sm-12 text-center page-title">
                        <!-- /.feature title -->
                        <h2>LISTING RUMAH</h2>
                        <br>
                    </div>
                </div>
                <div class="row">
                    <div class="proerty-th">
                        <?php foreach($produk1 as $su){ ?>
                            <div class="col-sm-6 col-md-3 p0">
                                <div class="box-two proerty-item">
                                    <div class="item-thumb">
                                        <a href="<?php echo site_url() ?>properti_detail?id_produk=<?php echo $su->id_produk?>&nama_produk=<?php echo $su->nama_produk?>"><img src="assets/backend/fotoproduk/<?php echo $su->file ?>"></a>
                                    </div>
                                    <div class="proerty-th proerty-item item-entry">
                                        <h6><a href="<?php echo site_url() ?>properti_detail?id_produk=<?php echo $su->id_produk?>&nama_produk=<?php echo $su->nama_produk?>"><?php echo substr($su->nama_produk, 0, 63).'...' ?></a></h6>
                                        <div class="dot-hr"></div>
                                          <ul class="card-info dflex">
                                            <li>
                                              <h4> &nbsp;&nbsp;<i class="pe-7s-map"></i></h4>
                                              <div class="text-default">
                                                <?php echo $su->luas_tanah ?> M &nbsp;
                                              </div>
                                            </li>
                                            <li>
                                              <h4> &nbsp;&nbsp;<i class="pe-7s-home"></i></h4>
                                              <div class="text-default"><?php echo $su->luas_bangunan ?> M &nbsp;
                                              </div>
                                            </li>
                                            <li>
                                              <h4> &nbsp;&nbsp;<i class="pe-7s-ribbon"></i></h4>
                                              <div class="text-default">
                                                <?php echo $su->sertifikat ?> &nbsp;
                                                  
                                              </div>
                                            </li>
                                            <li>
                                              <h4 class="text-center" ><i class="pe-7s-cash"></i></h4>
                                              <div class="text-warning strong ">
                                                 <?php echo number_format($su->harga) ?>
                                              </div>
                                            </li>
                                          </ul>
                                    </div>
                                </div>
                            </div>
                        <?php ;}
                        if(!empty($produk1)){ ?>
                        <div class="col-sm-6 col-md-3 p0">
                            <div class="box-tree more-proerty text-center">
                                <br>
                                <br>
                                <br>
                                <br>
                                <div class="more-entry overflow">
                                    <h5><a href="<?php echo site_url() ?>properti_rumah" >Selengkapnya </a></h5>
                                    <button class="btn border-btn more-black" onclick=' window.open("<?php echo site_url() ?>properti_rumah")'>Semua Rumah</button>
                                </div>
                                <div class="item-tree-icon-beranda">
                                    <i class="fa fa-angle-down"></i>
                                </div>
                            </div>
                        </div>
                        <?php } ?>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <!-- property area Listing Kost -->
    <?php if(!empty($produk3)){ ?>
        <div class="content-area home-area-1 recent-property" style="background-color: #FCFCFC; padding-bottom: 55px;">
            <div class="container">
                <div class="row">
                    <div class="col-md-10 col-md-offset-1 col-sm-12 text-center page-title">
                        <!-- /.feature title -->
                        <h2>LISTING RUMAH KOST</h2>
                        <br>
                    </div>
                </div>
                <div class="row">
                    <div class="proerty-th">
                    <?php ;} ?>
                        <?php foreach($produk3 as $su){ ?>
                            <div class="col-sm-6 col-md-3 p0">
                                <div class="box-two proerty-item">
                                    <div class="item-thumb">
                                        <a href="<?php echo site_url() ?>properti_detail?id_produk=<?php echo $su->id_produk?>&nama_produk=<?php echo $su->nama_produk?>"><img src="assets/backend/fotoproduk/<?php echo $su->file ?>"></a>
                                    </div>
                                    <div class="proerty-th proerty-item item-entry">
                                        <h5><a href="<?php echo site_url() ?>properti_detail?id_produk=<?php echo $su->id_produk?>&nama_produk=<?php echo $su->nama_produk?>"><?php echo substr($su->nama_produk, 0, 63).'...' ?></a></h5>
                                        <div class="dot-hr"></div>
                                          <ul class="card-info dflex">
                                            <li>
                                              <h4> &nbsp;&nbsp;<i class="pe-7s-map"></i></h4>
                                              <div class="text-default">
                                                <?php echo $su->luas_tanah ?> M &nbsp;&nbsp;
                                              </div>
                                            </li>
                                            <li>
                                              <h4> &nbsp;&nbsp;<i class="pe-7s-home"></i></h4>
                                              <div class="text-default"><?php echo $su->luas_bangunan ?> M &nbsp;&nbsp;
                                              </div>
                                            </li>
                                            <li>
                                              <h4> &nbsp;&nbsp;<i class="pe-7s-ribbon"></i></h4>
                                              <div class="text-default">
                                                <?php echo $su->sertifikat ?> &nbsp;&nbsp;
                                                  
                                              </div>
                                            </li>
                                            <li class="text-center">
                                              <h4 class="text-center" ><i class="pe-7s-cash"></i></h4>
                                              <div class="text-warning strong ">
                                                 &nbsp;<?php echo number_format($su->harga) ?>
                                              </div>
                                            </li>
                                          </ul>
                                    </div>
                                </div>
                            </div>
                        <?php ;}
                        if(!empty($produk3)){ ?>
                        <div class="col-sm-6 col-md-3 p0">
                            <div class="box-tree more-proerty text-center">
                                <br>
                                <br>
                                <br>
                                <br>
                                <div class="more-entry overflow">
                                    <h5><a href="<?php echo site_url() ?>properti_rumah_kost" >Selengkapnya </a></h5>
                                    <button class="btn border-btn more-black" onclick=' window.open("<?php echo site_url() ?>properti_rumah_kost")'>Semua Rumah KOST</button>
                                </div>
                                <div class="item-tree-icon-beranda">
                                    <i class="fa fa-angle-down"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php } ?>

<!-- property area Listing Apartement -->
    <?php if(!empty($produk4)){ ?>
        <div class="content-area home-area-1 recent-property" style="background-color: #FCFCFC; padding-bottom: 55px;">
            <div class="container">
                <div class="row">
                    <div class="col-md-10 col-md-offset-1 col-sm-12 text-center page-title">
                        <!-- /.feature title -->
                        <h2>LISTING APARTEMENT</h2>
                        <br>
                    </div>
                </div>
                <div class="row">
                    <div class="proerty-th">
                    <?php ;} ?>
                        <?php foreach($produk4 as $su){ ?>
                            <div class="col-sm-6 col-md-3 p0">
                                <div class="box-two proerty-item">
                                    <div class="item-thumb">
                                        <a href="<?php echo site_url() ?>properti_detail?id_produk=<?php echo $su->id_produk?>&nama_produk=<?php echo $su->nama_produk?>"><img src="assets/backend/fotoproduk/<?php echo $su->file ?>"></a>
                                    </div>
                                    <div class="proerty-th proerty-item item-entry">
                                        <h5><a href="<?php echo site_url() ?>properti_detail?id_produk=<?php echo $su->id_produk?>&nama_produk=<?php echo $su->nama_produk?>"><?php echo substr($su->nama_produk, 0, 63).'...' ?></a></h5>
                                        <div class="dot-hr"></div>
                                          <ul class="card-info dflex">
                                            <li>
                                              <h4> &nbsp;&nbsp;<i class="pe-7s-map"></i></h4>
                                              <div class="text-default">
                                                <?php echo $su->luas_tanah ?> M &nbsp;&nbsp;
                                              </div>
                                            </li>
                                            <li>
                                              <h4> &nbsp;&nbsp;<i class="pe-7s-home"></i></h4>
                                              <div class="text-default"><?php echo $su->luas_bangunan ?> M &nbsp;&nbsp;
                                              </div>
                                            </li>
                                            <li>
                                              <h4> &nbsp;&nbsp;<i class="pe-7s-ribbon"></i></h4>
                                              <div class="text-default">
                                                <?php echo $su->sertifikat ?> &nbsp;&nbsp;
                                                  
                                              </div>
                                            </li>
                                            <li class="text-center">
                                              <h4 class="text-center" ><i class="pe-7s-cash"></i></h4>
                                              <div class="text-warning strong ">
                                                 &nbsp;<?php echo number_format($su->harga) ?>
                                              </div>
                                            </li>
                                          </ul>
                                    </div>
                                </div>
                            </div>
                        <?php ;}
                        if(!empty($produk4)){ ?>
                        <div class="col-sm-6 col-md-3 p0">
                            <div class="box-tree more-proerty text-center">
                                <br>
                                <br>
                                <br>
                                <br>
                                <div class="more-entry overflow">
                                    <h5><a href="<?php echo site_url() ?>properti_apartement" >Selengkapnya </a></h5>
                                    <button class="btn border-btn more-black" onclick=' window.open("<?php echo site_url() ?>properti_apartement")'>Semua Apartement</button>
                                </div>
                                <div class="item-tree-icon-beranda">
                                    <i class="fa fa-angle-down"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php } ?>

<!-- property area Listing Kavling -->
    <?php if(!empty($produk5)){ ?>
        <div class="content-area home-area-1 recent-property" style="background-color: #FCFCFC; padding-bottom: 55px;">
            <div class="container">
                <div class="row">
                    <div class="col-md-10 col-md-offset-1 col-sm-12 text-center page-title">
                        <!-- /.feature title -->
                        <h2>LISTING KAVLING</h2>
                        <br>
                    </div>
                </div>
                <div class="row">
                    <div class="proerty-th">
                    <?php ;} ?>
                        <?php foreach($produk5 as $su){ ?>
                            <div class="col-sm-6 col-md-3 p0">
                                <div class="box-two proerty-item">
                                    <div class="item-thumb">
                                        <a href="<?php echo site_url() ?>properti_detail?id_produk=<?php echo $su->id_produk?>&nama_produk=<?php echo $su->nama_produk?>"><img src="assets/backend/fotoproduk/<?php echo $su->file ?>"></a>
                                    </div>
                                    <div class="proerty-th proerty-item item-entry">
                                        <h5><a href="<?php echo site_url() ?>properti_detail?id_produk=<?php echo $su->id_produk?>&nama_produk=<?php echo $su->nama_produk?>"><?php echo substr($su->nama_produk, 0, 63).'...' ?></a></h5>
                                        <div class="dot-hr"></div>
                                          <ul class="card-info dflex">
                                            <li>
                                              <h4> &nbsp;&nbsp;<i class="pe-7s-map"></i></h4>
                                              <div class="text-default">
                                                <?php echo $su->luas_tanah ?> M &nbsp;&nbsp;
                                              </div>
                                            </li>
                                            <li>
                                              <h4> &nbsp;&nbsp;<i class="pe-7s-home"></i></h4>
                                              <div class="text-default"><?php echo $su->luas_bangunan ?> M &nbsp;&nbsp;
                                              </div>
                                            </li>
                                            <li>
                                              <h4> &nbsp;&nbsp;<i class="pe-7s-ribbon"></i></h4>
                                              <div class="text-default">
                                                <?php echo $su->sertifikat ?> &nbsp;&nbsp;
                                                  
                                              </div>
                                            </li>
                                            <li class="text-center">
                                              <h4 class="text-center" ><i class="pe-7s-cash"></i></h4>
                                              <div class="text-warning strong ">
                                                 &nbsp;<?php echo number_format($su->harga) ?>
                                              </div>
                                            </li>
                                          </ul>
                                    </div>
                                </div>
                            </div>
                        <?php ;}
                        if(!empty($produk5)){ ?>
                        <div class="col-sm-6 col-md-3 p0">
                            <div class="box-tree more-proerty text-center">
                                <br>
                                <br>
                                <br>
                                <br>
                                <div class="more-entry overflow">
                                    <h5><a href="<?php echo site_url() ?>properti_kavling" >Selengkapnya </a></h5>
                                    <button class="btn border-btn more-black" onclick=' window.open("<?php echo site_url() ?>properti_kavling")'>Semua Kavling</button>
                                </div>
                                <div class="item-tree-icon-beranda">
                                    <i class="fa fa-angle-down"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php } ?>


<!-- property area Listing Ruko -->
    <?php if(!empty($produk6)){ ?>
        <div class="content-area home-area-1 recent-property" style="background-color: #FCFCFC; padding-bottom: 55px;">
            <div class="container">
                <div class="row">
                    <div class="col-md-10 col-md-offset-1 col-sm-12 text-center page-title">
                        <!-- /.feature title -->
                        <h2>LISTING RUKO</h2>
                        <br>
                    </div>
                </div>
                <div class="row">
                    <div class="proerty-th">
                    <?php ;} ?>
                        <?php foreach($produk6 as $su){ ?>
                            <div class="col-sm-6 col-md-3 p0">
                                <div class="box-two proerty-item">
                                    <div class="item-thumb">
                                        <a href="<?php echo site_url() ?>properti_detail?id_produk=<?php echo $su->id_produk?>&nama_produk=<?php echo $su->nama_produk?>"><img src="assets/backend/fotoproduk/<?php echo $su->file ?>"></a>
                                    </div>
                                    <div class="proerty-th proerty-item item-entry">
                                        <h5><a href="<?php echo site_url() ?>properti_detail?id_produk=<?php echo $su->id_produk?>&nama_produk=<?php echo $su->nama_produk?>"><?php echo substr($su->nama_produk, 0, 63).'...' ?></a></h5>
                                        <div class="dot-hr"></div>
                                          <ul class="card-info dflex">
                                            <li>
                                              <h4> &nbsp;&nbsp;<i class="pe-7s-map"></i></h4>
                                              <div class="text-default">
                                                <?php echo $su->luas_tanah ?> M &nbsp;&nbsp;
                                              </div>
                                            </li>
                                            <li>
                                              <h4> &nbsp;&nbsp;<i class="pe-7s-home"></i></h4>
                                              <div class="text-default"><?php echo $su->luas_bangunan ?> M &nbsp;&nbsp;
                                              </div>
                                            </li>
                                            <li>
                                              <h4> &nbsp;&nbsp;<i class="pe-7s-ribbon"></i></h4>
                                              <div class="text-default">
                                                <?php echo $su->sertifikat ?> &nbsp;&nbsp;
                                                  
                                              </div>
                                            </li>
                                            <li class="text-center">
                                              <h4 class="text-center" ><i class="pe-7s-cash"></i></h4>
                                              <div class="text-warning strong ">
                                                 &nbsp;<?php echo number_format($su->harga) ?>
                                              </div>
                                            </li>
                                          </ul>
                                    </div>
                                </div>
                            </div>
                        <?php ;}
                        if(!empty($produk6)){ ?>
                        <div class="col-sm-6 col-md-3 p0">
                            <div class="box-tree more-proerty text-center">
                                <br>
                                <br>
                                <br>
                                <br>
                                <div class="more-entry overflow">
                                    <h5><a href="<?php echo site_url() ?>properti_ruko" >Selengkapnya </a></h5>
                                    <button class="btn border-btn more-black" onclick=' window.open("<?php echo site_url() ?>properti_ruko")'>Semua Ruko</button>
                                </div>
                                <div class="item-tree-icon-beranda">
                                    <i class="fa fa-angle-down"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php } ?>
		

		<!--Welcome area -->

        <div class="Welcome-area">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 Welcome-entry  col-sm-12">
                        <div class="col-md-5 col-md-offset-2 col-sm-6 col-xs-12">
                            <div class="welcome_text" data-wow-offset="100">
                                <div class="row">
                                    <div class="col-md-10 col-md-offset-1 col-sm-12 text-center page-title">
                                        <!-- /.feature title -->
                                        <h2><img style="margin-top:-5px;padding:5px" src="assets/img/juragan_rumah_logo.png" alt=""></h2>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-5 col-sm-6 col-xs-12">
                            <div  class="welcome_services wow fadeInRight">
                                <div class="row">
                                    <div class="col-xs-6 m-padding">
                                        <div class="welcome-estate">
                                            <div class="welcome-icon">
                                                <a href="<?php echo site_url() ?>properti"><i class="pe-7s-home pe-4x"></i></a>
                                            </div>
                                            <h3>Listing Properti</h3><!--Link Ke list Property-->
                                        </div>
                                    </div>
                                    <div class="col-xs-6 m-padding">
                                        <div class="welcome-estate">
                                            <div class="welcome-icon">
                                                <a href="<?php echo site_url() ?>properti"><i class="pe-7s-users pe-4x"></i></a>
                                            </div>
                                            <h3>Mitra Developer</h3><!--Link ke list Developer-->
                                        </div>
                                    </div>
                                    <div class="col-xs-12 text-center">
                                        <i class="welcome-circle"></i>
                                    </div>
                                    <div class="col-xs-6 m-padding">
                                        <div class="welcome-estate">
                                            <div class="welcome-icon">
                                              <a href="<?php echo site_url() ?>properti"><i class="pe-7s-notebook pe-4x"></i></a>
                                            </div>
                                            <h3>Kenapa Harus Beli di Juragan Rumah</h3>
                                        </div>
                                    </div>
                                    <div class="col-xs-6 m-padding">
                                        <div class="welcome-estate">
                                            <div class="welcome-icon">
                                                <a href="<?php echo site_url() ?>properti"><i class="pe-7s-help2 pe-4x"></i></a>
                                            </div>
                                            <h3>Bantuan</h3>
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
                                        <span class="client-face wow fadeInRight"> 
                                             <img src="assets/img/icons-okhand.png" alt="">
                                        </span>
                                    </div>
                                </div>
                                <div class="item">
                                    <div class="client-text">
                                    <h4 class="text-center"><strong>NYAMAN</strong></h4>                               
                                        <p>Jangan terburu-buru memutuskan, silahkan hubungi saja dulu Kami untuk Konsultasi dulu. Gratis kok dan Kami siap melayani kapanpun Anda butuhkan.</p>
                                        <span class="client-face wow fadeInRight">
                                             <img src="assets/img/icons-callfemale.png" alt="">
                                        </span>
                                    </div>
                                </div>
                                <div class="item">
                                    <div class="client-text">  
                                    <h4 class="text-center"><strong>TERPERCAYA</strong></h4>                              
                                        <p>Pastikan Anda telah mengetahui dengan detail untuk tiap properti yang menjadi pilihan Anda. Silahkan survei langsung saja, petugas lapangan Kami siap mendampingi Anda selalu.</p>
                                        <span class="client-face wow fadeInRight">
                                            <img src="assets/img/icons-trust.png" alt="">
                                        </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

		
        <!--logo bank-->

            <div class="container center" draggable="true">
                <div class="box">
                    <div class="md-icon"><img class="size-img" title="" alt="" src="<?php echo base_url() ?>assets/img/logo_bank/682386_720.jpg"></div>
                </div>
                <div class="box">
                    <div class="md-icon"><img class="size-img" title="" alt="" src="<?php echo base_url() ?>assets/img/logo_bank/Bank-BNI-Syariah-Logo.jpg"></div>
                </div>
                <div class="box">
                    <div class="md-icon"><img class="size-img" title="" alt="" src="<?php echo base_url() ?>assets/img/logo_bank/BCA.png"></div>
                </div>
                <div class="box">
                    <div class="md-icon"><img class="size-img" title="" alt="" src="<?php echo base_url() ?>assets/img/logo_bank/BNI-1138x493.png"></div>
                </div>
                <div class="box">
                    <div class="md-icon"><img class="size-img" title="" alt="" src="<?php echo base_url() ?>assets/img/logo_bank/BRI-Syariah.jpg"></div>
                </div>
                <div class="box">
                    <div class="md-icon"><img class="size-img" title="" alt="" src="<?php echo base_url() ?>assets/img/logo_bank/btn-syariah-sasar-2000-nasabah-baru-lewat-ramadan-fair-2018.jpg"></div>
                </div>
                <div class="box">
                    <div class="md-icon"><img class="size-img" title="" alt="" src="<?php echo base_url() ?>assets/img/logo_bank/download.png"></div>
                </div>
                <div class="box">
                    <div class="md-icon"><img class="size-img" title="" alt="" src="<?php echo base_url() ?>assets/img/logo_bank/download-1.png"></div>
                </div>
                <div class="box">
                    <div class="md-icon"><img class="size-img" title="" alt="" src="<?php echo base_url() ?>assets/img/logo_bank/logo-bank-bri-png-6.png"></div>
                </div>
                <div class="box">
                    <div class="md-icon"><img class="size-img" title="" alt="" src="<?php echo base_url() ?>assets/img/logo_bank/Logo-Bank-Muamalat-Indonesia-dark-BG.png"></div>
                </div>
                <div class="box">
                    <div class="md-icon"><img class="size-img" title="" alt="" src="<?php echo base_url() ?>assets/img/logo_bank/mandiri-syariah.jpg"></div>
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
                                <div class="text-center">
                                <h2 style="color:grey">Buat janji survei </h2> 
                            </div>
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


		

		