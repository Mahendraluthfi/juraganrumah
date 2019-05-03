



        <div class="page-head"> 

            <div class="container">

                <div class="row">

                    <div class="page-head-content">

                        <h1 class="page-title">Beranda Akun baru</h1>               

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

                        <div class="col-md-12 col-xs-12 register-blocks">

                            <h2>Akun baru : </h2>

                            <p style="color: green"><?=$this->session->flashdata('sukses')?></p> 

                            <p style="color: red"><?=$this->session->flashdata('gagal')?></p> 

                            <form action="<?php echo site_url().'register_buyer/save'?>" method="post">

                                <div class="form-group">

                                    <label for="nama_buyer">Name</label>

                                    <input type="text" name="nama_buyer" class="form-control" id="name" required="required">

                                </div>

                                <div class="form-group">

                                    <label for="email_buyer">Email</label>

                                    <input type="email" name="email_buyer" class="form-control" id="email_buyer" required="required">

                                    <span id="see_email"></span>

                                </div>

                                <div class="form-group">

                                    <label for="password">Password</label>

                                    <input type="password" name="password" class="form-control" id="password" type="password" required="required">

                                </div>

                                <div class="form-group">

                                    <label for="password">Konfirmasi Password</label>

                                    <input type="password" name="password" class="form-control" id="confirm_password" required="required">

                                    <span id='message'></span>

                                </div>

                                <div class="text-center">   

                                    <button type="submit" class="btn btn-default" id="btnreg" disabled>Register</button>

                                </div>

                            </form>

                        </div>

                    </div>

                </div>



                <div class="col-md-3"></div>



            </div>

        </div>      

