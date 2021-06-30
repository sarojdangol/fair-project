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
                  <h4 class="card-title">Add User</h4>
                </div>
                <div class="card-body">
                  <form method="post">
                    <div class="row">
                      <div class="col-md-6">
                        <div class="form-group">
                          <label class="bmd-label-floating">Name</label>
                          <input type="text" class="form-control" name="name">
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="form-group">
                          <label class="bmd-label-floating">Email</label>
                          <input type="text" class="form-control" name="email">
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
                    
                          </div>
                        </div>
                      </div>
                    </div>
                    <button type="submit" name="submitbtn" class="btn btn-primary col-md-12">Add Admin</button>
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
      		$name = $_POST['name'];
      		$email = $_POST['email'];
      		$password = $_POST['password'];
      		$contact = $_POST['contact'];
      		$sql = "INSERT INTO `admin` (`name`, `email`, `password`, `contact`) VALUES ('$name', '$email', '$password', '$contact')";
      		if (mysqli_query($conn, $sql)) {
      			header("Location:manageadmin.php");
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}
mysqli_close($conn);
      	}
      ?>