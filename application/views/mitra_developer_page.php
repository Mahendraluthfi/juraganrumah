    <div class="page-headlogomitra"> 
        <div class="container">
            <div class="row">
                <div class="page-headlogomitra-content">
                    <div class="page-title text-center" >
                        <?php foreach ($profil as $su) { ?>
                            <img src="<?php echo base_url() ?>assets/backend/fotomitra/<?php echo $su->file_logo ?>">
                        <?php  } ?>
                    </div>               
                </div>
            </div>
        </div>
    </div>
        <!-- End logo -->

    <div class="page-headmitra" style="background-image:url('<?php foreach($profil as $su){ echo base_url(); ?>assets/backend/fotomitra/<?php echo $su->file_banner; }?>');background-repeat: no-repeat;background-size: cover;background-position: 0px 0px;">

        <div class="container">
            <div class="row">
                <div class="page-headmitra-content">
                    </div>
                </div>
            </div>
        </div>

        <!-- End page header -->

        <!-- property area -->

        <div class="content-area recent-property" style="background-color: #FFF;">

        <div class="container">   
            <div class="row">
                <div class="col-md-9 pr-30 padding-top-40 properties-page user-properties" style="margin-top: 40px;">
                        <div class="single-property-header">                                   
                            <h1 class="property-title pull-left"><?php foreach($profil as $su){ echo $su->nama_perusahaan; } ?></h1>
                            <span class="property-price pull-right">Mulai Rp&nbsp;<?php foreach ($harga as $su) {echo number_format($su->harga);} ?></span>
                        </div>
                            <div class="section">
                                <h4 class="s-property-title">Deskripsi</h4>
                                <div class="s-property-content">
                                    <p><?php foreach($profil as $su){ echo $su->profil_perusahaan; } ?></p>
                                    <p class="property-title pull-left"><i class="pe-7s-map-marker strong"> </i> <?php foreach($profil as $su){ echo $su->alamat;} ?></p>
                                </div>
                            </div>
                            <!-- End description area  -->
                            <br>

                    <!-- Program Promosi -->

    <?php foreach ($promo as $su) { ?>

    <div class="row">
        <div class="col-md-6">
           <div class="panel-group" id="accordion">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h4 class="panel-title">
                            <a data-toggle="collapse" data-parent="#accordion" href="#collapseOne"><span class="glyphicon glyphicon-folder-close">
                            </span>Promosi</a>
                        </h4>
                    </div>
                    <div id="collapseOne" class="panel-collapse collapse">
                        <div class="panel-body">
                            <section id="content1">
                                <h3><?php echo $su->nama_iklan; ?></h3>
                              </section>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-6">
            <div class="panel-group" id="accordion">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h4 class="panel-title">
                            <a data-toggle="collapse" data-parent="#accordion" href="#collapseTwo"><span class="glyphicon glyphicon-th">
                            </span>Detail</a>
                        </h4>
                    </div>
                    <div id="collapseTwo" class="panel-collapse collapse">
                        <div class="panel-body">
                            <section id="content2">
                                <h3><?php echo $su->nama_iklan; ?></h3>
                                <p><?php echo $su->nama_iklan; ?></p>
                              </section>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        </div>
        <?php } ?>
                        <!-- End Program Promosi -->
