<?php
/*!
 * Template Name: Khalaghiatkadeh
 * Theme URI: http://Khalaghiatkadeh.com
 * Author: nasser niazy mobasser
 * Author URI: http://niazy.ir/
 * Design: Nov 11, 2016 
 * Copyright: abrezendegi.ir all right reserved.
 */

?><!DOCTYPE html> 
<html  lang="fa">
<head>
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
     
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1"> 
	
	<meta name="Keywords" content="روشا,خلاقیت ,دانشگاه شریف,شتابدهنده روشا,شریف,خلاقیت کده شریف">
    <meta name="Description" content="شتابدهنده روشا">
    <meta name="Abstract" content="شتابدهنده روشا">
    <meta name="author" content="تمام حقوق متعلق به شتابدهنده روشا است .">	
	
	 <title>وب سایت شتابدهنده روشا</title> 
    
	<meta property="og:site_name" content="شتابدهنده روشا"/>
	<meta property="og:title" content="وبسایت شتابدهنده روشا"/>
	<meta property="og:type" content="website"/>
	<meta property="og:url" content="http://khalaghiatkadeh.com"/>
	<meta name="twitter:card" content="summary"/>
	<meta name="twitter:description" content="آموزش خلاقیت به نوجوانان توسط اساتید شریف"/>
	<meta name="twitter:dnt" content="on"/>
	<meta name="twitter:title" content="وبسایت شتابدهنده روشا"/>
	<meta name="application-name" content="وبسایت شتابدهنده روشا"/>
	
	 
	<link rel="apple-touch-icon" sizes="57x57" href="<?php echo get_template_directory_uri(); ?>/images/icons/apple-icon-57x57.png">
	<link rel="apple-touch-icon" sizes="60x60" href="<?php echo get_template_directory_uri(); ?>/images/icons/apple-icon-60x60.png">
	<link rel="apple-touch-icon" sizes="72x72" href="<?php echo get_template_directory_uri(); ?>/images/icons/apple-icon-72x72.png">
	<link rel="apple-touch-icon" sizes="76x76" href="<?php echo get_template_directory_uri(); ?>/images/icons/apple-icon-76x76.png">
	<link rel="apple-touch-icon" sizes="114x114" href="<?php echo get_template_directory_uri(); ?>/images/icons/apple-icon-114x114.png">
	<link rel="apple-touch-icon" sizes="120x120" href="<?php echo get_template_directory_uri(); ?>/images/icons/apple-icon-120x120.png">
	<link rel="apple-touch-icon" sizes="144x144" href="<?php echo get_template_directory_uri(); ?>/images/icons/apple-icon-144x144.png">
	<link rel="apple-touch-icon" sizes="152x152" href="<?php echo get_template_directory_uri(); ?>/images/icons/apple-icon-152x152.png">
	<link rel="apple-touch-icon" sizes="180x180" href="<?php echo get_template_directory_uri(); ?>/images/icons/apple-icon-180x180.png">
	<link rel="icon" type="image/png" sizes="192x192"  href="<?php echo get_template_directory_uri(); ?>/images/icons/android-icon-192x192.png">
	<link rel="icon" type="image/png" sizes="32x32" href="<?php echo get_template_directory_uri(); ?>/images/icons/favicon-32x32.png">
	<link rel="icon" type="image/png" sizes="96x96" href="<?php echo get_template_directory_uri(); ?>/images/icons/favicon-96x96.png">
	<link rel="icon" type="image/png" sizes="16x16" href="<?php echo get_template_directory_uri(); ?>/images/icons/favicon-16x16.png">
	<link rel="manifest" href="<?php echo get_template_directory_uri(); ?>/images/icons/manifest.json">
	<meta name="msapplication-TileColor" content="#01b5b7">
	<meta name="msapplication-TileImage" content="<?php echo get_template_directory_uri(); ?>/images/icons/ms-icon-144x144.png">
	<meta name="theme-color" content="#01b5b7"> 
	 
	 
	 
	<!-- Bootstrap -->

	<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/bootstrap-rtl.min.css" >

	<!-- Custom Fonts -->
    <link rel='stylesheet' href='<?php echo get_template_directory_uri(); ?>/css/font.css'  type='text/css'> 
 
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/style.css" type="text/css">
    
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/carousel.css" type="text/css"> 
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/carousel2.css" type="text/css"> 
	<!-- Custom CSS -->
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/animate.min.css" type="text/css">
	
	<script src="<?php echo get_template_directory_uri(); ?>/js/jquery-2.1.1.min.js"></script>

    	
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
	 
	<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/persian-datepicker-0.4.5.min.css"/>	
	<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/progress.css"/>	
	<link rel="sitemap" type="application/xml" title="Sitemap" href="/sitemap.xml" />
