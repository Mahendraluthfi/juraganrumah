<div class="page-head"> 
            <div class="container">
                <div class="row">
                    <div class="page-head-content">
                        <h1 class="page-title">Detail Profile Produk</h1>               
                    </div>
                </div>
            </div>
        </div>
        <!-- End page header -->

        <!-- property area -->
        <div class="content-area single-property" style="background-color: #FCFCFC;">&nbsp;
            <div class="container">   

                <div class="clearfix padding-top-40" >

                    <div class="col-md-8 single-property-content prp-style-2">
                    
                        <div>
                            <div class="row">
                                <div class="light-slide-item">            
                                    <div class="clearfix">
                                        <div class="favorite-and-print">
                                            <a class="add-to-fav" href="#login-modal" data-toggle="modal">
                                                <i class="fa fa-star-o"></i>
                                            </a>
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
                                    <h4 class="s-property-title">Share Dengan Temanmu </h4> 
                                    <div class="roperty-social">
                                        <ul> 
                                        <li><a title="Share this on facebok " href="#"><img src="assets/img/social_big/fb.png"></a></li>                                      
                                        <li><a title="Share this on whatsapp " href="#"><img src="assets/img/social_big/wa.png"></a></li>                                      
                                        <li><a title="Share this on telegram     " href="#"><img src="assets/img/social_big/telegram.png"></a></li>                                        
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <?php ;} ?>
                        </div>

                        <?php 
                            $buyer =  $this->session->userdata('ses_nama');
                                if(!$buyer){ ?>
                                    <div class="register-blocks">
                                    <div class="col-md-6">
                                        <div class="text-center">
                                           <h2>Silahkan Buat janji survei </h2> <a href="<?php echo site_url().'register_buyer'?>" class="btn btn-default">Masuk</a>
                                        </div>
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
                               <form action="" method="post">
                                 <div class="col-md-3"></div>
                                 <div class="col-md-6">
                                   <div class="form-group">
                                     <label for="produk">Produk</label>
                                     <input type="hidden" name="id_produk" value="<?php $id ?>" class="form-control" id="produk" >
                                     <input type="text" value="<?php echo $nama ?>" class="form-control" id="produk" disabled>
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
                                        <a href="" ><img src="assets/backend/fotoproduk/<?php echo $su->file ?>"></a>
                                    </div>
                                    <div class="item-entry overflow">
                                        <h5><a href=""> <?php echo $su->nama_produk ?> </a></h5>
                                        <div class="dot-hr"></div>
                                        <span class="pull-left"><b> Luas Tanah :</b> <?php echo $su->luas_tanah ?> M</span>
                                        <span class="proerty-price pull-right">Rp <?php echo number_format($su->harga) ?></span> 
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
                                    <div class="inner-wrapper">
                                        <div class="single-property-header">                                          
                                            <h1 class="property-title"><?php echo $su->nama_produk ?> </h1>
                                            <span class="property-price">Rp <?php echo number_format($su->harga) ?></span>
                                        </div>

                                        <div class="property-meta entry-meta clearfix ">   
                                        <?php foreach($produk_detail as $su){ ?>
                                            <div class="col-xs-4 col-sm-4 col-md-4 p-b-15">
                                                <span class="property-info-icon icon-tag">                                                                                      
                                                    <img src="assets/img/icon/sale-orange.png">
                                                </span>
                                                <span class="property-info-entry">
                                                    <span class="property-info-label">Status</span>
                                                    <span class="property-info-value"><?php echo $su->status ?></span>
                                                </span>
                                            </div>

                                            <div class="col-xs-4 col-sm-4 col-md-4 p-b-15">
                                                <span class="property-info icon-area">
                                                    <img src="assets/img/icon/room-orange.png">
                                                </span>
                                                <span class="property-info-entry">
                                                    <span class="property-info-label">L .Bangunan</span>
                                                    <span class="property-info-value"><?php echo $su->luas_bangunan ?> M</span>
                                                </span>
                                            </div>

                                            <div class="col-xs-4 col-sm-4 col-md-4 p-b-15">
                                                <span class="property-info-icon icon-bed">
                                                    <img src="assets/img/icon/os-orange.png">
                                                </span>
                                                <span class="property-info-entry">
                                                    <span class="property-info-label">L .Tanah</span>
                                                    <span class="property-info-value"><?php echo $su->luas_tanah ?> M</span>
                                                </span>
                                            </div>

                                            <div class="col-xs-4 col-sm-4 col-md-4 p-b-15">
                                                <span class="property-info-icon icon-bath">
                                                    <img src="assets/img/icon/shawer-orange.png">
                                                </span>
                                                <span class="property-info-entry">
                                                    <span class="property-info-label">K .Mandi</span>
                                                    <span class="property-info-value"><?php echo $su->jumlah_kamar_mandi ?></span>
                                                </span>
                                            </div>
                                            <div class="col-xs-4 col-sm-4 col-md-4 p-b-15">
                                                <span class="property-info-icon icon-bath">
                                                    <img src="assets/img/icon/bed-orange.png">
                                                </span>
                                                <span class="property-info-entry">
                                                    <span class="property-info-label">K .Tidur</span>
                                                    <span class="property-info-value"><?php echo $su->jumlah_kamar_tidur ?></span>
                                                </span>
                                            </div>

                                            <div class="col-xs-4 col-sm-4 col-md-4 p-b-15">
                                                <span class="property-info-icon icon-garage">
                                                    <img src="assets/img/icon/cars-orange.png">
                                                </span>
                                                <span class="property-info-entry">
                                                    <span class="property-info-label">Carport</span>
                                                    <span class="property-info-value"><?php echo $su->carport ?></span>
                                                </span>
                                            </div>

                                            <div class="col-xs-4 col-sm-4 col-md-4 p-b-15">
                                                <span class="property-info-icon icon-garage">
                                                    <img src="assets/img/icon/kran_air.png">
                                                </span>
                                                <span class="property-info-entry">
                                                    <span class="property-info-label">Air</span>
                                                    <span class="property-info-value"><?php echo $su->jenis_air ?></span>
                                                </span>
                                            </div>

                                            <div class="col-xs-4 col-sm-4 col-md-4 p-b-15">
                                                <span class="property-info-icon icon-garage">
                                                    <img src="assets/img/icon/sertificate.png">
                                                </span>
                                                <span class="property-info-entry">
                                                    <span class="property-info-label">Sertifikat</span>
                                                    <span class="property-info-value"><?php echo $su->sertifikat ?></span>
                                                </span>
                                            </div>

                                            <div class="col-xs-4 col-sm-4 col-md-4 p-b-15">
                                                <span class="property-info-icon icon-garage">
                                                    <img src="assets/img/icon/almari.png">
                                                </span>
                                                <span class="property-info-entry">
                                                    <span class="property-info-label">Furnished</span>
                                                    <span class="property-info-value"><?php echo $su->furnished ?></span>
                                                </span>
                                            </div>

                                            <div class="col-xs-4 col-sm-4 col-md-4 p-b-15">
                                                <span class="property-info-icon icon-garage">
                                                    <img src="assets/img/icon/lahan.png">
                                                </span>
                                                <span class="property-info-entry">
                                                    <span class="property-info-label">Hook Pojok</span>
                                                    <span class="property-info-value"><?php echo $su->hook_pojok ?></span>
                                                </span>
                                            </div>
                                            <?php ; }?>
                                        </div>

                                        <div class="dealer-section-space">
                                            <span>Dealer information</span>
                                        </div>
                                        <div class="clear">
                                            <div class="col-xs-4 col-sm-4 dealer-face">
                                                <a href="">
                                                    <img src="assets/img/client-face1.png" class="img-circle">
                                                </a>
                                            </div>
                                            <div class="col-xs-8 col-sm-8 ">
                                                <h3 class="dealer-name">
                                                    <a href="">Nathan James</a>
                                                    <span>Real Estate Agent</span>        
                                                </h3>
                                                <div class="dealer-social-media">
                                                    <a class="twitter" target="_blank" href="">
                                                        <i class="fa fa-twitter"></i>
                                                    </a>
                                                    <a class="facebook" target="_blank" href="">
                                                        <i class="fa fa-facebook"></i>
                                                    </a>
                                                    <a class="gplus" target="_blank" href="">
                                                        <i class="fa fa-google-plus"></i>
                                                    </a>
                                                    <a class="linkedin" target="_blank" href="">
                                                        <i class="fa fa-linkedin"></i>
                                                    </a> 
                                                    <a class="instagram" target="_blank" href="">
                                                        <i class="fa fa-instagram"></i>
                                                    </a>       
                                                </div>

                                            </div>
                                        </div>

                                        <div class="clear">
                                            <ul class="dealer-contacts">                                       
                                                <li><i class="pe-7s-map-marker strong"> </i> 9089 your adress her</li>
                                                <li><i class="pe-7s-mail strong"> </i> email@yourcompany.com</li>
                                                <li><i class="pe-7s-call strong"> </i> +1 908 967 5906</li>
                                            </ul>
                                            <p>Duis mollis  blandit tempus porttitor curabiturDuis mollis  blandit tempus porttitor curabitur , est non…</p>
                                        </div>
                                    
                                    </div>
                                </div>
                            </div>


                            <div class="panel panel-default sidebar-menu wow fadeInRight animated">
                                <div class="panel-heading">
                                    <h3 class="panel-title">Ads her  </h3>
                                </div>
                                <div class="panel-body recent-property-widget">
                                    <img src="assets/img/ads.jpg">
                                </div>
                            </div>

                        </aside>
                    </div>

                </div>
                <div id="map" style="height: 400px;"></div>


            </div>
        </div>