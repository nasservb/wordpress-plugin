<?php ?>
	<div class="content-title">
		<h1>
			
			<a href="?dir=edit&p=index">اطلاعات شخصی </a>
			<span class="title">تغییر رمز عبور</span>  
			<a href="?dir=edit&p=other">سایر تنظیمات</a>
		</h1>
	</div>
	<div class="row">
	<?php 
	$id = get_current_user_id();
	
	$error = 'def';  
	if (isset($_POST['btn']))
	{
		$error = '';  
		$user = new WP_User($user_id);
		
		if (  empty( $_POST['input_new_pass'] ) )
        {
			$error  = 'رمز عبور نباید خالی باشد <br>' ;  
        }		
		if (  strlen( $_POST['input_new_pass'] )< 5 )
        {
			$error  = 'طول رمز عبور نباید کوتاه باشد <br>' ;  
        }
		
		if (  $_POST['input_new_pass'] !=  $_POST['input_cnf_pass'] )
        {
			$error  = 'رمز عبور جدید و تکرار آن با هم یکسان نیستند <br>' ;  
        }
		
		
		if (!wp_check_password( $_POST['input_old_pass'], $user->data->user_pass, $user->ID)  )
        {
			$error  = 'رمز عبور قدیمی صحیح نیست<br>' ;  
        }
		
		
		if($error == '' )
		{		
			wp_set_password(  $_POST['input_new_pass']  ,$id) ;
			 
			echo ( '<div class="message-frame">
				<div class="col-sm-9 alert alert-info">
				<h1><span class="title">رمز عبور با موفقیت تغییر کرد . </span></h1>
				</div></div>' );
		}
		else 
		{
			echo '<div class="alert alert-warning">'.$error.'</div>';
		}
	}
	
	if($error != '')	
	{	
		
	?>
		
		
		 
	<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/persian-datepicker-0.4.5.min.css"/>		
	
	 <form method="POST" >
		<div class="col-sm-6 pull-left" style="position: relative;left: 20%;" >				 
			 
			 
			<div class="form-group">
				<div class="row">

					<div class="col-md-12"  >
						<input type="password" name="input_old_pass" class="form-control" id="input_old_pass" placeholder="رمز قبلی"  value="" />
					</div>
					
				</div>
			</div>
			<div class="form-group">
				<div class="row">
					<div class="col-md-12 pull-right"  >
						<input placeholder="رمز جدید" type = "password" class="form-control" name="input_new_pass" id="input_new_pass"   value="" />
					</div> 
				</div>
			</div>
			<div class="form-group">
				<div class="row">
					<div class="col-md-12 pull-right"  >
						<input placeholder="تکرار رمز جدید" type = "password" class="form-control" name="input_cnf_pass" id="input_cnf_pass"   value="" />
					</div> 
				</div>
			</div>
			 
			 
			<div class="col-sm-12 pager">
				<input type="submit" value="ذخیره" name="btn" class="btn btn-register" style="width: 200px;" />
			</div>
		</div>
	</form>
		
		
		<?php 
		
	}
		wp_footer();		?> 
		
	
	
<?php 
// clean up after our query
wp_reset_postdata(); 
?>
		
		
	</div>
	