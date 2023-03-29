<?php ?>
	<div class="content-title">
		<h1>
			<span class="title">اطلاعات شخصی</span> 
			<a href="?dir=edit&p=pass">تغییر رمز عبور</a>
			<a href="?dir=edit&p=other">سایر تنظیمات</a>
		</h1>
	</div>
	<div class="row">
	<?php 
	$id = get_current_user_id();
	
	 
	if (!isset($_POST['btn']))
	{
		add_user_meta( $id, 'field','',true); 
		add_user_meta( $id, 'job','',true); 
		add_user_meta( $id, 'degree','',true); 
		add_user_meta( $id, 'childcount','',true); 
		
		add_user_meta( $id, 'birthdate','',true); 
		add_user_meta( $id, 'phone'	,'',true);
		add_user_meta( $id, 'mobile'	,'',true); 
		add_user_meta( $id, 'melli'	,'',true); 
		add_user_meta( $id, 'mail'		,'',true); 
		add_user_meta( $id, 'state'	,'',true); 
		add_user_meta( $id, 'city'		,'',true); 			
		add_user_meta( $id, 'agent_id'	,'',true); 	
	 
		// add_user_meta( $id, 'married'	,'',true); 		
		// add_user_meta( $id, 'father_name'	,'',true); 		
					
	 
		$last_name = get_user_meta( $id, 'last_name', true ); 
		$first_name = get_user_meta( $id, 'first_name', true ); 
		
		$phone = get_user_meta( $id, 'phone', true ); 
		$mobile = get_user_meta( $id, 'mobile', true ); 
		$birthdate = get_user_meta( $id, 'birthdate', true ); 
		$melli = get_user_meta( $id, 'melli', true ); 
		$mail = get_user_meta( $id, 'mail', true ); 
		$state = get_user_meta( $id, 'state', true ); 
		$city = get_user_meta( $id, 'city', true ); 
		
		$field = get_user_meta( $id, 'field', true ); 
		$job = get_user_meta( $id, 'job', true ); 
		$degree = get_user_meta( $id, 'degree', true ); 
		$childcount = get_user_meta( $id, 'childcount', true ); 
		
		// $married = get_user_meta( $id, 'married', true ); 
		// $father_name = get_user_meta( $id, 'father_name', true ); 
		
		// $parent_melli = get_user_meta( $id, 'parent_melli', true ); 
		// $parent_relation = get_user_meta( $id, 'parent_relation', true ); 
		?>
		 
	<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/persian-datepicker-0.4.5.min.css"/>		
	
	 <form method="POST" >
		<div class="col-sm-12" style="padding-right:50px">				 
			<div class="form-group">
				<div class="row">
					<div class="col-md-6" style="padding-left:0">
						<input type="text" name="input_name" class="form-control" id="input_name" placeholder="نام"  value="<?php echo $first_name  ?>" />
					</div>
					<div class="col-md-6" style="    padding-right: 2px;">
						<input type="text" name="input_family" class="form-control" id="family" placeholder="نام خانوادگی" value="<?php echo $last_name  ?>" />
					</div>
				</div>
			</div>				 
			<div class="form-group">
				<div class="row">
					<div class="col-md-6" style="padding-left:0">
						<input type="text" name="childcount" class="form-control" id="childcount" placeholder="تعداد فرزندان"  value="<?php echo $childcount  ?>" />
					</div>
					<div class="col-md-6" style="    padding-right: 2px;">
						<input type="text" name="job" class="form-control" id="job" placeholder="شغل " value="<?php echo $job  ?>" />
					</div>
				</div>
			</div>				 
			<div class="form-group">
				<div class="row">
					<div class="col-md-6" style="padding-left:0">
						<input type="text" name="field" class="form-control" id="field" placeholder="رشته تحصیلی"  value="<?php echo $field  ?>" />
					</div>
					<div class="col-md-6" style="    padding-right: 2px;">
						<input type="text" name="degree" class="form-control" id="degree" placeholder="مدرک تحصیلی" value="<?php echo $degree  ?>" />
					</div>
				</div>
			</div>
			<div class="form-group">
				<div class="row">
					<div class="col-md-3" style="padding-left:0">
						<div class="btn btn-default " id="birthdate_btn"> تاریخ تولد</div>
					</div>
					<div class="col-md-9" style="    padding-right: 2px;">
						<input placeholder="تاریخ تولد" type = "text" class="form-control" name="input_birthdate" id="birthdate2" />
					</div>
				</div>
			</div>
			<div class="form-group">
				<div class="row">

					<div class="col-md-6" style="padding-left:0" >
						<input placeholder="آدرس پست الکترونیک" type = "text" class="form-control" name="input_mail" id="email"   value="<?php echo $mail  ?>" />
					</div>
					<div class="col-md-6" style="padding-right:2px">
						<input type="text" name="input_melli" class="form-control" id="input_melli" placeholder="کد ملی"  value="<?php echo $melli  ?>" />
					</div>
				</div>
			</div>
<script>
	//http://127.0.0.1:8080/kh/city/?id=4
	function getCity(id)
	{
		var ostan = $('#state'+id).val();
		$('#city'+id).load("<?php echo site_url(); ?>/city/?id="+ostan);
		$('#city'+id).html('<option value=0>در حال بارگذاری</option>');
		
	}
</script>		
			<div class="form-group">
				<div class="row">
					<div class="col-md-6" style="padding-left:0">						
						<select name="input_state" id="state1" class="combo-box" onchange="getCity(1)">
							<option value="0">استان</option>
							<option value="1">آذربایجان شرقی</option>
							<option value="2">آذربایجان غربی</option>
							<option value="3">اردبیل</option>
							<option value="4">اصفهان</option>
							<option value="5">البرز</option>
							<option value="6">ایلام</option>
							<option value="7">بوشهر</option>
							<option value="8">تهران</option>
							<option value="9">چهارمحال بختیاری</option>
							<option value="10">خراسان جنوبی</option>
							<option value="11">خراسان رضوی</option>
							<option value="12">خراسان شمالی</option>
							<option value="13">خوزستان</option>
							<option value="14">زنجان</option>
							<option value="15">سمنان</option>
							<option value="16">سیستان و بلوچستان</option>
							<option value="17">فارس</option>
							<option value="18">قزوین</option>
							<option value="19">قم</option>
							<option value="20">کردستان</option>
							<option value="21">کرمان</option>
							<option value="22">کرمانشاه</option>
							<option value="23">کهگیلویه و بویر احمد</option>
							<option value="24">گلستان</option>
							<option value="25">گیلان</option>
							<option value="26">لرستان</option>
							<option value="27">مازندران</option>
							<option value="28">مرکزی</option>
							<option value="29">هرمزگان</option>
							<option value="30">همدان</option>
							<option value="31">یزد</option>                                   
						</select>						
					</div>
					<div class="col-md-6" style="padding-right: 2px;">
						<select name="input_city"  id="city1" class="combo-box">
							<option value="1">شهر</option>
						</select>
					</div>
				</div>
			</div>
			<div class="form-group">
				<div class="row">
					<div class="col-md-6" style="padding-left:0">
						<input type="text" name="input_phone" class="form-control" id="phone" placeholder="تلفن منزل"   value="<?php echo $phone  ?>" />
					</div>
					<div class="col-md-6" style="    padding-right: 2px;">
						<input type="text" name="input_mobile" class="form-control" id="mobile" placeholder="تلفن همراه "   value="<?php echo $mobile  ?>" />
					</div>
				</div>
			</div>
			
			 
		 
			<div class="col-sm-12 pager">
				<input type="submit" value="ذخیره" name="btn" class="btn btn-register" style="width: 200px;" />
			</div>
		</div>
	</form>
		
		<script src="<?php echo get_template_directory_uri(); ?>/js/persian-date.js"></script>
		<script src="<?php echo get_template_directory_uri(); ?>/js/persian-datepicker-0.4.5.min.js"></script>    

		<?php wp_footer();

		?> 
		<script type="text/javascript">
			$(document).ready(function() {
					$("#birthdate2").pDatepicker({
						altFormat: "YYYY MM DD",
						format: 'YYYY/MM/DD',
						autoClose:true
					});
					
					$( "#birthdate2" ).pDatepicker("setDate",[<?php 
					 
					
					if($birthdate != '' )
					{
						$bd =explode('/', $birthdate);
						echo $bd[0].','.$bd[1].','.$bd[2] ;
					}	
					else 
					{
						 
						echo sprintf("%04s,%02s,%02s",
									ztjalali_english_num(jdate('Y')),
									ztjalali_english_num(jdate('n')),
									ztjalali_english_num(jdate('j'))); 
					}
					?>] );

			});

		</script>
	<?php 	

	}	
	else 
	{
		add_user_meta( $id, 'phone'				,'',true);
		add_user_meta( $id, 'mobile'			,'',true); 
		add_user_meta( $id, 'birthdate'			,'',true); 
		add_user_meta( $id, 'melli'				,'',true); 
		add_user_meta( $id, 'mail'				,'',true); 
		add_user_meta( $id, 'state'				,'',true); 
		add_user_meta( $id, 'city'				,'',true);
		
		
		add_user_meta( $id, 'degree'		,'',true); 		
		add_user_meta( $id, 'job'			,'',true); 		
		add_user_meta( $id, 'field'			,'',true); 		
		add_user_meta( $id, 'childcount'	,'',true); 		
		add_user_meta( $id, 'married'		,'',true); 		
		add_user_meta( $id, 'father_name'	,'',true); 		
	
		
		update_user_meta( $id, 'phone'				,sanitize_text_field( $_POST['input_phone'] )); 
		update_user_meta( $id, 'mobile'				,sanitize_text_field( $_POST['input_mobile']  )); 
		update_user_meta( $id, 'birthdate'			,sanitize_text_field( $_POST['input_birthdate'])); 
		update_user_meta( $id, 'melli'				,sanitize_text_field( $_POST['input_melli']  )); 
		update_user_meta( $id, 'mail'				,sanitize_text_field( $_POST['input_mail']  )); 
		update_user_meta( $id, 'state'				,sanitize_text_field( $_POST['input_state']  )); 
		update_user_meta( $id, 'city'				,sanitize_text_field( $_POST['input_city']  )); 
		
		update_user_meta( $id, 'first_name'			,sanitize_text_field( $_POST['input_name']  )); 
		update_user_meta( $id, 'last_name'			,sanitize_text_field( $_POST['input_family']  )); 
		update_user_meta( $id, 'father_name'		,sanitize_text_field( $_POST['input_father_name']  )); 
		
		update_user_meta( $id, 'degree'				,sanitize_text_field( $_POST['degree']  )); 
		update_user_meta( $id, 'job'				,sanitize_text_field( $_POST['job']  )); 
		update_user_meta( $id, 'field'				,sanitize_text_field( $_POST['field']  )); 
		update_user_meta( $id, 'childcount'			,sanitize_text_field( $_POST['childcount']  )); 
		update_user_meta( $id, 'married'			,sanitize_text_field( $_POST['married']  )); 
		
		
		echo ( '<div class="message-frame">
			<div class="col-sm-9 alert alert-info">
			<h1><span class="title">اطلاعات با موفقیت ذخیره شد  . </span></h1>
			</div></div>' );
	}
			
	?>
	
<?php 
// clean up after our query
wp_reset_postdata(); 
?>
		
		
	</div>
	