<!-- boy-sale area -->        
	<div class="boy-sale-area">            
		<div class="container">                
			<div class="row">                            <!-- fORM JANJI SERVEI-->                        
				<div class="register-area" style="background-color: rgb(249, 249, 249);">                            
					<div class="container">                            
						<div class="col-md-12 col-xs-12 register-blocks ">                                
							<div class="col-md-12 col-xs-12 register-blocks text-center">                                    
								<h2 style="color:grey" ><img style="width:15%" src="<?php echo base_url() ?>assets/img/juragan_rumah_logo.png" >&nbsp;&nbsp;REGISTER AGEN </h2>                                      
								<p style="color: green"><?=$this->session->flashdata('sukses')?></p>
							</div>                                
							<form action="<?php echo site_url(); ?>register_agen/save" method="post">
								<div class="col-md-3"></div>
								<div class="col-md-6">
									<div class="form-group">
										<label style="color:grey" for="nama_agen">Nama Lengkap</label>
										<input type="text" name="nama_agen" class="form-control" id="nama_agen" required="required">
									</div>
									<div class="form-group">
										<label style="color:grey" for="email_agen">Alamat Email</label>
										<input type="email"  name="email" class="form-control" id="email_agen" required="required">
										<span id="see_email"></span>
									</div>
									<div class="form-group">
										<label style="color:grey" for="username_agen">Username</label>
										<input type="text" name="username" class="form-control" id="username_agen" required="required">
										<span id="see_username"></span>
									</div>
									<div class="form-group">
										<span class="help-block">
											<div class="text-danger">
												<b>PERHATIAN!!!</b>
											</div>
										Ini bukanlah investasi cepat kaya tanpa usaha, semua hasil pendapatan Agen akan kembali kepada komitmen dan konsisten masing-masing Agen dalam usahanya masing-masing. Faktanya, tidak ada yang namanya kegagalan ketika Anda mencoba hal baru, yang ada hanyalah Sukses dan Keinginan untuk belajar! Namun sudah dipastikan bahwa Anda akan langsung Gagal ketika tidak berani membuat keputusan.
										</span>
									</div>
									<div class="text-center">
										<button type="submit" class="btn btn-default">Kirimkan</button>
									</div>
								</form>
						<div class="col-md-3"></div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
</div>

<script>
	
</script>