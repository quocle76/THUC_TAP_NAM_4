<?php
$db_host = "localhost"; // Giữ mặc định là localhost
$db_name    = 'thutap_nam4';// Can thay doi
$db_username    = 'root'; //Can thay doi
$db_password    = '';//Can thay doi
$connect=mysql_connect("{$db_host}", "{$db_username}", "{$db_password}","{$db_name}") or die("Không thể kết nối database");
$db=mysql_select_db("{$db_name}") or die("Không thể chọn database");
mysql_query("SET NAMES 'utf8'");
?>