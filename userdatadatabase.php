<?php 
$occ_id = $_GET['id'];
require 'connect.php';
if (isset($_POST['submit'])) {
	# code...
$username = $_POST['acbd'];
$phone_number=$_POST['phone_number'];
$address=$_POST['address'];
// $id=$_POST['id'];
// $id=5;
$sql= "INSERT INTO userinfo(username,phone_number,address,occ_id) values ('$username',$phone_number,'$address','$occ_id')";

if($conn->query($sql)==TRUE){
	// <?php
    echo "your Request is successfully registered";
    print "<META http-equiv='refresh' content='3;URL=index.php'>";
    exit;
    header('Location:index.php');
}
else{
	echo "error in inserting data".$conn->error;
}
}


 ?>