<link href="<?php echo base_url() ?>assets/backend/assets/libs/datatables.net-bs4/css/dataTables.bootstrap4.css" rel="stylesheet">
<script src="<?php echo base_url() ?>assets/backend/assets/extra-libs/DataTables/datatables.min.js"></script>    


 <div class="page-breadcrumb">
    <div class="row">
        <div class="col-12 d-flex no-block align-items-center">
            <h4 class="page-title">Laporan Komisi</h4>
            <div class="ml-auto text-right">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="<?php echo base_url('agen') ?>">Dashboard</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Upgrade</li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>
</div>

<div class="container-fluid">
    <div class="row">
        <div class="col-md-6">
            <div class="card card-hover">
                <div class="box bg-success">
                    <h4 class="text-white">Saldo</h4>
                    <h1 class="font-light text-white"><?php echo "Rp. ".number_format(base64_decode($agen->balance)) ?></h1>
                </div>
            </div>                    
        </div>

        <div class="col-md-6">
            <div class="card card-hover">
                <div class="box bg-info">
                   <h6 class="text-white">Pencairan saldo minimal Rp. 1.000.000</h6>
                   <h6 class="text-white">Proses pencairan memakan waktu 1x24 Jam</h6>
                     <button type="button" class="btn btn-primary margin-5" data-toggle="modal" <?php if($agen->balance < 100000){ echo 'data-target="#Modal2"'; }else{ echo 'data-target="#Modal1"'; } ?>>
                        Cairkan Saldo
                    </button>            
                </div>
            </div>                    
        </div>
    
    </div>
    <div class="row">
        <div class="col-md-12">
        <div class="card">
            <div class="card-body">
                <h5 class="card-title">History Transaksi</h5>
                <div class="table-responsive">
                    <table id="zero_config" class="table table-striped table-bordered">
                        <thead>
                            <tr>
                                <th width="1%">No</th>
                                <th>Tanggal</th>
                                <th>Type</th>
                                <th>Nominal</th>
                                <th>Deskripsi</th>
                                <th>Status</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $no = 1; foreach ($row as $data) { ?>
                            <tr>
                                <td><?php echo $no++ ?></td>
                                <td><?php echo date('d M Y', strtotime($data->date)) ?></td>
                                <td><?php echo $data->type ?></td>
                                <td><?php echo "Rp. ".number_format($data->nominal) ?></td>
                                <td><?php echo $data->deskripsi ?></td>
                                <td><?php if($data->status == "1"){ echo "Done"; }else{ echo "Proses"; } ?></td>
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

<div class="modal fade" id="Modal1" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true ">
    <div class="modal-dialog" role="document ">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Pencairan Saldo</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true ">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                 <?php echo form_open_multipart('agen/komisi/pull', array('class' => 'form-horizontal', 'name' => 'frm')); ?>
                    <div class="card-body">                        
                        <div class="form-group row">
                            <label for="fname" class="col-sm-3 control-label col-form-label">Nama Bank</label>
                            <div class="col-sm-9">                                
                                 <input type="text" readonly class="form-control-plaintext" value="<?php echo $agen->nama_bank ?>" name="namabank">                                 
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="lname" class="col-sm-3 control-label col-form-label">No Rekening</label>
                            <div class="col-sm-9">                                
                                 <input type="text" readonly class="form-control-plaintext" value="<?php echo $agen->no_rekening ?>" name="norek">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="lname" class="col-sm-3 control-label col-form-label">Atas Nama</label>
                            <div class="col-sm-9">
                                 <input type="text" readonly class="form-control-plaintext" value="<?php echo $agen->atas_nama ?>" name="atasnama">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="email1" class="col-sm-3 control-label col-form-label">Nominal</label>
                            <div class="col-sm-9">                                
                                <input type="number" name="nominal" min="100000" class="form-control" placeholder="Masukkan Nominal">
                            </div>
                        </div>                        
                    </div>
                    <div class="border-top">
                        <div class="card-body">
                            <button type="button" class="btn btn-primary" onclick="validation_f()">Kirim</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="Modal2" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true ">
    <div class="modal-dialog" role="document ">
        <div class="modal-content">            
            <div class="modal-body">
                <div class="alert alert-danger">                    
                    <strong>Maaf Saldo anda tidak mencukupi !</strong>
                </div>
            </div>
        </div>
    </div>
</div>

<script>
    $('#zero_config').DataTable();        
    function validation_f() {
        var x = $('[name="namabank"]').val();
        var y = $('[name="norek"]').val();
        var z = $('[name="atasnama"]').val();
        var a = $('[name="nominal"]').val();
        if (x == "") {
            alert('Harap Lengkapi Informasi Bank Anda di menu Profil');
        }else if (y == "") {
            alert('Harap Lengkapi Informasi Bank Anda di menu Profil');
        }else if (x == "") {
            alert('Harap Lengkapi Informasi Bank Anda di menu Profil');
        }else if (a == "") {
            alert('Masukkan nominal');
        }else{
            var r = confirm("Apakah anda sudah Yakin melakukan pencairan saldo ?");
            if (r == true) {
                document.frm.submit();    
            }            
        }
    }

</script>