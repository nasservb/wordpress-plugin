<?php
 

/**
 * Register the custom product type after init
 */
function register_course_product_type() {

	/**
	 * This should be in its own separate file.
	 */
	 if (class_exists(WC_Product))
	 {
		class WC_Product_Course extends WC_Product {

			public function __construct( $product ) {

				$this->product_type = 'course';

				parent::__construct( $product );

			}

		}
	 }
}
add_action( 'init', 'register_course_product_type' );


/**
 * Add to product type drop down.
 */
function add_course_product( $types ){

	// Key should be exactly the same as in the class
	$types[ 'course' ] =   'دوره آموزشی'  ;

	return $types;

}
add_filter( 'product_type_selector', 'add_course_product' );


/**
 * Show pricing fields for simple_rental product.
 */
function course_custom_js() {

	if ( 'product' != get_post_type() ) :
		return;
	endif;

	?><script type='text/javascript'>
		jQuery( document ).ready( function() {
			jQuery( '.options_group.pricing' ).addClass( 'show_if_course' ).show();
		});

	</script><?php

}
add_action( 'admin_footer', 'course_custom_js' );


/**
 * Add a custom product tab.
 */
function custom_product_tabs( $tabs) {

	$tabs['course'] = array(
		'label'		=>  'مشخصات دوره' ,
		'target'	=> 'course_options',
		'class'		=> array( 'show_if_course', 'show_if_variable_course'  ),
	);
	
	
	 
	// $tabs['general']['class'][]='show_if_course';
	 $tabs['inventory']['class']=
				array( 
						'show_if_simple', 
						'show_if_variable', 
						'show_if_grouped', 
						'show_if_external',
						'show_if_course');
	// $tabs['shipping']['class'][]='show_if_course';
	// $tabs['linked_product']['class'][]='show_if_course';
	// $tabs['attribute']['class'][]='show_if_course';
	// $tabs['variations']['class'][]='show_if_course';
	// $tabs['advanced']['class'][]='show_if_course';
	// $tabs['course']['class'][]='show_if_course';
	
	
//var_dump($tabs);
	return $tabs;

}
add_filter( 'woocommerce_product_data_tabs', 'custom_product_tabs' );


/**
 * Contents of the course options product tab.
 */
function course_options_product_tab_content() 
{

	global $post;

	?><div id='course_options' class='panel woocommerce_options_panel'><?php

		 
	echo '<div class="options_group">';
	woocommerce_wp_text_input( 
		array( 
			'id'          => '_student_capacity', 
			'label'       =>  'ظرفیت دوره' , 
			'placeholder' => '30',
			'desc_tip'    => 'true',
			'description' =>  'ظرفیت دوره'  
		)
	);
	echo '</div>';
		 
	echo '<div class="options_group">';
	woocommerce_wp_text_input( 
		array( 
			'id'          => '_start_date', 
			'label'       =>  'تاریخ شرع' , 
			'placeholder' => '1395/07/09',
			'desc_tip'    => 'true',
			'description' =>  'تاریخ شروع دوره را انتخاب کنید'  
		)
	);
	echo '</div>';
	
	echo '<div class="options_group">';
	woocommerce_wp_text_input( 
		array( 
			'id'          => '_finish_date', 
			'label'       =>  'تاریخ پایان' , 
			'placeholder' => '1395/09/03',
			'desc_tip'    => 'true',
			'description' =>  'تاریخ پایان دوره را انتخاب کنید'  
		)
	);
	echo '</div>';
	
	
	echo '<div class="options_group">';
	
	$teachers =get_users(array('role__in'=>array('teacher','administrator'))); 
	$options=array() ; 			
	foreach ( $teachers as $teacher ) {
		$options[$teacher->ID] =  $teacher->first_name. ' ' . $teacher->last_name  . "\t".
					($teacher->has_cap('teacher')? 'مربی' : 'مسئول' );
	}
				
	woocommerce_wp_select( 
		array( 
			'id'      => '_teacher', 
			'label'   =>   'مربی را انتخاب کنید' , 
			'options' => $options
			)
		);
	echo '</div>';
	
	
	echo '<div class="options_group">';
	
	$agents =get_users(array('role__in'=>array('agent' ))); 
	$options2=array() ; 			
	foreach ( $agents as $agent ) {
		$options2[$agent->ID] =  $agent->first_name. ' ' . $agent->last_name   ;
	}
				
	woocommerce_wp_select( 
		array( 
			'id'      => '_agent', 
			'label'   =>   'نمایندگی را انتخاب کنید' , 
			'options' => $options2
			)
		);
	echo '</div>';
	
	
	 echo '<div class="options_group">'; 
				
	woocommerce_wp_select( 
		array( 
			'id'      => '_status', 
			'label'   =>   'وضعیت دوره را انتخاب کنید' , 
			'options' => array(
					'1'	=> 'شروع نشده' , 
					'2'	=> 'فعال' ,  
					'3'	=> 'غیرفعال' , 
					'4'	=> 'تمام شده' , 
					'5'	=> 'کنسل شده' 
					)  
			)
		);
	echo '</div>'; 

		

	?> </div><?php


}
add_action( 'woocommerce_product_data_panels', 'course_options_product_tab_content' );


