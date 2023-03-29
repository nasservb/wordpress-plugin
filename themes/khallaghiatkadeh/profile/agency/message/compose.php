<?php ?>
	<div class="content-title"><h1>
		<a href="?dir=message&p=index">پیام های دریافتی</a> 
		<a href="?dir=message&p=sent">پیام های ارسالی</a>
		<span class="title">ارسال پیام</span>
	</h1></div>
	<div class="row">
	
	<?php
	if (empty($_POST))
	{
		?>
	 <form method="POST" >
		<div class="message-frame">
			<div class="col-sm-9 message-box">
			<div class="well">
				<span class="title">
				عنوان پیام :</span>
				
				<span id="titlediv">
					<span id="title"> 
						<input type="text" style="width:80%" class="combo-box" name="title" />
					</span>	
				</span>	
			</div>
			<div class="well">
				<span class="title">ارسال به  :</span>
				<select id="message_to" name="message_to" style="width:80%" class="combo-box" onchange="changeUser()">
				 
			<?php 
				$users =get_users(array('role__in'=>array('teacher','admin','user','parent'))); 
				$to = (isset($_REQUEST['to'])? sanitize_text_field($_REQUEST['to']) : ''  );
				
				foreach ( $users as $user ) {
					echo '<option value="'. $user->ID.'"  '.
						( ($to != '' && $to == $user->ID) ? 'selected' : ''  )
						.' >'  . $user->first_name. ' ' . $user->last_name  . "\t".
						($user->has_cap('teacher')? 'مربی' : 'مسئول' ).' </option>';
				} 
			?>
				
			</select>
			 
			</div>
			<p>
				<?php 
				wp_editor('','content', array('media_buttons'=>false,'teeny'=>true));
				  
				?>
			</p>	
			</div>
			<div class="col-sm-2 author">
				 
				<div>زمان ارسال :</div>
				<div><?php 
				
				$_y=array('%s','%s','%s','%d');
				$date=sprintf("%04s-%02s-%02s",
									ztjalali_english_num(jdate('Y')),
									ztjalali_english_num(jdate('n')),
									ztjalali_english_num(jdate('j'))); 
				echo $date; ?></div>
			</div>
		</div> 
		
	<div class="col-sm-12 pager">
		<input type="submit" value="ارسال پیام" name="btn" class="btn btn-register" style="width: 200px;" />
	</div>
	</form>
	<?php 
	}
	else 
	{
		$id = get_current_user_id();
		$my_post = array(
			'post_title'    => sanitize_text_field($_POST['title']),
			'post_content'  => sanitize_text_field($_POST['content']),
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

	