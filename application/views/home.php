<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>JuraganRumah | Beranda</title>
        <meta name="description" content="GARO is a real-estate template">
        <meta name="author" content="Kimarotec">
        <meta name="keyword" content="html5, css, bootstrap, property, real-estate theme , bootstrap template">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,700,800' rel='stylesheet' type='text/css'>
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">

        <!-- Place favicon.ico and apple-touch-icon.png in the root directory -->
        <link href="<?php echo base_url() ?>assets/img/juragan_rumah_logo.png" rel="icon" type="image/x-icon">
        <link href="<?php echo base_url() ?>assets/css/normalize.css" rel="stylesheet">
        <link href="<?php echo base_url() ?>assets/css/font-awesome.min.css" rel="stylesheet">
        <link href="<?php echo base_url() ?>assets/css/fontello.css" rel="stylesheet">
        <link href="<?php echo base_url() ?>assets/fonts/icon-7-stroke/css/pe-icon-7-stroke.css" rel="stylesheet">
        <link href="<?php echo base_url() ?>assets/fonts/icon-7-stroke/css/helper.css" rel="stylesheet">
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
        <link href="<?php echo base_url() ?>assets/css/style.css" rel="stylesheet">
        <link href="<?php echo base_url() ?>assets/css/responsive.css" rel="stylesheet">
    </head>
    <body>

        <div id="preloader">
            <div id="status">&nbsp;</div>
            <div id="status1">&nbsp;</div>
        </div>
        <!-- Body content -->

        <div class="header-connect">
            <div class="container">
                <div class="row">
                    <div class="col-md-5 col-sm-8  col-xs-12">
                        <div class="header-half header-call">
                            <p>
                                <span><i class="pe-7s-call"></i> (024) 8314793 Ext. 208</span>
                                <span><i class="pe-7s-mail"></i> info@juraganrumah.net</span>
								<br><span><i class="pe-7s-map-marker strong"></i> WISMA PURBA DANARTA | Jl. Veteran No. VII Semarang</span>
                            </p>
                        </div>
                    </div>
                    <div class="col-md-2 col-md-offset-5  col-sm-3 col-sm-offset-1  col-xs-12">
                        <div class="header-half header-social">
                            <ul class="list-inline">
                                <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                <li><a href="#"><i class="fa fa-vine"></i></a></li>
                                <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                                <li><a href="#"><i class="fa fa-dribbble"></i></a></li>
                                <li><a href="#"><i class="fa fa-instagram"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>        
        <!--End top header -->

        <nav class="navbar navbar-default ">
            <div class="container">
                <!-- Brand and toggle get grouped for better mobile display -->
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navigation">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="index.html"><img src="<?php echo base_url() ?>assets/img/juragnrumah_header.png" alt=""></a>
                </div>

                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse yamm" id="navigation">
                    <div class="button navbar-right">
                        <?php
                            $buyer =  $this->session->userdata('ses_nama');
                            if($buyer)
                            { ?>
                            <ul> 
                                <li class="dropdown ymm-sw ">
                                   <a href="index.html" class="dropdown-toggle " data-toggle="dropdown" data-hover="dropdown" data-delay="200">
                                        <i class="fa fa-shopping-cart fa-2x"></i>&nbsp;&nbsp;
                                    </a>
                                    <a href="index.html" class="dropdown-toggle " data-toggle="dropdown" data-hover="dropdown" data-delay="200">
                                        <i class="fa fa-bars fa-2x"></i>&nbsp;&nbsp;
                                    </a>
                                    <img class="img-buyer" src="assets/img/client-face1.png" alt="">
                                    <ul class="dropdown-menu navbar-nav">
                                        <li><a href="<?php echo site_url().'signin/logout'?>">Profile</a> </li>
                                        <li><a href="<?php echo site_url().'signin/logout'?>">Keluar</a> </li>
                                    </ul>
                                </li>
                            </ul>
                        <?php }else{ ?>
                                <button class="navbar-btn nav-button wow bounceInRight login" onclick=' window.open("<?php echo site_url() ?>signin")' data-wow-delay="0.45s">Masuk</button>
                                <button class="navbar-btn nav-button wow fadeInRight" onclick=' window.open("<?php echo site_url() ?>register_buyer")' data-wow-delay="0.48s">Register</button>
                        <?php } ?>
                    </div>
                    <ul class="main-nav nav navbar-nav navbar-right">
                        <li class="wow fadeInDown" data-wow-delay="0.1s">                        
                            <a class="<?php if($this->uri->segment(1) == "home"){echo "active";} ?>" href="<?php echo site_url() ?>home">Beranda</a>
                        </li>
                        <li class="wow fadeInDown" data-wow-delay="0.2s">
                            <a class="<?php if($this->uri->segment(1) == "artikel"){echo "active";} ?>" href="<?php echo site_url() ?>artikel">Artikel</a>
                        </li>
                        <li class="dropdown ymm-sw " data-wow-delay="0.3s">
                            <a href="index.html" class="dropdown-toggle <?php if(($this->uri->segment(1) == "properti_rumah") OR ($this->uri->segment(1) == "properti_rumah_subsidi") OR ($this->uri->segment(1) == "properti_rumah_kost") OR ($this->uri->segment(1) == "properti_apartement") OR ($this->uri->segment(1) == "properti_kavling") OR ($this->uri->segment(1) == "properti_ruko")){echo "active";} ?>" data-toggle="dropdown" data-hover="dropdown" data-delay="200">Properti Kami <b class="caret"></b></a>
                            <ul class="dropdown-menu navbar-nav">
                                <li><a href="<?php echo site_url() ?>properti_rumah?id_category=1" class="">Rumah</a> </li>
                                <li><a href="<?php echo site_url() ?>properti_rumah_subsidi?id_category=2">Perumahan Subsidi</a> </li>
                                <li><a href="<?php echo site_url() ?>properti_rumah_kost?id_category=3">Rumah Kost</a> </li>
                                <li><a href="<?php echo site_url() ?>properti_apartement?id_category=4">Apartement</a> </li> 
                                <li><a href="<?php echo site_url() ?>properti_kavling?id_category=5">Kavling</a> </li> 
                                <li><a href="<?php echo site_url() ?>properti_ruko?id_category=6">Ruko</a> </li> 
                            </ul>
                        </li>
						<li class="dropdown ymm-sw " data-wow-delay="0.4s">
                            <a class="dropdown-toggle <?php if(($this->uri->segment(1) == "kemitraan") OR ($this->uri->segment(1) == "agen") ){echo "active";} ?>"  data-toggle="dropdown" data-hover="dropdown" data-delay="200">Kemitraan <b class="caret"></b></a>
                            <ul class="dropdown-menu navbar-nav">
                                <li><a href="<?php echo site_url() ?>kemitraan" class="">Mitra Developer</a> </li>
                                <li><a href="<?php echo site_url() ?>agen">Agen</a> </li>
                            </ul>
                        </li>
                        <li class="wow fadeInDown" data-wow-delay="0.5s">
                            <a class="<?php if($this->uri->segment(1) == "kontak_kami"){echo "active";} ?>" href="<?php echo site_url() ?>kontak_kami">Kontak Kami</a>
                        </li>
                    </ul>
                </div><!-- /.navbar-collapse -->
            </div><!-- /.container-fluid -->
        </nav>
        <!-- End of nav bar -->
		
        <!-- Start Content-->
		<?php $this->load->view($content); ?>
		<!--End Content-->
		
        <!-- Footer area-->
        <div class="footer-area">

            <div class=" footer">
                <div class="container">
                    <div class="row">

                        <div class="col-md-3 col-sm-6 wow fadeInRight animated">
                            <div class="single-footer">
                                <h4>TENTANG KAMI </h4>
                                <div class="footer-title-line"></div>
                                <img src="assets/img/juragnrumah_header.png" alt="" class="wow pulse" data-wow-delay="1s">
                                <p>Hubungi Kami untuk Konsultasi</p>
                                <ul class="footer-adress">
                                    <li><i class="pe-7s-map-marker strong"> </i> WISMA PURBA DANARTA | Jl. Veteran No. VII Semarang</li>
                                    <li><i class="pe-7s-mail strong"> </i> info@juraganrumah.net</li>
                                    <li><i class="pe-7s-call strong"> </i>(024) 8314793 Ext. 208</li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-md-3 col-sm-6 wow fadeInRight animated">
                            <div class="single-footer">
                                <h4>TAUTAN LANGSUNG </h4>
                                <div class="footer-title-line"></div>
                                <ul class="footer-menu">
                                    <li><a href="<?php echo site_url() ?>properti">Properti</a>  </li> 
                                    <li><a href="#">Layanan</a>  </li> 
                                    <li><a href="contact.html">Hubungi kami</a></li> 
                                    <li><a href="faq.html">FAQ</a>  </li> 
                                    <li><a href="faq.html">Ketentuan </a>  </li> 
                                </ul>
                            </div>
                        </div>
                        <div class="col-md-3 col-sm-6 wow fadeInRight animated">
                            <div class="single-footer">
                                <h4>BERITA TERBARU</h4>
                                <div class="footer-title-line"></div>
                                <ul class="footer-blog">
                                    <li>
                                        <div class="col-md-3 col-sm-4 col-xs-4 blg-thumb p0">
                                            <a href="single.html">
                                                <img src="assets/img/demo/small-proerty-2.jpg">
                                            </a>
                                            <span class="blg-date">12-12-2016</span>

                                        </div>
                                        <div class="col-md-8  col-sm-8 col-xs-8  blg-entry">
                                            <h6> <a href="single.html">Add news functions </a></h6> 
                                            <p style="line-height: 17px; padding: 8px 2px;">Lorem ipsum dolor sit amet, nulla ...</p>
                                        </div>
                                    </li> 

                                    <li>
                                        <div class="col-md-3 col-sm-4 col-xs-4 blg-thumb p0">
                                            <a href="single.html">
                                                <img src="assets/img/demo/small-proerty-2.jpg">
                                            </a>
                                            <span class="blg-date">12-12-2016</span>

                                        </div>
                                        <div class="col-md-8  col-sm-8 col-xs-8  blg-entry">
                                            <h6> <a href="single.html">Add news functions </a></h6> 
                                            <p style="line-height: 17px; padding: 8px 2px;">Lorem ipsum dolor sit amet, nulla ...</p>
                                        </div>
                                    </li> 

                                    <li>
                                        <div class="col-md-3 col-sm-4 col-xs-4 blg-thumb p0">
                                            <a href="single.html">
                                                <img src="assets/img/demo/small-proerty-2.jpg">
                                            </a>
                                            <span class="blg-date">12-12-2016</span>

                                        </div>
                                        <div class="col-md-8  col-sm-8 col-xs-8  blg-entry">
                                            <h6> <a href="single.html">Add news functions </a></h6> 
                                            <p style="line-height: 17px; padding: 8px 2px;">Lorem ipsum dolor sit amet, nulla ...</p>
                                        </div>
                                    </li> 


                                </ul>
                            </div>
                        </div>
                        <div class="col-md-3 col-sm-6 wow fadeInRight animated">
                            <div class="single-footer news-letter">
                                <h4>TETAP TERHUBUNG</h4>
                                <div class="footer-title-line"></div>
                                <p>Cara terbaik dan tercepat untuk mendapatkan informasi terbaru JuraganRumah.net adalah dengan berlangganan Newsletter Kami. .</p>

                                <form>
                                    <div class="input-group">
                                        <input class="form-control" type="text" placeholder="E-mail ... ">
                                        <span class="input-group-btn">
                                            <button class="btn btn-primary subscribe" type="button"><i class="pe-7s-paper-plane pe-2x"></i></button>
                                        </span>
                                    </div>
                                    <!-- /input-group -->
                                </form> 

                                <div class="social pull-right"> 
                                    <ul>
                                        <li><a class="wow fadeInUp animated" href="https://twitter.com/"><i class="fa fa-twitter"></i></a></li>
                                        <li><a class="wow fadeInUp animated" href="https://www.facebook.com/" data-wow-delay="0.2s"><i class="fa fa-facebook"></i></a></li>
                                        <li><a class="wow fadeInUp animated" href="https://plus.google.com/" data-wow-delay="0.3s"><i class="fa fa-google-plus"></i></a></li>
                                        <li><a class="wow fadeInUp animated" href="https://instagram.com/" data-wow-delay="0.4s"><i class="fa fa-instagram"></i></a></li>
                                        <li><a class="wow fadeInUp animated" href="https://instagram.com/" data-wow-delay="0.6s"><i class="fa fa-dribbble"></i></a></li>
                                    </ul> 
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
                        <div class="bottom-menu pull-right"> 
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

        <script src="<?php echo base_url() ?>/assets/js/main.js" type="text/javascript"></script>
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
                html += '<option value="0">-- Pilih --</option>';                    
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
        </script>   
        <script src="https://maps.googleapis.com/maps/api/js?v=3.exp&amp;sensor=false"></script>
        <script src="<?php echo base_url() ?>/assets/js/gmaps.js"></script>        
        <script src="<?php echo base_url() ?>/assets/js/gmaps.init.js"></script>

    </body>
</html>