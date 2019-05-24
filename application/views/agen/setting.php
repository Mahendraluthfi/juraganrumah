<link href="<?php echo base_url() ?>assets/backend/assets/libs/toastr/build/toastr.min.css" rel="stylesheet">
<script src="<?php echo base_url() ?>assets/backend/assets/libs/toastr/build/toastr.min.js"></script>
 <div class="page-breadcrumb">
    <div class="row">
        <div class="col-12 d-flex no-block align-items-center">
            <h4 class="page-title">Setting Akun</h4>
            <div class="ml-auto text-right">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="<?php echo base_url('agen') ?>">Dashboard</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Setting</li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>
</div>

<div class="container-fluid">
    
    <div class="row">
        <div class="col-md-6">            
            <div class="card">
                <div class="card-body">
                    <legend>Ubah Password</legend>
                    <?php echo form_open('agen/setting/submit'); ?>
                    
                        <div class="form-group row">                             
                            <label for="fname" class="col-sm-4 text-right control-label col-form-label">Password Lama</label>
                            <div class="col-sm-8">
                                <input type="password" name="pass" class="form-control" placeholder="Password Lama">
                            </div>                            
                        </div>
                    
                        <div class="form-group row">                             
                            <label for="fname" class="col-sm-4 text-right control-label col-form-label">Password Baru</label>
                            <div class="col-sm-8">
                                <input type="password" name="baru" class="form-control" placeholder="Password Baru">
                            </div>                            
                        </div>
                    
                        <div class="form-group row">                             
                            <label for="fname" class="col-sm-4 text-right control-label col-form-label">Ulangi Password Baru</label>
                            <div class="col-sm-8">
                                <input type="password" name="rebaru" class="form-control" placeholder="Ulangi Password Baru">
                            </div>                            
                        </div>
                         <div class="form-group row">                             
                            <label for="fname" class="col-sm-4 text-right control-label col-form-label"></label>
                            <div class="col-sm-8">
                                <button type="submit" class="btn btn-default">Simpan</button>
                            </div>                            
                        </div>
                    
                    <?php echo form_close(); ?>
                </div>
            </div>        
        </div>
    </div>
    
</div>     


<script>
     <?php echo $this->session->flashdata('error'); ?>
    
</script>