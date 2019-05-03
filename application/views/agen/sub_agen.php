<link href="<?php echo base_url() ?>assets/backend/assets/libs/datatables.net-bs4/css/dataTables.bootstrap4.css" rel="stylesheet">
<script src="<?php echo base_url() ?>assets/backend/assets/extra-libs/DataTables/datatables.min.js"></script>    


 <div class="page-breadcrumb">
    <div class="row">
        <div class="col-12 d-flex no-block align-items-center">
            <h4 class="page-title">Daftar Sub Agen Affiliasi</h4>
            <div class="ml-auto text-right">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="<?php echo base_url('agen') ?>">Dashboard</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Buyer</li>
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
                <div class="table-responsive">
                    <table id="zero_config" class="table table-striped table-bordered">
                        <thead>
                            <tr>
                                <th width="1%">No</th>
                                <th>Nama Agen</th>
                                <th>Tanggal Bergabung</th>
                                <th>No Wa</th>                                
                                <th>Status Agen</th>                                
                            </tr>
                        </thead>
                        <tbody>
                            <?php $no = 1; foreach ($get as $data) { ?>
                            <tr>
                                <td><?php echo $no++ ?></td>
                                <td><?php echo $data->nama_agen ?></td>
                                <td><?php echo date('d M Y', strtotime($data->date_join)) ?></td>                                
                                <td><?php echo $data->nomor_wa ?></td>                                
                                <td>
                                    <?php if ($data->id_premium == null) {
                                        echo "Free";
                                    }else{
                                        echo "Premium";                                        
                                    } ?>
                                </td>                                
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