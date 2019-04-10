 <div class="page-breadcrumb">
    <div class="row">
        <div class="col-12 d-flex no-block align-items-center">
            <h4 class="page-title">Profil Mitra Developer</h4>
            <div class="ml-auto text-right">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="<?php echo base_url('mitra') ?>">Dashboard</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Profil</li>
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
                <form class="form-horizontal">
                    <div class="card-body">
                        <h4 class="card-title">Mitra Developer Info</h4>
                        <hr>
                        <div class="form-group row">
                            <label for="fname" class="col-md-4 text-primary control-label col-form-label">Nama Lengkap</label>
                            <div class="col-md-8">
                                <input type="text" readonly class="form-control-plaintext" value="<?php echo $mitra->nama_mitra ?>">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="fname" class="col-md-4 text-primary control-label col-form-label">Nama Perusahaan</label>
                            <div class="col-md-8">
                                <input type="text" readonly class="form-control-plaintext" value="<?php echo $mitra->nama_perusahaan ?>">
                            </div>
                        </div>                        
                        <div class="form-group row">
                            <label for="fname" class="col-md-4 text-primary control-label col-form-label">KTP</label>
                            <div class="col-md-8">
                                <input type="text" readonly class="form-control-plaintext" value="<?php echo $mitra->nik_ktp ?>"> 
                                 <img src="<?php echo base_url('assets/backend/fotomitra/'.$mitra->file_ktp) ?>" class="img-thumbnail" style="height: 100px;">
                            </div>
                        </div>                                    
                        <div class="form-group row">
                            <label for="fname" class="col-md-4 text-primary control-label col-form-label"></label>
                            <div class="col-md-8">
                                
                            </div>
                        </div>                                    
                        <div class="form-group row">
                            <label for="fname" class="col-md-4 text-primary control-label col-form-label">Email</label>
                            <div class="col-md-8">
                                 <input type="text" readonly class="form-control-plaintext" value="<?php echo $mitra->email ?>">
                            </div>
                        </div>                       
                        <div class="form-group row">
                            <label for="fname" class="col-md-4 text-primary control-label col-form-label">Alamat</label>
                            <div class="col-md-8">
                                 <input type="text" readonly class="form-control-plaintext" value="<?php echo $mitra->alamat ?>">
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="fname" class="col-md-4 text-primary control-label col-form-label">Whatsapp</label>
                            <div class="col-md-8">
                                 <input type="text" readonly class="form-control-plaintext" value="<?php echo $mitra->telepon ?>">
                            </div>
                        </div>                        
                        <div class="form-group row">
                            <label for="fname" class="col-md-4 text-primary control-label col-form-label">Nama Bank</label>
                            <div class="col-md-8">
                                 <input type="text" readonly class="form-control-plaintext" value="<?php echo $mitra->nama_bank ?>">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="fname" class="col-md-4 text-primary control-label col-form-label">Nomor Rekening</label>
                            <div class="col-md-8">
                                 <input type="text" readonly class="form-control-plaintext" value="<?php echo $mitra->no_rekening ?>">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="fname" class="col-md-4 text-primary control-label col-form-label">Atas Nama</label>
                            <div class="col-md-8">
                                 <input type="text" readonly class="form-control-plaintext" value="<?php echo $mitra->atas_nama ?>">
                            </div>
                        </div>
                    </div>
                    <div class="border-top">
                        <div class="card-body">
                            <a href="<?php echo base_url('mitra/profil/edit') ?>" class="btn btn-primary">Edit Profil</a>
                        </div>
                    </div>
                </form>
            </div>
</div>

<div class="col-md-6">
        <div class="card">        
            <div class="card-body text-center">
                <h4 class="card-title">Status Akun</h4>
                <div class="alert alert-cyan text-center" role="alert">
                  <h3><?php echo $mitra->status_akun ?></h3>
                  <?php if ($mitra->status_akun == "TRIAL") {
                      echo "Berakhir pada ".date('d M Y', strtotime($mitra->expired_trial))."<br>";
                      echo "<a href='".base_url('mitra/upgrade')."' class='btn btn-success'>Upgrade Sekarang !</a>";
                  } ?>
                </div>
            </div>           
        </div>

        <div class="card">            
            <div class="card-body text-center">
                <h4 class="card-title">Project</h4>
                <?php //echo $content_premium ?>
            </div>           
        </div>

        <div class="card">            
            <div class="card-body text-center">
                <h4 class="card-title">Profil Perusahaan</h4>
                <p><?php echo $mitra->profil_perusahaan ?></p>
                <h5>Logo</h5>
                <img src="<?php echo base_url('assets/backend/fotomitra/'.$mitra->file_logo) ?>" class="img-thumbnail" style="height: 200px;"><p></p>
                <h5>Banner</h5>
                <img src="<?php echo base_url('assets/backend/fotomitra/'.$mitra->file_banner) ?>" class="img-thumbnail" style="height: 250px;">
            </div>           
       </div>
</div>   

    </div>
    
</div>            
<script>
     <?php echo $this->session->flashdata('error'); ?>
</script>