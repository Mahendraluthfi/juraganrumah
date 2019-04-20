

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
                                        <?php foreach ($newest as $data) { ?>
                                        <li>
                                            <div class="col-md-3 col-sm-3 col-xs-3 blg-thumb p0">
                                                <a href=""><img src="assets/img/demo/small-property-2.jpg"></a>
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

                    <div class="blog-lst col-md-9">

                        <br>

                        <section class="post">

                            <div class="text-center padding-b-50">

                                <h3 class="wow">BACA INI SEBELUM ANDA MEMBELI RUMAH</h3>

                                <div class="title-line"></div>

                            </div>

                            <br>

                            <div class="row">

                                <div class="col-sm-6">

                                    <p class="author-category">

                                        By <a href="#">Juragan Rumah</a>

                                        in <a href="blog.html">juraganrumah.net</a>

                                    </p>

                                </div>

                                <div class="col-sm-6 right" >

                                    <p class="date-comments">

                                        <a href="single.html"><i class="fa fa-calendar-o"></i> June 07, 2019</a>

                                        <a href="single.html"><i class="fa fa-comment-o"></i> 8 Comments</a>

                                    </p>

                                </div>

                            </div>

                            <div class="image wow">

                                <a href="single.html">

                                    <img src="assets/img/blog2.jpg" class="img-responsive" alt="Example blog post alt">

                                </a>

                            </div>

                            <p class="intro">Memiliki rumah adalah mimpi sebagian orang. Bukan tanpa sebab, rumah adalah tempat pulang paling nyaman. Sayangnya membeli rumah yang nyaman tidaklah mudah. Membeli rumah perlu.</p>

                            <p class="read-more">

                                <a href="single.html" class="btn btn-default btn-border">Lanjutkan Membaca</a>

                            </p>

                        </section>   



                        <br>

                        <br>

                        <section class="post">

                            <div class="text-center padding-b-50">

                                <h3 class="wow ">GAJI KECIL TAPI INGIN PUNYA RUMAH</h3>

                                <div class="title-line wow fadeInRight animated"></div>

                            </div>

                        <br>

                            <div class="row">

                                <div class="col-sm-6">

                                    <p class="author-category">

                                        By <a href="#">Juragan Rumah</a>

                                        in <a href="blog.html">juraganrumah.net</a>

                                    </p>

                                </div>

                                <div class="col-sm-6 right" >

                                    <p class="date-comments">

                                        <a href="single.html"><i class="fa fa-calendar-o"></i> June 08, 2019</a>

                                        <a href="single.html"><i class="fa fa-comment-o"></i> 8 Comments</a>

                                    </p>

                                </div>

                            </div>

                            <div class="image wow">

                                <a href="single.html">

                                    <img src="assets/img/blog2.jpg" class="img-responsive" alt="Example blog post alt">

                                </a>

                            </div>

                            <p class="intro">Harga rumah yang terus merangkak naik, kerap menjadi batu sandungan untuk masyarakat membeli rumah, terutama bagi karyawan yang memiliki gaji sebatas Upah Minimum Regional (UMR).</p>

                            <p class="read-more">

                                <a href="single.html" class="btn btn-default btn-border">Lanjutkan Membaca</a>

                            </p>

                        </section>  

                        <br>

                        <br>



                        <section class="post">

                            <div class="text-center padding-b-50">

                                <h3 class="wow">CARA BELI RUMAH TANPA RIBA</h3>

                                <div  class="title-line wow fadeInRight animated"></div>

                            </div>

                        <br>

                            <div class="row">

                                <div class="col-sm-6">

                                    <p class="author-category">

                                        By <a href="#">Juragan Rumah</a>

                                        in <a href="blog.html">juraganrumah.net</a>

                                    </p>

                                </div>

                                <div class="col-sm-6 right" >

                                    <p class="date-comments">

                                        <a href="single.html"><i class="fa fa-calendar-o"></i> June 08, 2019</a>

                                        <a href="single.html"><i class="fa fa-comment-o"></i> 8 Comments</a>

                                    </p>

                                </div>

                            </div>

                            <div class="image wow">

                                <a href="single.html">

                                    <img src="assets/img/blog1.jpg" class="img-responsive" alt="Example blog post alt">

                                </a>

                            </div>

                            <p class="intro">Masalahnya, banyak juga orang muslim yang takut ambil kredit pemilikan rumah alias KPR karena dianggap riba. Terus, beli rumahnya kapan dong kalau gak pakai KPR?.</p>

                            <p class="read-more">

                                <a href="single.html" class="btn btn-default btn-border">Lanjutkan Membaca</a>

                            </p>

                        </section>  



                    </div> 



                </div>



            </div>

        </div>

