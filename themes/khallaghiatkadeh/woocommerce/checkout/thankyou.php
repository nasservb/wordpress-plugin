<?php
/**
 * Thankyou page
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/checkout/thankyou.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see 	    https://docs.woocommerce.com/document/template-structure/
 * @author 		WooThemes
 * @package 	WooCommerce/Templates
 * @version     2.2.0
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

if ( $order ) : ?>

	<?php if ( $order->has_status( 'failed' ) ) : ?>

		<p class="woocommerce-thankyou-order-failed"><?php _e( 'متاسفانه مشکلی در پرداخت به وجود آمده است . در دقایق آتی دوباره تلاش کنید و اگر باز هم موفق نشدید با تلفن های شرکت تماس بگیرید.', 'woocommerce' ); ?></p>

		<p class="woocommerce-thankyou-order-failed-actions">
			<a href="<?php echo esc_url( $order->get_checkout_payment_url() ); ?>" class="button pay"><?php _e( 'Pay', 'woocommerce' ) ?></a>
			<?php if ( is_user_logged_in() ) : ?>
				<a href="<?php echo esc_url( wc_get_page_permalink( 'myaccount' ) ); ?>" class="button pay"><?php _e( 'My Account', 'woocommerce' ); ?></a>
			<?php endif; ?>
		</p>

	<?php else : 
	
	$azmoon = get_post_meta($order->id,'_azmmon_id',true);
	
	if(intval($azmoon) > 0 )
	{
		$record = get_post_meta($order->id,'_record_id',true);
	 
		global $wpdb ; 
		$row  = $wpdb->get_row( 'SELECT * FROM rosha WHERE ID = '.$record.''  , ARRAY_A );
		//rosha
		echo '<div class="aler alert-info">ثبت نام و پرداخت هزینه شما در آزمون روشا با موفقیت انجام شد .<br>
		کد رهگیری شما : <strong>' . $order->get_order_number().'</strong><br>
		تاریخ ثبت نام : <strong>' . $row['register_date'].'</strong>
		</div>' ; 
		
		
		
		?>
		<br>
		<h1>کارت ورود به جلسه شما </h1>
		<table class="table table-striped table-bordered">
		<tbody>
			<tr>
				<td> <h3>آزمون رشد و استعدادیابی روشا</h3></td>
				<td>
					<img src="<?php echo get_template_directory_uri(); ?>/rosha/images/abr.jpg" width="90" />
					<img src="<?php echo get_template_directory_uri(); ?>/rosha/images/sharif.jpg"  width="90" /> 
				</td>
			</tr>
			<tr>
				<td>نام و نام خانوادگی</td>
				<td><?=$row['name'] ?></td>
			</tr>
			<tr>
				<td>کد ملی</td>
				<td><?=$row['melli'] ?></td>
			</tr>
			<tr>
				<td>شماره تماس</td>
				<td><?=$row['phone'] ?></td>
			</tr>
			<tr>
				<td>تاریخ آزمون</td>
				<td> بیستم اسفند ماه 1395</td>
			</tr>
			<tr>
				<td>مکان آزمون </td>
				<td> دانشگاه صنعتی شریف</td>
			</tr> 
			<tr>
				<td>قوانین </td>
				<td>برای شرکت در آزمون همراه داشتن این برگه الزامی می باشد.</td>
			</tr>
			 
		</tbody>
		</table>
		<br>
		
		<a class="btn btn-primary" href="javascript:window.print()">چاپ کارت ورود به جلسه</a>
		<script>
		
		$(document).ready(function(){
				$('.shop_table').hide();
				$('.title').hide();
				$('.sec-text-footer').hide();
				$('.order-again').hide();
				$('.sec-newslater').hide();
				$('h2').hide();
				$('address').hide();
			});
		</script>
		<?php
		
			$wpdb->update( 'rosha', 
							array('pay_id'=>$order->get_order_number()),
							array('id'=> $row['id']) , 
							array('%d'),
							array('%d')
							);
		
	}	
	else 
	{	
	?>

		<p class="woocommerce-thankyou-order-received"><?php echo apply_filters( 'woocommerce_thankyou_order_received_text', __( 'با تشکر از پرداخت شما .پرداخت با موفقیت انجام شد.', 'woocommerce' ), $order ); ?></p>

		<ul class="woocommerce-thankyou-order-details order_details">
			<li class="order">
				<?php _e( 'کد پیگیری:', 'woocommerce' ); ?>
				<strong><?php echo $order->get_order_number(); ?></strong>
			</li>
			<li class="date">
				<?php _e( 'تاریخ پرداخت:', 'woocommerce' ); ?>
				<strong><?php echo date_i18n( get_option( 'date_format' ), strtotime( $order->order_date ) ); ?></strong>
			</li>
			<li class="total">
				<?php _e( 'مبلغ :', 'woocommerce' ); ?>
				<strong><?php echo $order->get_formatted_order_total(); ?></strong>
			</li>
			 
		</ul>
		<div class="clear"></div>

	<?php

	}
	endif; ?>

	<?php do_action( 'woocommerce_thankyou_' . $order->payment_method, $order->id ); ?>
	<?php do_action( 'woocommerce_thankyou', $order->id ); ?>

<?php else : ?>

	<p class="woocommerce-thankyou-order-received" style="display:none"><?php echo apply_filters( 'woocommerce_thankyou_order_received_text', __( 'با تشکر از پرداخت شما .پرداخت با موفقیت انجام شد.', 'woocommerce' ), null ); ?></p>

<?php endif; ?>
