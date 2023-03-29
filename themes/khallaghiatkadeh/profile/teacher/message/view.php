<?php 
	
	$post_id = (isset($_REQUEST['id'])? sanitize_text_field($_REQUEST['id']) : ''  );
	
	$id = get_current_user_id();
	
	$post = get_post($post_id); 
	
	
	
	$participants = get_post_meta( $post->ID, '_participants' );		
	
	if ($post->post_author != $id &&  !array_search( $id , $participants ) )
	{
		// message is not for you
	} 
?>
	<div class="content-title"><h1>
		<a href="?dir=message&p=index">پیام های دریافتی</a> 
		<a href="?dir=message&p=sent">پیام های ارسالی</a>
		<a href="?dir=message&p=compose">ارسال پیام</a>
		 
	</h1></div>
	<div class="row">
	
	<?php
	
	 
	 
	$current = $post ; 
	for ($i=0 ; $i<=20 ; $i++ )
	{
		$user_id = $current->post_author ;
		$profile = '';
		$profile =  get_user_meta( $user_id, 'profile_picture', true ) ;  
		
		
		$user=get_userdata($user_id);		
		echo '
		<div class="message-frame">
			<div class="col-sm-8 message-box '.($current->post_author == $id ? 'pull-right my-msg':' user-msg' ).'">
			<h1><span class="title">'. $current->post_title .'</span></h1>
			<p>	';  
		echo $current->post_content  ;
		
		echo '</p>	
			</div>
			<div class="col-sm-2 author '.($current->post_author == $id ? 'pull-right':'' ).'">
				<img class="img-'.$user->roles[0].' img-circle" '.($profile==''? '' : 'src="'.$profile.'" ' ).' />
				<div class="title">'.
				($current->post_author == $id ? 'شما':  				
					'<a href="'. get_edit_user_link( $current->post_author ) .'" target="_blank">'. esc_attr( get_user_nicename( $current->post_author , 'display_name', 'ID' ) ) .'</a>'
				).'
				</div>
				<div dir="ltr">'.  get_the_date('Y/m/d',$current->ID) .' - ' .get_the_time('H:i:s', $current->ID ) . '</div>
			</div>
		</div>
		';
		if($current->post_parent != 0)
		{				
			$current =get_post( $current->post_parent);				
		}
		else 
		{
			break;
		}
	}
	 
	
	if (empty($_POST))
	{
		?>
	 <form method="POST" >
		<div class="message-frame">
			<div class="col-sm-9 message-box">
				<h1><span class="title">ارسال پاسخ</span></h1>
				<input type="hidden" name="title" value="پاسخ به <?php echo $post->post_title; ?>" />
				<input type="hidden" name="message_to" value="<?php echo $post->post_author; ?>" />
				<input type="hidden" name="parent" value="<?php echo $post->ID; ?>" />
			
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
		<input type="submit" value="ارسال پاسخ" name="btn" class="btn btn-register" style="width: 200px;">
	</div>
	</form>
	<?php 
	}
	else 
	{
		
		$my_post = array(
			'post_title'    => sanitize_text_field($_POST['title']),
			'post_content'  => sanitize_text_field($_POST['content']),
			'post_parent'  => sanitize_text_field($_POST['parent']),
			'post_status'   => 'publish',
			'post_type'   	=> 'message',
			'post_author'   => $id, 
			'meta_input' 	=> array(
							'_participants' =>sanitize_text_field( $_POST['message_to'] ) )
			
		);
		  
		 wp_insert_post( $my_post ,false );
		
		echo ( '<div class="message-frame">
			<div class="col-sm-9 alert alert-info">
			<h1><span class="title">پیام با موفقیت ذخیره شد  . </span></h1>
			</div></div>' );
	}
	?>
	
	</div>
	