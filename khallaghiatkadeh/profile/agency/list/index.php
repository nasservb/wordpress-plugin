<style>
.panel-content .img-circle { 
    min-width: 100px;
    min-height: 100px;
    max-width: 100px;
    max-height: 100px;
}
.author {
    float: right;
}
</style>
<div class="col-sm-12 pull-right">
    <div class="content-title">
		<h1>
			<span class="title">لیست اساتید </span>  
			<a href="?dir=list&p=students">لیست دانشجویان</a> 	
        </h1>
	</div>
	
    <div class="row"> 
	<?php 
	$id = get_current_user_id();
	$paged = ( get_query_var( 'paged' ) ) ? get_query_var( 'paged' ) : 1;
	
	

	$the_query = new WP_User_Query(
		array(
			'meta_query'=> array(
								array(
									'key'    => 'agent_id',
									'value'  => $id,								
									'compare'=>'='
									)
								),
			'role' 		=> 'teacher', 
			'fields' 	=> 'all',	
			'posts_per_page' => 5,
			'paged' =>$paged 
		)  
	);
	
	$childs = $the_query->get_results();
	
	if ( !empty($childs)) :
		foreach ($childs as $child) 
		{
			$id = $child->ID;
			$profile_picture = '';
			$profile_picture =  get_user_meta( $id, 'profile_picture', true ) ;  
			 
		?>
		 
		<div class="col-sm-3 author">
				<img <?php echo ($profile_picture==''? '' : ' src="'.$profile_picture.'" ' ) ;  ?> class="img-student img-circle" />
				<div class="title">
					<?php echo $child->first_name . ' ' .  $child->last_name; ?>
				</div> 
			<a class="btn btn-default" href="?dir=list&p=viewChild&id=<?php echo $child->ID; ?>">پروفایل</a>	
			<a class="btn btn-default" href="?dir=list&p=viewCourse&uid=<?php echo $child->ID; ?>">دوره ها</a>	
			
		</div>
	<?php
		}
	
	else :
		echo ( '<div class="message-frame">
			<div class="col-sm-9 message-box">
			<h1><span class="title">شما هنوز فردی را به عنوان استاد اضافه نکرده اید . </span></h1>
			</div></div>' );
	endif;
			
	?>
	
		 	
<!-- register modal -->
<div class="modal fade" id="studentRegisterModal" tabindex="-1" role="dialog" aria-labelledby="modalLabel" aria-hidden="true">
  <div class="modal-dialog">
	<div class="modal-content register" style="width:400px;text-align: right;">
		<div class="register-modal-container">
            <!---student contet--->
		
			<div class="register-student ">				
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">×</span><span class="sr-only">بستن</span></button>
					<h5 class="modal-title" id="lineModalLabel">ثبت نام مربی  </h5>					 
				</div>
				
				<div class="modal-body">
					<form name="registerStudentform" id="studentRegisterform"  method="post">
						<input type="hidden" name="loginAfterRegister" id="studentLogin" value="2" />												
						<input type="hidden" name="user_login" id="student_user_login" value="" />
						<input type="hidden" name="registerTeacher" value=1 />
						
                        <div class="form-group">
                            <div class="row">
                                <div class="col-md-6" style="padding-left:0">
                                    <input type="text" name="name" class="form-control" id="teacherName" placeholder="نام">
                                </div>
                                <div class="col-md-6" style="padding-right: 2px;">
                                    <input type="text" name="family" class="form-control" id="teacherFamily" placeholder="نام خانوادگی">
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="row">
                                <div class="col-md-12">
                                    <input type="text" name="melli" class="form-control" id="teacherMelliCode" placeholder="کد ملی">
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="row">
                                <div class="col-md-12"  >
                                    <input placeholder="آدرس پست الکترونیک" onchange="replaceUserName('teacher_email','teacher_user_login')" type = "text" class="form-control" name="user_email" id="teacher_email" />
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="row">
                                <div class="col-md-6" style="padding-left:0">
                                    <select name="state" id="state3" class="combo-box" onchange="getCity(3)">
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
                                    <select name="city" id="city3" class="combo-box">
                                        <option value="1">شهر</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="row">
                                <div class="col-md-6" style="padding-left:0" >
                                    <input type="text" name="phone" class="form-control" id="phone" placeholder="تلفن منزل">
                                </div>
                                <div class="col-md-6" style="padding-right: 2px;">
                                    <input type="text" name="mobile" class="form-control" id="mobile" placeholder="تلفن همراه ">
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="row">
                                <div class="col-md-6" style="padding-left:0">
                                    <input type="password"  onfocus="checkUsernameExist('teacher')" name="pass" class="form-control" id="teacherPass" placeholder="رمز عبور">
                                </div>
                                <div class="col-md-6" style="padding-right: 2px;">
                                    <input type="password" name="confirm_pass" class="form-control" id="teacherConfirmPass" placeholder="رمز عبور تکرار ">
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="row">							
								<div class="col-md-12" style="padding-left:0;padding-top: 10px;">
                                    <input type="checkbox" name="agreement" id="agreement" class="form-control" style="width: 50px;float: right;margin-top: -8px;"> 
									<a href="<?=site_url()  ?>/teacherRole" target="_blank" >قوانین ثبت نام  </a>
									را می پذیرم 
                                </div>  
                            </div>
                        </div>
                        
					   <button type="button" class="btn btn-register" onclick="validateRegisterForm('student')" >ثبت نهایی اطلاعات</button>
					   
					</form>

				</div>
			
			</div>
             
		</div>
		
		 
	</div>
	
	
  </div>
</div>



	
	<div class="col-sm-12 pager">
	<?php
		// get_next_posts_link() usage with max_num_pages
		echo get_next_posts_link( '<div class="btn btn-default">❮ صفحه ی قبلی</div>', $the_query->max_num_pages );
		echo get_previous_posts_link( '<div class="btn btn-default">صفحه جدید   ❯</div>' );
		?>
	</div>
<?php 
// clean up after our query
wp_reset_postdata(); 
?>

    </div>
</div>