</head>

<?php  do_action( 'yit_header' ) ?>

<body id="page-top"> 

<!---header area---->
	<section class="sec-nav-head" >	
		<div class="span12"> 
			<div class="colorize"></div>
			<div class="menubar">
				<!---top logo-->
				<div class="brand pull-right">
					<div class="brand-container"> 
						<a href="<?php echo site_url(); ?>">
							<img src="<?php echo get_template_directory_uri(); ?>/images/topLogo.jpg" id="logo" >	
						</a>
						<img src="<?php echo get_template_directory_uri(); ?>/images/site_title.jpg" id="siteTitle" >						
					</div>
				</div>			
			
				<!---top menu-->
				
				<nav id="mainNav" class="navbar navbar-default">
					<div class="container-fluid"> 
						<div class="navbar-header">
							<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-collapse-1">
								<span class="sr-only">منو</span>
								<span class="icon-bar"></span> 
								<span class="icon-bar"></span> 
								<span class="icon-bar"></span> 
							</button>
							<span id="toggler">منوی بازشو</span>
						</div> 
						<div class="collapse navbar-collapse" id="navbar-collapse-1">  
							<ul class="nav navbar-nav navbar-right" >
								<li>
									<h1><a alt="صفحه اصلی" class="page-scroll" href="<?php echo site_url(); ?>">خانه</a></h1>
								</li>
								<li >
									<h1>
										<a  href="<?php echo site_url(); ?>#sec-course" class="page-scroll"  >									
											دوره ها 										
										</a>
									</h1>
								</li>
								<li>
									<h1><a alt="نمایندگی ها" class="page-scroll" href="<?php echo site_url(); ?>/agency">نمایندگی ها</a></h1>
								</li> 
								<li>					
									<h1><a alt="درباره روشا" class="page-scroll" href="<?php echo site_url(); ?>/about">درباره ما</a></h1>
								</li>						
								 <li>
									<h1><a alt="تماس با روشا" class="page-scroll" href="<?php echo site_url(); ?>/contact-us">تماس با ما</a></h1>
								</li>					
								 <li style="display:none">
									<h1><a class="page-scroll" target="_blank" style="color:red" href="<?php echo site_url(); ?>/rosha">آزمون روشا</a></h1>
								</li>	
								
								 <li>
									<h1><a alt="فروشگاه روشا" class="page-scroll"   href="<?php echo site_url(); ?>/shop">فروشگاه</a></h1>
								</li>
							</ul>
						</div>
						
					</div> 
					
				</nav>
			<?php 
			if (is_user_logged_in())
			{
				?>
				<div class="span3 pull-left login">
					<a href="<?php echo get_search_link(); ?>">
						<img src="<?php echo get_template_directory_uri(); ?>/images/search.jpg"  >	
					</a>
					<a  href="<?php echo site_url(); ?>/student-profile/?dir=edit&p=index"  class="btn btn-primary" >
							پنل کاربری
					</a>
					
					<div style="height:20px;width:40px;float: left;"></div>
					
					
				</div>
				<?php
			}
			else 
			{
				
			?>
				<div class="span3 pull-left login">
					<a href="<?php echo get_search_link(); ?>">
						<img src="<?php echo get_template_directory_uri(); ?>/images/search.jpg"  >	
					</a>
					<a href="javascript:void(0)"  data-toggle="modal" data-target="#registerModal" >
						<img src="<?php echo get_template_directory_uri(); ?>/images/register.jpg"  >	
					</a>
					<a href="javascript:void(0)"  data-toggle="modal" data-target="#loginModal" >
						<img src="<?php echo get_template_directory_uri(); ?>/images/login.jpg"  >	
					</a>
					<div style="height:20px;width:40px;float: left;"></div>
					
				</div>
			<?php 
			}
			?>
			 </div>
		</div>
	</section> 
	
	
	<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/menu.css" type="text/css">
	
	
	
	<script src="<?php echo get_template_directory_uri(); ?>/js/menu.js"></script>  
	<!-- Side menu -->	
	<div id="wrapper">
		<div class="overlay"></div>
		
        <nav class="navbar navbar-inverse navbar-fixed-top" id="sidebar-wrapper" role="navigation">
            <ul class="nav sidebar-nav">
                <li class="sidebar-brand">
                    <a href="#">
                       شتابدهنده روشا
                    </a>
					<div id="page-content-wrapper">
						<button type="button" class="hamburger is-closed" data-toggle="offcanvas">
							<span class="hamb-top"></span>
							<span class="hamb-middle"></span>
							<span class="hamb-bottom"></span>
						</button>
				   </div>
                </li>
                <li>
                    <a href="<?php echo site_url(); ?>">خانه</a>
                </li>
				<?php 
				if (!is_user_logged_in()) 
				{	
				?>
                <li>
                    <a href="javascript:void(0)"  data-toggle="modal" data-target="#loginModal">ورود</a>
                </li>
                <li>
                    <a href="javascript:void(0)"  data-toggle="modal" data-target="#registerModal">ثبت نام</a>
                </li>
				<?php 
				} 
				else
				{
				?>
                <li>
                    <a href="<?php echo wp_logout_url(); ?>">خروج از پنل کاربری</a>
                </li>
				<?php 
				} 
				?>
                <li>
                    <a href="<?php echo site_url(); ?>/blog">وبلاگ</a>
                </li>
                <li>
                    <a href="<?php echo site_url(); ?>/news/">اخبار و اطلاعیه ها</a>
                </li>
                <li>
                    <a href="<?php echo site_url(); ?>/faq">سوالات متداول</a>
                </li>
                <li >
                  <a href="<?php echo site_url(); ?>/colleague" >همکاران استراتژیک </a>
                </li>
                <li>
                    <a href="<?php echo site_url(); ?>/role">قوانین و مقررات</a>
                </li>
                <li>
                    <a href="<?php echo site_url(); ?>/contact-us">ارتباط با ما</a>
                </li>
            </ul>
        </nav>
		
		

	</div>	
 <script src="<?php echo get_template_directory_uri(); ?>/js/pace.min.js"></script>  
		<script>
			paceOptions = {
				  ajax: true, // disabled
				  document: false, // disabled
				  eventLag: false, // disabled
				  elements: {
					selectors: ['.modal-dialog']
				  }
				}
				
			var studentMelliExist = -1 ; 
			var studentMelliValue = ''; 
			
			var parentMelliExist = -1 ; 
			var parentMelliValue = '' ; 
			
			var teacherMelliExist = -1 ; 
			var teacherMelliValue = '' ; 
			
			var loginUrl = "<?php 
									if ( WC()->cart->get_cart_contents_count() == 0 ) 
									{
										echo site_url().'/student-profile/'; 
									}
									else 
									{
										echo site_url().'/checkout/'; 
									}	
										?>"; 
			var registerUrl = "<?php 
							  
									if ( WC()->cart->get_cart_contents_count() == 0 ) 
									{
										echo site_url().'/student-profile/'; 
									}
									else 
									{
										echo site_url().'/checkout/'; 
									}								
										
										?>"; 
			
			$(document).ready(function(){
				$('#inputPassword1').keypress(function(e) {
					if(e.which == 13) {
						validateLoginForm();
					}
				});
			});
			
			function showLogin(id){
				//show Forget pass
				if(id==1){
					$('#loginContent').hide('slow'); 
					$('#forgetPassContent').show('slow'); 					
				}
				else{ 
					$('#loginContent').show('slow'); 
					$('#forgetPassContent').hide('slow'); 	
				}
			}
			
			
			
			function validateLoginForm() {
				
				var result =''; 
				
				if( $('#inputEmail1').val() == '' || (  $('#inputEmail1').val().length < 5 )  )
				{
					result += "  نام کاربری باید وارد شود \n"; 
				}
				if($('#inputPassword1').val() == '' || ( ($('#inputPassword1').val()).length < 5 )  )
				{					
					 result += " رمز عبور باید وارد شود و حداقل 5 حرف باشد. \n"; 
				}
				if(result != '')
				{
					alert(result);
					return;
				}
				Pace.track(function(){
					 $.ajax({
					   type: "POST",
					   url: "<?php echo site_url(); ?>/wp-admin/admin-ajax.php?action=ajax_login",
					   data: $('#loginform').serialize(), // serializes the form's elements.
					   success: function(data)
					   {						  
						   if(data==1 )
						   {
							  document.location = loginUrl; 
						   }
						   else 
						   {
							   alert(data);
							   //alert('خطایی در ورود رخ داده است . لطفآ سایت را دوباره بارگذاری کنید و چند دقیقه بعد دوباره تلاش کنید . ');
							   console.log(data);
						   }
					   }
					 });
				});
			}		
			
			function checkUsernameExist(scope) {
				var  username = $('#'+scope + 'MelliCode').val();
				//uncorrect value
				if(username == '' || username.length < 9  )
				{
					return false;
				}
				
				//donot call again server
				if(scope == 'student' && studentMelliValue == username )
					return ; 
				else if(scope == 'parent' && parentMelliValue == username )
					return;
				else if(scope == 'teacher' && teacherMelliValue == username )
					return; 
				
				
				// call server
				$.ajax({
					  method: "GET",
					  url: 	"<?php echo site_url(); ?>/city/?username="+username
					}).done(function( response  ) {  
						  if(scope == 'student')
						  {
							  studentMelliExist = response; 
							  studentMelliValue = username;
						  }
						  else if (scope == 'parent')
						  {
							  parentMelliExist = response; 
							  parentMelliValue = username;
						  }
						  else 
						  {
							  teacherMelliExist = response; 
							  teacherMelliValue =username ; 
						  }
						   
						}).fail(function() {
								alert( "error" );
				});
			}
			
			function submiting(scope) {
				
				Pace.track(function(){
					
					 if(scope == 'agency'){
						$('#agencyMelli').val($('#agencyMelliCode').val());
					 }
					 
					 $.ajax({
					   type: "POST",
					   url: "<?php echo site_url(); ?>/wp-admin/admin-ajax.php?action=ajax_register&scope="+scope,
					   data: $('#'+scope+'Registerform').serialize(), // serializes the form's elements.
					   success: function(data)
					   {
							var redirect = $('#'+scope+ 'Login').val(); 
						   if(data==1 && !redirect )
						   {
							  document.location = registerUrl ; 
						   }
						   else if(data==1 && redirect == "2")
						   {
							   alert('فرزند با موفقیت اضافه شد . برای دیدن آن این صفحه را دوباره بارگذاری کنید . ');
							   $('#'+scope+'RegisterModal').modal("hide"); 
						   }
						   else 
						   {
							   //alert('خطایی در ثبت نام رخ داده است . لطفآ سایت را دوباره بارگذاری کنید و چند دقیقه بعد دوباره تلاش کنید . ');
							   if(data > 0   && scope == 'agency') {
							   
							      $("#agencyReqId").val(data);
							      alert("اطلاعات شما با موفقیت ثبت گردید \n همکاران ما اطلاعات شما را بررسی نموده و در صورت احراز سرایط نمایندگی با شما تماس خواهند گرفت . \n برای تکمیل ثبت نام خود اسکن مدارک خود را نیز ارسال کنید . ") ;
							      
							   }
							   else{
							      alert(data);
							   }
		      
							   if(scope == 'agency')
							   {
								   $('#agencyMelli').val($('#agencyMelliCode').val());
								   //$('#agencyRegisterModal').modal("hide"); 
								   accept_condition(3);
							   }
							   console.log(data);
						   }
					   }
					 });
				});
			}	
			
			function validateRegisterForm(scope) {
				 
				var re = /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
				
				var result = '' ;
				
				if($('#'+scope+'Name').val() == '' || $('#'+scope+'Family').val() == '')
				{
					result += "نام و نام خانوادگی باید وارد شوند \n"; 					
				}
				
				if($('#'+scope+'_user_login').val() == '' || (!re.test($('#'+scope+'_user_login').val()))  )
				{	
					$('#'+scope+'_user_login').val('fake.'  + (Math.floor((Math.random() * 10000) + 1)).toString() + '@gmail.com' );
					
				}
				
				if($('#'+scope+'MelliCode').val() == '' || ( parseInt($('#'+scope+'MelliCode').val()) < 100000 )  )
				{	
					result += " کد ملی باید وارد شود \n"; 
				}
				if($('#'+scope+'Pass').val() == '' || ( ($('#'+scope+'Pass').val()).length < 5 )  )
				{					
					 result += " رمز عبور باید وارد شود و حداقل 5 حرف باشد. \n"; 
				}
				
				if($('#'+scope+'Pass').val() != $('#'+scope+'ConfirmPass').val()  ){
					
					 result += " رمز عبور و تکرار رمز باید همسان باشند . \n"; 
				}
				
				if(scope== 'teacher' && $('#agreement').prop('checked') == false  ){
					
					 result += " قوانین ثبت نام را باید مطالعه کنید و بپذیرید . \n"; 
				}
				
				username = $('#'+scope+'MelliCode').val(); 
				
				if(result == '' )
				{
					if(scope == 'student'  )
					{
						if((studentMelliExist == -1)||(studentMelliValue != username))
						{
							$.ajax({
							  method: "GET",
							  url: 	"<?php echo site_url(); ?>/city/?username="+username
							}).done(function( response  ) { 								   
									studentMelliExist = response; 
									if (studentMelliExist == 1) 
									{
										alert('کد ملی قبلآ در سایت ثبت نام شده است . اگر رمز عبور خود را فراموش کرده اید از بخش فراموشی رمز استفاده کنید . ');
									}
									else 
									{
										submiting(scope);
									}
								   
								}).fail(function(){
									submiting(scope);
								});
							
						}
						else if (studentMelliExist == 1) 
						{
							alert('کد ملی قبلآ در سایت ثبت نام شده است . اگر رمز عبور خود را فراموش کرده اید از بخش فراموشی رمز استفاده کنید . ');
						}
						else 
						{
							submiting(scope);
						}
					}
					else if (scope == 'parent' )
					{
						if((parentMelliExist == -1)||(parentMelliValue != username))
						{
							$.ajax({
								  method: "GET",
								  url: 	"<?php echo site_url(); ?>/city/?username="+username
								}).done(function( response  ) { 
								
									parentMelliExist = response; 
									if (parentMelliExist == 1) 
									{
										alert('کد ملی قبلآ در سایت ثبت نام شده است . اگر رمز عبور خود را فراموش کرده اید از بخش فراموشی رمز استفاده کنید . ');
									}
									else 
									{
										submiting(scope);
									} 
								}).fail(function(){
									submiting(scope);
								});
							
						}
						else if (parentMelliExist == 1) 
						{
							alert('کد ملی قبلآ در سایت ثبت نام شده است . اگر رمز عبور خود را فراموش کرده اید از بخش فراموشی رمز استفاده کنید . ');
						}
						else 
						{
							submiting(scope);
						}
					}
					else if (scope == 'teacher' )
					{
						if(teacherMelliExist == -1)
						{
							$.ajax({
								  method: "GET",
								  url: 	"<?php echo site_url(); ?>/city/?username="+username
								}).done(function( response  ) { 
								   
									teacherMelliExist = response; 
									if ((teacherMelliExist == 1) ||(teacherMelliValue != username))
									{
										alert('کد ملی قبلآ در سایت ثبت نام شده است . اگر رمز عبور خود را فراموش کرده اید از بخش فراموشی رمز استفاده کنید . ');
									}
									else 
									{
										submiting(scope);
									}
								   
								}).fail(function(){
									submiting(scope);
								});
							
						}
						else if (teacherMelliExist == 1) 
						{
							alert('کد ملی قبلآ در سایت ثبت نام شده است . اگر رمز عبور خود را فراموش کرده اید از بخش فراموشی رمز استفاده کنید . ');
						}
						else 
						{
							submiting(scope);
						} 
					}
					else 
					{  
						submiting(scope);
					}
					
					return true ;
				}
				else
				{
					alert(result);					
					return false ; 
				}
			}

			//http://127.0.0.1:8080/kh/city/?id=4
			function getCity(id){
				if(id ==1 )
					checkUsernameExist('student');
				else if(id == 2)
					checkUsernameExist('parent');
				else if(id == 3)
					checkUsernameExist('teacher');		
				
				
				var ostan = $('#state'+id).val();
				$('#city'+id).load("<?php echo site_url(); ?>/city/?id="+ostan);
				$('#city'+id).html('<option value=0>در حال بارگذاری</option>');
				
			}
		
			function replaceUserName(id, tag)
			{
				$('#'+tag).val($('#'+id).val());
			}
			
			function showTab(id) 
			{
				if(id== 'student')
				{
					$('.register-student').show();
					$('.register-teacher').hide(); 

					$('.tab-student').addClass('tab-hovered');
					$('.tab-teacher').removeClass('tab-hovered'); 

				}
				else 
				{
					$('.register-student').hide();
					$('.register-teacher').show();

					$('.tab-student').removeClass('tab-hovered');
					$('.tab-teacher').addClass('tab-hovered');
				}
			}
			
			function sendForgetMessage() 
			{
				var  username = $('#inputMelliForget').val();
				//uncorrect value
				if(username == '' || username.length < 9  )
				{
					return false;
				}
				
				// call server
				$.ajax({
					  method: "GET",
					  url: 	"<?php echo site_url(); ?>/city/?sendMessage="+username
					}).done(function( response  ) {  
						if (response == 1)
						{
							alert('رمز عبور جدید تا دقایقی دیگر برای شما پیامک خواهد شد . '+"\n"+'درصورتی که دریافت پیام های تبلیغاتی را مسدود کرده باشید  این پیام را دریافت نخواهید کرد و باید با شرکت تماس بگیرید . ');
						}
						else if(response == -2)
						{
							alert('تعداد بازیابی های مجاز در یک روز محدود می باشد .');
						}
						else 
						{
							alert('خطا در ارسال پیامک بازیابی . با پشتیبانی شرکت تماس بگیرید .');
						}
						showLogin(2);	
					});
			
			}
		</script>   
