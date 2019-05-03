
        <div class="content-area error-page" style="background-color: #FCFCFC; padding-bottom: 55px;">
            <div class="container">
                <div class="row">
                    <div class="col-md-10 col-md-offset-1 col-sm-12 text-center page-title">
                        <br>
                        <br>
                        <br>
                        <br>
                        <h2 class="text-success">Success</h2>
                        <p><?=$this->session->flashdata('sukses')?></p>
                        <a href="<?php echo site_url() ?>home" class="btn btn-default">Beranda</a>                        
                    </div>
                </div> 
            </div>
        </div> 
        <?php $this->session->unset_userdata('janji_survei'); ?>
        <?php $this->session->unset_userdata('ses_shop'); ?>