 <div class="page-breadcrumb">
    <div class="row">
        <div class="col-12 d-flex no-block align-items-center">
            <h4 class="page-title">Upgrade Premium</h4>
            <div class="ml-auto text-right">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="<?php echo base_url('agen') ?>">Dashboard</a></li>
                        <li class="breadcrumb-item"><a href="<?php echo base_url('agen/produk') ?>">Upgrade</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Invoice</li>
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
                                            <h3> &nbsp;<b class="text-danger">Invoice Pembelian Properti</b></h3>
                                            <p class="text-muted m-l-5">
                                                <h4>Juragan Rumah</h4>
                                                Jl. Veteran No.48 Semarang
                                                <br/> (024) 76443701</p>
                                        </address>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="pull-right text-right">
                                        <address>
                                            <h3>To,</h3>
                                            <h4 class="font-bold"><?php echo $buyer->nama_buyer ?></h4>
                                            <p class="text-muted m-l-30"><?php echo $buyer->email_buyer ?>
                                                <br/> <?php echo $buyer->telepon ?></p>
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
                                                    <th>Nama Property</th>
                                                    <th class="text-right">Unit</th>
                                                    <th class="text-right">Alamat</th>
                                                    <th class="text-right">Harga</th>                   
                                                </tr>
                                            </thead>
                                            <tbody>                                                
                                                <tr>
                                                    <td class="text-center">1</td>
                                                    <td><?php echo $produk->nama_produk ?></td>
                                                    <td class="text-right">1</td>
                                                    <td class="text-right"><?php echo $produk->alamat ?></td>
                                                    <td class="text-right">
                                                         <?php 
                                                            if (!empty($produk->harga_promo)) {
                                                                $ttl = $produk->harga_promo;
                                                                echo "<strike>Rp. ".number_format($produk->harga)."</strike><br>";
                                                                echo " Rp. ".number_format($produk->harga_promo);
                                                            }else{
                                                                $ttl = $produk->harga;                                        
                                                                echo "Rp. ".number_format($produk->harga);                                
                                                            }
                                                        ?>
                                                    </td>           
                                                </tr>                                               
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="pull-right m-t-30 text-right">
                                    <?php echo form_open('agen/produk/submit_purchase'); ?>
                                    <div class="form-group row">
                                        <label for="fname" class="col-sm-8 control-label col-form-label">Jenis Pembayaran</label>
                                        <div class="col-sm-4">
                                            <select name="tipe" class="form-control">
                                                <option value="CASH">CASH</option>                                            
                                                <option value="SOFTCASH">SOFTCASH</option>
                                                <option value="KREDIT">KREDIT</option>                                            
                                            </select>
                                        </div>
                                    </div>                                        
                                        <h3><b>Total :</b> <?php echo "Rp. ".number_format($ttl) ?></h3>
                                    </div>
                                    <div class="clearfix"></div>
                                    <hr>                                                                       
                                    <input type="hidden" name="id_invoice" value="<?php echo $inv ?>">
                                    <input type="hidden" name="ttl" value="<?php echo $ttl ?>">
                                    <input type="hidden" name="buyer" value="<?php echo $buyer->id_buyer ?>">
                                    <input type="hidden" name="id_produk" value="<?php echo $produk->id_produk ?>">  
                                    <div class="text-right">
                                        <button class="btn btn-danger" type="submit" onclick="return confirm('Selesaikan Pembelian ?')"> Selesai Pembelian </button>
                                    </div>
                                    <?php echo form_close(); ?>
                                    <i>* Setelah menyelesaikan pembelian Buyer akan segera dihubungi oleh pihak Juragan Rumah</i>
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