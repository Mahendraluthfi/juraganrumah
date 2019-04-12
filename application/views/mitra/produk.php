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
                            <h5>Project Property Anda</h5>
                        </div>
                        <div class="col-md-6 text-right">
                            <a href="<?php echo base_url('mitra/produk/add') ?>" class="btn btn-primary"><i class="fas fa-plus"></i> Tambah Produk</a>
                        </div>
                    
                    </div><hr>
                    <div class="row">                        
                         <table class="table table-bordered table-hover" id="zero_config">
                            <thead>
                                <tr>
                                    <th width="1%">#</th>                                    
                                    <th>Judul Post</th>
                                    <th>Project</th>
                                    <th>Kategori</th>
                                    <th>Unit</th>
                                    <th>Harga Jual</th>
                                    <th>Status</th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php $no = 1; foreach ($produk as $data) { ?>
                                <tr>
                                    <td><?php echo $no++; ?></td>                                    
                                    <td><?php echo $data->nama_produk ?></td>
                                    <td><?php echo $data->nama_project ?></td>
                                    <td><?php echo $data->nama_category." / ".$data->type_category ?></td>
                                    <td><?php echo $data->unit ?></td>
                                    <td><?php echo number_format($data->harga) ?></td>
                                    <td><?php echo $data->status_post ?></td>
                                    <td>
                                        <a href="<?php echo base_url('mitra/produk/edit/'.$data->id_produk) ?>" class="btn btn-default btn-sm" title="Edit"><i class="fas fa-edit"></i></a>
                                        <a href="<?php echo base_url('mitra/produk/foto/'.$data->id_produk) ?>" class="btn btn-warning btn-sm" title="Foto Produk"><i class="mdi mdi-folder-multiple-image"></i></a>
                                        <button type="button" class="btn btn-success btn-sm" title="Detail" onclick="view('<?php echo $data->id_produk ?>')"><i class="mdi mdi-view-module"></i></button>
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
                <h5 class="modal-title" id="exampleModalLabel"></h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true ">&times;</span>
                </button>
            </div>
            <div class="modal-body">                            
                <div class="form-group row">
                    <label for="fname" class="col-sm-3 control-label col-form-label">Kode Produk</label>
                    <div class="col-sm-9">
                        <input type="text" readonly class="form-control-plaintext" name="id_produk">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="lname" class="col-sm-3 control-label col-form-label">Judul Post</label>
                    <div class="col-sm-9">
                        <input type="text" readonly class="form-control-plaintext" name="nama_produk">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="email1" class="col-sm-3 control-label col-form-label">Kategori Produk</label>
                    <div class="col-sm-9">
                        <input type="text" readonly class="form-control-plaintext" name="kategori">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="email1" class="col-sm-3 control-label col-form-label">Project</label>
                    <div class="col-sm-9">
                        <input type="text" readonly class="form-control-plaintext" name="project">
                    </div>
                </div>
                 <div class="form-group row">
                    <label for="lname" class="col-sm-3 control-label col-form-label">Harga Jual</label>
                    <div class="col-sm-9">
                        <input type="text" readonly class="form-control-plaintext" name="harga">
                    </div>
                </div>
                 <div class="form-group row">
                    <label for="lname" class="col-sm-3 control-label col-form-label">Harga Bawah</label>
                    <div class="col-sm-9">
                        <input type="text" readonly class="form-control-plaintext" name="harga_bawah">
                    </div>
                </div>
                 <div class="form-group row">
                    <label for="lname" class="col-sm-3 control-label col-form-label">Harga Promo</label>
                    <div class="col-sm-9">
                        <input type="text" readonly class="form-control-plaintext" name="harga_promo">
                    </div>
                </div>
                 <div class="form-group row">
                    <label for="lname" class="col-sm-3 control-label col-form-label">Jumlah Unit</label>
                    <div class="col-sm-9">
                        <input type="text" readonly class="form-control-plaintext" name="unit">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="lname" class="col-sm-3 control-label col-form-label">Alamat</label>
                    <div class="col-sm-9">
                        <input type="text" readonly class="form-control-plaintext" name="alamat">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="email1" class="col-sm-3 control-label col-form-label">Provinsi</label>
                    <div class="col-sm-9">
                        <input type="text" readonly class="form-control-plaintext" name="prov">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="email1" class="col-sm-3 control-label col-form-label">Kab/Kota</label>
                    <div class="col-sm-9">
                        <input type="text" readonly class="form-control-plaintext" name="kabkot">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="email1" class="col-sm-3 control-label col-form-label">Kecamatan</label>
                    <div class="col-sm-9">
                        <input type="text" readonly class="form-control-plaintext" name="kec">
                    </div>
                </div>
                 
                 <div class="form-group row">
                    <label for="lname" class="col-sm-3 control-label col-form-label">Listrik / watt</label>
                    <div class="col-sm-3">
                        <input type="text" readonly class="form-control-plaintext" name="watt_listrik">
                    </div>
                    <label for="lname" class="col-sm-3 control-label col-form-label">Sertifikat</label>
                    <div class="col-sm-3">
                        <input type="text" readonly class="form-control-plaintext" name="sertifikat">
                    </div>
                </div>
                 <div class="form-group row">
                    <label for="lname" class="col-sm-3 control-label col-form-label">Jenis Air</label>
                    <div class="col-sm-3">
                        <input type="text" readonly class="form-control-plaintext" name="jenis_air">
                    </div>
                    <label for="lname" class="col-sm-3 control-label col-form-label">Hadap Bangunan</label>
                    <div class="col-sm-3">
                        <input type="text" readonly class="form-control-plaintext" name="hadap">
                    </div>
                </div>
                 <div class="form-group row">
                    <label for="lname" class="col-sm-3 control-label col-form-label">Kamar Tidur</label>
                    <div class="col-sm-3">
                        <input type="text" readonly class="form-control-plaintext" name="jumlah_kamar_tidur">
                    </div>
                    <label for="lname" class="col-sm-3 control-label col-form-label">Kamar Mandi</label>
                    <div class="col-sm-3">
                        <input type="text" readonly class="form-control-plaintext" name="jumlah_kamar_mandi">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="lname" class="col-sm-3 control-label col-form-label">Luas Tanah / m<sub>2</sub></label>
                    <div class="col-sm-3">
                        <input type="text" readonly class="form-control-plaintext" name="luas_tanah">
                    </div>
                    <label for="lname" class="col-sm-3 control-label col-form-label">Luas Bangunan / m<sub>2</sub></label>
                    <div class="col-sm-3">
                        <input type="text" readonly class="form-control-plaintext" name="luas_bangunan">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="lname" class="col-sm-3 control-label col-form-label">Furnished</label>
                    <div class="col-sm-3">
                        <input type="text" readonly class="form-control-plaintext" name="furnished">
                    </div>                                        
                    <label for="lname" class="col-sm-3 control-label col-form-label">Jumlah Lantai</label>
                    <div class="col-sm-3">
                        <input type="text" readonly class="form-control-plaintext" name="jumlah_tingkat">
                    </div>                                        
                </div>                                    
                <div class="form-group row">
                    <label for="lname" class="col-sm-3 control-label col-form-label">Hook / Pojok</label>
                    <div class="col-sm-3">
                        <input type="text" readonly class="form-control-plaintext" name="hook_pojok">
                    </div>                                        
                    <label for="lname" class="col-sm-3 control-label col-form-label">Carport</label>
                    <div class="col-sm-3">
                        <input type="text" readonly class="form-control-plaintext" name="carport">
                    </div>                                        
                </div>
                <div class="form-group row">
                    <label for="lname" class="col-sm-3 control-label col-form-label">Deskripsi</label>
                    <div class="col-sm-9">
                        <input type="text" readonly class="form-control-plaintext" name="description">
                    </div>                                        
                </div>
                <div class="form-group row">
                    <label for="lname" class="col-sm-3 control-label col-form-label">Status Post</label>
                    <div class="col-sm-9">
                        <input type="text" readonly class="form-control-plaintext" name="status_post">
                    </div>                                        
                </div>
            
            </div>
        </div>
    </div>
</div>

<script>
    $('#zero_config').DataTable();            

    function view(id) {
        $.ajax({
            url : "<?php echo site_url('index.php/mitra/produk/get/')?>" + id,
            type: "GET",
            dataType: "JSON",
            success: function(data)
            {   
                $('.modal-title').text('Detail Produk');
                $('[name="id_produk"]').val(data.id_produk);
                $('[name="harga"]').val(data.harga);
                $('[name="project"]').val(data.nama_project);
                $('[name="harga_bawah"]').val(data.harga_bawah);
                $('[name="harga_promo"]').val(data.harga_promo);
                $('[name="nama_produk"]').val(data.nama_produk);
                $('[name="jenis_air"]').val(data.jenis_air);
                $('[name="luas_bangunan"]').val(data.luas_bangunan);
                $('[name="luas_tanah"]').val(data.luas_tanah);
                $('[name="carport"]').val(data.carport);
                $('[name="furnished"]').val(data.furnished);
                $('[name="hook_pojok"]').val(data.hook_pojok);
                $('[name="jumlah_tingkat"]').val(data.jumlah_tingkat);
                $('[name="jumlah_kamar_mandi"]').val(data.jumlah_kamar_mandi);
                $('[name="jumlah_kamar_tidur"]').val(data.jumlah_kamar_tidur);
                $('[name="description"]').val(data.description);
                $('[name="alamat"]').val(data.alamat);
                $('[name="watt_listrik"]').val(data.watt_listrik);
                $('[name="unit"]').val(data.unit);
                $('[name="status_post"]').val(data.status_post);
                $('[name="sertifikat"]').val(data.sertifikat);
                $('[name="hadap"]').val(data.hadap);
                $('[name="kategori"]').val(data.nama_category);
                $('[name="prov"]').val(data.nama_prov);
                $('[name="kabkot"]').val(data.nama_kabkot);
                $('[name="kec"]').val(data.nama_kec);
                $('#view_modal').modal('show');
                console.log(data);
            },
        error: function (jqXHR, textStatus, errorThrown)
        {
            alert('Error get data from ajax');
        }
        });
    }
</script>