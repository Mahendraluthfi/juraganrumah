<link href="<?php echo base_url() ?>assets/backend/assets/libs/datatables.net-bs4/css/dataTables.bootstrap4.css" rel="stylesheet">
<script src="<?php echo base_url() ?>assets/backend/assets/extra-libs/DataTables/datatables.min.js"></script> 
 <div class="page-breadcrumb">
    <div class="row">
        <div class="col-12 d-flex no-block align-items-center">
            <h4 class="page-title">Laporan Survei</h4>
            <div class="ml-auto text-right">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="<?php echo base_url('mitra') ?>">Dashboard</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Survei</li>
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
                        <div class="col-md-12">
                            <table class="table table-bordered table-hover" id="zero_config">
                                <thead>
                                    <tr>
                                        <th width="1%">#</th>
                                        <th>Tanggal</th>
                                        <th>Waktu</th>
                                        <th>Buyer</th>
                                        <th>Properti</th>                                        
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php $no=1; foreach ($get as $data) { ?>
                                        <tr>
                                            <td><?php echo $no++ ?></td>
                                            <td><?php echo date('D, d M Y', strtotime($data->date)) ?></td>
                                            <td><?php echo $data->time ?></td>
                                            <td><?php echo $data->nama_buyer ?></td>
                                            <td><?php echo $data->nama_produk ?></td>
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
    
</div>     

 <div class="modal fade bs-example-modal-lg" id="view_modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document ">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Detail Artikel</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true ">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <img src="" alt="" class="foto" style="width: 100%; height: 300px;"><p></p>
                <h4 class="judul text-center"></h4>
                <p class="isi"></p>
            </div>
        </div>
    </div>
</div>

<script>
     <?php echo $this->session->flashdata('error'); ?>

    $('#zero_config').DataTable();            
         
    function view(id) {
        $.ajax({
            url : "<?php echo site_url('index.php/mitra/artikel/get/')?>" + id,
            type: "GET",
            dataType: "JSON",
            success: function(data)
            {   
                $('.judul').text(data.judul);
                $('.isi').text(data.isi);
                $('.foto').attr("src","<?php echo base_url('assets/backend/fotoartikel/') ?>"+data.foto);
                $('#view_modal').modal('show');
                
            },
        error: function (jqXHR, textStatus, errorThrown)
        {
            alert('Error get data from ajax');
        }
        });
    }

</script>