       <div class="page-head"> 
            <div class="container">
                <div class="row">
                    <div class="page-head-content">
                        <h1 id="demoFont" style="color:white" class="page-title">Selamat Datang <span class="strong"><?php foreach($foto_buyer as $su){echo $su->nama_buyer; } ?></span></h1>               
                    </div>
                </div>
            </div>
        </div>
        <!-- End page header --> 

        <!-- profile area -->
        <div class="content-area user-profiel" style="background-color: #FCFCFC;">&nbsp;
            <div class="container">   
                <div class="row">
                    <div class="col-sm-10 col-sm-offset-1">
                        <h2 id="demoFont" class="text-center">Informasi Umum</h2>
                    </div>
                    <div class="col-sm-10 col-sm-offset-1 profiel-container">
                        <form>
                                <div class="col-sm-3 col-sm-offset-1">
                                    <div class="picture-container">
                                        <div class="picture">
                                            <?php foreach($foto_buyer as $su){
                                             if(!$su->file){?>
                                                <img src="<?php echo base_url();?>assets/img/avatar.png" class="picture-src" id="wizardPicturePreview" title=""/>
                                            <?php }else{ ?>
                                                <img src="<?php echo base_url();?>/assets/fotobuyer/<?php echo $su->file; ?>" class="picture-src" id="wizardPicturePreview" title=""/>
                                           <?php } } ?>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-3 padding-top-25">
                                    <div class="form-group">
                                        <label id="demoFont1">Nama</label>
                                        <p><?php foreach($foto_buyer as $su){echo $su->nama_buyer; } ?></p>
                                    </div>
                                    <div class="form-group">
                                        <label id="demoFont1">Tempat Lahir</label>
                                        <p><?php foreach($foto_buyer as $su){echo $su->tempat_lahir; } ?></p>
                                    </div> 
                                    <div class="form-group">
                                        <label id="demoFont1">No KTP </label>
                                        <p><?php foreach($foto_buyer as $su){echo $su->ktp ; } ?></p>
                                    </div> 
                                    <div class="form-group">
                                        <label id="demoFont1">Alamat </label>
                                        <p><?php foreach($foto_buyer as $su){echo $su->alamat; } ?></p>
                                    </div>
                                </div>
                                <div class="col-sm-3 padding-top-25">
                                    <div class="form-group">
                                        <label id="demoFont1">Tanggal Lahir</label>
                                        <p><?php foreach($foto_buyer as $su){echo $su->tgl_lahir; } ?></p>
                                    </div> 
                                    <div class="form-group">
                                        <label id="demoFont1"> Kecamatan</label>
                                        <p><?php foreach($foto_buyer as $su){echo $su->kecamatan; } ?></p>
                                    </div>
                                    <div class="form-group">
                                        <label id="demoFont1">Kabupaten</label>
                                        <p><?php foreach($foto_buyer as $su){echo $su->kabkot; } ?></p>
                                    </div>
                                     <div class="form-group">
                                        <label id="demoFont1">Propinsi</label>
                                        <p><?php foreach($foto_buyer as $su){echo $su->provinsi; } ?></p>
                                    </div>                                  
                                </div>
                            </form>
                            <div class="col-sm-5 text-right">
                                <br>
                                <a href="<?php base_url() ?>Profile_buyer/profil_umum_view" type='submit' class='border-btn' name='finish' >Edit</a>
                            </div>
                         </div>  
                     </div>
                     <br>
                     <div class="row">
                        <div class="col-sm-10 col-sm-offset-1">
                            <h2 id="demoFont" class="text-center">Informasi Bank</h2>
                        </div>
                    <div class="col-sm-10 col-sm-offset-1 profiel-container">
                        <form>
                                <div class="col-sm-3 col-sm-offset-1">
                                </div>
                                <div class="col-sm-3 padding-top-25">
                                    <div class="form-group">
                                        <label id="demoFont1">A.n Rekening </label>
                                        <p><?php foreach($foto_buyer as $su){echo $su->atas_nama; } ?></p>
                                    </div>
                                    <div class="form-group"> 
                                        <label id="demoFont1">Nama Bank</label>
                                        <p><?php foreach($foto_buyer as $su){echo $su->nama_bank; } ?></p>
                                    </div>  
                                </div>
                                <div class="col-sm-3 padding-top-25">
                                     <div class="form-group">
                                        <label id="demoFont1">No Rekening</label>
                                        <p><?php foreach($foto_buyer as $su){echo $su->no_rekening; } ?></p>
                                    </div>
                                                                      
                                </div>
                            </form>
                           <div class="col-sm-5 text-right">
                                <br>
                                <a href="<?php base_url() ?>Profile_buyer/profil_bank_view" type='submit' class='border-btn' name='finish' >Edit</a>
                            </div>
                         </div>  
                     </div>
                     <br>
                      <div class="row">
                        <div class="col-sm-10 col-sm-offset-1">
                            <h2 id="demoFont" class="text-center">E-mail dan Telepon</h2>
                        </div>
                    <div class="col-sm-10 col-sm-offset-1 profiel-container">
                        <form>
                                <div class="col-sm-3 col-sm-offset-1">
                                </div>
                                <div class="col-sm-3 padding-top-25">
                                    <div class="form-group">
                                        <label id="demoFont1">Email</label>
                                        <p><?php foreach($foto_buyer as $su){echo $su->email_buyer; } ?></p>
                                    </div>   
                                </div>
                                <div class="col-sm-3 padding-top-25">
                                    <div class="form-group">
                                        <label id="demoFont1">No Whatsapp</label>
                                        <p><?php foreach($foto_buyer as $su){echo $su->telepon; } ?></p>
                                    </div>              
                                </div>
                            </form>
                            <div class="col-sm-5 text-right">
                                <br>
                               <a href="<?php base_url() ?>Profile_buyer/profil_email_telepon_view" type='submit' class='border-btn' name='finish' >Edit</a>
                            </div>
                         </div>  
                     </div>

                </div>
                </div>