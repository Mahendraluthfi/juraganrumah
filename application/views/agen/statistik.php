<link href="<?php echo base_url() ?>assets/backend/assets/libs/datatables.net-bs4/css/dataTables.bootstrap4.css" rel="stylesheet">
<script src="<?php echo base_url() ?>assets/backend/assets/extra-libs/DataTables/datatables.min.js"></script>    
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
        <div class="col-md-4 col-lg-4">            
            <div class="card card-hover">
                <div class="box bg-primary text-center">
                    <h1 class="font-light text-white"><i class="mdi mdi-home"></i></h1>
                    <h5 class="font-light text-white">Rumah</h5>
                    <h4 class="text-white"><?php if (isset($category->rumah)) { echo $category->rumah; }else{ echo "0"; } ?></h4>
                </div>
            </div>
        </div>        
    
        <div class="col-md-4 col-lg-4">            
            <div class="card card-hover">
                <div class="box bg-warning text-center">
                    <h1 class="font-light text-white"><i class="mdi mdi-home-modern"></i></h1>
                    <h5 class="font-light text-white">Apartement</h5>
                    <h4 class="text-white"><?php if (isset($category->apartment)) { echo $category->apartment; }else{ echo "0"; } ?></h4>
                </div>
            </div>
        </div>        
    
        <div class="col-md-4 col-lg-4">            
            <div class="card card-hover">
                <div class="box bg-danger text-center">
                    <h1 class="font-light text-white"><i class="mdi mdi-home-variant"></i></h1>
                    <h5 class="font-light text-white">Perumahan Subsidi</h5>
                    <h4 class="text-white"><?php if (isset($category->perumahan)) { echo $category->perumahan; }else{ echo "0"; } ?></h4>
                </div>
            </div>
        </div>            
    </div>
     <div class="row">            
        <div class="col-md-4 col-lg-4">            
            <div class="card card-hover">
                <div class="box bg-success text-center">
                    <h1 class="font-light text-white"><i class="mdi mdi-move-resize-variant"></i></h1>
                    <h5 class="font-light text-white">Kavling</h5>
                    <h4 class="text-white"><?php if (isset($category->kavling)) { echo $category->kavling; }else{ echo "0"; } ?></h4>
                </div>
            </div>
        </div>        
    
        <div class="col-md-4 col-lg-4">            
            <div class="card card-hover">
                <div class="box bg-info text-center">
                    <h1 class="font-light text-white"><i class="fas fa-procedures"></i></h1>
                    <h5 class="font-light text-white">Rumah Kost</h5>
                    <h4 class="text-white"><?php if (isset($category->kost)) { echo $category->kost; }else{ echo "0"; } ?></h4>
                </div>
            </div>
        </div>        
    
        <div class="col-md-4 col-lg-4">            
            <div class="card card-hover">
                <div class="box bg-warning text-center">
                    <h1 class="font-light text-white"><i class="mdi mdi-store"></i></h1>
                    <h5 class="font-light text-white">Ruko</h5>
                    <h4 class="text-white"><?php if (isset($category->ruko)) { echo $category->ruko; }else{ echo "0"; } ?></h4>
                </div>
            </div>
        </div>            
    </div>
     <div class="row">            
        <div class="col-md-4 col-lg-4">            
            <div class="card card-hover">
                <div class="box bg-danger text-center">
                    <h1 class="font-light text-white"><i class="mdi mdi-whatsapp"></i></h1>
                    <h5 class="font-light text-white">Kontak Whatsapp</h5>
                    <h4 class="text-white"><?php if (isset($wa->count)) { echo $wa->count; }else{ echo "0"; } ?></h4>
                </div>
            </div>
        </div>        
    
        <div class="col-md-4 col-lg-4">            
            <div class="card card-hover">
                <div class="box bg-success text-center">
                    <h1 class="font-light text-white"><i class="fas fa-phone"></i></h1>
                    <h5 class="font-light text-white">Kontak Telepon</h5>
                    <h4 class="text-white"><?php if (isset($telepon->count)) { echo $telepon->count; }else{ echo "0"; } ?></h4>
                </div>
            </div>
        </div>        
    
        <div class="col-md-4 col-lg-4">            
            <div class="card card-hover">
                <div class="box bg-cyan text-center">
                    <h1 class="font-light text-white"><i class="mdi mdi-message"></i></h1>
                    <h5 class="font-light text-white">Kontak SMS</h5>
                    <h4 class="text-white"><?php if (isset($sms->count)) { echo $sms->count; }else{ echo "0"; } ?></h4>
                </div>
            </div>
        </div>            
    </div>
    <div class="row">
        
        <div class="col-md-12">
        <div class="card">
            <div class="card-body">
                <h5 class="card-title">Statistik Properti</h5>
                <div class="table-responsive">
                    <table id="zero_config" class="table table-striped table-bordered">
                        <thead>
                            <tr>
                                <th width="1%">No</th>
                                <th>Properti</th>                                
                                <th>Kunjungan</th>                                
                                <th>Telepon</th>                                
                                <th>Whatsapp</th>                                
                                <th>SMS</th>                                
                            </tr>
                        </thead>
                        <tbody>
                            <?php $no = 1; foreach ($get as $data) { ?>
                            <tr>
                                <td><?php echo $no++ ?></td>
                                <td><?php echo $data->nama_produk ?></td>
                                <td><?php echo $data->count ?></td>                                
                                <td><?php echo $data->telepon ?></td>                                
                                <td><?php echo $data->wa ?></td>                                
                                <td><?php echo $data->sms ?></td>                                
                            </tr>
                            <?php } ?>
                        </tbody>
                        
                    </table>
                </div>
            </div>
            </div>
        </div>
    
    </div>
</div>            
<script>
    $('#zero_config').DataTable();            
</script>