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
            <button class="btn btn-info"><i class="fa fa-file-pdf-o"></i> Export as PDF</button>
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
                        <?php foreach($mitra as $su ){ echo $su->nama_mitra; } ?>
                        </h2>
                        <div class="address"><?php foreach($mitra as $su ){ echo $su->nama_perusahaan; } ?></div>
                        <div class="email"><?php foreach($mitra as $su ){ echo $su->telepon; } ?></div>
                    </div>
                    <?php
                     $a = rand(0,1000000);                     
                     $nominal = number_format($nominal);                     
                     $kode = number_format($kode);                     
                     $total = number_format($total);                     
                    ?>
                    <div class="col invoice-details">
                        <h3 class="invoice-id">MITRA DEVELOPER PRO</h3>
                        <h4>FAKTUR : <?php echo $a ?></h4>
                        <div class="date">Tanggal Faktur:<?php foreach($mitra as $su ){ echo $su->date_join	; } ?></div>
                        <div class="date">Due Date: <?php foreach($mitra as $su ){ echo $su->expired_trial	; } ?></div>
                    </div>
                </div>
                <table border="0" cellspacing="0" cellpadding="0">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th class="text-left">DESKRIPSI</th>
                            <th class="text-right">QUANTITY</th>
                            <th class="text-right">DURASI</th>
                            <th class="text-right">HARGA</th>
                            <th class="text-right">KODE</th>
                            <th class="text-right">TOTAL</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td class="no">01</td>
                            <td class="text-left">
                               Aktivasi Akun Pro Mitra Developer Juragan Rumah
                            </td>
                            <td class="unit">1 Paket Project </td>
                            <td class="qty">1 Tahun / 12 Bulan</td>
                            <td class="unit"><?php echo "Rp. ".$nominal ?></td>
                            <td class="qty"><?php echo $kode; ?></td>
                            <td class="total"><?php echo "Rp. ".$total; ?></td>
                        </tr>
                    </tbody>
                    <tfoot>
                        <tr>
                            <td></td>
                            <td colspan="2"></td>
                            <td colspan="3">GRAND TOTAL</td>
                            <td><?php echo "Rp. ".$total; ?></td>
                        </tr>
                    </tfoot>
                </table>
                <h3>Silahkan Transfer ke:</h3>
                <img style="width:10%" src="<?php echo base_url() ?>assets/img/mandiri.png" >
                <table style="width:50%">
                <tr><td>Bank</td><td>Bank Mandiri</td></tr>
                <tr><td>Cabang</td><td>KCP Semarang Pandanaran 13502</td></tr>
                <tr><td>Nomor Rekening</td><td>135-0016-347-526</td></tr>
                <tr><td>Atas Nama</td><td>Mochamad Arif Susanto</td></tr>
                </table>
                <br>
                <br>
                <br>
                <br>
                <div class="thanks">Terima Kasih!</div>
                <div class="notices">
                    <div>NOTICE:</div>
                    <div class="notice">Batas pembayaran melalui transfer pada tanggal <?php foreach($mitra as $su ){ echo $su->expired_trial; } ?>.</div>
                </div>
            </main>
            <div class="text-right">
                <form action="<?php echo site_url() ?>register_mitra/savepro_transaksi" method="post">
                <input type="hidden" name="id_mitra" value="<?php foreach($mitra as $su ){ echo $su->id_mitra; } ?>">
                <input type="hidden" name="id_inv" value="<?php  echo $a ?>">
                <input type="hidden" name="date" value="<?php foreach($mitra as $su ){ echo $su->date_join; } ?>">
                <input type="hidden" name="nominal" value="3500000">
                <input type="hidden" name="kode" value="<?php echo $kode; ?>">
                <input type="hidden" name="total" value="3500<?php echo $kode ; ?>">
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