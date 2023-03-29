<style>
	.list-group-item-info{
		height:42px;
	}
</style>

<div class="col-sm-12 pull-right">
    <div class="content-title"><h1>
            <a href="?dir=course&amp;p=index">دوره های پیشنهادی</a>
            <a href="?dir=course&amp;p=passed">دوره های خریده شده</a>  
            <span class="title">لیست تراکنش ها</span> 
        </h1></div>
    <div class="row"> 
	<ul class="list-group">
	<?php 
	$id = get_current_user_id();
	
	$the_query = new WP_Query(
		array(
			'post_type' => wc_get_order_types() , 			
			'post_status' => array( 
							0=> "wc-pending" ,
							1=> "wc-processing", 
							2=> "wc-on-hold"   ,
							3=> "wc-completed" ,
							4=> "wc-cancelled" ,
							5=> "wc-refunded" , 
							6=> "wc-failed"    
						),			
			'orderby'   => 'ID',
			'order'     => 'DESC',	
			'meta_query'=> array(
								array(
									'key'    => '_customer_user',
									'value'  => get_current_user_id(),								
									'compare'=>'='
									)
								),
			'posts_per_page' => 10,
			'paged' =>$paged 
		)  
	); 
	
	// $product = wc_get_product(128);

	// wc_get_order(136)->add_product($product, 1);

	
	if ( $the_query->have_posts()) :
		while ( $the_query->have_posts() ) : $the_query->the_post();
		
		$order = wc_get_order( $the_query->post->ID);

       
        $order_item = $order->get_items();

		$product_id = 0; 
		
        foreach( $order_item as $product ) {				
			if(intval($product['item_meta']['_product_id'][0])>10 )
			{					
				$product_id = intval($product['item_meta']['_product_id'][0]) ; 
				break;
			}
        }
			
       
		$course = wc_get_product($product_id); 
		
		?>
		
			<a href="?dir=course&p=viewTransactions&id=<?php echo $order->id; ?>">
			<li class="list-group-item list-group-item-<?php
			if('processing' == $order->status || 'refunded' == $order->status)
			{
				echo 'warning';
			}
			elseif('pending' == $order->status || 'on-hold' == $order->status)
			{
				echo 'info';
			}
			elseif('completed' == $order->status)
			{
				echo 'success';
			}
			elseif('failed' == $order->status || 'cancelled' == $order->status)
			{
				echo 'danger';
			}
			
			?>"><?php echo '<span class="span4 pull-left" dir="ltr">'.get_the_date('Y/m/d').' - '.get_the_time('H:i:s') . '</span>'. $course->post->post_title .'<span class="span4 pull-right">' ; 
			
			
			if('processing' == $order->status  )
			{
				echo 'در حال انجام';
			}
			elseif('pending' == $order->status  )
			{
				echo 'در انتظار';
			}
			elseif(  'on-hold' == $order->status)
			{
				echo 'منتظر';
			}
			elseif( 'refunded' == $order->status)
			{
				echo 'پس گرفته';
			}
			elseif('completed' == $order->status)
			{
				echo 'موفق';
			}
			elseif('failed' == $order->status )
			{
				echo 'ناموفق';
			}
			elseif( 'cancelled' == $order->status)
			{
				echo 'انصراف';
			}
			
			echo '</span>';
			
			?></li>
			</a>			
		
	<?php 	

		endwhile;
		echo '</ul>';
	else :
		echo ( '<div class="message-frame">
			<div class="col-sm-9 message-box">
			<h1><span class="title">تراکنشی یافت نشد . </span></h1>
			</div></div>' );
	endif;
			
	?>
	
	<div class="col-sm-12 pager">
	<?php
		// get_next_posts_link() usage with max_num_pages
		echo get_next_posts_link( '<div class="btn btn-default">❮ صفحه ی قبلی</div>', $the_query->max_num_pages );
		echo get_previous_posts_link( '<div class="btn btn-default">صفحه جدید   ❯</div>' );
		?>
	</div>
<?php 
// clean up after our query
wp_reset_postdata(); 
?>

    </div>
</div>