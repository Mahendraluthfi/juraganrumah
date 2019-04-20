<link href="<?php echo base_url() ?>assets/backend/assets/libs/datatables.net-bs4/css/dataTables.bootstrap4.css" rel="stylesheet">
<script src="<?php echo base_url() ?>assets/backend/assets/extra-libs/DataTables/datatables.min.js"></script> 
<link href="<?php echo base_url() ?>assets/backend/assets/libs/toastr/build/toastr.min.css" rel="stylesheet">

<script src="<?php echo base_url() ?>assets/backend/assets/libs/toastr/build/toastr.min.js"></script>
 
 <div class="page-breadcrumb">
    <div class="row">
        <div class="col-12 d-flex no-block align-items-center">
            <h4 class="page-title">Promosi</h4>
            <div class="ml-auto text-right">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">                        
                        <li class="breadcrumb-item"><a href="<?php echo base_url('mitra') ?>">Dashboard</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Promosi</li>
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
                            <h5>Data Promosi</h5>
                        </div>
                        <div class="col-md-6 text-right">
                            <a href="#" onclick="add()" class="btn btn-primary"><i class="fas fa-plus"></i> Tambah Promosi</a>
                        </div>                    
                    </div><hr>
                    <div class="row">                        
                        <div class="col-md-12">
                            <table class="table table-bordered table-hover" id="zero_config">
                                <thead>
                                    <tr>
                                        <th width="1%">#</th>
                                        <th>Tanggal</th>
                                        <th>Nama Promosi</th>
                                        <th>Foto</th>
                                        <th>Status</th>
                                        <th>Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php $no=1; foreach ($get as $data) { ?>                                        
                                        <tr>
                                            <td><?php echo $no++ ?></td>
                                            <td><?php echo date('d M Y', strtotime($data->date_post)) ?></td>
                                            <td><?php echo $data->nama_iklan ?></td>
                                            <td class="text-center">
                                                <a href="#" onclick="foto('<?php echo $data->id ?>')"><img src="<?php echo base_url('assets/backend/fotomitra/'.$data->file) ?>" height="50" class="img-rounded"></a>
                                            </td>
                                            <td><?php if ($data->status == '1') {
                                                echo "Publish";
                                            } ?></td>
                                            <td>
                                                <button type="button" onclick="edit('<?php echo $data->id ?>')" class="btn btn-default btn-sm"><i class="fas fa-edit"></i></button>
                                                <a href="<?php echo base_url('mitra/promosi/delete/'.$data->id.'/'.$data->file) ?>" class="btn btn-danger btn-sm" onclick="return confirm('Yakin Hapus Data ?')"><i class="fas fa-trash"></i></a>
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

 <div class="modal fade" id="view_modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document ">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Tambah Promosi</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true ">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <?php echo form_open_multipart('mitra/promosi/submit', array('id' => 'form')); ?>
                    <div class="form-group row">
                        <label for="fname" class="col-sm-3 control-label col-form-label">Nama Promosi</label>
                        <div class="col-sm-9">
                            <input type="text" name="nama" class="form-control" placeholder="Nama Promosi" required="">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="fname" class="col-sm-3 control-label col-form-label">Foto Promosi</label>
                        <div class="col-sm-9">
                            <input type="file" name="foto" accept="image/*" required="">
                            <span>Rekomendasi Ukuran 450x800 pixels</span>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="fname" class="col-sm-3 control-label col-form-label"></label>
                        <div class="col-sm-9">
                            <button type="submit" class="btn btn-default">Simpan</button>
                        </div>
                    </div>
                <?php echo form_close(); ?>
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="edit_modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document ">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Tambah Promosi</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true ">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <?php echo form_open_multipart('mitra/promosi/submit_edit', array('id' => 'form')); ?>
                    <div class="form-group row">
                        <label for="fname" class="col-sm-3 control-label col-form-label">Nama Promosi</label>
                        <div class="col-sm-9">
                            <input type="text" name="nama" class="form-control" placeholder="Nama Promosi" required="">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="fname" class="col-sm-3 control-label col-form-label">Foto Promosi</label>
                        <div class="col-sm-9">
                            <img src="" class="foto" height="50">
                            <input type="file" name="foto" accept="image/*">
                            <input type="hidden" name="id">
                            <span>Rekomendasi Ukuran 450x800 pixels</span>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="fname" class="col-sm-3 control-label col-form-label"></label>
                        <div class="col-sm-9">
                            <button type="submit" class="btn btn-default">Simpan</button>
                        </div>
                    </div>
                <?php echo form_close(); ?>
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="foto_modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document ">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Foto Iklan Promosi</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true ">&times;</span>
                </button>
            </div>
            <div class="modal-body text-center">
                <img src="" alt="" height="800" width="450" class="fotozoom">
            </div>
        </div>
    </div>
</div>

<script>
    $('#zero_config').DataTable();                
     <?php echo $this->session->flashdata('error'); ?>

    function add() {
        $('#form')[0].reset(); // reset form on modals
        $('#view_modal').modal('show');     
    }

    function edit(id) {
         $.ajax({
            url : "<?php echo site_url('index.php/mitra/promosi/get/')?>" + id,
            type: "GET",
            dataType: "JSON",
            success: function(data)
            {   
                $('[name="id"]').val(data.id);
                $('[name="nama"]').val(data.nama_iklan);
                $('.foto').attr("src","<?php echo base_url('assets/backend/fotomitra/') ?>"+data.file);
                $('#edit_modal').modal('show');
                
            },
        error: function (jqXHR, textStatus, errorThrown)
        {
            alert('Error get data from ajax');
        }
        });    
    }

     function foto(id) {
         $.ajax({
            url : "<?php echo site_url('index.php/mitra/promosi/get/')?>" + id,
            type: "GET",
            dataType: "JSON",
            success: function(data)
            {   
                
                $('.fotozoom').attr("src","<?php echo base_url('assets/backend/fotomitra/') ?>"+data.file);
                $('#foto_modal').modal('show');
                
            },
        error: function (jqXHR, textStatus, errorThrown)
        {
            alert('Error get data from ajax');
        }
        });    
    }
</script>