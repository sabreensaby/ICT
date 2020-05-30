<h1 class="page-header">Users</h1>

<div class="table-responsive">
    <table class="table table-striped">
        <thead>
            <tr>
                <th>#</th>
                <th>Name</th>
                <th>Contact info</th>
                <th>Dob</th>
                <th>Username</th>
                <th>Address</th>
                <th>Created_At</th>
                <th>Action</th>

            </tr>
        </thead>
        <tbody>

            <?php foreach ($users as $user) : ?>
                <tr>
                    <td><?php echo $user['id']; ?></td>
                    <td><?php echo $user['name']; ?></td>
                    <td>
                        <?php echo $user['email']; ?><br>
                        <?php echo $user['contactno']; ?>
                    </td>
                    <td><?php echo $user['dob']; ?></td>
                    <td><?php echo $user['username']; ?></td>
                    <td><?php echo $user['address']; ?></td>

                    <td><?php echo $user['created_at']; ?></td>
                    <td>
                        <a href="<?php echo ADMIN_ACTION_URL ?>?action=delete_user&id=<?php echo $user['id']; ?>" class="btn btn-danger">Delete</a>
                    </td>
                </tr>
            <?php endforeach; ?>

        </tbody>
    </table>
</div>