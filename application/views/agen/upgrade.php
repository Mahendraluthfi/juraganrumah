<link href="<?php echo base_url() ?>assets/backend/assets/libs/toastr/build/toastr.min.css" rel="stylesheet">
<script src="<?php echo base_url() ?>assets/backend/assets/libs/toastr/build/toastr.min.js"></script>


 <div class="page-breadcrumb">
    <div class="row">
        <div class="col-12 d-flex no-block align-items-center">
            <h4 class="page-title">Upgrade Premium</h4>
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
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-6">
                        <div class="card card-hover">
                            <div class="box bg-cyan text-center">
                                <h1 class="font-light text-white"><i class="mdi mdi-account-card-details"></i></h1>
                                <h6 class="text-white"><?php echo $row->username ?></h6>
                                <a href="<?php echo $url ?>" target="_blank" class="btn btn-default"><?php echo $url ?></a>
                            </div>
                        </div>
                    </div>


                    <div class="col-md-6">
                        <?php echo $status; ?>
                    </div>
                    
                    </div>
                    <h5 class="card-title">Keuntungan bergabung menjadi Agen Premium</h5>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                </div>
            </div>
        </div>
    </div>
    
</div>            

<div class="modal fade" id="Modal1" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true ">
    <div class="modal-dialog" role="document ">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Upload Bukti Transfer</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true ">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <?php echo form_open_multipart('agen/upgrade/submit_tf', array('class' => 'form-horizontal')); ?>
                    <div class="card-body">                        
                        <div class="form-group row">
                            <label for="fname" class="col-sm-3 control-label col-form-label">Nama Bank</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" name="namabank" placeholder="Nama Bank" value="<?php echo $row->nama_bank ?>">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="lname" class="col-sm-3 control-label col-form-label">No Rekening</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" name="norek" placeholder="Nomor Rekening" value="<?php echo $row->no_rekening ?>">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="lname" class="col-sm-3 control-label col-form-label">Atas Nama</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" name="atasnama" placeholder="Atas Nama" value="<?php echo $row->atas_nama ?>">
                                <input type="hidden" name="noinvoice" value="<?php echo $invoice_no ?>">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="email1" class="col-sm-3 control-label col-form-label">File Bukti</label>
                            <div class="col-sm-9">                                
                                <input type="file" name="foto" required="">
                            </div>
                        </div>                        
                    </div>
                    <div class="border-top">
                        <div class="card-body">
                            <button type="submit" class="btn btn-primary">Kirim</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<script>
     <?php echo $this->session->flashdata('error'); ?>
</script>