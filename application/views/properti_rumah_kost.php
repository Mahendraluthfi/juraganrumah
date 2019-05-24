
        <div class="page-head"> 
            <div class="container">
                <div class="row">
                    <div class="page-head-content">
                        <h1 class="page-title">Listing Rumah Kost</h1>               
                    </div>
                </div>
            </div>
        </div>
        <!-- End page header -->

        <!-- property area -->
        <div class="properties-area recent-property" style="background-color: #FFF;">
            <div class="container">   
                <div class="row">
                    <div class="col-md-9 padding-top-40 properties-page">
                        <div class="section clear"> 
                            <div class="panel panel-default sidebar-menu wow fadeInRight animated" >
                                <div class="panel-heading">
                                    <h3 class="panel-title">Pencarian</h3>
                                </div>
                                <div class="panel-body search-widget">
                                     <form id="form_cari" action="<?php echo site_url() ?>properti" method="post" class="form-inline">
                                        <fieldset>
                                            <div class="row">
                                                <div class="col-xs-12 col-sm-3 col-md-3">
                                                    <input type="text" class="form-control" name="nama_produk" placeholder="Pencarian Properti">
                                                </div>
                                                <div class="col-xs-12 col-sm-3 col-md-3">
                                                    <select id="prov" name="provinsi" class="selectpicker form-control" data-live-search="true" data-live-search-style="begins" title="Pilih Kota Anda">
                                                        <option value="" selected="Provinsi">Provinsi</option>
                                                        <?php foreach ($prov as $dprov) { ?>                          
                                                        <option value="<?php echo $dprov->id_prov ?>"><?php echo $dprov->nama_prov ?></option>
                                                        <?php } ?>
                                                    </select>
                                                </div>
                                                <div class="col-xs-12 col-sm-3 col-md-3">
                                                    <select name="kabupaten" id="kabkot" class="kabkot form-control" data-live-search="true" style="width: 100%;" >
                                                         <option value="" selected="Kota / Kab">Kota / Kab</option>
                                                    </select>
                                                </div>
                                                <div class="col-xs-3">
                                                    <select name="kecamatan" id="kec" class="kec form-control" style="width: 100%;" >
                                                        <option value="" selected="Kecamatan">Kecamatan</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </fieldset>
                                        <fieldset class="col-xs-6">
                                            <div class="row">
                                                <div class="col-xs-6">
                                                    <div class="checkbox">
                                                        <label> <input type="radio" name="urutan" value="ASC">&nbsp;&nbsp;Harga Terendah</label>
                                                    </div> 
                                                </div>

                                                <div class="col-xs-6">
                                                    <div class="checkbox">
                                                        <label> <input type="radio" name="urutan" value="DESC">&nbsp;&nbsp;Harga Tertinggi</label>
                                                    </div>
                                                </div>                                            
                                            </div>
                                            <div class="row">
                                                <div class="col-sm-12">
                                                  <br>
                                                    <button  name="search_beranda" value="submit" type="submit" class="btn border-btn">Pencarian</button>
                                                </div> 
                                            </div>
                                        </fieldset>                                     
                                    </form>
                                </div>
                            </div>

                            <div class="col-xs-2 layout-switcher">
                                <a class="layout-list" href="javascript:void(0);"> <i class="fa fa-th-list"></i>  </a>
                                <a class="layout-grid active" href="javascript:void(0);"> <i class="fa fa-th"></i> </a>                          
                            </div>
                        </div>

                        <div class="section clear"> 
                            <div id="list-type" class="proerty-th"><!--Start Project-->
                                <?php foreach($produk as $su){ ?>
                             <div class="col-sm-6 col-md-4 p0">
                                <div class="box-two proerty-item">
                                    <div class="item-thumb">
                                        <a href="<?php echo site_url() ?>properti_detail?id_produk=<?php echo $su->id_produk?>&nama_produk=<?php echo $su->nama_produk?>"><img src="<?php echo base_url() ?>assets/backend/fotoproduk/<?php echo $su->file ?>"></a>
                                    </div>
                                    <div class="item-entry overflow">
                                        <h5><a href="<?php echo site_url() ?>properti_detail?id_produk=<?php echo $su->id_produk?>&nama_produk=<?php echo $su->nama_produk?>"><?php echo substr($su->nama_produk, 0, 63).'...' ?></a></h5>
                                          <ul class="card-info dflex">
                                            <li>
                                              <h4><i class="pe-7s-map" data-toggle="tooltip" title="Luas Tanah!"></i></h4>
                                              <div class="text-muted">
                                                <?php echo $su->luas_tanah ?>M&nbsp;&nbsp;
                                              </div>
                                            </li>
                                            <li>
                                              <h4><i class="pe-7s-home" data-toggle="tooltip" title="Luas Bangunan!"></i></h4>
                                              <div class="text-muted"><?php echo $su->luas_bangunan ?> M &nbsp;&nbsp;
                                              </div>
                                            </li>
                                            <li>
                                              <h4><i class="pe-7s-ribbon" data-toggle="tooltip" title="Sertifikat!"></i></h4>
                                              <div class="text-muted">
                                                <?php echo $su->sertifikat ?> &nbsp;&nbsp;
                                                  
                                              </div>
                                            </li>
                                          </ul>
                                           <p class="pharga text-warning">
                                              &nbsp;Rp <?php echo number_format($su->harga) ?>
                                          </p>
                                    </div>
                                </div>
                            </div>
                                <?php ;} ?>
                                 
                            </div>
                        </div>
                        <div class="section">
                                <div class="pagination">
                                    <?php echo $pagination; ?>
                                </div>
                        </div>
                    </div> 
                    <div class="col-md-3 pl0 padding-top-40">
                        <div style="height: 100%" >
                            <div class="panel panel-default sidebar-menu">
                               
                                <div class="panel-heading">
                                    <h3 class="panel-title">Direkomendasikan</h3>
                                </div>
                                <div class="panel-body recent-property-widget">
                                    <ul>
                                        <?php foreach ($newest_produk as $data) { ?>
                                        <li>
                                            <div class="col-md-3 col-sm-3 col-xs-3 blg-thumb p0">
                                                <a href=""><img src="<?php echo base_url() ?>assets/backend/fotoproduk/<?php echo $data->file ?>"></a>
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
                                            <img style="width:10%;" src="<?php echo base_url() ?>assets/img/juragan_rumah_logo.png" >&nbsp;juraganrumah.net
                                           </h6>
                                        </a>
                                    </div>
                                    <div id="contact" class="border-btn"><i class="pe-7s-call"></i>&nbsp;Telepon</div>
                                    <div id="contact1" class="border-btn"><i class="pe-7s-mail"></i>&nbsp;Pesan SMS</div>
                                    <div id="contact2" class="border-btn"><i class="fa fa-whatsapp"></i>&nbsp;WhatsApp</div>
                                    <div class="border-btn" onclick="window.location.href='mailto: info@juraganrumah.net?subject=Hallo Juragan Rumah'"><i class="pe-7s-mail-open"></i>&nbsp;Email</div>
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
                        </div>
                </div>           
            </div>
        </div>

        <div id="contactForm" class="contactForm">
          <h1 id="demoFont1" class="demoFont">Halo! Juragan Rumah</h1>
          <h3 id="demoFont" class="demoFont">Telepon</h3>
          <div class="row">
            <div class="col-sm-12">
                 <div class="border-btn" id="demoFont1" onclick="window.location.href='tel:+6282135077987'"><i class="pe-7s-call fa-1x"></i>&nbsp;Customer Service 1</div>
            </div>
            <div class="col-sm-12">
                 <div class="border-btn" id="demoFont1" onclick="window.location.href='tel:+628119475777'"><i class="pe-7s-call fa-1x"></i>&nbsp;Customer Service 2</div>
            </div>
             <div class="col-sm-12">
                 <div class="border-btn" id="demoFont1" onclick="window.location.href='tel:+628231492211'"><i class="pe-7s-call fa-1x"></i>&nbsp;Customer Service 3</div>
             </div>
             <div class="col-sm-12">
                 <div class="border-btn" id="demoFont1" onclick="window.location.href='tel:+6281225533533'"><i class="pe-7s-call fa-1x"></i>&nbsp;Customer Service 4</div>
             </div>
          </div>
        </div>
        <div id="contactForm1" class="contactForm">
          <h1 id="demoFont1" class="demoFont">Halo! Juragan Rumah</h1>
          <h3 id="demoFont" class="demoFont">Pesan SMS</h3>
          <div class="row">
            <div class="col-sm-12">
                 <div class="border-btn" id="demoFont1" onclick="window.location.href='sms:+6282135077987?body=Hallo%20Juragan%20Rumah!'"><i class="pe-7s-mail"></i>&nbsp;Customer Service 1</div>
            </div>
            <div class="col-sm-12">
                 <div class="border-btn" id="demoFont1" onclick="window.location.href='sms:+628119475777?body=Hallo%20Juragan%20Rumah!'"><i class="pe-7s-mail"></i>&nbsp;Customer Service 2</div>
            </div>
             <div class="col-sm-12">
                 <div class="border-btn" id="demoFont1" onclick="window.location.href='sms:+628231492211?body=Hallo%20Juragan%20Rumah!'"><i class="pe-7s-mail"></i>&nbsp;Customer Service 3</div>
             </div>
             <div class="col-sm-12">
                 <div class="border-btn" id="demoFont1" onclick="window.location.href='sms:+6281225533533?body=Hallo%20Juragan%20Rumah!'"><i class="pe-7s-mail"></i>&nbsp;Customer Service 4</div>
             </div>
          </div>
        </div>
        <div id="contactForm2" class="contactForm">
          <h1 id="demoFont1" class="demoFont">Halo! Juragan Rumah</h1>
          <h3 id="demoFont" class="demoFont">WhatsApp</h3>
          <div class="row">
            <div class="col-sm-12">
                <div class="border-btn" id="demoFont1" onclick="window.location.href='https://api.whatsapp.com/send?phone=6282135077987&text=halo%20JuraganRumah.net%0A%0AMohon%20info%20%0A%0Anama%20%3A%0Aemail%20%3A%0Adomisili%20%3A%0A%0ATerima%20kasih' "><i class="fa fa-whatsapp"></i>&nbsp;Customer Service 1</div>
            </div>
            <div class="col-sm-12">
                 <div class="border-btn" id="demoFont1" onclick="window.location.href='https://api.whatsapp.com/send?phone=628119475777&text=halo%20JuraganRumah.net%0A%0AMohon%20info%20%0A%0Anama%20%3A%0Aemail%20%3A%0Adomisili%20%3A%0A%0ATerima%20kasih'"><i class="fa fa-whatsapp"></i>&nbsp;Customer Service 2</div>
            </div>
             <div class="col-sm-12">
                 <div class="border-btn" id="demoFont1" onclick="window.location.href='https://api.whatsapp.com/send?phone=628231492211&text=halo%20JuraganRumah.net%0A%0AMohon%20info%20%0A%0Anama%20%3A%0Aemail%20%3A%0Adomisili%20%3A%0A%0ATerima%20kasih'"><i class="fa fa-whatsapp"></i>&nbsp;Customer Service 3</div>
             </div>
             <div class="col-sm-12">
                 <div class="border-btn" id="demoFont1" onclick="window.location.href='https://api.whatsapp.com/send?phone=6281225533533&text=halo%20JuraganRumah.net%0A%0AMohon%20info%20%0A%0Anama%20%3A%0Aemail%20%3A%0Adomisili%20%3A%0A%0ATerima%20kasih'"><i class="fa fa-whatsapp"></i>&nbsp;Customer Service 4</div>
             </div>
          </div>
        </div>

        