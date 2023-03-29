<?php
/*!
 * Template Name: پکیج جامع شتابدهنده روشا
 * Theme URI: http://Khalaghiatkadeh.com
 * Author: nasser niazy mobasser
 * Author URI: http://niazy.ir/
 * Design: Nov 11, 2016 
 * Copyright: abrezendegi.ir all right reserved.
 */
 
get_header(); 	
?>
<!---machine picture area--->
	<section class="sec-course ">
        <div class="content-bg"> 
		
		<link rel="stylesheet" href="<?=get_template_directory_uri() ?>/css/blog.css">

<div class="cntainer box"> 
			<div  class="content-box">
				<header class="entry-header"> 
					<div class="about-text" >
						<h1><span class="title"> پکیج شتابدهنده روشا
</span></h1>
					</div>	
					</header><!-- .entry-header -->
		<div class="container" style="width:100%">
			<div class="row grid">
<h3>مسیر رویش و شکوفایی استعدادها (شامل تمام مراحل در یک پکیج)</h3>
 
<p>بدون تردید گذراندن هر یک از این دوره ها به تنهایی مثمر فایده بوده و حرکتی رو به جلو می باشد، اما هنگامی که این دوره ها در کنار هم قرار می گیرند، مانند پازلی کامل می باشند که تصویری بسیار زیباتر از تصاویر جداگانه ارائه می دهند. پکیج جامع شتابدهنده روشا در برگیرنده تمام دوره ها به صورت منسجم می باشد. با تهیه این پکیج می توان امیدوار بود که کودکان ونوجوانانمان در مسیری مطمئن و برنامه ریزی شده، برای شکوفایی استعدادهایشان گام بر می دارند. 
<br>
برای داشتن این تصویر زیبا، فرصت را از دست ندهید، همه چیز مهیا است! با 20% تخفیف تصویر زیبای آینده خود را بسازید.
<br>
پدر و مادر عزیز، در تمامی این مراحل شما هم می توانید به عنوان حامیان اصلی نواندیشان آموزش دیده و به شکوفایی فرزندتان در مسیر روشا یاری رسانید.
</p>


<p>&nbsp;</p>

&nbsp;
<table class="table table-bordered table-striped">
<tbody>
<tr>
<td colspan="3" width="452">  پکیج جامع شتابدهنده روشا</td>
</tr>
<tr>
<td width="135">شتابدهنده روشا</td>
<td width="161">نام دوره</td>
<td width="156">ساعت آموزشی</td>
</tr>
<tr>
<td colspan="2" width="296">رویداد مقدماتی روشا (18-12 سال)</td>
<td width="156">6 ساعت (یک روز)</td>
</tr>
<tr>
<td rowspan="3" width="135">&nbsp;

&nbsp;

مرحله پیش شتابدهی

(18-6 سال)

&nbsp;

&nbsp;

&nbsp;

&nbsp;</td>
<td width="161">مهارت زندگی</td>
<td width="156">20 ساعت</td>
</tr>
<tr>
<td width="161">خلاقیت</td>
<td width="156">20 ساعت</td>
</tr>
<tr>
<td width="161">استعدادیابی</td>
<td width="156">20 ساعت</td>
</tr>
<tr>
<td rowspan="2" width="135">&nbsp;

مرحله شتابدهی

(18-12 سال)</td>
<td width="161">مهارت های کسب وکار</td>
<td width="156">20 ساعت</td>
</tr>
<tr>
<td width="161">کارآفرینی</td>
<td width="156">20 ساعت</td>
</tr>
<tr>
<td colspan="2" width="296">رویداد ملی روشا (18-12 سال)</td>
<td width="156">16 ساعت (دو روز)</td>
</tr>
<tr>
<td colspan="3" width="452"><strong>بازار دارایی های فکری</strong></td>
</tr>
</tbody>
</table>


<br>

<?php
	
	if (empty($_POST))
	{
		?>
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
				<img class="thumbnail" height="100" width="100" style="width: 100px;height: 100px;min-height: 100px;" src="<?=get_template_directory_uri() ?>/images/course/course5.jpg">
				</td>
				<td>پکیج جامع شتابدهنده روشا( 20% تخفیف)</td>
				<td>122 ساعت</td>
				<td>لازم ندارد</td>
				<td>۶ -۱۸ سال</td>
				<td>٨١٢,٠٠٠ تومان</td>
			</tr>
		</tbody>
		</table>
			<div class="finalprice">
				<div class="total">جمع کل خرید شما :
					<span class="left green">
					   ١,٠١٥,٠٠٠
						<span class="toman">تومان</span>
					</span>
				</div>
				<div class="sep"></div>
				<div class="payable">
					مبلغ قابل پرداخت :
					<span class="left green">
					 ٨١٢,٠٠٠
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

			<form method="POST"  name="form_pay"  id="form_pay753"> 
				<input type="hidden" name="pid" value="753"> 
					<button type="button" class="btn btn-success btn-register" style="right:0px;height:50px;padding-top: 10px;font-family:nassim-bold;width:200px"  onclick="goPay(753);">
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
