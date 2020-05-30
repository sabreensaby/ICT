<h1 class="page-header">Add/Edit Packages</h1>

<?php
$gas_price = "";
$gas_details = "";
$package_id = "";

if (!empty($service_type_data)) {
    $gas_provider_id = $service_type_data[0]['id'];
    $gas_price = $service_type_data[0]['id'];
    $gas_details = $service_type_data[0]['service_type_id'];
}

?>

<form action="<?php echo ADMIN_ACTION_URL; ?>?action=add_edit_packages" method="POST" id="services">

    <div class="form-group row">
        <label for="package_name" class="col-sm-2 col-form-label">Package Name</label>
        <div class="col-sm-10">
            <input type="text" placeholder="Package Name" name="package_name" value="" class="form-control" id="package_name">
        </div>
    </div>
   
    <div class="form-group row">
        <label for="package_desc" class="col-sm-2 col-form-label">Description</label>
        <div class="col-sm-10">
           <textarea name="package_desc" id="package_desc" class="form-control" placeholder="Description"></textarea>
        </div>
    </div>

    <div class="form-group row">
        <label for="package_price" class="col-sm-2 col-form-label">Price</label>
        <div class="col-sm-10">
            <input type="text" placeholder="Price" name="package_price" value="" class="form-control" id="package_price">
        </div>
    </div>

    <input type="hidden" name="package_id" value="<?php echo $package_id; ?>">

    <button type="submit" class="btn btn-primary">Submit</button>
</form>