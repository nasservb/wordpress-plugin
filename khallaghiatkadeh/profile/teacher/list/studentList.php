<div class="col-sm-12 pull-right">
    <div class="content-title">
		<h1>
			<span class="title">لیست دوره ها</span>   
        </h1>
	</div>
    <div class="row"> 
	<?php 
	$id = get_current_user_id();
	$product_id = (isset($_REQUEST['pid'])? sanitize_text_field($_REQUEST['pid']) : ''  );
	
	$paged = ( get_query_var( 'paged' ) ) ? get_query_var( 'paged' ) : 1;
	 
	$melli = get_user_meta( $id, 'melli', true );
	

	
	$the_query = new WP_Query(
		array(
			'post_type' => wc_get_order_types() , 			
			'post_status' => array(   
							0=> "wc-completed"  
						),			
			'orderby'   => 'ID',
			'order'     => 'DESC',	
			'meta_query'=> array(
								array(
									'key'    => '_course_id',
									'value'  => $product_id,								
									'compare'=>'='
									)
								),
			'posts_per_page' => 5,
			'paged' =>$paged 
		)  
	); 
	
	
	$the_query->get_results();
	 
	 
	 
	 
	if ( $the_query->have_posts()) :
		while ( $the_query->have_posts() ) 
		{
			$the_query->the_post();
		
			$customer_id = get_post_meta($the_query->post->ID,'_customer_user',true);
			 
			$child=get_userdata($customer_id);
			  
			$profile_picture = '';
			$profile_picture =  get_user_meta(  $child->ID, 'profile_picture', true ) ;  
			 
		?>
		 
		<div class="col-sm-3 author">
				<img <?php echo ($profile_picture==''? '' : ' src="'.$profile_picture.'" ' ) ;  ?> class="img-student img-circle" />
				<div class="title">
					<?php echo $child->first_name . ' ' .  $child->last_name; ?><br>
  			<a class="btn btn-default" href="?dir=list&p=viewChild&id=<?php echo $child->ID; ?>">پروفایل</a>
			<?php 
			$parent_melli = get_user_meta( $child->ID, 'parent_melli', true );
			 
			 if(intval($parent_melli)>1000000  ) 
			 {
				 
				$child_parent = new WP_User_Query(
				array(
						'meta_query'=> array(
											array(
												'key'    => 'melli',
												'value'  => $parent_melli,								
												'compare'=>'='
												)
											),
						'role' 		=> 'parent', 
						'fields' 	=> 'all',	
						'posts_per_page' => 5, 
					)  
				);
					 
				$parents = $child_parent->get_results();	 
				if(count($parents )>0 )
				{
					echo '<a class="btn btn-default" href="?dir=message&p=compose&to='. $parents[0]->ID .'">ارسال پیام به والدین</a>';
				}
			}
	
			?>
			
			
			<a class="btn btn-default" href="?dir=message&p=compose&to=<?php echo $child->ID; ?>">ارسال پیام</a>	
			
		</div>
		</div>
	<?php
		}
	
	else :
		echo ( '<div class="message-frame">
			<div class="col-sm-9 message-box">
			<h1><span class="title">هنوز هیچ فردی در این دوره ثبت نام نکرده است .  </span></h1>
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