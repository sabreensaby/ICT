<h1 class="page-header">Gas Providers</h1>
<a class="btn btn-success" href="index.php?content=add_edit_gas_providers">Add Gass Providers</a>

<div class="table-responsive">
    <table class="table table-striped">
        <thead>
            <tr>
                <th>#</th>
                <th>Gas Providers</th>
                <th>Details</th>
                <th>Price</th>
                <th>Created_At</th>
                <th>Action</th>

            </tr>
        </thead>
        <tbody>

            <?php foreach ($gas_connections as $gas_connection) : ?>
                <tr>
                    <td><?php echo $gas_connection['id']; ?></td>
                    <td><?php echo $gas_connection['gas_service_provider']; ?></td>
                    <td><?php echo $gas_connection['gas_connection_details']; ?></td>
                    <td><?php echo $gas_connection['gas_price']; ?></td>
                    <td><?php echo $gas_connection['created_at']; ?></td>
                    <td>
                        <a href="<?php echo ADMIN_ACTION_URL ?>?action=delete_gas_connection&id=<?php echo $gas_connection['id']; ?>" class="btn btn-danger">Delete</a>
                    </td>
                </tr>
            <?php endforeach; ?>

        </tbody>
    </table>
</div>