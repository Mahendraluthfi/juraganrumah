<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

ERROR - 2019-05-21 10:07:25 --> Severity: error --> Exception: syntax error, unexpected 'extends' (T_EXTENDS), expecting identifier (T_STRING) C:\xampp\htdocs\backend\application\controllers\admin\Usermanagement.php 4
ERROR - 2019-05-21 15:04:40 --> Query error: Unknown column 'username' in 'where clause' - Invalid query: SELECT *
FROM `user`
WHERE `username` = 'admin'
ERROR - 2019-05-21 15:37:11 --> Query error: Column 'modul_id' cannot be null - Invalid query: INSERT INTO `privilage` (`user_id`, `modul_id`) VALUES ('4', NULL)
ERROR - 2019-05-21 15:39:38 --> Query error: Column 'modul_id' cannot be null - Invalid query: INSERT INTO `privilage` (`user_id`, `modul_id`) VALUES ('5', NULL)
ERROR - 2019-05-21 16:01:12 --> Query error: Table 'juraganrumah.moudl' doesn't exist - Invalid query: SELECT *
FROM `moudl`
WHERE `id` IS NULL
ERROR - 2019-05-21 16:05:03 --> Query error: Unknown column 'modul' in 'field list' - Invalid query: INSERT INTO `privilage` (`user_id`, `modul`) VALUES ('6', '8')
