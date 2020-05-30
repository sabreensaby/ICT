<h1 class="page-header">Add/Edit Service</h1>

<?php
$service_id = "";
$selected_cat = "";
$service_type = "";
$staff_name = "";
$staff_role = "";
$staff_email = "";
$Description ="";
$experience = "";
$skills = "";
$service_email = $price = "";

if (!empty($service_type_data)) {
    $service_id = $service_type_data[0]['id'];
    $selected_cat = $service_type_data[0]['service_type_id'];
    $service_type = $service_type_data[0]['service_type'];
    $Description = $service_type_data[0]['descriptions'];
    $staff_name = $service_type_data[0]['staff_name'];
    $staff_role = $service_type_data[0]['staff_role'];
    $staff_email = $service_type_data[0]['staff_email'];
    $price = $service_type_data[0]['price'];
    $experience = $service_type_data[0]['experience'];
    $skills = $service_type_data[0]['skills'];
}

?>

<form action="<?php echo ADMIN_ACTION_URL; ?>?action=add_edit_services" method="POST" id="services" enctype="multipart/form-data">

    <div class="form-group row">
        <label for="service_type" class="col-sm-2 col-form-label">Select Category</label>
        <div class="col-sm-10">
            <select name="service_type_id" class="form-control" id="service_type">
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
        <label for="staff_name" class="col-sm-2 col-form-label">Staff Name</label>
        <div class="col-sm-10">
            <input type="text" placeholder="Name" name="staff_name" value="<?php echo $staff_name;?>" class="form-control" id="staff_name">
        </div>
    </div>

    <div class="form-group row">
        <label for="staff_role" class="col-sm-2 col-form-label">Staff Role</label>
        <div class="col-sm-10">
            <input type="text" placeholder="Staff Role" name="staff_role" value="<?php echo $staff_role;?>" class="form-control" id="staff_role">
        </div>
    </div>


    <div class="form-group row">
        <label for="service_email" class="col-sm-2 col-form-label">Contact email</label>
        <div class="col-sm-10">
            <input type="email" placeholder="Email" name="service_email" value="<?php echo $staff_email; ?> " class="form-control" id="service_email">
        </div>
    </div>
    <div class="form-group row">
        <label for="service_cat" class="col-sm-2 col-form-label">Description</label>
        <div class="col-sm-10">
           <textarea name="service_description" id="Description" class="form-control" placeholder="Description"><?php echo $Description;?></textarea>
        </div>
    </div>

    <div class="form-group row">
        <label for="service_cat" class="col-sm-2 col-form-label">Price</label>
        <div class="col-sm-10">
            <input type="text" placeholder="Price" name="price" value="<?php echo $service_type; ?>" class="form-control" id="service_cat">
        </div>
    </div>
    <div class="form-group row">
        <label for="skills" class="col-sm-2 col-form-label">Skills</label>
        <div class="col-sm-10">
            <input type="text" placeholder="Skills" name="skills" value="<?php echo $skills; ?>" class="form-control" id="skills">
        </div>
    </div>
    <div class="form-group row">
        <label for="experience" class="col-sm-2 col-form-label">Experience</label>
        <div class="col-sm-10">
            <input type="text" placeholder="Experience" name="experience" value="<?php echo $experience; ?>" class="form-control" id="experience">
        </div>
    </div>

    <input type="hidden" name="service_id" value="<?php echo $service_id; ?>">

    <button type="submit" class="btn btn-primary">Submit</button>
</form>