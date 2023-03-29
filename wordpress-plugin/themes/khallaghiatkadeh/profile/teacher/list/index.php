<div class="col-sm-12 pull-right">
    <div class="content-title">
		<h1> 
			<a href="?dir=list&p=index">لیست دوره ها</a> 
        </h1>
	</div>
	<div class="row"> 
	<?php 
	$id = get_current_user_id();
	$paged = ( get_query_var( 'paged' ) ) ? get_query_var( 'paged' ) : 1;
	 
	 $the_query = new WP_Query(
		array(
			'post_type' => 'product' , 			
			 'meta_query'=> array(
								array(
									'key'    => '_teacher_id',
									'value'  => $id,								
									'compare'=>'='
									)
								),
			'orderby'   => 'ID',
			'order'     => 'DESC',
			'posts_per_page' => 5,
			'paged' =>$paged 
		)  
	);
	if ( $the_query->have_posts()) :
		while ( $the_query->have_posts() ) : $the_query->the_post();
		
		 
		?>
		
		<div class="course-box">			 
			<div class="col-sm-9 course-inner">
				<div class="course-title">
				عنوان دوره : <span style="color:#656565;padding-left:30px"  ><?php the_title() ?></span> 
				تاریخ افزودن دوره : <span style="color:#656565"  ><?php the_date('Y-m-d') ?></span>  
				</div>
				<p>
				<?php 
				//***** echo the abstract of product ****
				echo  $the_query->post->post_excerpt ;				 
				
				?>
				</p> 
			</div>
			
			<div class="col-sm-3 author">
				<?php $image = wp_get_attachment_image_src( get_post_thumbnail_id( $the_query->post->ID ), 'single-post-thumbnail' );?>

				<img class="img-thumbnail" style="max-height: 100px" src="<?php  echo $image[0]; ?>" data-id="<?php echo $the_query->post->ID; ?>"/>
			
				<a href="?dir=list&p=studentList&pid=<?= $the_query->post->ID ?>" class="btn btn-success pull-left" style="margin-left: 10px;">لیست نواندیشان دوره</a>
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