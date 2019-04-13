

        <div class="page-head"> 
            <div class="container">
                <div class="row">
                    <div class="page-head-content">
                        <h1 class="page-title">Registrasi Mitra Pro</h1>               
                    </div>
                </div>
            </div>
        </div>
        <!-- End page header -->
 
        <!-- register-area -->
        <div class="register-area">
            <div class="container">
            <div class="col-md-3"></div>
                <div class="col-md-6">
                    <div class="box-for overflow">
                        <div class="col-md-12 col-xs-12 register-blocks text-center">
                            <h2><img style="width:15%" src="<?php echo base_url() ?>assets/img/juragan_rumah_logo.png" >&nbsp;&nbsp;Registrasi PRO Mitra </h2>
                        </div>
                        <div class="col-md-12 col-xs-12 register-blocks ">
                            <p style="color: green"><?=$this->session->flashdata('sukses')?></p> 
                            <p style="color: red"><?=$this->session->flashdata('gagal')?></p>
                            
                            <form action="<?php echo site_url() ?>register_mitra/savepro" method="post">
                                <div class="form-group">
                                    <label for="nama_mitra">Nama</label>
                                    <input type="text" name="nama_mitra" class="form-control" id="nama_mitra" placeholder="Nama Lengkap" required="required">
                                </div>
                                <div class="form-group">
                                    <label for="nik_ktp">NIK KTP</label>
                                    <input type="number" name="nik_ktp" class="form-control" id="nik_ktp" placeholder="NIK Ktp" required="required">
                                </div>
                                <div class="form-group">
                                    <label for="nama_perusahaan">Nama Perusahaan</label>
                                    <input type="text" name="nama_perusahaan" class="form-control" id="nama_perusahaan" placeholder="Nama Perusahaan" required="required">
                                </div>
                                <div class="form-group">
                                    <label for="email_mitra">Email</label>
                                    <input type="email" name="email_mitra" class="form-control" id="email_mitra" placeholder="Nama email" required="required">
                                    <span id="see_email"></span>
                                </div>
                                <div class="form-group">
                                    <label for="nomorwa">Nomor Whatsapp</label>
                                    <input type="nomor" name="nomorwa" class="form-control" id="nomorwa" placeholder="Nama Whatsapp" required="required">
                                </div> 
                                <div class="form-group">
                                    <label for="project">Nama Project</label>
                                    <input type="text" name="project" class="form-control" id="project" placeholder="Nama Project" required="required">
                                </div>             
                                <div class="form-group">
                                    <label for="alamat">Alamat Project</label>
                                    <div class="form-group">
                                    <select name="provinsi" id="prov" class=" form-control" style="width: 100%;" required="required">
                                        <option value="" selected="Provinsi">Provinsi</option>
                                        <?php foreach ($prov as $dprov) { ?>                          
                                        <option value="<?php echo $dprov->id_prov ?>"><?php echo $dprov->nama_prov ?></option>
                                        <?php } ?>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <select name="kabkot" id="kabkot" class="kabkot form-control" style="width: 100%;" required="required">
                                                <option value="" selected="Kota / Kab">Kota / Kab</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <select name="kecamatan" id="kec" class="kec form-control" style="width: 100%;" required="required">
                                        <option value="" selected="Kecamatan">Kecamatan</option>
                                    </select>
                                </div>                 
                                    <textarea class="form-control" id="alamat" name="alamat" placeholder="Alamat"></textarea>
                                    <span class="help-block">Alamat</span>
                                </div>
                                <div class="form-group">
                                    <label for="profil">Profil Perusahaan</label>
                                    <div class="form-group">
                                        <input type="file" name="ktp_gambar" class="form-control" id="ktp_gambar" required="required">
                                        <span class="help-block">Upload foto KTP</span>  
                                    </div>
                                    <div class="form-group">
                                        <input type="file" name="logo_gambar" class="form-control" id="logo_gambar" required="required">
                                        <span class="help-block">Upload gambar Logo</span>
                                    </div>
                                    <textarea class="form-control" id="profil" name="profil" placeholder="Profil Perusahaan"></textarea>
                                    <span class="help-block">Profil Perusahaan</span>
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
                                <div class="form-group">
                                <span class="help-block">
                                    <input type="checkbox" name="" class="form-control" id="" required="required">&nbsp;&nbsp;
                                    Saya mengonfirmasi bahwa semua detail akurat. Saya mengerti bahwa &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;dengan mengklik tombol di bawah ini formulir aplikasi saya akan diserahkan &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;ke juraganrumah.net untuk evaluasi</span>
                                </div>
                                <div class="text-center">   
                                    <button type="submit" class="btn btn-default" id="btnreg" disabled>Proses ke pembayaran</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>

                <div class="col-md-3"></div>

            </div>
        </div>      
