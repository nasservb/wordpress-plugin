<?php 
	
	$order_id = (isset($_REQUEST['id'])? sanitize_text_field($_REQUEST['id']) : 0  );
	
	$id = get_current_user_id();
	$order = wc_get_order( $order_id);

	
	$order_item = $order->get_items();

	$product_id = 0; 
	
	foreach( $order_item as $product ) {				
		if(intval($product['item_meta']['_product_id'][0])>10 )
		{					
			$product_id = intval($product['item_meta']['_product_id'][0]) ; 
			break;
		}
	}
		
   
	$product = wc_get_product($product_id); 
		
	$post = $product->post ; 
					
	 			
	
?>
	<div class="col-sm-12 pull-right">
		<div class="content-title"><h1>
            <span class="title"></span>
            <a href="?dir=course&amp;">دوره های پیشنهادی </a>
            <a href="?dir=course&amp;p=passed">دوره های خریده شده</a>
            <a href="?dir=course&amp;p=transactions">لیست تراکنش ها  </a> 
        </h1></div>
    <div class="row">  
			<div class="message-frame">
				<div class="col-sm-8 well ">
					<h1><span class="title"><?php echo $post->post_title ?></span></h1>
					<p><?php 	
							echo $post->post_content  ;
						?></p>	
				</div>
				<div class="col-sm-3 author">
					<?php $image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'single-post-thumbnail' );?>

					<img class="img-circle" src="<?php  echo $image[0]; ?>" data-id="<?php echo $post->ID; ?>"/> 
					<div class="title">
						
						<div dir="ltr">تاریخ  : 
							<?php  
							echo get_the_date('Y/m/d',$order_id).' - '. get_the_time('H:i:s',$order_id); 					
							?>
						</div>
					</div>
				</div>
			</div>
			
	
	</div>
	