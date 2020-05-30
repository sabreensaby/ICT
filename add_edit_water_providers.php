<h1 class="page-header">Add/Edit Water Providers</h1>

<?php
/*$water_price = "";
$water_details = "";
$water_provider_id = "";

if (!empty($service_type_data)) {
    $water_provider_id = $service_type_data[0]['id'];
    $gas_price = $service_type_data[0]['id'];
    $gas_details = $service_type_data[0]['service_type_id'];
}*/

?>

<form action="<?php echo ADMIN_ACTION_URL;?>?action=add_edit_water_providers" method="POST" id="services" enctype="multipart/form-data">

    <div class="form-group row">
        <label for="service_type" class="col-sm-2 col-form-label">Select Category</label>
        <div class="col-sm-10">
            <select name="water_provider" class="form-control" id="service_type">
                <option>--Water provider--</option>
                <option value="GWSSB">GWSSB</option>
                <option value="GWSASB">GWSASB</option>
                <option value="Gujarat Water Supplier">Gujarat Water Supplier</option>
                <option value="Earth Water Provider">Earth Water Provider</option>
            </select>
        </div>
    </div>
   
    <div class="form-group row">
        <label for="gas_details" class="col-sm-2 col-form-label">Description</label>
        <div class="col-sm-10">
           <textarea name="water_details" id="water_details" class="form-control" placeholder="Description"></textarea>
        </div>
    </div>

    <div class="form-group row">
        <label for="gas_price" class="col-sm-2 col-form-label">Price</label>
        <div class="col-sm-10">
            <input type="text" placeholder="Price" name="water_price" value="" class="form-control" id="gas_price">
        </div>
    </div>

    <input type="hidden" name="water_provider_id" value="">

    <button type="submit" class="btn btn-primary">Submit</button>
</form>