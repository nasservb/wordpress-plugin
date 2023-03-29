<?php ?>
	<div class="content-title">
		<h1>
			
			<a href="?dir=edit&p=index"> اطلاعات شخصی</a>
			<a href="?dir=edit&p=pass">تغییر رمز عبور</a> 
			<a href="?dir=edit&p=other">سایر تنظیمات</a>  
		</h1>
	</div>
	<div class="row">
	<?php 
	$id = get_current_user_id();
	
	 
	if (!isset($_POST['btn']))
	{
	 
		$profile_picture =  get_user_meta( $id, 'profile_picture', true ) ;  
		 
		 
		?>
		 
	 <form method="POST"  enctype="multipart/form-data" >
		<div class="col-sm-12" style="padding-right:50px" >				 
			<div class="form-group">
				<div class="well" style="margin-bottom: 5px;">در این صفحه می توانید تصویر پروفایل خود را تغییر دهید : </div>
				<div class="row">
					<div class="col-md-3" style="    padding-right: 2px;">
						تصویر کنونی : 
					</div>
					<div class="col-md-6"  >
						<img src="<?php echo $profile_picture; ?>" style="max-height:300px;max-width:300px"  />
					</div> 
				</div>
			</div>
			<div class="form-group">
				 
				<div class="row">
					<div class="col-md-3" style="    padding-right: 2px;">
						تصویر جدید : 
					</div>
					<div class="col-md-6" style="padding-left:0">
						<input type="file" accept="image/*" class="form-control" name="profile_picture" id="profile_picture"  />
						<img id="picturePreview" src="#" style="max-height:300px;max-width:300px"  />
					</div>
				</div>
			</div>
			
		 
			<div class="col-sm-12 pager">
				<input type="submit" value="ذخیره" name="btn" class="btn btn-register" style="width: 200px;" />
			</div>
		</div>
	</form>
	
	<script>
	function readURL(input) {

		if (input.files && input.files[0]) {
			var reader = new FileReader();

			reader.onload = function (e) {
				$('#picturePreview').attr('src', e.target.result);
			}

			reader.readAsDataURL(input.files[0]);
		}
	}

	$("#profile_picture").change(function(){
		readURL(this);
	});
	</script>
		
	<?php 	

	}	
	else 
	{
		
		$upload = wp_upload_bits($_FILES["profile_picture"]["name"], null, file_get_contents($_FILES["profile_picture"]["tmp_name"]));
		
		 
		if(!$upload['error']) 
		{
			add_user_meta( $id, 'profile_picture'			,'',true);	  		 
			add_user_meta( $id, 'profile_picture_file'		,'',true);	  		 
			update_user_meta( $id, 'profile_picture'		,$upload['url']);  
			update_user_meta( $id, 'profile_picture_file'	,$upload['file'] );  
			 
			echo ( '<div class="message-frame">
			<div class="col-sm-9 alert alert-info">
			<h1><span class="title">تصویر با موفقیت ذخیره شد  . </span></h1>
			</div></div>' );
		}
		else 
		{
			echo ( '<div class="message-frame">
			<div class="col-sm-9 alert alert-warning">
			<h1><span class="title">خطایی در ذخیره سازی تصویر رخ داد. دوباره امتحان کنید  . <br> '. _($upload['error']) .' </span></h1>
			</div></div>' );
		}
	}
			
	?>
	
<?php 
// clean up after our query
wp_reset_postdata(); 
?>
		
		
	</div>
	