<div class="page-head"> 
    <div class="container">
        <div class="row">
            <div class="page-head-content">
                <h1 class="page-title">Beranda Akun Masuk </h1>               
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
                    <h2>Masuk : </h2>
                    <p style="color: red"><?=$this->session->flashdata('msg')?></p> 
                    <form action="<?php echo site_url().'signin/auth'?>" method="post">
                        <div class="form-group">
                            <label for="email">Email</label>
                            <input type="text" class="form-control" name="email" id="email">
                        </div>
                        <div class="form-group">
                            <label for="password">Password</label>
                            <input type="password" class="form-control" name="password" id="password">
                        </div>
                        <div class="text-center">
                            <button type="submit" class="btn btn-default"> Log in</button>
                        </div>
                    </form>
                    <br>
                    <h2>Login sosial:  </h2> 
                    <p>
                    <a class="login-social" href="#"><i class="fa fa-facebook"></i>&nbsp;Facebook</a> 
                    <a class="login-social" href="#"><i class="fa fa-google-plus"></i>&nbsp;Gmail</a>
                    </p> 
                     <p>
                    <a href="<?php echo base_url('signin/forgot') ?>">Lupa Password?</a> 
                    </p> 
                </div>
            </div>
        </div>
        <div class="col-md-3"></div>
    </div>
</div>      



