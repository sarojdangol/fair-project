<a href='index1.php'> Go to Home</a>
<?php 
require 'connect.php';
session_start();

if (isset($_SESSION['email'])){
$sql='SELECT * FROM userinfo';
$result=mysqli_query($conn,$sql);
if (mysqli_num_rows($result)>0) {

	echo "<table border='1px'>
	<tr><th>ID</th><th>username</th><th>phone_number</th><th>address</th></tr>";
	while($row=mysqli_fetch_assoc($result))
{
	echo "<tr>";
	  // $id = $row['id'];
	echo '<td>'.$row['id'].'</td>';
	echo '<td>'.$row['username'].'</td>';
	// echo '<td>'.$row['email'].'</td>';
	echo '<td>'.$row['phone_number'].'</td>';
	echo "<td>".$row['address']."</td>";
	// echo '<td><input type="checkbox" value="checked" name="checked"></td>';
		// echo '<td><a href="edit.php?id=' . $id . '">edit</a>  |  <a href="delete.php?id=' . $id . '">Delete</a></td>';
		
			echo "</tr>";

}
echo "</table>";
}
else{
	echo "no data available";
}

}

else {
    echo "<h1>Unauthorized Access !!!</h1>";
    header("Location:login/index.php");
}



 ?>
<a href="logoutadmin.php"><span style='color:red; font-size:20px; '>Logout</span></a>  

