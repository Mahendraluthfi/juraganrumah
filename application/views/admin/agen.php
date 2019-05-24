<link href="<?php echo base_url() ?>assets/backend/assets/libs/datatables.net-bs4/css/dataTables.bootstrap4.css" rel="stylesheet">
<link href="<?php echo base_url() ?>assets/backend/assets/libs/toastr/build/toastr.min.css" rel="stylesheet">
<script src="<?php echo base_url() ?>assets/backend/assets/extra-libs/DataTables/datatables.min.js"></script> 
<script src="<?php echo base_url() ?>assets/backend/assets/libs/toastr/build/toastr.min.js"></script>
<script src="<?php echo base_url() ?>assets/js/base64.js"></script>
 <div class="page-breadcrumb">
    <div class="row">
        <div class="col-12 d-flex no-block align-items-center">
            <h4 class="page-title">Data Agen</h4>
            <div class="ml-auto text-right">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="<?php echo base_url('admin') ?>">Dashboard</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Agen</li>
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
                        <div class="col-md-12">
                            <div class="table-responsive">
                            <table class="table table-bordered table-hover" id="zero_config">
                                <thead>
                                    <tr>
                                        <th width="1%">#</th>
                                        <th>ID Agen</th>
                                        <th>Nama</th>
                                        <th>No. WA</th>
                                        <th>Email</th>                                        
                                        <th>Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                  <?php $no = 1; foreach ($get as $data) { ?>
                                    <tr>
                                        <td><?php echo $no++; ?></td>
                                        <td><?php echo $data->id_agen ?></td>
                                        <td><?php echo $data->nama_agen ?></td>
                                        <td><?php echo $data->nomor_wa ?></td>
                                        <td><?php echo $data->email ?></td>
                                        <td>
                                            <button type="button" class="btn btn-success btn-sm" onclick="view('<?php echo $data->id_agen ?>')"><i class="mdi mdi-view-module"></i></button>
                                            <button type="button" class="btn btn-danger btn-sm"><i class="fas fa-trash"></i></button>
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
    </div>
    
</div>     

 <div class="modal fade" id="view_modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document ">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Detail Agen</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true ">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="form-group row">
                    <label for="fname" class="col-sm-3 control-label col-form-label">Nama Agen</label>
                    <div class="col-sm-9">
                        <input type="text" readonly class="form-control-plaintext" name="nama">
                    </div>
                </div>
                 <div class="form-group row">
                    <label for="fname" class="col-sm-3 control-label col-form-label">Username</label>
                    <div class="col-sm-9">
                        <input type="text" readonly class="form-control-plaintext" name="username">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="fname" class="col-sm-3 control-label col-form-label">Email</label>
                    <div class="col-sm-9">
                        <input type="text" readonly class="form-control-plaintext" name="email">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="fname" class="col-sm-3 control-label col-form-label">Alamat</label>
                    <div class="col-sm-9">
                        <input type="text" readonly class="form-control-plaintext" name="alamat">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="fname" class="col-sm-3 control-label col-form-label">Kab/Kota</label>
                    <div class="col-sm-9">
                        <input type="text" readonly class="form-control-plaintext" name="kabkot">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="fname" class="col-sm-3 control-label col-form-label">Provinsi</label>
                    <div class="col-sm-9">
                        <input type="text" readonly class="form-control-plaintext" name="prov">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="fname" class="col-sm-3 control-label col-form-label">KTP</label>
                    <div class="col-sm-9">
                        <input type="text" readonly class="form-control-plaintext" name="ktp">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="fname" class="col-sm-3 control-label col-form-label">Bergabung</label>
                    <div class="col-sm-9">
                        <input type="text" readonly class="form-control-plaintext" name="join">
                    </div>
                 </div>
                <div class="form-group row">
                    <label for="fname" class="col-sm-3 control-label col-form-label">Saldo</label>
                    <div class="col-sm-9">
                        <input type="text" readonly class="form-control-plaintext" name="saldo">
                    </div>
                </div>
                 <div class="form-group row">
                    <label for="fname" class="col-sm-3 control-label col-form-label">Poin</label>
                    <div class="col-sm-9">
                        <input type="text" readonly class="form-control-plaintext" name="poin">
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<script>
     <?php echo $this->session->flashdata('error'); ?>

    $('#zero_config').DataTable();            
         
    function view(id) {
        $.ajax({
            url : "<?php echo site_url('index.php/admin/agen/get/')?>" + id,
            type: "GET",
            dataType: "JSON",
            success: function(data)
            {      
                
                var decode = Base64.decode(data.balance);
                var saldo = new Intl.NumberFormat('ja-JP', { style: 'decimal' }).format(decode);                

                $('[name="nama"]').val(data.nama_agen);
                $('[name="username"]').val(data.username);
                $('[name="email"]').val(data.email);
                $('[name="alamat"]').val(data.alamat);
                $('[name="kabkot"]').val(data.kabkot);
                $('[name="prov"]').val(data.nama_prov);
                $('[name="ktp"]').val(data.ktp);
                $('[name="join"]').val(data.date_join);                
                $('[name="saldo"]').val(saldo);
                $('[name="poin"]').val(data.poin);
                $('#view_modal').modal('show');                
            },
        error: function (jqXHR, textStatus, errorThrown)
        {
            alert('Error get data from ajax');
        }
        });
    }

</script>