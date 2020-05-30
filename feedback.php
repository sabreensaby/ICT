<h1 class="page-header">Feedback</h1>

<div class="table-responsive">
	<table class="table table-striped">
		<thead>
			<tr>
				<th>#</th>
				<th>Name</th>
				<th>Email</th>
				<th>City</th>
				<th>Comments</th>
				<th>Created At</th>
				<th>Action</th>
			</tr>
		</thead>
		<tbody>

			<?php foreach ($feedback as $feedback) : ?>
				<tr>
					<td><?php echo $feedback['id']; ?></td>
					<td><?php echo $feedback['name']; ?></td>
					<td><?php echo $feedback['email']; ?></td>
					<td><?php echo $feedback['city']; ?></td>
					<td><?php echo $feedback['comment']; ?></td>
					<td><?php echo $feedback['created_at']; ?></td>
					<td>
						<a href="<?php echo ADMIN_ACTION_URL ?>?action=remove_feedback&id=<?php echo $feedback['id']; ?>" class="btn btn-danger">Delete</a>
					</td>
				</tr>
			<?php endforeach; ?>

		</tbody>
	</table>
</div>