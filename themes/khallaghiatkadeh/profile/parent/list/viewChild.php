<?php ?>
	<div class="content-title">
		<h1>
			<a href="?dir=list&p=index">لیست فرزندان</a>
			<a href="?dir=list&p=suggest">دوره های پیشنهادی برای فرزندان</a> 
		</h1>
	</div>
	<div class="row">
	<?php 
	$id = ( $_REQUEST['id' ] ) ? $_REQUEST['id' ] : 0;
	
	 
	if (!isset($_POST['btn']))
	{		 
	 
		$last_name = get_user_meta( $id, 'last_name', true ); 
		$first_name = get_user_meta( $id, 'first_name', true ); 
		
		$phone = get_user_meta( $id, 'phone', true ); 
		$mobile = get_user_meta( $id, 'mobile', true ); 
		$birthdate = get_user_meta( $id, 'birthdate', true ); 
		$melli = get_user_meta( $id, 'melli', true ); 
		$mail = get_user_meta( $id, 'mail', true ); 
		$state = get_user_meta( $id, 'state', true ); 
		$city = get_user_meta( $id, 'city', true ); 
		$parent_melli = get_user_meta( $id, 'parent_melli', true ); 
		$parent_relation = get_user_meta( $id, 'parent_relation', true ); 
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
			<div class="form-group">
				<div class="row">
					<div class="col-md-6" style="padding-left:0">
						<select name="input_state" class="combo-box">
							<option value="1">استان</option>
						</select>
					</div>
					<div class="col-md-6" style="padding-right: 2px;">
						<select name="input_city" class="combo-box">
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
			
			<div class="form-group">
				<small>اگرشما والدین نوآموز هستید این قسمت را تکمیل کنید</small>
				<div class="row">
					<div class="col-md-6" style="padding-left:0">
						<input type="text" name="input_parent_melli"  value="<?php echo $parent_melli  ?>"  class="form-control" id="melli" placeholder="کد ملی شما">
					</div>
					<div class="col-md-6" style="padding-right: 2px;">
						<select name="input_parent_relation" class="combo-box">
							<option <?php echo($parent_relation==1 ? 'selected' : '') ?> value="0">نسبت شما با نوآموز</option>
							<option <?php echo($parent_relation==1 ? 'selected' : '') ?> value="1">پدر</option>
							<option <?php echo($parent_relation==2 ? 'selected' : '') ?> value="2">مادر</option>
							<option <?php echo($parent_relation==3 ? 'selected' : '') ?> value="3">خواهر</option>
							<option <?php echo($parent_relation==4 ? 'selected' : '') ?> value="4">برادر</option>
							<option <?php echo($parent_relation==5 ? 'selected' : '') ?> value="5">سایر بستگان</option>
						</select>
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
		add_user_meta( $id, 'parent_melli'		,'',true); 
		add_user_meta( $id, 'parent_relation'	,'',true); 		
	
		
		update_user_meta( $id, 'phone'				,sanitize_text_field( $_POST['input_phone'] )); 
		update_user_meta( $id, 'mobile'				,sanitize_text_field( $_POST['input_mobile']  )); 
		update_user_meta( $id, 'birthdate'			,sanitize_text_field( $_POST['input_birthdate'])); 
		update_user_meta( $id, 'melli'				,sanitize_text_field( $_POST['input_melli']  )); 
		update_user_meta( $id, 'mail'				,sanitize_text_field( $_POST['input_mail']  )); 
		update_user_meta( $id, 'state'				,sanitize_text_field( $_POST['input_state']  )); 
		update_user_meta( $id, 'city'				,sanitize_text_field( $_POST['input_city']  )); 
		update_user_meta( $id, 'parent_melli'		,sanitize_text_field( $_POST['input_parent_melli']  )); 
		update_user_meta( $id, 'parent_relation'	,sanitize_text_field( $_POST['input_parent_relation']  )); 
		update_user_meta( $id, 'first_name'			,sanitize_text_field( $_POST['input_name']  )); 
		update_user_meta( $id, 'last_name'			,sanitize_text_field( $_POST['input_family']  )); 
		
		 
		
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
	