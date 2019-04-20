<link href="<?php echo base_url() ?>assets/backend/assets/libs/datatables.net-bs4/css/dataTables.bootstrap4.css" rel="stylesheet">
<script src="<?php echo base_url() ?>assets/backend/assets/extra-libs/DataTables/datatables.min.js"></script> 
 <div class="page-breadcrumb">
    <div class="row">
        <div class="col-12 d-flex no-block align-items-center">
            <h4 class="page-title">Data Penjualan</h4>
            <div class="ml-auto text-right">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="<?php echo base_url('admin') ?>">Dashboard</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Survei</li>
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
                    <!-- <div class="row"></div><hr> -->
                    <div class="row">
                        <table class="table table-bordered table-hover" id="zero_config">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Tanggal</th>
                                    <th>Buyer</th>
                                    <th>Developer</th>                                    
                                    <th>Tipe Bayar</th>
                                    <th>Status</th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php $no = 1; foreach ($get_data as $data) { ?>
                                <tr>
                                    <td><?php echo $no++ ?></td>
                                    <td><?php echo date('d M Y', strtotime($data->date)) ?></td>
                                    <td><?php echo $data->nama_buyer ?></td>
                                    <td><?php echo $data->nama_perusahaan ?></td>                                    
                                    <td><?php echo $data->tipe_bayar ?></td>                                    
                                    <td><?php echo $data->status ?></td>
                                    <td>
                                        <button type="button" class="btn btn-primary btn-sm margin-5" data-toggle="tooltip" data-placement="top" title="" data-original-title="Tampilkan Detail" onclick="view('<?php echo $data->id_transaksi ?>')"><i class="fas fa-file-alt"></i></button>
                                        <?php if ($data->status == "PROSES") { ?>
                                            
                                        <button type="button" class="btn btn-success btn-sm margin-5" data-toggle="tooltip" data-placement="top" title="" data-original-title="Action Closing" onclick="closing('<?php echo $data->id_transaksi ?>','<?php echo $data->total_prize ?>','<?php echo $data->status ?>')"><i class="fas fa-check"></i></button>
                                        <button type="button" class="btn btn-danger btn-sm margin-5" data-toggle="tooltip" data-placement="top" title="" data-original-title="Batalkan" onclick="batal('<?php echo $data->id_transaksi ?>')"><i class="fas fa-window-close"></i></button>
                                        <?php } ?>
                                    </td>
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

<div class="modal fade bs-example-modal-lg" id="view_modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document ">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title view-title" id="exampleModalLabel"></h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true ">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="text-center">
                    <h5 class="text-primary">Data Transaksi</h5>                    
                </div>
                <table class="table table-condensed table-hover">
                    <thead>
                        <tr>                                                        
                            <th>Nama Property</th>
                            <th>Developer</th>
                            <th>Unit</th>
                            <th>Harga</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody id="show_view">
                        
                    </tbody>
                </table>
                <div class="form-group row">
                    <label for="fname" class="col-sm-3 control-label col-form-label">Tanggal Transaksi</label>
                    <div class="col-sm-3">
                        <input type="text" readonly class="form-control-plaintext" name="tgl">
                    </div>
                    <label for="fname" class="col-sm-3 control-label col-form-label">Total Harga</label>
                    <div class="col-sm-3">
                        <input type="text" readonly class="form-control-plaintext" name="total">
                    </div>
                </div>    
                <div class="form-group row">
                    <label for="fname" class="col-sm-3 control-label col-form-label">Tipe Bayar</label>
                    <div class="col-sm-3">
                        <input type="text" readonly class="form-control-plaintext" name="tipe">
                    </div>
                    <label for="fname" class="col-sm-3 control-label col-form-label">Status</label>
                    <div class="col-sm-3">
                        <input type="text" readonly class="form-control-plaintext" name="status">
                    </div>
                </div>                            

                <hr>
                <div class="text-center">
                    <h5 class="text-primary">Data Buyer</h5>
                </div><hr>
                <div class="form-group row">
                    <label for="fname" class="col-sm-3 control-label col-form-label">Nama Buyer</label>
                    <div class="col-sm-3">
                        <input type="text" readonly class="form-control-plaintext" name="nama_buyer">
                    </div>
                    <label for="fname" class="col-sm-3 control-label col-form-label">No WA</label>
                    <div class="col-sm-3">
                        <input type="text" readonly class="form-control-plaintext" name="no_wa">
                    </div>
                </div>   
                 <hr>
                <div class="text-center">
                    <h5 class="text-primary">Data Agen</h5>
                </div><hr>
                <div class="form-group row">
                    <label for="fname" class="col-sm-3 control-label col-form-label">Nama Agen</label>
                    <div class="col-sm-3">
                        <input type="text" readonly class="form-control-plaintext" name="nama_agen">
                    </div>
                    <label for="fname" class="col-sm-3 control-label col-form-label">No WA</label>
                    <div class="col-sm-3">
                        <input type="text" readonly class="form-control-plaintext" name="no_wa_agen">
                    </div>
                </div>                
                
            </div>
        </div>
    </div>
</div>

<div class="modal fade bs-example-modal-lg" id="closing_modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document ">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title" id="exampleModalLabel">Closing Penjualan</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true ">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="text-center">
                    <h5 class="text-primary">Data Transaksi</h5>                    
                </div>
                <table class="table table-condensed table-hover">
                    <thead>
                        <tr>                                                        
                            <th>Nama Property</th>
                            <th>Developer</th>
                            <th>Unit</th>
                            <th>Harga Jual</th>                            
                            <th>Harga Deal</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody id="show_close">
                        
                    </tbody>
                </table>
                <?php echo form_open('admin/penjualan/closing'); ?>
                <div class="form-group row">
                    <label for="fname" class="col-sm-3 control-label col-form-label">Total Harga</label>
                    <div class="col-sm-3">
                        <input type="text" readonly class="form-control-plaintext" name="prize">
                    </div>
                    <label for="fname" class="col-sm-3 control-label col-form-label">Tipe Bayar</label>
                    <div class="col-sm-3">
                        <input type="text" readonly class="form-control-plaintext" name="tipe">
                        <input type="hidden" name="id_transaksi">
                    </div>
                </div>
                <hr>
                <h4>Komisi</h4><hr>
                <div class="form-group row">
                    <label for="fname" class="col-sm-3 control-label col-form-label">Komisi Agen</label>
                    <div class="col-sm-3">
                        <input type="text" readonly class="form-control-plaintext" name="komisi_agen">
                    </div>                    
                    <label for="fname" class="col-sm-3 control-label col-form-label">Komisi Promosi</label>
                    <div class="col-sm-3">
                        <input type="text" readonly class="form-control-plaintext" name="komisi_promosi">
                    </div>                    
                </div>
                <div class="form-group row">
                    <label for="fname" class="col-sm-3 control-label col-form-label">Komisi Manajemen</label>
                    <div class="col-sm-3">
                        <input type="text" readonly class="form-control-plaintext" name="komisi_manajemen">
                    </div>                                                    
                </div>                
            </div>
            <div class="modal-footer">
            <button type="submit" class="btn btn-default" onclick="return confirm('Yakin Closing Penjualan ini ?')">Validasi Closing Penjualan</button>    
            <?php echo form_close(); ?>
            </div>
        </div>
    </div>
</div>

<div class="modal fade bs-example-modal-lg" id="detail_modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document ">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Detail Produk</h5>
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
                    <label for="email1" class="col-sm-3 control-label col-form-label">Project</label>
                    <div class="col-sm-9">
                        <input type="text" readonly class="form-control-plaintext" name="project">
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
                        <input type="text" readonly class="form-control-plaintext" name="hargabawah">
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
                        <input type="text" readonly class="form-control-plaintext" name="description">
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

<div class="modal fade bs-example-modal-lg" id="batal_modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document ">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title" id="exampleModalLabel">Pembatalan Penjualan</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true ">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="deal_modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"aria-hidden="true">
    <div class="modal-dialog" role="document ">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Edit Harga Deal</h5>                
            </div>
            <div class="modal-body">
                <?php echo form_open('admin/penjualan/post_deal'); ?>
                 <div class="form-group row">
                    <label for="fname" class="col-sm-3 control-label col-form-label">Nama Property</label>
                    <div class="col-sm-9">
                        <input type="text" readonly class="form-control-plaintext" name="nmproperty">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="fname" class="col-sm-3 control-label col-form-label">Edit Harga Deal</label>
                    <div class="col-sm-9">
                        <input type="number" name="deal" class="form-control">
                    </div>
                </div>
                <div class="form-group row">                
                    <label for="fname" class="col-sm-3 control-label col-form-label">Harga Bawah</label>
                    <div class="col-sm-9">
                        <input type="text" readonly class="form-control-plaintext" name="hargabawah">
                        <input type="hidden" name="id_detail">
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="submit" class="btn btn-default">Ubah Harga</button>
                <button type="button" onclick="kembali()" class="btn btn-default">Kembali</button>
                <?php echo form_close(); ?>
            </div>
        </div>
    </div>
</div>

<script>
    <?php echo $this->session->flashdata('error'); ?>

    $('#zero_config').DataTable();                 

    function view(id) {
        $.ajax({
            url : "<?php echo site_url('index.php/admin/penjualan/get_transaksi')?>/" + id,
            type: "GET",
            dataType: "JSON",
            success: function(data){
                var html = '';
                var i;
                for(i=0; i<data.length; i++){
                    var x = new Intl.NumberFormat('ja-JP', { style: 'decimal' }).format(data[i].harga);
                    
                    html += "<tr>"+                                                
                        "<td>"+data[i].nama_produk+"</td>"+
                        "<td>"+data[i].nama_perusahaan+"</td>"+
                        "<td>"+data[i].jml_unit+"</td>"+
                        "<td>Rp. "+x+",-</td>"+
                        "<td>"+
                        "<button type='button' class='btn btn-primary btn-sm item_detail' onclick=\"detail(\'"+data[i].id_produk+"\')\"><span class='fas fa-edit'></span> Detail</button>"+
                        "</td>"+
                        "</tr>";
                    }
                $('#show_view').html(html);                                
                // $('#view_modal').modal('show');

            },
            error: function (jqXHR, textStatus, errorThrown){
                alert('Error get data from ajax');
            }
        }); 

        $.ajax({
            url : "<?php echo site_url('index.php/admin/penjualan/get_detail/')?>" + id,
            type: "GET",
            dataType: "JSON",
            success: function(data)
            {   
               var total_prize = new Intl.NumberFormat('ja-JP', { style: 'decimal' }).format(data.total_prize);

               $('.view-title').text('Detail Transaksi #'+id);
               $('[name="nama_buyer"]').val(data.nama_buyer);
               $('[name="no_wa"]').val(data.telepon);
               $('[name="nama_agen"]').val(data.nama_agen);
               $('[name="no_wa_agen"]').val(data.nomor_wa);
               $('[name="tgl"]').val(data.date);
               $('[name="total"]').val('Rp. '+total_prize);
               $('[name="tipe"]').val(data.tipe_bayar);
               $('[name="status"]').val(data.sts);
               
               $('#view_modal').modal('show');
               // console.log(data);
            },
            error: function (jqXHR, textStatus, errorThrown)
            {
                alert('Error get data from ajax');
            }
        });
       

    }

    function detail(idp) {              
        $.ajax({
          url : "<?php echo site_url('admin/penjualan/get_produkdetail')?>/" + idp,
          type: "GET",
          dataType: "JSON",
          success: function(data)
          {                       
                var harga = new Intl.NumberFormat('ja-JP', { style: 'decimal' }).format(data.harga);
                var harga_bawah = new Intl.NumberFormat('ja-JP', { style: 'decimal' }).format(data.harga_bawah);
                var harga_promo = new Intl.NumberFormat('ja-JP', { style: 'decimal' }).format(data.harga_promo);
                
                $('[name="id_produk"]').val(data.id_produk);
                $('[name="nama_produk"]').val(data.nama_produk);
                $('[name="harga"]').val('Rp. '+harga);
                $('[name="hargabawah"]').val('Rp. '+harga_bawah);
                $('[name="harga_promo"]').val('Rp. '+harga_promo);
                $('[name="project"]').val(data.nama_project);
                $('[name="harga_bawah"]').val(data.harga_bawah);                
                $('[name="jenis_air"]').val(data.jenis_air);
                $('[name="luas_bangunan"]').val(data.luas_bangunan);
                $('[name="luas_tanah"]').val(data.luas_tanah);
                $('[name="carport"]').val(data.carport);
                $('[name="furnished"]').val(data.furnished);
                $('[name="hook_pojok"]').val(data.hook_pojok);
                $('[name="jumlah_tingkat"]').val(data.jumlah_tingkat);
                $('[name="jumlah_kamar_mandi"]').val(data.jumlah_kamar_mandi);
                $('[name="jumlah_kamar_tidur"]').val(data.jumlah_kamar_tidur);
                $('[name="description"]').val(data.description);
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
                $('#detail_modal').modal('show');
                // console.log(data);
          },
          error: function (jqXHR, textStatus, errorThrown)
          {
              alert('Error get data from ajax');
          }
        });
    };


    function closing(id,tp,tipe) {
         $.ajax({
            url : "<?php echo site_url('index.php/admin/penjualan/get_transaksi')?>/" + id,
            type: "GET",
            dataType: "JSON",
            success: function(data){
                var html = '';
                var i;
                for(i=0; i<data.length; i++){
                    var x = new Intl.NumberFormat('ja-JP', { style: 'decimal' }).format(data[i].harga);
                    var y = new Intl.NumberFormat('ja-JP', { style: 'decimal' }).format(data[i].total);
                    html += "<tr>"+                                                
                        "<td>"+data[i].nama_produk+"</td>"+
                        "<td>"+data[i].nama_perusahaan+"</td>"+
                        "<td>"+data[i].jml_unit+"</td>"+
                        "<td>Rp. "+x+",-</td>"+                                            
                        "<td>Rp. "+y+",-</td>"+                        
                        "<td>"+
                        "<button type='button' class='btn btn-primary btn-sm item_detail' onclick=\"detail(\'"+data[i].id_produk+"\')\" title='Detail'><span class='mdi mdi-receipt'></span></button>&nbsp;"+
                        "<a href='javascript:;' class='btn btn-success btn-sm item_deal' data='"+data[i].id_detail_transaksi+"' title='Edit Harga Deal'><span class='fas fa-edit'></span></a>"+
                        "</td>"+
                        "</tr>";
                    }
                var ttp = new Intl.NumberFormat('ja-JP', { style: 'decimal' }).format(tp);
                $('[name="prize"]').val('Rp. '+ttp);
                $('[name="tipe"]').val(tipe);
                $('[name="id_transaksi"]').val(id);
                $('#show_close').html(html);                                
                $('#closing_modal').modal('show');

            },
            error: function (jqXHR, textStatus, errorThrown){
                alert('Error get data from ajax');
            }
        });     

         $.ajax({
            url : "<?php echo site_url('index.php/admin/penjualan/get_komisi/')?>" + id,
            type: "GET",
            dataType: "JSON",
            success: function(data)
            {   
               var komisi_agen = new Intl.NumberFormat('ja-JP', { style: 'decimal' }).format(data.komisi_agen);
               var komisi_manajemen = new Intl.NumberFormat('ja-JP', { style: 'decimal' }).format(data.komisi_manajemen);
               var komisi_promosi = new Intl.NumberFormat('ja-JP', { style: 'decimal' }).format(data.komisi_promosi);
               $('[name="komisi_agen"]').val('+- ('+komisi_agen+')');
               $('[name="komisi_manajemen"]').val('+- ('+komisi_manajemen+')');
               $('[name="komisi_promosi"]').val('+- ('+komisi_promosi+')');
               $('#closing_modal').modal('show');

               console.log(data);
            },
            error: function (jqXHR, textStatus, errorThrown)
            {
                alert('Error get data from ajax');
            }
        });    
        // alert(id);
    }

     $('#show_close').on('click','.item_deal',function(){
        var idp = $(this).attr('data');         
        // alert(idp);
        $.ajax({
          url : "<?php echo site_url('admin/penjualan/get_hargadeal')?>/" + idp,
          type: "GET",
          dataType: "JSON",
          success: function(data)
          {                            
                // console.log(data);
                var x = new Intl.NumberFormat('ja-JP', { style: 'decimal' }).format(data.harga_bawah);

                $('[name="deal"]').attr("min" , data.harga_bawah);
                $('[name="hargabawah"]').val('Rp. '+x);
                $('[name="id_detail"]').val(idp);
                $('[name="nmproperty"]').val(data.nama_produk);
                $('#closing_modal').modal('hide');
                $('#deal_modal').modal('show');
          },
          error: function (jqXHR, textStatus, errorThrown)
          {
              alert('Error get data from ajax');
          }
        });
    })

     function kembali() {
          $('#closing_modal').modal('show');
        $('#deal_modal').modal('hide');
     }

    function batal(id) {
        $('#batal_modal').modal('show');        
    }

    // '<a href="javascript:;" class="btn btn-primary btn-sm item_edit" data="'+data[i].id+'"><span class="fas fa-edit"></span> Edit</a>'+

</script>