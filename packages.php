<h1 class="page-header">Packages</h1>
<a class="btn btn-success" href="index.php?content=add_edit_packages">Add Package</a>

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

			<?php foreach ($packages as $package) : ?>
				<tr>
					<td><?php echo $package['id']; ?></td>
					<td><?php echo $package['package_name']; ?></td>
					<td><?php echo $package['package_desc']; ?></td>
					<td><?php echo $package['package_price']; ?></td>
					<td><?php echo $package['created_at']; ?></td>
					<td>
						<a href="<?php echo ADMIN_ACTION_URL ?>?action=delete_package&id=<?php echo $package['id']; ?>" class="btn btn-danger">Delete</a>
					</td>
				</tr>
			<?php endforeach; ?>

		</tbody>
	</table>
</div>