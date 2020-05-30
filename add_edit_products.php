<h1 class="page-header">Add/Edit Product</h1>

<?php
$product_id = "";
$selected_cat = "";
$service_type = "";
$product_title = "";
$product_code = "";
$Description ="";
$old_img = "";
$price = "";

if (!empty($products)) {
    $product_id = $products[0]['id'];
    $selected_cat = $products[0]['product_cat'];
    $old_img = $products[0]['img_name'];
    $Description = $products[0]['descrptions'];
    $product_title = $products[0]['product_name'];
    $product_code = $products[0]['product_code'];
    $price = $products[0]['price'];
}

?>

<form action="<?php echo ADMIN_ACTION_URL; ?>?action=add_edit_products" method="POST" id="products" enctype="multipart/form-data">

    <div class="form-group row">
        <label for="service_type" class="col-sm-2 col-form-label">Select Category</label>
        <div class="col-sm-10">
            <select name="category_id" class="form-control" id="product_cat">
                <option>--Select Service Category--</option>
                <?php foreach ($service_type_lists as $key => $service_type_list) { 
                        $selected = "";
                        if($selected_cat == $service_type_list['id']){
                            $selected = " selected ";
                        }
                    ?>
                    <option value="<?php echo $service_type_list['id'];?>" <?php echo $selected;?>><?php echo $service_type_list['service_type']; ?></option>
                <?php } ?>
            </select>
        </div>
    </div>
    <div class="form-group row">
        <label for="product_title" class="col-sm-2 col-form-label">Product Title</label>
        <div class="col-sm-10">
            <input type="text" placeholder="Product Title" name="product_title" value="<?php echo $product_title;?>" class="form-control" id="product_title">
        </div>
    </div>

    <div class="form-group row">
        <label for="product_code" class="col-sm-2 col-form-label">Product Code</label>
        <div class="col-sm-10">
            <input type="text" placeholder="Product Code" name="product_code" value="<?php echo $product_code;?>" class="form-control" id="product_code">
        </div>
    </div>


    
    <div class="form-group row">
        <label for="service_cat" class="col-sm-2 col-form-label">Description</label>
        <div class="col-sm-10">
           <textarea name="product_description" id="Description" class="form-control" placeholder="Description"><?php echo $Description;?></textarea>
        </div>
    </div>

    <div class="form-group row">
        <label for="product_img" class="col-sm-2 col-form-label">Product Image</label>
        <div class="col-sm-10">
            <input type="file" name="image" value="" class="form-control" id="product_img">
        </div>
    </div>

    <div class="form-group row">
        <label for="price" class="col-sm-2 col-form-label">Price</label>
        <div class="col-sm-10">
            <input type="text" placeholder="Price" name="price" value="<?php echo $price; ?>" class="form-control" id="product">
        </div>
    </div>

    <input type="hidden" name="product_id" value="<?php echo $product_id; ?>">
    <input type="hidden" name="old_img" value="<?php echo $old_img; ?>">

    <button type="submit" class="btn btn-primary">Submit</button>
</form>