<div class="content-body">
	<a class="btn btn-primary mb-1 text-white" href="<?php echo base_url().'pets/appointments' ?>">Back</a>
	<?php
	if(!empty($pet_detail))
	{
	?>
		<div class="card">
			<form id="reception_form" action="<?=base_url().'pets/update_receptionist'?>" method="post">
				<div class="card-header">
					<h5 class="title">Receptionist Detail</h5>
				</div>
				<div class="card-content">
					<div class="card-body">
						<div class="row">
							<div class="col-md-6">
								<label><strong>Blood Pressure</strong></label>
								<input type="hidden" name="<?php echo $this->security->get_csrf_token_name();?>" value="<?php echo $this->security->get_csrf_hash();?>">
								<input type="text" class="form-control" name="blood_pressure" value="<?=$pet_detail['blood_pressure']?>">
							</div>
							<div class="col-md-6">
								<input type="hidden" name="id" value="<?=$pet_detail['id']?>">
								<input type="hidden" name="booking_id" value="<?=$pet_detail['booking_id']?>">
								<label><strong>Temprature</strong></label>
								<input type="radio" name="temp_type" value="celsius"
								<?php
								if($pet_detail['temp_type'] == '')
								{
									echo 'checked';
								}
								else if($pet_detail['temp_type'] == 'celsius')
								{
									echo 'checked';
								}
								else
								{
									echo '';
								}
								?>
								> Celsius
								<input type="radio" name="temp_type" value="fahrenheit"
								<?php
								if($pet_detail['temp_type'] == 'fahrenheit')
								{
									echo 'checked';
								}
								?>
								> Fahrenheit
								<input type="number" class="form-control" name="temperature" value="<?=$pet_detail['temperature']?>">
							</div>
							<?php
							if($this->aauth->get_user()->roleid == 9)
							{
							?>
								<div class="col-md-12">
									<input type="submit" class="btn btn-primary mt-1 float-right" value="Update">
								</div>
							<?php
							}
							?>
						</div>
					</div>
				</div>
			</form>
		</div>
	<?php
	}
	?>
	<div class="card">
		<div class="card-header">
			<h5 class="title">
				Pet Medical Detail
			</h5>
				<?php
				if(!empty($pet_detail))
				{
				?>
				<strong>No. <?=$pet_detail['no']?></strong>
				<?php
				}
				?>
			<a class="heading-elements-toggle"><i class="fa fa-ellipsis-v font-medium-3"></i></a>
			<div class="heading-elements">
				<ul class="list-inline mb-0">
					<li><a data-action="collapse"><i class="ft-minus"></i></a></li>
					<li><a data-action="expand"><i class="ft-maximize"></i></a></li>
					<li><a data-action="close"><i class="ft-x"></i></a></li>
				</ul>
			</div>
		</div>
		<div class="card-content">
			<div id="notify" class="alert alert-success" style="display:none;">
				<a href="#" class="close" data-dismiss="alert">&times;</a>

				<div class="message"></div>
			</div>
			<div class="card-body">
				<?php
				if(empty($pet_detail))
				{
					?>
					<div class="row">
						<div class="col-md-12">
							<h4 class="text-center bg-primary text-white my-1">Detail Not Found</h4>
						</div>
					</div>					
					<?php
				}
				else
				{
					?>
					<div class="row">
						<div class="col-md-12">
							<h4 class="text-center bg-primary text-white my-1">Pet Info</h4>
						</div>
					</div>
					<div class="row">
							<?php
							$gastrointestinal_prob = explode('@@', $pet_detail['gastrointestinal_prob']);
							$stool_nature = explode('@@', $pet_detail['stool_nature']);
							$stool_color = explode('@@', $pet_detail['stool_color']);
							$urine_color = explode('@@', $pet_detail['urine_color']);
							$eye_problems = explode('@@', $pet_detail['eye_problems']);
							$current_symptoms = explode('@@', $pet_detail['current_symptoms']);
							$pulmonary_problems = explode('@@', $pet_detail['pulmonary_problems']);
							$mouth_teeth_problems = explode('@@', $pet_detail['mouth_teeth_problems']);
							$general_q4 = explode('@@', $pet_detail['general_q4']);
							?>
						<div class="col-md-6">
							<?php
							if(!empty($pet_detail['gastrointestinal_prob']))
							{
							?>
							<div class="row">
								<div class="col-md-6 text-center"> 
									<strong><span>Gastrointestinal Problems?</span></strong>
								</div>
								<div class="col-md-6 text-center">
									<strong><span>مشاكل الجهاز الهضمي؟</span></strong>
								</div>
							</div>
							<?php
							if(in_array('vomiting', $gastrointestinal_prob))
							{
							?> 
							<div class="row">
								<div class="col-md-5 text-center">Vomiting</div>
								<div class="col-md-2 text-center">
									<input class="text-center" type="checkbox" name="gastrointestinal_prob[]" value="vomiting" 
									<?php 
									if(in_array('vomiting', $gastrointestinal_prob)){
										echo 'checked';
									} 
									else
									{
										echo '';
									}
									?>
									>
								</div>
								<div class="col-md-5">التقيؤ</div>
							</div>
							<?php
							}
							if(in_array('constipation', $gastrointestinal_prob))
							{
							?>
							<div class="row">
								<div class="col-md-5 text-center">Constipation</div>
								<div class="col-md-2 text-center">
									<input class="text-center" type="checkbox" name="gastrointestinal_prob[]" value="constipation"
									<?php 
									if(in_array('constipation', $gastrointestinal_prob)){
										echo 'checked';
									} 
									else
									{
										echo '';
									}
									?>>
								</div>
								<div class="col-md-5">إمساك</div>
							</div>
							<?php
							}
							if(in_array('diarrhea', $gastrointestinal_prob))
							{
							?>
							<div class="row">
								<div class="col-md-5 text-center">Diarrhea</div>
								<div class="col-md-2 text-center">
									<input class="text-center" type="checkbox" name="gastrointestinal_prob[]" value="diarrhea"
									<?php 
									if(in_array('diarrhea', $gastrointestinal_prob)){
										echo 'checked';
									} 
									else
									{
										echo '';
									}
									?>>
								</div>
								<div class="col-md-5">إسهال</div>
							</div>
							<?php
							}
							if(in_array('abdominal distention', $gastrointestinal_prob)){
							?>
							<div class="row">
								<div class="col-md-5 text-center">Abdominal distention</div>
								<div class="col-md-2 text-center">
									<input class="text-center" type="checkbox" name="gastrointestinal_prob[]" value="abdominal distention"
									<?php 
									if(in_array('abdominal distention', $gastrointestinal_prob)){
										echo 'checked';
									} 
									else
									{
										echo '';
									}
									?>
									>
								</div>
								<div class="col-md-5">اانتفاخ في البطن</div>
							</div>
							<?php
								}
							}
							if(!empty($pet_detail['stool_nature']))
							{
							?>
							<br>
							<div class="row">
								<div class="col-md-6 text-center"> 
									<strong><span>Describe the nature of the stool?</span></strong>
								</div>
								<div class="col-md-6 text-center">
									<strong><span>صف طبيعة البراز؟</span></strong>
								</div>
							</div>
							<?php
							if(in_array('solid', $stool_nature))
							{
							?>
							<div class="row">
								<div class="col-md-5 text-center">Solid</div>
								<div class="col-md-2 text-center">
									<input class="text-center" type="checkbox" name="stool_nature[]" value="solid"
									<?php 
									if(in_array('solid', $stool_nature)){
										echo 'checked';
									} 
									else
									{
										echo '';
									}
									?>>
								</div>
								<div class="col-md-5">صلب</div>
							</div>
							<?php
							}
							if(in_array('semi solid', $stool_nature))
							{
							?>
							<div class="row">
								<div class="col-md-5 text-center">Semi Solid</div>
								<div class="col-md-2 text-center">
									<input class="text-center" type="checkbox" name="stool_nature[]" value="semi solid"
									<?php 
									if(in_array('semi solid', $stool_nature)){
										echo 'checked';
									} 
									else
									{
										echo '';
									}
									?>>
								</div>
								<div class="col-md-5">شبه صلب</div>
							</div>
							<?php
							}
							if(in_array('loose', $stool_nature))
							{
							?>
							<div class="row">
								<div class="col-md-5 text-center">Loose (diarrhea)</div>
								<div class="col-md-2 text-center">
									<input class="text-center" type="checkbox" name="stool_nature[]" value="loose"
									<?php 
									if(in_array('loose', $stool_nature)){
										echo 'checked';
									} 
									else
									{
										echo '';
									}
									?>>
								</div>
								<div class="col-md-5">فضفاض (الإسهال)</div>
							</div>
							<?php
							}
							if(in_array('pebbles like', $stool_nature))
							{
							?>
							<div class="row">
								<div class="col-md-5 text-center">Pebbles Like</div>
								<div class="col-md-2 text-center">
									<input class="text-center" type="checkbox" name="stool_nature[]" value="pebbles like"
									<?php 
									if(in_array('pebbles like', $stool_nature)){
										echo 'checked';
									} 
									else
									{
										echo '';
									}
									?>>
								</div>
								<div class="col-md-5">مثل الحصى</div>
							</div>
							<?php
							}
							if(in_array('bloody', $stool_nature))
							{
							?>
							<div class="row">
								<div class="col-md-5 text-center">Bloody</div>
								<div class="col-md-2 text-center">
									<input class="text-center" type="checkbox" name="stool_nature[]" value="bloody"
									<?php 
									if(in_array('bloody', $stool_nature)){
										echo 'checked';
									} 
									else
									{
										echo '';
									}
									?>>
								</div>
								<div class="col-md-5">دموي</div>
							</div>
							<?php
							}
							if(in_array('mocous', $stool_nature))
							{
							?>
							<div class="row">
								<div class="col-md-5 text-center">Mocous</div>
								<div class="col-md-2 text-center">
									<input class="text-center" type="checkbox" name="stool_nature[]" value="mocous"
									<?php 
									if(in_array('mocous', $stool_nature)){
										echo 'checked';
									} 
									else
									{
										echo '';
									}
									?>>
								</div>
								<div class="col-md-5">مخاطي</div>
							</div>
							<?php
							}
							}
							if(!empty($pet_detail['stool_color']))
							{
							?>
							<br>
							<div class="row">
								<div class="col-md-6 text-center"> 
									<strong><span>Describe the color of the stool?</span></strong>
								</div>
								<div class="col-md-6 text-center">
									<strong><span>وصف لون البراز؟</span></strong>
								</div>
							</div>
							<?php
							if(in_array('yellow', $stool_color))
							{
							?> 
							<div class="row">
								<div class="col-md-5 text-center">Yellow</div>
								<div class="col-md-2 text-center">
									<input class="text-center" type="checkbox" name="stool_color[]" value="yellow"
									<?php 
									if(in_array('yellow', $stool_color)){
										echo 'checked';
									} 
									else
									{
										echo '';
									}
									?>>
								</div>
								<div class="col-md-5">الأصفر</div>
							</div>
							<?php
							}
							if(in_array('green', $stool_color))
							{
							?>
							<div class="row">
								<div class="col-md-5 text-center">Green</div>
								<div class="col-md-2 text-center">
									<input class="text-center" type="checkbox" name="stool_color[]" value="green"
									<?php 
									if(in_array('green', $stool_color)){
										echo 'checked';
									} 
									else
									{
										echo '';
									}
									?>>
								</div>
								<div class="col-md-5">أخضر</div>
							</div>
							<?php
							}
							if(in_array('brown', $stool_color))
							{
							?>
							<div class="row">
								<div class="col-md-5 text-center">Brown</div>
								<div class="col-md-2 text-center">
									<input class="text-center" type="checkbox" name="stool_color[]" value="brown"
									<?php 
									if(in_array('brown', $stool_color)){
										echo 'checked';
									} 
									else
									{
										echo '';
									}
									?>>
								</div>
								<div class="col-md-5">بنى</div>
							</div>
							<?php
							}
							if(in_array('red', $stool_color))
							{
							?>
							<div class="row">
								<div class="col-md-5 text-center">Red</div>
								<div class="col-md-2 text-center">
									<input class="text-center" type="checkbox" name="stool_color[]" value="red"
									<?php 
									if(in_array('red', $stool_color)){
										echo 'checked';
									} 
									else
									{
										echo '';
									}
									?>>
								</div>
								<div class="col-md-5">أحمر</div>
							</div>
							<?php
							}
							if(in_array('black', $stool_color))
							{
							?>
							<div class="row">
								<div class="col-md-5 text-center">Black</div>
								<div class="col-md-2 text-center">
									<input class="text-center" type="checkbox" name="stool_color[]" value="black"
									<?php 
									if(in_array('black', $stool_color)){
										echo 'checked';
									} 
									else
									{
										echo '';
									}
									?>>
								</div>
								<div class="col-md-5">أسود</div>
							</div>
							<?php
							}
						}
							?>
						</div>
						<div class="col-md-6">
							<?php
							if(!empty($pet_detail['urine_color']))
							{
							?>
							<div class="row">
								<div class="col-md-6 text-center"> 
									<strong><span>What is the color of urine</span></strong>
								</div>
								<div class="col-md-6 text-center">
									<strong><span>ما هو لون البول</span></strong>
								</div>
							</div>
							<?php
							if(in_array('light yellow', $urine_color))
							{
							?> 
							<div class="row">
								<div class="col-md-5 text-center">Light Yellow</div>
								<div class="col-md-2 text-center">
									<input class="text-center" type="checkbox" name="urine_color[]" value="light yellow"
									<?php 
									if(in_array('light yellow', $urine_color)){
										echo 'checked';
									} 
									else
									{
										echo '';
									}
									?>>
								</div>
								<div class="col-md-5">أصفر فاتح</div>
							</div>
							<?php
							}
							if(in_array('dark yellow', $urine_color))
							{
							?>
							<div class="row">
								<div class="col-md-5 text-center">Dark Yellow</div>
								<div class="col-md-2 text-center">
									<input class="text-center" type="checkbox" name="urine_color[]"
									value="dark yellow"
									<?php 
									if(in_array('dark yellow', $urine_color)){
										echo 'checked';
									} 
									else
									{
										echo '';
									}
									?>>
								</div>
								<div class="col-md-5">اصفر غامق</div>
							</div>
							<?php
							}
							if(in_array('red', $urine_color))
							{
							?>
							<div class="row">
								<div class="col-md-5 text-center">Red</div>
								<div class="col-md-2 text-center">
									<input class="text-center" type="checkbox" name="urine_color[]"
									value="red"
									<?php 
									if(in_array('red', $urine_color)){
										echo 'checked';
									} 
									else
									{
										echo '';
									}
									?>>
								</div>
								<div class="col-md-5">أحمر</div>
							</div>
							<?php
							}
							}
							if(!empty($pet_detail['eye_problems']))
							{
							?>
							<br>
							<div class="row">
								<div class="col-md-6 text-center"> 
									<strong><span>Eye Problems?</span></strong>
								</div>
								<div class="col-md-6 text-center">
									<strong><span>مشاكل العين؟</span></strong>
								</div>
							</div>
							<?php
							if(in_array('redness', $eye_problems))
							{
							?> 
							<div class="row">
								<div class="col-md-5 text-center">Redness</div>
								<div class="col-md-2 text-center">
									<input class="text-center" type="checkbox" name="eye_problems[]" value="redness"
									<?php 
									if(in_array('redness', $eye_problems)){
										echo 'checked';
									} 
									else
									{
										echo '';
									}
									?>>
								</div>
								<div class="col-md-5">احمرار</div>
							</div>
							<?php
							}
							if(in_array('discharges', $eye_problems))
							{
							?>
							<div class="row">
								<div class="col-md-5 text-center">Discharges</div>
								<div class="col-md-2 text-center">
									<input class="text-center" type="checkbox" name="eye_problems[]" value="discharges"
									<?php 
									if(in_array('discharges', $eye_problems)){
										echo 'checked';
									} 
									else
									{
										echo '';
									}
									?>>
								</div>
								<div class="col-md-5">التفريغ</div>
							</div>
							<?php
							}
							if(in_array('itching', $eye_problems))
							{
							?>
							<div class="row">
								<div class="col-md-5 text-center">Itching</div>
								<div class="col-md-2 text-center">
									<input class="text-center" type="checkbox" name="eye_problems[]" value="itching"
									<?php 
									if(in_array('itching', $eye_problems)){
										echo 'checked';
									} 
									else
									{
										echo '';
									}
									?>>
								</div>
								<div class="col-md-5">مثير للحكة</div>
							</div>
							<?php
							}
						}
							?>
						</div>
					</div>
					<div class="row">
						<div class="col-md-12">
							<h4 class="text-center bg-primary text-white my-1">Current Symptoms</h4>
						</div>
					</div>
					<div class="row">
						<div class="col-md-6">
							<?php
							if(!empty($pet_detail['current_symptoms']))
							{
							?>
							<div class="row">
								<div class="col-md-6 text-center"> 
									<strong><span>The current symptoms that your pet suffering from</span></strong>
								</div>
								<div class="col-md-6 text-center">
									<strong><span>الأعراض الحالية التي يعاني منها حيوانك الأليف</span></strong>
								</div>
							</div>
							<?php
							if(in_array('fever', $current_symptoms))
							{
							?> 
							<div class="row">
								<div class="col-md-5 text-center">Fever</div>
								<div class="col-md-2 text-center">
									<input class="text-center" type="checkbox" name="current_symptoms[]" value="fever"
									<?php 
									if(in_array('fever', $current_symptoms)){
										echo 'checked';
									} 
									else
									{
										echo '';
									}
									?>>
								</div>
								<div class="col-md-5">حمة</div>
							</div>
							<?php
							}
							if(in_array('thirst', $current_symptoms)){
							?>
							<div class="row">
								<div class="col-md-5 text-center">Thirst</div>
								<div class="col-md-2 text-center">
									<input class="text-center" type="checkbox" name="current_symptoms[]" value="thirst"
									<?php 
									if(in_array('thirst', $current_symptoms)){
										echo 'checked';
									} 
									else
									{
										echo '';
									}
									?>>
								</div>
								<div class="col-md-5">العطش</div>
							</div>
							<?php
							}
							if(in_array('seizures', $current_symptoms))
							{
							?>
							<div class="row">
								<div class="col-md-5 text-center">Seizures</div>
								<div class="col-md-2 text-center">
									<input class="text-center" type="checkbox" name="current_symptoms[]" value="seizures"
									<?php 
									if(in_array('seizures', $current_symptoms)){
										echo 'checked';
									} 
									else
									{
										echo '';
									}
									?>>
								</div>
								<div class="col-md-5">النوبات</div>
							</div>
							<?php
							}
							if(in_array('laziness', $current_symptoms))
							{
							?>
							<div class="row">
								<div class="col-md-5 text-center">Laziness</div>
								<div class="col-md-2 text-center">
									<input class="text-center" type="checkbox" name="current_symptoms[]" value="laziness"
									<?php 
									if(in_array('laziness', $current_symptoms)){
										echo 'checked';
									} 
									else
									{
										echo '';
									}
									?>>
								</div>
								<div class="col-md-5">الكسل</div>
							</div>
							<?php
							}
							if(in_array('fainting', $current_symptoms))
							{	
							?>
							<div class="row">
								<div class="col-md-5 text-center">Fainting</div>
								<div class="col-md-2 text-center">
									<input class="text-center" type="checkbox" name="current_symptoms[]" value="fainting"
									<?php 
									if(in_array('fainting', $current_symptoms)){
										echo 'checked';
									} 
									else
									{
										echo '';
									}
									?>>
								</div>
								<div class="col-md-5">إغماء</div>
							</div>
							<?php
							}
							if(in_array('dermatology problems', $current_symptoms))
							{
							?>
							<div class="row">
								<div class="col-md-5 text-center">Dermatology Problems</div>
								<div class="col-md-2 text-center">
									<input class="text-center" type="checkbox" name="current_symptoms[]" value="dermatology problems"
									<?php 
									if(in_array('dermatology problems', $current_symptoms)){
										echo 'checked';
									} 
									else
									{
										echo '';
									}
									?>>
								</div>
								<div class="col-md-5">مشاكل جلدية</div>
							</div>
							<?php
							}
							?>
							<br>
							<div class="row">
								<div class="col-md-6 text-center"> 
									<strong><span>Pulmonary Problems?</span></strong>
								</div>
								<div class="col-md-6 text-center">
									<strong><span>مشاكل في الرئة؟</span></strong>
								</div>
							</div>
							<?php
							if(empty($pulmonary_problems[0]))
							{
								echo '<div class="row"><div class="col-md-6 text-center">No Selected</div></div>';
							}
							if(in_array('coughing', $pulmonary_problems))
							{
							?> 
							<div class="row">
								<div class="col-md-5 text-center">Coughing</div>
								<div class="col-md-2 text-center">
									<input class="text-center" type="checkbox" name="pulmonary_problems[]" value="coughing"
									<?php 	
									if(in_array('coughing', $pulmonary_problems)){
										echo 'checked';
									} 
									else
									{
										echo '';
									}
									?>>
								</div>
								<div class="col-md-5">يسعل</div>
							</div>
							<?php
							}
							if(in_array('difficulties_in_breathing', $pulmonary_problems))
							{
							?>
							<div class="row">
								<div class="col-md-5 text-center">Difficulties in Breathing</div>
								<div class="col-md-2 text-center">
									<input class="text-center" type="checkbox" name="pulmonary_problems[]" value="difficulties_in_breathing"
									<?php 	
									if(in_array('difficulties_in_breathing', $pulmonary_problems)){
										echo 'checked';
									} 
									else
									{
										echo '';
									}
									?>>
								</div>
								<div class="col-md-5">صعوبات في التنفس</div>
							</div>
							<?php
							}
							if(in_array('sneezing', $pulmonary_problems))
							{
							?>
							<div class="row">
								<div class="col-md-5 text-center">Sneezing</div>
								<div class="col-md-2 text-center">
									<input class="text-center" type="checkbox" name="pulmonary_problems[]" value="sneezing"
									<?php 	
									if(in_array('sneezing', $pulmonary_problems)){
										echo 'checked';
									} 
									else
									{
										echo '';
									}
									?>>
								</div>
								<div class="col-md-5">العطس</div>
							</div>
							<?php
							}
							if(in_array('loss_of_appetie', $pulmonary_problems))
							{
							?>
							<div class="row">
								<div class="col-md-5 text-center">Loss of appetie</div>
								<div class="col-md-2 text-center">
									<input class="text-center" type="checkbox" name="pulmonary_problems[]" value="loss_of_appetie"
									<?php 	
									if(in_array('loss_of_appetie', $pulmonary_problems)){
										echo 'checked';
									} 
									else
									{
										echo '';
									}
									?>>
								</div>
								<div class="col-md-5">فقدان الشهية</div>
							</div>
							<?php
							}
						}
							?>
						</div>
						<div class="col-md-6">
							<?php
							if(!empty($pet_detail['mouth_teeth_problems']))
							{
							?>
							<div class="row">
								<div class="col-md-6 text-center"> 
									<strong><span>Mouth And Teeth Problems?</span></strong>
								</div>
								<div class="col-md-6 text-center">
									<strong><span>مشاكل الفم والأسنان؟</span></strong>
								</div>
							</div>
							<?php
							if(in_array('bad smell', $mouth_teeth_problems))
							{
							?> 
							<div class="row">
								<div class="col-md-5 text-center">Bad Smell</div>
								<div class="col-md-2 text-center">
									<input class="text-center" type="checkbox" name="mouth_teeth_problems[]" value="bad smell"
									<?php 	
									if(in_array('bad smell', $mouth_teeth_problems)){
										echo 'checked';
									} 
									else
									{
										echo '';
									}
									?>>
								</div>
								<div class="col-md-5">رائحة كريهة</div>
							</div>
							<?php
							}
							if(in_array('ulcers', $mouth_teeth_problems))
							{
							?>
							<div class="row">
								<div class="col-md-5 text-center">Ulcers</div>
								<div class="col-md-2 text-center">
									<input class="text-center" type="checkbox" name="mouth_teeth_problems[]" value="ulcers"
									<?php 	
									if(in_array('ulcers', $mouth_teeth_problems)){
										echo 'checked';
									} 
									else
									{
										echo '';
									}
									?>>
								</div>
								<div class="col-md-5">قرحة المعدة</div>
							</div>
							<?php
							}
							if(in_array('dryness', $mouth_teeth_problems))
							{
							?>
							<div class="row">
								<div class="col-md-5 text-center">Dryness</div>
								<div class="col-md-2 text-center">
									<input class="text-center" type="checkbox" name="mouth_teeth_problems[]" value="dryness"
									<?php 	
									if(in_array('dryness', $mouth_teeth_problems)){
										echo 'checked';
									} 
									else
									{
										echo '';
									}
									?>>
								</div>
								<div class="col-md-5">جفاف</div>
							</div>
							<?php
							}
							if(in_array('gun redness', $mouth_teeth_problems))
							{
							?>
							<div class="row">
								<div class="col-md-5 text-center">Gun Redness</div>
								<div class="col-md-2 text-center">
									<input class="text-center" type="checkbox" name="mouth_teeth_problems[]" value="gun redness"
									<?php 	
									if(in_array('gun redness', $mouth_teeth_problems)){
										echo 'checked';
									} 
									else
									{
										echo '';
									}
									?>>
								</div>
								<div class="col-md-5">احمرار البندقية</div>
							</div>
							<?php
							}
							if(in_array('change_color_teeth', $mouth_teeth_problems))
							{
							?>
							<div class="row">
								<div class="col-md-5 text-center">Change The Color Of The Teeth</div>
								<div class="col-md-2 text-center">
									<input class="text-center" type="checkbox" name="mouth_teeth_problems[]" value="change_color_teeth"
									<?php 	
									if(in_array('change_color_teeth', $mouth_teeth_problems)){
										echo 'checked';
									} 
									else
									{
										echo '';
									}
									?>>
								</div>
								<div class="col-md-5">علّق لون الأسنان</div>
							</div>
							<?php
							}
						}
							?>
						</div>
					</div>
					<div class="row">
						<div class="col-md-6">
							<div class="row">
								<div class="col-md-12">
									<h4 class="text-center bg-primary text-white my-1">Medical Background</h4>
								</div>
							</div>
							<?php 
							if(!empty($pet_detail['med_bck_q1']))
							{
							?>
							<div class="row">
								<div class="col-md-6 text-center"> 
									<strong><span>1. Has Your pet ever suffered from allergies or any adverse reactions?</span></strong>
								</div>
								<div class="col-md-6 text-center">
									<strong><span>1. هل سبق أن عانى حيوانك الأليف من الحساسية أو أي ردود فعل سلبية؟</span></strong>
								</div>
								<div class="col-md-5 text-center">Yes</div>
								<div class="col-md-2 text-center">
									<input class="text-center" type="radio" name="med_bck_q1" value="yes"
									<?php 	
									if($pet_detail['med_bck_q1'] == 'yes'){
										echo 'checked';
									} 
									else
									{
										echo '';
									}
									?>>
								</div>
								<div class="col-md-5">نعم</div>
							</div>
							<div class="row">
								<div class="col-md-5 text-center">No</div>
								<div class="col-md-2 text-center">
									<input class="text-center" type="radio" name="med_bck_q1" value="no"
									<?php 	
									if($pet_detail['med_bck_q1'] == 'no'){
										echo 'checked';
									} 
									else
									{
										echo '';
									}
									?>>
								</div>
								<div class="col-md-5">لا</div>
							</div>
							<?php
							}
							if(!empty($pet_detail['med_bck_q2']))
							{
							?>
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
									<input class="text-center" type="radio" name="med_bck_q2" value="yes"
									<?php 	
									if($pet_detail['med_bck_q2'] == 'yes'){
										echo 'checked';
									} 
									else
									{
										echo '';
									}
									?>>
								</div>
								<div class="col-md-5">نعم</div>
							</div>
							<div class="row">
								<div class="col-md-5 text-center">No</div>
								<div class="col-md-2 text-center">
									<input class="text-center" type="radio" name="med_bck_q2" value="no"
									<?php 	
									if($pet_detail['med_bck_q2'] == 'no'){
										echo 'checked';
									} 
									else
									{
										echo '';
									}
									?>>
								</div>
								<div class="col-md-5">لا</div>
								<div class="col-md-12">
									<input class="form-control" type="text" name="med_bck_q2_specify" value="<?=$pet_detail['med_bck_q2_specify']?>">
								</div>
							</div>
							<?php
							}
							?>
						</div>
						<div class="col-md-6">
							<div class="row">
								<div class="col-md-12">
									<h4 class="text-center bg-primary text-white my-1">Medicine And Vaccinations</h4>
								</div>
							</div>
							<?php
							if(!empty($pet_detail['med_and_vac_q1']))
							{
							?>
							<div class="row">
								<div class="col-md-12"> 
									<span class="text-right">حدد متى كانت آخر مرة تم فيها تطعيم حيوانك الأليف؟</span>
									<br>
									<span class="text-left">1. Specify when was the last time your pet got vaccinated?</span>
								</div>
								<div class="col-md-12">
									<input class="form-control" type="text" name="med_and_vac_q1" value="<?=$pet_detail['med_and_vac_q1']?>">
								</div>
							</div>
							<br>
							<?php
							}
							if(!empty($pet_detail['med_and_vac_q2']))
							{
							?>
							<div class="row">
								<div class="col-md-12"> 
									<span class="text-right">حدد متى كانت آخر مرة قمت فيها بإزالة الديدان من حيوانك الأليف؟</span>
									<br>
									<span class="text-left">2. Specify when was the last time you dewormned your pet?</span>
								</div>
								<div class="col-md-12">
									<input class="form-control" type="text" name="med_and_vac_q2" value="<?=$pet_detail['med_and_vac_q2']?>">
								</div>
							</div>
							<?php
							}
							?>
						</div>
					</div>
					<div class="row">
						<div class="col-md-12">
							<h4 class="text-center bg-primary text-white my-1">General Questions</h4>
						</div>
					</div>
					<div class="row">
						<div class="col-md-6">
							<?php
							if(!empty($pet_detail['general_q1']))
							{
							?>
							<div id="general_q1" class="border rounded p-1">
								<div class="row">
									<div class="col-md-12"> 
										<span class="text-right">منذ متى هل كان لديك حيوانك الأليف؟</span>
										<br>
										<span class="text-left">1. For how long have you had your pet?</span>
									</div>
									<div class="col-md-12">
										<input class="form-control" type="text" name="general_q1" value="<?=$pet_detail['general_q1']?>">
									</div>
								</div>
							</div>
							<?php
							}
							if(!empty($pet_detail['general_q2']))
							{
							?>
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
										<input class="text-center" type="radio" name="general_q2" value="indoor"
									<?php 	
									if($pet_detail['general_q2'] == 'indoor'){
										echo 'checked';
									} 
									else
									{
										echo '';
									}
									?>>
									</div>
									<div class="col-md-5">داخلي</div>
								</div>
								<div class="row">
									<div class="col-md-5 text-center">Outdoor</div>
									<div class="col-md-2 text-center">
										<input class="text-center" type="radio" name="general_q2" value="outdoor"
									<?php 	
									if($pet_detail['general_q2'] == 'outdoor'){
										echo 'checked';
									} 
									else
									{
										echo '';
									}
									?>>
									</div>
									<div class="col-md-5">في الخارج</div>
								</div>
							</div>
							<?php
							}
							if(!empty($pet_detail['general_q3']))
							{
							?>
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
										<input class="text-center" type="radio" name="general_q3" value="yes"
									<?php 	
									if($pet_detail['general_q3'] == 'yes'){
										echo 'checked';
									} 
									else
									{
										echo '';
									}
									?>>
									</div>
									<div class="col-md-5">نعم</div>
								</div>
								<div class="row">
									<div class="col-md-5 text-center">No</div>
									<div class="col-md-2 text-center">
										<input class="text-center" type="radio" name="general_q3" value="no"
									<?php 	
									if($pet_detail['general_q3'] == 'no'){
										echo 'checked';
									} 
									else
									{
										echo '';
									}
									?>
									>
									</div>
									<div class="col-md-5">لا</div>
									<div class="col-md-12">
										<input class="form-control" type="text" name="general_q3_specify" value="<?=$pet_detail['general_q3_specify']?>">
									</div>
								</div>
							</div>
							<?php
							}
							if(!empty($pet_detail['general_q4']))
							{
							?>
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
										value="dry food"
									<?php 
									if(in_array('dry food', $general_q4)){
										echo 'checked';
									} 
									else
									{
										echo '';
									}
									?>
									>
									</div>
									<div class="col-md-5">طعام جاف</div>
								</div>
								<div class="row">
									<div class="col-md-5 text-center">Wet Food</div>
									<div class="col-md-2 text-center">
										<input class="text-center" type="checkbox" name="general_q4[]" value="wet food"
									<?php 
									if(in_array('wet food', $general_q4)){
										echo 'checked';
									} 
									else
									{
										echo '';
									}
									?>>
									</div>
									<div class="col-md-5">طعام رطب</div>
								</div>
								<div class="row">
									<div class="col-md-5 text-center">Both</div>
									<div class="col-md-2 text-center">
										<input class="text-center" type="checkbox" name="general_q4[]" value="both"
									<?php 
									if(in_array('both', $general_q4)){
										echo 'checked';
									} 
									else
									{
										echo '';
									}
									?>>
									</div>
									<div class="col-md-5" >كلاهما</div>
								</div>
								<div class="row">
									<div class="col-md-5 text-center">Home Cooked</div>
									<div class="col-md-2 text-center">
										<input class="text-center" type="checkbox" name="general_q4[]" value="home cooked"
									<?php 
									if(in_array('home cooked', $general_q4)){
										echo 'checked';
									} 
									else
									{
										echo '';
									}
									?>>
									</div>
									<div class="col-md-5">مطبوخ في المنزل</div>
								</div>
								<div class="row">
									<div class="col-md-5 text-center">Leftovers</div>
									<div class="col-md-2 text-center">
										<input class="text-center" type="checkbox" name="general_q4[]" value="leftovers"
									<?php 
									if(in_array('leftovers', $general_q4)){
										echo 'checked';
									} 
									else
									{
										echo '';
									}
									?>>
									</div>
									<div class="col-md-5">بقايا الطعام</div>
								</div>
							</div>
							<?php
							}
							?>
						</div>
						<div class="col-md-6">
							<?php
							if(!empty($pet_detail['general_q5']))
							{
							?>
							<div id="general_q5" class="border rounded p-1">
								<div class="row">
									<div class="col-md-12"> 
										<span class="text-right">كم مرة في اليوم تطعم حيوانك الأليف؟</span>
										<br>
										<span class="text-left">5. How many times a day do you feed your pet?</span>
									</div>
									<div class="col-md-12">
										<input class="form-control" type="text" name="general_q5" value="<?=$pet_detail['general_q5']?>">
									</div>
								</div>
							</div>
							<?php
							}
							if(!empty($pet_detail['general_q6']))
							{
							?>
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
										<input class="text-center" type="radio" name="general_q6" value="continuous"
									<?php 	
									if($pet_detail['general_q6'] == 'continuous'){
										echo 'checked';
									} 
									else
									{
										echo '';
									}
									?>>
									</div>
									<div class="col-md-5">مستمر</div>
								</div>
								<div class="row">
									<div class="col-md-5 text-center">100g</div>
									<div class="col-md-2 text-center">
										<input class="text-center" type="radio" name="general_q6" value="100g"
									<?php 	
									if($pet_detail['general_q6'] == '100g'){
										echo 'checked';
									} 
									else
									{
										echo '';
									}
									?>>
									</div>
								</div>
								<div class="row">
									<div class="col-md-5 text-center">50g</div>
									<div class="col-md-2 text-center">
										<input class="text-center" type="radio" name="general_q6" value="50g"
									<?php 	
									if($pet_detail['general_q6'] == '50g'){
										echo 'checked';
									} 
									else
									{
										echo '';
									}
									?>
									>
									</div>
								</div>
							</div>
							<?php
							}
							if(!empty($pet_detail['general_q7']))
							{
							?>
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
										<input class="text-center" type="radio" name="general_q7" value="yes"
									<?php 	
									if($pet_detail['general_q7'] == 'yes'){
										echo 'checked';
									} 
									else
									{
										echo '';
									}
									?>
									>
									</div>
									<div class="col-md-5">نعم</div>
								</div>
								<div class="row">
									<div class="col-md-5 text-center">No</div>
									<div class="col-md-2 text-center">
										<input class="text-center" type="radio" name="general_q7" value="no"
									<?php 	
									if($pet_detail['general_q7'] == 'no'){
										echo 'checked';
									} 
									else
									{
										echo '';
									}
									?>
									>
									</div>
									<div class="col-md-5">لا</div>
								</div>
							</div>
							<?php
							}
							if(!empty($pet_detail['general_q8']))
							{
							?>
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
										<input class="text-center" type="radio" name="general_q8" value="yes"
									<?php 	
									if($pet_detail['general_q8'] == 'yes'){
										echo 'checked';
									} 
									else
									{
										echo '';
									}
									?>
									>
									</div>
									<div class="col-md-5">نعم</div>
								</div>
								<div class="row">
									<div class="col-md-5 text-center">No</div>
									<div class="col-md-2 text-center">
										<input class="text-center" type="radio" name="general_q8" value="no"
									<?php 	
									if($pet_detail['general_q8'] == 'no'){
										echo 'checked';
									} 
									else
									{
										echo '';
									}
									?>>
									</div>
									<div class="col-md-5">لا</div>
								</div>
							</div>
							<?php
							}
							if(!empty($pet_detail['general_q9']))
							{
							?>
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
										<input class="text-center" type="radio" name="general_q9" value="yes"
									<?php 	
									if($pet_detail['general_q9'] == 'yes'){
										echo 'checked';
									} 
									else
									{
										echo '';
									}
									?>>
									</div>
									<div class="col-md-5">نعم</div>
								</div>
								<div class="row">
									<div class="col-md-5 text-center">No</div>
									<div class="col-md-2 text-center">
										<input class="text-center" type="radio" name="general_q9" value="no"
									<?php 	
									if($pet_detail['general_q9'] == 'no'){
										echo 'checked';
									} 
									else
									{
										echo '';
									}
									?>>
									</div>
									<div class="col-md-5">لا</div>
									<div class="col-md-12">
										<input class="form-control" type="text" name="general_q9_specify" value="<?=$pet_detail['general_q9_specify']?>">
									</div>
								</div>
							</div>
							<?php
							}
							?>
						</div>
					</div>
					<?php
				}
				?>
			</div>
		</div>
	</div>