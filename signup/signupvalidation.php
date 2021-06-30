<?php 
require '../connect.php';
if(isset($_POST['submit'])){
	$email=htmlspecialchars($_POST['email']);
	$pass=htmlspecialchars($_POST['password']);
	$occupation=htmlspecialchars($_POST['occupation']);
	$username=htmlspecialchars($_POST['username']);
	$address=htmlspecialchars($_POST['address']);

   if (empty($pass) || empty($occupation) || empty($email) || empty($username)  || empty($address)) {
        if (empty($pass)) {
            echo '<font color="red">password is required.</font><br>';
        }
        if (empty($occupation)) {
            echo '<font color="red">occupation is required.</font><br>';
        }
        if (empty($email)) {
            echo '<font color="red">Email field is required.</font><br>';
        }
        if (empty($usernamee)) {
            echo '<font color="red">username is required.</font><br>';
        }
        if (empty($address)) {
            echo '<font color="red">address field is required.</font><br>';
        }
      

}
else{
	//$repass=$_POST['repass'];
	$sql1="SELECT * from adminclient where email = '$email' and username='$username' and password='$pass'";

	$result= mysqli_query($conn,$sql1);
	if( mysqli_num_rows($result) > 0 ){
		
		// sleep(1);
		echo "you have already registered ";
		echo "<a href='../login/index.php'>click here to login</a>";
		// header('location:../login/index.php');
	
	
}
	else{
	$sql="INSERT INTO adminclient(username,occupation,address,email,password)
	VALUES('$username','$occupation','$address','$email','$pass')";
	if(($conn->query($sql))==TRUE){
		
		echo "logged in";
		header('location:../login/index.php');
	}
	else{
		echo "error in inserting data" ;
	}
}

}
}


 ?>
 