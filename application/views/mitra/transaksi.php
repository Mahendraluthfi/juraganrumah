<link href="<?php echo base_url() ?>assets/backend/assets/libs/toastr/build/toastr.min.css" rel="stylesheet">
<script src="<?php echo base_url() ?>assets/backend/assets/libs/toastr/build/toastr.min.js"></script>
<link href="<?php echo base_url() ?>assets/backend/assets/libs/datatables.net-bs4/css/dataTables.bootstrap4.css" rel="stylesheet">
<script src="<?php echo base_url() ?>assets/backend/assets/extra-libs/DataTables/datatables.min.js"></script>   

 <div class="page-breadcrumb">
    <div class="row">
        <div class="col-12 d-flex no-block align-items-center">
            <h4 class="page-title">Data Transaksi</h4>
            <div class="ml-auto text-right">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="<?php echo base_url('mitra') ?>">Dashboard</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Transaksi</li>
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
        <table class="table table-bordered table-hover" id="zero_config" style="font-size: 12px;">
            <thead>
                <tr>
                    <th width="1%">#</th>
                    <th>Invoice</th>
                    <th>Deskripsi</th>
                    <th width="1%">Qty</th>
                    <th>Nominal</th>
                    <th>Kode</th>
                    <th>Total</th>
                    <th>Status</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                <?php $no = 1; foreach ($transaksi as $data) { ?> 
                <tr>
                    <td><?php echo $no++ ?></td>
                    <td><?php echo '#'.$data->id_inv ?></td>
                    <td><?php echo $data->deskripsi ?></td>
                    <td><?php echo $data->qty ?></td>
                    <td><?php echo number_format($data->nominal) ?></td>
                    <td><?php echo $data->kode ?></td>
                    <td><?php echo number_format($data->total) ?></td>
                    <td><?php echo $data->status ?></td>
                    <td>
                        <?php if ($data->status == "PROSES") { ?>
                            <button type="button" class="btn btn-default btn-sm" data-toggle="tooltip" data-placement="top" title="" data-original-title="Konfirmasi Pembayaran" onclick="konfirmasi('<?php echo $data->id_inv ?>')"><i class="fas fa-upload"></i></button>
                            <button type="button" class="btn btn-primary btn-sm" data-toggle="tooltip" data-placement="top" title="" data-original-title="Invoice" onclick="invoice('<?php echo $data->id_inv ?>')"><i class="fas fa-clipboard"></i></button>
                        <?php }else{ ?>                  
                            <button type="button" class="btn btn-primary btn-sm" data-toggle="tooltip" data-placement="top" title="" data-original-title="Invoice" onclick="invoice('<?php echo $data->id_inv ?>')"><i class="fas fa-clipboard"></i></button>
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
                <?php echo form_open_multipart('mitra/transaksi/submit_tf', array('class' => 'form-horizontal')); ?>
                    <div class="card-body">         
                        <h5>Data Bank Anda</h5><hr>               
                        <div class="form-group row">
                            <label for="fname" class="col-sm-3 control-label col-form-label">Nama Bank</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" name="namabank" placeholder="Nama Bank" value="<?php echo $row->nama_bank ?>" readonly>
                                <input type="hidden" name="inv">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="lname" class="col-sm-3 control-label col-form-label">No Rekening</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" name="norek" placeholder="Nomor Rekening" value="<?php echo $row->no_rekening ?>" readonly>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="lname" class="col-sm-3 control-label col-form-label">Atas Nama</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" name="atasnama" placeholder="Atas Nama" value="<?php echo $row->atas_nama ?>" readonly>                                
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
                                    <h3> &nbsp;<b class="text-danger">Mitra Developer Pro</b></h3>
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
                                            <td class="deskripsi"></td>
                                            <td class="qty"></td>
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


<script>
    $('#zero_config').DataTable();            

    function konfirmasi(id) {
        $('[name="inv"]').val(id);
        $('#Modal1').modal('show');
    }

    function invoice(id) {
         $.ajax({
            url : "<?php echo site_url('index.php/mitra/transaksi/get/')?>" + id,
            type: "GET",
            dataType: "JSON",
            success: function(data)
            {   
                $('.modal-title').text('Invoice #'+data.id_inv);
                $('.font-bold').text(data.nama_mitra);
                $('.date').text(data.date);
                $('.identity').text('Perusahaan; '+data.nama_perusahaan);
                $('.deskripsi').text(data.deskripsi);
                $('.qty').text(data.qty);
                $('.nominal').text(data.nominal);
                $('.kode').text(data.kode);
                $('.total').text(data.total);
                $('.alamat').text(data.alamat);
                $('.telepon').text(data.telepon);
                $('.ttl').text('Total : '+data.total);
                $('#invoice').modal('show');                   
            },
        error: function (jqXHR, textStatus, errorThrown)
        {
            alert('Error get data from ajax');
        }
        });
    }

     <?php echo $this->session->flashdata('error'); ?>     
</script>