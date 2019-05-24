<link href="<?php echo base_url() ?>assets/backend/assets/libs/datatables.net-bs4/css/dataTables.bootstrap4.css" rel="stylesheet">
<script src="<?php echo base_url() ?>assets/backend/assets/extra-libs/DataTables/datatables.min.js"></script> 
<link href="<?php echo base_url() ?>assets/backend/assets/libs/toastr/build/toastr.min.css" rel="stylesheet">
<script src="<?php echo base_url() ?>assets/backend/assets/libs/toastr/build/toastr.min.js"></script>
 <div class="page-breadcrumb">
    <div class="row">
        <div class="col-12 d-flex no-block align-items-center">
            <h4 class="page-title">Setting Akun</h4>
            <div class="ml-auto text-right">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="<?php echo base_url('official') ?>">Dashboard</a></li>
                        <li class="breadcrumb-item"><a href="<?php echo base_url('admin/usermanagement') ?>">User Management</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Tambah User</li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>
</div>

<div class="container-fluid">    
    <div class="row">
        <div class="col-md-12 col-lg-12">      
             <div class="card">
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-6 col-lg-6">
                        <?php echo form_open('admin/usermanagement/submit'); ?>
                        <legend>Data User</legend>
                            <div class="form-group row">
                                <label for="fname" class="col-sm-3 text-right control-label col-form-label">Username</label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control" id="fname" placeholder="Username" name="username">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="lname" class="col-sm-3 text-right control-label col-form-label">Password</label>
                                <div class="col-sm-9">
                                    <input type="password" class="form-control" id="lname" placeholder="Password" name="pass">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="lname" class="col-sm-3 text-right control-label col-form-label">Ulangi Password</label>
                                <div class="col-sm-9">
                                    <input type="password" class="form-control" id="lname" placeholder="Ulangi Password" name="pass1">
                                </div>
                            </div>                            
                        </div>
                        <div class="col-md-6 col-lg-6">
                            <legend>Hak Akses</legend>
                            <?php foreach ($modul as $data) { 
                                if ($data->parent == "0") { ?>
                            <div class="form-group row">                                    
                                <div class="col-md-12">
                                    <div class="custom-control custom-checkbox mr-sm-2">
                                        <input type="checkbox" class="custom-control-input" id="customControlAutosizing<?php echo $data->id ?>" name="cb[<?php echo $data->id ?>]">
                                        <label class="custom-control-label" for="customControlAutosizing<?php echo $data->id ?>"><?php echo $data->span ?></label>
                                    </div>
                                </div>
                            </div>
                            <?php }elseif ($data->parent == "2") { 
                                $get_sub = $this->db->query("SELECT * FROM modul WHERE modul.ktg = '$data->id'")->result();
                            ?>
                            <div class="form-group row">
                                    <label class="col-md-3"><?php echo $data->span ?></label>
                                    <div class="col-md-9">  
                                    <?php foreach ($get_sub as $key) { ?>                                      
                                        <div class="custom-control custom-checkbox mr-sm-2">
                                            <input type="checkbox" class="custom-control-input" id="customControlAutosizing<?php echo $key->id ?>" name="cb[<?php echo $key->id ?>]">
                                            <label class="custom-control-label" for="customControlAutosizing<?php echo $key->id ?>"><?php echo $key->span ?></label>
                                        </div>                     
                                    <?php } ?>                       
                                    </div>
                                </div>
                            <?php }                            

                            } ?> 
                            <button type="submit" class="btn btn-default">button</button>
                            <?php echo form_close(); ?>                           
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
</div>     


<script>
    $('#zero_config').DataTable();            
    $("input#fname").on({
      keydown: function(e) {
        if (e.which === 32)
          return false;
      },
      change: function() {
        this.value = this.value.replace(/\s/g, "");
      }
    });
     <?php echo $this->session->flashdata('error'); ?>
    
</script>