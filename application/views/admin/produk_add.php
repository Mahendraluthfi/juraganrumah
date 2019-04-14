     <div class="page-breadcrumb">
        <div class="row">
            <div class="col-12 d-flex no-block align-items-center">
                <h4 class="page-title">Produk Anda</h4>
                <div class="ml-auto">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="<?php echo base_url('admin') ?>">Dashboard</a></li>
                            <li class="breadcrumb-item"><a href="<?php echo base_url('admin/produk') ?>">Produk</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Tambah Produk</li>
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
                                <?php echo form_open('admin/produk/submit', array('class' => 'form-horizontal')); ?>
                                    <div class="card-body">                                    
                                        <div class="form-group row">
                                            <label for="fname" class="col-sm-3 control-label col-form-label">Kode Produk</label>
                                            <div class="col-sm-9">
                                                <input type="text" name="kode_produk" class="form-control" placeholder="Kode Produk" readonly="" value="<?php echo $kode ?>">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="lname" class="col-sm-3 control-label col-form-label">Judul Post</label>
                                            <div class="col-sm-9">
                                                <input type="text" name="nama_produk" class="form-control" placeholder="Judul Post" required="">
                                            </div>
                                        </div>
                                          <div class="form-group row">
                                            <label for="email1" class="col-sm-3 control-label col-form-label">Kategori Produk</label>
                                            <div class="col-sm-9">
                                                <select name="ktg" id="ktg" class="select2 form-control custom-select" style="width: 100%; height:36px;" required="">
                                                   <option value="" selected="">--Pilih--</option>
                                                <?php foreach ($ktg as $dktg) { ?>                          
                                                    <option value="<?php echo $dktg->id_category_produk ?>"><?php echo $dktg->nama_category." / ".$dktg->type_category ?></option>
                                                <?php } ?>
                                                </select>
                                            </div>
                                        </div>
                                         <div class="form-group row">
                                            <label for="lname" class="col-sm-3 control-label col-form-label">Harga Jual</label>
                                            <div class="col-sm-9">
                                                <input type="number" name="harga" class="form-control" placeholder="Harga" min="0">
                                            </div>
                                        </div>
                                         <div class="form-group row">
                                            <label for="lname" class="col-sm-3 control-label col-form-label">Harga Bawah</label>
                                            <div class="col-sm-9">
                                                <input type="number" name="harga_bawah" class="form-control" placeholder="Harga" min="0">
                                            </div>
                                        </div>
                                         <div class="form-group row">
                                            <label for="lname" class="col-sm-3 control-label col-form-label">Harga Promo</label>
                                            <div class="col-sm-9">
                                                <input type="number" name="harga_promo" class="form-control" placeholder="Harga" min="0">
                                            </div>
                                        </div>                                        
                                         <div class="form-group row">
                                            <label for="lname" class="col-sm-3 control-label col-form-label">Jumlah Unit</label>
                                            <div class="col-sm-9">
                                                <input type="number" name="unit" class="form-control" placeholder="Unit" min="0">
                                            </div>
                                        </div>                                                                        
                                            
                                        <div class="form-group row">
                                            <label for="lname" class="col-sm-3 control-label col-form-label">Alamat</label>
                                            <div class="col-sm-9">
                                                <textarea class="form-control" name="alamat" placeholder="Alamat"></textarea>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="email1" class="col-sm-3 control-label col-form-label">Provinsi</label>
                                            <div class="col-sm-9">
                                                 <select name="provinsi" id="prov" class="select2 form-control custom-select" style="width: 100%;" required="required">
                                                    <option value="" selected="Provinsi">Provinsi</option>
                                                    <?php foreach ($prov as $dprov) { ?>                          

                                                    <option value="<?php echo $dprov->id_prov ?>"><?php echo $dprov->nama_prov ?></option>

                                                    <?php } ?>
                                                 </select>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="email1" class="col-sm-3 control-label col-form-label">Kab/Kota</label>
                                            <div class="col-sm-9">
                                                <select name="kabkot" id="kabkot" class="kabkot select2 form-control custom-select" style="width: 100%;" required="required">
                                                    <option value="" selected="Kota / Kab">Kota / Kab</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="email1" class="col-sm-3 control-label col-form-label">Kecamatan</label>
                                            <div class="col-sm-9">
                                                <select name="kecamatan" id="kec" class="kec select2 form-control custom-select" style="width: 100%;" required="required">
                                                    <option value="" selected="Kecamatan">Kecamatan</option>
                                                </select>
                                            </div>
                                        </div>                                                                                 
                                         <div class="form-group row">
                                            <label for="lname" class="col-sm-3 control-label col-form-label">Listrik / watt</label>
                                            <div class="col-sm-3">
                                                <input type="number" name="listrik" class="form-control" placeholder="Daya Listrik" min="0">
                                            </div>
                                            <label for="lname" class="col-sm-3 control-label col-form-label">Sertifikat</label>
                                            <div class="col-sm-3">
                                                <input type="text" name="sertifikat" class="form-control" placeholder="Sertifikat">
                                            </div>
                                        </div>
                                         <div class="form-group row">
                                            <label for="lname" class="col-sm-3 control-label col-form-label">Jenis Air</label>
                                            <div class="col-sm-3">
                                                <input type="text" name="jenis_air" class="form-control" placeholder="Jenis Air">
                                            </div>
                                            <label for="lname" class="col-sm-3 control-label col-form-label">Hadap Bangunan</label>
                                            <div class="col-sm-3">
                                                <select name="hadap" class="select2 form-control">
                                                    <option value="Selatan">Selatan</option>                 
                                                    <option value="Barat">Barat</option>                 
                                                    <option value="Utara">Utara</option>                          
                                                    <option value="Timur">Timur</option>                                                
                                                </select>
                                            </div>
                                        </div>
                                         <div class="form-group row">
                                            <label for="lname" class="col-sm-3 control-label col-form-label">Kamar Tidur</label>
                                            <div class="col-sm-3">
                                                <input type="number" name="kamar_tidur" class="form-control" placeholder="Kamar Tidur" min="0">
                                            </div>
                                            <label for="lname" class="col-sm-3 control-label col-form-label">Kamar Mandi</label>
                                            <div class="col-sm-3">
                                                <input type="number" name="kamar_mandi" class="form-control" placeholder="Kamar Mandi" min="0">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="lname" class="col-sm-3 control-label col-form-label">Luas Tanah / m<sub>2</sub></label>
                                            <div class="col-sm-3">
                                                <input type="number" name="luas_tanah" class="form-control" placeholder="Luas Tanah" min="0">
                                            </div>
                                            <label for="lname" class="col-sm-3 control-label col-form-label">Luas Bangunan / m<sub>2</sub></label>
                                            <div class="col-sm-3">
                                                <input type="number" name="luas_bangunan" class="form-control" placeholder="Luas Bangunan" min="0">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="lname" class="col-sm-3 control-label col-form-label">Furnished</label>
                                            <div class="col-sm-3">
                                                <select name="furnished" class="form-control">
                                                    <option value="YA">YA</option>                           
                                                    <option value="TIDAK">TIDAK</option>            
                                                </select>
                                            </div>                                        
                                            <label for="lname" class="col-sm-3 control-label col-form-label">Jumlah Lantai</label>
                                            <div class="col-sm-3">
                                                <input type="number" class="form-control" name="jumlah_lantai" placeholder="Jumlah Lantai" min="0">
                                            </div>                                        
                                        </div>                                    
                                        <div class="form-group row">
                                            <label for="lname" class="col-sm-3 control-label col-form-label">Hook / Pojok</label>
                                            <div class="col-sm-3">
                                                <select name="hook" class="form-control">
                                                    <option value="YA">YA</option>                           
                                                    <option value="TIDAK">TIDAK</option>            
                                                </select>
                                            </div>                                        
                                            <label for="lname" class="col-sm-3 control-label col-form-label">Carport</label>
                                            <div class="col-sm-3">
                                                <select name="carport" class="form-control">
                                                    <option value="YA">YA</option>                           
                                                    <option value="TIDAK">TIDAK</option>            
                                                </select>
                                            </div>                                        
                                        </div>
                                        <div class="form-group row">
                                            <label for="lname" class="col-sm-3 control-label col-form-label">Deskripsi</label>
                                            <div class="col-sm-9">
                                                <textarea name="deskripsi" class="form-control" placeholder="Deskripsi"></textarea>
                                            </div>                                        
                                        </div>
                                        <div class="form-group row">
                                            <label for="lname" class="col-sm-3 control-label col-form-label">Status Post</label>
                                            <div class="col-sm-9">
                                                <select name="status" class="form-control">
                                                    <option value="PUBLISH">PUBLISH</option>                           
                                                    <option value="DRAFT">DRAFT</option>            
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
                url : "<?php echo site_url();?>admin/produk/get_kabkot",
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
                        url : "<?php echo site_url();?>admin/produk/get_kec",
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

    // $(document).ready(function(){
    //      $('[name="project"]').change(function(){
    //      var id = $(this).val();
    //         $.ajax({
    //         url : "<?php echo site_url();?>index.php/admin/produk/get_project",
    //         method : "POST",
    //         data : {id: id},
    //         async : false,
    //         dataType : 'json',
    //         success: function(data){
    //             $('[name="alamat"]').val(data.alamat);
    //             $('[name="provinsi"]').val(data.nama_prov);
    //             $('[name="kabkot"]').val(data.nama_kabkot);
    //             $('[name="kec"]').val(data.nama_kec);
    //           $('.buka').show();
    //         }
    //       });
    //     });
    //   });
</script>   
