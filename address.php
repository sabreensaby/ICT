<?php
    $name = "";
    $email = "";
    $contact = "";
    $address = "";
    $city = "";
    $state = "";
    $zip = "";

    if(isset($address1) &&  !empty($address1[0]) ){
        $name = $address1[0]['name'];
        $email = $address1[0]['email'];
        $contact = $address1[0]['contactno'];
        $address = $address1[0]['address'];
        $city = $address1[0]['city'];
        $state = $address1[0]['state'];
        $zip = $address1[0]['zip_code'];
    }
?>
<form action="<?php echo ADMIN_ACTION_URL; ?>?action=add_edit_address" method="POST" id="add_edit_address">
    <div class="row">
    <div class="form-group">
        <label for="name" class="col-sm-2 col-form-label">Name</label>
        <div class="col-sm-10">
            <input type="text" placeholder="Name" name="name" value="<?php echo $name;?>" class="form-control" id="name" >
        </div>
    </div>
    <div class="form-group">
        <label for="service_email" class="col-sm-2 col-form-label">Email</label>
        <div class="col-sm-10">
            <input type="email" placeholder="Email" name="email" value="<?php echo $email; ?>" class="form-control" id="email" readonly disabled>
        </div>
    </div>

     <div class="form-group">
        <label for="contact" class="col-sm-2 col-form-label">Phone No.</label>
        <div class="col-sm-10">
            <input type="text" placeholder="Phone No." name="contact" value="<?php echo $contact; ?>" class="form-control" id="">
        </div>
    </div>
    
    <div class="form-group">
        <label for="service_email" class="col-sm-2 col-form-label">Address</label>
        <div class="col-sm-10">
        <textarea name="address" id="Description" rows="3" class="form-control" placeholder="Description"><?php echo $address;?></textarea>
        </div>
    </div>



    <div class="form-group">
        <label for="city" class="col-sm-2 col-form-label">City</label>
        <div class="col-sm-10">
            <input type="text" placeholder="City" name="city" value="<?php echo $city; ?>" class="form-control" id="city">
        </div>
    </div>
    <div class="form-group">
        <label for="state" class="col-sm-2 col-form-label">State</label>
        <div class="col-sm-10">
            <input type="text" placeholder="State" name="state" value="<?php echo $state; ?>" class="form-control" id="state">
        </div>
    </div>
    <div class="form-group">
        <label for="zip" class="col-sm-2 col-form-label">Zip code</label>
        <div class="col-sm-10">
            <input type="text" placeholder="zip" name="zip" value="<?php echo $zip; ?>" class="form-control" id="zip">
        </div>
    </div>
    <div class="form-group">
    <button type="submit" class="btn btn-primary">Submit</button>
    </div>

    </div>
</form>