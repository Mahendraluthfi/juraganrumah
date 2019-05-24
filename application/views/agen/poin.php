<link href="<?php echo base_url() ?>assets/backend/assets/libs/datatables.net-bs4/css/dataTables.bootstrap4.css" rel="stylesheet">
<script src="<?php echo base_url() ?>assets/backend/assets/extra-libs/DataTables/datatables.min.js"></script>    


 <div class="page-breadcrumb">
    <div class="row">
        <div class="col-12 d-flex no-block align-items-center">
            <h4 class="page-title">Poin & Rewards</h4>
            <div class="ml-auto text-right">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="<?php echo base_url('agen') ?>">Dashboard</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Poin</li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>
</div>

<div class="container-fluid">    
    <div class="row">
        <div class="col-md-9">
            <div class="card">
                <div class="card-body">
                    <h4>Sistem Poin dan Rewards Juragan Rumah</h4>
                    <ul class="list-group">
                      <li class="list-group-item list-group-item-success"><h5><i class="fas fa-star"></i> Rekrut Agen dapat 5 Poin</h5></li>
                      <li class="list-group-item list-group-item-success"><h5><i class="fas fa-star"></i> Rekrut Agen Premium dapat 10 Poin</h5></li>
                      <li class="list-group-item list-group-item-success"><h5><i class="fas fa-star"></i> Melakukan Penjualan dapat 50 Poin</h5></li>                      
                    </ul><br>
                     <div class="card card-hover">
                        <div class="box bg-info">
                            <h4 class="text-white">Sistem Ngebut Juragan</h4>
                            <h5 class="font-light text-white text-justify">
                                 Agen berhak mendapatkan hadiah 1 Unit Smartphone seharga mulai dari Rp. 1.200.000,- jika terhitung 1 Minggu pertama dari pendaftaran Agen dapat mengumpulkan poin 150.
                            </h5>
                        </div>
                    </div>
                    <div class="card card-hover">
                        <div class="box bg-warning">
                            <h4 class="text-white">Sistem Gerbong Juragan</h4>
                            <h5 class="font-light text-white text-justify">
                                Agen berhak mendapatkan hadiah 1 Unit Smartphone seharga mulai dari Rp. 1.800.000,- jika terhitung 1 Bulan pertama dari pendaftaran Agen dapat mengumpulkan poin 200.
                            </h5>
                        </div>
                    </div>     
                    <hr>
                    <h5 class="card-title">History Poin</h5>
                    <div class="table-responsive">
                        <table id="zero_config" class="table table-striped table-bordered">
                            <thead>
                                <tr>
                                    <th width="1%">No</th>
                                    <th>Tanggal</th>
                                    <th>Keterangan</th>
                                    <th>Poin</th>                                
                                </tr>
                            </thead>
                            <tbody>
                                <?php $no = 1; foreach ($row as $data) { ?>
                                <tr>
                                    <td><?php echo $no++ ?></td>
                                    <td><?php echo date('d M Y', strtotime($data->date)) ?></td>
                                    <td><?php echo $data->remarks ?></td>
                                    <td><?php echo $data->poin ?></td>                                
                                </tr>
                                <?php } ?>
                            </tbody>
                            
                        </table>
                    </div>
                </div>
                </div>
        </div>
        <div class="col-md-3">
            <div class="card card-hover">
                <div class="box bg-success">
                    <h4 class="text-white">Total Poin</h4>
                    <h1 class="font-light text-white"><?php echo $agen->poin ?></h1>
                </div>
            </div>                    
        </div>
    </div>        
    
</div>            


<script>
    $('#zero_config').DataTable();            

</script>