<link href="<?php echo base_url() ?>assets/backend/assets/libs/toastr/build/toastr.min.css" rel="stylesheet">

<script src="<?php echo base_url() ?>assets/backend/assets/libs/toastr/build/toastr.min.js"></script>

<div class="col-md-8">

<div class="card">
    <form class="form-horizontal">
        <div class="card-body">
            <h4 class="card-title">Akun Info</h4>
            <hr>
            <div class="form-group row">
                <label for="fname" class="col-md-3 text-primary control-label col-form-label">Username</label>
                <div class="col-md-9">
                     <input type="text" readonly class="form-control-plaintext" value="<?php echo $row_view->username ?>">
                </div>
            </div>
            <div class="form-group row">
                <label for="fname" class="col-md-3 text-primary control-label col-form-label">Email</label>
                <div class="col-md-9">
                     <input type="text" readonly class="form-control-plaintext" value="<?php echo $row_view->email ?>">
                </div>
            </div>                        
            <div class="form-group row">
                <label for="fname" class="col-md-3 text-primary control-label col-form-label">Link URL</label>
                <div class="col-md-9">
                    <input type="text" readonly class="form-control-plaintext" value="<?php echo $url ?>" id="pilih"> <span><button type="button" onclick="copybtn()" class="btn btn-secondary btn-md"><i class="far fa-copy"></i> Copy to Clipboard</button></span>
                </div>
            </div>            
            <hr>
            <h4 class="card-title">Personal Info</h4>
            <hr>
            <div class="form-group row">
                <label for="fname" class="col-md-3 text-primary control-label col-form-label">Nama Lengkap</label>
                <div class="col-md-9">
                     <input type="text" readonly class="form-control-plaintext" value="<?php echo $row_view->nama_agen ?>">
                </div>
            </div>
            <div class="form-group row">
                <label for="fname" class="col-md-3 text-primary control-label col-form-label">KTP</label>
                <div class="col-md-9">
                     <input type="text" readonly class="form-control-plaintext" value="<?php echo $row_view->ktp ?>">
                </div>
            </div>
            <div class="form-group row">
                <label for="fname" class="col-md-3 text-primary control-label col-form-label">Nomor Whatsapp</label>
                <div class="col-md-9">
                     <input type="text" readonly class="form-control-plaintext" value="<?php echo $row_view->nomor_wa ?>">
                </div>
            </div>
            <div class="form-group row">
                <label for="fname" class="col-md-3 text-primary control-label col-form-label">Alamat</label>
                <div class="col-md-9">
                     <input type="text" readonly class="form-control-plaintext" value="<?php echo $row_view->alamat ?>">
                </div>
            </div>
            <div class="form-group row">
                <label for="fname" class="col-md-3 text-primary control-label col-form-label">Provinsi</label>
                <div class="col-md-9">
                     <input type="text" readonly class="form-control-plaintext" value="<?php echo $row_view->nama_prov ?>">
                </div>
            </div>
            <div class="form-group row">
                <label for="fname" class="col-md-3 text-primary control-label col-form-label">Kabupaten/Kota</label>
                <div class="col-md-9">
                     <input type="text" readonly class="form-control-plaintext" value="<?php echo $row_view->kabkot ?>">
                </div>
            </div>
            <hr>
            <h4 class="card-title">Bank Info</h4>
            <hr>
            <div class="form-group row">
                <label for="fname" class="col-md-3 text-primary control-label col-form-label">Nama Bank</label>
                <div class="col-md-9">
                     <input type="text" readonly class="form-control-plaintext" value="<?php echo $row_view->nama_bank ?>">
                </div>
            </div>
            <div class="form-group row">
                <label for="fname" class="col-md-3 text-primary control-label col-form-label">Nomor Rekening</label>
                <div class="col-md-9">
                     <input type="text" readonly class="form-control-plaintext" value="<?php echo $row_view->no_rekening ?>">
                </div>
            </div>
            <div class="form-group row">
                <label for="fname" class="col-md-3 text-primary control-label col-form-label">Atas Nama</label>
                <div class="col-md-9">
                     <input type="text" readonly class="form-control-plaintext" value="<?php echo $row_view->atas_nama ?>">
                </div>
            </div>
        </div>
        <div class="border-top">
            <div class="card-body">
                <a href="<?php echo base_url('agen/profil/edit') ?>" class="btn btn-primary">Edit Profil</a>
            </div>
        </div>
    </form>
</div>
</div>

<div class="col-md-4">
       <div class="card">
            
        <div class="card-body text-center">
            <h4 class="card-title">Status Akun</h4>
            <?php echo $content_premium ?>
        </div>
           
       </div>
</div>   

<script>
     function copybtn() {
        document.getElementById("pilih").select();
        document.execCommand("copy");
        toastr.success('Text disalin', 'Berhasil');
    }
</script>