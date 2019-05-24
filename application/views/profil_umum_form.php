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
                    <div class="col-sm-10 col-sm-offset-1 profiel-container">
                        <form action="<?php echo site_url() ?>profile_buyer/profil_umum" method="post" enctype="multipart/form-data">
                            <div class="profiel-header">
                                <h3 id="demoFont">
                                     Update Informasi Umum<br>
                                    <small>Informasi ini akan membantu kami untuk lebih mengenal anda :)</small>
                                </h3>
                            </div>
                            <div class="clear">
                                <div class="col-sm-3 col-sm-offset-1">
                                    <div class="picture-container">
                                        <div class="picture">
                                            <?php foreach($foto_buyer as $su){
                                             if(!$su->file){?>
                                                <img src="<?php echo base_url();?>assets/img/avatar.png" class="picture-src" id="wizardPicturePreview" title=""/>
                                            <?php }else{ ?>
                                                <img src="<?php echo base_url();?>/assets/fotobuyer/<?php echo $su->file; ?>" class="picture-src" id="wizardPicturePreview" title=""/>
                                           <?php } } ?>
                                            <input type="file" name="foto" id="wizard-picture">
                                        </div>
                                        <h6 id="demoFont1">Pilih Gambar</h6>
                                    </div>
                                </div>
                                <div class="col-sm-3 padding-top-25">
                                    <div class="form-group">
                                        <label id="demoFont1">Nama Pertama</label>
                                        <input name="firstname" type="text" value="<?php foreach($foto_buyer as $su){echo $su->nama_buyer; }?>" class="form-control" required="required">
                                    </div>
                                    <div class="form-group">
                                        <label id="demoFont1">Tempat Lahir</label>
                                        <input name="tempatlahir" type="text" class="form-control" value="<?php foreach($foto_buyer as $su){echo $su->tempat_lahir; }?>" required="required">
                                    </div> 
                                    <div class="form-group">
                                        <label id="demoFont1">Nama Belakang</label>
                                        <input name="lastname" type="text" class="form-control" value="<?php foreach($foto_buyer as $su){echo $su->nama_buyer; }?>" required="required">
                                    </div>
                                    <div class="form-group">
                                        <label id="demoFont1">Tanggal Lahir</label>
                                        <input type="date" name="tanggallahir" value="<?php foreach($foto_buyer as $su){echo $su->tgl_lahir; }?>" class="form-control" required="required">
                                    </div> 
                                    <div class="form-group">
                                        <label id="demoFont1">No KTP</label>
                                        <input name="ktp" type="text" class="form-control" value="<?php foreach($foto_buyer as $su){echo $su->ktp; }?>" required="required">
                                    </div>
                                </div>
                                <div class="col-sm-3 padding-top-25">
                                     <div class="form-group1">
                                       <div class="form-group">
                                        <label id="demoFont1">Alamat</label>
                                        <input type="alamat" name="alamat" class="form-control" value="<?php foreach($foto_buyer as $su){echo $su->alamat; }?>" required="required">
                                    </div>
                                    </div>
                                    <div class="form-group">
                                        <label id="demoFont1"> Kecamatan</label>
                                        <input name="kecamatan" type="text" class="form-control" value="<?php foreach($foto_buyer as $su){echo $su->kecamatan; }?>" required="required">
                                    </div>
                                    <div class="form-group">
                                        <label id="demoFont1">Kabupaten</label>
                                        <input name="kabupaten" type="text" class="form-control"  value="<?php foreach($foto_buyer as $su){echo $su->kabkot; }?>"required="required">
                                    </div>
                                     <div class="form-group">
                                        <label id="demoFont1">Propinsi</label>
                                        <input name="propinsi" type="text" class="form-control" value="<?php foreach($foto_buyer as $su){echo $su->provinsi; }?>" required="required">
                                    </div>
                                </div>                                     
                                </div>
                                <div class="col-sm-5 col-sm-offset-1">
                                <br>
                                <button type='submit' class='btn border-btn' name='finish' >Update Profil</button>
                                <button class='btn border-btn' ><a href="<?php echo base_url(); ?>profile_buyer">Kembali</a></button>
                            </div>
                            <br>
                    </form>
                </div>             
            </div>
        </div>
     </div>