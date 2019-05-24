 <div class="page-breadcrumb">
    <div class="row">
        <div class="col-12 d-flex no-block align-items-center">
            <h4 class="page-title">Dashboard</h4>
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
    
    <div class="row">
        <div class="col-lg-12 text-center">
            <h1 class="font-light">Selamat Datang di Dashboard Agen</h1>            
        </div>
    </div>
    <div class="row">
        
         <div class="col-lg-4">
              <div class="card card-hover">
                    <div class="box bg-cyan text-center text-white">
                        <h4><i class="fas fa-user"></i></h4>      
                        <h5><?php echo $agen->nama_agen ?></h5>
                        <h5><?php echo $agen->email ?></h5>
                        <p id="p1" style="display: none;"><?php echo $url; ?></p>
                        <button class="btn btn-warning btn-sm" onclick="copyToClipboard('#p1')"><i class="fas fa-copy"></i> Link Affiliasi</button>
                    </div>
                </div>
         </div>         
         <div class="col-lg-4">
             <div class="row">
                <div class="col-12">
                  <div class="card card-hover">

                    <div class="bg-success p-10 text-white text-center">
                       <i class="fa fa-user m-b-5 font-16"></i>
                       <h5 class="m-b-0 m-t-5">Status Akun</h5>
                       <?php echo $content_premium ?>   
                    </div>
                </div>
                </div>                                                                    
            </div>
         </div>

         <div class="col-lg-4">
             <div class="row">
                <div class="col-12">
                    <div class="bg-dark p-10 text-white text-center">
                       <div class="float-left">
                           <h5>
                               <i class="fas fa-dollar-sign m-b-5 font-16"></i>                      
                               Saldo                                                          
                           </h5>
                       </div>
                       <div class="float-right">                           
                           <h5><?php echo "Rp. ".number_format(base64_decode($agen->balance)) ?></h5>
                       </div><p></p><br>
                    </div>
                </div>                 
                <div class="col-12 m-t-15">
                    <div class="bg-dark p-10 text-white text-center">
                        <div class="float-left">
                           <h5>                               
                               <i class="mdi mdi-trophy-variant m-b-5 font-16"></i>                      
                               Poin
                           </h5>
                       </div>
                       <div class="float-right">                           
                            <h5><?php echo $agen->poin ?></h5>                           
                       </div><p></p><br>
                    </div>
                </div>
                 
            </div>
         </div>
     
    </div>
    <div class="row">
        <div class="col-md-12">
            
            <div class="card">
                <div class="card-body">
                    <h4>Sistem Poin dan Rewards Juragan Rumah</h4>
                    <ul class="list-group">
                      <li class="list-group-item list-group-item-success"><h5><i class="fas fa-star"></i> Rekrut Agen dapat 5 Poin</h5></li>
                      <li class="list-group-item list-group-item-success"><h5><i class="fas fa-star"></i> Rekrut Agen Premium dapat 10 Poin</h5></li>
                      <li class="list-group-item list-group-item-success"><h5><i class="fas fa-star"></i> Melakukan Penjualan dapat 50 Poin</h5></li>                      
                    </ul><br>
                     <div class="card card-hover">
                        <div class="box bg-info">
                            <h4 class="text-white">Sistem Ngebut Juragan</h4>
                            <h5 class="font-light text-white text-justify">
                                 Agen berhak mendapatkan hadiah 1 Unit Smartphone seharga mulai dari Rp. 1.200.000,- jika terhitung 1 Minggu pertama dari pendaftaran Agen dapat mengumpulkan poin 150.
                            </h5>
                        </div>
                    </div>
                    <div class="card card-hover">
                        <div class="box bg-warning">
                            <h4 class="text-white">Sistem Gerbong Juragan</h4>
                            <h5 class="font-light text-white text-justify">
                                Agen berhak mendapatkan hadiah 1 Unit Smartphone seharga mulai dari Rp. 1.800.000,- jika terhitung 1 Bulan pertama dari pendaftaran Agen dapat mengumpulkan poin 200.
                            </h5>
                        </div>
                    </div>     
                    <hr>  
                    <h4>Banjir Hadiah jadi Agen Juragan Rumah</h4>
                    <ul class="list-group text-justify">
                      <li class="list-group-item list-group-item-info"><h5><i class="fas fa-star"></i> Bila omset dalam 6 bulan berhasil >50 M mendapatkan Rumah Komersil min 1,5 M (kuota 1 rumah)</h5></li>
                      <li class="list-group-item list-group-item-info"><h5><i class="fas fa-star"></i> Bila omset dalam 6 bulan 40 M mendapatkan Rumah 1 M (kuota 2 rumah)</h5></li>
                      <li class="list-group-item list-group-item-info"><h5><i class="fas fa-star"></i> Bila omset dalam 30 M mendapatkan Apartemen 600jt (kuota 4 apartement)</h5></li>
                      <li class="list-group-item list-group-item-info"><h5><i class="fas fa-star"></i> Bila omset 20 M mendapatkan mobil 300 jt (kuota 7)</h5></li>
                      <li class="list-group-item list-group-item-info"><h5><i class="fas fa-star"></i> Bila omset 10 M mendapatkan Haji (kuota 10 pasang)</h5></li>
                      <li class="list-group-item list-group-item-info"><h5><i class="fas fa-star"></i> Bila omset 5 M mendapatkan umroh (kuota 20 pasang)</h5></li>                                        
                    </ul><br>
                </div>
                </div>
        
        </div>
    </div>
    
</div>            
<script>
     function copyToClipboard(element) {
        var $temp = $("<input>");
        $("body").append($temp);
        $temp.val($(element).text()).select();
        document.execCommand("copy");
        $temp.remove();
        toastr.success('Alamat URL disalin', 'Berhasil');        
    }
</script>