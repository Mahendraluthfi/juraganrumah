<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

ERROR - 2019-04-15 00:02:26 --> Severity: error --> Exception: syntax error, unexpected ')' C:\xampp\htdocs\backend\application\controllers\admin\Penjualan.php 53
ERROR - 2019-04-15 00:06:53 --> Severity: Notice --> Undefined property: stdClass::$id_mitra C:\xampp\htdocs\backend\application\controllers\admin\Penjualan.php 54
ERROR - 2019-04-15 00:06:53 --> Severity: Notice --> Trying to get property 'saldo' of non-object C:\xampp\htdocs\backend\application\controllers\admin\Penjualan.php 66
ERROR - 2019-04-15 00:06:53 --> Severity: Warning --> A non-numeric value encountered C:\xampp\htdocs\backend\application\controllers\admin\Penjualan.php 67
ERROR - 2019-04-15 00:06:53 --> Severity: Notice --> Undefined variable: cek C:\xampp\htdocs\backend\application\controllers\admin\Penjualan.php 70
ERROR - 2019-04-15 00:06:53 --> Severity: Notice --> Trying to get property 'id_mitra' of non-object C:\xampp\htdocs\backend\application\controllers\admin\Penjualan.php 70
ERROR - 2019-04-15 00:06:53 --> Severity: Notice --> Undefined variable: encode_saldo C:\xampp\htdocs\backend\application\controllers\admin\Penjualan.php 71
ERROR - 2019-04-15 01:06:21 --> Severity: Notice --> Undefined property: stdClass::$id_mitra C:\xampp\htdocs\backend\application\controllers\admin\Penjualan.php 54
ERROR - 2019-04-15 01:06:21 --> Severity: Notice --> Trying to get property 'saldo' of non-object C:\xampp\htdocs\backend\application\controllers\admin\Penjualan.php 66
ERROR - 2019-04-15 01:06:21 --> Severity: Warning --> A non-numeric value encountered C:\xampp\htdocs\backend\application\controllers\admin\Penjualan.php 67
ERROR - 2019-04-15 14:19:30 --> Query error: Unknown column 'produk.id_' in 'where clause' - Invalid query: SELECT *
FROM `transaksi`
JOIN `detail_transaksi` ON `detail_transaksi`.`id_transaksi` = `transaksi`.`id_transaksi`
JOIN `produk` ON `produk`.`id_produk` = `detail_transaksi`.`id_produk`
WHERE `produk`.`id_` = '1'
ERROR - 2019-04-15 14:19:43 --> Severity: error --> Exception: Call to a member function row() on null C:\xampp\htdocs\backend\application\controllers\mitra\Penjualan.php 18
ERROR - 2019-04-15 14:26:08 --> Severity: error --> Exception: Call to a member function result() on null C:\xampp\htdocs\backend\application\controllers\mitra\Penjualan.php 18
ERROR - 2019-04-15 14:27:20 --> Severity: error --> Exception: Call to a member function result() on null C:\xampp\htdocs\backend\application\controllers\mitra\Penjualan.php 18
ERROR - 2019-04-15 14:32:37 --> Severity: error --> Exception: Call to undefined method Mpenjualan_mitra::get() C:\xampp\htdocs\backend\application\controllers\mitra\Penjualan.php 18
ERROR - 2019-04-15 14:51:11 --> Severity: Notice --> Trying to get property 'id_transaksi' of non-object C:\xampp\htdocs\backend\application\views\mitra\penjualan.php 45
ERROR - 2019-04-15 14:51:11 --> Severity: Notice --> Trying to get property 'date' of non-object C:\xampp\htdocs\backend\application\views\mitra\penjualan.php 46
ERROR - 2019-04-15 14:51:11 --> Severity: Notice --> Trying to get property 'total_prize' of non-object C:\xampp\htdocs\backend\application\views\mitra\penjualan.php 47
ERROR - 2019-04-15 14:51:11 --> Severity: Notice --> Undefined variable: data C:\xampp\htdocs\backend\application\views\mitra\penjualan.php 48
ERROR - 2019-04-15 14:51:11 --> Severity: Notice --> Trying to get property 'status' of non-object C:\xampp\htdocs\backend\application\views\mitra\penjualan.php 48
ERROR - 2019-04-15 15:35:13 --> Severity: Notice --> Undefined variable: data C:\xampp\htdocs\backend\application\views\mitra\penjualan.php 50
ERROR - 2019-04-15 15:35:13 --> Severity: Notice --> Trying to get property 'id_transaksi' of non-object C:\xampp\htdocs\backend\application\views\mitra\penjualan.php 50
