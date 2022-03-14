<div class="app-content content container-fluid">
    <div class="content-wrapper">
        <div class="content-header">
        </div>
        <div class="content-body">
            <!--  -->

            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <h2 class="login-title c-black mb-4">
                            <?php if($this->session->flashdata('success')): ?>
                                <p class="text-success"><?php echo $this->session->flashdata('success'); ?></p>
                            <?php endif; ?>
                            <?php if($this->session->flashdata('error')): ?>
                                <p class="text-danger"><?php echo $this->session->flashdata('error'); ?></p>
                            <?php endif; ?>
                        </h2>
                        <div class="white-block h-auto overflow-hidden p-0">
                            <form action="<?php echo base_url('booking/addBooking') ?>" enctype="multipart/form-data" method="POST">
                                <input type="hidden" name="<?php echo $this->security->get_csrf_token_name();?>" value="<?php echo $this->security->get_csrf_hash();?>">
                                
                                <div class="row mb-3 ml-1 mr-1 mt-3 mx-0">

                                    <h3 class="box-title">Booking Schedule</h3>

                                    <div class="sm-12 col-md-12">
                                        <div class="sm-6 col-md-2">
                                            <label for="">
                                                Select Pet 
                                            </label>
                                        </div>
                                        <div class="sm-6 col-md-6">
                                            <select name="pet_id" class="form-control" id="pet">
                                                <?php foreach($pets as $pet){
                                                   ?>
                                                   <option value="<?php echo $pet->id  ?>"> <?php  echo $pet->pet_name ?></option>
                                               <?php }?>
                                           </select>
                                       </div>
                                       
                                   </div>
                                   <div class="sm-12 mt-2 col-md-12">
                                    <div class="sm-6 col-md-2">
                                        <label for="">
                                            Select Doctor 
                                        </label>
                                    </div>
                                    <div class="sm-6 col-md-6">
                                        <select name="doctor_id" class="form-control" id="doctor">
                                            <?php foreach($doctors as $doctor){
                                               ?>
                                               <option value="<?php echo $doctor->doctor_id  ?>"> <?php  echo $doctor->username ?></option>
                                           <?php }?>
                                       </select>
                                   </div>
                               </div>
                               <div class="sm-12 mt-2 mb-2 col-md-12">
                                <div class="sm-6 col-md-2">
                                    <label for="">
                                        Select Specialization 
                                    </label>
                                </div>
                                <div class="sm-6 col-md-6">
                                    <select name="speciality_id" class="form-control" id="speciality">

                                    </select>
                                </div>
                            </div>
                            <div class="col-lg-7">
                                <div class="py-4 px-0">
                                    <div id="calendar" class="new-custom-calendar select-time-calendar my-calendar user-profile-calendar"></div>
                                </div>
                            </div>
                            <div class="col-lg-5 availabel-times-block" id="timeblock" hidden>
                                <div class="p-md-4 p-3">
                                 <span class="text-danger" id="error-msg"></span>
                                 <!-- <input type="hidden" class="advisorId" name="advisor_id" value=""> -->
                                 <input type="hidden" class="selectedTimeFrom" name="from" required>
                                 <input type="hidden" class="selectedTimeTo" name="to" required>
                                 <input type="hidden" class="date" name="on" value="">

                                 <div class="row times-list mb-3 availslot" style="overflow: auto;height:25rem"></div>

                                 <h3 class="purple-title ammount real-price mb-2"><small>amount:</small>  <strong class="price">0</strong> <strong class="currency"></strong></h3>
                                 <div class="after-coupon-price">
                                    <h3 class="purple-title mb-4"><small>amount:</small> <strong class="new-price">0</strong> <strong class="currency"></strong></h3>
                                </div>
                                <h3 class="purple-title ammount mb-2"><small>+ VAT: </small><strong class="vatedPrice">0</strong> <strong class="currency"></strong></h3>
                                <hr>
                                <h3 class="purple-title ammount mb-2"><small> Total:</small> <strong class="totalPrice">{{number_format(0,2,'.',',')}}</strong> <strong class="currency"></strong></h3>
                            </div>
                            <div class="col-md-12 px-4 pt-3 text-center availabel-times-submit mb-0">
                                <button disabled type="button" class="w-100 btn book-now second-btn-default mb-4" data-toggle="modal" data-target="#exampleModal">Next</button>
                            </div>
                        </div>

                        <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="exampleModalLabel">Pet Medical Detail</h5>
                                        <?php 
                                        $length = 7;
                                        $random = substr(str_shuffle(str_repeat($x='0123456789', ceil($length/strlen($x)) )),1,$length) ?>
                                        <span>No. <?=$random?></span>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"> <span aria-hidden="true">&times;</span> </button>
                                    </div>
                                    <div class="modal-body">
                                        <div id="smartwizard">
                                            <ul>
                                                <li><a href="#step-1">Step 1<br /><small>Pet Info</small></a></li>
                                                <li><a href="#step-2">Step 2<br /><small>Current Symptoms</small></a></li>
                                                <li><a href="#step-3">Step 3<br /><small>Medicines And Medical Background</small></a></li>
                                                <li><a href="#step-4">Step 4<br /><small>General Questions</small></a></li>
                                            </ul>
                                            <div>
                                                <div id="step-1">
                                                    <div class="row">
                                                        <div class="col-md-12">
                                                            <h4 class="text-center bg-primary text-white my-1">Pet Info</h4>
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <input type="hidden" name="no" value="<?=$random?>">
                                                        <div class="col-md-6">
                                                            <div class="row">
                                                                <div class="col-md-6 text-center"> 
                                                                    <strong><span>Gastrointestinal Problems?</span></strong>
                                                                </div>
                                                                <div class="col-md-6 text-center">
                                                                    <strong><span>مشاكل الجهاز الهضمي؟</span></strong>
                                                                </div>
                                                            </div>
                                                            <div class="row">
                                                                <div class="col-md-5 text-center">Vomiting</div>
                                                                <div class="col-md-2 text-center">
                                                                    <input class="text-center" type="checkbox" name="gastrointestinal_prob[]" value="vomiting">
                                                                </div>
                                                                <div class="col-md-5">التقيؤ</div>
                                                            </div>
                                                            <div class="row">
                                                                <div class="col-md-5 text-center">Constipation</div>
                                                                <div class="col-md-2 text-center">
                                                                    <input class="text-center" type="checkbox" name="gastrointestinal_prob[]" value="constipation">
                                                                </div>
                                                                <div class="col-md-5">إمساك</div>
                                                            </div>
                                                            <div class="row">
                                                                <div class="col-md-5 text-center">Diarrhea</div>
                                                                <div class="col-md-2 text-center">
                                                                    <input class="text-center" type="checkbox" name="gastrointestinal_prob[]" value="diarrhea">
                                                                </div>
                                                                <div class="col-md-5">إسهال</div>
                                                            </div>
                                                            <div class="row">
                                                                <div class="col-md-5 text-center">Abdominal distention</div>
                                                                <div class="col-md-2 text-center">
                                                                    <input class="text-center" type="checkbox" name="gastrointestinal_prob[]" value="abdominal distention">
                                                                </div>
                                                                <div class="col-md-5">اانتفاخ في البطن</div>
                                                            </div>
                                                            <br>
                                                            <div class="row">
                                                                <div class="col-md-6 text-center"> 
                                                                    <strong><span>Describe the nature of the stool?</span></strong>
                                                                </div>
                                                                <div class="col-md-6 text-center">
                                                                    <strong><span>صف طبيعة البراز؟</span></strong>
                                                                </div>
                                                            </div>
                                                            <div class="row">
                                                                <div class="col-md-5 text-center">Solid</div>
                                                                <div class="col-md-2 text-center">
                                                                    <input class="text-center" type="checkbox" name="stool_nature[]" value="solid">
                                                                </div>
                                                                <div class="col-md-5">صلب</div>
                                                            </div>
                                                            <div class="row">
                                                                <div class="col-md-5 text-center">Semi Solid</div>
                                                                <div class="col-md-2 text-center">
                                                                    <input class="text-center" type="checkbox" name="stool_nature[]" value="semi solid">
                                                                </div>
                                                                <div class="col-md-5">شبه صلب</div>
                                                            </div>
                                                            <div class="row">
                                                                <div class="col-md-5 text-center">Loose (diarrhea)</div>
                                                                <div class="col-md-2 text-center">
                                                                    <input class="text-center" type="checkbox" name="stool_nature[]" value="loose">
                                                                </div>
                                                                <div class="col-md-5">فضفاض (الإسهال)</div>
                                                            </div>
                                                            <div class="row">
                                                                <div class="col-md-5 text-center">Pebbles Like</div>
                                                                <div class="col-md-2 text-center">
                                                                    <input class="text-center" type="checkbox" name="stool_nature[]" value="pebbles like">
                                                                </div>
                                                                <div class="col-md-5">مثل الحصى</div>
                                                            </div>
                                                            <div class="row">
                                                                <div class="col-md-5 text-center">Bloody</div>
                                                                <div class="col-md-2 text-center">
                                                                    <input class="text-center" type="checkbox" name="stool_nature[]" value="bloody">
                                                                </div>
                                                                <div class="col-md-5">دموي</div>
                                                            </div>
                                                            <div class="row">
                                                                <div class="col-md-5 text-center">Mocous</div>
                                                                <div class="col-md-2 text-center">
                                                                    <input class="text-center" type="checkbox" name="stool_nature[]" value="mocous">
                                                                </div>
                                                                <div class="col-md-5">مخاطي</div>
                                                            </div>
                                                            <br>
                                                            <div class="row">
                                                                <div class="col-md-6 text-center"> 
                                                                    <strong><span>Describe the color of the stool?</span></strong>
                                                                </div>
                                                                <div class="col-md-6 text-center">
                                                                    <strong><span>وصف لون البراز؟</span></strong>
                                                                </div>
                                                            </div>
                                                            <div class="row">
                                                                <div class="col-md-5 text-center">Yellow</div>
                                                                <div class="col-md-2 text-center">
                                                                    <input class="text-center" type="checkbox" name="stool_color[]" value="yellow">
                                                                </div>
                                                                <div class="col-md-5">الأصفر</div>
                                                            </div>
                                                            <div class="row">
                                                                <div class="col-md-5 text-center">Green</div>
                                                                <div class="col-md-2 text-center">
                                                                    <input class="text-center" type="checkbox" name="stool_color[]" value="green">
                                                                </div>
                                                                <div class="col-md-5">أخضر</div>
                                                            </div>
                                                            <div class="row">
                                                                <div class="col-md-5 text-center">Brown</div>
                                                                <div class="col-md-2 text-center">
                                                                    <input class="text-center" type="checkbox" name="stool_color[]" value="brown">
                                                                </div>
                                                                <div class="col-md-5">بنى</div>
                                                            </div>
                                                            <div class="row">
                                                                <div class="col-md-5 text-center">Red</div>
                                                                <div class="col-md-2 text-center">
                                                                    <input class="text-center" type="checkbox" name="stool_color[]" value="red">
                                                                </div>
                                                                <div class="col-md-5">أحمر</div>
                                                            </div>
                                                            <div class="row">
                                                                <div class="col-md-5 text-center">Black</div>
                                                                <div class="col-md-2 text-center">
                                                                    <input class="text-center" type="checkbox" name="stool_color[]" value="black">
                                                                </div>
                                                                <div class="col-md-5">أسود</div>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-6">
                                                            <div class="row">
                                                                <div class="col-md-6 text-center"> 
                                                                    <strong><span>What is the color of urine</span></strong>
                                                                </div>
                                                                <div class="col-md-6 text-center">
                                                                    <strong><span>ما هو لون البول</span></strong>
                                                                </div>
                                                            </div>
                                                            <div class="row">
                                                                <div class="col-md-5 text-center">Light Yellow</div>
                                                                <div class="col-md-2 text-center">
                                                                    <input class="text-center" type="checkbox" name="urine_color[]" value="light yellow">
                                                                </div>
                                                                <div class="col-md-5">أصفر فاتح</div>
                                                            </div>
                                                            <div class="row">
                                                                <div class="col-md-5 text-center">Dark Yellow</div>
                                                                <div class="col-md-2 text-center">
                                                                    <input class="text-center" type="checkbox" name="urine_color[]"
                                                                    value="dark yellow">
                                                                </div>
                                                                <div class="col-md-5">اصفر غامق</div>
                                                            </div>
                                                            <div class="row">
                                                                <div class="col-md-5 text-center">Red</div>
                                                                <div class="col-md-2 text-center">
                                                                    <input class="text-center" type="checkbox" name="urine_color[]"
                                                                    value="red">
                                                                </div>
                                                                <div class="col-md-5">أحمر</div>
                                                            </div>
                                                            <br>
                                                            <div class="row">
                                                                <div class="col-md-6 text-center"> 
                                                                    <strong><span>Eye Problems?</span></strong>
                                                                </div>
                                                                <div class="col-md-6 text-center">
                                                                    <strong><span>مشاكل العين؟</span></strong>
                                                                </div>
                                                            </div>
                                                            <div class="row">
                                                                <div class="col-md-5 text-center">Redness</div>
                                                                <div class="col-md-2 text-center">
                                                                    <input class="text-center" type="checkbox" name="eye_problems[]" value="redness">
                                                                </div>
                                                                <div class="col-md-5">احمرار</div>
                                                            </div>
                                                            <div class="row">
                                                                <div class="col-md-5 text-center">Discharges</div>
                                                                <div class="col-md-2 text-center">
                                                                    <input class="text-center" type="checkbox" name="eye_problems[]" value="discharges">
                                                                </div>
                                                                <div class="col-md-5">التفريغ</div>
                                                            </div>
                                                            <div class="row">
                                                                <div class="col-md-5 text-center">Itching</div>
                                                                <div class="col-md-2 text-center">
                                                                    <input class="text-center" type="checkbox" name="eye_problems[]" value="itching">
                                                                </div>
                                                                <div class="col-md-5">مثير للحكة</div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div id="step-2">
                                                    <div class="row">
                                                        <div class="col-md-12">
                                                            <h4 class="text-center bg-primary text-white my-1">Current Symptoms</h4>
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-md-6">
                                                            <div class="row">
                                                                <div class="col-md-6 text-center"> 
                                                                    <strong><span>The current symptoms that your pet suffering from</span></strong>
                                                                </div>
                                                                <div class="col-md-6 text-center">
                                                                    <strong><span>الأعراض الحالية التي يعاني منها حيوانك الأليف</span></strong>
                                                                </div>
                                                            </div>
                                                            <div class="row">
                                                                <div class="col-md-5 text-center">Fever</div>
                                                                <div class="col-md-2 text-center">
                                                                    <input class="text-center" type="checkbox" name="current_symptoms[]" value="fever">
                                                                </div>
                                                                <div class="col-md-5">حمة</div>
                                                            </div>
                                                            <div class="row">
                                                                <div class="col-md-5 text-center">Thirst</div>
                                                                <div class="col-md-2 text-center">
                                                                    <input class="text-center" type="checkbox" name="current_symptoms[]" value="thirst">
                                                                </div>
                                                                <div class="col-md-5">العطش</div>
                                                            </div>
                                                            <div class="row">
                                                                <div class="col-md-5 text-center">Seizures</div>
                                                                <div class="col-md-2 text-center">
                                                                    <input class="text-center" type="checkbox" name="current_symptoms[]" value="seizures">
                                                                </div>
                                                                <div class="col-md-5">النوبات</div>
                                                            </div>
                                                            <div class="row">
                                                                <div class="col-md-5 text-center">Laziness</div>
                                                                <div class="col-md-2 text-center">
                                                                    <input class="text-center" type="checkbox" name="current_symptoms[]" value="laziness">
                                                                </div>
                                                                <div class="col-md-5">الكسل</div>
                                                            </div>
                                                            <div class="row">
                                                                <div class="col-md-5 text-center">Fainting</div>
                                                                <div class="col-md-2 text-center">
                                                                    <input class="text-center" type="checkbox" name="current_symptoms[]" value="fainting">
                                                                </div>
                                                                <div class="col-md-5">إغماء</div>
                                                            </div>
                                                            <div class="row">
                                                                <div class="col-md-5 text-center">Dermatology Problems</div>
                                                                <div class="col-md-2 text-center">
                                                                    <input class="text-center" type="checkbox" name="current_symptoms[]" value="dermatology problems">
                                                                </div>
                                                                <div class="col-md-5">مشاكل جلدية</div>
                                                            </div>
                                                            <br>
                                                            <div class="row">
                                                                <div class="col-md-6 text-center"> 
                                                                    <strong><span>Pulmonary Problems?</span></strong>
                                                                </div>
                                                                <div class="col-md-6 text-center">
                                                                    <strong><span>مشاكل في الرئة؟</span></strong>
                                                                </div>
                                                            </div>
                                                            <div class="row">
                                                                <div class="col-md-5 text-center">Coughing</div>
                                                                <div class="col-md-2 text-center">
                                                                    <input class="text-center" type="checkbox" name="pulmonary_problems[]" value="coughing">
                                                                </div>
                                                                <div class="col-md-5">يسعل</div>
                                                            </div>
                                                            <div class="row">
                                                                <div class="col-md-5 text-center">Difficulties in Breathing</div>
                                                                <div class="col-md-2 text-center">
                                                                    <input class="text-center" type="checkbox" name="pulmonary_problems[]" value="difficulties_in_breathing">
                                                                </div>
                                                                <div class="col-md-5">صعوبات في التنفس</div>
                                                            </div>
                                                            <div class="row">
                                                                <div class="col-md-5 text-center">Sneezing</div>
                                                                <div class="col-md-2 text-center">
                                                                    <input class="text-center" type="checkbox" name="pulmonary_problems[]" value="sneezing">
                                                                </div>
                                                                <div class="col-md-5">العطس</div>
                                                            </div>
                                                            <div class="row">
                                                                <div class="col-md-5 text-center">Loss of appetie</div>
                                                                <div class="col-md-2 text-center">
                                                                    <input class="text-center" type="checkbox" name="pulmonary_problems[]" value="loss_of_appetie">
                                                                </div>
                                                                <div class="col-md-5">فقدان الشهية</div>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-6">
                                                            <div class="row">
                                                                <div class="col-md-6 text-center"> 
                                                                    <strong><span>Mouth And Teeth Problems?</span></strong>
                                                                </div>
                                                                <div class="col-md-6 text-center">
                                                                    <strong><span>مشاكل الفم والأسنان؟</span></strong>
                                                                </div>
                                                            </div>
                                                            <div class="row">
                                                                <div class="col-md-5 text-center">Bad Smell</div>
                                                                <div class="col-md-2 text-center">
                                                                    <input class="text-center" type="checkbox" name="mouth_teeth_problems[]" value="bad smell">
                                                                </div>
                                                                <div class="col-md-5">رائحة كريهة</div>
                                                            </div>
                                                            <div class="row">
                                                                <div class="col-md-5 text-center">Ulcers</div>
                                                                <div class="col-md-2 text-center">
                                                                    <input class="text-center" type="checkbox" name="mouth_teeth_problems[]" value="ulcers">
                                                                </div>
                                                                <div class="col-md-5">قرحة المعدة</div>
                                                            </div>
                                                            <div class="row">
                                                                <div class="col-md-5 text-center">Dryness</div>
                                                                <div class="col-md-2 text-center">
                                                                    <input class="text-center" type="checkbox" name="mouth_teeth_problems[]" value="dryness">
                                                                </div>
                                                                <div class="col-md-5">جفاف</div>
                                                            </div>
                                                            <div class="row">
                                                                <div class="col-md-5 text-center">Gun Redness</div>
                                                                <div class="col-md-2 text-center">
                                                                    <input class="text-center" type="checkbox" name="mouth_teeth_problems[]" value="gun redness">
                                                                </div>
                                                                <div class="col-md-5">احمرار البندقية</div>
                                                            </div>
                                                            <div class="row">
                                                                <div class="col-md-5 text-center">Change The Color Of The Teeth</div>
                                                                <div class="col-md-2 text-center">
                                                                    <input class="text-center" type="checkbox" name="mouth_teeth_problems[]" value="change_color_teeth">
                                                                </div>
                                                                <div class="col-md-5">علّق لون الأسنان</div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div id="step-3" class="">
                                                    <div class="row">
                                                        <div class="col-md-6">
                                                            <div class="row">
                                                                <div class="col-md-12">
                                                                    <h4 class="text-center bg-primary text-white my-1">Medical Background</h4>
                                                                </div>
                                                                <div class="col-md-6 text-center"> 
                                                                    <strong><span>1. Has Your pet ever suffered from allergies or any adverse reactions?</span></strong>
                                                                </div>
                                                                <div class="col-md-6 text-center">
                                                                    <strong><span>1. هل سبق أن عانى حيوانك الأليف من الحساسية أو أي ردود فعل سلبية؟</span></strong>
                                                                </div>
                                                            </div>
                                                            <div class="row">
                                                                <div class="col-md-5 text-center">Yes</div>
                                                                <div class="col-md-2 text-center">
                                                                    <input class="text-center" type="radio" name="med_bck_q1" value="yes">
                                                                </div>
                                                                <div class="col-md-5">نعم</div>
                                                            </div>
                                                            <div class="row">
                                                                <div class="col-md-5 text-center">No</div>
                                                                <div class="col-md-2 text-center">
                                                                    <input class="text-center" type="radio" name="med_bck_q1" value="no">
                                                                </div>
                                                                <div class="col-md-5">لا</div>
                                                            </div>
                                                            <br>
                                                            <div class="row">
                                                                <div class="col-md-6 text-center"> 
                                                                    <strong><span>2. Has Your pet ever been treated for any medical problem?</span></strong>
                                                                </div>
                                                                <div class="col-md-6 text-center">
                                                                    <strong><span>2. هل تم علاج حيوانك الأليف من أي مشكلة طبية؟</span></strong>
                                                                </div>
                                                            </div>
                                                            <div class="row">
                                                                <div class="col-md-5 text-center">Yes</div>
                                                                <div class="col-md-2 text-center">
                                                                    <input class="text-center" type="radio" name="med_bck_q2" value="yes">
                                                                </div>
                                                                <div class="col-md-5">نعم</div>
                                                            </div>
                                                            <div class="row">
                                                                <div class="col-md-5 text-center">No</div>
                                                                <div class="col-md-2 text-center">
                                                                    <input class="text-center" type="radio" name="med_bck_q2" value="no">
                                                                </div>
                                                                <div class="col-md-5">لا</div>
                                                                <div class="col-md-12">
                                                                    <input class="form-control" type="text" name="med_bck_q2_specify" placeholder="Specify">
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-6">
                                                            <div class="row">
                                                                <div class="col-md-12">
                                                                    <h4 class="text-center bg-primary text-white my-1">Medicine And Vaccinations</h4>
                                                                </div>
                                                                <div class="col-md-12"> 
                                                                    <span class="text-right">حدد متى كانت آخر مرة تم فيها تطعيم حيوانك الأليف؟</span>
                                                                    <br>
                                                                    <span class="text-left">1. Specify when was the last time your pet got vaccinated?</span>
                                                                </div>
                                                                <div class="col-md-12">
                                                                    <input class="form-control" type="text" name="med_and_vac_q1">
                                                                </div>
                                                            </div>
                                                            <br>
                                                            <div class="row">
                                                                <div class="col-md-12"> 
                                                                    <span class="text-right">حدد متى كانت آخر مرة قمت فيها بإزالة الديدان من حيوانك الأليف؟</span>
                                                                    <br>
                                                                    <span class="text-left">2. Specify when was the last time you dewormned your pet?</span>
                                                                </div>
                                                                <div class="col-md-12">
                                                                    <input class="form-control" type="text" name="med_and_vac_q2">
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div id="step-4" class="">
                                                    <div class="row">
                                                        <div class="col-md-12">
                                                            <h4 class="text-center bg-primary text-white my-1">General Questions</h4>
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-md-6">
                                                            <div id="general_q1" class="border rounded p-1">
                                                                <div class="row">
                                                                    <div class="col-md-12"> 
                                                                        <span class="text-right">منذ متى هل كان لديك حيوانك الأليف؟</span>
                                                                        <br>
                                                                        <span class="text-left">1. For how long have you had your pet?</span>
                                                                    </div>
                                                                    <div class="col-md-12">
                                                                        <input class="form-control" type="text" name="general_q1">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div id="general_q2" class="border rounded p-1">
                                                                <div class="row">
                                                                    <div class="col-md-6 text-left"> 
                                                                        <strong><span>2. Where is pet primilary kept?</span></strong>
                                                                    </div>
                                                                    <div class="col-md-6 text-center">
                                                                        <strong><span>أين يتم حفظ الحيوانات الأليفة الأولية؟</span></strong>
                                                                    </div>
                                                                </div>
                                                                <div class="row">
                                                                    <div class="col-md-5 text-center">Indoor</div>
                                                                    <div class="col-md-2 text-center">
                                                                        <input class="text-center" type="radio" name="general_q2" value="indoor">
                                                                    </div>
                                                                    <div class="col-md-5">داخلي</div>
                                                                </div>
                                                                <div class="row">
                                                                    <div class="col-md-5 text-center">Outdoor</div>
                                                                    <div class="col-md-2 text-center">
                                                                        <input class="text-center" type="radio" name="general_q2" value="outdoor">
                                                                    </div>
                                                                    <div class="col-md-5">في الخارج</div>
                                                                </div>
                                                            </div>
                                                            <div id="general_q3" class="border rounded p-1">
                                                                <div class="row">
                                                                    <div class="col-md-6 text-left"> 
                                                                        <strong><span>3. Has Your pet been admitted into a broading facility or a hospital in the past month?</span></strong>
                                                                    </div>
                                                                    <div class="col-md-6 text-center">
                                                                        <strong><span>هل تم إدخال حيوانك الأليف في منشأة داخلية أو مستشفى في الشهر الماضي؟</span></strong>
                                                                    </div>
                                                                </div>
                                                                <div class="row">
                                                                    <div class="col-md-5 text-center">Yes</div>
                                                                    <div class="col-md-2 text-center">
                                                                        <input class="text-center" type="radio" name="general_q3" value="yes">
                                                                    </div>
                                                                    <div class="col-md-5">نعم</div>
                                                                </div>
                                                                <div class="row">
                                                                    <div class="col-md-5 text-center">No</div>
                                                                    <div class="col-md-2 text-center">
                                                                        <input class="text-center" type="radio" name="general_q3" value="no">
                                                                    </div>
                                                                    <div class="col-md-5">لا</div>
                                                                    <div class="col-md-12">
                                                                        <input class="form-control" type="text" name="general_q3_specify" placeholder="Specify the name of facility">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div id="general_q4" class="border rounded p-1">
                                                                <div class="row">
                                                                    <div class="col-md-6 text-center"> 
                                                                        <strong><span>4. What do you feed your pet?</span></strong>
                                                                    </div>
                                                                    <div class="col-md-6 text-center">
                                                                        <strong><span>الأعراض الحالية التي يعاني منها حيوانك الأليف؟</span></strong>
                                                                    </div>
                                                                </div>
                                                                <div class="row">
                                                                    <div class="col-md-5 text-center">Dry Food</div>
                                                                    <div class="col-md-2 text-center">
                                                                        <input class="text-center" type="checkbox" name="general_q4[]" 
                                                                        value="dry food">
                                                                    </div>
                                                                    <div class="col-md-5">طعام جاف</div>
                                                                </div>
                                                                <div class="row">
                                                                    <div class="col-md-5 text-center">Wet Food</div>
                                                                    <div class="col-md-2 text-center">
                                                                        <input class="text-center" type="checkbox" name="general_q4[]" value="wet food">
                                                                    </div>
                                                                    <div class="col-md-5">طعام رطب</div>
                                                                </div>
                                                                <div class="row">
                                                                    <div class="col-md-5 text-center">Both</div>
                                                                    <div class="col-md-2 text-center">
                                                                        <input class="text-center" type="checkbox" name="general_q4[]" value="both">
                                                                    </div>
                                                                    <div class="col-md-5" >كلاهما</div>
                                                                </div>
                                                                <div class="row">
                                                                    <div class="col-md-5 text-center">Home Cooked</div>
                                                                    <div class="col-md-2 text-center">
                                                                        <input class="text-center" type="checkbox" name="general_q4[]" value="home cooked">
                                                                    </div>
                                                                    <div class="col-md-5">مطبوخ في المنزل</div>
                                                                </div>
                                                                <div class="row">
                                                                    <div class="col-md-5 text-center">Leftovers</div>
                                                                    <div class="col-md-2 text-center">
                                                                        <input class="text-center" type="checkbox" name="general_q4[]" value="leftovers">
                                                                    </div>
                                                                    <div class="col-md-5">بقايا الطعام</div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-6">
                                                            <div id="general_q5" class="border rounded p-1">
                                                                <div class="row">
                                                                    <div class="col-md-12"> 
                                                                        <span class="text-right">كم مرة في اليوم تطعم حيوانك الأليف؟</span>
                                                                        <br>
                                                                        <span class="text-left">5. How many times a day do you feed your pet?</span>
                                                                    </div>
                                                                    <div class="col-md-12">
                                                                        <input class="form-control" type="text" name="general_q5">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div id="general_q6" class="border rounded p-1">
                                                                <div class="row">
                                                                    <div class="col-md-6 text-center"> 
                                                                        <strong><span>6. How much do you feed your pet per meal?</span></strong>
                                                                    </div>
                                                                    <div class="col-md-6 text-center">
                                                                        <strong><span>كم تطعم حيوانك الأليف في كل وجبة؟</span></strong>
                                                                    </div>
                                                                </div>
                                                                <div class="row">
                                                                    <div class="col-md-5 text-center">Continuous</div>
                                                                    <div class="col-md-2 text-center">
                                                                        <input class="text-center" type="radio" name="general_q6" value="continuous">
                                                                    </div>
                                                                    <div class="col-md-5">مستمر</div>
                                                                </div>
                                                                <div class="row">
                                                                    <div class="col-md-5 text-center">100g</div>
                                                                    <div class="col-md-2 text-center">
                                                                        <input class="text-center" type="radio" name="general_q6" value="100g">
                                                                    </div>
                                                                </div>
                                                                <div class="row">
                                                                    <div class="col-md-5 text-center">50g</div>
                                                                    <div class="col-md-2 text-center">
                                                                        <input class="text-center" type="radio" name="general_q6" value="50g">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div id="general_q7" class="border rounded p-1">
                                                                <div class="row">
                                                                    <div class="col-md-6 text-left"> 
                                                                        <strong><span>7. Has the type of food and treats been changed within one week before the start of symptoms?</span></strong>
                                                                    </div>
                                                                    <div class="col-md-6 text-center">
                                                                        <strong><span>هل تم تغيير نوع الطعام والعلاجات في غضون أسبوع واحد قبل بدء الأعراض؟</span></strong>
                                                                    </div>
                                                                </div>
                                                                <div class="row">
                                                                    <div class="col-md-5 text-center">Yes</div>
                                                                    <div class="col-md-2 text-center">
                                                                        <input class="text-center" type="radio" name="general_q7" value="yes">
                                                                    </div>
                                                                    <div class="col-md-5">نعم</div>
                                                                </div>
                                                                <div class="row">
                                                                    <div class="col-md-5 text-center">No</div>
                                                                    <div class="col-md-2 text-center">
                                                                        <input class="text-center" type="radio" name="general_q7" value="no">
                                                                    </div>
                                                                    <div class="col-md-5">لا</div>
                                                                </div>
                                                            </div>
                                                            <div id="general_q8" class="border rounded p-1">
                                                                <div class="row">
                                                                    <div class="col-md-6 text-left"> 
                                                                        <strong><span>8. Has Your pet beeb spayed or neutered?</span></strong>
                                                                    </div>
                                                                    <div class="col-md-6 text-center">
                                                                        <strong><span>هل تم تعقيم حيوانك الأليف أو تحييده؟</span></strong>
                                                                    </div>
                                                                </div>
                                                                <div class="row">
                                                                    <div class="col-md-5 text-center">Yes</div>
                                                                    <div class="col-md-2 text-center">
                                                                        <input class="text-center" type="radio" name="general_q8" value="yes">
                                                                    </div>
                                                                    <div class="col-md-5">نعم</div>
                                                                </div>
                                                                <div class="row">
                                                                    <div class="col-md-5 text-center">No</div>
                                                                    <div class="col-md-2 text-center">
                                                                        <input class="text-center" type="radio" name="general_q8" value="no">
                                                                    </div>
                                                                    <div class="col-md-5">لا</div>
                                                                </div>
                                                            </div>
                                                            <div id="general_q9" class="border rounded p-1">
                                                                <div class="row">
                                                                    <div class="col-md-6 text-left"> 
                                                                        <strong><span>9. Other than spaying/neutering has your pet undergone any surgery?</span></strong>
                                                                    </div>
                                                                    <div class="col-md-6 text-center">
                                                                        <strong><span>بخلاف التعقيم / الخصي ، خضع حيوانك الأليف لأي عملية جراحية؟</span></strong>
                                                                    </div>
                                                                </div>
                                                                <div class="row">
                                                                    <div class="col-md-5 text-center">Yes</div>
                                                                    <div class="col-md-2 text-center">
                                                                        <input class="text-center" type="radio" name="general_q9" value="yes">
                                                                    </div>
                                                                    <div class="col-md-5">نعم</div>
                                                                </div>
                                                                <div class="row">
                                                                    <div class="col-md-5 text-center">No</div>
                                                                    <div class="col-md-2 text-center">
                                                                        <input class="text-center" type="radio" name="general_q9" value="no">
                                                                    </div>
                                                                    <div class="col-md-5">لا</div>
                                                                    <div class="col-md-12">
                                                                        <input class="form-control" type="text" name="general_q9_specify" placeholder="Specify the name of facility">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <br>
                                                    <button type="submit" class="w-100 btn book-now second-btn-default mt-2 mb-2">Book Schedule</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </form>
        </div>
    </div>
