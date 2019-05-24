 <div class="page-breadcrumb">
    <div class="row">
        <div class="col-12 d-flex no-block align-items-center">
            <h4 class="page-title">Produk Anda</h4>
            <div class="ml-auto">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="<?php echo base_url('freelance') ?>">Dashboard</a></li>
                        <li class="breadcrumb-item"><a href="<?php echo base_url('freelance/produk') ?>">Produk</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Edit Produk</li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>
</div>

<div class="container-fluid">
    
    <div class="row">
        <div class="col-md-12">            
            <div class="card">
                <div class="card-body">
                    <div class="row">                        
                        <h4><?php echo $title; ?></h4>                    
                    </div>
                    <div class="row">
                        <div class="col-md-12">                            
                            <?php echo form_open('freelance/produk/submit_edit', array('class' => 'form-horizontal')); ?>
                                <div class="card-body">                                    
                                    <div class="form-group row">
                                        <label for="fname" class="col-sm-3 control-label col-form-label">Kode Produk</label>
                                        <div class="col-sm-9">
                                            <input type="text" name="kode_produk" class="form-control" placeholder="Kode Produk" readonly="" value="<?php echo $row->id_produk ?>">
                                            <input type="hidden" name="kode_produk" value="<?php echo $row->id_produk ?>">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="lname" class="col-sm-3 control-label col-form-label">Judul Post</label>
                                        <div class="col-sm-9">
                                            <input type="text" name="nama_produk" class="form-control" placeholder="Judul Post" required="" value="<?php echo $row->nama_produk ?>">
                                        </div>
                                    </div>
                                      <div class="form-group row">
                                        <label for="email1" class="col-sm-3 control-label col-form-label">Kategori Produk</label>
                                        <div class="col-sm-9">
                                            <select name="ktg" id="ktg" class="select2 form-control custom-select" style="width: 100%; height:36px;" required="">
                                               <option value="" selected="">--Pilih--</option>
                                            <?php foreach ($ktg as $dktg) { ?>                          
                                                <option value="<?php echo $dktg->id_category_produk ?>" <?php if($row->id_category_produk == $dktg->id_category_produk){ echo "selected"; } ?>><?php echo $dktg->nama_category." / ".$dktg->type_category ?></option>
                                            <?php } ?>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="lname" class="col-sm-3 control-label col-form-label">Harga Jual</label>
                                        <div class="col-sm-9">
                                            <input type="number" name="harga" class="form-control" placeholder="Harga" min="0" value="<?php echo $row->harga ?>">
                                        </div>
                                    </div>
                                     <div class="form-group row">
                                        <label for="lname" class="col-sm-3 control-label col-form-label">Harga Bawah</label>
                                        <div class="col-sm-9">
                                            <input type="number" name="harga_bawah" class="form-control" placeholder="Harga" min="0" value="<?php echo $row->harga_bawah ?>">
                                        </div>
                                    </div>
                                     <div class="form-group row">
                                        <label for="lname" class="col-sm-3 control-label col-form-label">Harga Promo</label>
                                        <div class="col-sm-9">
                                            <input type="number" name="harga_promo" class="form-control" placeholder="Harga" min="0" value="<?php echo $row->harga_promo ?>">
                                        </div>
                                    </div>
                                     <div class="form-group row">
                                        <label for="lname" class="col-sm-3 control-label col-form-label">Jumlah Unit</label>
                                        <div class="col-sm-9">
                                            <input type="number" name="unit" class="form-control" placeholder="Unit" min="0" value="<?php echo $row->unit ?>">
                                        </div>
                                    </div>
                                     <div class="form-group row">
                                            <label for="email1" class="col-sm-3 control-label col-form-label">Provinsi</label>
                                            <div class="col-sm-9">
                                                <select name="prov" id="prov" class="required select2 form-control custom-select" style="width: 100%; height:36px;">
                                                   <option value="0" selected="">--Pilih--</option>
                                                <?php foreach ($prov as $dprov) { ?>                          
                                                    <option value="<?php echo $dprov->id_prov ?>" <?php if($row->provinsi == $dprov->id_prov){ echo "selected"; } ?>><?php echo $dprov->nama_prov ?></option>
                                                <?php } ?>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="email1" class="col-sm-3 control-label col-form-label">Kab/Kota</label>
                                            <div class="col-sm-9">
                                                <select name="kabkot" id="kabkot" class="kabkot required select2 form-control custom-select" style="width: 100%; height:36px;">
                                                <option value="<?php echo $kabkot->id_kabkot ?>" selected=""><?php echo $kabkot->nama_kabkot ?></option>                                                
                                                </select>               
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="email1" class="col-sm-3 control-label col-form-label">Kecamatan</label>
                                            <div class="col-sm-9">
                                                <select name="kec" id="kec" class="kec required select2 form-control custom-select" style="width: 100%; height:36px;">
                                                <option value="<?php echo $kec->id_kec ?>" selected=""><?php echo $kec->nama_kec ?></option>                                                
                                                                                                
                                                </select>   
                                            </div>
                                        </div>                                         
                                        <div class="form-group row">
                                            <label for="lname" class="col-sm-3 control-label col-form-label">Alamat</label>
                                            <div class="col-sm-9">
                                                <textarea name="alamat" class="form-control" placeholder="Alamat"><?php echo $row->alamat ?></textarea>    
                                            </div>
                                        </div>
                                     <div class="form-group row">
                                        <label for="lname" class="col-sm-3 control-label col-form-label">Listrik / watt</label>
                                        <div class="col-sm-3">
                                            <input type="number" name="listrik" class="form-control" placeholder="Daya Listrik" min="0" value="<?php echo $row->watt_listrik ?>">
                                        </div>
                                        <label for="lname" class="col-sm-3 control-label col-form-label">Sertifikat</label>
                                        <div class="col-sm-3">
                                            <input type="text" name="sertifikat" class="form-control" placeholder="Sertifikat" value="<?php echo $row->sertifikat ?>">
                                        </div>
                                    </div>
                                     <div class="form-group row">
                                        <label for="lname" class="col-sm-3 control-label col-form-label">Jenis Air</label>
                                        <div class="col-sm-3">
                                            <input type="text" name="jenis_air" class="form-control" placeholder="Jenis Air" value="<?php echo $row->jenis_air ?>">
                                        </div>
                                        <label for="lname" class="col-sm-3 control-label col-form-label">Hadap Bangunan</label>
                                        <div class="col-sm-3">
                                            <select name="hadap" class="select2 form-control">
                                                <option value="Selatan" <?php if ($row->hadap == "Selatan") {echo "selected";} ?>>Selatan</option>                 
                                                <option value="Barat" <?php if ($row->hadap == "Barat") {echo "selected";} ?>>Barat</option>                 
                                                <option value="Utara" <?php if ($row->hadap == "Utara") {echo "selected";} ?>>Utara</option>                          
                                                <option value="Timur" <?php if ($row->hadap == "TImur") {echo "selected";} ?>>Timur</option>                                                
                                            </select>
                                        </div>
                                    </div>
                                     <div class="form-group row">
                                        <label for="lname" class="col-sm-3 control-label col-form-label">Kamar Tidur</label>
                                        <div class="col-sm-3">
                                            <input type="number" name="kamar_tidur" class="form-control" placeholder="Kamar Tidur" min="0" value="<?php echo $row->jumlah_kamar_tidur ?>">
                                        </div>
                                        <label for="lname" class="col-sm-3 control-label col-form-label">Kamar Mandi</label>
                                        <div class="col-sm-3">
                                            <input type="number" name="kamar_mandi" class="form-control" placeholder="Kamar Mandi" min="0" value="<?php echo $row->jumlah_kamar_mandi ?>">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="lname" class="col-sm-3 control-label col-form-label">Luas Tanah / m<sub>2</sub></label>
                                        <div class="col-sm-3">
                                            <input type="number" name="luas_tanah" class="form-control" placeholder="Luas Tanah" min="0" value="<?php echo $row->luas_tanah ?>">
                                        </div>
                                        <label for="lname" class="col-sm-3 control-label col-form-label">Luas Bangunan / m<sub>2</sub></label>
                                        <div class="col-sm-3">
                                            <input type="number" name="luas_bangunan" class="form-control" placeholder="Luas Bangunan" min="0" value="<?php echo $row->luas_bangunan ?>">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="lname" class="col-sm-3 control-label col-form-label">Furnished</label>
                                        <div class="col-sm-3">
                                            <select name="furnished" class="form-control">
                                                <option value="YA" <?php if ($row->furnished == "YA") {echo "selected";} ?>>YA</option>                           
                                                <option value="TIDAK" <?php if ($row->furnished == "TIDAK") {echo "selected";} ?>>TIDAK</option>            
                                            </select>
                                        </div>                                        
                                        <label for="lname" class="col-sm-3 control-label col-form-label">Jumlah Lantai</label>
                                        <div class="col-sm-3">
                                            <input type="number" class="form-control" name="jumlah_lantai" placeholder="Jumlah Lantai" min="0" value="<?php echo $row->jumlah_tingkat ?>">
                                        </div>                                        
                                    </div>                                    
                                    <div class="form-group row">
                                        <label for="lname" class="col-sm-3 control-label col-form-label">Hook / Pojok</label>
                                        <div class="col-sm-3">
                                            <select name="hook" class="form-control">
                                                <option value="YA" <?php if ($row->hook_pojok == "YA") {echo "selected";} ?>>YA</option>                           
                                                <option value="TIDAK" <?php if ($row->hook_pojok == "TIDAK") {echo "selected";} ?>>TIDAK</option>            
                                            </select>
                                        </div>                                        
                                        <label for="lname" class="col-sm-3 control-label col-form-label">Carport</label>
                                        <div class="col-sm-3">
                                            <select name="carport" class="form-control">
                                                <option value="YA" <?php if ($row->carport == "YA") {echo "selected";} ?>>YA</option>                           
                                                <option value="TIDAK" <?php if ($row->carport == "TIDAK") {echo "selected";} ?>>TIDAK</option>            
                                            </select>
                                        </div>                                        
                                    </div>
                                    <div class="form-group row">
                                        <label for="lname" class="col-sm-3 control-label col-form-label">Deskripsi</label>
                                        <div class="col-sm-9">
                                            <textarea name="deskripsi" class="form-control" placeholder="Deskripsi"><?php echo $row->description ?></textarea>
                                        </div>                                        
                                    </div>
                                    <div class="form-group row">
                                        <label for="lname" class="col-sm-3 control-label col-form-label">Status Post</label>
                                        <div class="col-sm-9">
                                            <select name="status" class="form-control">
                                                <option value="PUBLISH" <?php if ($row->status_post == "PUBLISH") {echo "selected";} ?>>PUBLISH</option>                           
                                                <option value="DRAFT" <?php if ($row->status_post == "DRAFT") {echo "selected";} ?>>DRAFT</option>            
                                            </select>
                                        </div>                                        
                                    </div>
                                </div>
                                <div class="border-top">
                                    <div class="card-body">
                                        <button type="submit" class="btn btn-primary">Submit</button>
                                    </div>
                                </div>
                            </form>                        
                        </div>
                    </div>
                </div>
            </div>        
        </div>
    </div>
    
</div>         

<script>
      $(document).ready(function(){
      $('#prov').change(function(){
      var id=$(this).val();
        $.ajax({
        url : "<?php echo site_url();?>index.php/freelance/produk/get_kabkot",
        method : "POST",
        data : {id: id},
        async : false,
        dataType : 'json',
        success: function(data){
          var html = '';
          var i;
          html += '<option value="0">-- Pilih --</option>';                    
          for(i=0; i<data.length; i++){
              html += '<option value="'+data[i].id_kabkot+'">'+data[i].nama_kabkot+'</option>';
          }
          $('#kabkot').html(html);                      
          // $('#kabkot').trigger('change');                        
        }
      });
    });
  });    

 $(document).ready(function(){
    $('.kabkot').change(function(){
        var id=$(this).val();
        $.ajax({
            url : "<?php echo site_url();?>index.php/freelance/produk/get_kec",
            method : "POST",
            data : {id: id},
            async : false,
            dataType : 'json',
            success: function(data){
                var html = '';
                var i;
                for(i=0; i<data.length; i++){
                    html += '<option value="'+data[i].id_kec+'">'+data[i].nama_kec+'</option>';
                }
                $('.kec').html(html);                
            }
        });
    });
});
</script>   
