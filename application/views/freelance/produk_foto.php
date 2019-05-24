<link href="<?php echo base_url() ?>assets/backend/assets/libs/datatables.net-bs4/css/dataTables.bootstrap4.css" rel="stylesheet">
<script src="<?php echo base_url() ?>assets/backend/assets/extra-libs/DataTables/datatables.min.js"></script>   

 <div class="page-breadcrumb">
    <div class="row">
        <div class="col-12 d-flex no-block align-items-center">
            <h4 class="page-title">Produk Anda</h4>
            <div class="ml-auto">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="<?php echo base_url('freelance') ?>">Dashboard</a></li>
                        <li class="breadcrumb-item"><a href="<?php echo base_url('freelance/produk') ?>">Produk</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Foto Produk</li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>
</div>

<div class="container-fluid">
    
    <div class="row">
        <div class="col-md-4">
           <div class="card">            
                <div class="card-body">
                    <h4 class="card-title">Data Foto Property</h4>
                    <h5><?php echo $get->id_produk; ?></h5>
                    <h5><?php echo $get->nama_produk; ?></h5>                                            
                </div>           
            </div>
        </div>
        <div class="col-md-8">
            <div class="card">            
                <div class="card-body">
                    <h4 class="card-title">Tambah Foto Produk</h4>                
                        <?php echo form_open_multipart('freelance/produk/submit_foto', array('class' => 'form-horizontal','name' => 'frmfoto')); ?>
                            <div class="form-group row">
                                <label for="fname" class="col-sm-3 control-label col-form-label">Pilih Foto</label>
                                <div class="col-sm-9">
                                    <input type="file" name="files[]" multiple>
                                </div>
                            </div>    
                            <input type="hidden" name="id_produk" value="<?php echo $get->id_produk; ?>">                    
                        <?php echo form_close(); ?>
                        <button type="button" id="btn_add" class="btn btn-default"><i class="fas fa-plus"></i></button>
                        <button type="button" class="btn btn-default" onclick="save()"><i class="fas fa-save"></i> Simpan</button>
                </div>
            </div>
        </div>        
    </div>

    <div class="row">
        <div class="col-md-12">
            <div class="card">            
                <div class="card-body">
                    <table class="table table-bordered table-hover" id="zero_config">
                        <thead>
                            <tr>
                                <th width="1%">#</th>
                                <th>Foto</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $no=1; foreach ($foto as $data) { ?>
                            <tr class="text-center">
                                <td><?php echo $no++ ?></td>
                                <td><img src="<?php echo base_url('assets/backend/fotoproduk/'.$data->file) ?>" alt="" class="img-thumbnail" style="height: 250px;"></td>
                                <td>
                                    <a href="<?php echo base_url('freelance/produk/delete/'.$data->id_foto.'/'.$data->file.'/'.$data->id_produk) ?>" class="btn btn-danger" title="Hapus" onclick="return confirm('Yakin hapus foto ?')"><i class="fas fa-trash"></i></a>
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

<script>
    $(function() { $("#btn_add").click(function(e) {
    e.preventDefault();
    $(".form-horizontal").append('<div class="form-group row">' +
        '<label for="fname" class="col-sm-3 control-label col-form-label">Pilih Foto</label>' +
        '<div class="col-sm-9">' +
            '<input type="file" name="files[]" multiple>' +
        '</div>' +
        '</div>');    
  });
});

    function save() {
        document.frmfoto.submit();    
    }

    $('#zero_config').DataTable();            
</script>