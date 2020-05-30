<h1 class="page-header">Service Categories</h1>
<a class="btn btn-success" href="index.php?content=add_edit_service_cat">Add Service Category</a>
<div class="table-responsive">
    <table class="table table-striped">
        <thead>
            <tr>
                <th>#</th>
                <th>Name</th>
                <th>Descripton</th>
                <th>Image</th>
                <th>Created At</th>
                <th>Action</th>

            </tr>
        </thead>
        <tbody>

            <?php foreach ($service_category_lists as $service_category_lists) : ?>
                <?php $path = "../images/".$service_category_lists['img_name'];?>
                <tr>
                    <td><?php echo $service_category_lists['id']; ?></td>
                    <td><?php echo $service_category_lists['service_cat']; ?></td>
                    <td><?php echo $service_category_lists['service_description']; ?></td>
                    <td><img src="<?php echo $path; ?>" width="80"></td>

                    <td><?php echo $service_category_lists['created_at']; ?></td>
                    <td>
                        <a href="index.php?content=add_edit_service_cat&id=<?php echo $service_category_lists['id']; ?>" class="btn btn-primary">Edit</a>
                        <a href="<?php echo ADMIN_ACTION_URL?>?action=delete_service_category&id=<?php echo $service_category_lists['id']; ?>" class="btn btn-danger">Delete</a>
                    </td>
                </tr>
            <?php endforeach; ?>

        </tbody>
    </table>
</div>