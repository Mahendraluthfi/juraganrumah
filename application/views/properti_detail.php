<?php
    $buyer =  $this->session->userdata('ses_nama');
    $id =  $this->input->get('id_produk');
    $nama =  $this->input->get('nama_produk'); 
?>

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
                                                <h4>
                                                    <?php if($su->file_logo){ ?>
                                                    <img style="max-width:10%;width:10% ; max-height: 10%;height: 10%" src="<?php echo base_url() ?>assets/backend/fotomitra/<?php echo $su->file_logo ?>"><?php } ?>
                                                    &nbsp;<?php echo $su->nama_project ?><hr>
                                                </h4>
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
                                                <span class="property-info icon-area" data-toggle="tooltip" title="Luas Bangunan!">
                                                    <i class="pe-7s-home fa-3x" title="Luas Bangunan"></i>
                                                </span>
                                                <span class="property-info-entry">
                                                    <span class="property-info-label text-warning">L .Bangunan</span>
                                                    <span class="property-info-value"><?php echo $su->luas_bangunan ?> M</span>
                                                </span>
                                            </div>

                                            <div class="col-xs-4 col-sm-4 col-md-4 p-b-15">
                                                <span class="property-info-icon icon-bed" data-toggle="tooltip" title="Luas Tanah!">
                                                    <i class="pe-7s-map fa-3x"></i>
                                                </span>
                                                <span class="property-info-entry">
                                                     <span class="property-info-label text-warning">L .Tanah</span>
                                                    <span class="property-info-value"><?php echo $su->luas_tanah ?> M</span>
                                                </span>
                                            </div>

                                            <div class="col-xs-4 col-sm-4 col-md-4 p-b-15">
                                                <span class="property-info-icon icon-bath" data-toggle="tooltip" title="Kamar Mandi!">
                                                    <i class="pe-7s-drop fa-3x"></i>
                                                </span>
                                                <span class="property-info-entry">
                                                    <span class="property-info-label text-warning">K .Mandi</span>
                                                    <span class="property-info-value"><?php echo $su->jumlah_kamar_mandi ?></span>
                                                </span>
                                            </div>

                                            <div class="col-xs-4 col-sm-4 col-md-4 p-b-15">
                                                <span class="property-info-icon icon-bath" data-toggle="tooltip" title="Kamar Tidur!">
                                                    <i class="pe-7s-moon fa-3x"></i>
                                                </span>
                                                <span class="property-info-entry">
                                                    <span class="property-info-label text-warning">K .Tidur</span>
                                                    <span class="property-info-value"><?php echo $su->jumlah_kamar_tidur ?></span>
                                                </span>
                                            </div>

                                            <div class="col-xs-4 col-sm-4 col-md-4 p-b-15">
                                                <span class="property-info-icon icon-garage" data-toggle="tooltip" title="Carport!">
                                                    <i class="pe-7s-car fa-3x"></i>
                                                </span>
                                                <span class="property-info-entry">
                                                    <span class="property-info-label text-warning">Carport</span>
                                                    <span class="property-info-value"><?php echo $su->carport ?></span>
                                                </span>
                                            </div>

                                            <div class="col-xs-4 col-sm-4 col-md-4 p-b-15">
                                                <span class="property-info-icon icon-garage" data-toggle="tooltip" title="Jenis Air!">
                                                    <i class="pe-7s-filter fa-3x"></i>
                                                </span>
                                                <span class="property-info-entry">
                                                    <span class="property-info-label text-warning">Air</span>
                                                    <span class="property-info-value"><?php echo $su->jenis_air ?></span>
                                                </span>
                                            </div>

                                            <div class="col-xs-4 col-sm-4 col-md-4 p-b-15">
                                                <span class="property-info-icon icon-garage" data-toggle="tooltip" title="Sertifikat!">
                                                    <i class="pe-7s-ribbon fa-3x"></i>
                                                </span>
                                                <span class="property-info-entry">
                                                    <span class="property-info-label text-warning">Sertifikat</span>
                                                    <span class="property-info-value"><?php echo $su->sertifikat ?></span>
                                                </span>
                                            </div>

                                            <div class="col-xs-4 col-sm-4 col-md-4 p-b-15">
                                                <span class="property-info-icon icon-garage" data-toggle="tooltip" title="Furnished!">
                                                    <i class="pe-7s-box2 fa-3x"></i>
                                                </span>
                                                <span class="property-info-entry">
                                                    <span class="property-info-label text-warning">Furnished</span>
                                                    <span class="property-info-value"><?php echo $su->furnished ?></span>
                                                </span>
                                            </div>

                                            <div class="col-xs-4 col-sm-4 col-md-4 p-b-15">
                                                <span class="property-info-icon icon-garage" data-toggle="tooltip" title="Hook Pojok!">
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
                            <?php foreach($produk_detail as $su) { ?>
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
                                            <span class="col-xs-6 col-sm-8 col-md-8 add-d-entry"><?php echo $su->almt ?></span>
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



                                <!-- Start POI  -->
                            <div class="section additional-details">
                                 <h4 class="s-property-title">Keunggulan (Point Of Interest)</h4>
                                    <ul class="additional-details-list clearfix">
                                        <li>
                                            <span class="col-xs-12 col-sm-12 col-md-12 add-d-title"><?php echo $su->remark; ?></span>
                                        </li>
                                    </ul>
                            </div>  
                                <!-- End POI -->


                            <!-- Start MOBILE CONTACT  -->
                            <div class="section additional-details">  
                               <div class="lflRjRmob"><!-- mobile contact Sticky -->
                                  <div class="sc-drlKqa tDcva">
                                    <a class="sc-kNBZmU kQCLqa" href="https://www.juraganrumah.net/" target="_self">
                                      <h6 style=" color:white;">
                                        <img style="width:10%;" src="<?php echo base_url() ?>assets/img/juragan_rumah_logo.png" >&nbsp;juraganrumah.net
                                      </h6>
                                    </a>
                                  </div>
                                <div id="contactmob" class="border-btn"><i class="pe-7s-call"></i>&nbsp;Telepon</div>
                                <div id="contactmob1" class="border-btn"><i class="pe-7s-mail"></i>&nbsp;Pesan SMS</div>
                                <div id="contactmob2" class="border-btn"><i class="fa fa-whatsapp"></i>&nbsp;WhatsApp</div>
                                <div class="border-btn" onclick="window.location.href='mailto: info@juraganrumah.net?subject=Hallo Juragan Rumah'"><i class="pe-7s-mail-open"></i>&nbsp;Email</div>
                              </div>
                            </div>  
                            <!-- End MOBILE CONTACT -->



                                <!-- Button Beli properti -->
                            <?php if(!$buyer){ ?>
                                <div class="row">
                                    <div class="col-md-12 col-lg-12">
                                        <a data-toggle="collapse" data-parent="#accordion" href="#beli" class="btn  border-btn" style="width:100%; text-align: center">Beli</a>
                                        <div id="beli" class="collapse">
                                            <div class="col-md-4">
                                                <a href="<?php echo site_url().'register_buyer'?>" class="btn  border-btn">Kredit</a>
                                            </div>
                                            <div class="col-md-4">
                                                <a href="<?php echo site_url().'register_buyer'?>" class="btn  border-btn">Softcash</a>
                                            </div>
                                            <div class="col-md-4">
                                                <a href="<?php echo site_url().'register_buyer'?>" class="btn  border-btn">Cash</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            <?php } else{ ?>
                                <div class="row">
                                    <div class="col-md-12 col-lg-12">
                                        <a data-toggle="collapse" data-parent="#accordion" href="#beli" class="btn btn-default" style="width:100%; text-align: center">Beli</a>
                                        <div id="beli" class="collapse">
                                            <div class="col-md-4">
                                                <a href="<?php echo site_url(); ?>cart/shopping_cart?id_produk=<?php echo $su->id_produk ?>&data=KREDIT&harga=<?php echo $su->harga ?>" class="btn border-btn">Kredit</a>
                                            </div>
                                            <div class="col-md-4">
                                                <a href="<?php echo site_url(); ?>cart/shopping_cart?id_produk=<?php echo $su->id_produk ?>&data=SOFTCASH&harga=<?php echo $su->harga ?>" class="btn border-btn">Softcash</a>
                                            </div>
                                            <div class="col-md-4">
                                                <a href="<?php echo site_url(); ?>cart/shopping_cart?id_produk=<?php echo $su->id_produk ?>&data=CASH&harga=<?php echo $su->harga ?>" class="btn border-btn">Cash</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            <?php } ?>

                                <!--Share link Properti detail-->                       

                                <div class="section property-share text-center register-blocks"> 
                                    <h2>Bagikan</h2>
                                    <div class="roperty-social">
                                        <ul> 
                                            <li><a title="Share this on facebok " onclick="window.location.href='https://www.facebook.com/dialog/share?app_id=1275111962639567&display=popup&href=https%3A%2F%2Fwww.juraganrumah.net%2Fproperti_detail%3Fid_produk%3D<?php echo $id.$agen ?>'"><img style="width: 25px" src="<?php echo base_url(); ?>assets/img/social_big/fb.png"></a></li> 
                                            <li><a title="Share this on whatsapp" onclick="window.location.href='https://api.whatsapp.com/send?&text=https%3A%2F%2Fwww.juraganrumah.net%2Fproperti_detail%3Fid_produk%3D<?php echo $id.$agen ?>'"><img style="width: 25px" src="<?php echo base_url(); ?>assets/img/social_big/wa.png"></a></li> 
                                            <li><a title="Share this on telegram" onclick="window.location.href='https://telegram.me/share/url?url=https%3A%2F%2Fwww.juraganrumah.net%2Fproperti_detail%3Fid_produk%3D<?php echo $id.$agen ?>'"><img style="width: 25px" src="<?php echo base_url(); ?>assets/img/social_big/telegram.png"></a></li>                                        
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <?php } ?>
                        <br>
                            <?php if(!$buyer){ ?>
                                    <!-- fORM JANJI SERVEI SEBELUM LOGIN-->
                                    <div class="col-md-12 col-xs-12 register-blocks">
                                           <form action="<?php echo site_url().'register_buyer'?>" method="post">
                                                <h2 class="text-center">Buat janji survei </h2> 
                                               <div class="form-group">
                                                 <label for="produk"><h6><?php echo $su->nama_produk ?></h6></label>
                                                 <input type="hidden" name="id_produk" value="<?php echo $su->id_produk ?>" class="form-control" id="produk" >
                                                 <input type="hidden" name="harga" value="<?php echo $su->harga ?>" class="form-control" id="harga" >
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
                                                   <button type="submit" class="btn  border-btn">Kirimkan</button>
                                               </div>
                                           </form>                 
                                   </div>
                        <?php } 
                                if($buyer){ ?>
                                    <!-- fORM JANJI SETELAH login-->
                                <div class="col-md-12 col-xs-12 register-blocks">
                                       <form action="<?php echo site_url(); ?>cart/janji_survei" method="post">
                                        <h2 class="text-center">Buat janji survei </h2>
                                           <div class="form-group">
                                             <label for="produk"><h6><?php echo $su->nama_produk ?></h6></label>
                                             <input type="hidden" name="id_produk" value="<?php echo $su->id_produk ?>" class="form-control" id="produk" >
                                             <input type="hidden" name="harga" value="<?php echo $su->harga ?>" class="form-control" id="harga" >
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
                                               <button type="submit" class="btn  border-btn">Kirimkan</button>
                                           </div>
                                       </form>                      
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
                                <div class="panel panel-default sidebar-menu">
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
                                           <h6 style=" color:white;">
                                            <img style="width:10%; color:white;" src="<?php echo base_url() ?>assets/img/juragan_rumah_logo.png" >&nbsp;juraganrumah.net
                                            </h6>
                                        </a>
                                    </div>
                                    <div id="contact" class="border-btn"><i class="pe-7s-call"></i>&nbsp;Telepon</div>
                                    <div id="contact1" class="border-btn"><i class="pe-7s-mail"></i>&nbsp;Pesan SMS</div>
                                    <div id="contact2" class="border-btn"><i class="fa fa-whatsapp"></i>&nbsp;WhatsApp</div>
                                    <div class="border-btn" onclick="window.location.href='mailto: info@juraganrumah.net?subject=halo%20JuraganRumah.net%0A%0AMohon%20info%20tentang%20projek%20<?php echo $nama ?>%20%0A%0Anama%20%3A%0Aemail%20%3A%0Adomisili%20%3A%0A%0ATerima%20kasih'"><i class="pe-7s-mail-open"></i>&nbsp;Email</div>
                                </div>
                            </div>
                            <div class="panel panel-default sidebar-menu wow">
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

        <div id="contactForm" class="contactForm">
          <h1 id="demoFont1" class="demoFont">Halo! Juragan Rumah</h1>
          <h3 id="demoFont" class="demoFont">Telepon</h3>
          <div class="row">
            <div class="col-sm-12">
                 <div class="border-btn" id="demoFont1" onclick="telepon('+6282135077987','<?php echo $id ?>')"><i class="pe-7s-call fa-1x"></i>&nbsp;Customer 1</div>
            </div>
            <div class="col-sm-12">
                 <div class="border-btn" id="demoFont1" onclick="telepon('+628119475777','<?php echo $id ?>')"><i class="pe-7s-call fa-1x"></i>&nbsp;Customer 2</div>
            </div>
             <div class="col-sm-12">
                 <div class="border-btn" id="demoFont1" onclick="telepon('+628231492211','<?php echo $id ?>')"><i class="pe-7s-call fa-1x"></i>&nbsp;Customer 3</div>
             </div>
             <div class="col-sm-12">
                 <div class="border-btn" id="demoFont1" onclick="telepon('+6281225533533','<?php echo $id ?>')"><i class="pe-7s-call fa-1x"></i>&nbsp;Customer 4</div>
             </div>
          </div>
        </div>

        <div id="contactForm1" class="contactForm">

          <h1 id="demoFont1" class="demoFont">Halo! Juragan Rumah</h1>

          <h3 id="demoFont" class="demoFont">Pesan SMS</h3>

          <div class="row">
            <div class="col-sm-12">
                 <div class="border-btn" id="demoFont1" onclick="sms('+6282135077987','<?php echo $id ?>')"><i class="pe-7s-mail"></i>&nbsp;Customer 1</div>
            </div>
            <div class="col-sm-12">
                 <div class="border-btn" id="demoFont1" onclick="sms('+628119475777','<?php echo $id ?>')"><i class="pe-7s-mail"></i>&nbsp;Customer 2</div>
            </div>
             <div class="col-sm-12">
                 <div class="border-btn" id="demoFont1" onclick="sms('+628231492211','<?php echo $id ?>')"><i class="pe-7s-mail"></i>&nbsp;Customer 3</div>
             </div>
             <div class="col-sm-12">
                 <div class="border-btn" id="demoFont1" onclick="sms('+6281225533533','<?php echo $id ?>')"><i class="pe-7s-mail"></i>&nbsp;Customer 4</div>
             </div>
          </div>
        </div>

        <div id="contactForm2" class="contactForm">

          <h1 id="demoFont1" class="demoFont">Halo! Juragan Rumah</h1>

          <h3 id="demoFont" class="demoFont">WhatsApp</h3>

          <div class="row">

            <div class="col-sm-12">
                <div class="border-btn" id="demoFont1" onclick="wa('+6282135077987','<?php echo $id ?>')"><i class="fa fa-whatsapp"></i>&nbsp;Customer 1</div>
            </div>
            <div class="col-sm-12">
                 <div class="border-btn" id="demoFont1" onclick="wa('+628119475777','<?php echo $id ?>')"><i class="fa fa-whatsapp"></i>&nbsp;Customer 2</div>
            </div>
             <div class="col-sm-12">
                 <div class="border-btn" id="demoFont1" onclick="wa('+628231492211','<?php echo $id ?>')"><i class="fa fa-whatsapp"></i>&nbsp;Customer 3</div>
             </div>
             <div class="col-sm-12">
                 <div class="border-btn" id="demoFont1" onclick="wa('+6281225533533','<?php echo $id ?>')"><i class="fa fa-whatsapp"></i>&nbsp;Customer 4</div>
             </div>
          </div>
        </div>

<script>
    function telepon(tel,id) {
        
         $.ajax({
            url : "<?php echo site_url('index.php/stats/tel_agen/')?>" + id,
            type: "GET",
            dataType: "JSON",
            success: function(data)
            {              
                window.location.href='tel:'+tel+'';
                // console.log(data);
            },
        error: function (jqXHR, textStatus, errorThrown)
        {
            alert('Error get data from ajax');
        }
        });
    }

    function sms(tel,id) {
        
         $.ajax({
            url : "<?php echo site_url('index.php/stats/sms_agen/')?>" + id,
            type: "GET",
            dataType: "JSON",
            success: function(data)
            {              
                window.location.href='sms:'+tel+'?body=Hallo%20Juragan%20Rumah!';
                // console.log(data);
            },
        error: function (jqXHR, textStatus, errorThrown)
        {
            alert('Error get data from ajax');
        }
        });
    }

     function wa(tel,id) {
        
         $.ajax({
            url : "<?php echo site_url('index.php/stats/wa_agen/')?>" + id,
            type: "GET",
            dataType: "JSON",
            success: function(data)
            {              
                window.location.href='https://api.whatsapp.com/send?phone='+tel+'&text=halo%20JuraganRumah.net%0A%0AMohon%20info%20%0A%0Anama%20%3A%0Aemail%20%3A%0Adomisili%20%3A%0A%0ATerima%20kasih';
                // console.log(data);
            },
        error: function (jqXHR, textStatus, errorThrown)
        {
            alert('Error get data from ajax');
        }
        });
    }
</script>        