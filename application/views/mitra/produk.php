<link href="<?php echo base_url() ?>assets/backend/assets/libs/datatables.net-bs4/css/dataTables.bootstrap4.css" rel="stylesheet">
<script src="<?php echo base_url() ?>assets/backend/assets/extra-libs/DataTables/datatables.min.js"></script>   

 <div class="page-breadcrumb">
    <div class="row">
        <div class="col-12 d-flex no-block align-items-center">
            <h4 class="page-title">Produk Anda</h4>
            <div class="ml-auto text-right">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="<?php echo base_url('mitra') ?>">Dashboard</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Produk</li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>
</div>

<div class="container-fluid">
    
    <div class="row">
        <div class="col-md-12">            
            <div class="card">
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-6">
                            <h5>Property Anda</h5>
                        </div>
                        <div class="col-md-6 text-right">
                            <a href="<?php echo base_url('mitra/produk/add') ?>" class="btn btn-primary"><i class="fas fa-plus"></i> Tambah Produk</a>
                        </div>
                    
                    </div><br>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="table-responsive">
                                <table id="zero_config" class="table table-striped table-bordered">
                                    <thead>
                                        <tr>
                                            <th width="1%">No</th>
                                            <th>Kode Produk</th>
                                            <th>Nama</th>
                                            <th>Kategori</th>
                                            <th>Alamat</th>
                                            <th>Harga</th>
                                            <td>Aksi</td>

                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                        </tr>
                                    </tbody>
                                    
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>        
        </div>
    </div>
    
</div>            

<script>
    $('#zero_config').DataTable();            
</script>