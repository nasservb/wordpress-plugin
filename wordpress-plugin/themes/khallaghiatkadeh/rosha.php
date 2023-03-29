<?php
/*!
 * Template Name: صفحه ی روشا 
 * Theme URI: http://Khalaghiatkadeh.com
 * Author: nasser niazy mobasser
 * Author URI: http://niazy.ir/
 * Design: Nov 11, 2016 
 * Copyright: abrezendegi.ir all right reserved.
 */
 function GetIP() 
{
    foreach (array('HTTP_CLIENT_IP', 'HTTP_X_FORWARDED_FOR', 'HTTP_X_FORWARDED', 'HTTP_X_CLUSTER_CLIENT_IP', 'HTTP_FORWARDED_FOR', 'HTTP_FORWARDED', 'REMOTE_ADDR') as $key)
    {
        if (array_key_exists($key, $_SERVER) === true)
        {
            foreach (array_map('trim', explode(',', $_SERVER[$key])) as $ip)
            {
                if (filter_var($ip, FILTER_VALIDATE_IP, FILTER_FLAG_NO_PRIV_RANGE | FILTER_FLAG_NO_RES_RANGE) !== false)
                {
                    return $ip;
                }
            }
        }
    }
}
 	
?>


<!DOCTYPE html>
<html lang="en">

<head>
     
    <meta charset="utf-8">
     
    <meta name="Keywords" content="آزمون,استعدادیابی,روشا">
    <meta name="Description" content="آزمون استعدادیابی روشا">
    <meta name="Abstract" content="آزمون استعدادیابی روشا">
    <meta name="author" content="خلاقیتکده all right reserved">

    <title>آزمون استعدادیابی روشا</title>

   
	<meta property="og:site_name" content="خلاقیتکده شریف"/>
	<meta property="og:title" content="آزمون استعدادیابی روشا"/>
	<meta property="og:type" content="website"/>
	<meta property="og:url" content="<?=site_url() ?>"/>
	<meta name="twitter:card" content="summary"/>
	<meta name="twitter:description" content="آزمون استعدادیابی روشا."/>
	<meta name="twitter:dnt" content="on"/>
	<meta name="twitter:title" content="آزمون استعدادیابی روشا"/>
	<meta name="application-name" content="آزمون استعدادیابی روشا"/>
	<meta name="msapplication-TileColor" content="#6e329d"/>
	<meta name="msapplication-TileImage" content="images/icons/site-title-icon.png"/>
	 

	 
	<!-- Bootstrap Core CSS -->
    <!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/rosha/css/bootstrap.min.css" >

	
	<!-- Custom Fonts -->
    <link rel='stylesheet' href='<?php echo get_template_directory_uri(); ?>/rosha/css/font.css'  type='text/css'>
 
    <!-- Custom CSS -->
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/rosha/css/animate.min.css" type="text/css">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/rosha/css/style.css" type="text/css">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/rosha/css/carousel.css" type="text/css"> 
		
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body id="page-top"> 
 
	
<?php 

