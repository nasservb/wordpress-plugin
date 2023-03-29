<?php 
	
	add_action('woocommerce_add_to_cart', 'custome_add_to_cart');
	function custome_add_to_cart() 
	{
		
		global $woocommerce;
		echo('<script>document.location="'. site_url().'/cart";'.'</script>' );
	}
?>