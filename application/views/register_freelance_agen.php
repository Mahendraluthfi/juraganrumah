        <div class="page-head"> 
            <div class="container">
                <div class="row">
                    <div class="page-head-content">
                        <h1 class="page-title">Registrasi Freelance Agen</h1>               
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
                            <h2>Registrasi Freelance Agen Baru : </h2>
                            <p style="color: green"><?=$this->session->flashdata('sukses')?></p> 
                            <p style="color: red"><?=$this->session->flashdata('gagal')?></p>
                            <?php echo form_open_multipart('register_freelance_agen/save'); ?>
                                <div class="form-group">
                                    <label for="nama_mitra">Nama</label>
                                    <input type="text" name="nama_freelance" class="form-control" id="nama_mitra" placeholder="Nama Lengkap" required="required">
                                </div>
                                <div class="form-group">
                                    <label for="nik_ktp">NIK KTP</label>
                                    <input type="number" name="nik_ktp" class="form-control" id="nik_ktp" placeholder="NIK Ktp" required="required">
                                </div>
                                <div class="form-group">
                                    <label for="username">Username</label>
                                    <input type="text" name="username" class="form-control" id="username" placeholder="Username" required="required">
                                </div>
                                <div class="form-group">
                                    <label for="email_mitra">Email</label>
                                    <input type="email" name="email_freelance" class="form-control" id="email_freelance" placeholder="Nama email" required="required">
                                    <span id="see_email"></span>
                                </div>
                                <div class="form-group">
                                    <label for="nomorwa">Nomor Whatsapp</label>
                                    <input type="nomor" name="nomorwa" class="form-control" id="nomorwa" placeholder="Nomor Whatsapp" required="required">
                                </div> 
                                <div class="form-group">
                                    <label for="project">Nama Project</label>
                                    <input type="text" name="project" class="form-control" id="project" placeholder="Nama Project" required="required">
                                </div>             
                                <div class="form-group">
                                    <label for="alamat">Alamat Project</label>
                                    <div class="form-group">
                                    <select name="provinsi" id="prov" class="select2 form-control custom-select" style="width: 100%;" required="required">
                                        <option value="" selected="Provinsi">Provinsi</option>
                                        <?php foreach ($prov as $dprov) { ?>                          
                                        <option value="<?php echo $dprov->id_prov ?>"><?php echo $dprov->nama_prov ?></option>
                                        <?php } ?>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <select name="kabkot" id="kabkot" class="kabkot select2 form-control custom-select" style="width: 100%;" required="required">
                                                <option value="" selected="Kota / Kab">Kota / Kab</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <select name="kecamatan" id="kec" class="kec select2 form-control custom-select" style="width: 100%;" required="required">
                                        <option value="" selected="Kecamatan">Kecamatan</option>
                                    </select>
                                </div>                 
                                    <textarea class="form-control" id="alamat" name="alamat" placeholder="Alamat Projek"></textarea>
                                </div>
                                <div class="form-group">
                                    <label for="profil">Profil Freelance Agen</label>
                                    <hr>
                                    <div class="form-group">
                                        <input type="file" name="fotoktp" class="form-control" id="ktp_gambar" required="required">
                                        <span class="help-block">Upload foto KTP</span>  
                                    </div>                                  
                                </div>
                                <div class="form-group">
                                    <label for="komisi">Atur Komisi (Min 1%)</label>
                                    <input class="form-control" type="number" name="komisi" list="komisi" required="required" min="1" max="100">
                                    <datalist id="komisi">
                                      <option value="1">
                                    </datalist>
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
                                    <button type="submit" class="btn border-btn" id="btnreg" disabled>Register</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="col-md-3"></div>
            </div>
        </div>      

