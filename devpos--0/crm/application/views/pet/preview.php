<style type="text/css">
.card-img-top{
    height: 288px;
    width: auto;
}
.card-body{
    padding: 20px;
}
</style>

<div class="app-content content container-fluid">
    <div class="content-wrapper">
        <div class="content-header row">
        </div>
        <div class="content-body">
            
            <div class="card card-block">
                <div class="box-header with-border">
                        <h3 class="box-title">Pet Detail</h3>
                        <!-- <div class="container mx-auto mt-4">
                            <div class="row">
                                <div class="col-md-5">
                                    <div class="card">
                                        <img src="https://i.imgur.com/ZTkt4I5.jpg" class="card-img-top" alt="...">
                                        <div class="card-body">
                                            <h5 class="card-title">Card title</h5>
                                            <h6 class="card-subtitle mb-2 text-muted">Card subtitle</h6>
                                            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                                            <a href="#" class="btn mr-2"><i class="fas fa-link"></i> Visit Site</a>
                                            <a href="#" class="btn "><i class="fab fa-github"></i> Github</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div> -->

    <?php
        $attributes = array('class' => 'card-body', 'id' => 'data_form');
        echo form_open_multipart('', $attributes);
        ?>
        <hr>

       <div class="form-group row">

            <label class="col-sm-2 col-form-label"
                   for="accno">Pet Name:</label>

            <div class="col-sm-6">
                <input type="text" placeholder="Pet Name"
                       class="form-control margin-bottom required" value="<?php echo $pet->pet_name ?>" name="pet_name">
            </div>
        </div>
        <div class="form-group row">

            <label class="col-sm-2 col-form-label"
                   for="accno">Pet color:</label>

            <div class="col-sm-6">
                <input type="text" placeholder="Pet color"
                       class="form-control margin-bottom required" value="<?php echo $pet->color ?>" name="pet_color">
            </div>
        </div>
        <div class="form-group row">
            <label class="col-sm-2 col-form-label"
            for="accno">Pet Breed:</label>

            <div class="col-sm-6">
            <input type="text" placeholder="Pet Breed"
            class="form-control margin-bottom required" value="<?php echo $pet->pet_breed ?>" name="pet_breed">
            </div>
        </div>
        <div class="form-group row">

            <label class="col-sm-2 col-form-label"
                   for="accno">Pet Type:</label>

            <div class="col-sm-6">
                <input type="text" placeholder="Pet Type"
                       class="form-control margin-bottom required" value="<?php echo $pet->pet_type ?>" name="pet_type">
            </div>
        </div>
        <div class="form-group row">

            <label class="col-sm-2 control-label"
            for="date_of_birth">Date of Birth:</label>

            <div class="col-sm-6">
            <input type="text" class="form-control required"
            placeholder="Date of Birth" name="date_of_birth" id="petdob"
            autocomplete="false" value="<?php echo $pet->date_of_birth ?>" readonly>
            </div>
            </div>
        <div class="form-group row">

            <label class="col-sm-2 col-form-label"
                   for="accno">Microchip Number:</label>

            <div class="col-sm-6">
                <input type="text" placeholder="Microchip Number"
                       class="form-control margin-bottom required" value="<?php echo $pet->microchip_number ?>" name="microchip_number">
            </div>
        </div>
        <div class="form-group row">
            <label class="col-sm-2 col-form-label" for="accno">Mark Difference:</label>
            <div class="col-sm-6">
            <input type="text" placeholder="Mark Difference" class="form-control margin-bottom required" value="<?php echo $pet->mark_difference ?>" name="mark_difference">
            </div>
        </div>        
        </div>
        <h3 class="box-title">Booking Detail</h3>

                <table class="table" width="100%" border="1" style="border-collapse: 0">
                <thead>
                    <th>Doctor</th>
                    <th>Specilities</th>
                    <th>Booking Date</th>
                    <th>From</th>
                    <th>To</th>
                </thead>
                <tbody>
                <?php foreach (Bookings($pet->id) as $key => $booking){?>
                    <tr>
                        <td><?php echo(DoctorName($booking->doctor_id)); ?></td>
                        <td><?php echo(Specialities($booking->speciality_id)); ?></td>
                        <td><?php echo($booking->on); ?></td>
                        <td><?php echo($booking->from); ?></td>
                        <td><?php echo($booking->to); ?></td>
                    </tr>
                <?php } ?>
                </tbody>
                </table>

            </div>

        </div>
    </div>
</div>
</div>
