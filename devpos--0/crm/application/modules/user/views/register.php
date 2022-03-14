<style>
.switch {
  position: relative;
  display: inline-block;
  width: 60px;
  height: 34px;
}

.switch input { 
  opacity: 0;
  width: 0;
  height: 0;
}

.slider {
  position: absolute;
  cursor: pointer;
  top: 0;
  left: 0;
  right: 0;
  bottom: 0;
  background-color: #ccc;
  -webkit-transition: .4s;
  transition: .4s;
}

.slider:before {
  position: absolute;
  content: "";
  height: 26px;
  width: 26px;
  left: 4px;
  bottom: 4px;
  background-color: white;
  -webkit-transition: .4s;
  transition: .4s;
}

input:checked + .slider {
  background-color: #2196F3;
}

input:focus + .slider {
  box-shadow: 0 0 1px #2196F3;
}

input:checked + .slider:before {
  -webkit-transform: translateX(26px);
  -ms-transform: translateX(26px);
  transform: translateX(26px);
}

/* Rounded sliders */
.slider.round {
  border-radius: 34px;
}

.slider.round:before {
  border-radius: 50%;
}
.pull-right{
    float: right;
    margin-right: 20px;
}

.demo-wrap {
  overflow: hidden;
  position: relative;
}

.demo-bg {
  opacity: 0.1;
  position: absolute;
  left: 0;
  top: 0;
  width: 100%;
  height: auto;
}

.demo-content {
  position: relative;
}
.type-btn {
    width: 100%;
}
</style>
<body data-open="click" data-menu="vertical-menu" data-col="1-column"
      class="vertical-layout vertical-menu 1-column bg-login">
<!-- ////////////////////////////////////////////////////////////////////////////-->
<div class="app-content content container-fluid">
    <div class="content-wrapper">
        <div class="content-header row">
        </div>
        <div class="content-body">
            <section class="flexbox-container">
                <div class="col-md-10 offset-md-1 col-xs-10 offset-xs-1  box-shadow-2 p-1">
                    <div class="card border-grey border-lighten-3 m-0" >
                        <div class="card-header no-border">
                            <div class="card-title text-xs-center" >
                                <div class="p-1"><img class="col-md-4 offset-md-4" width="100%"  src="<?php echo substr_replace(base_url(), '', -4); ?>userfiles/company/<?php echo $this->config->item('logo'); ?>"
                                                      alt="Logo"></div>
                            </div>

                            <div class="pull-right">
                                <label> English</label> 
                                <label class="switch"> 
                                  <input type="checkbox" id="language_select" checked="true">
                                  <span class="slider round"></span>                              
                                </label>
                                <label> Arabic</label>
                            </div>
                        </div> 
                        <div class="demo-wrap">
                            <img class="demo-bg" src="<?php echo base_url('userfiles/10.jpg'); ?>" alt="">
                            <div class="demo-content">
                                <h4 class="card-subtitle line-on-side text-muted text-xs-center  pt-2">
                                    <span id="eng_register_title"><?php echo $this->lang->line('Register Customer')  ?> </span><span id="arb_register_title"> تسجيل العميل  </span>
                                </h4>
                                <div class="register_page">
                                    <small class="text-xs- ml-1" id="eng_req_fields">*Email, Password and Phone fields are required</small> 
                                    <small class="text-xs- ml-1 pull-right" id="arb_req_fields">حقول البريد الإلكتروني وكلمة المرور والهاتف مطلوبة *</small>
                                </div>
                                <div class="card-body collapse in">
                                    <div class="card-block">
                                        <?php if ($this->session->flashdata("messagePr")) { ?>
                                            <div class="alert alert-info">
                                                <?php echo $this->session->flashdata("messagePr") ?>
                                            </div>
                                        <?php } ?>
                
                                        <!-- <form action="<?php echo base_url() . 'user/importdata'; ?>" enctype="multipart/form-data" method="post" role="form">