if(empty($_POST))
{
	
?>
	 <!---header area--->
<section class="sec-register " style="padding:0;background-color: #949494;">
<div style="background-repeat: no-repeat;width:100%;background-image:url('<?php echo get_template_directory_uri(); ?>/rosha/images/back.jpg');background-size:contain;    height: 550px;    background-position-x: 50%;">



<div style="top: 140px;right: 5%; position: relative;width: 313px;height: 440px;border-radius: 10px;;background-color: rgb(53, 221, 222);box-shadow: 0px 0px 18px rgb(159, 159, 159);z-index: 2; display:none">
	<form method="POST" name="registerForm" id="registerForm"><br>
	<div style="font-family: nassim;font-size:24px;font-weight:700;color: #d01a55;line-height:1;text-align:center;" class="text-content">همین امروز ثبت نام کنید </div><br>
		<div class="input-group">
			<input class="form-control" type="text" name="input_name" id="input_name" placeholder="نام و نام خانوادگی" />
		</div>
		<div class="input-group">
			<input class="form-control" type="text" name="input_melli" id="input_melli" placeholder="کد ملی" />
		</div>
		<div class="input-group">
			<input class="form-control" type="text" name="input_mobile" id="input_mobile" placeholder="شماره تماس" />
		</div>
		<div class="input-group">
			<input class="form-control" type="text" name="input_birthDate" placeholder="تاریخ تولد مثال: 1385/03/16" />
		</div>
		<div class="input-group">
			<input class="form-control" type="text" name="input_email" id="input_email" placeholder="ایمیل" />
		</div>
		<div class="input-group">
			<input class="form-control" style="background-color: #aeea00;font-weight: bolder;font-size: 16pt;" type="button" name="submitbtn" onclick="validateLoginForm()" value="ثبت نام" />
		</div>
	</form>
</div>



</div>
</section>
 
	 <!---notic area--->
<section class="sec-text-machin " id="notic" >
	<br>
        <div class="container">
            <div class="row">
                <div class="  col-lg-5 col-md-4 col-sm-8 pull-right">
                    		
					<h3 class="header-title">آیا فرزندم با استعداد است؟ </h3> 
					<div class=" text-head   ">
						<div class=" strong-text">		
						خیلی وقت ها فکر می کنیم که اگر به جای شغل فعلی، شغل دیگری داشتم موفق تر بودم. گاهی هم از پدرو مادرمان دلگیر می شویم که چرا ما را در مسیری که استعداد داریم هدایت نکردند. اگر می خواهیم به آینده فرزندانمان کمک کنیم باید توانمندی ها و استعدادهایشان را بشناسیم. هم اکنون زمان تغییر برای ترسیم نقشه راه اینده فرزندمان است. با شرکت در آزمون استعدادیابی، فرزندانمان را برای حرکت در مسیر موفقیت آماده کنیم.
						</div>
					</div>
                    
                </div>
				<div class="col-lg-5 col-md-6 col-sm-8">
					<img alt="خلاقیتکده" style="border:3px solid #f5f5f5" class="img-thumbnail machin-img animation-element slide-left cf"  src="<?php echo get_template_directory_uri(); ?>/rosha/images/1.jpg" />
				</div>
            </div>
        </div>
    </section> 
	
	 <!---about azmoon--->
<section class="sec-text-head " id="azmoon" >
	<br>
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-6 col-sm-8 pull-left">
					<h3 style="font-family:nassim">باشگاه نواندیشان روشا</h3>
                     <div class=" text-head   ">
						<div class=" strong-text">		
						باشگاه نواندیشان روشا شریف زیر نظر دانشگاه شریف به دنبال آموزش و پرورش صحیح فرزندان شما برای مواجه شدن با چالش‌های جهان فردا با توجه به نیازها و خواسته‌های آنان است. این باشگاه در نظر دارد با توجه به خدماتی که به نواندیشان ارائه می‌دهد دانش آموختگان را با شیوه‌های مهارت‌های زندگی و اجتماعی، خلاقیت، استعدادیابی، بازار کسب و کار و کارآفرینی  آشنا نماید. و در تلاش است که سرآمدان فردا مطابق با نیازهای دنیای خود تربیت شوند. افراد پس از ثبت نام در باشگاه و دریافت کارت برنزی قادر خواهند بود از خدمات باشگاه و تخفیف‌های ویژه اعضاء بهره مند شوند و از اعضای باشگاه نواندیشان روشا در دانشگاه شریف محسوب گردند. دانش آموختگان پس از طی دوره‌های اولیه و دریافت مجوز سطح اول از باشگاه نواندیشان روشا شریف، قادر خواهند بود به سطوح بالاتر و دریافت کارت نقره‌ای و خدمات ویژه آن دوره و دریافت گواهی نامه مزبور دست یابند.<br>
						
						</div>
                    
					</div>
                </div>
				<div class="col-lg-5 col-md-6 col-sm-8">
					<img alt="خلاقیتکده" style="border:3px solid #aeea00" class="img-thumbnail machin-img animation-element slide-left cf"  src="<?php echo get_template_directory_uri(); ?>/rosha/images/2.jpg" />
				</div>
            </div>
        </div>
    </section> 

	<!---about khallaghiatkadeh--->
<section class="sec-text-film" id="khallaghiatkadeh">
	 <div class="container">
		<div class="row">
			 <div class="col-lg-6 col-md-6 col-sm-8 pull-right text-head">
				<h3 style="font-family:nassim">درباره خلاقیتکده</h3>
				 <div class="strong-text">
				خلاقیتکده شریف با بهره گیری از توسن تیزپای علم و فن آوری، زمینه ای را برای پرورش توانمندی های روبه رشد فرزندان ایرانی در قرن بیست و یکم ایجاد کرده است. ما در خلاقیتکده، ایده پردازی می کنیم، اختراع می کنیم، نمونه اولیه می سازیم، آن را امتحان می کنیم، طرح هایمان را تکرار می کنیم و فعالیت های خلاقانه جذاب دیگری را انجام می دهیم! همه ی این فعالیت ها زمینه سازی برای تجربه ی موفقیت در زندگیمان است. زمینه ای که باعث بروز استعدادهای بالقوه ما خواهد شد. هر یک از ما سبدی از استعداد داریم که در طول زمان با توجه به محیط و آموزش تغییر می‌کند. شاید پیش از این فرصتی برای بروز آنها نبوده ولی امروز در دانشگاه صنعتی شریف در روشا بستری برای رویش و شکوفایی استعدادهای کودک و نوجوان شما فراهم شده است.   
				</div>
			</div>
			 <div class="col-lg-6 col-md-6 col-sm-8">

				<iframe class="animation-element slide-left cf" width="100%" height="350" style="margin-top: 20px;border: 3px solid #35ddde;" src="https://www.aparat.com/video/video/embed/videohash/VrO7L/vt/frame" frameborder="0" allowfullscreen></iframe>
				
			</div>
		</div>
	</div>
   </section>
	
	
	<!---support area -->
<section class="sec-text-power" id="support">
       <div class="container">
            <div class="row">
			
                <div class="col-lg-12 power-title">
					حامیان روشا					
				</div>
                
                <div class="col-lg-2 col-sm-3 tip-block">
					<div class="tips">
						<a href="http://digikala.com" target="_blank">
						 <img src="<?php echo get_template_directory_uri(); ?>/rosha/images/support/digikala.png"  height=50  />
						</a>
					</div> 
                </div>
				
				 
                <div class="col-lg-2 col-sm-3 tip-block">
					<div class="tips">
						<a href="http://anetwork.ir" target="_blank">
						 <img src="<?php echo get_template_directory_uri(); ?>/rosha/images/support/anetwork.png"  height=50  />
						</a>
					</div> 
                </div>
				 
                <div class="col-lg-2 col-sm-3 tip-block">
					<div class="tips">
						<a href="https://leco.ir/" target="_blank">
						 <img src="<?php echo get_template_directory_uri(); ?>/rosha/images/support/leco.png"  height=50  />
						</a>
					</div> 
                </div>
                 
				
                <div class="col-lg-2 col-sm-3 tip-block">
					<div class="tips">
						<a href="http://www.ninisite.com/" target="_blank">
						 <img src="<?php echo get_template_directory_uri(); ?>/rosha/images/support/nini.png"  height=50  />
						</a>
					</div> 
                </div>
				
                <div class="col-lg-2 col-sm-3 tip-block">
					<div class="tips">
						<a href="http://www.abrezendegi.ir/" target="_blank">
						 <img src="<?php echo get_template_directory_uri(); ?>/rosha/images/support/ayandeh.png"  height=50  />
						</a>
					</div> 
                </div>
                  
				
                <div class="col-lg-2 col-sm-3 tip-block">
					<div class="tips">
						<a href="https://imaco.blog.ir/" target="_blank">
						 <img src="<?php echo get_template_directory_uri(); ?>/rosha/images/support/ima.png"  height=50  />
						</a>
					</div> 
                </div>
                  
				
                
                
            </div>
        </div>
    </section> 
  
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
			
			
			
			function validateLoginForm() {
				
				var result =''; 
				 
				if( $('#input_melli').val() == '' || (  $('#input_melli').val().length < 5 )  )
				{
					result += "  کد ملی باید وارد شود \n"; 
				}
				if( $('#input_name').val() == '' || (  $('#input_name').val().length < 5 )  )
				{
					result += "  نام و نام خانوادگی باید وارد شود \n"; 
				}
				if($('#input_mobile').val() == '' || ( ($('#input_mobile').val()).length < 5 )  )
				{					
					 result += " شماره تماس باید وارد شود. \n"; 
				}
				if(result != '')
				{
					alert(result);
					return;
				}
				else 
				{
					$('#registerForm').submit();
				}
				// Pace.track(function(){
					 // $.ajax({
					   // type: "POST",
					   // url: "<?php echo site_url(); ?>/wp-admin/admin-ajax.php?action=ajax_login",
					   // data: $('#loginform').serialize(), // serializes the form's elements.
					   // success: function(data)
					   // {
						  
						   // if(data==1 )
						   // {
							  // document.location =  "<?php echo site_url(); ?>/student-profile/"; 
						   // }
						   // else 
						   // {
							   // alert(data);
							   // alert('خطایی در ورود رخ داده است . لطفآ سایت را دوباره بارگذاری کنید و چند دقیقه بعد دوباره تلاش کنید . ');
							   // console.log(data);
						   // }
					   // }
					 // });
				// });
			}		
			
			 
			
			 
			
			 
		
		</script>   


<?php 
}
else //post back
{
	
	global $wpdb ; 
	$_y=array('%s','%s','%s','%d');
	$date=sprintf("%04s-%02s-%02s",
							ztjalali_english_num(jdate('Y')),
							ztjalali_english_num(jdate('n')),
							ztjalali_english_num(jdate('j'))); 
	$time = jstrftime('%H:%M:%S', time());
	$registerDate = $date . ' ' . $time ; 
	
	$wpdb->insert( 'rosha', array( 
								'name'=>sanitize_text_field($_POST['input_name']),
								'register_date'=>$registerDate,
								'email'=>sanitize_text_field($_POST['input_email']),
								'melli'=>sanitize_text_field($_POST['input_melli']),
								'birthdate'=>sanitize_text_field($_POST['input_birthDate']),
								'phone'=>sanitize_text_field($_POST['input_mobile'])

								),
							array(
								'%s',
								'%s',
								'%s',
								'%s',
								'%s',
								'%s' 
								) 
					) ; 
	$record = $wpdb->insert_id;
	// $product_id = 232;
	$product_id = 406;
	$product = wc_get_product(  $product_id);
	
	$inname = explode(' ', sanitize_text_field($_POST['input_name'])) ; 
	$name =$inname[0]; 
	$family =$inname[1]; 
	
	$phone ='02166046018';
	$mobile ='09189151266';
	if(substr(sanitize_text_field($_POST['input_mobile']),0,2)=='09' )
	{
		$mobile = sanitize_text_field($_POST['input_mobile']); 
	}
	else 
	{
		$phone = sanitize_text_field($_POST['input_mobile']); 
	}
	$email = 'rosha@khallaghiatkadeh.ir' ; 
	if (filter_var(sanitize_text_field($_POST['input_email']), FILTER_VALIDATE_EMAIL))
	{
		$email =sanitize_text_field($_POST['input_email']);
	}
	$current_user = wp_get_current_user();
	$address = array(
		'name' 			=> $name,
		'family'  		=> $family,
		'company'    	=> 'روشا، خلاقیتکده',
		'email'      	=> $email,            
		'tel' 			=> $phone,
		'mobile' 		=> $mobile,
		'address_1'  	=> 'خلاقیتکده شریف',
		'address_2'  	=> '', 
		'nc' 			=> sanitize_text_field($_POST['input_melli']),
		'city'       	=> 'تهران',
		'state'      	=> 'TN',
		'postcode'   	=> '12345',
		'country'    	=> 'IR'
	);

        $order = wc_create_order();
        $order->add_product( get_product( $product_id ), 1 ); //(get_product with id and next is for quantity)
        $order->set_address( $address, 'billing' );
        $order->set_address( $address, 'shipping' );
        //$order->add_coupon('Fresher','10','2'); // accepted param $couponcode, $couponamount,$coupon_tax
        $order->calculate_totals();
		
		$order_id=$order->id;
		if(is_wp_error( $order_id ) )
		{
			//
		}
		else 
		{
			$user_id =1;
			// add a bunch of meta data			
			//add_post_meta($order_id, '_customer_user', $user_id, true);			
			add_post_meta($order_id, '_order_currency', $order->currency, true);
			add_post_meta($order_id, '_azmmon_id', $product_id, true);
			add_post_meta($order_id, '_record_id', $record, true);
			
			update_post_meta($order_id, '_customer_user', $user_id );
			update_post_meta($order_id, '_payment_method', 'WC_Sharif' );
			update_post_meta($order_id, '_payment_method_title', 'WC_Sharif' );
			update_post_meta($order_id, 'post_author',  $user_id  );
			update_post_meta($order_id, '_azmmon_id',  $product_id  );
			update_post_meta($order_id, '_record_id',  $record );

		}
		

		
		// Store Order ID in session so it can be re-used after payment failure
		WC()->session->order_awaiting_payment = $order->id;

		// Process Payment
		$available_gateways = WC()->payment_gateways->get_available_payment_gateways();
		$result = $available_gateways[ 'WC_Sharif' ]->process_payment( $order->id );

		// Redirect to success/confirmation/payment page
		if ( $result['result'] == 'success' ) 
		{
			$result = apply_filters( 'woocommerce_payment_successful_result', $result, $order->id );

			//wp_redirect( $result['redirect'] );
			echo '<script>document.location = "'. $result['redirect'] .'";</script>';
			wp_die();
		}
		
	
}

