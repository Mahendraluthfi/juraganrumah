<script src="https://unpkg.com/gijgo@1.9.13/js/gijgo.min.js" type="text/javascript"></script>
<link href="https://unpkg.com/gijgo@1.9.13/css/gijgo.min.css" rel="stylesheet" type="text/css" />
<div class="page-breadcrumb">
    <div class="row">
        <div class="col-12 d-flex no-block align-items-center">
            <h4 class="page-title">Tambah Artikel</h4>
            <div class="ml-auto text-right">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="<?php echo base_url('admin') ?>">Dashboard</a></li>
                        <li class="breadcrumb-item"><a href="<?php echo base_url('admin/artikel') ?>">Artikel</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Tambah Artikel</li>
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
                        <div class="col-md-12">            
                        <?php echo form_open_multipart('admin/artikel/submit', array('class' => 'form-horizontal')); ?>                
                            <div class="form-group row">                             
                                <label for="fname" class="col-sm-3 control-label col-form-label">Judul Artikel</label>
                                <div class="col-sm-9">
                                    <input type="text" name="judul" class="form-control" placeholder="Judul Artikel">
                                </div>                            
                            </div>
                            <div class="form-group row">                             
                                <label for="fname" class="col-sm-3 control-label col-form-label">Tanggal</label>
                                <div class="col-sm-9">
                                    <input type="text" readonly class="form-control-plaintext" value="<?php echo date('d M Y H:i:s') ?>">
                                </div>                            
                            </div>
                            <div class="form-group row">                             
                                <label for="fname" class="col-sm-3 control-label col-form-label">Isi</label>
                                <div class="col-sm-9">
                                 <!--    <textarea class="textarea" placeholder="Tulis Artikel disini" name="isi" 
                                    style="width: 100%; height: 200px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;"></textarea>    -->                                 
                                    <textarea id="editor" name="isi">
                                        
                                    </textarea>
                                </div>                            
                            </div>
                             <div class="form-group row">                             
                                <label for="fname" class="col-sm-3 control-label col-form-label">Foto Artikel</label>
                                <div class="col-sm-9">
                                    <input type="file" name="foto">
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
        </div>
    </div>
    
</div>     

<script>
    $(document).ready(function () {
        $("#editor").editor({
            uiLibrary: 'bootstrap4'
        });
    });

     <?php echo $this->session->flashdata('error'); ?>

    $('#zero_config').DataTable();      

</script>