<div class="form-group">
<label for="exampleInputFile">File Upload</label>
<input type="file" name="file" id="file" size="150">
                                            <input type="hidden" name="<?php echo $this->security->get_csrf_token_name();?>" value="<?php echo $this->security->get_csrf_hash();?>">

<p class="help-block">Only Excel/CSV File Import.</p>
</div>
<button type="submit" class="btn btn-default" name="submit" value="submit">Upload</button>
</form>
 -->
                                <form action="<?php echo base_url() . 'user/registerCustomer'; ?>" method="post" enctype="multipart/form-data">
                                                                            
                                        <div class="register_page">
                                            <div class="form-group  has-feedback row">
                                                <div class="col-md-6">
                                                    <label id="eng_cus_name">Customer Name </label> <label id="arb_cus_name"> اسم العميل  </label>
                                                    <input type="text" name="name" class="form-control" data-validation="required" placeholder="Customer <?php echo $this->lang->line('Name')  ?> ">
                                                    <i class="icon icon-bar form-control-feedback"></i>
                                                </div>     
                                                <div class="col-md-6">   
                                                    <label id="eng_mobile">Mobile Number</label> <label id="arb_mobile"> الجوال  </label>
                                                    <input type="text" name="phone" class="form-control" data-validation="required" placeholder="Mobile">
                                                    <span class="glyphicon glyphicon-user form-control-feedback"></span>
                                                </div>
                                                <div class="col-md-6">  
                                                    <input type="hidden" name="city" class="form-control" data-validation="required" value="city" placeholder="City">
                                                    <span class="glyphicon glyphicon-user form-control-feedback"></span>
                                                </div>
                                            </div>

                                            <div class="form-group  has-feedback row"> 
                                                <div class="col-md-6">
                                                    <label id="eng_email">Email Address</label> <label id="arb_email"> البريد الإلكتروني  </label>
                                                    <input type="email" name="email" class="form-control" data-validation="required" placeholder="<?php echo $this->lang->line('Email')  ?> ">
                                                    <span class="glyphicon glyphicon-user form-control-feedback"></span>
                                                </div>  
                                                <div class="col-md-6">
                                                    <label id="eng_password">Password </label> <label id="arb_password">   كلمة المرور  </label>
                                                    <input type="password" name="password" class="form-control" placeholder="Password" data-validation="confirmation" id="user-pass2">
                                                    <span class="glyphicon glyphicon-user form-control-feedback"></span>
                                                </div>              
                                                <div class="col-md-6">  
                                                    <input type="hidden" name="country" value="country" class="form-control" data-validation="required" placeholder="Country">
                                                    <span class="glyphicon glyphicon-user form-control-feedback"></span>
                                                </div>
                                            </div>

                                            <div class="form-group  has-feedback row">
                                                <div class="offset-md-10 col-md-1" style="margin-left: 91.9%;">
                                                    <button type="button" name="next" class="btn btn-primary btn-flat btn-color first_next"> Next </button>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="types_button" style="display:none;">                                            
                                            
                                            <h3 style="text-align:center;"> Thank you! You registration step is completed.</h3><br>
                                            
                                            <p>Please select type of Animal.</p>
                                            <div class="row" style="text-align:center;">
                                                <div class="offset-sm-2 col-md-2">
                                                    <a class="m-1 btn btn-info btn-xl js-scroll-trigger type-btn" type="button" data-id="1" data-name="Feline">
                                                        <i class="fas fa-shopping-cart"></i> Feline (Cat) 
                                                    </a>
                                                </div>
                                                <div class="col-md-2">
                                                    <a class="m-1 btn btn-info btn-xl js-scroll-trigger type-btn"  type="button" data-id="2" data-name="K9">
                                                        <i class="fas fa-shopping-cart"></i> K9 (Dog)
                                                    </a>
                                                </div>
                                                <div class="col-md-2">
                                                    <a class="m-1 btn btn-info btn-xl js-scroll-trigger type-btn" type="button" data-id="3" data-name="Birds">
                                                        <i class="fas fa-shopping-cart"></i> Birds
                                                    </a>
                                                </div>
                                                <div class="col-md-2">
                                                    <a class="m-1 btn btn-info btn-xl js-scroll-trigger type-btn" type="button" data-id="4" data-name="Others">
                                                        <i class="fas fa-shopping-cart"></i> Others
                                                    </a>
                                                </div>
                                            </div>
                                        </div>    
                                        <div class="add_pets_page" style="display:none;">                                            
                                            <div class="row" id="eng_add" >
                                                <h4 style="width: 10%;" class="col-sm-2">Add Pet :</h4>
                                                <a href="javascript:void(0);" class="add_button" title="Add field"><img src="<?php echo base_url('crm-assets/add-icon.png') ?>"/></a>
                                            </div>
                                            <div class="row" id="arb_add">
                                                <h4 style="float:right;margin-right: 15px;"> : إضافة حيوان أليف   </h4> 
                                                <a style="float:right;margin-right: 10px;" href="javascript:void(0);" class="add_button" title="Add field">&nbsp;&nbsp;<img src="<?php echo base_url('crm-assets/add-icon.png') ?>"/></a>
                                            </div>
                                            <div class="form-group  has-feedback row">
                                                <div class="col-md-6">
                                                    <label id="eng_pet_name">Pet Name </label> <label id="arb_pet_name"> اسم حيوانك الاليف  </label>
                                                    <input type="text" name="pet_name[]" class="form-control" data-validation="required" placeholder="Pet <?php echo $this->lang->line('Name')  ?> ">
                                                    <i class="icon icon-bar form-control-feedback"></i>
                                                </div>
                                                <div class="col-md-6">
                                                    <label id="eng_gender">Pet Gender </label> <label id="arb_gender">  جنس الحيوان الأليف  </label>
                                                    <!-- <input type="text" name="pet_gender" class="form-control" data-validation="required" placeholder="Pet Gender"> -->
                                                    <!-- <span class="glyphicon glyphicon-user form-control-feedback"></span> -->
                                                    <select name="pet_gender[]" class="form-control" data-validation="required" placeholder="Pet Gender">
                                                        <option value="">-- Please Select --</option>
                                                        <option value="male">Male</option>
                                                        <option value="female">Female</option>
                                                        <option value="other">Other</option>
                                                    </select>
                                                </div>
                                                <div class="col-md-6">
                                                    <input type="hidden" name="region" value="regin" class="form-control" data-validation="required" placeholder="Region">
                                                    <span class="glyphicon glyphicon-user form-control-feedback"></span>
                                                </div>
                                            </div>

                                            <div class="form-group  has-feedback row">
                                                <div class="col-md-6">
                                                    <label id="eng_pet_name">Pet Color </label> <label id="arb_pet_name"> اللون  </label>
                                                    <input type="text" name="pet_color[]" class="form-control" data-validation="required" placeholder="Pet Color">
                                                    <i class="icon icon-bar form-control-feedback"></i>
                                                </div>
                                                <div class="col-md-6">
                                                    <label id="eng_gender">Date of Birth</label> <label id="arb_gender"> تاريخ الولادة  </label>
                                                    <input type="date" name="date_of_birth[]" class="form-control" data-validation="required" placeholder="">
                                                    <span class="glyphicon glyphicon-user form-control-feedback"></span>
                                                </div>
                                            </div>

                                            <div class="form-group  has-feedback row">
                                                <div class="col-md-6">
                                                    <label id="eng_pet_name">Microchip Number</label> <label id="arb_pet_name"> رقم الشريحة  </label>
                                                    <input type="text" name="microchip_number[]" class="form-control" data-validation="required" placeholder="Microchip Number">
                                                    <i class="icon icon-bar form-control-feedback"></i>
                                                </div>
                                                <div class="col-md-6">
                                                    <label id="eng_gender">Mark Difference</label> <label id="arb_gender">علامة فارقة   </label>
                                                    <input type="text" name="mark_difference[]" class="form-control" data-validation="required" placeholder="Mark Difference">
                                                    <span class="glyphicon glyphicon-user form-control-feedback"></span>
                                                </div>
                                            </div>

                                            <div class="form-group  has-feedback row">
                                                <div class="col-md-6">
                                                    <label id="eng_breed">Breed </label> <label id="arb_breed"> الفصيلة  </label>
                                                    <select name="breed[]" class="form-control breed"> 
                                                        <!-- <option value="">-- Please Select --</option>
                                                        <option value="male">Male</option>
                                                        <option value="female">Female</option>
                                                        <option value="other">Other</option> -->
                                                    </select>
                                                </div>     
                                                <div class="col-md-6">
                                                    <label id="eng_image">Pet Photo </label> <label id="arb_image">  الصورة  </label>
                                                    <input type="file" name="files[]" class="form-control" data-validation="required" placeholder="Pet Image">
                                                    <span class="glyphicon glyphicon-user form-control-feedback"></span>
                                                </div>
                                                <div class="col-md-6">
                                                    <input type="hidden" value="postbox" name="postbox" class="form-control" data-validation="required" placeholder="Postbox">
                                                    <span class="glyphicon glyphicon-user form-control-feedback"></span>
                                                </div>
                                            </div>
                                            <input type="hidden" name="type_id" id="type_id" value="">

                                            <div class="field_wrapper"></div>

                                            <div class="form-group  has-feedback row">  
                                                <div class="col-md-6">
                                                    <input type="hidden" name="address" value="address" class="form-control" data-validation="required" placeholder="Address">
                                                    <span class="glyphicon glyphicon-user form-control-feedback"></span>
                                                </div>
                                                <div class="col-md-6"> </div>
                                            </div>
                                                                  
                                            <div class="form-group  has-feedback row">
                                                <div class="col-md-6">
                                                <button type="submit" name="submit" class="btn btn-primary btn-block btn-flat btn-color"><?php echo $this->lang->line('Register')  ?>
                                                    </button>
                                                    </div>
                                            </div>

                                            <input type="hidden" name="<?php echo $this->security->get_csrf_token_name();?>" value="<?php echo $this->security->get_csrf_hash();?>">
                                            <div class="row">
                                                <div class="col-xs-12">
                                                 <div id="errors" class="well"></div>
                                                    <input type="hidden" name="call_from" value="reg_page">

                                                </div>
                                            </div>
                                        </div>

                                        </form>
                                        <br>
                                        <span class="float-xs-right" ><a href="<?php echo base_url('user/login'); ?>" class="">I already have a membership</a></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

        </div>
    </div>
