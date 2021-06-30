<?php 
	include "../layout/sidebar.php";
	include "../layout/header.php";
	?>



	<div class="content">
        <div class="container-fluid">
          <div class="row">
            <div class="col-md-12">
              <div class="card">
                <div class="card-header card-header-primary">
                  <h4 class="card-title">Add Shop</h4>
                </div>
                <div class="card-body">
                  <form method="post">
                    <div class="row">
                      <div class="col-md-4">
                        <div class="form-group">
                          <label class="bmd-label-floating">Shop Name</label>
                          <input type="text" class="form-control" name="shopname">
                        </div>
                      </div>
                      <div class="col-md-4">
                        <div class="form-group">
                          <label class="bmd-label-floating">Owner Name</label>
                          <input type="text" class="form-control" name="ownername">
                        </div>
                      </div>
                      <div class="col-md-4">
                        <div class="form-group">
                          <label class="bmd-label-floating">Email</label>
                          <input type="email" class="form-control" name="email">
                        </div>
                      </div>
                      
                    </div>
                    <div class="row">
                    	<div class="col-md-6">
                        <div class="form-group">
                          <label class="bmd-label-floating">Password</label>
                          <input type="password" name="password" class="form-control">
                        </div>
                      </div>
                      
                      <div class="col-md-6">
                        <div class="form-group">
                          <label class="bmd-label-floating">Contact</label>
                          <input type="number" name="contact" class="form-control">
                        </div>
                      </div>
                     
                    </div>
                     <div class="row">
                        <div class="col-md-12">
                        <div class="form-group">
                          <label class="bmd-label-floating">location</label>
                          <input type="text" name="location" class="form-control"> 
                        </div>
                      </div>
                     
                    </div>

                    
                    
                          </div>
                        </div>
                      </div>
                    </div>
                    <button type="submit" name="submitbtn" class="btn btn-primary col-md-12">Add Shop</button>
                    <div class="clearfix"></div>
                  </form>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>


      <?php
      	if (isset($_POST['submitbtn'])) {
      		include "../../app/connect.php";
      		$shopname = $_POST['shopname'];
          $ownername =$_POST['ownername'];
      		$email = $_POST['email'];
      		$password = $_POST['password'];
      		$contact = $_POST['contact'];
          $location = $_POST['location'];
      		$sql = "INSERT INTO `shop` (`shopname`, `ownername`, `email`, `password`, `contact`, `location`) VALUES ('$shopname','$ownername', '$email', '$password', '$contact', '$location')";
      		if (mysqli_query($conn, $sql)) {
      			echo "<script>window.location.href = 'manageshop.php'</script>";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}
mysqli_close($conn);
      	}
      ?>