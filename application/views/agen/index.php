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
    <title>Dashboard Agen Juragan Rumah</title>
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
                        <!-- <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                             <span class="d-none d-md-block">Create New <i class="fa fa-angle-down"></i></span>
                             <span class="d-block d-md-none"><i class="fa fa-plus"></i></span>   
                            </a>
                            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" href="#">Action</a>
                                <a class="dropdown-item" href="#">Another action</a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="#">Something else here</a>
                            </div>
                        </li> -->
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
                       <!--  <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle waves-effect waves-dark" href="" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="mdi mdi-bell font-24"></i>
                            </a>
                             <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" href="#">Action</a>
                                <a class="dropdown-item" href="#">Another action</a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="#">Something else here</a>
                            </div>
                        </li> -->
                        <!-- ============================================================== -->
                        <!-- End Comment -->
                        <!-- ============================================================== -->
                        <!-- ============================================================== -->
                        <!-- Messages -->
                        <!-- ============================================================== -->
                        <!-- <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle waves-effect waves-dark" href="" id="2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="font-24 mdi mdi-comment-processing"></i>
                            </a>
                            <div class="dropdown-menu dropdown-menu-right mailbox animated bounceInDown" aria-labelledby="2">
                                <ul class="list-style-none">
                                    <li>
                                        <div class="">
                                             
                                            <a href="javascript:void(0)" class="link border-top">
                                                <div class="d-flex no-block align-items-center p-10">
                                                    <span class="btn btn-success btn-circle"><i class="ti-calendar"></i></span>
                                                    <div class="m-l-10">
                                                        <h5 class="m-b-0">Event today</h5> 
                                                        <span class="mail-desc">Just a reminder that event</span> 
                                                    </div>
                                                </div>
                                            </a>
                                            
                                            <a href="javascript:void(0)" class="link border-top">
                                                <div class="d-flex no-block align-items-center p-10">
                                                    <span class="btn btn-info btn-circle"><i class="ti-settings"></i></span>
                                                    <div class="m-l-10">
                                                        <h5 class="m-b-0">Settings</h5> 
                                                        <span class="mail-desc">You can customize this template</span> 
                                                    </div>
                                                </div>
                                            </a>
                                            
                                            <a href="javascript:void(0)" class="link border-top">
                                                <div class="d-flex no-block align-items-center p-10">
                                                    <span class="btn btn-primary btn-circle"><i class="ti-user"></i></span>
                                                    <div class="m-l-10">
                                                        <h5 class="m-b-0">Pavan kumar</h5> 
                                                        <span class="mail-desc">Just see the my admin!</span> 
                                                    </div>
                                                </div>
                                            </a>
                                            
                                            <a href="javascript:void(0)" class="link border-top">
                                                <div class="d-flex no-block align-items-center p-10">
                                                    <span class="btn btn-danger btn-circle"><i class="fa fa-link"></i></span>
                                                    <div class="m-l-10">
                                                        <h5 class="m-b-0">Luanch Admin</h5> 
                                                        <span class="mail-desc">Just see the my new admin!</span> 
                                                    </div>
                                                </div>
                                            </a>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </li> -->
                        <!-- ============================================================== -->
                        <!-- End Messages -->
                        <!-- ============================================================== -->

                        <!-- ============================================================== -->
                        <!-- User profile and search -->
                        <!-- ============================================================== -->
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle text-muted waves-effect waves-dark pro-pic" href="" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><img src="<?php echo base_url() ?>assets/backend/assets/images/users/1.jpg" alt="user" class="rounded-circle" width="31"></a>
                            <div class="dropdown-menu dropdown-menu-right user-dd animated">
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="<?php echo base_url('agen/setting') ?>"><i class="ti-settings m-r-5 m-l-5"></i> Account Setting</a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="<?php echo base_url('agen/login/logout') ?>"><i class="fa fa-power-off m-r-5 m-l-5"></i> Logout</a>                                
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
                            <a class="sidebar-link waves-effect waves-dark sidebar-link <?php if($this->uri->segment(2) == "dashboard"){ echo 'active'; } ?>" href="<?php echo base_url('agen') ?>" aria-expanded="false">
                                <i class="mdi mdi-view-dashboard"></i>
                                <span class="hide-menu">Dashboard Agen</span>
                            </a>
                        </li>
                        <li class="sidebar-item <?php if($this->uri->segment(2) == "profil"){ echo 'selected'; } ?>">
                            <a class="sidebar-link waves-effect waves-dark sidebar-link <?php if($this->uri->segment(2) == "profil"){ echo 'active'; } ?>" href="<?php echo base_url('agen/profil') ?>" aria-expanded="false">
                                <i class="mdi mdi-account"></i>
                                <span class="hide-menu">Profil</span>
                            </a>
                        </li>
                        <li class="sidebar-item <?php if($this->uri->segment(2) == "upgrade"){ echo 'selected'; } ?>">
                            <a class="sidebar-link waves-effect waves-dark sidebar-link <?php if($this->uri->segment(2) == "upgrade"){ echo 'active'; } ?>" href="<?php echo base_url('agen/upgrade') ?>" aria-expanded="false">
                                <i class="mdi mdi-arrow-up-bold"></i>
                                <span class="hide-menu">Upgrade</span>
                            </a>
                        </li>
                        <li class="sidebar-item <?php if($this->uri->segment(2) == "produk"){ echo 'selected'; } ?>">
                            <a class="sidebar-link waves-effect waves-dark sidebar-link <?php if($this->uri->segment(2) == "produk"){ echo 'active'; } ?>" href="<?php echo base_url('agen/produk') ?>" aria-expanded="false">
                                <i class="mdi mdi-shopping"></i>
                                <span class="hide-menu">Produk</span>
                            </a>
                        </li>
                        <li class="sidebar-item <?php if($this->uri->segment(2) == "statistik"){ echo 'selected'; } ?>">
                            <a class="sidebar-link waves-effect waves-dark sidebar-link <?php if($this->uri->segment(2) == "statistik"){ echo 'active'; } ?>" href="<?php echo base_url('agen/statistik') ?>" aria-expanded="false">
                                <i class="mdi mdi-chart-arc"></i>
                                <span class="hide-menu">Statistik</span>
                            </a>
                        </li>
                        <li class="sidebar-item <?php if($this->uri->segment(2) == "promosi"){ echo 'selected'; } ?>">
                            <a class="sidebar-link waves-effect waves-dark sidebar-link <?php if($this->uri->segment(2) == "promosi"){ echo 'active'; } ?>" href="<?php echo base_url('agen/promosi') ?>" aria-expanded="false">
                                <i class="mdi mdi-star-circle"></i>
                                <span class="hide-menu">Promosi</span>
                            </a>
                        </li>
                        <li class="sidebar-item">
                            <a class="sidebar-link has-arrow waves-effect waves-dark" href="javascript:void(0)" aria-expanded="false">
                                <i class="mdi mdi-file"></i>
                                <span class="hide-menu">Laporan </span>
                            </a>
                            <ul aria-expanded="false" class="collapse  first-level">
                                <li class="sidebar-item"><a href="<?php echo base_url('agen/komisi') ?>" class="sidebar-link"><i class=" fas fa-dollar-sign"></i><span class="hide-menu"> Komisi </span></a></li>
                                <li class="sidebar-item"><a href="<?php echo base_url('agen/sub_agen') ?>" class="sidebar-link"><i class="fas fa-user-circle"></i><span class="hide-menu"> Sub Agen </span></a></li>
                                <li class="sidebar-item"><a href="<?php echo base_url('agen/buyer') ?>" class="sidebar-link"><i class="fas fa-users"></i><span class="hide-menu"> Buyer </span></a></li>
                                <li class="sidebar-item"><a href="<?php echo base_url('agen/poin') ?>" class="sidebar-link"><i class="mdi mdi-trophy-variant"></i><span class="hide-menu"> Poin </span></a></li>
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
    
    <script src="<?php echo base_url() ?>assets/backend/dist/js/pages/chart/chart-page-init.js"></script>
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