<!DOCTYPE html>
<html dir="ltr" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="96x96" href="<?php echo base_url() ?>assets/backend/assets/images/jr.png">
    <title>Dashboard Mitra Juragan Rumah</title>
    <link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>assets/backend/assets/libs/select2/dist/css/select2.min.css">    
    <link href="<?php echo base_url() ?>assets/backend/assets/libs/magnific-popup/dist/magnific-popup.css" rel="stylesheet">    
    <!-- <link href="<?php echo base_url() ?>assets/backend/assets/libs/flot/css/float-chart.css" rel="stylesheet"> -->
    <link href="<?php echo base_url() ?>assets/backend/dist/css/style.min.css" rel="stylesheet">    
    <link href="<?php echo base_url() ?>assets/backend/assets/libs/jquery-steps/jquery.steps.css" rel="stylesheet">
    <link href="<?php echo base_url() ?>assets/backend/assets/libs/jquery-steps/steps.css" rel="stylesheet">

    <script src="<?php echo base_url() ?>assets/backend/assets/libs/jquery/dist/jquery.min.js"></script>    
</head>

<body>
    <!-- ============================================================== -->
    <!-- Preloader - style you can find in spinners.css -->
    <!-- ============================================================== -->
    <div class="preloader">
        <div class="lds-ripple">
            <div class="lds-pos"></div>
            <div class="lds-pos"></div>
        </div>
    </div>
    <!-- ============================================================== -->
    <!-- Main wrapper - style you can find in pages.scss -->
    <!-- ============================================================== -->
    <div id="main-wrapper">
        <!-- ============================================================== -->
        <!-- Topbar header - style you can find in pages.scss -->
        <!-- ============================================================== -->
        <header class="topbar" data-navbarbg="skin5">
            <nav class="navbar top-navbar navbar-expand-md navbar-dark">
                <div class="navbar-header" data-logobg="skin5">
                    <!-- This is for the sidebar toggle which is visible on mobile only -->
                    <a class="nav-toggler waves-effect waves-light d-block d-md-none" href="javascript:void(0)"><i class="ti-menu ti-close"></i></a>
                    <!-- ============================================================== -->
                    <!-- Logo -->
                    <!-- ============================================================== -->
                    <a class="navbar-brand" href="">
                        <!-- Logo icon -->
                        <b class="logo-icon p-l-10">
                            <!--You can put here icon as well // <i class="wi wi-sunset"></i> //-->
                            <!-- Dark Logo icon -->
                            <img src="<?php echo base_url() ?>assets/backend/assets/images/jr.png" alt="homepage" class="light-logo" height="30" />
                           
                        </b>
                        <!--End Logo icon -->
                         <!-- Logo text -->
                        <span class="logo-text">
                             <!-- dark Logo text -->
                             <img src="<?php echo base_url() ?>assets/backend/assets/images/longname.png" alt="homepage" class="light-logo" height="40" style="margin-top: 10px;" />
                            
                        </span>                    
                    </a>                    
                    <a class="topbartoggler d-block d-md-none waves-effect waves-light" href="javascript:void(0)" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><i class="ti-more"></i></a>
                </div>
                <!-- ============================================================== -->
                <!-- End Logo -->
                <!-- ============================================================== -->
                <div class="navbar-collapse collapse" id="navbarSupportedContent" data-navbarbg="skin5">
                    <!-- ============================================================== -->
                    <!-- toggle and nav items -->
                    <!-- ============================================================== -->
                    <ul class="navbar-nav float-left mr-auto">
                        <li class="nav-item d-none d-md-block"><a class="nav-link sidebartoggler waves-effect waves-light" href="javascript:void(0)" data-sidebartype="mini-sidebar"><i class="mdi mdi-menu font-24"></i></a></li>
                        <!-- ============================================================== -->
                        <!-- create new -->
                        <!-- ============================================================== -->
                        <li class="nav-item dropdown"></li>
                        <!-- ============================================================== -->
                        <!-- Search -->
                        <!-- ============================================================== -->
                        <li class="nav-item search-box"> <a class="nav-link waves-effect waves-dark" href="javascript:void(0)"><i class="ti-search"></i></a>
                            <form class="app-search position-absolute">
                                <input type="text" class="form-control" placeholder="Search &amp; enter"> <a class="srh-btn"><i class="ti-close"></i></a>
                            </form>
                        </li>
                    </ul>
                    <!-- ============================================================== -->
                    <!-- Right side toggle and nav items -->
                    <!-- ============================================================== -->
                    <ul class="navbar-nav float-right">
                        <!-- ============================================================== -->
                        <!-- Comment -->
                        <!-- ============================================================== -->
                        <li class="nav-item dropdown">
                            
                        </li>
                        <!-- ============================================================== -->
                        <!-- End Comment -->
                        <!-- ============================================================== -->
                        <!-- ============================================================== -->
                        <!-- Messages -->
                        <!-- ============================================================== -->
                        <li class="nav-item dropdown">
                            
                        </li>
                        <!-- ============================================================== -->
                        <!-- End Messages -->
                        <!-- ============================================================== -->

                        <!-- ============================================================== -->
                        <!-- User profile and search -->
                        <!-- ============================================================== -->
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle text-muted waves-effect waves-dark pro-pic" href="" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><img src="<?php echo base_url() ?>assets/backend/assets/images/users/1.jpg" alt="user" class="rounded-circle" width="31"></a>
                            <div class="dropdown-menu dropdown-menu-right user-dd animated">
                                <!-- <div class="dropdown-divider"></div> -->
                                <a class="dropdown-item" href="<?php echo base_url('mitra/setting') ?>"><i class="ti-settings m-r-5 m-l-5"></i> Setting Akun</a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="<?php echo base_url('mitra/login/logout') ?>"><i class="fa fa-power-off m-r-5 m-l-5"></i> Logout</a>
                                <!-- <div class="dropdown-divider"></div>
                                <div class="p-l-30 p-10"><a href="javascript:void(0)" class="btn btn-sm btn-success btn-rounded">View Profile</a></div> -->
                            </div>
                        </li>
                        <!-- ============================================================== -->
                        <!-- User profile and search -->
                        <!-- ============================================================== -->
                    </ul>
                </div>
            </nav>
        </header>
        <!-- ============================================================== -->
        <!-- End Topbar header -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- Left Sidebar - style you can find in sidebar.scss  -->
        <!-- ============================================================== -->
        <aside class="left-sidebar" data-sidebarbg="skin5">
            <!-- Sidebar scroll-->
            <div class="scroll-sidebar">
                <!-- Sidebar navigation-->
                <nav class="sidebar-nav">
                    <ul id="sidebarnav" class="p-t-30">
                        <li class="sidebar-item <?php if($this->uri->segment(2) == "dashboard"){ echo 'selected'; } ?>"> 
                            <a class="sidebar-link waves-effect waves-dark sidebar-link <?php if($this->uri->segment(2) == "dashboard"){ echo 'active'; } ?>" href="<?php echo base_url('mitra') ?>" aria-expanded="false">
                                <i class="mdi mdi-view-dashboard"></i>
                                <span class="hide-menu">Dashboard Mitra</span>
                            </a>
                        </li>
                        <li class="sidebar-item <?php if($this->uri->segment(2) == "profil"){ echo 'selected'; } ?>">
                            <a class="sidebar-link waves-effect waves-dark sidebar-link <?php if($this->uri->segment(2) == "profil"){ echo 'active'; } ?>" href="<?php echo base_url('mitra/profil') ?>" aria-expanded="false">
                                <i class="mdi mdi-account"></i>
                                <span class="hide-menu">Profil</span>
                            </a>
                        </li>
                        <li class="sidebar-item <?php if($this->uri->segment(2) == "upgrade"){ echo 'selected'; } ?>">
                            <a class="sidebar-link waves-effect waves-dark sidebar-link <?php if($this->uri->segment(2) == "upgrade"){ echo 'active'; } ?>" href="<?php echo base_url('mitra/upgrade') ?>" aria-expanded="false">
                                <i class="mdi mdi-arrow-up-bold"></i>
                                <span class="hide-menu">Upgrade</span>
                            </a>
                        </li>
                        <li class="sidebar-item <?php if($this->uri->segment(2) == "produk"){ echo 'selected'; } ?>">
                            <a class="sidebar-link waves-effect waves-dark sidebar-link <?php if($this->uri->segment(2) == "produk"){ echo 'active'; } ?>" href="<?php echo base_url('mitra/produk') ?>" aria-expanded="false">
                                <i class="mdi mdi-shopping"></i>
                                <span class="hide-menu">Projek Anda</span>
                            </a>
                        </li>
                        <li class="sidebar-item <?php if($this->uri->segment(2) == "statistik"){ echo 'selected'; } ?>">
                            <a class="sidebar-link waves-effect waves-dark sidebar-link <?php if($this->uri->segment(2) == "statistik"){ echo 'active'; } ?>" href="<?php echo base_url('mitra/statistik') ?>" aria-expanded="false">
                                <i class="mdi mdi-chart-arc"></i>
                                <span class="hide-menu">Statistik</span>
                            </a>
                        </li>
                        <li class="sidebar-item <?php if($this->uri->segment(2) == "promosi"){ echo 'selected'; } ?>">
                            <a class="sidebar-link waves-effect waves-dark sidebar-link <?php if($this->uri->segment(2) == "promosi"){ echo 'active'; } ?>" href="<?php echo base_url('mitra/promosi') ?>" aria-expanded="false">
                                <i class="mdi mdi-star-circle"></i>
                                <span class="hide-menu">Promosi</span>
                            </a>
                        </li>
                        <li class="sidebar-item <?php if($this->uri->segment(2) == "artikel"){ echo 'selected'; } ?>">
                            <a class="sidebar-link waves-effect waves-dark sidebar-link <?php if($this->uri->segment(2) == "artikel"){ echo 'active'; } ?>" href="<?php echo base_url('mitra/artikel') ?>" aria-expanded="false">
                                <i class="mdi mdi-file-document-box"></i>
                                <span class="hide-menu">Artikel</span>
                            </a>
                        </li>
                        <li class="sidebar-item">
                            <a class="sidebar-link has-arrow waves-effect waves-dark" href="javascript:void(0)" aria-expanded="false">
                                <i class="mdi mdi-file"></i>
                                <span class="hide-menu">Laporan </span>
                            </a>
                            <ul aria-expanded="false" class="collapse  first-level">
                                <li class="sidebar-item"><a href="<?php echo base_url('mitra/transaksi') ?>" class="sidebar-link"><i class="mdi mdi-transfer"></i><span class="hide-menu"> Transaksi </span></a></li>
                                <li class="sidebar-item"><a href="<?php echo base_url('mitra/saldo') ?>" class="sidebar-link"><i class="fas fa-dollar-sign"></i><span class="hide-menu"> Saldo </span></a></li>
                                <li class="sidebar-item"><a href="<?php echo base_url('mitra/penjualan') ?>" class="sidebar-link"><i class="fas fa-shopping-cart"></i><span class="hide-menu"> Penjualan </span></a></li>
                                <li class="sidebar-item"><a href="<?php echo base_url('mitra/survei') ?>" class="sidebar-link"><i class="mdi mdi-watch"></i><span class="hide-menu"> Survei </span></a></li>
                                <!-- <li class="sidebar-item"><a href="form-wizard.html" class="sidebar-link"><i class="fas fa-users"></i><span class="hide-menu"> Buyer </span></a></li> -->
                            </ul>
                        </li>                                                                
                    </ul>
                </nav>
                <!-- End Sidebar navigation -->
            </div>
            <!-- End Sidebar scroll-->
        </aside>
        <!-- ============================================================== -->
        <!-- End Left Sidebar - style you can find in sidebar.scss  -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- Page wrapper  -->
        <!-- ============================================================== -->
        <div class="page-wrapper">
            <!-- ============================================================== -->
            <!-- Bread crumb and right sidebar toggle -->
            <!-- ============================================================== -->
            <?php $this->load->view($content); ?>            
            <!-- ============================================================== -->
            <!-- End Container fluid  -->
            <!-- ============================================================== -->
            <!-- ============================================================== -->
            <!-- footer -->
            <!-- ============================================================== -->
            <footer class="footer text-center">
                All Rights Reserved by Juraganrumah.net. Developed by <a href="https://juraganrumah.net">Juraganrumah</a>.
            </footer>
            <!-- ============================================================== -->
            <!-- End footer -->
            <!-- ============================================================== -->
        </div>
        <!-- ============================================================== -->
        <!-- End Page wrapper  -->
        <!-- ============================================================== -->
    </div>
    <!-- ============================================================== -->
    <!-- End Wrapper -->
    <!-- ============================================================== -->
    <!-- ============================================================== -->
    <!-- All Jquery -->
    <!-- ============================================================== -->
    <!-- Bootstrap tether Core JavaScript -->
    <script src="<?php echo base_url() ?>assets/backend/assets/libs/popper.js/dist/umd/popper.min.js"></script>
    <script src="<?php echo base_url() ?>assets/backend/assets/libs/bootstrap/dist/js/bootstrap.min.js"></script>
    <script src="<?php echo base_url() ?>assets/backend/assets/libs/perfect-scrollbar/dist/perfect-scrollbar.jquery.min.js"></script>
    <script src="<?php echo base_url() ?>assets/backend/assets/extra-libs/sparkline/sparkline.js"></script>
    <!--Wave Effects -->
    <script src="<?php echo base_url() ?>assets/backend/dist/js/waves.js"></script>
    <!--Menu sidebar -->
    <script src="<?php echo base_url() ?>assets/backend/dist/js/sidebarmenu.js"></script>
    <!--Custom JavaScript -->
    <script src="<?php echo base_url() ?>assets/backend/dist/js/custom.min.js"></script>
    <!--This page JavaScript -->
    <!-- <script src="<?php echo base_url() ?>assets/backend/dist/js/pages/dashboards/dashboard1.js"></script> -->
    <!-- Charts js Files -->
    <!-- <script src="<?php echo base_url() ?>assets/backend/assets/libs/flot/excanvas.js"></script>
    <script src="<?php echo base_url() ?>assets/backend/assets/libs/flot/jquery.flot.js"></script>
    <script src="<?php echo base_url() ?>assets/backend/assets/libs/flot/jquery.flot.pie.js"></script>
    <script src="<?php echo base_url() ?>assets/backend/assets/libs/flot/jquery.flot.time.js"></script>
    <script src="<?php echo base_url() ?>assets/backend/assets/libs/flot/jquery.flot.stack.js"></script>
    <script src="<?php echo base_url() ?>assets/backend/assets/libs/flot/jquery.flot.crosshair.js"></script>
    <script src="<?php echo base_url() ?>assets/backend/assets/libs/flot.tooltip/js/jquery.flot.tooltip.min.js"></script> -->
    <!-- <script src="<?php echo base_url() ?>assets/backend/dist/js/pages/chart/chart-page-init.js"></script> -->
    <!-- wizard -->
    <script src="<?php echo base_url() ?>assets/backend/assets/libs/jquery-steps/build/jquery.steps.min.js"></script>
    <script src="<?php echo base_url() ?>assets/backend/assets/libs/jquery-validation/dist/jquery.validate.min.js"></script>
    <script src="<?php echo base_url() ?>assets/backend/assets/libs/select2/dist/js/select2.full.min.js"></script>
    <script src="<?php echo base_url() ?>assets/backend/assets/libs/select2/dist/js/select2.min.js"></script>
    <script src="<?php echo base_url() ?>assets/backend/assets/libs/magnific-popup/dist/jquery.magnific-popup.min.js"></script>
    <script src="<?php echo base_url() ?>assets/backend/assets/libs/magnific-popup/meg.init.js"></script>
    <script>
    var form = $("#example-form");
    form.validate({
        errorPlacement: function errorPlacement(error, element) { element.before(error); },
        rules: {
            confirm: {
                equalTo: "#password"
            }
        }
    });
     form.children("div").steps({
        headerTag: "h3",
        bodyTag: "section",
        transitionEffect: "slideLeft",
        onStepChanging: function(event, currentIndex, newIndex) {
            form.validate().settings.ignore = ":disabled,:hidden";
            return form.valid();
        },
        onFinishing: function(event, currentIndex) {
            form.validate().settings.ignore = ":disabled";
            return form.valid();
        },
        onFinished: function(event, currentIndex) {
            form.submit();
        }
    });
     
    $(".select2").select2();        
    
    </script>

</body>

</html>