<link href="<?php echo base_url() ?>assets/backend/assets/libs/datatables.net-bs4/css/dataTables.bootstrap4.css" rel="stylesheet">
<link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>assets/backend/assets/libs/bootstrap-datepicker/dist/css/bootstrap-datepicker.min.css">
<script src="<?php echo base_url() ?>assets/backend/assets/extra-libs/DataTables/datatables.min.js"></script>   
<script src="<?php echo base_url() ?>assets/backend/assets/libs/bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js"></script>


 <div class="page-breadcrumb">
    <div class="row">
        <div class="col-12 d-flex no-block align-items-center">
            <h4 class="page-title">Laporan Penjualan</h4>
            <div class="ml-auto text-right">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="<?php echo base_url('mitra') ?>">Dashboard</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Laporan Penjualan</li>
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
                    <!-- <div class="row">
                        <form action="<?php echo base_url('mitra/penjualan/cari') ?>" method="POST" class="form-inline" role="form">                        
                            <label for="">Periode Tanggal &nbsp;</label>                            
                            <div class="form-group">                                
                                <input type="text" class="form-control" placeholder="Tanggal Awal" id="dp1"><span>&nbsp;s/d&nbsp;</span>
                                <input type="text" class="form-control" placeholder="Tanggal Akhir" id="dp2">
                            </div>&nbsp;
                            <button type="submit" class="btn btn-primary"><i class="fas fa-search"></i> Cari</button>
                        </form>
                    </div><hr> -->
                    <div class="row">
                        <table class="table table-bordered table-hover" id="zero_config">
                            <thead>
                                <tr>
                                    <th width="1%">#</th>
                                    <th>Transaksi</th>                                    
                                    <th>Tanggal</th>
                                    <th>Harga</th>                                    
                                    <th>Status</th>                                    
                                    <th>Aksi</th>                                    
                                </tr>
                            </thead>
                            <tbody>
                                <?php $no = 1; foreach ($get as $key) { ?>
                                <tr>
                                    <td><?php echo $no; ?></td>
                                    <td><?php echo $key->id_transaksi ?></td>
                                    <td><?php echo date('d M Y', strtotime($key->date)) ?></td>
                                    <td class="text-right"><?php echo 'Rp. '.number_format($key->total_prize) ?></td>
                                    <td><?php echo $key->sts ?></td>                                    
                                    <td>
                                         <button type="button" class="btn btn-primary btn-sm margin-5" data-toggle="tooltip" data-placement="top" title="" data-original-title="Tampilkan Detail" onclick="view('<?php echo $key->id_transaksi ?>')"><i class="fas fa-file-alt"></i></button>
                                    </td>
                                </tr>
                                <?php } ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>        
        </div>
    </div>
    
</div>            

<div class="modal fade bs-example-modal-lg" id="view_modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document ">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title view-title" id="exampleModalLabel"></h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true ">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="text-center">
                    <h5 class="text-primary">Data Transaksi</h5>                    
                </div>
                <table class="table table-condensed table-hover">
                    <thead>
                        <tr>                                                        
                            <th>Nama Property</th>
                            <th>Developer</th>
                            <th>Unit</th>
                            <th>Harga</th>                            
                        </tr>
                    </thead>
                    <tbody id="show_view">
                        
                    </tbody>
                </table>
                <div class="form-group row">
                    <label for="fname" class="col-sm-3 control-label col-form-label">Tanggal Transaksi</label>
                    <div class="col-sm-3">
                        <input type="text" readonly class="form-control-plaintext" name="tgl">
                    </div>
                    <label for="fname" class="col-sm-3 control-label col-form-label">Total Harga</label>
                    <div class="col-sm-3">
                        <input type="text" readonly class="form-control-plaintext" name="total">
                    </div>
                </div>    
                <div class="form-group row">
                    <label for="fname" class="col-sm-3 control-label col-form-label">Tipe Bayar</label>
                    <div class="col-sm-3">
                        <input type="text" readonly class="form-control-plaintext" name="tipe">
                    </div>
                    <label for="fname" class="col-sm-3 control-label col-form-label">Status</label>
                    <div class="col-sm-3">
                        <input type="text" readonly class="form-control-plaintext" name="status">
                    </div>
                </div>                            

                <hr>
                <div class="text-center">
                    <h5 class="text-primary">Data Buyer</h5>
                </div><hr>
                <div class="form-group row">
                    <label for="fname" class="col-sm-3 control-label col-form-label">Nama Buyer</label>
                    <div class="col-sm-3">
                        <input type="text" readonly class="form-control-plaintext" name="nama_buyer">
                    </div>
                    <label for="fname" class="col-sm-3 control-label col-form-label">No WA</label>
                    <div class="col-sm-3">
                        <input type="text" readonly class="form-control-plaintext" name="no_wa">
                    </div>
                </div>                
                
            </div>
        </div>
    </div>
</div>


<script>
    $('#zero_config').DataTable();            

    jQuery('#dp1').datepicker({
        autoclose: true,
        todayHighlight: true,
        format: 'yyyy-mm-dd'        
    });

    jQuery('#dp2').datepicker({
        autoclose: true,
        todayHighlight: true,
        format: 'yyyy-mm-dd'
    });

    function view(id) {
        $.ajax({
            url : "<?php echo site_url('index.php/mitra/penjualan/get_transaksi')?>/" + id,
            type: "GET",
            dataType: "JSON",
            success: function(data){
                var html = '';
                var i;
                for(i=0; i<data.length; i++){
                   var harga = new Intl.NumberFormat('ja-JP', { style: 'decimal' }).format(data[i].harga);
                    html += "<tr>"+                                                
                        "<td>"+data[i].nama_produk+"</td>"+
                        "<td>"+data[i].nama_perusahaan+"</td>"+
                        "<td>"+data[i].jml_unit+"</td>"+
                        "<td>Rp. "+harga+",-</td>"+                        
                        "</tr>";
                    }
                $('#show_view').html(html);                                
                $('#view_modal').modal('show');

            },
            error: function (jqXHR, textStatus, errorThrown){
                alert('Error get data from ajax');
            }
        }); 

        $.ajax({
            url : "<?php echo site_url('index.php/mitra/penjualan/get_detail/')?>" + id,
            type: "GET",
            dataType: "JSON",
            success: function(data)
            {   
               var total_prize = new Intl.NumberFormat('ja-JP', { style: 'decimal' }).format(data.total_prize);

               $('.view-title').text('Detail Transaksi #'+id);
               $('[name="nama_buyer"]').val(data.nama_buyer);
               $('[name="no_wa"]').val(data.telepon);
               $('[name="tgl"]').val(data.date);
               $('[name="total"]').val('Rp. '+total_prize);               
               $('[name="tipe"]').val(data.tipe_bayar);
               $('[name="status"]').val(data.sts);
               
               $('#view_modal').modal('show');
               // console.log(data);
            },
        error: function (jqXHR, textStatus, errorThrown)
        {
            alert('Error get data from ajax');
        }
        });

    }
</script>