?>  
   <!---footer area -->
	<footer class="sec-text-footer">
		<div class="container">
			<div class="row"> 
				<div class="col-lg-12 power-title">
					ارتباط با روشا
				</div>
                
				<div class="col-sm-2">
					
				</div>
				<div class="col-sm-3">
					<p>
					وب سایت خلاقیتکده :   <br/>
						<a href="http://khallaghiatkadeh.ir">
							ww.khallaghiatkadeh.ir
						</a>
					<br/>
					آدرس ایمیل :   <br/>
						<a href="mailto:rosha@khallaghiatkadeh.ir">
							rosha@khallaghiatkadeh.ir
						</a>
					 <br/>
					 روشا در شبکه های اجتماعی : <br/>
					<a href="tg:roshachannel">
						<img src="<?php echo get_template_directory_uri(); ?>/rosha/images/tg.png" width=30  /> @roshachannel
					</a><br/>
					<a href="https://instagram.com/roshachannel">
						<img src="<?php echo get_template_directory_uri(); ?>/rosha/images/ins.png" width=30 /> @roshachannel
					</a>
					 
					 
					</p>
				</div>
				<div class="col-sm-2">
				</div>
				<div class="col-sm-3 footer-right-column">
					<p>
					<h3>آدرس خلاقیتکده</h3> 
					 تهران - خیابان آزادی - جنب دانشگاه شریف - کوچه صادقی - پلاک 9 - طبقه دوم
					</p>
					<p>
					<div class="foot-title">تلفن های تماس </div>
					  021-66054958<br>
					  021-66046018<br>
					  021-66098269 
					  
					</p>
				</div>
			</div>
		</div>
	</footer>
 	 
<!---java script loading -->
<script src="<?php echo get_template_directory_uri(); ?>/rosha/js/jquery.min.js"></script> 
<script src="<?php echo get_template_directory_uri(); ?>/rosha/js/bootstrap.min.js"></script>  
<script src="<?php echo get_template_directory_uri(); ?>/rosha/js/script.js"></script> 
	
    <!-- Start of StatCounter Code for Default Guide -->
<script type="text/javascript">
var sc_project=11236128; 
var sc_invisible=1; 
var sc_security="b5937ac9"; 
var scJsHost = (("https:" == document.location.protocol) ?
"https://secure." : "http://www.");
document.write("<sc"+"ript type='text/javascript' src='" +
scJsHost+
"statcounter.com/counter/counter.js'></"+"script>");
</script>
<noscript><div class="statcounter"><a title="web analytics"
href="http://statcounter.com/" target="_blank"><img
class="statcounter"
src="//c.statcounter.com/11236128/0/b5937ac9/1/" alt="web
analytics"></a></div></noscript>
<!-- End of StatCounter Code for Default Guide -->
</body>

</html>

