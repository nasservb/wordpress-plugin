<?php
// define the woocommerce_review_order_after_order_total callback 
function action_woocommerce_review_order_after_order_total(  ) { 
    // make action magic happen here... 
	global $order;
	
	$user_id = get_current_user_id();
	$order_id=WC()->order->id;
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
	
	$order->set_address( $address, 'billing' );
    $order->set_address( $address, 'shipping' );
	
	$phone = get_user_meta( $user_id, 'phone', true ); 
	$mobile = get_user_meta( $user_id, 'mobile', true ); 
	$birthdate = get_user_meta( $user_id, 'birthdate', true ); 
	$melli = get_user_meta( $user_id, 'melli', true ); 
	$mail = get_user_meta( $user_id, 'mail', true ); 
	$state = get_user_meta( $user_id, 'state', true ); 
	$city = get_user_meta( $user_id, 'city', true ); 
	
	add_post_meta($order_id, '_customer_user', $user_id, true);			
	add_post_meta($order_id, '_order_currency', $order->currency, true);
	//add_post_meta($order_id, '_course_id', $product_id, true);
	 
	update_post_meta($order_id, '_customer_user', $user_id );
	update_post_meta($order_id, 'post_author',  $user_id  );
	
	
	
}; 
         
// add the action 
//add_action( 'woocommerce_review_order_after_order_total', 'action_woocommerce_review_order_after_order_total', 10, 0 );

