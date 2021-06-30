<?php 
include 'connect.php';
if (isset($_POST['submit'])) {
	$image_description=$_POST['description'];
	$file =  $_FILES['file'];
	
	$filename = $_FILES['file']['name'];
	$fileTmpName = $_FILES['file']['tmp_name'];
	$fileSize = $_FILES['file']['size'];
	$fileError = $_FILES['file']['error'];
	$fileType = $_FILES['file']['type'];


	$fileExt = explode('.', $filename );
	$fileActualExt = strtolower(end($fileExt));

	$allowed =array('jpg','jpeg','png','pdf');
	if (in_array($fileActualExt, $allowed)) {
		if ($fileError===0) {
			if ($fileSize<50000000) {
				$filenewname = uniqid('',true).'.'.$fileActualExt;
				$fileDestination = 'images/'.$filenewname ;
				move_uploaded_file($fileTmpName, $fileDestination);

				$query="INSERT INTO image(img_path,description) VALUES ('$fileDestination','$image_description') ";
	if($conn->query($query)==TRUE){
				header('Location: Services.php');
			}
			else{
				echo "error".$conn->error;
			}
		}else
				{
				echo "Your File is Too Big.....";
				}

			
			}
		
	else
	{
		echo "You Cannot upload this kind of file in website";
	}
  }
}


 ?>