<div class="card card-block">
    <div id="notify" class="alert alert-success" style="display:none;">
        <a href="#" class="close" data-dismiss="alert">&times;</a>

        <div class="message"></div>
    </div>
    <div class="card card-block">
        <?php
        $attributes = array('class' => 'card-body', 'id' => 'data_form');
        echo form_open_multipart('', $attributes);
        ?>


        <h5>Add new Pet</h5>
        <hr>

        <div class="form-group row">

            <label class="col-sm-2 col-form-label"
                   for="accno">Pet Name</label>

            <div class="col-sm-6">
                <input type="text" placeholder="Pet Name"
                       class="form-control margin-bottom required" value="<?php echo $pet->pet_name ?>" name="pet_name">
            </div>
        </div>
        <div class="form-group row">

            <label class="col-sm-2 col-form-label"
                   for="accno">Pet color</label>

            <div class="col-sm-6">
                <input type="text" placeholder="Pet color"
                       class="form-control margin-bottom required" value="<?php echo $pet->color ?>" name="pet_color">
            </div>
        </div>
        <div class="form-group row">
            <label class="col-sm-2 col-form-label"
            for="accno">Pet Breed</label>

            <div class="col-sm-6">
            <input type="text" placeholder="Pet Breed"
            class="form-control margin-bottom required" value="<?php echo $pet->pet_breed ?>" name="pet_breed">
            </div>
        </div>
        <div class="form-group row">

            <label class="col-sm-2 col-form-label"
                   for="accno">Pet Type</label>

            <div class="col-sm-6">
                <input type="text" placeholder="Pet Type"
                       class="form-control margin-bottom required" value="<?php echo $pet->pet_type ?>" name="pet_type">
            </div>
        </div>
        <div class="form-group row">

            <label class="col-sm-2 control-label"
            for="date_of_birth">Date of Birth</label>

            <div class="col-sm-6">
            <input type="text" class="form-control required"
            placeholder="Date of Birth" name="date_of_birth" id="petdob"
            autocomplete="false" value="<?php echo $pet->date_of_birth ?>" readonly>
            </div>
            </div>
        <div class="form-group row">

            <label class="col-sm-2 col-form-label"
                   for="accno">Microchip Number</label>

            <div class="col-sm-6">
                <input type="text" placeholder="Microchip Number"
                       class="form-control margin-bottom required" value="<?php echo $pet->microchip_number ?>" name="microchip_number">
            </div>
        </div>
        <div class="form-group row">

            <label class="col-sm-2 col-form-label"
                   for="accno">Mark Difference</label>

            <div class="col-sm-6">
                <input type="text" placeholder="Mark Difference"
                       class="form-control margin-bottom required" value="<?php echo $pet->mark_difference ?>" name="mark_difference">
            </div>
            <input type="hidden" name ="pet_id" value="<?php echo $_GET['id'] ?>">
        </div>

        <hr>
        <input type="hidden" name="pet_photo" id="pet_photo">
            <div class="form-group row"><label
                class="col-sm-2 col-form-label"><?php echo $this->lang->line('Image') ?></label>
            <div class="col-sm-6">
            <div id="progress" class="progress">
                <div class="progress-bar progress-bar-success"></div>
            </div>
            <!-- The container for the uploaded files -->
            <table id="files" class="files"></table>
            <br>
            <span class="btn btn-success fileinput-button">
            <i class="glyphicon glyphicon-plus"></i>
            <span>Select files...</span>
                <!-- The file input field used as target for the file upload widget -->
            <input id="fileupload" type="file" name="files">
            </span>
            <br>
            <pre>Allowed: gif, jpeg, png (Use light small weight images for fast loading - 200x200)</pre>
            <br>
            <!-- The global progress bar -->

            </div>
            </div>
            
        <div class="form-group row">

            <label class="col-sm-2 col-form-label"></label>

            <div class="col-sm-4">
                <input type="submit" id="submit-data" class="btn btn-success margin-bottom"
                       value="update Pet" data-loading-text="updating...">
                <input type="hidden" value="pets/update" id="action-url">
            </div>
        </div>


        </form>
    </div>
</div>
<script src="<?php echo assets_url('assets/myjs/jquery.ui.widget.js'); ?>"></script>
<script src="<?php echo assets_url('assets/myjs/jquery.fileupload.js') ?>"></script>
<script>

        /*jslint unparam: true */
    /*global window, $ */
    $(function () {
        'use strict';
        // Change this to the location of your server-side upload handler:
        var url = '<?php echo base_url() ?>pets/file_handling';
        $('#fileupload').fileupload({
            url: url,
            dataType: 'json',
            formData: {'<?=$this->security->get_csrf_token_name()?>': crsf_hash},
            done: function (e, data) {
                var img = 'default.png';
                $.each(data.result.files, function (index, file) {
                    $('#files').html('<tr><td><a data-url="<?php echo base_url() ?>pets/file_handling?op=delete&name=' + file.name + '" class="aj_delete"><i class="btn-danger btn-sm icon-trash-a"></i> ' + file.name + ' </a><img style="max-height:200px;" src="<?php echo base_url() ?>userfiles/pet/' + file.name + '"></td></tr>');
                    img = file.name;
                });

                $('#pet_photo').val(img);
            },
            progressall: function (e, data) {
                var progress = parseInt(data.loaded / data.total * 100, 10);
                $('#progress .progress-bar').css(
                    'width',
                    progress + '%'
                );
            }
        }).prop('disabled', !$.support.fileInput)
            .parent().addClass($.support.fileInput ? undefined : 'disabled');
    });
</script>