<div class="section"> 

    <div id="list-type" class="proerty-th-list">

    <?php foreach ($produk as $su) { ?>
        <div class="col-md-4 p0">
            <div class="box-two-mitra-page">
                <div class="item-thumb">
                   <h5> <img style="max-width:20%;width: 20%; max-height: 20%;height: 20%" src="<?php echo base_url() ?>assets/backend/fotomitra/<?php echo $su->file_logo ?>">&nbsp;<?php echo $su->nama_project ?></h5>
                    <a href="<?php echo base_url() ?>properti_detail?id_produk=<?php echo $su->id_produk?>&nama_produk=<?php echo $su->nama_produk?>" ><img src="<?php echo base_url() ?>assets/backend/fotoproduk/<?php echo $su->file ?>"></a>
                </div>
                <div class="item-entry overflow">
                    <h5><a href="<?php echo base_url() ?>properti_detail?id_produk=<?php echo $su->id_produk?>&nama_produk=<?php echo $su->nama_produk?>"> <?php echo $su->nama_produk ?> </a></h5>
                    <div class="dot-hr"></div>
                    <span class="pull-left"><b> Luas Tanah :</b> <?php echo $su->luas_tanah ?> </span>
                    <span class="proerty-price pull-right"> <?php echo number_format($su->harga)?></span>
                    <div class="property-icon">
                        <div class="dealer-action pull-right">                                        
                            <ul class="card-info dflex">
                    <li>
                      <h4> &nbsp;&nbsp;<i class="pe-7s-map" data-toggle="tooltip" title="Luas Tanah!"></i></h4>
                      <div class="text-default">
                        <?php echo $su->luas_tanah ?> M &nbsp;&nbsp;
                      </div>
                    </li>
                    <li>
                      <h4> &nbsp;&nbsp;<i class="pe-7s-home" data-toggle="tooltip" title="Luas Bangunan!"></i></h4>
                      <div class="text-default"><?php echo $su->luas_bangunan ?> M &nbsp;&nbsp;
                      </div>
                    </li>
                    <li>
                      <h4> &nbsp;&nbsp;<i class="pe-7s-ribbon" data-toggle="tooltip" title="Sertifikat!"></i></h4>
                      <div class="text-default">
                        <?php echo $su->sertifikat ?> &nbsp;&nbsp;

                      </div>
                    </li>
                    <li class="text-center">
                      <h4 class="text-center" ><i class="pe-7s-cash" data-toggle="tooltip" title="Harga!"></i></h4>
                      <div class="text-warning strong ">
                         &nbsp;<?php echo number_format($su->harga) ?>
                      </div>
                    </li>
                  </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div> 
    <?php } ?>     
                            <!--artikel mitra-->
        <div class="section">

        <h4 class="s-property-title">Artikel</h4>
             <ul>
                 <?php  foreach ( $newest_mitra as $suartikel ){ ?>
            <li>
                <div class="col-md-3 col-sm-4 col-xs-4">
                    <a href="<?php echo base_url() ?>artikel/view/<?php echo $suartikel->id_artikel; ?>">
                        <img src="<?php echo base_url() ?>assets/backend/fotoartikel/<?php echo $suartikel->foto; ?>" style="max-width: 400px">
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
                <!-- end artikel mitra-->                                                                   
            </div>
        </div>
        <div class="section"> 
            <div class="pull-right">
                <div class="pagination">
                    <?php echo $pagination; ?>
                </div>
            </div>                
        </div> 
    </div>



                    <div class="col-md-3 p0 padding-top-40">

                        <div class="blog-asside-right">

                            <div class="panel panel-default sidebar-menu " >

                                <div class="panel-heading">

                                    <div id="lflRjR1" class="lflRjR1">

                                    <div class="sc-drlKqa tDcva">

                                        <a class="sc-kNBZmU kQCLqa" href="https://www.juraganrumah.net/" target="_self">

                                           <h6 style="color:white">

                                            <img style="width:10%; color:white" src="<?php echo base_url() ?>assets/img/juragan_rumah_logo.png" >&nbsp;juragan Rumah

                                            </h6>

                                        </a>

                                    </div>

                                    <div id="contact" class="border-btn"><i class="pe-7s-call"></i>&nbsp;Telepon</div>

                                    <div id="contact1" class="border-btn"><i class="pe-7s-mail"></i>&nbsp;Pesan SMS</div>

                                    <div id="contact2" class="border-btn"><i class="fa fa-whatsapp"></i>&nbsp;WhatsApp</div>

                                    <div class="border-btn" onclick="window.location.href='mailto: info@juraganrumah.net?subject=Hallo Juragan Rumah'"><i class="pe-7s-mail-open"></i>&nbsp;Email</div>

                                    <h6 class="text-center">

                                        <?php foreach ($profil as $su) { ?>

                                            <img style="max-width: 50px; margin-top: 20px; "src="<?php echo base_url() ?>assets/backend/fotomitra/<?php echo $su->file_logo ?>">

                                        <?php  } ?>

                                    </h6>

                                </div>

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

                                <div class="panel-body search-widget">



                                </div>

                            </div>

                        </div>

                    </div>

                </div>

            </div>

        </div>

        <div id="contactForm" class="contactForm">

          <h1 id="demoFont1" class="demoFont">Halo! Juragan Rumah</h1>

          <h3 id="demoFont" class="demoFont">Telepon</h3>

          <div class="row">

            <div class="col-sm-12">

                 <div class="border-btn" id="demoFont1" onclick="telepon('+6282135077987','<?php echo $id_mitra ?>')"><i class="pe-7s-call fa-1x"></i>&nbsp;Customer 1</div>

            </div>

            <div class="col-sm-12">

                 <div class="border-btn" id="demoFont1" onclick="telepon('+628119475777','<?php echo $id_mitra ?>')"><i class="pe-7s-call fa-1x"></i>&nbsp;Customer 2</div>

            </div>

             <div class="col-sm-12">

                 <div class="border-btn" id="demoFont1" onclick="telepon('+628231492211','<?php echo $id_mitra ?>')"><i class="pe-7s-call fa-1x"></i>&nbsp;Customer 3</div>

             </div>

             <div class="col-sm-12">

                 <div class="border-btn" id="demoFont1" onclick="telepon('+6281225533533','<?php echo $id_mitra ?>')"><i class="pe-7s-call fa-1x"></i>&nbsp;Customer 4</div>

             </div>

          </div>

        </div>

        <div id="contactForm1" class="contactForm">

          <h1 id="demoFont1" class="demoFont">Halo! Juragan Rumah</h1>

          <h3 id="demoFont" class="demoFont">Pesan SMS</h3>

          <div class="row">

            <div class="col-sm-12">

                 <div class="border-btn" id="demoFont1" onclick="sms('+6282135077987','<?php echo $id_mitra ?>')"><i class="pe-7s-mail"></i>&nbsp;Customer 1</div>

            </div>

            <div class="col-sm-12">

                 <div class="border-btn" id="demoFont1" onclick="sms('+628119475777','<?php echo $id_mitra ?>')"><i class="pe-7s-mail"></i>&nbsp;Customer 2</div>

            </div>

             <div class="col-sm-12">

                 <div class="border-btn" id="demoFont1" onclick="sms('+628231492211','<?php echo $id_mitra ?>')"><i class="pe-7s-mail"></i>&nbsp;Customer 3</div>

             </div>

             <div class="col-sm-12">

                 <div class="border-btn" id="demoFont1" onclick="sms('+6281225533533','<?php echo $id_mitra ?>')"><i class="pe-7s-mail"></i>&nbsp;Customer 4</div>

             </div>

          </div>

        </div>

        <div id="contactForm2" class="contactForm">

          <h1 id="demoFont1" class="demoFont">Halo! Juragan Rumah</h1>

          <h3 id="demoFont" class="demoFont">WhatsApp</h3>

          <div class="row">

            <div class="col-sm-12">

                <div class="border-btn" id="demoFont1" onclick="wa('+6282135077987','<?php echo $id_mitra ?>')"><i class="fa fa-whatsapp"></i>&nbsp;Customer 1</div>

            </div>

            <div class="col-sm-12">

                 <div class="border-btn" id="demoFont1" onclick="wa('+628119475777','<?php echo $id_mitra ?>')"><i class="fa fa-whatsapp"></i>&nbsp;Customer 2</div>

            </div>

             <div class="col-sm-12">

                 <div class="border-btn" id="demoFont1" onclick="wa('+628231492211','<?php echo $id_mitra ?>')"><i class="fa fa-whatsapp"></i>&nbsp;Customer 3</div>

             </div>

             <div class="col-sm-12">

                 <div class="border-btn" id="demoFont1" onclick="wa('+6281225533533','<?php echo $id_mitra ?>')"><i class="fa fa-whatsapp"></i>&nbsp;Customer 4</div>

             </div>

          </div>

        </div>

<script>
    function telepon(tel,id) {
        // console.log(tel);
         $.ajax({
            url : "<?php echo site_url('index.php/stats/tel_mitra/')?>" + id,
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
        // console.log(tel);
         $.ajax({
            url : "<?php echo site_url('index.php/stats/sms_mitra/')?>" + id,
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
        // console.log(tel);
         $.ajax({
            url : "<?php echo site_url('index.php/stats/wa_mitra/')?>" + id,
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