/**
 * Save the custom fields.
 */
function save_course_option_field( $post_id ) {

	update_post_meta( $post_id, '_sold_individually', 'yes' );
	
	// save teacher info 
	if( !empty(  $_POST['_start_date'] ) )
		update_post_meta( $post_id, '_start_date', esc_attr(  $_POST['_start_date'] ) );
 
	// save teacher info 
	if( !empty(  $_POST['_student_capacity'] ) )
		update_post_meta( $post_id, '_student_capacity', esc_attr(  $_POST['_student_capacity'] ) );
 
 
	// save teacher info 
	if( !empty(  $_POST['_finish_date'] ) )
		update_post_meta( $post_id, '_finish_date', esc_attr(  $_POST['_finish_date'] ) );
	//--------------
 
	// save teacher info 
	if( !empty(  $_POST['_teacher'] ) )
		update_post_meta( $post_id, '_teacher_id', esc_attr(  $_POST['_teacher'] ) );
 
	// save agent info 
	if( !empty(  $_POST['_agent'] ) )
		update_post_meta( $post_id, '_agent_id', esc_attr(  $_POST['_agent'] ) );
	
	// save agent info 
	if( !empty(  $_POST['_status'] ) )
	{
		$status='';
	
		switch(intval($_POST['_status']))
		{
			case 1 : $status='not_started'; break; 
			case 2 : $status='active'; break; 
			case 3 : $status='deactive'; break; 
			case 4 : $status='finished'; break;  
			case 5 : $status='caneled'; break;  
		}
		update_post_meta( $post_id, '_status', $status );
	}

}
add_action( 'woocommerce_process_product_meta_course', 'save_course_option_field'  );
add_action( 'woocommerce_process_product_meta_variable_course', 'save_course_option_field'  );


/**
 * Hide Attributes data panel.
 */
function hide_attributes_data_panel( $tabs) {

	// Other default values for 'attribute' are; general, inventory, shipping, linked_product, variations, advanced
	//$tabs['attribute']['class'][] = 'hide_if_course';
	// $tabs['attribute']['class'] = array('general','inventory', 'shipping', 'linked_product', 'variations', 'advanced');

	return $tabs;

}

add_filter( 'woocommerce_product_data_tabs', 'hide_attributes_data_panel' );



function default_no_quantities( $individually, $product ){
	if($product->is_type('course'))
		$individually = true;
	return $individually;
}
add_filter( 'woocommerce_is_sold_individually', 'default_no_quantities', 10, 2 );


if (! function_exists( 'woocommerce_course_add_to_cart' ) ) {

/**
* Output the simple product add to cart area.
*
* @subpackage	Product
*/

	function woocommerce_course_add_to_cart() {
		
		global $product;
		echo sprintf( '<a rel="nofollow" href="%s" data-quantity="%s" data-product_id="%s" data-product_sku="%s" class="%s">%s</a>',
			esc_url( $product->add_to_cart_url() ),
			//esc_attr( isset( $quantity ) ? $quantity : 1 ),
			esc_attr(  1 ),
			esc_attr( $product->id ),
			esc_attr( $product->get_sku() ),
			esc_attr( isset( $class ) ? $class : 'button' ),
			esc_html( $product->add_to_cart_text() )
		);
	}
	//add_action( 'woocommerce_course_add_to_cart', 'woocommerce_course_add_to_cart' );
	add_filter( 'woocommerce_loop_add_to_cart_link', 'woocommerce_course_add_to_cart' );

}
