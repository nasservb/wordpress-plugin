<?php
/**
 * Proceed to checkout button
 *
 * Contains the markup for the proceed to checkout button on the cart.
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/cart/proceed-to-checkout-button.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see     https://docs.woocommerce.com/document/template-structure/
 * @author  WooThemes
 * @package WooCommerce/Templates
 * @version 2.4.0
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly
}
?>
<script>		
var loggin=<?php echo (is_user_logged_in()? 'true': 'false'); ?>;
	function process (){
		
		if( loggin == false)
		{
			alert("شما وارد سایت نشده اید .\n از منوی بالای سایت می توانید وارد سایت شوید . \n  اگر کاربری ندارید می توانید از دکمه ثبت نام استفاده کنید.");
		}
		else
		{
			document.location="<?php echo esc_url( wc_get_checkout_url() ) ;?>";
		}
	}
</script>

<a href="javascript:void(0)" onclick="process()" class="btn btn-primary checkout-button button alt wc-forward">
	<?php echo __( 'تکمیل خرید', 'woocommerce' ); ?>
</a>
