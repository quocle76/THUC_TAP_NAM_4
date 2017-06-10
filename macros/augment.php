<?php 
session_start();
	$id=$_GET['productid'];
	if(isset($_SESSION['cart'][$id]))
		{
			$qty = $_SESSION['cart'][$id] + 1;
		}
		else
		{
		}
		$_SESSION['cart'][$id]=$qty;
		header('location: ../gio-hang.php');
		exit();
	?>
?>
