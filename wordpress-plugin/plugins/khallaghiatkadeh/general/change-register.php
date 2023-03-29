<?php 
		
	
	//1. Add a new form element...  
	add_action( 'register_form', 'myplugin_register_form' );
	function myplugin_register_form() 
	{

		$pass = ( ! empty( $_POST['pass'] ) ) ? trim( $_POST['pass'] ) : '';
        

        $url =  basename($_SERVER['REQUEST_URI'], '?' . $_SERVER['QUERY_STRING']);

        if ( $url == 'wp-login.php' )
        {
            ?>
			</form>
            <script>
                $( document ).ready(function() {
                   $('#user_login').parent().parent().parent().remove();
                   //$('#user_email').parent().remove();
                   //$('#user_email').parent().remove();
                   $('#wp-submit').parent().parent().remove();
                });
            </script>
            <style>
                #login{
                    width: 500px;
                }

                .login form .input, .login input[type=text] {
                    font-size: 14px;
                    margin: 2px 0 7px 5px;
                }

                .btn-register:hover
                {
                    color: black;
                }
                .row{
                    margin: 0;
                }
                .nav-tabs>li {
                    float: right;
                }
                .form-group {
                    margin-bottom: 7px;
                }
                .combo-box {
                    width: 100%;
                    height: 34px;
                    border-radius: 5px;
                    border: 1px solid #ccc;
                }

                .tab-content>.active {
                    padding-top: 10px;
                }

            </style>

            <ul class="nav nav-tabs">
                <li class="active"><a data-toggle="tab" href="#student">ثبت نام نوآموز</a></li>
                <li><a data-toggle="tab" href="#parent">ثبت نام والدین</a></li>
                <li><a data-toggle="tab" href="#teacher">ثبت نام مربی</a></li>
            </ul>
			
			<script>
			function validateStudentForm(scope) {
				 
				var re = /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
				
				var result = '' ;
				
				if($('#'+scope+'Name').val() == '' || $('#'+scope+'Family').val() == ''){
					
					result += "نام و نام خانوادگی باید وارد شوند \n"; 
					
				}
				
				if($('#'+scope+'_user_login').val() == '' || (!re.test($('#'+scope+'_user_login').val()))  ){
					
					$('#'+scope+'_user_login').val('fake.'  + (Math.floor((Math.random() * 10000) + 1)).toString() + '@gmail.com' );
				}
				
				if($('#'+scope+'MelliCode').val() == '' || ( parseInt($('#'+scope+'MelliCode').val()) < 100000000 )  ){
					
					 result += " کد ملی باید وارد شود \n"; 
				}
				if($('#'+scope+'Pass').val() == '' || ( lenght($('#'+scope+'Pass').val()) < 5 )  ){
					
					 result += " رمز عبور باید وارد شود و حداقل 5 حرف باشد. \n"; 
				}
				
				if($('#'+scope+'Pass').val() != $('#'+scope+'ConfirmPass').val()  ){
					
					 result += " رمز عبور و تکرار رمز باید همسان باشند . \n"; 
				}
				
				if(result == '' )
				{
					return true ;
				}
				else
				{
					alert(result);
					return false ; 
				}
			}
			</script>
			
            <div class="tab-content">
                <div id="student" class="tab-pane fade in active">
					<form name="registerStudentform"  onsubmit="return validateStudentForm('student')" id="loginform" action="<?php echo wp_registration_url(); ?>" method="post">
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
								<div class="col-md-6" style="padding-left:0" >
									<input placeholder="آدرس پست الکترونیک"  onchange="replaceUserName('s_email','student_user_login')" type = "text" class="form-control" name="user_email" id="s_email" />
								</div>
								<div class="col-md-6" style="padding-right:2px">
									<input type="text" name="melli" class="form-control" id="studentMelliCode" placeholder="کد ملی">
								</div>
							</div>
						</div>
						<div class="form-group">
							<div class="row">
								<div class="col-md-6" style="padding-left:0">
									<select name="state" id="state1" class="combo-box" onchange="getCity(1)">
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
									<select name="city" id="city1" class="combo-box">
										<option value="1">شهر</option>
									</select>
								</div>
							</div>
						</div>
						<div class="form-group">
							<div class="row">
								<div class="col-md-6" style="padding-left:0">
									<input type="text" name="mobile" class="form-control" id="mobile" placeholder="تلفن منزل">
								</div>
								<div class="col-md-6" style="padding-right: 2px;">
									<input type="text" name="phone" class="form-control" id="phone" placeholder="تلفن همراه ">
								</div>
							</div>
						</div>
						<div class="form-group">
							<div class="row">
								<div class="col-md-6" style="padding-left:0">
									<input type="password" name="studentPass" class="form-control" id="studentPass" placeholder="رمز عبور">
								</div>
								<div class="col-md-6" style="    padding-right: 2px;">
									<input type="password" name="studentConfirmPass" class="form-control" id="studentConfirmPass"  placeholder="رمز عبور تکرار ">
								</div>
							</div>
						</div>
						<div class="form-group">
                        <small>اگرشما والدین نوآموز هستید این قسمت را تکمیل کنید</small>
                        <div class="row">
                            <div class="col-md-6" style="padding-left:0">
                                <input type="text" name="parent_melli" class="form-control" id="parent_melli" placeholder="کد ملی شما">
                            </div>
                            <div class="col-md-6" style="padding-right: 2px;">
                                <select name="parent_relation" class="combo-box">
                                    <option value="0">نسبت شما با نوآموز</option>
                                    <option value="1">پدر</option>
                                    <option value="1">مادر</option>
                                    <option value="1">خواهر</option>
                                    <option value="1">برادر</option>
                                    <option value="1">سایر بستگان</option>
                                </select>
                            </div>
                        </div>
						<button type="submit" class="btn btn-success" >ثبت نهایی اطلاعات</button>
						</div>
					</form>
                </div>
                <div id="parent" class="tab-pane fade">
					<form name="registerParentform"  onsubmit="return validateStudentForm('parent')" id="loginform" action="<?php echo wp_registration_url(); ?>" method="post">
						<input type="hidden" name="registerParent" value=1 />
						<input type="hidden" name="user_login" id="parent_user_login" value="" />	
						<div class="form-group">
							<div class="row">
								<div class="col-md-6" style="padding-left:0">
									<input type="text" name="name" class="form-control" id="parentName" placeholder="نام">
								</div>
								<div class="col-md-6" style="    padding-right: 2px;">
									<input type="text" name="family" class="form-control" id="parentFamily" placeholder="نام خانوادگی">
								</div>
							</div>
						</div>
						<div class="form-group">
							<div class="row">
								<div class="col-md-12" >
									<input type="text" name="melli" class="form-control" id="parentMelliCode" placeholder="کد ملی">
								</div>
							</div>
						</div>
						<div class="form-group">
							<div class="row">
								<div class="col-md-12"  >
									<input placeholder="آدرس پست الکترونیک"  onchange="replaceUserName('p_email','parent_user_login')" type = "text" class="form-control" name="user_email" id="p_email" />
								</div>
							</div>
						</div>
						<div class="form-group">
							<div class="row">
								<div class="col-md-6" style="padding-left:0">
									<select name="state" id="state2" class="combo-box" onchange="getCity(2)">
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
									<select name="city" id="city2" class="combo-box">
										<option value="1">شهر</option>
									</select>
								</div>
							</div>
						</div>
						<div class="form-group">
							<div class="row">
								<div class="col-md-6" style="padding-left:0">
									<input type="text" name="phone" class="form-control" id="phone" placeholder="تلفن منزل">
								</div>
								<div class="col-md-6" style="    padding-right: 2px;">
									<input type="text" name="mobile" class="form-control" id="mobile" placeholder="تلفن همراه ">
								</div>
							</div>
						</div>
						<div class="form-group">
							<div class="row">
								<div class="col-md-6" style="padding-left:0">
									<input type="password" name="parentPass" class="form-control" id="parentPass" placeholder="رمز عبور">
								</div>
								<div class="col-md-6" style="padding-right: 2px;">
									<input type="password" name="parentConfirmPass" class="form-control" id="parentConfirmPass" placeholder="رمز عبور تکرار ">
								</div>
							</div>
						</div>
						<button type="submit" class="btn btn-success" >ثبت نهایی اطلاعات</button>
					</form>
                </div>
                <div id="teacher" class="tab-pane fade">
					<form name="registerTeacherform"  onsubmit="return validateStudentForm('teacher')" id="loginform" action="<?php echo wp_registration_url(); ?>" method="post">
						<input type="hidden" name="registerTeacher" value=1 />	
						<input type="hidden" name="user_login" id="teacher_user_login" value="" />	
						<div class="form-group">
							<div class="row">
								<div class="col-md-6" style="padding-left:0">
									<input type="text" name="name" class="form-control" id="teacherName" placeholder="نام">
								</div>
								<div class="col-md-6" style="    padding-right: 2px;">
									<input type="text" name="family" class="form-control" id="teacherFamily" placeholder="نام خانوادگی">
								</div>
							</div>
						</div>
						<div class="form-group">
							<div class="row">
								<div class="col-md-12" style="padding-left:0">
									<input type="text" name="melli" class="form-control" id="teacherMelliCode" placeholder="کد ملی">
								</div>
							</div>
						</div>						
						<div class="form-group">
							<div class="row">
								<div class="col-md-12"  >
									<input placeholder="آدرس پست الکترونیک" onchange="replaceUserName('t_email','teacher_user_login')" type = "text" class="form-control" name="user_email" id="t_email" />
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
<script>
	function getCity(id)
	{		 
		var ostan = $('#state'+id).val();
		$('#city'+id).load("<?php echo site_url(); ?>/city/?id="+ostan);
		$('#city'+id).html('<option value=0>در حال بارگذاری</option>');
		
	}
</script>
								</div>
								<div class="col-md-6" style="padding-right:2px;">
									<select name="city" id="city3" class="combo-box">
										<option value="1">شهر</option>
									</select>
								</div>
							</div>
						</div>
						<div class="form-group">
							<div class="row">
								<div class="col-md-6" style="padding-left:0">
									<input type="text" name="phone" class="form-control" id="phone"  placeholder="تلفن منزل">
								</div>
								<div class="col-md-6" style="padding-right: 2px;">
									<input type="text" name="mobile" class="form-control" id="mobile" placeholder="تلفن همراه ">
								</div>
							</div>
						</div>
						<div class="form-group">
							<div class="row">
								<div class="col-md-6" style="padding-left:0">
									<input type="password" name="teacherPass" class="form-control" id="teacherPass" placeholder="رمز عبور">
								</div>
								<div class="col-md-6" style="    padding-right: 2px;">
									<input type="password" name="teacherConfirmPass" class="form-control" id="teacherConfirmPass" placeholder="رمز عبور تکرار ">
								</div>
							</div>
						</div>
						<button type="submit" class="btn btn-success" >ثبت نهایی اطلاعات</button>
					</form>
                </div>
            </div>

            <script src="<?php echo get_template_directory_uri(); ?>/js/persian-date.js"></script>
            <script src="<?php echo get_template_directory_uri(); ?>/js/persian-datepicker-0.4.5.min.js"></script>

            <?php wp_footer(); ?>
			<script>
				function replaceUserName(id, tag)
				{
					$('#'+tag).val($('#'+id).val());
				}
			</script>
            <script type="text/javascript">
                $(document).ready(function() {
                    $("#birthdate").pDatepicker({
                        altFormat: "YYYY MM DD",
                        format: 'YYYY/MM/DD',
                        autoClose:true
                    });

                });

            </script>
			<form>	
            <?php
        }

    }

    //2. Add validation. In this case, we make sure pass is required.
    add_filter( 'registration_errors', 'myplugin_registration_errors', 10, 3 );
    function myplugin_registration_errors( $errors, $sanitized_user_login, $user_email )
    {
		 
		if (intval($_POST['melli']) < 1000000 ) 
		{
			$errors->add( 'melli_empty_error','کد ملی وارد شده صحیح نمی باشد ');
		}
		if (username_exists($_POST['melli'])  ) 
		{
			$errors->add( 'melli_empty_error','کد ملی وارد شده قبلآ در سایت ثبت نام کرده است . در صورت فراموشی رمز عبور خود از گزینه "رمزتان را گم کرده اید؟" استفاده کنید  .   ');
		}
		if (!filter_var($_POST['user_email'], FILTER_VALIDATE_EMAIL)  ) 
		{
			$_POST['user_email'] = 'feak.'.rand(1,1000000) . '@gmail.com';
			//$errors->add( 'email_empty_error','آدرس ایمیل وارد شده صحیح نمی باشد ');
			//|| email_exists($_POST['user_email'])
		}
        if ( empty( $_POST['pass'] ) || ! empty( $_POST['pass'] ) && trim( $_POST['pass'] ) == '' )
        {
            $errors->add( 'pass_empty_error',  '<strong>خطا </strong>: وارد کردن رمز عبور الزامی است .'  );
        }
        elseif ( empty( $_POST['confirm_pass'] ) || ! empty( $_POST['confirm_pass'] ) && trim( $_POST['confirm_pass'] ) == '' )
        {
            $errors->add( 'confirtm_pass_empty_error',  '<strong>خطا </strong>: وارد کردن تکرار رمز عبور الزامی است .'  );
        }
		elseif (   $_POST['pass'] !=    $_POST['confirm_pass']  )
        {
            $errors->add( 'confirtm_pass_empty_error',  '<strong>خطا </strong>:   رمز عبور و تکرار رمز همخوان نیستند  .'  );
        }
		
        return $errors;
    }

    //3. Finally, save our extra registration user meta.
    add_action( 'user_register', 'myplugin_user_register' );
    function myplugin_user_register( $user_id )
    {
        if ( ! empty( $_POST['pass'] ) )
        {
			$user = new WP_User($user_id);
			
			wp_set_password(  $_POST['pass']  ,$user_id) ;
			
			if(isset($_POST['registerStudent']))
			{
				add_user_meta( $user_id, 'parent_melli'		,'',true); 
				add_user_meta( $user_id, 'parent_relation'	,'',true); 
				add_user_meta( $user_id, 'birthdate'		,'',true); 
				
				update_user_meta( $user_id, 'parent_melli'		,sanitize_text_field( $_POST['parent_melli']  )); 
				update_user_meta( $user_id, 'parent_relation'	,sanitize_text_field( $_POST['parent_relation']  )); 
				update_user_meta( $user_id, 'birthdate'			,sanitize_text_field( $_POST['birthdate'])); 
								
				
				$user->set_role('user') ; 
				
			}
			elseif(isset($_POST['registerParent']))
			{
				$user->set_role('parent') ; 
			}
			else 
			{ 
				$user->set_role('teacher') ; 
			}
			
			add_user_meta( $user_id, 'phone'			,'',true);
			add_user_meta( $user_id, 'mobile'			,'',true); 
			add_user_meta( $user_id, 'melli'			,'',true); 
			add_user_meta( $user_id, 'mail'				,'',true); 
			add_user_meta( $user_id, 'state'			,'',true); 
			add_user_meta( $user_id, 'city'				,'',true); 			
			
			update_user_meta( $user_id, 'phone'				,sanitize_text_field( $_POST['phone'] )); 
			update_user_meta( $user_id, 'mobile'			,sanitize_text_field( $_POST['mobile']  )); 
			update_user_meta( $user_id, 'melli'				,sanitize_text_field( $_POST['melli']  )); 
			update_user_meta( $user_id, 'mail'				,sanitize_text_field( $_POST['user_email']  )); 
			update_user_meta( $user_id, 'state'				,sanitize_text_field( $_POST['state']  )); 
			update_user_meta( $user_id, 'city'				,sanitize_text_field( $_POST['city']  )); 
			update_user_meta( $user_id, 'first_name'		,sanitize_text_field( $_POST['name']  )); 
			update_user_meta( $user_id, 'last_name'			,sanitize_text_field( $_POST['family']  )); 
		
			//user_login
			wp_update_user( array( 'ID' => $user_id, 'user_login' => sanitize_text_field( $_POST['melli']  )) );
        }
    }
	
	
	 
	add_filter('wp_mail', 'change_activation_emails');

	function change_activation_emails($data) 
	{
		 if ( strstr($data['message'], '?action=rp') ) 
		 {		
			 
			// $url =str_replace('http', '' , strtolower( get_site_url()) ) ; 
			// $url =str_replace('://', '' , $url  ) ; 
			// $url ='info@'. $url  ; 
			
			// $msg = str_split("\n", $data['message']);
			
			// $message  =  "با سلام و احترام \r\n\r\n";
			// $message .= sprintf(__("ثبت نام شما با موفقیت انجام شد. اکنون می توانید با اطلاعات زیر از این لینک وارد سایت شوید:"), get_option('blogname')) . "\r\n\r\n"; 
			
			// $message .= $msg[0] . "\r\n";
			// $message .=   "رمز عبور: \r\n رمز انتخابی شما  \r\n\r\n";
			// $message .= wp_login_url() . "\r\n\n";
			// $message .= sprintf("\r\n\r\n اگر مشکلی در ثبت نام داشتید با ما تماس بگیرید : %s.", $url) . "\r\n\r\n";
		   

			// $data['message'] = $message; 
			// $data['subject'] = sprintf( '[%s] اطلاعات ورود شما به وب سایت ' , get_option('blogname')) ; 
			unset($data);
			$data=array();
		}
		
		return $data;
	}