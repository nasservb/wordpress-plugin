<div class="col-sm-11 pull-right">
    <div class="content-title"><h1>
            <span class="title">دوره های پیشنهادی</span>
            <a href="?dir=course&amp;p=passed">دوره های خریده شد</a>
            <a href="?dir=course&amp;p=transactions">لیست تراکنش ها  </a> 
        </h1></div>
    <div class="row"> 
	<?php 
	$id = get_current_user_id();
	$paged = ( get_query_var( 'paged' ) ) ? get_query_var( 'paged' ) : 1;
	 
	$the_query = new WP_Query(
		array(
			'post_type' => 'product' , 			
			'product_cat' => 'parent-course',
			'orderby'   => 'ID',
			'order'     => 'DESC',
			'posts_per_page' => 5,
			'paged' =>$paged 
		)  
	);
	if ( $the_query->have_posts()) :
		while ( $the_query->have_posts() ) : $the_query->the_post();
		
		$teacher_id =get_post_meta( $the_query->post->ID, '_teacher_id', true );
		$teacher='';
		if(intval($teacher_id)>0 )
		{
			$teacher_account = get_userdata($teacher_id); 
			$teacher = ($teacher_account->last_name == '' ? $teacher_account->display_name : $teacher_account->first_name .' '.$teacher_account->last_name ) ; 			
		}
		
		?>
		
		<div class="course-box">			 
			<div class="col-sm-9 course-inner">
				<div class="course-title">
				عنوان دوره : <span style="color:#656565;padding-left:30px"  ><?php the_title() ?></span> 
				تاریخ افزودن دوره : <span style="color:#656565"  ><?php the_date('Y-m-d') ?></span> 
				<?php echo ($teacher_id > 0 ? '<br> مربی  : <span style="color:#656565"  >'.$teacher.'</span> ':'' ) ?>
				</div>
				<p>
				<?php 
				//***** echo the abstract of product ****
				echo  $the_query->post->post_excerpt ;
				 
				//***** echo the first paragraph of post content****
				// $str = wpautop( get_the_content() );
				// $str = substr( $str, 0, strpos( $str, '</p>' ) + 4 );
				// $str = strip_tags($str, '<a><strong><em>');
				// echo $str ;
				
				?>
				</p> 
			</div>
			
			<div class="col-sm-3 author">
				<?php $image = wp_get_attachment_image_src( get_post_thumbnail_id( $the_query->post->ID ), 'single-post-thumbnail' );?>

				<img class="img-thumbnail" style="max-height: 100px" src="<?php  echo $image[0]; ?>" data-id="<?php echo $the_query->post->ID; ?>"/>
				<div >

				<div> 
					<?php 
					$_product = wc_get_product(  $the_query->post->ID );	
					if($_product->get_price()>0 )
						echo 'قیمت :'.number_format(intval( $_product->get_price())).'ریال '  ;
					else 
						echo 'به زودی';
					?>
				</div>
				</div>
				<?php 
					$_product = wc_get_product(  $the_query->post->ID );
					echo '<a href="?dir=course&amp;p=viewOrder&amp;pid='. $the_query->post->ID .'" class="btn btn-success pull-left" style="margin-left: 10px;">';
					if($_product->get_price()>0 )
						echo 'خرید این دوره' ;
					else 
						echo 'مشاهده اطلاعات' ;
					?></a>
				
			</div>
		</div>
		
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