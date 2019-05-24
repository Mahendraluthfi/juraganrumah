<div class="page-head"> 
    <div class="container">
        <div class="row">
            <div class="page-head-content">
                <h1 class="page-title">Reset Password </h1>               
            </div>
        </div>
    </div>
</div>
    <!-- End page header -->
    <!-- register-area -->
<div class="register-area" style="background-color: rgb(249, 249, 249);">
    <div class="container">
        <div class="col-md-3"></div>
        <div class="col-md-6">
            <div class="box-for overflow">                         
                <div class="col-md-12 col-xs-12 login-blocks">
                    <h2>Reset Password</h2>                    
                    <p style="color: red"><?php echo $this->session->flashdata('msg'); ?></p> 
                    <?php echo form_open('signin/submit_new'); ?>
                        <div class="form-group">
                            <label for="email">Password Baru</label>
                            <input type="password" class="form-control" name="pass" required="">
                        </div>                   
                        <div class="form-group">
                            <label for="email">Ulangi Password Baru</label>
                            <input type="password" class="form-control" name="pass1" required="">
                            <input type="hidden" name="id" value="<?php echo $this->uri->segment(3) ?>">                            
                        </div>                       
                        <div class="text-center">
                            <button type="submit" class="btn btn-default"> Reset Password</button>
                        </div>
                    </form>                     
                </div>
            </div>
        </div>
        <div class="col-md-3"></div>
    </div>
</div>      



