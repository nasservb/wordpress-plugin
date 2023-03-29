<?php 

add_theme_support( 'post-thumbnails' ); 
// remove Order Notes from checkout field in Woocommerce
add_filter( 'woocommerce_checkout_fields' , 'alter_woocommerce_checkout_fields' );
function alter_woocommerce_checkout_fields( $fields ) {
     unset($fields['billing']['billing_first_name']); // remove the customer's First Name for billing
     unset($fields['billing']['billing_last_name']); // remove the customer's last name for billing
     unset($fields['billing']['billing_company']); // remove the option to enter in a company
     unset($fields['billing']['billing_address_1']); // remove the first line of the address
     unset($fields['billing']['billing_address_2']); // remove the second line of the address
     unset($fields['billing']['billing_city']); // remove the billing city
     unset($fields['billing']['billing_postcode']); // remove the ZIP / postal code field
     unset($fields['billing']['billing_country']); // remove the billing country
     unset($fields['billing']['billing_state']); // remove the billing state
     unset($fields['billing']['billing_email']); // remove the billing email address - note that the customer may not get a receipt!
     unset($fields['billing']['billing_phone']); // remove the option to enter in a billing phone number
     unset($fields['shipping']['shipping_first_name']);
     unset($fields['shipping']['shipping_last_name']);
     unset($fields['shipping']['shipping_company']);
     unset($fields['shipping']['shipping_address_1']);
     unset($fields['shipping']['shipping_address_2']);
     unset($fields['shipping']['shipping_city']);
     unset($fields['shipping']['shipping_postcode']);
     unset($fields['shipping']['shipping_country']);
     unset($fields['shipping']['shipping_state']);
     unset($fields['account']['account_username']); // removing this or the two fields below would prevent users from creating an account, which you can do via normal WordPress + Woocommerce capabilities anyway
     unset($fields['account']['account_password']);
     unset($fields['account']['account_password-2']);
     unset($fields['order']['order_comments']); // removes the order comments / notes field
     return $fields;
}
/**
 * Auto Complete all WooCommerce orders.
 * Add to theme functions.php file
 */

add_action( 'woocommerce_thankyou', 'custom_woocommerce_auto_complete_order' );
function custom_woocommerce_auto_complete_order( $order_id ) {
    global $woocommerce;

    if ( !$order_id )
        return;
    $order = new WC_Order( $order_id );
    $order->update_status( 'completed' );
}


add_action( 'after_setup_theme', 'woocommerce_support' );
function woocommerce_support() {
	add_theme_support( 'woocommerce' );
}





add_action('init', 'default_woocommerce_thumbnails', 99 );

function default_woocommerce_thumbnails() {
//remove_action( 'woocommerce_before_shop_loop_item_title', 'x_woocommerce_shop_thumbnail', 10 );  
//add_action( 'woocommerce_before_shop_loop_item_title', 'x_woocommerce_shop_thumbnail_v2', 99 );



//remove_action( 'woocommerce_before_shop_loop_item', 'woocommerce_template_loop_product_link_open', 10 );
//add_action( 'woocommerce_before_shop_loop_item', 'x_woocommerce_shop_loop', 99 );

}



function x_woocommerce_shop_loop() {

  GLOBAL $product;

  //$stack            = x_get_stack();
  $stack_thumb      = 'shop_catalog';
  $stack_shop_thumb = $stack_thumb;
  $id               = get_the_ID();
  $rating           = $product->get_rating_html();

woocommerce_show_product_sale_flash();
   echo '<div class="entry-featured">';
     echo '<a href="' . get_the_permalink() . '">';
       echo get_the_post_thumbnail( $id ,array(80,50) );
       if ( ! empty( $rating ) ) {
         echo '<div class="star-rating-container aggregate">' . $rating . '</div>';
       }
     echo '</a>';
   echo "</div>";

}


function x_woocommerce_shop_thumbnail_v2() {

  GLOBAL $product;

  //$stack            = x_get_stack();
  $stack_thumb      = 'shop_catalog';
  $stack_shop_thumb = $stack_thumb;
  $id               = get_the_ID();
  $rating           = $product->get_rating_html();

 //woocommerce_show_product_sale_flash();
//   echo '<div class="entry-featured">';
//     echo '<a href="' . get_the_permalink() . '">';
//       echo get_the_post_thumbnail( $id  );
//       if ( ! empty( $rating ) ) {
//         echo '<div class="star-rating-container aggregate">' . $rating . '</div>';
//       }
//     echo '</a>';
//   echo "</div>";

}


function woocommerce_before_main_content_new() 
{
	echo '<section class="sec-course "  >
        <div class="content-bg"> 
			<div class="post-box">'; 
}

function woocommerce_after_main_content_new() 
{
	echo '</div>
			</div>
			</section>'; 
}

//Remove Breadcrumbs
//remove_action( 'woocommerce_before_main_content', 'woocommerce_breadcrumb', 20, 0);

add_action( 'woocommerce_before_main_content', 'woocommerce_before_main_content_new', 20);
add_action( 'woocommerce_after_main_content', 'woocommerce_after_main_content_new', 20);
 
//Get Rid of Stupid Tabs
//remove_action( 'woocommerce_after_single_product_summary', 'woocommerce_output_product_data_tabs', 10);
//remove_action( 'woocommerce_single_product_summary', 'woocommerce_template_single_excerpt', 20, 2);


//Remove Product Reviews
// remove_action( 'woocommerce_product_tabs', 'woocommerce_product_reviews_tab', 30 );
// remove_action( 'woocommerce_product_tab_panels', 'woocommerce_product_reviews_panel', 30 );

//Remove Sidebar from WooCommerce
//remove_action( 'woocommerce_sidebar', 'woocommerce_get_sidebar', 10);


include 'inc/add-info-to-order.php';




