<h1 class="page-header">Add/Edit Gas Providers</h1>

<?php
$gas_price = "";
$gas_details = "";
$gas_provider_id = "";

if (!empty($service_type_data)) {
    $gas_provider_id = $service_type_data[0]['id'];
    $gas_price = $service_type_data[0]['id'];
    $gas_details = $service_type_data[0]['service_type_id'];
}

?>

<form action="<?php echo ADMIN_ACTION_URL; ?>?action=add_edit_gas_providers" method="POST" id="services" enctype="multipart/form-data">

    <div class="form-group row">
        <label for="service_type" class="col-sm-2 col-form-label">Select Category</label>
        <div class="col-sm-10">
            <select name="gas_provider" class="form-control" id="service_type">
                <option>--Gas provider--</option>
                <option value="Indane">Indane Gas</option>
                <option value="Bharat">Bharat Gas</option>
                <option value="Gujarat">Gujarat Gas</option>
                <option value="Indian">Indian Gas</option>
            </select>
        </div>
    </div>
   
    <div class="form-group row">
        <label for="gas_details" class="col-sm-2 col-form-label">Description</label>
        <div class="col-sm-10">
           <textarea name="gas_details" id="gas_details" class="form-control" placeholder="Description"><?php echo $gas_details;?></textarea>
        </div>
    </div>

    <div class="form-group row">
        <label for="gas_price" class="col-sm-2 col-form-label">Price</label>
        <div class="col-sm-10">
            <input type="text" placeholder="Price" name="gas_price" value="<?php echo $gas_price; ?>" class="form-control" id="gas_price">
        </div>
    </div>

    <input type="hidden" name="gas_provider_id" value="<?php echo $gas_provider_id; ?>">

    <button type="submit" class="btn btn-primary">Submit</button>
</form>