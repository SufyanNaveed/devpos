
<div class="content-body">

    <div class="card card-block bg-white">
        <div id="notify" class="alert alert-success" style="display:none;">
            <a href="#" class="close" data-dismiss="alert">&times;</a>

            <div class="message"></div>
        </div>
        <form action="<?php echo base_url('employee/submit_user')?>" method="post" id="data_form" class="card-body" enctype="multipart/form-data">

            <input type="hidden" name="<?php echo $this->security->get_csrf_token_name();?>" value="<?php echo $this->security->get_csrf_hash();?>">
            <h5><?php echo $this->lang->line('Employee Details') ?> </h5>
            <hr>
            <?php if ($this->session->flashdata("messagePr")) { ?>
                <div class="alert alert-info">
                    <?php echo $this->session->flashdata("messagePr") ?>
                </div>
            <?php } ?>
            <div class="form-group row">

                <label class="col-sm-6 col-form-label"
                       for="name"><?php echo $this->lang->line('UserName') ?>
                    <small class="error">(Use Only a-z0-9)</small>
                </label>

                <div class="col-sm-10">
                    <input type="text"
                           class="form-control margin-bottom required" name="username"
                           placeholder="username">
                </div>
            </div>

            <div class="form-group row">

                <label class="col-sm-6 col-form-label" for="email">Email</label>

                <div class="col-sm-10">
                    <input type="email" placeholder="email"
                           class="form-control margin-bottom required" name="email"
                           placeholder="email">
                </div>
            </div>
            <div class="form-group row">

                <label class="col-sm-6 col-form-label"
                       for="password"><?php echo $this->lang->line('Password') ?>
                    <small>(min length 6 | max length 20 | a-zA-Z 0-9 @ $)</small>
                </label>

                <div class="col-sm-10">
                    <input type="text" placeholder="Password"
                           class="form-control margin-bottom required" name="password"
                           placeholder="password">
                </div>
            </div>
            <?php if ($this->aauth->get_user()->roleid >= 0) { ?>
                <div class="form-group row">

                    <label class="col-sm-2 col-form-label"
                           for="name"><?php echo $this->lang->line('UserRole') ?></label>

                    <div class="col-sm-5">
                        <select name="roleid" class="form-control margin-bottom" onchange="set_form(this.value);">
                            <!-- <option value="4">< ? = $this->lang->line('Business Manager') ?></option>
                            <option value="3">< ? = $this->lang->line('Sales Manager') ?></option>
                            <option value="5">< ?= $this->lang->line('Business Owner') ?></option>
                            <option value="2">< ?= $this->lang->line('Sales Person') ?></option>
                            <option value="1">< ?= $this->lang->line('Inventory Manager') ?></option>
                            <option value="-1">< ?= $this->lang->line('Project Manager') ?></option> -->
                            <option value="6"><?= $this->lang->line('Doctor') ?></option>
                            <option value="9"><?= $this->lang->line('Receptionist') ?></option>
                            <option value="10"><?= $this->lang->line('Radiologist') ?></option>
                        </select>
                    </div>
                </div>


            <?php } ?>

            <div class="form-group row">

                <label class="col-sm-2 col-form-label"
                       for="name"><?php echo $this->lang->line('Business Location') ?></label>

                <div class="col-sm-5">
                    <select name="location" class="form-control margin-bottom">
                        <option value="0"><?php echo $this->lang->line('Default') ?></option>
                        <?php $loc = locations();

                        foreach ($loc as $row) {
                            echo ' <option value="' . $row['id'] . '"> ' . $row['cname'] . '</option>';
                        }

                        ?>
                    </select>
                </div>
            </div>
            <hr>
            <!-- get Doctor Detail area -->
        <div class="doctor_availability">
            <h5>Doctor Professional Detail </h5>
            <hr>
            <div class="form-group row">
                <label class="col-sm-2 col-form-label"
                for="whatsapp_link">WhatsApp profile Link</label>
                <div class="col-sm-10">
                <input type="text" placeholder="Whatsapp profile Link"
                class="form-control margin-bottom" name="whatsapp_link">
                </div>
            </div>

            <div class="form-group row" id="speciality_area">
                <label class="col-sm-2 col-form-label"
                for="speciality">speciality(s)</label>
                <div class="col-sm-10">
                <a href="javascript:;" class="float-right" id="add">+add speciality(s)</a>
                </div>
            </div>
            <div>
                <div class="form-group row">
                    <div class="col-sm-10">
                        <div  id="speciality_data"></div>
                    </div>
                </div>
            </div>

                <style>
                table , th , td {
                    border: 1px solid black;
                }
                th,td{
                    padding: 15px;
                }
                </style>
            <div id="avail_txt"> Availability(s) </div>
            <div class="form-group row" id="avail_area">
                <label class="col-sm-1 col-form-label"
                for="whatsapp_link">1<sup>st</sup> Shift </label>
                <div class="col-sm-5">
                    <table>
                        <tr>
                            <th> Days </th>
                            <th> Availability(yes/no) </th>
                            <th> From </th>
                            <th> To </th>
                        </tr>
                        <tr>
                            <td>Monday </td><td style="text-align: center;"> <input type="checkbox" name="mon_availability" checked> </td> <td> <input type="time" name="mon_from" value="08:00"></td>  <td> <input type="time" name="mon_to" value="12:00"></td>
                        </tr>
                        <tr>
                            <td>Tuesday </td><td style="text-align: center;"> <input type="checkbox" name="tue_availability" checked> </td> <td> <input type="time" name="tue_from" value="08:00"></td>  <td> <input type="time" name="tue_to" value="12:00"></td>
                        </tr>
                        <tr>
                            <td>Wednesday </td> <td style="text-align: center;"> <input type="checkbox" name="wed_availability" checked> </td> <td> <input type="time" name="wed_from" value="08:00"></td>  <td> <input type="time" name="wed_to" value="12:00"></td>
                        </tr>
                        <tr>
                            <td>Thursday </td><td style="text-align: center;"> <input type="checkbox"  name="thu_availability" checked> </td> <td> <input type="time" name="thu_from" value="08:00"></td>  <td> <input type="time" name="thu_to" value="12:00"></td>
                        </tr>
                        <tr>
                            <td>Friday </td><td style="text-align: center;"> <input type="checkbox" name="fri_availability" checked> </td> <td> <input type="time" name="fri_from" value="08:00"></td>  <td> <input type="time" name="fri_to" value="12:00"></td>
                        </tr>
                        <tr>
                            <td>Saturday </td><td style="text-align: center;"> <input type="checkbox" name="sat_availability" > </td> <td> <input type="time" name="sat_from" value="08:00"></td>  <td> <input type="time" name="sat_to" value="12:00"></td>
                        </tr>
                        <tr>
                            <td>Sunday </td><td style="text-align: center;"> <input type="checkbox" name="sun_availability"  > </td> <td> <input type="time" name="sun_from" value="08:00"></td>  <td> <input type="time" name="sun_to" value="12:00"></td>
                        </tr> 
                    </table>
                </div>
                <label class="col-sm-1 col-form-label" for="whatsapp_link">2<sup>nd</sup> Shift</label>

                <div class="col-sm-5">
                    <table>
                        <tr>
                            <th> Availability(yes/no) </th>
                            <th> From </th>
                            <th> To </th>
                        </tr>
                        <tr>
                            <td style="text-align: center;"> <input type="checkbox" name="mon_availability_ev" checked> </td> <td> <input type="time" name="mon_from_ev" value="12:00"></td>  <td> <input type="time" name="mon_to_ev" value="16:00"></td>
                        </tr>
                        <tr>
                            <td style="text-align: center;"> <input type="checkbox" name="tue_availability_ev" checked> </td> <td> <input type="time" name="tue_from_ev" value="12:00"></td>  <td> <input type="time" name="tue_to_ev" value="16:00"></td>
                        </tr>
                        <tr>
                            <td style="text-align: center;"> <input type="checkbox" name="wed_availability_ev" checked> </td> <td> <input type="time" name="wed_from_ev" value="12:00"></td>  <td> <input type="time" name="wed_to_ev" value="16:00"></td>
                        </tr>
                        <tr>
                            <td style="text-align: center;"> <input type="checkbox"  name="thu_availability_ev" checked> </td> <td> <input type="time" name="thu_from_ev" value="12:00"></td>  <td> <input type="time" name="thu_to_ev" value="16:00"></td>
                        </tr>
                        <tr>
                            <td style="text-align: center;"> <input type="checkbox" name="fri_availability_ev" checked> </td> <td> <input type="time" name="fri_from_ev" value="12:00"></td>  <td> <input type="time" name="fri_to_ev" value="16:00"></td>
                        </tr>
                        <tr>
                            <td style="text-align: center;"> <input type="checkbox" name="sat_availability_ev" > </td> <td> <input type="time" name="sat_from_ev" value="12:00"></td>  <td> <input type="time" name="sat_to_ev" value="16:00"></td>
                        </tr>
                        <tr>
                            <td style="text-align: center;"> <input type="checkbox" name="sun_availability_ev"  > </td> <td> <input type="time" name="sun_from_ev" value="12:00"></td>  <td> <input type="time" name="sun_to_ev" value="16:00"></td>
                        </tr> 
                    </table>
                </div>
            </div>
            <hr>
        </div>
            

            <div class="form-group row">

                <label class="col-sm-2 col-form-label"
                       for="name"><?php echo $this->lang->line('Name') ?></label>

                <div class="col-sm-10">
                    <input type="text" placeholder="Name"
                           class="form-control margin-bottom required" name="name"
                           placeholder="Full name">
                </div>
            </div>
            <div class="form-group row">

                <label class="col-sm-2 col-form-label"
                       for="address"><?php echo $this->lang->line('Address') ?></label>

                <div class="col-sm-10">
                    <input type="text" placeholder="address"
                           class="form-control margin-bottom" name="address">
                </div>
            </div>
            <div class="form-group row">

                <label class="col-sm-2 col-form-label"
                       for="city"><?php echo $this->lang->line('City') ?></label>

                <div class="col-sm-10">
                    <input type="text" placeholder="City"
                           class="form-control margin-bottom" name="city">
                </div>
            </div>
            <div class="form-group row">

                <label class="col-sm-2 col-form-label"
                       for="city"><?php echo $this->lang->line('Region') ?></label>

                <div class="col-sm-10">
                    <input type="text" placeholder="Region"
                           class="form-control margin-bottom" name="region">
                </div>
            </div>
            <div class="form-group row">

                <label class="col-sm-2 col-form-label"
                       for="country"><?php echo $this->lang->line('Country') ?></label>

                <div class="col-sm-10">
                    <input type="text" placeholder="Country"
                           class="form-control margin-bottom" name="country">
                </div>
            </div>

            <div class="form-group row">

                <label class="col-sm-2 col-form-label"
                       for="postbox"><?php echo $this->lang->line('Postbox') ?></label>

                <div class="col-sm-10">
                    <input type="text" placeholder="Postbox"
                           class="form-control margin-bottom" name="postbox">
                </div>
            </div>
            <div class="form-group row">

                <label class="col-sm-2 col-form-label"
                       for="phone"><?php echo $this->lang->line('Phone') ?></label>

                <div class="col-sm-10">
                    <input type="text" placeholder="phone"
                           class="form-control margin-bottom" name="phone">
                </div>
            </div>
            <div class="form-group row">
                <label class="col-sm-2 col-form-label" for="phone"><?php echo $this->lang->line('Image') ?></label>
                <div class="col-sm-10">
                    <input type="file" id="doc_image" name="doc_image">
                </div>
            </div>
            <div class="form-group row">

                <label class="col-sm-2 col-form-label"
                       for="phone"><?php echo $this->lang->line('Salary') ?></label>

                <div class="col-sm-5">
                    <input type="text" placeholder="Salary" onkeypress="return isNumber(event)"
                           class="form-control margin-bottom" name="salary"
                           value="0">
                </div>
            </div>
            <div class="form-group row">

                <label class="col-sm-2 col-form-label"
                       for="city"><?php echo $this->lang->line('Commission') ?>
                    %</label>

                <div class="col-sm-2">
                    <input type="number" placeholder="Commission %" value="0"
                           class="form-control margin-bottom" name="commission">
                </div>
                <small class="col">It will based on each invoice amount - inclusive all
                    taxes,shipping,discounts
                </small>

            </div>
            <div class="form-group row">

                <label class="col-sm-2 col-form-label"
                       for="name"><?php echo $this->lang->line('Department') ?></label>

                <div class="col-sm-5">
                    <select name="department" class="form-control margin-bottom">

                        <option value="0"><?php echo $this->lang->line('Default') . ' - ' . $this->lang->line('No') ?></option>
                        <?php

                        foreach ($dept as $row) {
                            echo ' <option value="' . $row['id'] . '"> ' . $row['val1'] . '</option>';
                        }

                        ?>
                    </select>
                </div>
            </div>

            <div class="form-group row">

                <label class="col-sm-2 col-form-label"></label>

                <div class="col-sm-4">
                    <!-- <input type="submit" id="submit-data" class="btn btn-success margin-bottom" -->
                    <input type="submit" class="btn btn-success margin-bottom"
                           value="<?php echo $this->lang->line('Add') ?>"
                           data-loading-text="Adding...">
                    <input type="hidden" value="employee/submit_user" id="action-url">
                </div>
            </div>


        </form>
    </div>

