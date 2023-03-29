<?php 
	
	 
	function ajax_login()
	{ 
		global $wpdb ; 
		$scope = (isset($_REQUEST['log']) ? $_REQUEST['log'] : ''  ) ;		  
		 
		if (  $scope !='') 
		{
			$result = '' ;
			
			if($_POST['log'] == '' || $_POST['pwd'] == '' )
			{					
				$result = "نام کاربری یا رمز صحیح وارد نشده اند\n"; 
				
			}
			
			$username = $_POST['log'] ; 
			
			if($result == '' && !username_exists($_POST['log']) )
			{
				if ($result != '')
				{
					$the_query = new WP_User_Query(
						array(
							'meta_query'=> array(
												array(
													'key'    => 'melli',
													'value'  => $_POST['log'],								
													'compare'=>'='
													)
												),
							'role' 		=> 'user', 
							'fields' 	=> 'all',	
							'posts_per_page' => 5,
							'paged' =>$paged 
						)  
					);
					$childs = $the_query->get_results();
	
					if ( !empty($childs))
					{
						$result .= " نام کاربری یا رمز عبور صحیح نیست . \n"; 	
					}
					else 
					{ 
						$username =  get_user_meta( $childs[0]->ID, 'user_login', true ) ;  
					}
				}
				else 
				{
					$result .= " نام کاربری یا رمز عبور صحیح نیست . \n"; 				
				}
			}
			
			if($result != '')
			{
				echo ($result);
				wp_die();				
			}
			 
			$user = get_user_by( 'login', $username);
			if ( $user && wp_check_password( $_POST['pwd'], $user->data->user_pass, $user->ID) )
			{ 
				wp_clear_auth_cookie();
				
				wp_set_current_user( $user->ID, $user->first_name . ' '. $user->last_name  );
				wp_set_auth_cookie( $user->ID ); 

				echo (1);
				wp_die();
					 
			} 
			else 
			{ 
				echo ('نام کاربری یا رمز صحیح نمی باشد. لطفآ دوباره تلاش کنید یا از صفحه تماس با ما به شرکت اطلاع دهید . '); 
				//mail('nasservb@gmail.com','error in register',var_dump($_POST));
				return ;	
				
				 
			}
		
		}
		else
		{
			echo ('اطلاعات ورودی مقدار دهی نشده است .');
		}
	
	}
	
	add_action('kh_ajax_login','ajax_login',99);
	add_action('wp_ajax_nopriv_ajax_login','ajax_login',99);
	
	
?>