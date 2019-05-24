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
                        <form action="<?php echo site_url() ?>profile_buyer/profil_bank" method="post">
                            <div class="profiel-header">
                                <h3 id="demoFont">
                                     Update Informasi Bank<br>
                                    <small>Informasi ini akan membantu kami untuk lebih mengenal anda :)</small>
                                </h3>
                            </div>
                            <div class="clear">
                                <div class="col-sm-3 col-sm-offset-1">
                                </div>
                                <div class="col-sm-3 padding-top-25">
                                    <div class="form-group">
                                        <label  id="demoFont1">A.n Rekening</label>
                                        <input name="namarekening" type="text" class="form-control" value="<?php foreach($foto_buyer as $su){echo $su->atas_nama; }?>" required="required">
                                    </div>
                                    <div class="form-group"> 
                                        <label  id="demoFont1">Nama Bank </label>
                                        <input name="bank" type="text" name="bank" class="form-control" value="<?php foreach($foto_buyer as $su){echo $su->nama_bank; }?>" required="required">
                                    </div>
                                </div>
                                <div class="col-sm-3 padding-top-25">
                                    <div class="form-group">
                                        <label id="demoFont1">No Rekening</label>
                                        <input name="norekening" type="number" class="form-control" value="<?php foreach($foto_buyer as $su){echo $su->no_rekening; }?>" required="required">
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