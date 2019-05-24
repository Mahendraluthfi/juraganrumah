<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" > <!--<![endif]-->
    <head>
        <meta charset="UTF-8">
        <title>JuraganRumah</title>
        <link href="<?php echo base_url() ?>assets/img/juraganrumahlogo.png" rel="icon" type="image/x-icon">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <!--meta tag share facebook/wa-->
        <?php if($this->uri->segment(1) == "properti_detail"){ ?>
        <!-- Open Graph data -->
        <meta property="og:title" content="<?php foreach ($produk_detail as $data){ echo substr($data->nama_produk, 0, 50).'...' ?>" />
        <meta property="og:type" content="article" />
        <meta property="og:url" content="<?php echo base_url(); ?>properti_detail?id_produk=<?php echo $data->id_produk?>&nama_produk=<?php echo $data->nama_produk ; }?>" />
        <meta property="og:image" content="<?php foreach ($meta_detail_foto as $data){ echo base_url('assets/backend/fotoproduk/'. $data->file); } ?>" />
        <meta property="og:description" content="<?php foreach ($produk_detail as $data){ echo substr($data->description, 0, 60).'...'; }?>" />
        <meta property="og:site_name" content="Juragan Rumah" />
        <meta property="og:image:type" content="image/jpeg" />
        <meta property="og:image:width" content="650" />
        <meta property="og:image:height" content="366" />
        <meta content='2211981622461185' property='fb:admins'/>
        <meta content='1275111962639567' property='fb:app_id'/>
        <?php }else{ ?>
        <!-- Open Graph data -->
        <meta property="og:title" content="Juraganrumah&nbsp;-&nbsp;Kunci Properti Anda" />
        <meta property="og:type" content="article" />
        <meta property="og:url" content="<?php echo base_url(); ?>" />
        <meta property="og:image" content="<?php echo base_url() ?>assets/img/Baner_Beranda/photo6170283183350851753.jpg" />
        <meta property="og:description" content="Kunjungi website kami www.juraganrumah.net beli properti dengan mudah dan menjadi agen kami supaya mendapatkan banyak Keuntungan" />
        <meta property="og:site_name" content="Juragan Rumah" />
        <meta property="og:image:type" content="image/jpeg" />
        <meta property="og:image:width" content="960" />
        <meta property="og:image:height" content="547" />
        <meta content='2211981622461185' property='fb:admins'/>
        <meta content='1275111962639567' property='fb:app_id'/>
        <!--end-->
    <?php } ?>
        <link rel="alternate" type="application/rss+xml" title="Judul RSS Anda" href="<?php echo base_url() ?>rss" />
        <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,700,800' rel='stylesheet' type='text/css'>
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">

        <!-- Place favicon.ico and apple-touch-icon.png in the root directory -->
        <link href="<?php echo base_url() ?>assets/css/normalize.css" rel="stylesheet">
        <link href="<?php echo base_url() ?>assets/css/font-awesome.min.css" rel="stylesheet">
        <link href="<?php echo base_url() ?>assets/css/fontello.css" rel="stylesheet">
        <link href="<?php echo base_url() ?>assets/fonts/icon-7-stroke/css/pe-icon-7-stroke.css" rel="stylesheet">
        <link href="<?php echo base_url() ?>assets/fonts/pe-icon-7-stroke/css/pe-icon-7-stroke.css" rel="stylesheet">
        <link href="<?php echo base_url() ?>assets/fonts/icon-7-stroke/css/helper.css" rel="stylesheet">
        <link href="<?php echo base_url() ?>assets/fonts/pe-icon-7-stroke/css/helper.css" rel="stylesheet">
        <link href="<?php echo base_url() ?>assets/css/animate.css" rel="stylesheet" media="screen">
        <link href="<?php echo base_url() ?>assets/css/bootstrap-select.min.css" rel="stylesheet"> 
        <link href="<?php echo base_url() ?>bootstrap/css/bootstrap.min.css" rel="stylesheet">
        <link href="<?php echo base_url() ?>assets/css/icheck.min_all.css" rel="stylesheet">
        <link href="<?php echo base_url() ?>assets/css/price-range.css" rel="stylesheet">
        <link href="<?php echo base_url() ?>assets/css/owl.carousel.css" rel="stylesheet">  
        <link href="<?php echo base_url() ?>assets/css/owl.theme.css" rel="stylesheet">
        <link href="<?php echo base_url() ?>assets/css/owl.transitions.css" rel="stylesheet">
        <link href="<?php echo base_url() ?>assets/css/lightslider.min.css" rel="stylesheet">
        <link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>assets/backend/assets/libs/select2/dist/css/select2.min.css">
        <link href="<?php echo base_url() ?>assets/css/cart.css" rel="stylesheet">
        <link href="<?php echo base_url() ?>assets/css/agen.css" rel="stylesheet">
        <link href="<?php echo base_url() ?>assets/css/corusel.css" rel="stylesheet">
        <link href="<?php echo base_url() ?>assets/css/slider.css" rel="stylesheet">
        <link href="<?php echo base_url() ?>assets/css/mitra_developer.css" rel="stylesheet">
        <link href="<?php echo base_url() ?>assets/css/logo_bank.css" rel="stylesheet">
        <link href="<?php echo base_url() ?>assets/css/card-produk.css" rel="stylesheet">
        <link href="<?php echo base_url() ?>assets/css/contact_melayang.css" rel="stylesheet">
        <link href="<?php echo base_url() ?>assets/css/style.css" rel="stylesheet">
        <link href="<?php echo base_url() ?>assets/css/responsive.css" rel="stylesheet">
    </head>
    <body>
        <div id="preloader">
           <div id="status">&nbsp;</div>
           <!--<div id="status1">&nbsp;</div>-->
        </div>
        <!-- Body content -->

        <div class="header-connect">
            <div class="container">
                <div class="row">
                    <div class="col-md-6 col-sm-8  col-xs-12">
                        <div class="header-half header-call">
                            <p>
                                <span><i class="pe-7s-call"></i> (024) 76443701</span>
                                <span><i class="pe-7s-mail"></i> info@juraganrumah.net</span>
								<br><span><i class="pe-7s-map-marker strong"></i> Jl. Veteran No. 48 Semarang</span> <br> 
                                <span><i class="pe-7s-map-marker strong"></i>  Mall Mega Bekasi lantai 3 unit 80 | Jl. Jenderal Ahmad Yani no 1 bekasi </span>
                            </p>
                        </div>
                    </div>
                    <div class="col-md-2 col-md-offset-4  col-sm-3 col-sm-offset-1  col-xs-12">
                        <div class="pull-right"> 
                                    <div class="social pull-right ">
                                        <ul> 
                                        <li><a title="Share this on facebok " onclick="window.location.href='https://www.facebook.com/dialog/share?app_id=966242223397117&display=popup&href=https%3A%2F%2Fwww.juraganrumah.net%2F'"><i class="fab fa-facebook"></i></a></li>                                   
                                        <li><a title="Share this on whatsapp " onclick="window.location.href='https://api.whatsapp.com/send?text=https://www.juraganrumah.net/'"><i class="fab fa-whatsapp"></i></a></li>                                      
                                        <li><a onclick="window.location.href='https://telegram.me/share/url?url=https://www.juraganrumah.net/'"><i class="fab fa-telegram-plane fa-2x"></i></a></li>                                        
                                        </ul>
                                    </div> 
                                </div>
                    </div>
                </div>
            </div>
        </div>        
        <!--End top header -->
        <div id="myHeader">
        <nav class="navbar navbar-default ">
            <div class="container-fluid">
                <!-- Brand and toggle get grouped for better mobile display -->
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navigation">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="<?php echo base_url() ?>"><img src="<?php echo base_url() ?>assets/img/juragnrumah_header.png" alt=""></a>
                </div>
                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse yamm" id="navigation">
                    <div class="button navbar-right">
                        <?php
                            $buyer =  $this->session->userdata('ses_nama');
                            if($buyer)
                            { ?>
                            <ul> 
                                <li class="dropdown ">
                                   <a href="<?php site_url(); ?>cart">
                                        <i class="pe-7s-cart fa-2x" data-toggle="tooltip" title="Keranjang Anda" data-placement="bottom"></i>&nbsp;&nbsp;
                                    </a>
                                    <?php  foreach($foto_buyer as $su){ ?>
                                        <?php if($su->file){ ?>
                                        <a href="index.html" class="dropdown-toggle " data-toggle="dropdown" data-hover="dropdown">
                                           <img data-toggle="tooltip" title="Profil Anda" data-placement="bottom" class="img-buyer" style="width: 40px; max-width: 40px" src="<?php echo base_url();?>/assets/fotobuyer/<?php echo $su->file; ?>" title=""/>
                                        </a>
                                    <?php }else{ ?>
                                        <a href="index.html" class="dropdown-toggle " data-toggle="dropdown" data-hover="dropdown">
                                       <img data-toggle="tooltip" title="Profil Anda" data-placement="bottom" class="img-buyer" style="width: 40px; max-width: 40px" src="<?php echo base_url();?>/assets/fotobuyer/default_profile.png" title=""/>
                                    </a>
                                    <?php } }?>
                                    <ul class="dropdown-menu navbar-nav" style="margin-right: 100px;top: 60px">
                                        <li><a href="<?php echo site_url().'Profile_buyer'?>" style="color: white">Profile</a> </li>
                                        <li><a href="<?php echo site_url().'signin/logout'?>" style="color: white">Keluar</a> </li>
                                    </ul>
                                </li>
                            </ul>
                        <?php }else{ ?>
                                <button class="navbar-btn nav-button login" onclick=' window.open("<?php echo site_url() ?>signin")' data-wow-delay="0.45s">Masuk</button>
                                <button class="navbar-btn nav-button" onclick=' window.open("<?php echo site_url() ?>register_buyer")' data-wow-delay="0.48s">Register</button>
                        <?php } ?>
                    </div>
                    <ul class="main-nav nav navbar-nav navbar-right">
                        <li>                        
                            <a class="<?php if($this->uri->segment(1) == "home"){echo "active";} ?>" href="<?php echo site_url() ?>home">Beranda</a>
                        </li>
                         <li>                        
                            <a class="<?php if($this->uri->segment(1) == "tentang_kami"){echo "active";} ?>" href="<?php echo site_url() ?>tentang_kami">Tentang Kami</a>
                        </li>
                        <li>
                            <a class="<?php if($this->uri->segment(1) == "artikel"){echo "active";} ?>" href="<?php echo site_url() ?>artikel">Artikel</a>
                        </li>
                        <li class="dropdown ymm-sw fadeInDown">
                            <a href="#" class="dropdown-toggle <?php if(($this->uri->segment(1) == "properti_rumah") OR ($this->uri->segment(1) == "properti_rumah_subsidi") OR ($this->uri->segment(1) == "properti_rumah_kost") OR ($this->uri->segment(1) == "properti_apartement") OR ($this->uri->segment(1) == "properti_kavling") OR ($this->uri->segment(1) == "properti_ruko")){echo "active";} ?>" data-toggle="dropdown" data-hover="dropdown">Properti Kami <b class="caret"></b></a>
                            <ul class="dropdown-menu navbar-nav">
                                <li><a href="<?php echo site_url() ?>properti_rumah">Rumah</a> </li>
                                <li><a href="<?php echo site_url() ?>properti_rumah_subsidi" >Perumahan Subsidi</a> </li>
                                <li><a href="<?php echo site_url() ?>properti_rumah_kost" >Rumah Kost</a> </li>
                                <li><a href="<?php echo site_url() ?>properti_apartement">Apartement</a> </li> 
                                <li><a href="<?php echo site_url() ?>properti_kavling">Kavling</a> </li> 
                                <li><a href="<?php echo site_url() ?>properti_ruko">Ruko</a> </li> 
                            </ul>
                        </li>
						<li class="dropdown ymm-sw fadeInDown" >
                            <a href="#" class="dropdown-toggle <?php if(($this->uri->segment(1) == "kemitraan") OR ($this->uri->segment(1) == "agen") ){echo "active";} ?>"  data-toggle="dropdown" data-hover="dropdown">Kemitraan <b class="caret"></b></a>
                            <ul class="dropdown-menu navbar-nav">
                                <li><a href="<?php echo site_url() ?>kemitraan" >Kemitraan</a> </li>
                                <li><a href="<?php echo site_url() ?>bisnis">Agen</a> </li>
                            </ul>
                        </li>
                        <li>
                            <a class="<?php if($this->uri->segment(1) == "kontak_kami"){echo "active";} ?>" href="<?php echo site_url() ?>kontak_kami">Kontak Kami</a>
                        </li>
                    </ul>
                </div><!-- /.navbar-collapse -->
                </div><!-- /.container-->
            </div><!-- myHeader -->
        </nav>
        <!-- End of nav bar -->
		
        <!-- Start Content-->
        <div class="content">
		<?php $this->load->view($content); ?>
        </div>
		<!--End Content-->
		
        <!-- Footer area-->
        <div class="footer-area">

            <div class=" footer">
                <div class="container">
                    <div class="row">

                        <div class="col-md-3 col-sm-6">
                            <div class="single-footer">
                                <h4>TENTANG KAMI </h4>
                                <div class="footer-title-line"></div>
                                <img src="<?php echo base_url() ?>assets/img/juragnrumah_header.png" alt="" class="wow pulse">
                                <p>Hubungi Kami untuk Konsultasi</p>
                                <ul class="footer-adress">
                                    <li><i class="pe-7s-map-marker strong"> </i>Jl. Veteran No. 48 Semarang</li>
                                    <li><i class="pe-7s-mail strong"> </i> info@juraganrumah.net</li>
                                    <li><i class="pe-7s-call strong"> </i>(024) 76443701</li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-md-3 col-sm-6">
                            <div class="single-footer">
                                <h4>TAUTAN LANGSUNG </h4>
                                <div class="footer-title-line"></div>
                                <ul class="footer-menu">
                                    <li><a href="<?php echo site_url() ?>properti">Properti</a></li> 
                                    <li><a href="<?php echo site_url() ?>tentang_kami">Tentang Kami</a></li> 
                                    <li><a href="<?php echo site_url() ?>Kontak_kami">Kontak Kami</a></li> 
                                    <li><a href="<?php echo site_url() ?>Home">FAQ</a>  </li> 
                                    <li><a href="<?php echo site_url() ?>Home">Ketentuan </a>  </li> 
                                </ul>
                            </div>
                        </div>
                        <div class="col-md-3 col-sm-6">
                            <div class="single-footer">
                                <h4>BERITA TERBARU</h4>
                                <div class="footer-title-line"></div>
                                <ul class="footer-blog">
                                     <?php  foreach ( $newest as $suartikel ){ ?>
                                    <li>
                                        <div class="col-md-3 col-sm-4 col-xs-4 blg-thumb pfooter">
                                            <a href="<?php echo base_url() ?>artikel/view/<?php echo $suartikel->id_artikel; ?>">
                                                <img src="<?php echo base_url() ?>assets/backend/fotoartikel/<?php echo $suartikel->foto; ?>" height="60" width="53">
                                            </a>
                                            <span class="blg-date"><?php echo date('d-m-Y', strtotime($suartikel->datetime)); ?></span>
                                        </div>
                                        <div class="col-md-8  col-sm-8 col-xs-8  blg-entry">
                                            <h6> <a href="<?php echo base_url() ?>artikel/view/<?php echo $suartikel->id_artikel; ?>"><?php echo substr($suartikel->judul, 0, 16); ?> </a></h6> 
                                            <p style="line-height: 17px; padding: 8px 2px;"><?php echo substr(strip_tags($suartikel->isi), 0, 34).'...'; ?></p>
                                        </div>
                                    </li>                                      
                                    <?php } ?>
                                </ul>
                            </div>
                        </div>
                        <div class="col-md-3 col-sm-6">
                            <div class="single-footer news-letter">
                                <h4>TETAP TERHUBUNG</h4>
                                <div class="footer-title-line"></div>
                                <p>Cara terbaik dan tercepat untuk mendapatkan informasi terbaru JuraganRumah.net adalah dengan berlangganan Newsletter Kami. .</p>

                                <form>
                                    <div class="input-group">
                                        <input class="form-control" type="text" placeholder="E-mail ... ">
                                        <span class="input-group-btn">
                                            <button class="btn btn-primary subscribe" type="button"></button>
                                        </span>
                                    </div>
                                    <!-- /input-group -->
                                </form> 

                                <div class="pull-right"> 
                                    <div class="social pull-right ">
                                        <ul> 
                                        <li><a title="Share this on facebok " href="https://www.facebook.com/dialog/share?app_id=966242223397117&display=popup&href=https%3A%2F%2Fwww.juraganrumah.net%2F"><i class="fab fa-facebook"></i></a></li>                                   
                                        <li><a title="Share this on whatsapp " href="https://api.whatsapp.com/send?text=https://www.juraganrumah.net/"><i class="fab fa-whatsapp"></i></a></li>                                      
                                        <li><a onclick="window.location.href='https://telegram.me/share/url?url=https://www.juraganrumah.net/'"><i class="fab fa-telegram-plane fa-2x"></i></a></li>                                        
                                        </ul>
                                    </div> 
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>

            <div class="footer-copy text-center">
                <div class="container">
                    <div class="row">
                        <div class="pull-left">
                            <span> (C) <a href="http://www.juraganrumah.net">JuraganRumah</a> , All rights reserved 2019  </span> 
                        </div> 
                        <div class="bottom-menu pull-right "> 
                            <ul> 
                                <li><a class="wow fadeInUp animated" href="#" data-wow-delay="0.2s">Beranda</a></li>
                                <li><a class="wow fadeInUp animated" href="#" data-wow-delay="0.3s">Properti Kami</a></li>
                                <li><a class="wow fadeInUp animated" href="#" data-wow-delay="0.4s">Faq</a></li>
                                <li><a class="wow fadeInUp animated" href="#" data-wow-delay="0.6s">Kontak Kami</a></li>
                            </ul> 
                        </div>
                    </div>
                </div>
            </div>

        </div>

        <script src="<?php echo base_url() ?>/assets/js/modernizr-2.6.2.min.js" type="text/javascript"></script>
        <script src="<?php echo base_url() ?>/assets/js/jquery-1.10.2.min.js" type="text/javascript"></script> 
        <script  type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script> 
        <script src="<?php echo base_url() ?>/bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
        <script src="<?php echo base_url() ?>/assets/js/bootstrap-select.min.js" type="text/javascript"></script>
        <script src="<?php echo base_url() ?>/assets/js/bootstrap-hover-dropdown.js" type="text/javascript"></script>
        <script src="<?php echo base_url() ?>/assets/js/easypiechart.min.js" type="text/javascript"></script>
        <script src="<?php echo base_url() ?>/assets/js/jquery.easypiechart.min.js" type="text/javascript"></script>
        <script src="<?php echo base_url() ?>/assets/js/owl.carousel.min.js" type="text/javascript"></script>
        <script src="<?php echo base_url() ?>/assets/js/wow.js" type="text/javascript"></script>
        <script src="<?php echo base_url() ?>/assets/js/icheck.min.js" type="text/javascript"></script>
        <script src="<?php echo base_url() ?>/assets/js/price-range.js" type="text/javascript"></script>
        <script src="<?php echo base_url() ?>/assets/js/lightslider.min.js" type="text/javascript"></script>
        <script src="<?php echo base_url() ?>assets/backend/assets/libs/select2/dist/js/select2.full.min.js"></script>
        <script src="<?php echo base_url() ?>assets/backend/assets/libs/select2/dist/js/select2.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.6.0/slick.js"></script>
        <script src="<?php echo base_url() ?>assets/js/main.js" type="text/javascript"></script>
        <script type="text/javascript">
            $('#password, #confirm_password').on('keyup', function () {
                if ($('#password').val() == $('#confirm_password').val()) {
                    $('#message').html('Matching').css('color', 'green');
                    $('#btnreg').removeAttr('disabled');
                }else{
                    $('#message').html('Not Matching').css('color', 'red'); 
                    $('#btnreg').attr('disabled', true);
                }
            });
            $(document).ready(function(){
                $('#email_mitra').change(function(){
                var email = $('#email_mitra').val();
                if(email){
                    $.ajax({
                    url: "<?php echo base_url(); ?>register_mitra/email_validasi",
                    method: "POST",
                    data: {email:email},
                    success: function(data){
                    $('#see_email').html(data);
                    }
                    });
                    }
            });
            });
            $(document).ready(function(){
                $('#email_buyer').change(function(){
                var email = $('#email_buyer').val();
                if(email){
                    $.ajax({
                    url: "<?php echo base_url(); ?>register_buyer/email_validasi",
                    method: "POST",
                    data: {email:email},
                    success: function(data){
                    $('#see_email').html(data);
                    }
                    });
                    }
            });
            });
             $(document).ready(function(){
                $('#email_agen').change(function(){
                var email = $('#email_agen').val();
                if(email){
                    $.ajax({
                    url: "<?php echo base_url(); ?>Register_agen/email_validasi",
                    method: "POST",
                    data: {email:email},
                    success: function(data){
                    $('#see_email').html(data);
                    }
                    });
                    }
            });
            });
              $(document).ready(function(){
                $('#username_agen').change(function(){
                var username = $('#username_agen').val();
                if(username){
                    $.ajax({
                    url: "<?php echo base_url(); ?>Register_agen/username_validasi",
                    method: "POST",
                    data: {username:username},
                    success: function(data){
                    $('#see_username').html(data);
                    }
                    });
                    }
            });
            });
              /*Password Validasi buyer */
              $(document).ready(function(){
                $('#passwordlama').on('keyup', function (){
                var password = $('#passwordlama').val();
                if(password){
                    $.ajax({
                    url: "<?php echo base_url(); ?>Profile_buyer/password_validasi",
                    method: "POST",
                    data: {password:password},
                    success: function(data){
                    $('#see_password').html(data);
                    }
                    });
                    }
            });
            });
        $(document).ready(function(){
            $('#prov').change(function(){
            var id=$(this).val();
                $.ajax({
                url : "<?php echo site_url();?>home/get_kabkot",
                method : "POST",
                data : {id: id},
                async : false,
                dataType : 'json',
                success: function(data){
                var html = '';
                var i;
                html += '<option value="0">-- Pilih Kota --</option>';                    
                for(i=0; i<data.length; i++){
                    html += '<option value="'+data[i].id_kabkot+'">'+data[i].nama_kabkot+'</option>';
                }
                $('#kabkot').html(html);                      
                // $('#kabkot').trigger('change');                        
                }
            });
            });
        });

        $(document).ready(function(){
                $('.kabkot').change(function(){
                    var id=$(this).val();
                    $.ajax({
                        url : "<?php echo site_url();?>home/get_kec",
                        method : "POST",
                        data : {id: id},
                        async : false,
                        dataType : 'json',
                        success: function(data){
                            var html = '';
                            var i;
                            for(i=0; i<data.length; i++){
                                html += '<option value="'+data[i].id_kec+'">'+data[i].nama_kec+'</option>';
                            }
                            $('.kec').html(html);
                            
                        }
                    });
                });
            });
            $(document).ready(function () {
               $('#image-gallery').lightSlider({
                 gallery: true,
                 item: 1,
                 thumbItem: 9,
                 slideMargin: 0,
                 speed: 500,
                 auto: true,
                 loop: true,
            onSliderLoad: function () {
            $('#image-gallery').removeClass('cS-hidden');
                 }
               });
            });
            $(".select2").select2();
            $('#printInvoice').click(function(){
            Popup($('.invoice')[0].outerHTML);
            function Popup(data) 
            {
                window.print();
                return true;
            }
            });
            $('.carousel.carousel-slider').carousel({fullWidth: false});
            window.onscroll = function() {myFunction()};
            var header = document.getElementById("myHeader");
            var sticky = header.offsetTop;
            function myFunction() {
              if (window.pageYOffset > sticky) {
                header.classList.add("sticky");
              } else {
                header.classList.remove("sticky");
              }
            }
            var $body   = $(document.body);
            var navHeight = $('.lflRjR').outerHeight(true) + 210;
            $('#lflRjR').affix({
                  offset: {
                    top: 550,
                    bottom: navHeight
                  }
            });
            $body.scrollspy({
                target: '#lflRjR',
                offset: navHeight
            });

            /* mitra page*/
            function myFunction() {
              if (window.pageYOffset > sticky) {
                header.classList.add("sticky1");
              } else {
                header.classList.remove("sticky1");
              }
            }
            var $body   = $(document.body);
            var navHeight = $('.lflRjR1').outerHeight(true) + 210;
            $('#lflRjR1').affix({
                  offset: {
                    top: 780,
                    bottom: navHeight
                  }
            });
            $body.scrollspy({
                target: '#lflRjR1',
                offset: navHeight
            });
            /*pop up Contact*/
            $(function() {
              // contact form animations
              $('#contact').click(function() {
                $('#contactForm').fadeToggle();
              })
              $(document).mouseup(function (e) {
                var container = $("#contactForm");
                if (!container.is(e.target) // if the target of the click isn't the container...
                    && container.has(e.target).length === 0) // ... nor a descendant of the container
                {
                    container.fadeOut();
                }
              });
            });
             $(function() {
              // contact form animations
              $('#contactmob').click(function() {
                $('#contactForm').fadeToggle();
              })
              $(document).mouseup(function (e) {
                var container = $("#contactForm");
                if (!container.is(e.target) // if the target of the click isn't the container...
                    && container.has(e.target).length === 0) // ... nor a descendant of the container
                {
                    container.fadeOut();
                }
              });
            });
            $(function() {
              // contact form animations
              $('#contact1').click(function() {
                $('#contactForm1').fadeToggle();
              })
              $(document).mouseup(function (e) {
                var container = $("#contactForm1");
                if (!container.is(e.target) // if the target of the click isn't the container...
                    && container.has(e.target).length === 0) // ... nor a descendant of the container
                {
                    container.fadeOut();
                }
              });
            });
            $(function() {
              // contact form animations
              $('#contactmob1').click(function() {
                $('#contactForm1').fadeToggle();
              })
              $(document).mouseup(function (e) {
                var container = $("#contactForm1");
                if (!container.is(e.target) // if the target of the click isn't the container...
                    && container.has(e.target).length === 0) // ... nor a descendant of the container
                {
                    container.fadeOut();
                }
              });
            });
            $(function() {
              // contact form animations
              $('#contact2').click(function() {
                $('#contactForm2').fadeToggle();
              })
              $(document).mouseup(function (e) {
                var container = $("#contactForm2");
                if (!container.is(e.target) // if the target of the click isn't the container...
                    && container.has(e.target).length === 0) // ... nor a descendant of the container
                {
                    container.fadeOut();
                }
              });
            });
            $(function() {
              // contact form animations
              $('#contactmob2').click(function() {
                $('#contactForm2').fadeToggle();
              })
              $(document).mouseup(function (e) {
                var container = $("#contactForm2");
                if (!container.is(e.target) // if the target of the click isn't the container...
                    && container.has(e.target).length === 0) // ... nor a descendant of the container
                {
                    container.fadeOut();
                }
              });
            });
            /*end mitra page*/

            $(document).ready(function(){
                $('.customer-logos').slick({
                    slidesToShow: 6,
                    slidesToScroll: 1,
                    autoplay: true,
                    autoplaySpeed: 1500,
                    arrows: false,
                    dots: false,
                    pauseOnHover: false,
                    responsive: [{
                        breakpoint: 768,
                        settings: {
                            slidesToShow: 4
                        }
                    }, {
                        breakpoint: 520,
                        settings: {
                            slidesToShow: 3
                        }
                    }]
                });
            });
            $(document).ready(function(){
              $('[data-toggle="tooltip"]').tooltip(); 
            });
        </script>   
        <script src="https://maps.googleapis.com/maps/api/js?v=3.exp&amp;sensor=false"></script>
        <script src="<?php echo base_url() ?>/assets/js/gmaps.js"></script>        
        <script src="<?php echo base_url() ?>/assets/js/gmaps.init.js"></script>

    </body>
</html>