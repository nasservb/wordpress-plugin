<?php
/*!
 * Template Name: صفحه ثبت نام 
 * Theme URI: http://Khalaghiatkadeh.com
 * Author: nasser niazy mobasser
 * Author URI: http://niazy.ir/
 * Design: Nov 11, 2016 
 * Copyright: abrezendegi.ir all right reserved.
 */ 
 
	global $wpdb ; 
	$scope = (isset($_REQUEST['scope']) ? $_REQUEST['scope'] : ''  ) ;
	 
	 
	if ( !empty($scope)) 
	{
		
			var_dump($_POST);
		$result = '' ;
		
		if($_POST['name'] == '' || $_POST['family'] == '' )
		{					
			$result = "نام و نام خانوادگی باید وارد شوند \n"; 
			
		}
		
		if($result =='' &&  $_POST['user_email'] != '' && !username_exists($_POST['user_email']))
		{					
			$result .= "کد ملی قبلآ در سایت ثبت نام شده است . اگر رمز عبور خود را فراموش کرده اید از بخش فراموشی رمز استفاده کنید . \n"; 
			
			
		}	
		
		if($_POST['user_email'] == '' )
		{					
			$_POST['user_email']='fake.'. rand(1,10000).'@gmail.com' ; 
			if(username_exists($_POST['user_email']))
				$_POST['user_email']='fake.'. rand(1,1000000).'@gmail.com' ; 
		}				
			 
		
		if($result =='' && ($_POST['melli'] == '' ||  intval($_POST['melli'])< 100000000 ) )
		{					
			$result += " کد ملی باید وارد شود \n"; 
		}
		
		if($result =='' && ($_POST['pass'] == '' ||  strlen($_POST['pass'])< 5 ) )
		{					
			$result +=  " رمز عبور باید وارد شود و حداقل 5 حرف باشد. \n"; 
		}		
		 
		
		if($result =='' && ($_POST['pass'] !=  $_POST['confirm_pass'])   )
		{			
			 $result += " رمز عبور و تکرار رمز باید همسان باشند . \n"; 
		}
		
		$query = $wpdb->get_results('select * from shahr where ostan_id= ' . intval($ostan_id) );
	
		if($result!= '')
		{
			echo $result; 
			return $result;			
		}
		else 
		{
			$user_name = $_POST['melli'];
			$user_email = $_POST['user_email']; 
			$password = $_POST['pass']; 
			
			$user_id = wp_create_user( $user_name, $password, $user_email );
			if ( !$user_id || !username_exists($user_email) ) { 
				echo 'متاسفانه نمی توان با اطلاعات وارد شده ثبت نام کرد . لطفآ دوباره تلاش کنید یا از صفحه تماس با ما به شرکت اطلاع دهید . '; 
				//mail('nasservb@gmail.com','error in register',var_dump($_POST));
				return $result;	
			} 
			else 
			{
				if(isset($_POST['registerStudent']))
				{
					add_user_meta( $user_id, 'parent_melli'		,'',true); 
					add_user_meta( $user_id, 'parent_relation'	,'',true); 
					add_user_meta( $user_id, 'birthdate'		,'',true); 
					
					update_user_meta( $user_id, 'parent_melli'		,sanitize_text_field( $_POST['parent_melli']  )); 
					update_user_meta( $user_id, 'parent_relation'	,sanitize_text_field( $_POST['parent_relation']  )); 
					update_user_meta( $user_id, 'birthdate'			,sanitize_text_field( $_POST['birthdate'])); 
									
					
					$user->set_role('user') ; 
					
				}
				elseif(isset($_POST['registerParent']))
				{
					$user->set_role('parent') ; 
				}
				else 
				{ 
					$user->set_role('teacher') ; 
				}
				
				add_user_meta( $user_id, 'phone'	,'',true);
				add_user_meta( $user_id, 'mobile'	,'',true); 
				add_user_meta( $user_id, 'melli'	,'',true); 
				add_user_meta( $user_id, 'mail'		,'',true); 
				add_user_meta( $user_id, 'state'	,'',true); 
				add_user_meta( $user_id, 'city'		,'',true); 			
				
				update_user_meta( $user_id, 'phone'		,sanitize_text_field( $_POST['phone'] )); 
				update_user_meta( $user_id, 'mobile'	,sanitize_text_field( $_POST['mobile']  )); 
				update_user_meta( $user_id, 'melli'		,sanitize_text_field( $_POST['melli']  )); 
				update_user_meta( $user_id, 'mail'		,sanitize_text_field( $_POST['user_email']  )); 
				update_user_meta( $user_id, 'state'		,sanitize_text_field( $_POST['state']  )); 
				update_user_meta( $user_id, 'city'		,sanitize_text_field( $_POST['city']  )); 
				update_user_meta( $user_id, 'first_name',sanitize_text_field( $_POST['name']  )); 
				update_user_meta( $user_id, 'last_name'	,sanitize_text_field( $_POST['family']  )); 
			
				//user_login
				// wp_update_user( array( 'ID' => $user_id, 'user_login' => sanitize_text_field( $_POST['melli']  )) );
			}
		}
	
	}
	
	
wp_reset_postdata(); 
?>