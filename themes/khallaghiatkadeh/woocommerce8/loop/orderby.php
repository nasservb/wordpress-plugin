<?php
/**
 * Show options for ordering
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/loop/orderby.php.
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
	exit; // Exit if accessed directly
}

?>
<form class="woocommerce-ordering" method="get">
	<select name="orderby" class="orderby">
		<?php foreach ( $catalog_orderby_options as $id => $name ) : ?>
			<option value="<?php echo esc_attr( $id ); ?>" <?php selected( $orderby, $id ); ?>>
			
			
			<?php 
			
			  switch($name )  {
			    case 'Default sorting' : echo 'بدون ترتیب' ; break ; 
			    case 'Sort by popularity' : echo 'بر اساس محبوب ترین ' ; break ; 
			    case 'Sort by average rating' : echo 'بر اساس رتبه ' ; break ; 
			    case 'Sort by newness' : echo 'بر اساس جدیدترن' ; break ; 
			    case 'Sort by price: low to high' : echo 'از قیمت کم به زیاد' ; break ; 
			    case 'Sort by price: high to low' : echo 'از قیمت زیاد به کم' ; break ; 
			    default : esc_html( $name );  ; break ; 
			  }
			 
			?>
			
			
			
			</option>
		<?php endforeach; ?>
	</select>
	<?php
		// Keep query string vars intact
		  
		foreach ( $_GET as $key => $val ) {
			if ( 'orderby' === $key || 'submit' === $key ) {
				continue;
			}
			if ( is_array( $val ) ) {
				foreach( $val as $innerVal ) {
					echo '<input type="hidden" name="' . esc_attr( $key ) . '[]" value="' . esc_attr( $innerVal ) . '" />';
				}
			} else {
				echo '<input type="hidden" name="' . esc_attr( $key ) . '" value="' . esc_attr( $val ) . '" />';
			}
		}
	?>
</form>
