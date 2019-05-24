
<div class="wrap cf">
   <div class="container">
    <div class="heading cf">
      <div class="row">
        <div class="col-md-3">
          <h5><a href="<?php site_url();?>cart" class="continue">Keranjang Properti</a></h5>
        </div>
        <div class="col-md-3">
          
        </div>
        <div class="col-md-3">
          
        </div>
        <div class="col-md-3">
          <h5><a href="<?php site_url();?>properti" class="continue">Lanjutkan Pilih Property</a></h5>
        </div>
      </div>
     </div>
  <div class="cart">
    <ul class="cartWrap">
      <?php foreach ($produk as $su) { ?>
      <li class="items odd">
        <div class="infoWrap"> 
            <div class="cartSection">
             <a href="<?php echo site_url() ?>properti_detail?id_produk=<?php echo $su->id_produk?>&nama_produk=<?php echo $su->nama_produk?>"><img style="width:20%" src="assets/backend/fotoproduk/<?php echo $su->file ?>"></a>
              <p class="itemNumber"><?php echo $su->id_produk?></p>
              <br>
              <p class="stockStatus"><?php echo $su->nama_produk?></p><br>
              <p>Alamat : <?php echo $su->alamat?></p>&nbsp;&nbsp;&nbsp;&nbsp;
              <p>Luas tanah : <?php echo $su->luas_tanah?></p>&nbsp;&nbsp;&nbsp;&nbsp;
              <p>Luas Bangunan : <?php echo $su->luas_bangunan?></p>&nbsp;&nbsp;&nbsp;&nbsp;
              <p>Harga : Rp <?php echo number_format($su->harga) ?></p>&nbsp;&nbsp;&nbsp;&nbsp;
              <p>Type Pembayaran :<?php echo $su->type_pembayaran ?></p>&nbsp;&nbsp;&nbsp;&nbsp;
              <div>
                <a href="<?php echo base_url('cart/delete/'.$su->id_shop) ?>" class="btn btn-danger btn-sm"><i class="fas fa-trash"></i> Hapus</a>
              </div>
          </div>
          <?php 
          $this->session->set_userdata( 'ses_shop', $su->id_shop );
          ?>
          <p><a href="<?php site_url(); ?>cart/checkout" class="btn">Checkout</a></p>
          </div>
          <hr>
      </li>
      <?php }
      if (empty($produk)) { ?>
          <li class="items odd">
            <div class="infoWrap" style="margin-top: 90px;margin-bottom: 90px"> 
                <div class="cartSection">
                 <h2 class="error-title text-center"><img src="<?php echo base_url(); ?>assets/img/default_empty_cart.png"></h2>
                 <br>
                 <h2 class="error-title text-center">Upss, Keranjang Property Anda Kosong..</h2>
              </div>
            </div>
          </li>
      <?php } ?>
    </ul>
  </div>
</div>
</div>