</div>

<script type="text/javascript">
    $("#profile_add").click(function (e) {
        e.preventDefault();
        var actionurl = baseurl + 'user/submit_user';
        actionProduct1(actionurl);
    });
    var i=0;
    $("#add").click(function(){
        i++; 
        $("#speciality_data").append(
                `<div id="row`+i+`" class="col-12">
                    <div class="form-group row">
                        <div class="col-md-2">
                            <span>Enter speciality</span>
                        </div>
                        <div class="col-md-8">
                            <div class="position-relative has-icon-left">
                                <input type="text" class="form-control"
                                        name="speciality_data[`+i+`]" value=""
                                        required autocomplete="off">
                                <div class="form-control-position">
                                    <i class="feather icon-help-circle"></i>
                                </div>
                            </div>
                            
                        </div>
                        <div class="col col-md-2">
                        <i id="`+i+`" class="text-danger btn_remove fa fa-trash"></i>
                        </div>
                    </div>
                
                </div>`
            )
    });

    $(document).on('click', '.btn_remove', function(){
        var button_id = $(this).attr("id");   
        $('#row'+button_id+'').remove();  
     });

</script>

<script>

    function actionProduct1(actionurl) {

        $.ajax({

            url: actionurl,
            type: 'POST',
            data: $("#product_action").serialize(),
            dataType: 'json',
            success: function (data) {
                $("#notify .message").html("<strong>" + data.status + "</strong>: " + data.message);
                $("#notify").removeClass("alert-warning").addClass("alert-success").fadeIn();


                $("html, body").animate({scrollTop: $('html, body').offset().top}, 200);
                $("#product_action").remove();
            },
            error: function (data) {
                $("#notify .message").html("<strong>" + data.status + "</strong>: " + data.message);
                $("#notify").removeClass("alert-success").addClass("alert-warning").fadeIn();
                $("html, body").animate({scrollTop: $('#notify').offset().top}, 1000);

            }

        });


    }

    const set_form = check => 
    {
        if(check == 9)
        {
            $('#speciality_area').hide();
            $('#avail_area').hide();
            $('#avail_txt').hide();
        }
        else
        {
            $('#speciality_area').show();
            $('#avail_area').show();
            $('#avail_txt').show();   
        }

        if(check==10){
            $('.doctor_availability').hide();
        }else{
            $('.doctor_availability').show();
        }
    }

</script>