<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

ERROR - 2019-04-20 11:51:02 --> Query error: Table 'juraganrumah.promosi' doesn't exist - Invalid query: SELECT *
FROM `promosi`
WHERE `id_mitra` = '1'
ERROR - 2019-04-20 14:11:25 --> Query error: Table 'juraganrumah.promosi' doesn't exist - Invalid query: INSERT INTO `promosi` (`date_post`, `id_mitra`, `nama_iklan`, `file`) VALUES ('2019-04-20', '1', NULL, 'IMG-20141125.png')
ERROR - 2019-04-20 14:11:51 --> Query error: Column 'nama_iklan' cannot be null - Invalid query: INSERT INTO `promosi_mitra` (`date_post`, `id_mitra`, `nama_iklan`, `file`) VALUES ('2019-04-20', '1', NULL, 'IMG-20141151.png')
