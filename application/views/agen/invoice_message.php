<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <title></title>
    
    <style>
    .invoice-box {
        max-width: 800px;
        margin: auto;
        padding: 30px;
        border: 1px solid #eee;
        box-shadow: 0 0 10px rgba(0, 0, 0, .15);
        font-size: 16px;
        line-height: 24px;
        font-family: 'Helvetica Neue', 'Helvetica', Helvetica, Arial, sans-serif;
        color: #555;
    }
    
    .invoice-box table {
        width: 100%;
        line-height: inherit;
        text-align: left;
    }
    
    .invoice-box table td {
        padding: 5px;
        vertical-align: top;
    }
    
    .invoice-box table tr td:nth-child(2) {
        text-align: right;
    }
    
    .invoice-box table tr.top table td {
        padding-bottom: 20px;
    }
    
    .invoice-box table tr.top table td.title {
        font-size: 45px;
        line-height: 45px;
        color: #333;
    }
    
    .invoice-box table tr.information table td {
        padding-bottom: 40px;
    }
    
    .invoice-box table tr.heading td {
        background: #eee;
        border-bottom: 1px solid #ddd;
        font-weight: bold;
    }
    
    .invoice-box table tr.details td {
        padding-bottom: 20px;
    }
    
    .invoice-box table tr.item td{
        border-bottom: 1px solid #eee;
    }
    
    .invoice-box table tr.item.last td {
        border-bottom: none;
    }
    
    .invoice-box table tr.total td:nth-child(2) {
        border-top: 2px solid #eee;
        font-weight: bold;
    }
    
    @media only screen and (max-width: 600px) {
        .invoice-box table tr.top table td {
            width: 100%;
            display: block;
            text-align: center;
        }
        
        .invoice-box table tr.information table td {
            width: 100%;
            display: block;
            text-align: center;
        }
    }
    
    /** RTL **/
    .rtl {
        direction: rtl;
        font-family: Tahoma, 'Helvetica Neue', 'Helvetica', Helvetica, Arial, sans-serif;
    }
    
    .rtl table {
        text-align: right;
    }
    
    .rtl table tr td:nth-child(2) {
        text-align: left;
    }
    </style>
</head>

<body>
    <div class="invoice-box">
        <table cellpadding="0" cellspacing="0">
            <tr class="top">
                <td colspan="2">
                    <table>
                        <tr>
                            <td class="title">
                                <img src="http://juraganrumah.net/assets/backend/assets/images/logofull.png" style="width:100%; max-width:300px; height: 100px;">
                            </td>
                            
                            <td>
                                Invoice #<?php echo $inv; ?> <br>
                                Tanggal: <?php echo date('d M Y') ?><br>                                
                            </td>
                        </tr>
                    </table>
                </td>
            </tr>
            
            <tr class="information">
                <td colspan="2">
                    <table>
                        <tr>
                            <td>
                                JuraganRumah.net<br>
                                Jl. Veteran No. 48 Semarang, Indonesia<br>
                                (024) 76443701
                            </td>
                            
                            <td>
                                <?php echo $buyer->nama_buyer ?><br>
                                <?php echo $buyer->email_buyer ?><br>
                                <?php echo $buyer->telepon ?>
                            </td>
                        </tr>
                    </table>
                </td>
            </tr>
            
            <tr class="heading">
                <td>Tipe Bayar</td>                
                <td></td>
            </tr>
            
            <tr class="details">
                <td><?php echo $tipe ?></td>                
                <td></td>
            </tr>

            <tr class="heading">
                <td>Properti Detail</td>                
                <td></td>
            </tr>
            
            <tr class="details">
                <td><?php echo $produk->nama_produk ?></td>                
                <td></td>
            </tr>
            <tr class="details">
                <td>1 Unit</td>                
                <td></td>
            </tr>
            <tr class="details">
                <td><?php echo $produk->alamat ?></td>                
                <td></td>
            </tr>


            
            <tr class="heading">
                <td>Item Properti</td>
                <td>Price</td>

            </tr>
            
            <tr class="item">
                <td><?php echo $produk->nama_produk ?></td>
                <td>
                    <?php 
                        if (!empty($produk->harga_promo)) {
                            $ttl = $produk->harga_promo;
                            echo "<strike>Rp. ".number_format($produk->harga)."</strike><br>";
                            echo " Rp. ".number_format($produk->harga_promo);
                        }else{
                            $ttl = $produk->harga;                                        
                            echo "Rp. ".number_format($produk->harga);                                
                        }
                    ?>
                </td>
            </tr>
                                
            <tr class="total">
                <td></td>                
                <td>Total: <?php echo "Rp. ".number_format($ttl); ?></td>
            </tr>
        </table>
        <i>* Setelah menyelesaikan pembelian Buyer akan segera dihubungi oleh pihak Juragan Rumah</i><br>
        <i>* Invoice ini merupakan bukti pembelian yang sah</i><br><p></p>
        <span style="float: right;">Info Klik <a href="https://juraganrumah.net">Juragan Rumah</a></span>
    </div>
</body>
</html>
