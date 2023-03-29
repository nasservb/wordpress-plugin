<?php ?>
	<div class="content-title">
		<h1>
			
			<a href="?dir=edit&p=index"> اطلاعات شخصی</a>
			<a href="?dir=edit&p=pass">تغییر رمز عبور</a> 
			<span class="title">سایر تنظیمات</span> 
		</h1>
	</div>
	<div class="row">
	<?php 
	$id = get_current_user_id();
	
	 
	if (!isset($_POST['btn']))
	{
	 
		$notic_news = intval(get_user_meta( $id, 'notic_news', true )); 
		$notic_email = intval(get_user_meta( $id, 'notic_email', true )); 
		$notic_sms = intval(get_user_meta( $id, 'notic_sms', true )); 
		$anjoman_pas = intval(get_user_meta( $id, 'anjoman_pas', true )); 
		$anjoman_register = intval(get_user_meta( $id, 'anjoman_register', true)); 
		 
		
		?>
		 
	 <form method="POST" >
		<div class="col-sm-12" style="padding-right:50px" >				 
			<div class="form-group">
				<div class="well" style="margin-bottom: 5px;">مایل به دریافت کدام موارد هستید</div>
				<div class="row">
					<div class="col-md-3" style="    padding-right: 2px;">
						<input type="checkbox" name="notic_news" class="form-control" id="notic_news"  <?php echo ($notic_news == 1 ? 'checked' : '');  ?>  />خبرنامه
					</div>
					<div class="col-md-3"  >
						<input type="checkbox" name="notic_email" class="form-control" id="notic_email"   <?php echo ($notic_email == 1 ? 'checked' : '');  ?>  />ایمیل
					</div>
					<div class="col-md-3" style="padding-left:0">
						<input type="checkbox" name="notic_sms" class="form-control" id="notic_sms"   <?php echo ($notic_sms == 1 ? 'checked' : '');  ?>  />پیامک
					</div>
				</div>
			</div>
			<div class="form-group">
				<div class="well" style="margin-bottom: 5px;">آیا مایل به عضویت در انجمن خلاقیتکده هستید ؟</div>
				<div class="row">
					<div class="col-md-6" style="    padding-right: 2px;">
						<input type = "radio" class="form-control" name="anjoman_register" id="anjoman_register" value="1"   <?php echo ($anjoman_register == 1 ? 'checked' : '');  ?> />بله
					</div>
					<div class="col-md-6" style="padding-left:0">
						<input type = "radio" class="form-control" name="anjoman_register" id="anjoman_register" value="0"   <?php echo ($anjoman_register == 0 ? 'checked' : '');  ?> />خیر
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
	else 
	{
		add_user_meta( $id, 'notic_news'		,'',true);		 
		add_user_meta( $id, 'notic_email'		,'',true);     		 
		add_user_meta( $id, 'notic_sms'			,'',true);     			 
		add_user_meta( $id, 'anjoman_pas'		,'',true);       
		add_user_meta( $id, 'anjoman_register'	,'',true); 		
	
		update_user_meta( $id, 'notic_news'			,(sanitize_text_field( $_POST['notic_news'] )=='on'? 1 :0)); 
		update_user_meta( $id, 'notic_email'		,(sanitize_text_field( $_POST['notic_email']  )=='on'? 1 :0)); 
		update_user_meta( $id, 'notic_sms'			,(sanitize_text_field( $_POST['notic_sms'])=='on'? 1 :0)); 
		update_user_meta( $id, 'anjoman_pas'		,sanitize_text_field( $_POST['anjoman_pas']  )); 
		update_user_meta( $id, 'anjoman_register'	,sanitize_text_field( $_POST['anjoman_register']  )); 
		 
		
		 
		
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
	