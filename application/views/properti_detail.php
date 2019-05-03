<div class="page-head"> 
            <div class="container">
                <div class="row">
                    <div class="page-head-content">
                        <h1 class="page-title">Data Lengkap Profil Produk</h1>               
                    </div>
                </div>
            </div>
        </div>
        <!-- End page header -->

        <!-- Slider -->
        <div class="content-area single-property" style="background-color: #FCFCFC;">&nbsp;
            <div class="container">   
                <div class="clearfix padding-top-40" >
                    <div class="col-md-8 single-property-content prp-style-2">
                        <div>
                            <div class="row">
                                <div class="light-slide-item">            
                                    <div class="clearfix">
                                        <div class="favorite-and-print">
                                            <a class="printer-icon " href="javascript:window.print()">
                                                <i class="fa fa-print"></i> 
                                            </a>
                                        </div> 
                                        <ul id="image-gallery" class="gallery list-unstyled cS-hidden">
                                            <?php foreach ($produk_detail_foto as $data) { ?>
                                            <li data-thumb="<?php base_url(); ?>assets/backend/fotoproduk/<?php echo $data->file ?>"> 
                                                <img src="<?php base_url(); ?>assets/backend/fotoproduk/<?php echo $data->file ?>" />
                                            </li>
                                            <?php } ?>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="inner-wrapper">
                                        <div class="single-property-header"> 
                                        <?php foreach($produk_detail as $su){ ?>
                                            <h1 class="property-title"><?php echo $su->nama_produk ?> </h1>
                                            <?php if($su->harga_promo == 0){ ?>
                                            <span class="property-price">Rp <?php echo number_format($su->harga) ?></span>
                                        <?php }else{ ?>
                                            <span class="property-price">Rp <strike><?php echo number_format($su->harga) ?></strike></span><br>
                                            <span class="property-price">Rp <?php echo number_format($su->harga_promo) ?></span>
                                        <?php } ?>
                                        </div>
                                        <div class="property-meta entry-meta clearfix ">   
                                            <div class="col-xs-4 col-sm-4 col-md-4 p-b-15">
                                                <span class="property-info icon-area">
                                                    <i class="pe-7s-home fa-3x"></i>
                                                </span>
                                                <span class="property-info-entry">
                                                    <span class="property-info-label text-warning">L .Bangunan</span>
                                                    <span class="property-info-value"><?php echo $su->luas_bangunan ?> M</span>
                                                </span>
                                            </div>

                                            <div class="col-xs-4 col-sm-4 col-md-4 p-b-15">
                                                <span class="property-info-icon icon-bed">
                                                    <i class="pe-7s-map fa-3x"></i>
                                                </span>
                                                <span class="property-info-entry">
                                                     <span class="property-info-label text-warning">L .Tanah</span>
                                                    <span class="property-info-value"><?php echo $su->luas_tanah ?> M</span>
                                                </span>
                                            </div>

                                            <div class="col-xs-4 col-sm-4 col-md-4 p-b-15">
                                                <span class="property-info-icon icon-bath">
                                                    <i class="pe-7s-drop fa-3x"></i>
                                                </span>
                                                <span class="property-info-entry">
                                                    <span class="property-info-label text-warning">K .Mandi</span>
                                                    <span class="property-info-value"><?php echo $su->jumlah_kamar_mandi ?></span>
                                                </span>
                                            </div>
                                            <div class="col-xs-4 col-sm-4 col-md-4 p-b-15">
                                                <span class="property-info-icon icon-bath">
                                                    <i class="pe-7s-moon fa-3x"></i>
                                                </span>
                                                <span class="property-info-entry">
                                                    <span class="property-info-label text-warning">K .Tidur</span>
                                                    <span class="property-info-value"><?php echo $su->jumlah_kamar_tidur ?></span>
                                                </span>
                                            </div>

                                            <div class="col-xs-4 col-sm-4 col-md-4 p-b-15">
                                                <span class="property-info-icon icon-garage">
                                                    <i class="pe-7s-bicycle fa-3x"></i>
                                                </span>
                                                <span class="property-info-entry">
                                                    <span class="property-info-label text-warning">Carport</span>
                                                    <span class="property-info-value"><?php echo $su->carport ?></span>
                                                </span>
                                            </div>

                                            <div class="col-xs-4 col-sm-4 col-md-4 p-b-15">
                                                <span class="property-info-icon icon-garage">
                                                    <i class="pe-7s-filter fa-3x"></i>
                                                </span>
                                                <span class="property-info-entry">
                                                    <span class="property-info-label text-warning">Air</span>
                                                    <span class="property-info-value"><?php echo $su->jenis_air ?></span>
                                                </span>
                                            </div>

                                            <div class="col-xs-4 col-sm-4 col-md-4 p-b-15">
                                                <span class="property-info-icon icon-garage">
                                                    <i class="pe-7s-ribbon fa-3x"></i>
                                                </span>
                                                <span class="property-info-entry">
                                                    <span class="property-info-label text-warning">Sertifikat</span>
                                                    <span class="property-info-value"><?php echo $su->sertifikat ?></span>
                                                </span>
                                            </div>

                                            <div class="col-xs-4 col-sm-4 col-md-4 p-b-15">
                                                <span class="property-info-icon icon-garage">
                                                    <i class="pe-7s-box2 fa-3x"></i>
                                                </span>
                                                <span class="property-info-entry">
                                                    <span class="property-info-label text-warning">Furnished</span>
                                                    <span class="property-info-value"><?php echo $su->furnished ?></span>
                                                </span>
                                            </div>

                                            <div class="col-xs-4 col-sm-4 col-md-4 p-b-15">
                                                <span class="property-info-icon icon-garage">
                                                    <i class="pe-7s-anchor fa-3x"></i>
                                                </span>
                                                <span class="property-info-entry">
                                                    <span class="property-info-label text-warning">Hook Pojok</span>
                                                    <span class="property-info-value"><?php echo $su->hook_pojok ?></span>
                                                </span>
                                            </div>
                                            <?php ; }?>
                                        </div>
                                    </div>
                            <?php foreach($produk_detail as $su){ ?>
                            <div class="single-property-wrapper">
                                <div class="section">
                                    <h4 class="s-property-title">Deskripsi</h4>
                                    <div class="s-property-content" style="overflow-wrap: break-word;">
                                    <p><?php echo $su->description ?></p>
                                    </div>
                                </div>
                                <!-- End description area  -->

                                <div class="section additional-details">
                                    <h4 class="s-property-title">Alamat Detail</h4>
                                    <ul class="additional-details-list clearfix" style="overflow-wrap: break-word;">
                                        <li>
                                            <span class="col-xs-6 col-sm-4 col-md-4 add-d-title">Alamat</span>
                                            <span class="col-xs-6 col-sm-8 col-md-8 add-d-entry"><?php echo $su->alamat ?></span>
                                        </li>
                                        <li>
                                            <span class="col-xs-6 col-sm-4 col-md-4 add-d-title">Kecamatan</span>
                                            <span class="col-xs-6 col-sm-8 col-md-8 add-d-entry"><?php echo $su->nama_kec ?></span>
                                        </li>
                                        <li>
                                            <span class="col-xs-6 col-sm-4 col-md-4 add-d-title">Kabupaten / Kota</span>
                                            <span class="col-xs-6 col-sm-8 col-md-8 add-d-entry"><?php echo $su->nama_kabkot ?></span>
                                        </li>
                                        <li>
                                            <span class="col-xs-6 col-sm-4 col-md-4 add-d-title">Provinsi</span>
                                            <span class="col-xs-6 col-sm-8 col-md-8 add-d-entry"><?php echo $su->nama_prov ?></span>
                                        </li>
                                    </ul>
                                </div>  
                                <!-- End additional-details area  -->

                                <div class="section property-share"> 
                                    <h4 class="s-property-title">Bagikan</h4>
                                    <div class="roperty-social">
                                        <ul> 
                                        <li><a title="Share this on facebok "href="https://www.facebook.com/JuraganRumahOfficialPage"><img src="assets/img/social_big/fb.png"></a></li>                                      
                                        <li><a title="Share this on whatsapp" <a href="https://api.whatsapp.com/send?text=juraganrumah.net%20Beli%20Properti%20Dengan%20Mudah"><img src="assets/img/social_big/wa.png"></a></li>                                      
                                        <li><a title="Share this on telegram" href="https://t.me/OfficialJuraganRumah"><img src="assets/img/social_big/telegram.png"></a></li>                                        
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <?php ;} ?>
                        </div>
                        <?php 
                            $buyer =  $this->session->userdata('ses_nama');
                                if(!$buyer){ ?>
                                    <div class="section property-share">
                                        <div>
                                           <h4 class="s-property-title">Silahkan Buat janji survei </h4>
                                           <a href="<?php echo site_url().'register_buyer'?>" class="btn btn-link" style="float:none">Masuk</a>
                                        </div>
                                    </div>
                        <?php } 
                        $buyer =  $this->session->userdata('ses_nama');
                        $id =  $this->input->get('id_produk');
                        $nama =  $this->input->get('nama_produk');
                        if($buyer){ ?>

                            <!-- fORM JANJI SERVEI-->
                        <div class="col-md-12 col-xs-12 register-blocks">
                            <div class="text-center"> 
                               <h2>Buat janji survei </h2> 
                            </div>
                               <form action="<?php echo site_url(); ?>cart/janji_survei" method="post">
                                 <div class="col-md-3"></div>
                                 <div class="col-md-6">
                                   <div class="form-group">
                                     <label for="produk">Produk</label>
                                     <input type="hidden" name="id_produk" value="<?php echo $su->id_produk ?>" class="form-control" id="produk" >
                                     <input type="hidden" name="harga" value="<?php echo $su->harga ?>" class="form-control" id="harga" >
                                     <input type="text" value="<?php echo $su->nama_produk ?>" class="form-control" id="produk" disabled>
                                   </div>
                                   <div class="form-group">
                                       <label for="tgl_survei">Tanggal Survei</label>
                                       <input type="date"  name="tgl_survei" class="form-control" id="tgl_survei" required="required">
                                   </div>
                                   <div class="form-group">
                                       <label for="jam_survei">Jam Survei</label>
                                       <input type="time" name="jam_survei" class="form-control" id="jam_survei" required="required">
                                   </div>
                                   <div class="text-center">
                                       <button type="submit" class="btn btn-default">Kirimkan</button>
                                   </div>
                               </form>
                           </div>
                           <div class="col-md-3"></div>                                
                       </div>
                        <?php } ?>

                        <div class="section property-share"><br>&nbsp;</div>
                        <div class="similar-post-section padding-top-40"> 
                            <div id="prop-smlr-slide_0">
                                <?php foreach($produk as $su){ ?>
                                <div class="box-two proerty-item">
                                     <div class="item-thumb">
                                        <a href="<?php echo site_url() ?>properti_detail?id_produk=<?php echo $su->id_produk?>&nama_produk=<?php echo $su->nama_produk?>"><img src="assets/backend/fotoproduk/<?php echo $su->file ?>"></a>
                                    </div>
                                    <div class="item-entry overflow">
                                        <h5><a href="<?php echo site_url() ?>properti_detail?id_produk=<?php echo $su->id_produk?>&nama_produk=<?php echo $su->nama_produk?>"><?php echo substr($su->nama_produk,0 ,45).'<span class="card-info-title text-warning"> &nbsp;&nbsp;selengkapnya...</span>' ?></a></h5>
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
                                <?php ;} ?> 
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 p0">

                        <aside class="sidebar sidebar-property blog-asside-right property-style2"> 
                            <div class="dealer-widget">
                                <div class="dealer-content">
                          </div>
                            </div>
                                <div class="panel panel-default sidebar-menu" style="height: 600px;">
                                <div class="panel-heading">
                                    <h3 class="panel-title">Direkomendasikan</h3>
                                </div>
                                <div class="panel-body recent-property-widget">
                                    <ul>
                                        <?php foreach ($newest_produk as $data) { ?>
                                        <li>
                                            <div class="col-md-3 col-sm-3 col-xs-3 blg-thumb p0">
                                                <a href=""><img src="assets/backend/fotoproduk/<?php echo $data->file ?>"></a>
                                            </div>
                                            <div class="col-md-8 col-sm-8 col-xs-8 blg-entry" style="margin-top: -9px;">
                                                <h6> <a href="<?php echo site_url() ?>properti_detail?id_produk=<?php echo $data->id_produk?>&nama_produk=<?php echo $data->nama_produk?>" title="<?php echo $data->nama_produk ?>"><?php echo substr($data->nama_produk, 0, 15).'...' ?></a></h6>
                                                <span class="property-price"><?php echo 'Rp. '.number_format($data->harga) ?></span>
                                            </div>
                                        </li>
                                        <?php } ?>
                                    </ul>
                                </div>
                                 <div id="lflRjR" class="lflRjR">
                                    <div class="sc-drlKqa tDcva">
                                        <a class="sc-kNBZmU kQCLqa" href="https://www.juraganrumah.net/" target="_self">
                                           <h6>
                                            <img style="width:10%" src="<?php echo base_url() ?>assets/img/juragan_rumah_logo.png" >juraganrumah.net
                                            </h6>
                                        </a>
                                    </div>
                                    <span class="btn btn-link"><a href=""><i class="pe-7s-call"></i>&nbsp;Telepon</a></span>
                                    <span class="btn btn-link"><a href=""><i class="pe-7s-mail"></i>&nbsp;Message </a></span>
                                    <span class="btn btn-link"><a href="https://api.whatsapp.com/send?phone=6282135077987&text=halo%20JuraganRumah.net%0A%0AMohon%20info%20tentang%20projek%20........%0A%0Anama%20%3A%0Aemail%20%3A%0Adomisili%20%3A%0A%0ATerima%20kasih"><i class="fa fa-whatsapp"></i>&nbsp;WhatsApp(1) </a></span>
                                    <span class="btn btn-link"><a href="https://api.whatsapp.com/send?phone=628119475777&text=halo%20JuraganRumah.net%0A%0AMohon%20info%20tentang%20projek%20........%0A%0Anama%20%3A%0Aemail%20%3A%0Adomisili%20%3A%0A%0ATerima%20kasih"><i class="fa fa-whatsapp"></i>&nbsp;WhatsApp(2)</a></span>
                                    <span class="btn btn-link"><a href="mailto:"><i class="fas fa-envelope"></i>&nbsp;Email</a></span>
                                </div>
                            </div>
                            <div class="panel panel-default sidebar-menu wow fadeInRight">
                                <div class="panel-heading">
                                    <h3 class="panel-title">Program Promo </h3>
                                </div>
                                <div class="panel-body recent-property-widget">
                                    <img src="assets/img/ads.jpg">
                                </div>
                            </div>

                        </aside>
                    </div>

                </div>

            </div>
        </div>