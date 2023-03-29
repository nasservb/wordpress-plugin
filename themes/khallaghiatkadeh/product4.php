<?php
/*!
 * Template Name: رویداد ملی روشا
 * Theme URI: http://Khalaghiatkadeh.com
 * Author: nasser niazy mobasser
 * Author URI: http://niazy.ir/
 * Design: Nov 11, 2016 
 * Copyright: abrezendegi.ir all right reserved.
 */
 
get_header(); 	
?>


<!---machine picture area--->
	<section class="sec-course "  >
        <div class="content-bg"> 
		
		
		
		<div style="width: 85%;
					height: 8px;
					background-color: #C9D1D7;
					border-radius: 15px;
					margin: 15px;
					right: 30px;
					position: relative;">

						<div class="progress_bg" style="width: 99%;">
						</div>
					<span style="background-position: -2px -2px;" class="step-item">
					<a class="s_title" href="#" style="color:black;">
					رویداد مقدماتی روشا
					</a></span>
					
					<span style="background-position: -2px -2px;right: 33%;" class="step-item">
					<a class="s_title" href="#" style="color:black;">
					پیش شتابدهی
					</a></span>
																	
					<span style="background-position: -2px -2px;right: 66%;" class="step-item">
					<a class="s_title" href="#" style="color:black;">
					شتابدهی
					</a></span>
					
					<span style="background-position: -2px -36px;right: 99%;" class="step-item">
					<a class="s_title" href="#" style="color:blue;">
					رویداد ملی روشا
					</a></span>
					
		</div> 
		<link rel="stylesheet" href="<?=get_template_directory_uri() ?>/css/blog.css">

<div class="cntainer box"> 
			<div  class="content-box">
				<header class="entry-header"> 
					<div class="about-text" >
						<h1><span class="title"> رویداد ملی روشا
</span></h1>
					</div>	
					</header><!-- .entry-header -->
		<div class="container" style="width:100%">
			<div class="row grid">
<h3>رویدادی سراسر یادگرفتن، یاددادن، تجربه و خلق کردن</h3>
 
<p>
رویداد پایانی در واقع اولین گردهمایی آینده سازان و نام آوران کشورمان در یک عرصه ی ملی است و منجر به پایه ریزی اصلی ترین اقدامات کارآفرینی آن ها در آینده می شود. 
<br>
رویداد ملی روشا یک رویداد آموزشی-تجربی در سراسر کشور است که نواندیشانی که دوره های پیش شتابدهی و دوره های شتابدهی را پشت سرگذاشته اند هم اکنون می توانند طی این دو روز ایده هایشان را مطرح کنند، گروه تشکیل دهند و به اجرای ایده های خود بپردازند. در این برنامه، شرکت کنندگان در یک فضای مشترک قرار گرفته و با کمک مربیان (منتورهای) خبره و متخصص، ایده های خود را پیاده سازی کرده و ارائه دهند. پس از داوری، تیم‏ های برگزیده معرفی شده و مورد حمایت قرار می‏گیرند تا طرح خود را به مرحله اجرایی برسانند. باید توجه داشت که ارزش واقعی این رویداد، کمیت ایده های شکل گرفته نیست بلکه یادگیری از طریق عمل خلاقه، ایجاد روابط عمیق تر کاری، پرورش ایده ها و آزمایش در محیطی بدون ریسک و همینطور برای بسیاری، برداشتن اولین گام در مسیر کارآفرینی است.
</p>
<p>&nbsp;</p>
&nbsp;


<?php
	
	if (empty($_POST))
	{
		?>
		
<br>

<hr style="border-style: dashed none;border-color: #BDBDBD transparent #FFF;">
<br>
		<table class="table table-bordered table-hovered table-striped">
		<thead>
			<th></th>
			<th>نام دوره</th>
			<th>مدت زمان </th>
			<th>پیش نیاز </th>
			<th>مخاطبین </th>
			<th>قیمت نهایی </th>
		</thead>
		<tbody>
			<tr>
				<td>
				<img class="thumbnail" height="100" width="100" style="width: 100px;height: 100px;min-height: 100px;" src="<?=get_template_directory_uri() ?>/images/course/course4.jpg">
				</td>
				<td>رویداد ملی روشا</td>
				<td>١٦ ساعت </td>
				<td>لازم ندارد</td>
				<td>١٢ -۱۸ سال</td>
				<td>٤٥,٠٠٠ تومان</td>
			</tr>
		</tbody>
		</table>
			<div class="finalprice">
				<div class="total">جمع کل خرید شما :
					<span class="left green">
					   ٤٥,٠٠٠
						<span class="toman">تومان</span>
					</span>
				</div>
				<div class="sep"></div>
				<div class="payable">
					مبلغ قابل پرداخت :
					<span class="left green">
					 ٤٥,٠٠٠
						<span class="toman">تومان</span>
					</span>
				</div>
			</div>
			<script>
			function goPay(id)
			{
				var loggin = <?=(is_user_logged_in()? 1 : 0 )?> ; 
				if(loggin == 1 )
				{
					//if(user) , if(parent), if(agency)
					//windows.location= "<?=site_url(); ?>/parent-profile/?dir=course&p=viewOrder&pid="+id ; 
					$("#form_pay"+id).submit();
				}
				else 
				{
					loginUrl=window.location.href;
					registerUrl=window.location.href;
					
					alert("شما وارد سایت نشده اید .\n از منوی بالای سایت می توانید وارد سایت شوید . \n  اگر کاربری ندارید می توانید از دکمه ثبت نام استفاده کنید.");
				}
			
			}
			</script>
			
			<form method="POST"  name="form_pay"  id="form_pay751">  
				<input type="hidden" name="pid" value="751"> 
					<button type="button" class="btn btn-success btn-register" style="right:0px;height:50px;padding-top: 10px;font-family:nassim-bold;width:200px"  onclick="goPay(751);">
							پرداخت آنلاین و خرید 
						</button><br><br>
			</form>	
			
			</div>
			</div>	
			
			
	<?php 
	}
	else 
	{
		$product_id = (isset($_REQUEST['pid'])? sanitize_text_field($_REQUEST['pid']) : ''  );
		$product = wc_get_product(  $product_id);
	 
	
		$current_user = wp_get_current_user();
		$address = array(
            'name' 			=> $current_user->user_firstname,
            'family'  		=> $current_user->user_lastname,
            'company'    	=> $current_user->user_email,
            'email'      	=> $current_user->user_email,            
			'tel' 			=> $current_user->phone,
			'mobile' 		=> $current_user->mobile,
            'address_1'  	=> '31 Main Street',
            'address_2'  	=> '', 
			'nc' 			=> $current_user->melli,
            'city'       	=> 'Chennai',
            'state'      	=> 'TN',
            'postcode'   	=> '12345',
            'country'    	=> 'IN'
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
			// add a bunch of meta data			
			add_post_meta($order_id, '_customer_user', $user_id, true);			
			add_post_meta($order_id, '_order_currency', $order->currency, true);
			add_post_meta($order_id, '_course_id', $product_id, true);
			
			update_post_meta($order_id, '_customer_user', $user_id );
			update_post_meta($order_id, '_payment_method', 'WC_Sharif' );
			update_post_meta($order_id, '_payment_method_title', 'WC_Sharif' );
			update_post_meta($order_id, 'post_author',  $user_id  );
			update_post_meta($order_id, '_course_id',  $product_id  );

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
	

		
		
		</div>
		</div>	
		</div> 
    </section> 


 <?php get_footer(); ?> 
 
</body>

</html>
