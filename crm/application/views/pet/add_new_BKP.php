<div class="app-content content container-fluid">
    <div class="content-wrapper">
        <div class="content-header row">
        </div>
        <div class="content-body">
            
            <div class="card card-block">
                <div class="box-header with-border">
                <h3 class="box-title">Pets</h3>
                <div id="notify" class="alert alert-success" style="display:none;">
        <a href="#" class="close" data-dismiss="alert">&times;</a>

        <div class="message"></div>
    </div>
    <div class="card card-block">
      

    <?php
        $attributes = array('class' => 'card-body', 'id' => 'data_form');
        echo form_open_multipart('', $attributes);
        ?>
        <h5>Add new Pet <?php echo $usernm; ?></h5>
        <hr>

        <div class="form-group row">

            <label class="col-sm-2 col-form-label"
                   for="accno">Pet Name</label>

            <div class="col-sm-6">
                <input type="text" placeholder="Pet Name"
                       class="form-control margin-bottom required" name="pet_name">
            </div>
        </div>
        <div class="form-group row">
        <input type="hidden" name="<?php echo $this->security->get_csrf_token_name();?>" value="<?php echo $this->security->get_csrf_hash();?>">
        <input type="hidden" name="user_id" value="<?php echo $user_id;?>">
            <label class="col-sm-2 col-form-label"
                   for="accno">Pet color</label>

            <div class="col-sm-6">
                <input type="text" placeholder="Pet color"
                       class="form-control margin-bottom required" name="pet_color">
            </div>
        </div>
        <div class="form-group row">
            <label class="col-sm-2 col-form-label"
            for="accno">Pet Breed</label>

            <div class="col-sm-6">
            <input type="text" placeholder="Pet Breed"
            class="form-control margin-bottom required" name="pet_breed">
            </div>
        </div>
        <div class="form-group row">

            <label class="col-sm-2 col-form-label"
                   for="accno">Pet Type</label>

            <div class="col-sm-6">
                <input type="text" placeholder="Pet Type"
                       class="form-control margin-bottom required" name="pet_type">
            </div>
        </div>
        <div class="form-group row">

            <label class="col-sm-2 control-label"
            for="date_of_birth">Date of Birth</label>

            <div class="col-sm-6">
                <input type="date" class="form-control required"
                placeholder="Date of Birth" name="date_of_birth" id="petdob"
                autocomplete="false" value="<?php echo date("d-m-Y")?>">
            </div>
        </div>
        <div class="form-group row">

            <label class="col-sm-2 col-form-label"
                   for="accno">Microchip Number</label>

            <div class="col-sm-6">
                <input type="text" placeholder="Microchip Number"
                       class="form-control margin-bottom required" name="microchip_number">
            </div>
        </div>
        <div class="form-group row">

            <label class="col-sm-2 col-form-label"
                   for="accno">Mark Difference</label>

            <div class="col-sm-6">
                <input type="text" placeholder="Mark Difference"
                       class="form-control margin-bottom required" name="mark_difference">
            </div>
        </div>
        <div class="form-group row">

        <label class="col-sm-2 col-form-label"
        for="pet_photo">Pet Photo</label>

        <div class="col-sm-6">
        <input type="file" name="pet_photo" class="form-control margin-bottom" accept="image/*" />
        </div>
        </div>
        <div class="form-group row">

            <label class="col-sm-2 col-form-label"></label>

            <div class="col-sm-4">
                <input type="submit" id="submit-data" class="btn btn-success margin-bottom"
                       value="Add Pet" data-loading-text="Adding...">
                <input type="hidden" value="pets/store" id="action-url">
            </div>
        </div>


        </form>
        </div>
            </div>
        </div>

    </div>
</div>
</div>
