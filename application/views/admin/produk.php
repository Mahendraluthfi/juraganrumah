<link href="<?php echo base_url() ?>assets/backend/assets/libs/datatables.net-bs4/css/dataTables.bootstrap4.css" rel="stylesheet">
<script src="<?php echo base_url() ?>assets/backend/assets/extra-libs/DataTables/datatables.min.js"></script> 
 <div class="page-breadcrumb">
    <div class="row">
        <div class="col-12 d-flex no-block align-items-center">
            <h4 class="page-title">Data Produk</h4>
            <div class="ml-auto text-right">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="<?php echo base_url('mitra') ?>">Dashboard</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Produk</li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>
</div>

<div class="container-fluid">
    
    <div class="row">
        
    </div>
    
</div>     


<script>
     <?php echo $this->session->flashdata('error'); ?>

    $('#zero_config').DataTable();            
     
    function invoice(id) {
         $.ajax({
            url : "<?php echo site_url('index.php/admin/konf_premium/get_inv/')?>" + id,
            type: "GET",
            dataType: "JSON",
            success: function(data)
            {   
                $('.modal-title').text('Invoice #'+data.id_invoice);
                $('.font-bold').text(data.nama_agen);
                $('.date').text(data.date_start);
                $('.identity').text(data.username);
                $('.deskripsi').text(data.deskripsi);                
                $('.nominal').text(data.nominal);
                $('.kode').text(data.kode);
                $('.total').text(data.total);
                $('.alamat').text(data.alamat);
                $('.telepon').text(data.nomor_wa);
                $('.ttl').text('Total : '+data.total);
                $('#invoice').modal('show');                   
            },
        error: function (jqXHR, textStatus, errorThrown)
        {
            alert('Error get data from ajax');
        }
        });
    }

    function konfirmasi(id) {
        $.ajax({
            url : "<?php echo site_url('index.php/admin/konf_premium/get_agen/')?>" + id,
            type: "GET",
            dataType: "JSON",
            success: function(data)
            {   
                $('[name="nama_bank"]').val(data.nama_bank);
                $('[name="atas_nama"]').val(data.atas_nama);
                $('[name="no_rekening"]').val(data.no_rekening);
                $('[name="noinvoice"]').val(id);
                $('[name="kode"]').val(data.kode);
                $('.foto').attr("src","<?php echo base_url('assets/backend/foto/') ?>"+data.foto);
                $('#Modal1').modal('show');                   
            },
        error: function (jqXHR, textStatus, errorThrown)
        {
            alert('Error get data from ajax');
        }
        });                    
    }

</script>