<?php 
if (!is_user_logged_in()) 
{	
?>
<!-- login modal -->
<div class="modal fade" id="loginModal" tabindex="-1" role="dialog" aria-labelledby="modalLabel" aria-hidden="true">
  <div class="modal-dialog">
	<div class="modal-content">
		<div class="modal-header">
			<button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">×</span><span class="sr-only">بستن</span></button>
			<h3 class="modal-title" id="lineModalLabel">ورود به شتابدهنده روشا</h3>
		</div>
		<div class="modal-body">
			<div id="loginContent">
				<!--login content -->
				<form name="loginform" id="loginform" method="post">
				
					<div class="form-group">
						<label for="password" class="cols-sm-2 control-label">نام کاربری یا کد ملی</label>
						<div class="cols-sm-10">
							<div class="input-group">
								<span class="input-group-addon">
									<i class="glyphicon  glyphicon-user glyphicon " aria-hidden="true"></i>
								</span>
								<input type="text" class="form-control" name="log" id="inputEmail1" placeholder="نام کاربری یا کد ملی">
							</div>
						</div>
					</div>               
				   <div class="form-group">
						<label for="password" class="cols-sm-2 control-label">رمز عبور</label>
						<div class="cols-sm-10">
							<div class="input-group">
								<span class="input-group-addon">
									<i class="glyphicon glyphicon-lock glyphicon-lg" aria-hidden="true"></i>
								</span>
								<input type="password"class="form-control" name="pwd" id="inputPassword1" placeholder="رمز عبور">
							</div>
						</div>
					</div>
				   
				  <button type="button" class="btn btn-register" onclick="validateLoginForm()" style="height: 55px;">ورود به روشا</button>
				  <div class="form-group">
						<a href="javascript:void(0)" onclick="showLogin(1)">فراموشی رمز </a> 
				  </div>
				</form>
			</div>	
			<div id="forgetPassContent" style="display:none">
				<form name="loginform" id="loginform" method="post">
					<div class="form-group">
					کد ملی خود را وارد کنید تا رمز عبور جدید به شماره تلفن همراه شما که در زمان ثبت نام وارد کردید پیامک شود.<br>
						
						<div class="cols-sm-10">
							<div class="input-group">
								<span class="input-group-addon">
									<i class="glyphicon  glyphicon-user glyphicon " aria-hidden="true"></i>
								</span>
								<input type="text" class="form-control" name="log" id="inputMelliForget" placeholder="کد ملی">
							</div>
						</div>
					</div>  
					<div class="form-group">
						 <button type="button" class="btn btn-register" onclick="sendForgetMessage()" style="height: 55px;width: 200px;border-radius: 30px;">ارسال رمز عبور بصورت پیامک</button>
						 <a class="btn btn-default" href="javascript:void(0)" onclick="showLogin(2)">برگشت به ورود به سایت </a> 
					</div>
				</form>
			</div>
		</div>		
	</div>
  </div>
</div>

	
	 

	 	
<!-- register modal -->
<div class="modal fade" id="registerModal" tabindex="-1" role="dialog" aria-labelledby="modalLabel" aria-hidden="true">
  <div class="modal-dialog">
	<div class="modal-content register">
		<div class="register-modal-container">
            <!---student contet--->
		
			<div class="register-student ">				
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">×</span><span class="sr-only">بستن</span></button>
					<h5 class="modal-title" id="lineModalLabel">ثبت نام کاربر  </h5>
					 
				</div>
				
				<div class="modal-body">

					<form name="registerStudentform" id="studentRegisterform"  method="post">
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
                                <select name="city"  id="city1" class="combo-box">
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
					   <button type="button" class="btn btn-register" onclick="validateRegisterForm('student')" >ثبت نهایی اطلاعات</button>
					   
					</form>

				</div>
			
			</div> 
			
			<!---teacher contet--->
			<div class="register-teacher">
				
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">×</span><span class="sr-only">بستن</span></button>
                    <h5 class="modal-title" id="lineModalLabel">ثبت نام مربی  </h5>
                </div>
                <div class="modal-body">
                    <form name="teacherRegisterform" id="teacherRegisterform"  method="post">
						<input type="hidden" name="user_login" id="teacher_user_login" value="" />
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
                        <button type="button" class="btn btn-register" onclick="validateRegisterForm('teacher')" >ثبت نهایی اطلاعات</button>
                    </form>

                </div>
			</div>
		
		</div>
		
		<div class="tabs">
			<a onclick="showTab('student')">
				<div class="tab-student tab-hovered" ></div>
			</a>
			<a  onclick="showTab('teacher')">
				<div class="tab-teacher" ></div>
			</a>
		</div>
	</div>
	
	
  </div>
</div>

<?php 
}
?>