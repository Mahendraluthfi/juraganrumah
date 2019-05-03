<link href="<?php echo base_url() ?>assets/backend/assets/libs/toastr/build/toastr.min.css" rel="stylesheet">
<script src="<?php echo base_url() ?>assets/backend/assets/libs/toastr/build/toastr.min.js"></script>

 <div class="page-breadcrumb">
    <div class="row">
        <div class="col-12 d-flex no-block align-items-center">
            <h4 class="page-title">Upgrade Mitra Developer</h4>
            <div class="ml-auto text-right">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="<?php echo base_url('mitra') ?>">Dashboard</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Upgrade</li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>
</div>

<div class="container-fluid">
    
    <div class="row">
        
        <!-- <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <div class="row"> -->
                        <div class="col-md-4">
                        <div class="card card-hover">
                            <div class="box bg-cyan text-center">
                                <h1 class="font-light text-white"><i class="mdi mdi-account-card-details"></i></h1>
                                <h6 class="text-white"><?php echo $mitra->nama_perusahaan ?></h6>
                                <a href="<?php echo base_url('mitra/profil') ?>" class="btn btn-danger">Profil</a>
                            </div>
                        </div>
                    </div>


                    <div class="col-md-4">
                        <div class="card card-hover">
                            <div class="box bg-info text-center">
                                <h1 class="font-light text-white"><i class="mdi mdi-home-map-marker"></i></h1>
                                <h5 class="text-white"><?php echo $project ?> Projek</h5>
                                <a href="<?php echo base_url('mitra/profil') ?>" class="btn btn-danger">Detail</a>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-4">
                        <?php echo $status; ?>
                        
                    </div>
                    
                    </div>
                    
                <!-- </div>
            </div>
        </div>
        
    </div> -->
    <div class="alert alert-success text-center" role="alert">
      <h3 class="alert-heading">Keuntungan menjadi Mitra Developer Pro</h3><hr>
        <div class="alert alert-danger" role="alert">
            <h4>Gratis Biaya Pembuatan Website</h4>
            <span><strike>Rp 15.000.000,00</strike></span>  
        </div>
        <div class="alert alert-danger" role="alert">
            <h4>Gratis Biaya Customer Service</h4>
            <span><strike>Rp 2.500.000,00</strike>/bulan atau <strike>Rp 30.000.000,00</strike>/tahun</span>
        </div>
        <div class="alert alert-danger" role="alert">
            <h4>Gratis Biaya Agen Penjualan</h4>
            <span><strike>Rp 1.000.000,00</strike>/bulan atau <strike>Rp 12.000.000,00</strike>/tahun</span>            
        </div>
        <div class="alert alert-danger" role="alert">
            <h4>Gratis Biaya Pembinaan Agen</h4>
            <span><strike>Rp 5.000.000,00 </strike>/ Event</span>              
        </div>
        <div class="alert alert-danger" role="alert">
            <h4>Gratis Biaya Promosi</h4>
            <span><strike>Rp 10.000.000.000,00</strike></span>              
        </div>
    </div>
    
</div>            

<script>
     <?php echo $this->session->flashdata('error'); ?>          
</script>