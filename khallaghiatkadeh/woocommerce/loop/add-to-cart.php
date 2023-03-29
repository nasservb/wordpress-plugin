<?php
/**
 * Loop Add to Cart
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/loop/add-to-cart.php.
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
 * @version     2.5.0
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

global $product;
// if($product->get_price() > 0 ) 
// {
	// echo 
		// '<br>'.sprintf( '<a  class="btn btn-default" href="%s" data-quantity="%s" data-product_id="%s" data-product_sku="%s" class="%s">%s</a>',
			// esc_url(site_url(). '/shop?add-to-cart=' .$product->id ),
			// esc_attr( 1 ),
			// esc_attr( $product->id ),
			// esc_attr( $product->get_sku() ),
			// esc_attr( isset( $class ) ? $class : 'button' ),
			// esc_html( 'افزودن به سبد خرید' )
		// );
// }
// else 
// {
	echo 
		'<br>'.sprintf( '<a  class="btn btn-default" href="%s" data-quantity="%s" data-product_id="%s" data-product_sku="%s" class="%s">%s</a>',
			esc_url( get_permalink($product->id) ),
			esc_attr(  1 ),
			esc_attr( $product->id ),
			esc_attr( $product->get_sku() ),
			esc_attr( isset( $class ) ? $class : 'button' ),
			esc_html( 'مشاهده اطلاعات' )
		);
//}
