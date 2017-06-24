<?php
	include ('../../../conn.php');
	$id = $_GET['id'];
	$sql = "DELETE FROM `user` WHERE id = '$id'";
	$query = mysql_query($sql);
?>
    <META http-equiv="refresh" content="0;URL=http://localhost/nam4/admin/pages/tables/user.php">


