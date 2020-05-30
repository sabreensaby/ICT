<h1 class="page-header">Add/Edit Category</h1>

<?php
$img_name ="";
$service_id = "";
$cat_name = "";
$Description ="";
$path = "";

if (!empty($service_category_lists)) {

	$service_id = $service_category_lists[0]['id'];
	$cat_name = $service_category_lists[0]['service_cat'];
	$img_name = $service_category_lists[0]['img_name'];
	$Description = $service_category_lists[0]['service_description'];
	$path = "../images/".$img_name;
}

?>

<form action="<?php echo ADMIN_ACTION_URL; ?>?action=add_edit_service_cat" method="POST" id="service_cat" enctype="multipart/form-data">

	<div class="form-group row">
		<label for="service_cat" class="col-sm-2 col-form-label">Category Name</label>
		<div class="col-sm-10">
			<input type="text" name="service_cat" value="<?php echo $cat_name;?>" class="form-control" id="service_cat" placeholder="Service Category">
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
		<label for="Description" class="col-sm-2 col-form-label">Description</label>
		<div class="col-sm-10">
			<textarea name="service_description" id="Description" class="form-control" placeholder="Description"><?php echo $Description;?></textarea>
		</div>
	</div>
	<input type="hidden" name="service_id" value="<?php echo $service_id; ?>">

	<button type="submit" class="btn btn-primary">Submit</button>
</form>