 <div class="page-breadcrumb">
    <div class="row">
        <div class="col-12 d-flex no-block align-items-center">
            <h4 class="page-title">Profil Agen Freelance</h4>
            <div class="ml-auto text-right">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="<?php echo base_url('freelance') ?>">Dashboard</a></li>
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
                                <input type="text" readonly class="form-control-plaintext" value="<?php echo $mitra->nama_freelance ?>">
                            </div>
                        </div>                        
                        <div class="form-group row">
                            <label for="fname" class="col-md-4 text-primary control-label col-form-label">KTP</label>
                            <div class="col-md-8">
                                <input type="text" readonly class="form-control-plaintext" value="<?php echo $mitra->nik_ktp ?>"> 
                                 <img src="<?php echo base_url('assets/backend/fotofreelance/'.$mitra->file_ktp) ?>" class="img-thumbnail" style="height: 100px;">
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
                         <div class="form-group row">
                            <label for="fname" class="col-md-4 text-primary control-label col-form-label">Komisi</label>
                            <div class="col-md-8">
                                 <input type="text" readonly class="form-control-plaintext" value="<?php echo $mitra->komisi.' %'; ?>">
                            </div>
                        </div>
                    </div>
                    <div class="border-top">
                        <div class="card-body">
                            <a href="<?php echo base_url('freelance/profil/edit') ?>" class="btn btn-primary">Edit Profil</a>
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
                  <h3>Free</h3>
                  <!-- <?php if ($mitra->status_akun == "TRIAL") {
                      echo "<h4 class='text-danger'>".$minus." Hari Lagi</h4>";
                      echo "<h6>Berakhir pada ".date('d M Y', strtotime($mitra->expired_trial))."</h6>";
                      echo "<a href='".base_url('mitra/upgrade')."' class='btn btn-success'>Upgrade Sekarang !</a>";
                  } elseif ($mitra->status_akun == "PRO"){
                      echo "<h4 class='text-danger'>".$minus." Hari Lagi</h4>";
                      echo "<h6>Berakhir pada ".date('d M Y', strtotime($mitra->expired_premium))."</h6>";
                  } ?> -->
                </div>
            </div>           
        </div>

        <div class="card">            
            <div class="card-body text-center">
                <h4 class="card-title">Project</h4>
                <?php foreach ($project as $key) { ?>
                <div class="col-md-12">
                    <div class="card card-hover">
                        <div class="box bg-info text-center">
                            <h1 class="font-light text-white"><i class="mdi mdi-home-map-marker"></i></h1>
                            <h5 class="text-white"><?php echo $key->nama_project ?></h5>
                            <button type="button" class="btn btn-secondary" onclick="detail('<?php echo $key->id_project ?>')"><i class="fas fa-map"></i> Detail</button>
                        </div>
                    </div>
                </div>                    
                <?php } ?>
            </div>           
        </div>

       <!--  <div class="card">            
            <div class="card-body text-center">
                <h4 class="card-title">Profil Perusahaan</h4>
                <p><?php echo $mitra->profil_perusahaan ?></p>
                <h5>Logo</h5>
                <img src="<?php echo base_url('assets/backend/fotomitra/'.$mitra->file_logo) ?>" class="img-thumbnail" style="height: 200px;"><p></p>
                <h5>Banner</h5>
                <img src="<?php echo base_url('assets/backend/fotomitra/'.$mitra->file_banner) ?>" class="img-thumbnail" style="height: 250px;">
            </div>           
       </div> -->
</div>   

</div>
    
</div>            

 <div class="modal fade" id="view_modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document ">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Detail Projek</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true ">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="form-group row">
                    <label for="fname" class="col-sm-3 control-label col-form-label">Nama Projek</label>
                    <div class="col-sm-9">
                        <input type="text" readonly class="form-control-plaintext" name="nama_project">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="fname" class="col-sm-3 control-label col-form-label">Jumlah Properti</label>
                    <div class="col-sm-9">
                        <input type="text" readonly class="form-control-plaintext" name="jml">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="fname" class="col-sm-3 control-label col-form-label">Provinsi</label>
                    <div class="col-sm-9">
                        <input type="text" readonly class="form-control-plaintext" name="prov">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="fname" class="col-sm-3 control-label col-form-label">Kabupaten/Kota</label>
                    <div class="col-sm-9">
                        <input type="text" readonly class="form-control-plaintext" name="kabkot">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="fname" class="col-sm-3 control-label col-form-label">Kecamatan</label>
                    <div class="col-sm-9">
                        <input type="text" readonly class="form-control-plaintext" name="kec">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="fname" class="col-sm-3 control-label col-form-label">Alamat</label>
                    <div class="col-sm-9">
                        <input type="text" readonly class="form-control-plaintext" name="alamat">
                    </div>
                </div>
                <h5>Fasilitas Umum</h5>
                <?php echo form_open('freelance/profil/save_poi'); ?>
                <div class="form-group row">
                    <div class="col-sm-9 text-right">
                        <input type="text" name="remark" class="form-control" placeholder="Keunggulan Projek">
                    </div>
                    <div class="col-sm-3 text-right">
                        <button type="submit" class="btn btn-default">Tambah</button>
                    </div>
                        <input type="hidden" name="id">
                    <?php echo form_close(); ?>
                </div>
                <table class="table table-condensed table-hover">                    
                    <tbody id="keunggulan">                        
                        
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>

<script>
     <?php echo $this->session->flashdata('error'); ?>

     function detail(id) {
          $.ajax({
            url : "<?php echo site_url('index.php/freelance/profil/get_project/')?>" + id,
            type: "GET",
            dataType: "JSON",
            success: function(data)
            {        
                $('[name="nama_project"]').val(data.nama_project);
                $('[name="jml"]').val(data.jml);
                $('[name="prov"]').val(data.nama_prov);
                $('[name="kabkot"]').val(data.nama_kabkot);
                $('[name="kec"]').val(data.nama_kec);                
                $('[name="alamat"]').val(data.alamat);
                $('[name="id"]').val(id);
               
                // console.log(data);
            },
        error: function (jqXHR, textStatus, errorThrown)
        {
            alert('Error get data from ajax');
        }
        }); 
        $.ajax({
            url : "<?php echo site_url('index.php/freelance/profil/get_poi/')?>" + id,
            type: "GET",
            dataType: "JSON",
            success: function(data)
            {        
                var html = '';
                var i;
                for(i=0; i < data.length; i++){                   
                    html += "<tr>"+                                                
                        "<td>"+data[i].remark+"</td>"+                        
                        "<td class='text-right'><a class='btn btn-danger btn-sm' href='<?php echo base_url('freelance/profil/del_poi/') ?>"+data[i].id+"'><i class='fas fa-trash'></i></a></td>"+                        
                        "</tr>";
                    }
                $('#keunggulan').html(html);      
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