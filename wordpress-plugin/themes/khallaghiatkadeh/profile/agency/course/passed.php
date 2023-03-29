<div class="col-sm-12 pull-right">
    <div class="content-title"><h1>
            <a href="?dir=course&amp;p=index">دوره های پیشنهادی</a>
            <span class="title">دوره های خریده شده</span> 
            <a href="?dir=course&amp;p=transactions">لیست تراکنش ها  </a> 
        </h1></div>
    <div class="row"> 
	<?php 
	$id = get_current_user_id();
	
	$the_query = new WP_Query(
		array(
			'post_type' => wc_get_order_types() , 
			//'post_status' => array_keys( wc_get_order_statuses() ),			
			'post_status' => array( 
							//0=> "wc-pending" 	,
							//1=> "wc-processing", 
							//2=> "wc-on-hold"   
							0=> "wc-completed" 
							//4=> "wc-cancelled" //-------------2
							//5=> "wc-refunded"  
							//6=> "wc-failed"    
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
			'posts_per_page' => 5,
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
		$teacher_id =get_post_meta( $course->post->ID, '_teacher_id', true );
		$teacher='';
		if(intval($teacher_id)>0 )
		{
			$teacher_account = get_userdata($teacher_id); 
			$teacher = ($teacher_account->last_name == '' ? $teacher_account->display_name : $teacher_account->first_name .' '.$teacher_account->last_name ) ;	
		}
		?>
		<a href="?dir=course&p=view&id=<?php echo $product_id ; ?>">
			<div class="course-box">				 
				<div class="col-sm-9 course-inner">
					<div class="course-title">
					عنوان دوره : <span style="color:#656565;padding-left:30px"  ><?php echo $course->post->post_title; ?></span> 
				تاریخ خرید دوره : <span style="color:#656565"  ><?php get_the_date('Y-m-d',$order->id) ?></span> 
				<?php echo ($teacher_id > 0 ? '<br> مربی  : <span style="color:#656565"  >'.$teacher.'</span> ':'' ) ?>
				
				</div>
				<p>
					<?php 
					//***** echo the abstract of product ****
					echo  $course->post->post_excerpt ;
					 
					//***** echo the first paragraph of post content****
					// $str = wpautop( get_the_content() );
					// $str = substr( $str, 0, strpos( $str, '</p>' ) + 4 );
					// $str = strip_tags($str, '<a><strong><em>');
					// echo $str ;
					
					?>
				</p>	
					<a href="?dir=course&p=certificate&id=<?php echo $product->id ?>" class="btn btn-default">نمایش گواهی</a> 
				<a href="?dir=course&p=answersheet&id=<?php echo $product->id ?>" class="btn btn-default">نمایش کارنامه</a> 
				</div>
				<div class="col-sm-3 author">
					<?php $image = wp_get_attachment_image_src( get_post_thumbnail_id( $course->post->ID ), 'single-post-thumbnail' );?>

					<img class="img-circle" src="<?php  echo $image[0]; ?>" data-id="<?php echo $course->post->ID; ?>"/>
					<div class="title">
						<div>تاریخ دوره :					 
						<?php echo  get_the_date() ?> 						
						</div>
					</div>
				</div>
			</div>
		</a>
	<?php 	

		endwhile;
	
	else :
		echo ( '<div class="message-frame">
			<div class="col-sm-9 message-box">
			<h1><span class="title">دوره ای یافت نشد . </span></h1>
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