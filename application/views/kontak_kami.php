
        <div class="page-head"> 
            <div class="container">
                <div class="row">
                    <div class="page-head-content">
                        <h1 class="page-title">Kontak Kami</h1>               
                    </div>
                </div>
            </div>
        </div>
        <!-- End page header -->

        <!-- property area -->
        <div class="content-area recent-property padding-top-40" style="background-color: #FFF;">
            <div class="container">  

                <div class="col-md-9">

                    <div class="" id="contact1">                        
                        <div class="row">
                            <div class="col-sm-4">
                                <h3> Sampaikan ide/ saran/ pertanyaan Anda langsung kepada Kami</h3>
                                <p><i class="fa fa-map-marker"></i> WISMA PURBA DANARTA
                                    <br> Jl. Veteran No. VII
                                    <br> Semarang
                                    <br> Jawa Tengah
                                    <br>
                                    <strong>Indonesia</strong>
                                </p>
                                 <i class="fa fa-envelope"></i><strong> <a href="mailto:info@juraganrumah.net">info@juraganrumah.net</a></strong>   
                            </div>
                            <!-- /.col-sm-4 -->
                            <div class="col-sm-4">
                                <h3> Kontak Kantor</h3>
                                <p class="text-muted">Untuk menghubungi Kami melalui telpon lokal silahkan kontak ke</p>
                                <i class="fa fa-phone"></i><strong>   +6224 831-4793 Ext. 208</strong>
                            </div>
                            <!-- /.col-sm-4 -->
                            <div class="col-sm-4">
                                <h3> Whatsapp/Telegram - 24/7</h3>
                                <p class="text-muted">Untuk menghubungi Kami melalui Whatsapp silahkan ke</p>
                                <ul>
                                   <p><i class="fa fa-whatsapp"></i> 0821 3507 7987
                                   <br><i class="fa fa-whatsapp"></i> 0811 9475 777
                    
                                   <br><i img src="<?php echo base_url(); ?>assets/img/social_big/telegram.png"></i> 
                                   <h6> Telegram: @OfficialJuraganRumah </h6>
                                   </p>
                                </ul>

                            </div>
                            <!-- /.col-sm-4 -->
                        </div>
                        <!-- /.row --> 
                       
                        <hr>
                        <h2>Contact form</h2>
                        <br>
                        <form>
                            <div class="row">
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label for="firstname">Nama Pertama</label>
                                        <input type="text" name="nama_pertama"class="form-control"  placeholder="Nama Pertama" required="">
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label for="lastname">Nama Terakhir</label>
                                        <input type="text" class="form-control" id="lastname">
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label for="email">Email</label>
                                        <input type="text" class="form-control" id="email">
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label for="subject">Subyek</label>
                                        <input type="text" class="form-control" id="subject">
                                    </div>
                                </div>
                                <div class="col-sm-12">
                                    <div class="form-group">
                                        <label for="message">Pesan</label>
                                        <textarea id="message" class="form-control"></textarea>
                                    </div>
                                </div>
                                <div class="col-sm-12 text-center">
                                    <button type="submit" class="btn btn-primary"><i class="fa fa-envelope-o"></i> Kirim Pesan</button>
                                </div>
                            </div>
                            <!-- /.row -->
                        </form>
                    </div>
                </div>
                <!-- /.col-md-9 -->   

                <div class="col-md-3 ">                    
                    <div class="blog-asside-right">  
                        <div class="panel panel-default sidebar-menu wow fadeInRight animated">
                            <div class="panel-heading">
                                <h3 class="panel-title">Recommended</h3>
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
                        </div>
                    </div>                     
                </div>            
            </div>
        </div>
         <!--<div id="map" style="height: 400px;"></div>-->
         <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d907.8586565502552!2d110.41448409088866!3d-6.996335160633784!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e708b67f88fe863%3A0x837da69882d652a4!2sWisma+Purba+Danarta!5e0!3m2!1sid!2sid!4v1555730879806!5m2!1sid!2sid" width="100%" height="400" frameborder="0" style="border:0" allowfullscreen></iframe>
