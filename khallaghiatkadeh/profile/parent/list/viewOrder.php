<?php 
	ini_set('display_errors','on');
	ERROR_REPORTING(E_ALL);
	
	$product_id = (isset($_REQUEST['pid'])? sanitize_text_field($_REQUEST['pid']) : ''  );
	
	$user_id = (isset($_REQUEST['for'])? sanitize_text_field($_REQUEST['for']) : ''  );
	
	 
	$post = get_post($product_id); 
	
	$product = wc_get_product(  $product_id);
					
	
	$current_user = get_userdata($user_id);					
						
	
?>
	<div class="col-sm-12 pull-right">
		<div class="content-title"><h1> 
			<a href="?dir=list&p=index">لیست فرزندان</a>
			<a href="?dir=list&p=suggest">دوره های پیشنهادی برای فرزندان </a> 
        </h1></div>
    <div class="row"> 
		<div class="alert alert-info">خرید دوره برای <?php echo $current_user->first_name .' ' . $current_user->last_name;  ?></div>
	<?php
	
	if (empty($_POST))
	{
		?>
		<form method="POST" >
			<input type="hidden" name="product_id" value="<?php echo $post->ID; ?>" />
			<div class="message-frame">
				<div class="col-sm-8 message-box ">
					<h1><span class="title"><?php echo $post->post_title ?></span></h1>
					<p><?php 	
							echo $post->post_content  ;
						?></p>	
				</div>
				<div class="col-sm-3 author">
					<?php $image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'single-post-thumbnail' );?>

					<img class="img-circle" style="min-height:100px;min-width:100px;" src="<?php  echo $image[0]; ?>" data-id="<?php echo $post->ID; ?>"/>
					<div class="title">

					<div>قیمت : 
						<?php  
						echo $product->get_price(); 					
						?>
					ریال </div>
					</div>
				</div>
			</div>
			<div class="col-sm-12 pager">
				<input type="submit" value="خرید این دوره" name="btn" class="btn btn-register" style="width: 200px;">
			</div>
		</form>
	<?php 
	}
	else 
	{
		$product_id = (isset($_REQUEST['pid'])? sanitize_text_field($_REQUEST['pid']) : ''  );
		$product = wc_get_product(  $product_id);
	
		
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
		
		
		
		// $sharif = new WC_Sharif() ;
		
		// $sharif->Send_to_Sharif_Gateway($order->id);
		
		// global $woocommerce;
		// $woocommerce->cart->empty_cart(); 
		// $woocommerce->cart->add_to_cart($product_id);
		// or  WC()->cart->add_to_cart($product_id);
	
	
		//echo '<script>document.location = "'.(WC()->cart->get_checkout_url()).'";</script>';
	}
	?>
	
	</div>
	