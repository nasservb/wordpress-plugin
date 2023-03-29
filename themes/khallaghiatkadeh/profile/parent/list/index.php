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
			<span class="title">لیست فرزندان</span> 
			<a href="?dir=list&p=suggest">دوره های پیشنهادی برای فرزندان</a>
			<a class="pull-left btn btn-default" style="border-radius: 20px;" href="javascript:void(0)"  data-toggle="modal" data-target="#studentRegisterModal">ثبت فرزند جدید</a>
        </h1>
	</div>
	
    <div class="row"> 
	<?php 
	$id = get_current_user_id();
	$paged = ( get_query_var( 'paged' ) ) ? get_query_var( 'paged' ) : 1;
	
	
	$state =  get_user_meta( $id, 'state', true ) ; 
	$city =  get_user_meta( $id, 'city', true ) ; 
	 
	$melli = get_user_meta( $id, 'melli', true );
	
	$the_query = new WP_User_Query(
		array(
			'meta_query'=> array(
								array(
									'key'    => 'parent_melli',
									'value'  => $melli,								
									'compare'=>'='
									)
								),
			'role' 		=> 'user', 
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
			<h1><span class="title">شما فرزندی اضافه نکرده اید . برای اضافه کردن فرزند باید کد ملی خود را در پنل کاربری فرزندان در قسمت والدین وارد کنید . </span></h1>
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
					<h5 class="modal-title" id="lineModalLabel">ثبت نام نواندیش  </h5>					 
				</div>
				
				<div class="modal-body">
					<form name="registerStudentform" id="studentRegisterform"  method="post">
						<input type="hidden" name="loginAfterRegister" id="studentLogin" value="2" />
						<input type="hidden" name="state" value="<?php echo $state; ?>" />
						<input type="hidden" name="city" value="<?php echo $city; ?>" />
						<input type="hidden" name="parent_melli" value="<?php echo $melli; ?>" />
						<input type="hidden" name="registerStudent" value=1 />
						<input type="hidden" name="user_login" id="student_user_login" value="" />
                        <div class="form-group">
                        <div class="row">
                            <div class="col-md-6" style="padding-left:0">
                                <input type="text" name="name" class="form-control" id="studentName" placeholder="نام">
                            </div>
                            <div class="col-md-6" style="padding-right: 2px;">
                                <input type="text" name="family" class="form-control" id="studentFamily" placeholder="نام خانوادگی">
                            </div>
                        </div>
                        </div>
                        <div class="form-group">
                        <div class="row">
                            <div class="col-md-3" style="padding-left:0">
                                <div class="btn btn-default " id="birthdate_btn"> تاریخ تولد</div>
                            </div>
                            <div class="col-md-9" style="padding-right: 2px;">
                                <input placeholder="تاریخ تولد" type = "text" class="form-control" name="birthdate" id="birthdate" />
                            </div>
                        </div>
                        </div>
                        <div class="form-group">
                        <div class="row">
                            <div class="col-md-6"style="padding-left:0">
                                <input placeholder="آدرس پست الکترونیک" type = "text" class="form-control" onchange="replaceUserName('student_email','student_user_login')"  name="user_email" id="student_email" />
                            </div>

                            <div class="col-md-6" style="padding-right:2px" >
                                <input type="text" name="melli" class="form-control" id="studentMelliCode" placeholder="کد ملی">
                            </div>
                        </div>
                        </div> 
                        <div class="form-group">
                        <div class="row">
                            <div class="col-md-6" style="padding-left:0">
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
                                <input type="password" onfocus="checkUsernameExist('student')" name="pass" class="form-control" id="studentPass" placeholder="رمز عبور">
                            </div>
                            <div class="col-md-6" style="padding-right: 2px;">
                                <input type="password" name="confirm_pass" class="form-control" id="studentConfirmPass" placeholder="رمز عبور تکرار ">
                            </div>
                        </div>
                        </div>
                        <div class="form-group">                             
                            <div class="row">                                 
                                <div class="col-md-12"  >
                                    <select name="parent_relation" class="combo-box">
                                        <option value="0">نسبت شما با نواندیش</option>
                                        <option value="1">پدر</option>
                                        <option value="1">مادر</option>
                                        <option value="1">خواهر</option>
                                        <option value="1">برادر</option>
                                        <option value="1">سایر بستگان</option>
                                    </select>
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