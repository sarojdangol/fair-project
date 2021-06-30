<?php 
$servername='localhost';
$username='root';
$password='';
$dbname='gharsewa';
$conn = new mysqli($servername,$username,$password,$dbname);
if($conn->connect_error){
	die('connection failed'.$conn->connect_error);
}
// $sql="create database gharSewa";
// if($conn->query($sql)==TRUE){
//     echo 'succesfully created db';
// }
// else{
//     echo 'error'.$conn->error;
// }



 ?>