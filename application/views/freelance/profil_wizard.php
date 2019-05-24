<div class="card">
    <div class="card-body wizard-content">
        <h4 class="card-title">Edit Profil</h4>
        <h6 class="card-subtitle"></h6>
        <!-- <form id="example-form" action="#" class="m-t-40"> -->
            <?php echo form_open_multipart('freelance/profil/submit', array('id' => 'example-form', 'class' => 'm-t-40')); ?>
            <div>
                <h3>Personal Info</h3>
                <section>
                    <label for="password">Nama Lengkap *</label>
                    <input name="nama" type="text" class="required form-control" value="<?php echo $row->nama_freelance ?>">
                    <input name="id_mitra" type="hidden" value="<?php echo $row->id_freelance ?>">
                    <label for="confirm">No KTP *</label>
                    <input name="noktp" type="text" class="required form-control" value="<?php echo $row->nik_ktp ?>">
                    <label for="confirm">Foto KTP</label><p></p>
                    <img src="<?php echo base_url('assets/backend/fotofreelance/'.$row->file_ktp) ?>" height="100"><p></p>
                    <input type="file" name="fotoktp"><p></p>
                    <label for="confirm">No Whatsapp *</label>
                    <input name="wa" type="text" class="required form-control" value="<?php echo $row->telepon ?>">
                    <label for="confirm">Email *</label>
                    <input name="email" type="text" class="required email form-control" value="<?php echo $row->email ?>">
                    <label for="email">Alamat</label>
                    <textarea class="form-control" name="alamat"><?php echo $row->alamat; ?></textarea>
                    <!-- <p>(*) Mandatory</p> -->
                </section>                
                <h3>Info Rekening</h3>
                <section>
                    <label for="name">Nama Bank</label>
                    <input name="bank" type="text" class="form-control" value="<?php echo $row->nama_bank ?>">
                    <label for="surname">No Rekening</label>
                    <input name="rekening" type="text" class="form-control" value="<?php echo $row->no_rekening ?>">
                    <label for="email">Atas Nama</label>
                    <input name="atasnama" type="text" class="form-control" value="<?php echo $row->atas_nama ?>">
                    <label for="email">Pilihan Komisi (dalam %)</label>
                    <input type="number" name="komisi" class="form-control" value="<?php echo $row->komisi ?>" min="1" max="100">
                </section>
                <!-- <h3>Finish</h3>
                <section>
                    <input id="acceptTerms" name="acceptTerms" type="checkbox" class="required">
                    <label for="acceptTerms">I agree with the Terms and Conditions.</label>
                </section> -->
            </div>
        </form>
    </div>
</div>             

