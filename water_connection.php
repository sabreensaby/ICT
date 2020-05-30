<h1 class="page-header">Water Providers</h1>
<a class="btn btn-success" href="index.php?content=add_edit_water_providers">Add Water Providers</a>

<div class="table-responsive">
	<table class="table table-striped">
		<thead>
			<tr>
				<th>#</th>
				<th>Water Providers</th>
				<th>Details</th>
				<th>Price</th>
				<th>Created_At</th>
				<th>Action</th>

			</tr>
		</thead>
		<tbody>

			<?php foreach ($water_connections as $water_connection) : ?>
				<tr>
					<td><?php echo $water_connection['id']; ?></td>
					<td><?php echo $water_connection['water_connection_provider']; ?></td>
					<td><?php echo $water_connection['water_connection_details']; ?></td>
					<td><?php echo $water_connection['water_price']; ?></td>
					<td><?php echo $water_connection['created_at']; ?></td>
					<td>
						<a href="<?php echo ADMIN_ACTION_URL ?>?action=delete_water_connection&id=<?php echo $water_connection['id']; ?>" class="btn btn-danger">Delete</a>
					</td>
				</tr>
			<?php endforeach; ?>

		</tbody>
	</table>
</div>