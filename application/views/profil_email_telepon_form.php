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

                        <form action="<?php echo site_url() ?>profile_buyer/profil_email_telepon" method="post">
                            <div class="profiel-header">
                                <h3 id="demoFont">
                                     Update Informasi Email dan Telepon<br>
                                    <small>Informasi ini akan membantu kami untuk lebih mengenal anda :)</small>
                                </h3>
                            </div>
                            <div class="clear">
                                <div class="col-sm-3 col-sm-offset-1">
                                </div>
                                <div class="col-sm-3 padding-top-25">
                                    <div class="form-group">
                                        <label id="demoFont1">Email</label>
                                        <input name="email" type="email" class="form-control"value="<?php foreach($foto_buyer as $su){echo $su->email_buyer; }?>">
                                    </div> 
                                </div>
                                <div class="col-sm-3 padding-top-25">
                                    <div class="form-group">
                                        <label id="demoFont1">No Whatsapp </label>
                                        <input type="nowhatsapp" name="nowhatsapp" value="<?php foreach($foto_buyer as $su){echo $su->telepon; }?>"  class="form-control" required="required">
                                    </div>                                     
                                </div>
                            </div>  
                            <div class="col-sm-5 col-sm-offset-1">
                            <br>
                                <button type='submit' class='btn border-btn' name='finish' >Updates</button>
                                <button class='btn border-btn' ><a href="<?php echo base_url(); ?>profile_buyer">Kembali</a></button>
                            </div>
                            <br>
                    </form>
                </div>           
            </div>
        </div>
        </div>