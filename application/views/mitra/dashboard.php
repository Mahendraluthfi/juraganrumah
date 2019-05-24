 <div class="page-breadcrumb">
    <div class="row">
        <div class="col-12 d-flex no-block align-items-center">
            <h4 class="page-title">Dashboard Developer</h4>
            <div class="ml-auto text-right">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">                        
                        <li class="breadcrumb-item active" aria-current="page">Dashboard</li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>
</div>

<div class="container-fluid">
    <h2 class="font-light text-center">Selamat Datang di Dashboard Mitra Developer</h2>                    
        
    
     <div class="row">
         <div class="col-lg-4">
              <div class="card card-hover">
                    <div class="box bg-cyan text-center">
                        <img src="<?php echo base_url('assets/backend/fotomitra/'.$mitra->file_logo) ?>" alt="" style="height:100px; width: 100%;">
                        <h5 class="text-white"><?php echo $mitra->nama_perusahaan ?></h5>
                        <h6 class="text-white font-light"><?php echo $mitra->alamat ?></h6>
                        <h6 class="text-white font-light"><?php echo date('d M Y', strtotime($mitra->date_join)) ?></h6>
                    </div>
                </div>
         </div>         
         <div class="col-lg-4">
             <div class="row">
                <div class="col-12">
                    <div class="bg-success p-10 text-white text-center">
                       <i class="fa fa-user m-b-5 font-16"></i>
                       <h5 class="m-b-0 m-t-5">Status Akun</h5>
                       <small class="font-light"><?php echo $mitra->status_akun ?></small>
                    </div>
                </div>                                            
                <div class="col-6 m-t-15">
                    <div class="bg-warning p-10 text-white text-center">
                       <i class="mdi mdi-home-map-marker m-b-5 font-16"></i>
                       <h5 class="m-b-0 m-t-5"><?php echo $project ?></h5>
                       <small class="font-light">Jumlah Projek</small>
                    </div>
                </div>
                 <div class="col-6 m-t-15">
                    <div class="bg-danger p-10 text-white text-center">
                       <i class="mdi mdi-home-modern m-b-5 font-16"></i>
                       <h5 class="m-b-0 m-t-5"><?php echo $properti ?></h5>
                       <small class="font-light">Jumlah Properti</small>
                    </div>
                </div>               
            </div>
         </div>

         <div class="col-lg-4">
             <div class="row">
                <div class="col-6">
                    <div class="bg-dark p-10 text-white text-center">
                       <i class="mdi mdi-chart-areaspline m-b-5 font-16"></i>
                       <h5 class="m-b-0 m-t-5"><?php if (isset($landing->count)) { echo $landing->count; }else{ echo "0"; } ?></h5>
                       <small class="font-light">Kunjungan Landing Page</small>
                    </div>
                </div>
                 <div class="col-6">
                    <div class="bg-dark p-10 text-white text-center">
                       <i class="mdi mdi-whatsapp m-b-5 font-16"></i>
                       <h5 class="m-b-0 m-t-5"><?php if (isset($wa->count)) { echo $landing->count; }else{ echo "0"; } ?></h5>
                       <small class="font-light">Kontak Whatsapp</small>
                    </div>
                </div>
                <div class="col-6 m-t-15">
                    <div class="bg-dark p-10 text-white text-center">
                       <i class="fas fa-phone m-b-5 font-16"></i>
                       <h5 class="m-b-0 m-t-5"><?php if (isset($telepon->count)) { echo $landing->count; }else{ echo "0"; } ?></h5>
                       <small class="font-light">Kontak Telepon</small>
                    </div>
                </div>
                 <div class="col-6 m-t-15">
                    <div class="bg-dark p-10 text-white text-center">
                       <i class="mdi mdi-message m-b-5 font-16"></i>
                       <h5 class="m-b-0 m-t-5"><?php if (isset($sms->count)) { echo $landing->count; }else{ echo "0"; } ?></h5>
                       <small class="font-light">Kontak SMS</small>
                    </div>
                </div>                  
            </div>
         </div>
     </div>
<p></p>
     <div class="row">
         <div class="col-lg-4">
             <div class="card">
                <div class="card-body">
                    <h4 class="card-title">Artikel Terakhir</h4>
                </div>
                <div class="comment-widgets scrollable ps-container ps-theme-default" data-ps-id="4c217a08-ccc7-9f9c-e310-364f794af04c">
                    <!-- Comment Row -->
                    <?php foreach ($last_artikel as $artikel) { ?>
                    <div class="d-flex flex-row comment-row m-t-0">
                        <div class="p-2"><img src="<?php echo base_url('assets/backend/fotoartikel/'.$artikel->foto) ?>" alt="user" width="50" height="50" class="rounded-circle"></div>
                        <div class="comment-text w-100">
                            <h6 class="font-medium"><?php echo substr($artikel->judul, 0,25).'...'; ?></h6>
                            <span class="m-b-15 d-block"><?php echo substr($artikel->isi, 0,70).'...'; ?></span>
                            <div class="comment-footer">
                                <span class="text-muted float-right"><?php echo date('d M Y', strtotime($artikel->datetime)) ?></span>                                        
                            </div>
                        </div>
                    </div>
                    <?php } ?>
                    <!-- Comment Row -->                               
                <div class="ps-scrollbar-x-rail" style="left: 0px; bottom: 0px;"><div class="ps-scrollbar-x" tabindex="0" style="left: 0px; width: 0px;"></div></div><div class="ps-scrollbar-y-rail" style="top: 0px; right: 3px;"><div class="ps-scrollbar-y" tabindex="0" style="top: 0px; height: 0px;"></div></div></div>
            </div>
         </div>
         <div class="col-lg-4">
             
             <div class="card">
                <div class="card-body">
                    <h4 class="card-title">Post Terakhir</h4>
                </div>
                <div class="comment-widgets scrollable ps-container ps-theme-default" data-ps-id="4c217a08-ccc7-9f9c-e310-364f794af04c">
                    <!-- Comment Row -->
                    <?php foreach ($last_post as $post) { ?>                    
                    <div class="d-flex flex-row comment-row m-t-0">
                        <div class="p-2"><img src="<?php if(isset($post->file)){ echo base_url('assets/backend/fotoproduk/'.$post->file); }else{ echo 'https://shop.miele.hr/INTERSHOP/static/WFS/Miele-HR-Site/-/-/hr_HR/img/not_available.png'; } ?>" alt="user" width="50" class="rounded-circle"></div>
                        <div class="comment-text w-100">
                            <h6 class="font-medium"><?php echo $post->nama_produk ?></h6>
                            <span class="m-b-15 d-block"><?php echo number_format($post->harga) ?></span>                            
                        </div>
                    </div>
                    <?php } ?>
                    <!-- Comment Row -->                               
                <div class="ps-scrollbar-x-rail" style="left: 0px; bottom: 0px;"><div class="ps-scrollbar-x" tabindex="0" style="left: 0px; width: 0px;"></div></div><div class="ps-scrollbar-y-rail" style="top: 0px; right: 3px;"><div class="ps-scrollbar-y" tabindex="0" style="top: 0px; height: 0px;"></div></div></div>
            </div>
         
         </div>
         <div class="col-lg-4">
             
            <div class="card card-hover">
                <div class="box bg-success">
                    <h4 class="text-white">Saldo</h4>
                    <h1 class="font-light text-white"><?php echo "Rp. ".number_format(base64_decode($mitra->saldo)) ?></h1>
                </div>
            </div>                    
        
         </div>
     </div>

</div>            