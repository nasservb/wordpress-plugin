<?php ?>
	<div class="content-title"><h1>
		<span class="title">پیام های دریافتی</span>
		<a href="?dir=message&p=sent">پیام های ارسالی</a>
		<a href="?dir=message&p=compose">ارسال پیام</a>
	</h1></div>
	<div class="row">
	<?php 
	$id = get_current_user_id();
	$paged = ( get_query_var( 'paged' ) ) ? get_query_var( 'paged' ) : 1;
	
	$arg = array(
			'post_type' => 'message' , 
			'meta_query' => array(
								array(
									'key'   => '_participants',
									'value' => $id,
									'compare'=>'='
							)
						),
			'orderby'   => 'ID',
			'order'     => 'DESC',
			'posts_per_page' => 5,
			'paged' =>$paged 
		);  
		
	$the_query = new WP_Query($arg);
	 
	if ( $the_query->have_posts()) :
		while ( $the_query->have_posts() ) : $the_query->the_post();
		
		$user_id = get_the_author_meta('ID') ;
		$profile = '';
		$profile =  get_user_meta( $user_id, 'profile_picture', true ) ;  
		
		
		$user=get_userdata($user_id);
		?>
		
		<div class="message-frame">
			<a href="?dir=message&p=view&id=<?php the_id() ?>">
				<div class="col-sm-9 message-box">
					<h5> <?php the_title() ?> </h5>
				<p>
					<?php 
					$str = wpautop( get_the_content() );
					$str = substr( $str, 0, strpos( $str, '</p>' ) + 4 );
					$str = strip_tags($str, '<a><strong><em>');
					echo $str ;
					
					?>
				</p>	
				</div>
			</a>	
			<div class="col-sm-2 author">
				<div class="col-sm-6">
					<a href="<?php echo get_edit_user_link( get_the_author_meta('ID')  ) ?>" target="_blank">
						<img class="img-<?php echo $user->roles[0]; ?> img-circle" <?php echo($profile==''? '' : 'src="'.$profile.'" ' );?> />
					</a>
				</div>
				<div class="col-sm-6">	
					<div class="title">از <a href="<?php echo get_edit_user_link( get_the_author_meta('ID')  ) ?>" target="_blank">
					<?php echo esc_attr( get_user_nicename( get_the_author_meta('ID')  , 'display_name', 'ID' ) ) ?></a></div>
					<div><?php echo  get_the_date('Y/m/d').' - ' .get_the_time('H:i:s' ); ?></div>
				
				</div>
			</div>
		</div>
		
		
	<?php 	

		endwhile;
	
	else :
		echo ( '<div class="message-frame">
			<div class="col-sm-9 message-box">
			<h1><span class="title">پیامی یافت نشد . </span></h1>
			</div></div>' );
	endif;
	
			
	?>
	<div class="col-sm-12 pager">
	<?php
		// get_next_posts_link() usage with max_num_pages
		echo get_next_posts_link( '<div class="btn btn-default">❮ پیام های قدیمی تر </div>', $the_query->max_num_pages );
		echo get_previous_posts_link( '<div class="btn btn-default">پیام های جدید   ❯</div>' );
		?>
	</div>
<?php 
// clean up after our query
wp_reset_postdata(); 
?>
		
		
	</div>
	