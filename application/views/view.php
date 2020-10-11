<div class="row">
    <div class="col-md-12">
        <div class="box">
            <div class="box-header">
                <h3 class="box-title">Rating</h3>
            	<div class="box-tools">
                </div>
            </div>
            <div class="box-body">
                <table class="table table-striped">
                    <tr>
                        <th>ID</th>
						<th>Staff</th>
						<th>Rating Type</th>
						<th>Customer</th>
                        <th>Reason</th>
						<th>Date Created</th>
                    </tr>
                    <tr>
                        <td><?php echo $rating['id']; ?></td>
						<td><?php echo $rating['user_id']; ?></td>
						<td><?php echo $rating['rating_type']; ?></td>
						<td><?php echo $rating['added_by']; ?></td>
                        <td><?php echo $rating['reason']; ?></td>
						<td><?php echo $rating['date_created']; ?></td>
                    </tr>
                </table>
                                
            </div>
        </div>
    </div>
</div>
<div class="row">
    <div class="col-md-12">
        <div class="box">
            <div class="box-header">
                <h3 class="box-title">User</h3>
            	<div class="box-tools">
                </div>
            </div>
            <div class="box-body">
                <table class="table table-striped">
                    <tr>
                        <th>Forename</th>
						<th>First Name</th>
						<th>Last Name</th>
						<th>Mobile No</th>
                        <th>City</th>
                        <th>Vehicle Type</th>
                        <th>Model</th>
                    </tr>
                    <tr>
                        <td><?php echo $user['forename']; ?></td>
						<td><?php echo $user['first_name']; ?></td>
						<td><?php echo $user['last_name']; ?></td>
						<td><?php echo $user['mobile_number']; ?></td>
                        <td><?php echo $user['city']; ?></td>
                        <td><?php echo $user['vehicle_type']; ?></td>
                        <td><?php echo $user['model']; ?></td>
                    </tr>
                </table>
                                
            </div>
        </div>
    </div>
</div>

