<link href="<?php echo base_url() ?>assets/backend/assets/libs/datatables.net-bs4/css/dataTables.bootstrap4.css" rel="stylesheet">
<script src="<?php echo base_url() ?>assets/backend/assets/extra-libs/DataTables/datatables.min.js"></script>    
<link href="<?php echo base_url() ?>assets/backend/assets/libs/toastr/build/toastr.min.css" rel="stylesheet">
<script src="<?php echo base_url() ?>assets/backend/assets/libs/toastr/build/toastr.min.js"></script>

 <div class="page-breadcrumb">
    <div class="row">
        <div class="col-12 d-flex no-block align-items-center">
            <h4 class="page-title">Data Properti</h4>
            <div class="ml-auto text-right">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="<?php echo base_url('agen') ?>">Dashboard</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Produk</li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>
</div>

<div class="container-fluid">              
        <?php echo form_open('agen/produk/search'); ?>
          <div class="row">
            <div class="col-2">
                <h5>Pencarian Komisi</h5>
            </div>
            <div class="col-2">            
            <select name="indikator" class="form-control" style="width: 100%;" required="">
                <option value="1">> Lebih dari</option>                
                <option value="2">< Kurang dari</option>                
            </select>
            </div>
            <div class="col-3">              
                <input type="number" name="nominal" placeholder="Nominal" min="0" class="form-control" required="">
            </div>
            <div class="col-2">
                <button type="submit" class="btn btn-default"><i class="fas fa-search"></i> Cari</button>
            </div>
          </div>
        <?php echo form_close(); ?>
    
    <hr>
    <?php echo $this->session->flashdata('label'); ?>
    <div class="row">
        <div class="col-md-12">
             <div class="card-deck text-center">
                <?php 
                $kolom = 3;
                $batas = 0;
                foreach ($produk as $get) { 
                    if ($batas % $kolom == "0") {
                        echo "</div><div class='card-deck text-center'>";
                    }
                    $batas++;
                ?>
                <div class="card mb-4 shadow-sm">
                  <div class="card-header">
                    <h4 class="my-0 font-weight-normal" title="<?php echo $get->nama_produk ?>"><?php echo substr(ucwords(strtolower($get->nama_produk)), 0, 50)."..."; ?></h4>
                  </div>
                  <div class="card-body">                    
                    <img src="<?php echo base_url('assets/backend/fotoproduk/'.$get->file) ?>" alt="" style="height: 150px;"><p></p>
                    <h5>
                        <?php 
                            if (!empty($get->harga_promo)) {
                                echo "<strike>Rp. ".number_format($get->harga)."</strike>";
                                echo " Rp. ".number_format($get->harga_promo);
                            }else{
                                echo "Rp. ".number_format($get->harga);                                
                            }
                        ?>
                    </h5>
                    <h5>Komisi : Rp. <?php echo number_format($get->komisi) ?></h5>
                    <div class="row">
                        <div class="col-md-6">
                            <button type="button" onclick="view('<?php echo $get->id_produk ?>')" class="btn btn-block btn-outline-success">Detail</button>
                        </div>
                        <div class="col-md-6">
                            <a href="<?php echo base_url('agen/produk/purchase/'.$get->id_produk) ?>" class="btn btn-block btn-outline-primary">Beli</a>
                        </div>
                    </div><br>
                    <div class="row text-center">
                        <div class="col-md-12">
                            <h6>Bagikan <i class="mdi mdi-share-variant"></i></h6>     
                            <p id="p1" style="display: none;">https://juraganrumah.net/properti_detail?id_produk=<?php echo $get->id_produk.'&agen='.$this->session->userdata('id_agen'); ?></p>
                            <button class="btn btn-warning btn-sm" onclick="copyToClipboard('#p1')"><i class="fas fa-copy"></i> URL</button>
                            <button type="button" class="btn btn-primary btn-sm" onclick="window.location.href='https://telegram.me/share/url?url=https%3A%2F%2Fwww.juraganrumah.net%2Fproperti_detail%3Fid_produk%3D<?php echo $get->id_produk.$agen ?>'"><i class="mdi mdi-telegram"></i></button>
                            <button type="button" class="btn btn-success btn-sm" onclick="window.location.href='https://api.whatsapp.com/send?&text=https%3A%2F%2Fwww.juraganrumah.net%2Fproperti_detail%3Fid_produk%3D<?php echo $get->id_produk.$agen ?>'"><i class="mdi mdi-whatsapp"></i></button>
                            <button type="button" class="btn btn-default btn-sm" onclick="window.location.href='https://www.facebook.com/dialog/share?app_id=1275111962639567&display=popup&href=https%3A%2F%2Fwww.juraganrumah.net%2Fproperti_detail%3Fid_produk%3D<?php echo $get->id_produk.$agen ?>'"><i class="mdi mdi-facebook"></i></button>
                        </div>
                    </div>
                  </div>
                </div>                          
                <?php } ?>
              </div>              
              <?php echo $halaman; ?>
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
                        <p class="description text-justify"></p>
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
    function view(id) {
        $.ajax({
            url : "<?php echo site_url('index.php/agen/produk/get/')?>" + id,
            type: "GET",
            dataType: "JSON",
            success: function(data)
            {   
                var harga = new Intl.NumberFormat('ja-JP', { style: 'decimal' }).format(data.harga);
                var harga_bawah = new Intl.NumberFormat('ja-JP', { style: 'decimal' }).format(data.harga_bawah);
                var harga_promo = new Intl.NumberFormat('ja-JP', { style: 'decimal' }).format(data.harga_promo);                
                $('.modal-title').text('Detail Produk');
                $('[name="id_produk"]').val(data.id_produk);
                $('[name="harga"]').val(harga);                
                $('[name="harga_bawah"]').val(harga_bawah);
                $('[name="harga_promo"]').val(harga_promo);
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
                $('.description').text(data.description);
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

                // console.log(data);
            },
        error: function (jqXHR, textStatus, errorThrown)
        {
            alert('Error get data from ajax');
        }
        });
    }

    function copyToClipboard(element) {
        var $temp = $("<input>");
        $("body").append($temp);
        $temp.val($(element).text()).select();
        document.execCommand("copy");
        $temp.remove();
        toastr.success('Alamat URL disalin', 'Berhasil');        
    }
</script>