</div>
</div>
<!--  -->

</div>
</div>
</div>

<script>
    $(document).ready(function() {
        $('#calendar').fullCalendar({
            header: {left: 'prev', center: 'next', right: 'title' },
            defaultDate: new Date(),
            navLinks: false,
            eventLimit: false,
            titleFormat: null,
            fixedWeekCount: false,
            showNonCurrentDates: false
        });

        $('.fc-day-number').click(function(){
            $('.after-coupon-price').hide();
            $('.copoun-field input').val('')
            $('.copoun-field input').removeClass('is-invalid');
            $('.copoun-field input').removeClass('is-valid');
            $('.coupon-error').hide();
            $('.new-currency').text('0');
            $('.new-currency').hide();
            $('.real-price').css('text-decoration','initial');
        });
    });

    $(document).ready(function() {
        $(document).on('change', '#subTopics', function() {
            $('.after-coupon-price').hide();
            $('.copoun-field input').val('')
            $('.copoun-field input').removeClass('is-invalid');
            $('.copoun-field input').removeClass('is-valid');
            $('.coupon-error').hide();
            $('.new-currency').text('0');
            $('.new-currency').hide();
            $('.real-price').css('text-decoration','initial');
        });
//*get specialities */  
$('#doctor').change(function(){

    var doctorId=$(this).val();
    $("#speciality").html('');

    $.ajax({
        url:"<?php echo base_url('booking/getSpeciality/') ?>"+doctorId,
        method:'GET',

    }).done(function(result){
        var data=JSON.parse(result);
        if(data.status==404){
            $("#speciality").html('');
        }else{
            data.data.map(function(item){
                $("#speciality").append(new Option(item.name, item.id));
            })
        }

    }).fail(function() {
        alert('Request Error');
        return;
    });

});


// get availabilities */
$('.select-time-calendar.my-calendar').on('click', '.fc-day-top', function() {
    $("#timeblock").removeAttr('hidden');
    var doctorId=$("#doctor").val();
    var specialityId=$("#speciality").val();
    var petId=$("#pet").val();
    if(doctorId==null || specialityId==null ){
        $('#error-msg').text('please select Doctor/Speciality')
        return
    }else{
        $('#error-msg').html('');
    }
    var date = $(this).attr('data-date');
    $('.date').val(date);
    if(date < new Date()) return;

    $('.fc-day-top').removeClass('selected');
    $(this).addClass('selected');
    $.ajax({
        url: "<?php echo base_url('booking/getAvailability/') ?>"+date+"/"+doctorId,
        method: "GET",
    })
    .done(function(result) {
        var data=JSON.parse(result);
        $('.times-list').html('');
        if(data.status==404){
            $("#error-msg").text('Please select differnet date. No Availablity on this day!');
        }else{
            let i=0;
            let shift=1;
            data.data.map(itm => {
                itm.slots.map(time=>{
                    $('.times-list').append(
                        i!=0?
                        `<div class="col-12 mb-3">
                        <button type="button" data-time-from="`+ time.from+`" data-time-to="`+time.to+`" class="btn times-block-btn">`+time.from+` - `+time.to+`</button>
                        </div>`:
                        `<div class="col-12 mb-3">
                        <span> Shift(`+shift +`) Timeframe: <b>`+itm.from+`-`+itm.to+`</b></span>
                        </div><div class="col-12 mb-3">
                        <button type="button" data-time-from="`+ time.from+`" data-time-to="`+time.to+`" class="btn times-block-btn">`+time.from+` - `+time.to+`</button>
                        </div>`
                        );
                    i++;
                });
                i=0;
                shift++;
            });

        }
    })
    .fail(function(data) {
        alert('Request Error');
        return;
    });
});
//time selection

$('.times-list').on('click', '.times-block-btn', function() {
    var subTopicId = $('#subTopics').val();
    var isReschdule=$('#isReschdule').text();
    if($(this).hasClass('selected')) {
        $('.ammount').hide();
        $('.after-coupon-price').hide();
        $('.copoun-section').hide();
        $('.book-now').attr('disabled', true);
        $(this).removeClass('selected');
        $('.selectedTimeFrom').val(null);
        $('.selectedTimeTo').val(null);
        $('.speciality-field-error').hide();
    }
    else {
            // $('.ammount').show();
            // if($('.new-price').text() && $('.new-price').text() != 0) {
            //     $('.after-coupon-price').show();
            // }
            // $('.copoun-section').css('display','flex');
            $('.book-now').attr('disabled', false);
            $('input.selectedTimes').val();
            $('.times-block-btn').removeClass('selected');
            $(this).addClass('selected');
            $('.selectedTimeFrom').val($(this).attr('data-time-from'));
            $('.selectedTimeTo').val($(this).attr('data-time-To'));
        }
    });

});

$(document).ready(function(){

    $('#smartwizard').smartWizard({
        selected: 0,
        theme: 'dots',
        autoAdjustHeight:true,
        transitionEffect:'fade',
        showStepURLhash: false,

    });

});
</script>