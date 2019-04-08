<div class="card">
    <div class="card-body wizard-content">
        <h4 class="card-title">Harap lengkapi profil Anda</h4>
        <h6 class="card-subtitle"></h6>
        <!-- <form id="example-form" action="#" class="m-t-40"> -->
            <?php echo form_open('agen/profil/completly', array('id' => 'example-form', 'class' => 'm-t-40')); ?>
            <div>
                <h3>Account</h3>
                <section>
                    <label for="userName">Username *</label>
                    <input name="username" type="text" class="required form-control" value="<?php echo $row->username ?>">
                    <label for="password">Nama Lengkap *</label>
                    <input name="nama" type="text" class="required form-control" value="<?php echo $row->nama_agen ?>">
                    <label for="confirm">Email *</label>
                    <input name="email" type="text" class="required email form-control" value="<?php echo $row->email ?>">
                    <!-- <p>(*) Mandatory</p> -->
                </section>
                <h3>Profile</h3>
                <section>
                    <label for="confirm">No KTP *</label>
                    <input name="noktp" type="text" class="required form-control" value="<?php echo $row->ktp ?>">
                    <label for="confirm">No Whatsapp *</label>
                    <input name="wa" type="text" class="required form-control" value="<?php echo $row->nomor_wa ?>">
                    <label for="name">Provinsi *</label>
                    <select name="prov" id="prov" class="required select2 form-control custom-select" style="width: 100%; height:36px;">
                       <option value="0" selected="">--Pilih--</option>
                    <?php foreach ($prov as $dprov) { ?>                          
                        <option value="<?php echo $dprov->id_prov ?>" <?php if($row->provinsi == $dprov->id_prov){ echo "selected=''";} ?>><?php echo $dprov->nama_prov ?></option>
                    <?php } ?>
                    </select>
                    <label for="surname">Kabupaten/Kota *</label>
                    <select name="kabkot" id="kabkot" class="required select2 form-control custom-select" style="width: 100%; height:36px;">                    
                        <?php if ($row->kabkot !== "") {
                            echo "<option value='".$row->kabkot."'>".$row->kabkot."</option>";
                        } ?>                             
                    </select>
                    <label for="email">Alamat</label>
                    <textarea class="form-control" name="alamat"><?php echo $row->alamat; ?></textarea>
                </section>
                <h3>Info Rekening</h3>
                <section>
                    <label for="name">Nama Bank</label>
                    <input name="bank" type="text" class="form-control">
                    <label for="surname">No Rekening</label>
                    <input name="rekening" type="text" class="form-control">
                    <label for="email">Atas Nama</label>
                    <input name="atasnama" type="text" class="form-control">                    
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

<script>
    $(document).ready(function(){
      $('#prov').change(function(){
      var id=$(this).val();
        $.ajax({
        url : "<?php echo site_url();?>index.php/agen/profil/get_kabkot",
        method : "POST",
        data : {id: id},
        async : false,
        dataType : 'json',
        success: function(data){
          var html = '';
          var i;
          html += '<option value="0">-- Pilih --</option>';                    
          for(i=0; i<data.length; i++){
              html += '<option value="'+data[i].nama_kabkot+'">'+data[i].nama_kabkot+'</option>';
          }
          $('#kabkot').html(html);                      
          // $('#kabkot').trigger('change');                        
        }
      });
    });
  });
</script>