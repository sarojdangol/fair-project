<?php 
	include "../layout/sidebar.php";
	include "../layout/header.php";

	include "../../app/connect.php";
?>
<div class="content">
        <div class="container-fluid">
          <div class="row">
            <div class="col-md-12">
              <div class="card">
                <div class="card-header card-header-primary">
                  <h4 class="card-title ">Manage Admin</h4>
                </div>
                <div class="card-body">
                  <div class="table-responsive">
                    <table class="table">
                      <thead class=" text-primary">
                        <th>
                          SN
                        </th>
                        <th>
                          Name
                        </th>
                        <th>
                          Email
                        </th>
                        <th>
                          Contact
                        </th>
                        <th>
                          Action
                        </th>
                        <tr>
                        	<?php 
                        	$sql = "SELECT * FROM admin";
                        		$result = $conn->query($sql);
                        		if ($result->num_rows > 0) {
                        			$i= 1;
    // output data of each row
    					while($row = $result->fetch_assoc()) {
       								 foreach ($result as $key => $admuser ) {
       								 	?>
       								 		<tr>
       								 			<?php $adm_id = $admuser['admin_id'];?>
       								 			<td><?php echo $i; ?></td>
       								 			<td><?php echo $admuser['name']; ?></td>
       								 			<td><?php echo $admuser['email']; ?></td>
       								 			<td><?php echo $admuser['contact']; ?></td>
       								 			
       								 			<td><a href="deleteadmin.php?id=<?php echo $adm_id; ?>" onclick = "if (! confirm('Are you Sure ?')) { return false; }" class="btn btn-danger">Delete</a></td>
       								 		</tr>
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
