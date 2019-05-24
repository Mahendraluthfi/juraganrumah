
<div class="wrap cf">
  <div class="heading cf">
    <h1>Janji Survei Saya</h1>
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
              <p class="stockStatus"><?php echo $su->nama_produk?></p>&nbsp;&nbsp;&nbsp;&nbsp;
              <p>Alamat : <?php echo $su->alamat?></p>&nbsp;&nbsp;&nbsp;&nbsp;
              <p>Luas tanah : <?php echo $su->luas_tanah?></p>&nbsp;&nbsp;&nbsp;&nbsp;
              <p>Luas Bangunan : <?php echo $su->luas_bangunan?></p>&nbsp;&nbsp;&nbsp;&nbsp;
              <p>Harga : Rp <?php echo number_format($su->harga) ?></p>&nbsp;&nbsp;&nbsp;&nbsp;
              <div>
                <a href="<?php echo base_url('cart/delete/'.$su->id_shop) ?>" class="btn btn-danger btn-sm"><i class="fas fa-trash"></i> Hapus</a>
              </div>
          </div>
          <?php 
          $this->session->set_userdata( 'ses_shop', $su->id_shop );
          ?>
          <p>Tanggal Survei :</p>
          <p>Tanggal : <?php echo $su->date ?> </p>
          <p>jam : <?php echo $su->time ?> </p>
          </div>
          <hr>
      </li>
      <?php }
      if (empty($produk)) { ?>
          <li class="items odd">
            <div class="infoWrap"> 
                <div class="cartSection">
                 <h2 class="error-title text-center"><img src="<?php echo base_url(); ?>assets/img/default_empty_cart.png"></h2>
                 <h2 class="error-title text-center">Upss,Property Anda Masih Kosong..</h2>
              </div>
          </li>
      <?php } ?>
    </ul>
  </div>
</div>