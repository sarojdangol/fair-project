<?php 
 session_start();
	include "../layout/sidebar.php";
	include "../layout/header.php";

	include "../app/connect.php";
 
  if(isset($_SESSION['email'])){
  $session_id = $_SESSION['email'];
  $sql = "SELECT id FROM `adminclient` WHERE email = '$session_id'";
  $result = $conn->query($sql);
  if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        $sess_id = $row["id"];
    }
}
}
?>
<div class="content">
        <div class="container-fluid">
          <div class="row">
            <div class="col-md-12">
              <div class="card">
                <div class="card-header card-header-primary">
                  <h4 class="card-title ">Manage Client</h4>
                </div>
                <div class="card-body">
                  <div class="table-responsive">
                    <table class="table">
                      <thead class=" text-primary">
                        <th>
                          SN
                        </th>
                        <th>
                          Username
                        </th>
                        <th>
                          Phone number
                        </th>
                        <th>
                          address
                        </th>
                        
                        <tr>
                        	<?php 
                        	$sql = "SELECT * FROM userinfo WHERE occ_id = $sess_id";
                        		$result = $conn->query($sql);
                        		if ($result->num_rows > 0) {
                        			$i= 1;
    // output data of each row
    					while($row = $result->fetch_assoc()) {
       								 foreach ($result as $key => $admuser ) {
       								 	?>
       								 		<tr>
       								 			<?php $adm_id = $admuser['id'];?>
       								 			<td><?php echo $i; ?></td>
       								 			<td><?php echo $admuser['username']; ?></td>
                            <td><?php echo $admuser['phone_number']; ?></td>
       								 			<td><?php echo $admuser['address']; ?></td><!-- 
                            <td><?php echo $admuser['location']; ?></td>
       								 			<td><?php echo $admuser['contact']; ?></td> -->
       								 			
       								 			<!-- <td><a href="deleteshop.php?id=<?php echo $adm_id; ?>" onclick = "if (! confirm('Are you Sure ?')) { return false; }" class="btn btn-danger">Delete</a></td>
       								 	 -->	</tr>
       								 	<?php 
       								 	$i++;
       								 }
   						 }
						} else {
    						echo "0 results";
						}

                        	?>
                        	<td></td>
                        	<td></td>
                        	<td></td>
                        	<td></td>
                        	<td></td>
                        </tr>
                      </thead>
                      <tbody>
           
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
            </div>
