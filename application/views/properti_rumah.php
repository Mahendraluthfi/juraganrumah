
        <div class="page-head"> 
            <div class="container">
                <div class="row">
                    <div class="page-head-content">
                        <h1 class="page-title">Listing Rumah</h1>               
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
                                                <div class="col-xs-3">
                                                    <input type="text" class="form-control" name="nama_produk" placeholder="Pencarian Properti">
                                                </div>
                                                <div class="col-xs-3">
                                                    <select id="prov" name="provinsi" class="selectpicker form-control" data-live-search="true" data-live-search-style="begins" title="Pilih Kota Anda">
                                                        <option value="" selected="Provinsi">Provinsi</option>
                                                        <?php foreach ($prov as $dprov) { ?>                          
                                                        <option value="<?php echo $dprov->id_prov ?>"><?php echo $dprov->nama_prov ?></option>
                                                        <?php } ?>
                                                    </select>
                                                </div>
                                                <div class="col-xs-3">
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
                                                <div class="col-sm-12 text-center">
                                                    <button  name="search_beranda" value="submit" type="submit" class="btn btn-primary">Pencarian</button>
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
                                    <div class="item-entry">
                                        <h5><a href="<?php echo site_url() ?>properti_detail?id_produk=<?php echo $su->id_produk?>&nama_produk=<?php echo $su->nama_produk?>"><?php echo substr($su->nama_produk, 0, 63).'...' ?></a></h5>
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
                            </div>
                                <?php ;} ?>
                                 
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
                    <div class="col-md-3 pl0 padding-top-40">
                        <div style="height: 100%" >
                            <div class="panel panel-default sidebar-menu" style="height: 600px;">
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
                        </div>
                </div>        
            </div>
        </div>
