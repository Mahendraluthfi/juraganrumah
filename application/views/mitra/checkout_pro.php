 <div class="page-breadcrumb">
    <div class="row">
        <div class="col-12 d-flex no-block align-items-center">
            <h4 class="page-title">Upgrade Premium</h4>
            <div class="ml-auto text-right">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="<?php echo base_url('agen') ?>">Dashboard</a></li>
                        <li class="breadcrumb-item"><a href="<?php echo base_url('agen/upgrade') ?>">Upgrade</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Checkout</li>
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
                    <div class="col-md-12">
                        <div class="card card-body printableArea">
                            <h3><b>INVOICE</b> <span class="pull-right">#<?php echo $inv; ?></span></h3>
                            <hr>
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
                                            <h4 class="font-bold"><?php echo $row->nama_mitra ?></h4>
                                            <p class="text-muted m-l-30"><?php echo "Perusahaan; ".$row->nama_perusahaan ?>
                                                <br/> <?php echo $row->alamat ?>,
                                                <br/> <?php echo $row->telepon ?></p>
                                            <p class="m-t-30"><b>Tanggal Invoice :</b> <i class="fa fa-calendar"></i> <?php echo date('d M Y') ?></p>                                            
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
                                                    <th class="text-right">Quantity</th>
                                                    <th class="text-right">Durasi</th>
                                                    <th class="text-right">Harga</th> 
                                                    <th class="text-right">Kode Unik</th>
                                                    <th class="text-right">Total</th>
                                                </tr>
                                            </thead>
                                            <tbody>                                                
                                                <tr>
                                                    <?php echo $field; ?>
                                                </tr>                                               
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="pull-right m-t-30 text-right">                                        
                                         3 digit terakhir pembayaran menjadi identitas pembayaran.<br>
                                        <p>3 digit terakhir pembayaran akan dikembalikan dalam bentuk saldo</p>
                                        <hr>
                                        <h3><b>Total :</b> <?php echo 'Rp '.number_format($total); ?></h3>
                                    </div>
                                    <div class="clearfix"></div>
                                    <hr>
                                    <h4>Silahkan transfer ke:</h4>
                                    <img src="<?php echo base_url() ?>assets/backend/assets/images/mandiri.png" height="70" alt=""><br>
                                    <h5>Atas Nama : MOCHAMAD ARIF SUSANTO</h5>
                                    <h5>Nomor Rekening : 135-0016-347-526</h5>
                                    <h5>Lakukan Pembayaran dalam waktu 24 Jam</h5>
                                    <h5>Kirim Bukti Upload Pembayaran pada Form yang sudah disediakan</h5>
                                    <p></p>
                                    <?php echo form_open('mitra/upgrade/payment_submit'); ?>
                                    <input type="hidden" name="deskripsi" value="<?php echo $deskripsi ?>">
                                    <input type="hidden" name="qty" value="<?php echo $qty ?>">
                                    <input type="hidden" name="total" value="<?php echo $total ?>">
                                    <input type="hidden" name="nominal" value="<?php echo $nominal ?>">
                                    <input type="hidden" name="kode" value="<?php echo $kode ?>">
                                    <input type="hidden" name="id_invoice" value="<?php echo $inv ?>">
                                    <div class="text-right">
                                        <button class="btn btn-danger" type="submit" onclick="return confirm('Proses Pembayaran ?')"> Proses ke Pembayaran </button>
                                    </div>
                                    <?php echo form_close(); ?>
                                </div>
                            </div>
                        </div>
                    </div>
                
                    </div>
                </div>
            </div>
        </div>
    </div>
    
</div>            