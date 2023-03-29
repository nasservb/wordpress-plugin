<?php
/*!
 * Template Name: صفحه استان ها
 * Theme URI: http://Khalaghiatkadeh.com
 * Author: nasser niazy mobasser
 * Author URI: http://niazy.ir/
 * Design: Nov 11, 2016 
 * Copyright: abrezendegi.ir all right reserved.
 */ 
 
	global $wpdb ; 
	$ostan_id = (isset($_REQUEST['id']) ? $_REQUEST['id'] : 0  ) ;
	$username = (isset($_REQUEST['username']) ? $_REQUEST['username'] : ''  ) ;
	$usermail = (isset($_REQUEST['usermail']) ? $_REQUEST['usermail'] : ''  ) ;
	$usermelli = (isset($_REQUEST['sendMessage']) ? $_REQUEST['sendMessage'] : ''  ) ;
	
	$query = $wpdb->get_results('select * from shahr where ostan_id= ' . intval($ostan_id) );
	 
	if ( !empty($query)) 
	{
		foreach ($query as $shahr) 
		{
			echo '<option value="'.$shahr->id.'">'.$shahr->name . '</option>';
		}
	}
	else if($usermelli != '' )
	{
		$the_query = new WP_User_Query(
			array(
				'meta_query'=> array(
									array(
										'key'    => 'melli',
										'value'  => $usermelli,								
										'compare'=>'='
										)
									),
				'role' 		=> 'user', 
				'fields' 	=> 'all' 
			)  
		);
		
		$childs = $the_query->get_results();
	
		if ( !empty($childs) && count($childs)== 1 ) 
		{
			
			if(!isset($_SESSION['use_sms']))
			{
				session_start();
				$_SESSION['use_sms']=0;
			}
			
			if(!isset($_SESSION['use_sms']) || intval($_SESSION['use_sms'])<3 ) 
			{
				include 'profile/lib/sms/SendSMS.php';
				
				$to = get_user_meta($childs[0]->ID, 'mobile', true ); 
				
				$pass = rand(1000,9999);
				wp_set_password(  $pass  ,$childs[0]->ID) ;
				
				$message = "با سلام\nرمزعبور جدید شما در سایت خلاقیتکده :\n" .$pass ."\khallaghiatkadeh.ir"; 
				
				$res= sendSms($to, $message) ;
			
				$_SESSION['use_sms'] =intval($_SESSION['use_sms']) + 1 ; 
				echo $res;
			}
			else
			{
				echo -2; 
			}				
			return ; 
		}
		else 
		{
			echo 0 ; 
			return ; 
		}
	
	}
	else if($usermail != '' )
	{
		add_post_meta(1,'_news_later',$usermail); 
		echo 1 ; 
		return; 
	}
	else if($username != '' )
	{
		if(username_exists($username))
		{
			echo 1; 
			return ; 
		}
		else 
		{
			echo 2; 
			return ; 
		}
	}
	else 
	{
		echo  '<option></option>' ;
	} 
	
wp_reset_postdata(); 
?>