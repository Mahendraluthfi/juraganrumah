<link href="<?php echo base_url() ?>assets/backend/assets/libs/datatables.net-bs4/css/dataTables.bootstrap4.css" rel="stylesheet">
<script src="<?php echo base_url() ?>assets/backend/assets/extra-libs/DataTables/datatables.min.js"></script> 
 <div class="page-breadcrumb">
    <div class="row">
        <div class="col-12 d-flex no-block align-items-center">
            <h4 class="page-title">Konfirmasi Agen Premium</h4>
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
        <div class="col-md-12">
             <div class="card">            
                <div class="card-body">
                    <table class="table table-bordered table-hover" id="zero_config">
                        <thead>
                            <tr>
                                <th width="1%">#</th>
                                <th>Agen</th>
                                <th>Invoice</th>                                
                                <th>Tanggal</th>                                
                                <th>Total</th>
                                <th>Status</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $no = 1; foreach ($row as $data) { ?>
                            <tr>
                                <td><?php echo $no++ ?></td>
                                <td><?php echo $data->nama_agen ?></td>
                                <td><?php echo '#'.$data->id_invoice ?></td>                                
                                <td><?php echo date('d M Y', strtotime($data->date_start)) ?></td>
                                <td><?php echo number_format($data->total) ?></td>
                                <td><?php echo $data->status ?></td>
                                <td>
                                    <?php if ($data->status == "SUBMIT"): ?>
                                        <button type="button" class="btn btn-success btn-sm margin-5" data-toggle="tooltip" data-placement="top" title="" data-original-title="Lihat Konfirmasi" onclick="konfirmasi('<?php echo $data->id_invoice ?>')"><i class="fas fa-check"></i></button>
                                    <?php endif ?>

                                    <button type="button" class="btn btn-primary btn-sm margin-5" data-toggle="tooltip" data-placement="top" title="" data-original-title="Lihat Invoice" onclick="invoice('<?php echo $data->id_invoice ?>')"><i class="fas fa-file-alt"></i></button>
                                    <?php if ($data->status !== "AKTIF"): ?>
                                        <a href="" class="btn btn-danger btn-sm" data-toggle="tooltip" data-placement="top" title="" data-original-title="Hapus"><i class="fas fa-trash"></i></a>
                                    <?php endif ?>
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


<div class="modal fade bs-example-modal-lg" id="invoice" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document ">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel"></h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true ">&times;</span>
                </button>
            </div>
                <div class="modal-body">                                                
                    <div class="row">
                        <div class="col-md-6">
                            <div class="pull-left">
                                <address>
                                    <h3> &nbsp;<b class="text-danger">Agen JuraganRumah Premium</b></h3>
                                    <p class="text-muted m-l-5">
                                        <br/>Wisma Purba Danarta-Antasena 4 Jl. Veteran No.7 Semarang
                                        <br/> (024) 8314793 EXT. 208</p>
                                </address>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="pull-right text-right">
                                <address>
                                    <h3>To,</h3>
                                    <h4 class="font-bold"></h4>
                                    <span class="identity"></span><br>
                                    <span class="alamat"></span><br>
                                    <span class="telepon"></span>
                                    <p class="m-t-30"><b>Tanggal Invoice :</b> <i class="fa fa-calendar"></i> <span class="date"></span></p>                                            
                                </address>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="table-responsive m-t-40" style="clear: both;">
                                <table class="table table-hover">
                                    <thead>
                                        <tr>
                                            <th class="text-center">#</th>
                                            <th>Deskripsi</th>
                                            <th>Quantity</th>
                                            <th>Durasi</th>
                                            <th>Harga</th> 
                                            <th>Kode Unik</th>
                                            <th>Total</th>
                                        </tr>
                                    </thead>
                                    <tbody>                                                
                                        <tr>
                                            <td>1</td>
                                            <td>Aktivasi Akun Agen Premium JuraganRumah</td>
                                            <td>1</td>
                                            <td>1 Tahun / 12 Bulan</td>
                                            <td class="nominal"></td>
                                            <td class="kode"></td>
                                            <td class="total"></td>
                                        </tr>                                               
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="pull-right m-t-30 text-right">                               
                                <h3 class="ttl"></h3>
                            </div>
                            <div class="clearfix"></div>                            
                        </div>
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
                <?php echo form_open('admin/konf_premium/submit_tf', array('class' => 'form-horizontal')); ?>
                    <div class="card-body">                        
                        <div class="form-group row">
                            <label for="fname" class="col-sm-3 control-label col-form-label">Nama Bank</label>
                            <div class="col-sm-9">
                                <input type="text" readonly class="form-control-plaintext" name="nama_bank">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="lname" class="col-sm-3 control-label col-form-label">No Rekening</label>
                            <div class="col-sm-9">
                                <input type="text" readonly class="form-control-plaintext" name="no_rekening">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="lname" class="col-sm-3 control-label col-form-label">Atas Nama</label>
                            <div class="col-sm-9">
                                <input type="text" readonly class="form-control-plaintext" name="atas_nama">
                                <input type="hidden" name="noinvoice">
                                <input type="hidden" name="kode">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="email1" class="col-sm-3 control-label col-form-label">File Bukti</label>
                            <div class="col-sm-9">                                
                                <img src="" alt="" height="200" class="foto">
                            </div>
                        </div>                        
                    </div>
                    <div class="border-top">
                        <div class="card-body">
                            <button type="submit" class="btn btn-primary" onclick="return confirm('Validasi agen premium ?')">Validasi</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<script>
     <?php echo $this->session->flashdata('error'); ?>

    $('#zero_config').DataTable();            
     
    function invoice(id) {
         $.ajax({
            url : "<?php echo site_url('index.php/admin/konf_premium/get_inv/')?>" + id,
            type: "GET",
            dataType: "JSON",
            success: function(data)
            {   
                $('.modal-title').text('Invoice #'+data.id_invoice);
                $('.font-bold').text(data.nama_agen);
                $('.date').text(data.date_start);
                $('.identity').text(data.username);
                $('.deskripsi').text(data.deskripsi);                
                $('.nominal').text(data.nominal);
                $('.kode').text(data.kode);
                $('.total').text(data.total);
                $('.alamat').text(data.alamat);
                $('.telepon').text(data.nomor_wa);
                $('.ttl').text('Total : '+data.total);
                $('#invoice').modal('show');                   
            },
        error: function (jqXHR, textStatus, errorThrown)
        {
            alert('Error get data from ajax');
        }
        });
    }

    function konfirmasi(id) {
        $.ajax({
            url : "<?php echo site_url('index.php/admin/konf_premium/get_agen/')?>" + id,
            type: "GET",
            dataType: "JSON",
            success: function(data)
            {   
                $('[name="nama_bank"]').val(data.nama_bank);
                $('[name="atas_nama"]').val(data.atas_nama);
                $('[name="no_rekening"]').val(data.no_rekening);
                $('[name="noinvoice"]').val(id);
                $('[name="kode"]').val(data.kode);
                $('.foto').attr("src","<?php echo base_url('assets/backend/foto/') ?>"+data.foto);
                $('#Modal1').modal('show');                   
            },
        error: function (jqXHR, textStatus, errorThrown)
        {
            alert('Error get data from ajax');
        }
        });                    
    }

</script>