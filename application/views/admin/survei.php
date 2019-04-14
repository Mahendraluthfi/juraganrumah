<link href="<?php echo base_url() ?>assets/backend/assets/libs/datatables.net-bs4/css/dataTables.bootstrap4.css" rel="stylesheet">
<script src="<?php echo base_url() ?>assets/backend/assets/extra-libs/DataTables/datatables.min.js"></script> 
 <div class="page-breadcrumb">
    <div class="row">
        <div class="col-12 d-flex no-block align-items-center">
            <h4 class="page-title">Data Survei</h4>
            <div class="ml-auto text-right">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="<?php echo base_url('admin') ?>">Dashboard</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Survei</li>
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
                    <!-- <div class="row"></div><hr> -->
                    <div class="row">
                        <table class="table table-bordered table-hover" id="zero_config">
                            <thead>
                                <tr>
                                    <th width="1%">#</th>
                                    <th>Buyer</th>
                                    <th>No WA</th>
                                    <th>Produk</th>
                                    <th>Tanggal</th>
                                    <th>Jam</th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php $no=1; foreach ($survei as $data) { ?>
                                <tr>
                                    <td><?php echo $no++ ?></td>
                                    <td><?php echo $data->nama_buyer ?></td>
                                    <td><?php echo $data->telepon ?></td>
                                    <td><?php echo $data->nama_produk ?></td>
                                    <td><?php echo date('d M Y', strtotime($data->date)) ?></td>
                                    <td><?php echo $data->time ?></td>
                                    <td>
                                         <button type="button" class="btn btn-primary btn-sm margin-5" data-toggle="tooltip" data-placement="top" title="" data-original-title="Tampilkan Detail" onclick="detail('<?php echo $data->id_survei ?>')"><i class="fas fa-file-alt"></i></button>
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

 <div class="modal fade bs-example-modal-lg" id="view_modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document ">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title" id="exampleModalLabel">Detail Survei</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true ">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <h5 class="text-primary">Data Buyer</h5><hr>
                <div class="form-group row">
                    <label for="fname" class="col-sm-3 control-label col-form-label">Nama Buyer</label>
                    <div class="col-sm-3">
                        <input type="text" readonly class="form-control-plaintext" name="nama_buyer">
                    </div>
                    <label for="fname" class="col-sm-3 control-label col-form-label">No WA</label>
                    <div class="col-sm-3">
                        <input type="text" readonly class="form-control-plaintext" name="no_wa">
                    </div>
                </div><hr>
                <h5 class="text-primary">Data Produk</h5><hr>
                 <div class="form-group row">
                    <label for="fname" class="col-sm-3 control-label col-form-label">Nama Post</label>
                    <div class="col-sm-9">
                        <input type="text" readonly class="form-control-plaintext" name="nama_post">
                    </div>                    
                </div>    
                <div class="form-group row">
                    <label for="fname" class="col-sm-3 control-label col-form-label">Harga Jual</label>
                    <div class="col-sm-9">
                        <input type="text" readonly class="form-control-plaintext" name="harga_jual">
                    </div>                    
                </div>    
                <div class="form-group row">
                    <label for="fname" class="col-sm-3 control-label col-form-label">Alamat</label>
                    <div class="col-sm-9">
                        <input type="text" readonly class="form-control-plaintext" name="alamat">
                    </div>                    
                </div>
                <div class="form-group row">
                    <label for="fname" class="col-sm-3 control-label col-form-label">Provinsi</label>
                    <div class="col-sm-3">
                        <input type="text" readonly class="form-control-plaintext" name="provinsi">
                    </div>                    
                    <label for="fname" class="col-sm-3 control-label col-form-label">Kab/Kota</label>
                    <div class="col-sm-3">
                        <input type="text" readonly class="form-control-plaintext" name="kabkot">
                    </div>                    
                </div>
                <div class="form-group row">
                    <label for="fname" class="col-sm-3 control-label col-form-label">Kecamatan</label>
                    <div class="col-sm-9">
                        <input type="text" readonly class="form-control-plaintext" name="kecamatan">
                    </div>                    
                </div>    
                <hr>
                <h5 class="text-primary">Data Survei</h5><hr>
                <div class="form-group row">
                    <label for="fname" class="col-sm-3 control-label col-form-label">Tanggal</label>
                    <div class="col-sm-3">
                        <input type="text" readonly class="form-control-plaintext" name="tanggal">
                    </div>
                    <label for="fname" class="col-sm-3 control-label col-form-label">Waktu</label>
                    <div class="col-sm-3">
                        <input type="text" readonly class="form-control-plaintext" name="waktu">
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<script>
     <?php echo $this->session->flashdata('error'); ?>

    $('#zero_config').DataTable();            
     
    function detail(id) {
        $.ajax({
            url : "<?php echo site_url('index.php/admin/survei/get_survei/')?>" + id,
            type: "GET",
            dataType: "JSON",
            success: function(data)
            {   
               $('[name="nama_buyer"]').val(data.nama_buyer);
               $('[name="no_wa"]').val(data.telepon);
               $('[name="nama_post"]').val(data.nama_produk);
               $('[name="harga_jual"]').val(data.harga);
               $('[name="alamat"]').val(data.alamat);
               $('[name="provinsi"]').val(data.nama_prov);
               $('[name="kabkot"]').val(data.nama_kabkot);
               $('[name="kecamatan"]').val(data.nama_kec);               
               $('[name="tanggal"]').val(data.date);
               $('[name="waktu"]').val(data.time);
               $('#view_modal').modal('show');
               // console.log(data);
            },
        error: function (jqXHR, textStatus, errorThrown)
        {
            alert('Error get data from ajax');
        }
        });
    }

</script>