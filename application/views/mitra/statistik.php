 <div class="page-breadcrumb">
    <div class="row">
        <div class="col-12 d-flex no-block align-items-center">
            <h4 class="page-title">Statistik</h4>
            <div class="ml-auto text-right">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">                        
                        <li class="breadcrumb-item"><a href="<?php echo base_url('mitra') ?>">Dashboard</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Statistik</li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>
</div>

<div class="container-fluid">
     <div class="row">
        <div class="col-md-3 col-lg-3">            
            <div class="card card-hover">
                <div class="box bg-danger text-center">
                    <h1 class="font-light text-white"><i class="mdi mdi-chart-areaspline"></i></h1>
                    <h5 class="font-light text-white">Kunjungan Landing Page</h5>
                    <h4 class="text-white"><?php if (isset($landing->count)) { echo $landing->count; }else{ echo "0"; } ?></h4>
                </div>
            </div>
        </div>        

        <div class="col-md-3 col-lg-3">            
            <div class="card card-hover">
                <div class="box bg-cyan text-center">
                    <h1 class="font-light text-white"><i class="mdi mdi-whatsapp"></i></h1>
                    <h5 class="font-light text-white">Kontak Whatsapp</h5>
                    <h4 class="text-white"><?php if (isset($wa->count)) { echo $wa->count; }else{ echo "0"; } ?></h4>
                </div>
            </div>
        </div>        
    
        <div class="col-md-3 col-lg-3">            
            <div class="card card-hover">
                <div class="box bg-success text-center">
                    <h1 class="font-light text-white"><i class="fas fa-phone"></i></h1>
                    <h5 class="font-light text-white">Kontak Telepon</h5>
                    <h4 class="text-white"><?php if (isset($telepon->count)) { echo $telepon->count; }else{ echo "0"; } ?></h4>
                </div>
            </div>
        </div>        
    
        <div class="col-md-3 col-lg-3">            
            <div class="card card-hover">
                <div class="box bg-warning text-center">
                    <h1 class="font-light text-white"><i class="mdi mdi-message"></i></h1>
                    <h5 class="font-light text-white">Kontak SMS</h5>
                    <h4 class="text-white"><?php if (isset($sms->count)) { echo $sms->count; }else{ echo "0"; } ?></h4>
                </div>
            </div>
        </div>        
    
    </div>
</div>            