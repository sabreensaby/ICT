<h1 class="page-header">Messages</h1>

<div class="table-responsive">
	<table class="table table-striped">
		<thead>
			<tr>
				<th>#</th>
				<th>Name</th>
				<th>Email</th>
				<th>Subject</th>
				<th>Comments</th>
				<th>Created At</th>
				<th>Action</th>
			</tr>
		</thead>
		<tbody>

			<?php foreach ($contacted_messages as $contacted_message) : ?>
				<tr>
					<td><?php echo $contacted_message['id']; ?></td>
					<td><?php echo $contacted_message['name']; ?></td>
					<td><?php echo $contacted_message['email']; ?></td>
					<td><?php echo $contacted_message['contact_reason']; ?></td>
					<td><?php echo $contacted_message['comments']; ?></td>
					<td><?php echo $contacted_message['created_at']; ?></td>
					<td>
						<a href="<?php echo ADMIN_ACTION_URL ?>?action=contacted_message&id=<?php echo $contacted_message['id']; ?>" class="btn btn-danger">Delete</a>
					</td>
				</tr>
			<?php endforeach; ?>

		</tbody>
	</table>
</div>