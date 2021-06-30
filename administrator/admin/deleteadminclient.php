<?php 
	include "../../app/connect.php";
	$shop_id = $_GET['id'];
	$sql = "DELETE FROM shop WHERE shop_id = $shop_id";
	if (mysqli_query($conn, $sql)) {
		header('Location:manageshop.php');
	}
	else{
		echo "error deleting";
	}
?>