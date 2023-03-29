<div class="col-sm-12 pull-right">
    <div class="content-title"><h1>			
			<a href="?dir=list&p=index">لیست فرزندان</a>
			<span class="title">دوره های پیشنهادی برای فرزندان</span> 
			<a class="pull-left btn btn-default" style="border-radius: 20px;" href="javascript:void(0)"  data-toggle="modal" data-target="#studentRegisterModal">ثبت فرزند جدید</a>
        </h1></div>
    <div class="row"> 
	<?php 
	$id = get_current_user_id();
	$paged = ( get_query_var( 'paged' ) ) ? get_query_var( 'paged' ) : 1;
	 
	 
	 
	$melli = get_user_meta( $id, 'melli', true );
	
	$child_query = new WP_User_Query(
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
	
	$childs = $child_query->get_results();	 
	 
	 
	$the_query = new WP_Query(
		array(
			'post_type' => 'product' , 			
			'product_cat' => 'student-course',
			'orderby'   => 'ID',
			'order'     => 'DESC',
			'posts_per_page' => 5,
			'paged' =>$paged 
		)  
	);
	
	
	if ( !empty($childs)) 
	{
		
	
	if ( $the_query->have_posts()) :
		while ( $the_query->have_posts() ) : $the_query->the_post();
		
		$teacher_id =get_post_meta( $the_query->post->ID, '_teacher_id', true );
		$teacher='';
		if(intval($teacher_id)>0 )
		{
			$teacher_account = get_userdata($teacher_id); 
			$teacher = $teacher_account->first_name . ' ' . $teacher_account->last_name ; 			
		}
		
		?>
		
			<div class="course-box">
				 
				<div class="col-sm-9 course-inner">
				<div class="course-title">
				عنوان  : <span style="color:#656565;padding-left:30px"  ><?php the_title() ?></span> 
				تاریخ افزودن  : <span style="color:#656565"  ><?php the_date('Y-m-d') ?></span> 
				<?php echo ($teacher_id > 0 ? 'مربی  : <span style="color:#656565"  >'.$teacher.'</span> ':'' ) ?>
				
				</div>
				<p>
					<?php 
					//***** echo the abstract of product ****
					echo  $the_query->post->post_excerpt ;
					 
					//***** echo the first paragraph of post content****
					// $str = wpautop( get_the_content() );
					// $str = substr( $str, 0, strpos( $str, '</p>' ) + 4 );
					// $str = strip_tags($str, '<a><strong><em>');
					// echo $str ;
					
					?>
				</p>	
					 <?php

						foreach ($childs as $child) 
						{
							 echo '<a href="?dir=list&p=viewOrder&pid='.$the_query->post->ID.'&for='.$child->ID
									.'" class="btn btn-success pull-left" style="margin-left: 10px;">خرید این دوره برای '.
									$child->first_name . ' ' .  $child->last_name . '</a>';
						} 
					?>
				</div>
				<div class="col-sm-3 author">
					<?php $image = wp_get_attachment_image_src( get_post_thumbnail_id( $the_query->post->ID ), 'single-post-thumbnail' );?>

					<img class="img-thumbnail" style="max-height: 100px" src="<?php  echo $image[0]; ?>" data-id="<?php echo $the_query->post->ID; ?>"/>
					<div >

					<div>قیمت : 
						<?php 
						$_product = wc_get_product(  $the_query->post->ID );					
						echo number_format(intval( $_product->get_price())) ; 					
						?>
					ریال </div>
					
					</div>
					
				</div>
			
			</div>
		 
	<?php 	

			endwhile;
		
		else :
			echo ( '<div class="message-frame">
				<div class="col-sm-9 message-box">
				<h1><span class="title">دوره ای یافت نشد . </span></h1>
				</div></div>' );
		endif;
	}
	else 
	{
		echo ( '<div class="message-frame">
			<div class="col-sm-9 message-box">
			<h1><span class="title">شما فرزندی اضافه نکرده اید . برای اضافه کردن فرزند باید کد ملی خود را در پنل کاربری فرزندان در قسمت والدین وارد کنید . </span></h1>
			</div></div>' );
	}		
	?>
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



    </div>
</div>