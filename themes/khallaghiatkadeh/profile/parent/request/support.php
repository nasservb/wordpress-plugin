<?php 
	
	 
	$cuser_id = (get_current_user_id());
	
	$arg = array( 
				'post_type' => 'support' , 
				'meta_query' => array(
						'relation' => 'OR',
						array(
								'key'   => '_from',
								'value' => $cuser_id,
								'compare'=>'='
						),
						array(
								'key'   => '_to',
								'value' => $cuser_id,
								'compare'=>'='
						),
				
			),
			'orderby'   => 'ID',
			'order'     => 'DESC',
			'posts_per_page' => 5,
			'paged' =>$paged 
		);  
		
	$the_query = new WP_Query($arg);
	 
	
	
?>
	<div class="content-title"><h1> 
		<a href="?dir=request&p=index">مشاوره</a> 
		<span class="title">پشتیبانی فنی</span>
		
	</h1></div>
	<div class="row">
	
	<?php
	  
	 if ( $the_query->have_posts()) 
	 {
		
		while ( $the_query->have_posts() ) 
		{
			$the_query->the_post();
			 
			$user_id = intval($the_query->post->post_author) ;
			
			$profile = '';
			$profile =  get_user_meta( $user_id, 'profile_picture', true ) ;  
			
			$user=get_userdata($user_id);		
			echo '
			<div class="message-frame">
				<div class="col-sm-8 message-box '.($user_id == $cuser_id ? 'pull-right my-msg':' user-msg' ).'">
				<h1><span class="title">'. $the_query->post->post_title .'</span></h1>
				<p>	';  
			echo $the_query->post->post_content  ;
		
		echo '</p>	
			</div>
			<div class="col-sm-2 author '.($user_id == $cuser_id ? 'pull-right':'' ).'">
				<img class="img-'.$user->roles[0].' img-circle" '.($profile==''? '' : 'src="'.$profile.'" ' ).' />
				<div class="title">'.
				($user_id == $cuser_id ? 'شما':  				
					'<a href="'. get_edit_user_link( $user_id ) .'" target="_blank">'. esc_attr( get_user_nicename( $user_id , 'display_name', 'ID' ) ) .'</a>'
				).'
				</div>
				<div dir="ltr">'.  get_the_date('Y/m/d',$the_query->post->ID) .' - ' .get_the_time('H:i:s', $the_query->post->ID ) . '</div>
			</div>
		</div>
		';
		}
		
	}
	 
	
	if (empty($_POST))
	{
		?>
	 <form method="POST" >
		<div class="message-frame">
			<div class="col-sm-9 message-box">
				<h1><span class="title">ارسال درخواست پشتیبانی</span></h1><br>
				عنوان : <input type="text" class="form-control" value="" name="title" /><br>
				<p>
					<?php 
					wp_editor('','content', array('media_buttons'=>false,'teeny'=>true));
					 
					?>
				</p>	
			</div>
			<div class="col-sm-2 author">				 
				
			</div>
		</div> 
		
	<div class="col-sm-12 pager">
		<input type="submit" value="ارسال درخواست" name="btn" class="btn btn-register" style="width: 200px;">
	</div>
	</form>
	<?php 
	}
	else 
	{
		
		$my_post = array(
			'post_title'    => sanitize_text_field($_POST['title']),
			'post_content'  => sanitize_text_field($_POST['content']),
			'post_parent'   => 0,
			'post_status'   => 'publish',
			'post_type'   	=> 'support',
			'post_author'   => $cuser_id, 
			'meta_input' 	=> array('_from' =>  $cuser_id	)
			
		);
		  
		 wp_insert_post( $my_post ,false );
		
		echo ( '<div class="message-frame">
			<div class="col-sm-9 alert alert-info">
			<h1><span class="title">پیام با موفقیت ذخیره شد  . </span></h1>
			</div></div>' );
	}
	?>
	
	</div>
	