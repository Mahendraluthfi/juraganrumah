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
                                <h1 class="font-light text-white"><i class="mdi mdi-account-card-details"></i> <?php echo $row->username ?></h1>                                                                
                                    <input type="text" readonly class="form-control text-center" value="<?php echo $url ?>" id="pilih"><br>                                                                        
                                    <span><button type="button" onclick="copybtn()" class="btn btn-warning btn-md"><i class="far fa-copy"></i> Copy Link Affiliasi</button></span>                                
                            </div>
                        </div>
                    </div>


                    <div class="col-md-6">
                        <?php echo $status; ?>
                    </div>
                    
                    </div>                    
                      <div class="alert alert-success text-center" role="alert">
                      <h3 class="alert-heading">Keuntungan menjadi Agen Premium</h3><hr>
                        <div class="alert alert-danger" role="alert">
                            <h4>Produk Penjualan Tidak Terbatas</h4>                        
                        </div>
                        <div class="alert alert-danger" role="alert">
                            <h4>Penghasilan Jauh Lebih Besar</h4>
                        </div>
                        <div class="alert alert-danger" role="alert">
                            <h4>Prioritas Penjualan</h4>            
                        </div>                        
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

<script>

    function invoice(id) {
         $.ajax({
            url : "<?php echo site_url('index.php/agen/upgrade/get_inv/')?>" + id,
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

     <?php echo $this->session->flashdata('error'); ?>
     function copybtn() {
        document.getElementById("pilih").select();
        document.execCommand("copy");
        // toastr.success('Text disalin', 'Berhasil');
    }
</script>