<h1 class="page-header">Products</h1>
<a class="btn btn-success" href="index.php?content=add_edit_products">Add Products</a>
<div class="table-responsive">
    <table class="table table-striped">
        <thead>
            <tr>
                <th>#</th>
                <th>Product Title</th>
                <th>Product Code</th>
                <th>Category</th>
                <th>Price</th>
                <th>Descption</th> 
                <th>Image</th>
                <th>Created_At</th>
                <th>Action</th>

            </tr>
        </thead>
        <tbody>

            <?php foreach ($products as $product) : ?>
                <tr>
                    <td><?php echo $product['id']; ?></td>
                    <td><?php echo $product['product_name']; ?></td>
                    <td><?php echo $product['product_code']; ?></td>
                    <td><?php echo $product['service_type']; ?></td>
                    <td><?php echo $product['price']; ?></td>
                    <td><?php echo $product['descrptions']; ?></td>
                    <td><img src="../images/<?php echo $product['img_name']; ?>" width="80"></td>

                    <td><?php echo $product['created_at']; ?></td>
                    <td>
                        <a href="index.php?content=add_edit_products&id=<?php echo $product['id']; ?>" class="btn btn-primary">Edit</a>
                        <a href="<?php echo ADMIN_ACTION_URL ?>?action=delete_products&id=<?php echo $product['id']; ?>" class="btn btn-danger">Delete</a>
                    </td>
                </tr>
            <?php endforeach; ?>

        </tbody>
    </table>
</div>