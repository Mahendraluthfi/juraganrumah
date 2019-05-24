<link href="<?php echo base_url() ?>assets/backend/assets/libs/toastr/build/toastr.min.css" rel="stylesheet">
<script src="<?php echo base_url() ?>assets/backend/assets/libs/toastr/build/toastr.min.js"></script>
 <div class="page-breadcrumb">
    <div class="row">
        <div class="col-12 d-flex no-block align-items-center">
            <h4 class="page-title">Data Pembelian</h4>
            <div class="ml-auto text-right">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="<?php echo base_url('agen') ?>">Dashboard</a></li>
                        <li class="breadcrumb-item"><a href="<?php echo base_url('agen/produk') ?>">Produk</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Beli</li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>
</div>
<style>

</style>
<div class="container-fluid">   
    <div class="row">
        <div class="col-md-12 col-lg-12">    
            <div class="card">
                
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-4">
                                <img src="<?php echo base_url('assets/backend/fotoproduk/'.$get->file) ?>" alt="" style="width: 100%;">
                            </div>
                            <div class="col-md-8">
                                <div class="form-group row">
                                    <label for="fname" class="col-sm-3 control-label col-form-label">Nama Properti</label>
                                    <div class="col-sm-9">
                                        <textarea name="" readonly class="form-control-plaintext"><?php echo $get->nama_produk ?></textarea>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="fname" class="col-sm-3 control-label col-form-label">Projek</label>
                                    <div class="col-sm-9">
                                        <input type="text" readonly class="form-control-plaintext" value="<?php echo $get->nama_project ?>">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="fname" class="col-sm-3 control-label col-form-label">Kategori</label>
                                    <div class="col-sm-3">
                                        <input type="text" readonly class="form-control-plaintext" value="<?php echo $get->nama_category ?>">
                                    </div>
                                    <label for="fname" class="col-sm-3 control-label col-form-label">Provinsi</label>
                                    <div class="col-sm-3">
                                        <input type="text" readonly class="form-control-plaintext" value="<?php echo $get->nama_prov ?>">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="fname" class="col-sm-3 control-label col-form-label">Kab/ Kota</label>
                                    <div class="col-sm-3">
                                        <input type="text" readonly class="form-control-plaintext" value="<?php echo $get->nama_kabkot ?>">
                                    </div>
                                    <label for="fname" class="col-sm-3 control-label col-form-label">Kecamatan</label>
                                    <div class="col-sm-3">
                                        <input type="text" readonly class="form-control-plaintext" value="<?php echo $get->nama_kec ?>">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="fname" class="col-sm-3 control-label col-form-label">Alamat</label>
                                    <div class="col-sm-9">
                                        <textarea name="" readonly class="form-control-plaintext"><?php echo $get->alamat ?></textarea>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="fname" class="col-sm-3 control-label col-form-label">Deskripsi</label>
                                    <div class="col-sm-9">
                                        <textarea name="" readonly class="form-control-plaintext"><?php echo $get->description ?></textarea>
                                    </div>
                                </div>
                                 <div class="form-group row">
                                    <label for="fname" class="col-sm-3 control-label col-form-label">Harga</label>
                                    <div class="col-sm-9">
                                        <h3>
                                             <?php 
                                                if (!empty($get->harga_promo)) {
                                                    echo "<strike>Rp. ".number_format($get->harga)."</strike>";
                                                    echo " Rp. ".number_format($get->harga_promo);
                                                }else{
                                                    echo "Rp. ".number_format($get->harga);                                
                                                }
                                            ?>
                                        </h3>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="border-top">
                        <div class="card-body">
                            <h4>Data Pembeli <small>Data Pembeli akan otomatis menjadi Akun Buyer Juragan Rumah</small></h4>
                                <?php echo form_open('agen/produk/get_in'); ?><hr>
                            <div class="row">
                                <div class="col-md-6">
                                <div class="form-group row">
                                    <label for="fname" class="col-sm-3 control-label text-right col-form-label">Nama</label>
                                    <div class="col-sm-9">
                                        <input type="text" class="form-control" name="nama" required="" placeholder="Nama Buyer">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="fname" class="col-sm-3 control-label text-right col-form-label">Email</label>
                                    <div class="col-sm-9">
                                        <input type="email" class="form-control" name="email" required="" placeholder="Email Buyer">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="fname" class="col-sm-3 control-label text-right col-form-label">No Handphone</label>
                                    <div class="col-sm-9">
                                        <input type="text" class="form-control" name="nohp" required="" placeholder="Nomor Handphone">
                                        <input type="hidden" name="id_produk" value="<?php echo $get->id_produk ?>">
                                    </div>
                                </div>
                                </div>
                                <div class="col-md-6">
                                    <span><i>* Pastikan Data Buyer merupakan data yang benar.</i></span><br>
                                    <span><i>* Password Akun Buyer akan diinformasikan melalui email terkait.</i></span><br>
                                    <span><i>* Akun Buyer akan otomatis menjadi Data Buyer Afiliasi anda.</i></span><p></p>
                                    <button type="submit" class="btn btn-primary">Lanjut ke Invoice</button>
                                </div>
                            </div>
                                <?php echo form_close(); ?>
                        </div>
                    </div>                
            </div>
        </div>
    </div>            
</div>            

<script>
     <?php echo $this->session->flashdata('error'); ?>
    
</script>

