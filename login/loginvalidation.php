<?php 
require '../connect.php';
session_start();
if (isset($_SESSION['email'])) {
   // echo "dashboard";
    header("Location: ../dashboard.php");
}

?>


<?php
if(isset($_POST['submit'])){

	$pass=$_POST['password'];
	$email=$_POST['email'];
	$sql="SELECT * from adminclient where email = '$email' and password= '$pass'";
	$result=mysqli_query($conn,$sql);
	if(mysqli_num_rows($result)>0){
		$row=mysqli_fetch_assoc($result);
		$_SESSION['pass']=$row['password'];
		$_SESSION['email']=$row['email'];
		
	 header('location:../administrator/admin/');

	}
	else{
		  echo "You are not registered";
    print "<META http-equiv='refresh' content='3;URL=../signup/signupform.php'>";
    exit;
		// echo "you are not registered.please register ";
		// echo '<a href="../signup/signupform.php">Click here to Register</a>';

	}


}


?>
