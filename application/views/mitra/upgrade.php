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
                                <a href="<?php echo base_url('mitra/profil') ?>" target="_blank" class="btn btn-danger">Profil</a>
                            </div>
                        </div>
                    </div>


                    <div class="col-md-4">
                        <div class="card card-hover">
                            <div class="box bg-info text-center">
                                <h1 class="font-light text-white"><i class="mdi mdi-home-map-marker"></i></h1>
                                <h5 class="text-white"><?php echo $project ?> Project</h5>
                                <button type="button" class="btn btn-danger">Detail</button>
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
      
    </div>
    
</div>            

<script>
     <?php echo $this->session->flashdata('error'); ?>          
</script>