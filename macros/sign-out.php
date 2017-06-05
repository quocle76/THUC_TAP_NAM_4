<?php 
session_start();
session_unset($_SESSION['name_user']);

Echo "Đây là URL hiện tại của bạn: http://".$_SERVER["SERVER_NAME"].$_SERVER["REQUEST_URI"];
 ?>