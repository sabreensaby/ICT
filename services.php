<h1 class="page-header">Services</h1>
<a class="btn btn-success" href="index.php?content=add_edit_services">Add Service</a>
<div class="table-responsive">
    <table class="table table-striped">
        <thead>
            <tr>
                <th>#</th>
                <th>Service Name</th>
                <th>Name</th>
                <th>Staff Email</th>
                <th>Staff Roll</th>
                <th>Description</th>
                <th>Price</th>
                <th>Created_At</th>
                <th>Action</th>

            </tr>
        </thead>
        <tbody>

            <?php foreach ($service_lists as $service_list) : ?>
                <tr>
                    <td><?php echo $service_list['id']; ?></td>
                    <td><?php echo $service_list['service_type']; ?></td>
                    <td><?php echo $service_list['staff_name']; ?></td>
                    <td><?php echo $service_list['staff_email']; ?></td>
                    <td><?php echo $service_list['staff_role']; ?></td>
                    <td><?php echo $service_list['descriptions']; ?></td>
                    <td><?php echo $service_list['price']; ?></td>

                    <td><?php echo $service_list['created_at']; ?></td>
                    <td>
                        <a href="index.php?content=add_edit_services&id=<?php echo $service_list['id']; ?>" class="btn btn-primary">Edit</a>
                        <a href="<?php echo ADMIN_ACTION_URL ?>?action=delete_service&id=<?php echo $service_list['id']; ?>" class="btn btn-danger">Delete</a>
                    </td>
                </tr>
            <?php endforeach; ?>

        </tbody>
    </table>
</div>