</div>

<!-- /.register-box -->
</body>
<script>
    $(document).ready(function () {
        <?php if($this->input->get('invited') && $this->input->get('invited') != ''){ ?>
        $burl = '<?php echo base_url() ?>';
        $.ajax({
            url: $burl + 'user/chekInvitation',
            method: 'post',
            data: {
                code: '<?php echo $this->input->get('invited'); ?>'
            },
            dataType: 'json'
        }).done(function (data) {
            console.log(data);
            if (data.result == 'success') {
                $('[name="email"]').val(data.email);
                $('form').attr('action', $burl + 'user/register_invited/' + data.users_id);
            } else {
                window.location.href = $burl + 'user/login';
            }
        });
        <?php } ?>
    });
</script>
<script>
    $(document).ready(function () {
        $("#user-pass").passwordValidation({"confirmField": "#user-pass2"}, function (element, valid, match, failedCases) {

            $("#errors").html("<div class='alert alert-warning mb-2' role='alert'><strong>Password Rules</strong> MaxChar: 12<br>" + failedCases.join("<br>") + "</div>");

            if (valid) $(element).css("border", "2px solid green");
            if (!valid) {
                $(element).css("border", "2px solid red");
                $('#submit-data').attr('disabled', 'disabled');
            }
            if (valid && match) {
                $("#user-pass2").css("border", "2px solid green");
                $('#errors').html('');
                $('#submit-data').removeAttr('disabled');
            }
            if (!valid || !match) {
                $("#user-pass2").css("border", "2px solid red");
                $('#submit-data').attr('disabled', 'disabled');
            }
        });
 

        $("#eng_register_title,#eng_req_fields,#eng_cus_name,#eng_pet_name,#eng_breed,#eng_mobile,#eng_email,#eng_password,#eng_gender,#eng_image,#eng_add,#eng_remove").hide();

        $('#language_select').change(function(){
            if($(this).prop('checked')) {
                $("#arb_register_title,#arb_req_fields,#arb_cus_name,#arb_pet_name,#arb_breed,#arb_mobile,#arb_email,#arb_password,#arb_gender,#arb_image,#arb_add,#arb_remove").show();
                $("#eng_register_title,#eng_req_fields,#eng_cus_name,#eng_pet_name,#eng_breed,#eng_mobile,#eng_email,#eng_password,#eng_gender,#eng_image,#eng_add,#eng_remove").hide();
            } else {
                $("#arb_register_title,#arb_req_fields,#arb_cus_name,#arb_pet_name,#arb_breed,#arb_mobile,#arb_email,#arb_password,#arb_gender,#arb_image,#arb_add,#arb_remove").hide();
                $("#eng_register_title,#eng_req_fields,#eng_cus_name,#eng_pet_name,#eng_breed,#eng_mobile,#eng_email,#eng_password,#eng_gender,#eng_image,#eng_add,#eng_remove").show();

            }
        });

        $('.first_next').click(function(){
            $('.register_page').hide();
            $('.types_button').show();
            $('.add_pets_page').hide();
        });

        $('.type-btn').click(function(){
            var id = $(this).attr('data-id');
            var name = $(this).attr('data-name');
            $('.register_page').hide();
            $('.types_button').hide();
            $('.add_pets_page').show();

            $.ajax({
                url: '<?php echo base_url() ?>' + 'user/get_breed',
                method: 'post',
                data: { id: id, g_c7783 : '<?php echo $this->security->get_csrf_hash(); ?>' },
                success:function(data)
                { 
                    $('.breed').html(data);
                    $('#type_id').val(id);
                }
            });
        });     
        
        var breed_data = '';
        var maxField = 10; //Input fields increment limitation
        var addButton = $('.add_button'); //Add button selector
        var wrapper = $('.field_wrapper'); //Input field wrapper
        var x = 1;

        $(addButton).click(function(){
            
            var id = $('#type_id').val(); 
            $.ajax({
                url: '<?php echo base_url() ?>' + 'user/get_breed',
                method: 'post',
                data: { id: id, g_c7783 : '<?php echo $this->security->get_csrf_hash(); ?>' },
                success:function(data)
                { 
                    var fieldHTML = '<div class="adding_fields">'+
                        '<div class="row" id="eng_remove" style="display:none" >'+
                            '<h4 style="width: 10%;" class="col-sm-2">Remove:</h4>'+
                            '<a href="javascript:void(0);" class="remove_button" title="Remove field"><img src="<?php echo base_url('crm-assets/remove-icon.png') ?>"/></a>'+
                        '</div>'+
                        '<div class="row" id="arb_remove">'+
                            '<h4 style="float:right;margin-right: 15px;"> :إزالة  </h4> '+
                            '<a style="float:right;margin-right: 10px;" href="javascript:void(0);" class="remove_button" title="Remove field">&nbsp;&nbsp;<img src="<?php echo base_url('crm-assets/remove-icon.png') ?>"/></a>'+
                        '</div>'+
                        '<div class="form-group  has-feedback row">'+
                            '<div class="col-md-6">'+
                                '<label id="eng_pet_name">Pet Name </label> <label id="arb_pet_name"> اسم حيوانك الاليف  </label>'+
                                '<input type="text" name="pet_name[]" class="form-control" data-validation="required" placeholder="Pet <?php echo $this->lang->line('Name')  ?> ">'+
                                '<i class="icon icon-bar form-control-feedback"></i>'+
                            '</div>'+
                            '<div class="col-md-6">'+
                                '<label id="eng_gender">Pet Gender </label> <label id="arb_gender">  جنس الحيوان الأليف  </label>'+
                                '<select name="pet_gender[]" class="form-control" data-validation="required" placeholder="Pet Gender">'+
                                    '<option value="">-- Please Select --</option>'+
                                    '<option value="male">Male</option>'+
                                    '<option value="female">Female</option>'+
                                    '<option value="other">Other</option>'+
                                '</select>'+
                            '</div>'+
                        '</div>'+
                        '<div class="form-group  has-feedback row">'+
                            '<div class="col-md-6">'+
                                '<label id="eng_pet_name">Pet Color </label> <label id="arb_pet_name"> لون الحيوانات الأليفة  </label>'+
                                '<input type="text" name="pet_color[]" class="form-control" data-validation="required" placeholder="Pet Color">'+
                                '<i class="icon icon-bar form-control-feedback"></i>'+
                            '</div>'+
                            '<div class="col-md-6">'+
                                '<label id="eng_gender">Date of Birth</label> <label id="arb_gender"> تاريخ الولادة  </label>'+
                                '<input type="date" name="date_of_birth[]" class="form-control" data-validation="required" placeholder="">'+
                                '<span class="glyphicon glyphicon-user form-control-feedback"></span>'+
                            '</div>'+
                        '</div>'+
                        '<div class="form-group  has-feedback row">'+
                            '<div class="col-md-6">'+
                                '<label id="eng_pet_name">Microchip Number</label> <label id="arb_pet_name">  عدد الرقائق الدقيقة  </label>'+
                                '<input type="text" name="microchip_number[]" class="form-control" data-validation="required" placeholder="Microchip Number">'+
                                '<i class="icon icon-bar form-control-feedback"></i>'+
                            '</div>'+
                            '<div class="col-md-6">'+
                                '<label id="eng_gender">Mark Difference</label> <label id="arb_gender">  مارك الفرق  </label>'+
                                '<input type="text" name="mark_difference[]" class="form-control" data-validation="required" placeholder="Mark Difference">'+
                                '<span class="glyphicon glyphicon-user form-control-feedback"></span>'+
                            '</div>'+
                        '</div>'+
                        '<div class="form-group  has-feedback row">'+
                            '<div class="col-md-6">'+
                                '<label id="eng_breed">Breed </label> <label id="arb_breed"> الفصيلة  </label>'+
                                '<select name="breed[]" class="form-control breed">'+data+'</select>'+
                                '<i class="icon icon-bar form-control-feedback"></i>'+
                            '</div>'+
                            '<div class="col-md-6">'+
                                '<label id="eng_image">Pet Image </label> <label id="arb_image">  صورة الحيوانات الأليفة  </label>'+
                                '<input type="file" name="files[]" class="form-control" data-validation="required" placeholder="Pet Image">'+
                                '<span class="glyphicon glyphicon-user form-control-feedback"></span>'+
                            '</div>'+
                        '</div>'+
                    '</div>';

                    if(x < maxField){ 
                        x++; //Increment field counter
                        $(wrapper).append(fieldHTML); //Add field html
                    }
                }
            });
            
        });
        
        //Once remove button is clicked
        $(wrapper).on('click', '.remove_button', function(e){
            e.preventDefault();
            $(this).closest('.adding_fields').remove(); //Remove field html
            x--; //Decrement field counter
        });

        $('#eng_add').click(function(){
            $('#arb_remove').hide();
            $('#eng_remove').show();
        });
        
    });
</script>