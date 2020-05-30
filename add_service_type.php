<h1 class="page-header">Add/Edit Service Type</h1>

<?php
$service_id = "";
$selected_cat = "";
$service_type = "";
$img_name = "";
$path = "";
$is_staff_checkbox = "";

if (!empty($service_type_data)) {

    $service_id = $service_type_data[0]['id'];
    $selected_cat = $service_type_data[0]['service_id'];
    $service_type = $service_type_data[0]['service_type'];
    $img_name = $service_category_lists[0]['img_name'];
    $path = "../images/".$img_name;
    $is_staff_page = $service_type_data[0]['is_staff_page'];

    if($is_staff_page=="yes"){
        $is_staff_checkbox = "checked";
    }
}

?>

<form action="<?php echo ADMIN_ACTION_URL; ?>?action=add_edit_service_type" method="POST" id="service_cat" enctype="multipart/form-data">

    <div class="form-group row">
        <label for="service_cat" class="col-sm-2 col-form-label">Select Category</label>
        <div class="col-sm-10">
            <select name="service_category_lists" class="form-control">
                <option>--Select Service Category--</option>
                <?php foreach ($service_category_lists as $key => $service_category_list) { 
                        $selected = "";
                        if($selected_cat == $service_category_list['id']){
                            $selected = " selected ";
                        }
                    ?>
                    <option value="<?php echo $service_category_list['id'];?>" <?php echo $selected;?>><?php echo $service_category_list['service_cat']; ?></option>
                <?php } ?>
            </select>
        </div>
    </div>


    <div class="form-group row">
        <label for="service_cat_img" class="col-sm-2 col-form-label">Image</label>
        <div class="col-sm-10">
            <input type="file" name="image" class="form-control" id="service_cat_img">
            <p><img src="<?php echo $path; ?>" width="80"></p>

            <input type="hidden" name="old_img" value="<?php echo $img_name;?>">
        </div>
    </div>


    <div class="form-group row">
        <label for="service_cat" class="col-sm-2 col-form-label">Service Type</label>
        <div class="col-sm-10">
            <input type="text" name="service_cat" value="<?php echo $service_type; ?> " class="form-control" id="service_cat" placeholder="Service Category">
        </div>
    </div>
    <div class="form-group row">
        <label for="is_staff_page" class="col-sm-2 col-form-label">Is kitchen Staff</label>
        <div class="col-sm-10">
            <input type="checkbox" name="is_staff_page" value="yes" id="is_staff_page" <?php echo $is_staff_checkbox?> >
        </div>
    </div>
    <input type="hidden" name="service_id" value="<?php echo $service_id; ?>">

    <button type="submit" class="btn btn-primary">Submit</button>
</form>