
        <div class="page-head"> 

        <div class="container">
            <div class="row">
                <div class="page-head-content">
                    <h1 class="page-title">Artikel</h1>               
                </div>
                </div>
            </div>
        </div>

        <!-- End page header -->



        <div class="content-area blog-page padding-top-40" style="background-color: #FCFCFC; padding-bottom: 55px;">

            <div class="container">   
                <div class="row">

                    <div class="blog-asside-right col-md-3">
                            <div class="panel panel-default sidebar-menu wow  fadeInRight animated">
                                <div class="panel-heading">
                                    <h3 class="panel-title">Pencarian</h3>
                                </div>
                                <div class="panel-body">
                                    <form role="search">
                                        <div class="input-group">
                                            <input class="form-control" placeholder="Search" type="text">
                                            <span class="input-group-btn">
                                                <button type="submit" class="btn btn-smal">
                                                    <i class="fa fa-search"></i>
                                                </button>
                                            </span>
                                        </div>
                                    </form>
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
                    </div>
            </div>

                    <!--content blog-->
            <div class="blog-lst col-md-9"><br>
                <?php 
                    // $kolom = 4;
                    // $batas = 0;

                    foreach ($get as $data) {
                    // $batas++;
                ?>
                    <section class="post">
                        <div class="text-center padding-b-50">
                            <h3 class="wow"><?php echo $data->judul ?></h3>
                            <div class="title-line"></div>
                        </div>
                        <br>
                        <div class="row">
                            <div class="col-sm-6">
                                <p class="author-category">
                                    By <a href="#"><?php echo $data->author ?> Juragan Rumah</a>
                                    in <a href="<?php echo base_url() ?>">juraganrumah.net</a>
                                </p>
                            </div>
                            <div class="col-sm-6 right" >
                                <p class="date-comments">
                                    <a href="single.html"><i class="fa fa-calendar-o"></i> <?php echo date('d M Y', strtotime($data->datetime)) ?></a>
                                    <!-- <a href="single.html"><i class="fa fa-comment-o"></i> 8 Comments</a> -->
                                </p>
                            </div>
                        </div>
                        <div class="image wow">
                            <a href="#">
                                <img src="<?php echo base_url('assets/backend/fotoartikel/'.$data->foto) ?>" class="img-responsive" alt="Example blog post alt">
                            </a>
                        </div>
                        <p class="intro" style="text-align: justify;">
                            <?php echo substr(strip_tags($data->isi), 0,350)." ..."; ?>
                        </p>
                        <p class="read-more">
                            <a href="<?php echo base_url('artikel/view/'.$data->id_artikel) ?>" class="btn btn-default btn-border">Lanjutkan Membaca</a>
                        </p>
                    </section>   
                <?php } ?>
                <!-- <br>      -->
                <?php echo $halaman; ?> 
                </div> 
            </div>
        </div>
    </div>

