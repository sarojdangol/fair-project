<?php 
	include "../../app/connect.php";
	$admin_id = $_GET['id'];
	$sql = "DELETE FROM admin WHERE admin_id = $admin_id";
	if (mysqli_query($conn, $sql)) {
		header('Location:manageadmin.php');
	}
	else{
		echo "error deleting";
	}
?>