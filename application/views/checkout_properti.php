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



<div id="invoice">







    <div class="toolbar hidden-print">



        <div class="text-right">



            <button id="printInvoice" class="btn btn-info"><i class="fa fa-print"></i> Print</button>



        </div>



        <hr>



    </div>



    <div class="invoice overflow-auto">



        <div style="min-width: 600px">



            <header>



                <div class="row">



                    <div class="col company-details">



                        <h3 class="name">



                        <img style="width:5%" src="<?php echo base_url() ?>assets/img/juragan_rumah_logo.png" >



                           juraganrumah.net



                        </h3>



                        <div>WISMA PURBA DANARTA Jl. Veteran No. VII Semarang</div>



                        <div>(024) 8314793 Ext. 208</div>



                        <div>info@juraganrumah.net</div>



                    </div>



                </div>



            </header>



            <main>



                <div class="row contacts">



                    <div class="col invoice-to">



                        <div class="text-gray-light">TO:</div>



                        <h2 class="to">



                        <?php echo $this->session->userdata('ses_nama'); ?>



                        </h2>



                        <div class="address"><?php echo $this->session->userdata('ses_alamat'); ?></div>



                        <div class="email"><?php echo $this->session->userdata('ses_telp'); ?></div>

                        <div class="email"><?php echo $this->session->userdata('ses_email'); ?></div>



                    </div>

                    <?php



                    $kata = '1230qwertyuiop';

 

                    ?>

                    <div class="col invoice-details">



                        <h3 class="invoice-id">PEMBELIAN PROPERTI</h3>



                        <h4>FAKTUR : <?php echo str_shuffle($kata); ?></h4>



                        <div class="date">Tanggal Faktur: <?php echo date(" d - m - Y") ?></div>

                    </div>



                </div>



                <table border="0" cellspacing="0" cellpadding="0">



                    <thead>



                        <tr>



                            <th>#</th>



                            <th class="text-left">DESKRIPSI</th>

                            <th class="text-left">LOKASI</th>



                            <th class="text-right">QUANTITY</th>



                            <th class="text-right">HARGA</th>



                            <th class="text-right">TOTAL</th>



                        </tr>



                    </thead>



                    <tbody>

                        <?php foreach ($produk as $su ) { ?>

                        <tr>



                            <td class="no">01</td>



                            <td class="text-left">



                               <?php echo $su->nama_produk ?>



                            </td>

                            <td class="text-left">



                               <?php echo $su->alamat ?>



                            </td>



                            <td class="unit">1 PROPERTI </td>



                            <td class="qty">Rp <?php echo number_format($su->harga) ?></td>



                            <td class="total">Rp <?php echo number_format($su->harga) ?></td>



                        </tr>



                    </tbody>

                        

                    <tfoot>



                        <tr>



                            <td ></td>

                            <td colspan="2"></td>



                            <td colspan="2"><h3 class="text-danger">HARGA TOTAL</h3></td>



                            <td><h3 class="text-danger">Rp <?php echo number_format($su->harga) ?></h3></td>



                        </tr>



                    </tfoot>

                    <?php } ?>

                </table>



                <h3>Pilih Metode Pembayaran</h3>

                <table style="width:50%">

                <form action="<?php echo site_url() ?>cart/save_cart_transaksi" method="post">

                <input type="hidden" name="id_transaksi" value="<?php echo str_shuffle($kata);  ?>">

                <input type="hidden" name="id_produk" value="<?php foreach($produk as $su ){ echo $su->id_produk; } ?>">

                <input type="hidden" name="total_prize" value="<?php foreach($produk as $su ){ echo $su->harga; } ?>">

                <tr><td><div class="form-group">

                                    <select name="tipe_bayar"  class="form-control" style="width: 100%;" >

                                         <option value="KREDIT" selected="KREDIT">KREDIT</option>

                                         <option value="CASH" selected="KREDIT">CASH</option>

                                         <option value="SOFT CASH" selected="KREDIT">SOFT CASH</option>

                                    </select>

                                </div>

                </td></tr>

                </table>

                <br>

                <br>

                <br>

                <br>

                <div class="thanks">Terima Kasih!</div>

                <div class="notices">

                    <div>NOTICE:</div>

                    <div class="notice">Selanjutnya Team Juragan Rumah akan menghubungi anda, Karena Bersifat Sangat Kredensial dan Privasi.

                    </div>

                </div>

            </main>

            <div class="text-right">

                <span><b class="text-danger">Silahkan Klik Button Selesai! &nbsp;&nbsp;</b><button type="submit" class="btn btn-primary"><i class="fa fa-save"></i> Selesai</button></span>

                </form>



            </div>



            <br>



            <footer>



                Faktur dibuat di komputer dan valid tanpa tanda tangan dan meterai.



            </footer>



        </div>



        <!--DO NOT DELETE THIS div. IT is responsible for showing footer always at the bottom-->



        <div></div>



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



    </body>



</html>