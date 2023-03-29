<?php 
	 
	
	function ajax_register()
	{ 
	
	
		global $wpdb ; 
		$scope = (isset($_REQUEST['scope']) ? $_REQUEST['scope'] : ''  ) ;
		  
		 
		if (  $scope !='') 
		{
			if($scope == 'newslater')
			{
				$email = $_REQUEST['mail_box'];
				$result  =''; 
				if( $email != '' && email_exists($email))
				{					
					$result .= " این ایمیل قبلآ در سایت ثبت نام شده است . اگر رمز عبور خود را فراموش کرده اید از بخش فراموشی رمز استفاده کنید . \n"; 					
				}
				$pattern = '/^(?!(?:(?:\\x22?\\x5C[\\x00-\\x7E]\\x22?)|(?:\\x22?[^\\x5C\\x22]\\x22?)){255,})(?!(?:(?:\\x22?\\x5C[\\x00-\\x7E]\\x22?)|(?:\\x22?[^\\x5C\\x22]\\x22?)){65,}@)(?:(?:[\\x21\\x23-\\x27\\x2A\\x2B\\x2D\\x2F-\\x39\\x3D\\x3F\\x5E-\\x7E]+)|(?:\\x22(?:[\\x01-\\x08\\x0B\\x0C\\x0E-\\x1F\\x21\\x23-\\x5B\\x5D-\\x7F]|(?:\\x5C[\\x00-\\x7F]))*\\x22))(?:\\.(?:(?:[\\x21\\x23-\\x27\\x2A\\x2B\\x2D\\x2F-\\x39\\x3D\\x3F\\x5E-\\x7E]+)|(?:\\x22(?:[\\x01-\\x08\\x0B\\x0C\\x0E-\\x1F\\x21\\x23-\\x5B\\x5D-\\x7F]|(?:\\x5C[\\x00-\\x7F]))*\\x22)))*@(?:(?:(?!.*[^.]{64,})(?:(?:(?:xn--)?[a-z0-9]+(?:-+[a-z0-9]+)*\\.){1,126}){1,}(?:(?:[a-z][a-z0-9]*)|(?:(?:xn--)[a-z0-9]+))(?:-+[a-z0-9]+)*)|(?:\\[(?:(?:IPv6:(?:(?:[a-f0-9]{1,4}(?::[a-f0-9]{1,4}){7})|(?:(?!(?:.*[a-f0-9][:\\]]){7,})(?:[a-f0-9]{1,4}(?::[a-f0-9]{1,4}){0,5})?::(?:[a-f0-9]{1,4}(?::[a-f0-9]{1,4}){0,5})?)))|(?:(?:IPv6:(?:(?:[a-f0-9]{1,4}(?::[a-f0-9]{1,4}){5}:)|(?:(?!(?:.*[a-f0-9]:){5,})(?:[a-f0-9]{1,4}(?::[a-f0-9]{1,4}){0,3})?::(?:[a-f0-9]{1,4}(?::[a-f0-9]{1,4}){0,3}:)?)))?(?:(?:25[0-5])|(?:2[0-4][0-9])|(?:1[0-9]{2})|(?:[1-9]?[0-9]))(?:\\.(?:(?:25[0-5])|(?:2[0-4][0-9])|(?:1[0-9]{2})|(?:[1-9]?[0-9]))){3}))\\]))$/iD';

				
				if (preg_match($pattern, $email) != 1) {
					$result .= " این آدرس ایمیل معتبر نمی باشد . \n";
				}
				if($result != '')
				{
					echo ($result); 
					wp_die();		
				}
				else 
				{
					$password = '1236543098';
					$user_id = wp_create_user( $email, $password, $email );
					echo 1; 
				}
				wp_die();		
				exit;
			}
			elseif($scope == 'agencyDoc')
			{
			
			    $codeMelli = $_POST['agencyDoc'] ; 
			    $post_id = $_POST['agencyReqId'] ; 
			    if(intval($post_id) == 0 )
			    {
					//detecting  from melli 
			    }
			    
			    $upload = wp_upload_bits(
					$_FILES["docMelli"]["name"], 
					null, 
					file_get_contents($_FILES["docMelli"]["tmp_name"]));
		
		 
			    if(!$upload['error']) 
			    {
				    add_post_meta( $post_id, 'docMelli'			,'',true);	  		 
				    add_post_meta( $post_id, 'docMelli_file'	,'',true);	  		 
				    update_post_meta( $post_id, 'docMelli'		,$upload['url']);  
				    update_post_meta( $post_id, 'docMelli_file'	,$upload['file'] );  
			    }
				else 
				{
					echo $upload['error']. "\n"; 
				}
			
			
			    $upload = wp_upload_bits(
					$_FILES["docShenasname"]["name"], 
					null, 
					file_get_contents($_FILES["docShenasname"]["tmp_name"]));
		
		 
			    if(!$upload['error']) 
			    {
				    add_post_meta( $post_id, 'docShenasname'		,'',true);	  		 
				    add_post_meta( $post_id, 'docShenasname_file'	,'',true);	  		 
				    update_post_meta( $post_id, 'docShenasname'		,$upload['url']);  
				    update_post_meta( $post_id, 'docShenasname_file',$upload['file'] );  
			    }
				else 
				{
					echo $upload['error']. "\n"; 
				}
			
			
			
			    $upload = wp_upload_bits(
					$_FILES["docCV"]["name"], 
					null, 
					file_get_contents($_FILES["docCV"]["tmp_name"]));
		
		 
			    if(!$upload['error']) 
			    {
				    add_post_meta( $post_id, 'docCV'		,'',true);	  		 
				    add_post_meta( $post_id, 'docCV_file'		,'',true);	  		 
				    update_post_meta( $post_id, 'docCV'		,$upload['url']);  
				    update_post_meta( $post_id, 'docCV_file'	,$upload['file'] );  
			    }
				else 
				{
					echo $upload['error']. "\n"; 
				}
			
			    $upload = wp_upload_bits(
					$_FILES["docMelli"]["name"], 
					null, 
					file_get_contents($_FILES["docMelli"]["tmp_name"]));
		
		 
			    if(!$upload['error']) 
			    {
				    add_post_meta( $post_id, 'docField'		,'',true);	  		 
				    add_post_meta( $post_id, 'docField_file'		,'',true);	  		 
				    update_post_meta( $post_id, 'docField'		,$upload['url']);  
				    update_post_meta( $post_id, 'docField_file'	,$upload['file'] );  
			    }
				else 
				{
					echo $upload['error']. "\n"; 
				}
			 
			  echo 1; 
			  wp_die(); 
			
			}
			elseif(isset($_POST['registerAgency']))
			{					
				$states= array(
					1=>'آذربایجان شرقی',
					2=>'آذربایجان غربی',
					3=>'اردبیل',
					4=>'اصفهان',
					5=>'البرز',
					6=>'ایلام',
					7=>'بوشهر',
					8=>'تهران',
					9=>'چهارمحال بختیاری',
					10=>'خراسان جنوبی',
					11=>'خراسان رضوی',
					12=>'خراسان شمالی',
					13=>'خوزستان',
					14=>'زنجان',
					15=>'سمنان',
					16=>'سیستان و بلوچستان',
					17=>'فارس',
					18=>'قزوین',
					19=>'قم',
					20=>'کردستان',
					21=>'کرمان',
					22=>'کرمانشاه',
					23=>'کهگیلویه و بویر احمد',
					24=>'گلستان',
					25=>'گیلان',
					26=>'لرستان',
					27=>'مازندران',
					28=>'مرکزی',
					29=>'هرمزگان',
					30=>'همدان'
				);					
				global $wpdb ; 
				
				$query = $wpdb->get_results('select * from shahr where id= ' . intval($_POST['city']) );
				$city=''; 
				if ( !empty($query)) 
				{
					$city=$query[0]->name ;
				}	
				$to='nasservb@gmail.com';
				$subject= 'درخواست نمایندگی برای خلاقیتکده';
				$date = sprintf("%04s/%02s/%02s",
											ztjalali_english_num(jdate('Y')),
											ztjalali_english_num(jdate('n')),
											ztjalali_english_num(jdate('j')));
				$message= 
					'نام : '.$_POST['name']."\n".
					'نام خانوادگی: '.$_POST['family']."\n".
					'ایمیل : '.$_POST['user_email']."\n".
					'کد ملی : '.$_POST['melli']."\n".
					'استان : '.$states[intval($_POST['state'])]."\n".
					'شهر : '.$city."\n".
					'رشته تحصیلی : '.$_POST['field']."\n".
					'مدرک تحصیلی : '.$_POST['degree']."\n".
					'تلفن  : '.$_POST['phone']."\n".
					'موبایل : '.$_POST['mobile']."\n".
					'آدرس : '.$_POST['address']."\n".
					'رمز عبور : '.$_POST['pass']."\n".
					'تاریخ درخواست : '. $date ;
				
				
				$my_post = array(
				  'post_title'    => 'درخواست نمایندگی توسط '. ($_POST['name'].$_POST['family'] ),
				  'post_content'  => $message,
				  'post_status'   => 'publish',
				  'post_type'	  => 'message',
				  'post_author'   => 1
				);
			    
				$post_id = wp_insert_post( $my_post ,false ); 
				
				add_post_meta( $post_id, 'family',$_POST['family'],true);
				add_post_meta( $post_id, 'user_email',$_POST['user_email'],true);
				add_post_meta( $post_id, 'melli',$_POST['melli'],true);
				add_post_meta( $post_id, 'state',$_POST['state'],true);
				add_post_meta( $post_id, 'city',$_POST['city'],true);
				add_post_meta( $post_id, 'field',$_POST['field'],true);
				add_post_meta( $post_id, 'degree',$_POST['degree'],true);
				add_post_meta( $post_id, 'phone',$_POST['phone'],true); 
				add_post_meta( $post_id, 'mobile',$_POST['mobile'],true); 
				add_post_meta( $post_id, 'address',$_POST['address'],true) ;
				add_post_meta( $post_id, 'pass',$_POST['pass'],true);
		 
				mail($to,$subject,$message); 
				echo $post_id; 				
				
				wp_die(); 
			}
			
			$result = '' ;
			
			if($_POST['name'] == '' || $_POST['family'] == '' )
			{					
				$result = "نام و نام خانوادگی باید وارد شوند \n"; 
				
			}
			
			if(   $_POST['user_email'] != '' && email_exists($_POST['user_email']))
			{					
				$result .= " این ایمیل قبلآ در سایت ثبت نام شده است . اگر رمز عبور خود را فراموش کرده اید از بخش فراموشی رمز استفاده کنید . \n"; 			
				
			}	
			
			if(   $_POST['melli'] != '' && username_exists($_POST['melli']))
			{					
				$result .= "کد ملی قبلآ در سایت ثبت نام شده است . اگر رمز عبور خود را فراموش کرده اید از بخش فراموشی رمز استفاده کنید . \n"; 			
				
			}	
			
			if($_POST['user_email'] == '' )
			{					
				$_POST['user_email']='fake.'. rand(1,10000).'@gmail.com' ; 
				if(username_exists($_POST['user_email']))
					$_POST['user_email']='fake.'. rand(1,1000000).'@gmail.com' ; 
			}				
				 
			
			if(  ($_POST['melli'] == '' ||  intval($_POST['melli'])< 100000 ) )
			{					
				$result .= " کد ملی باید وارد شود \n"; 
			}
			
			if(  ($_POST['pass'] == '' ||  strlen($_POST['pass'])< 5 ) )
			{					
				$result .=  " رمز عبور باید وارد شود و حداقل 5 حرف باشد. \n"; 
			}	
			
			if(  ($_POST['pass'] !=  $_POST['confirm_pass'])   )
			{			
				 $result .= " رمز عبور و تکرار رمز باید همسان باشند . \n"; 
			}		
			 
		
			if($result != '')
			{
				echo ($result); 
				wp_die();		
			}
			else 
			{
				
				$user_name = $_POST['melli'];
				$user_email = $_POST['user_email']; 
				$password = $_POST['pass']; 
				
				$user_id = wp_create_user( $user_name, $password, $user_email );
				if ( !$user_id || !username_exists($user_name) ) { 
					echo ('متاسفانه نمی توان با اطلاعات وارد شده ثبت نام کرد . لطفآ دوباره تلاش کنید یا از صفحه تماس با ما به شرکت اطلاع دهید . '); 
					//mail('nasservb@gmail.com','error in register',var_dump($_POST));
					wp_die();
				} 
				else 
				{
					$user = new WP_User($user_id);
					if(isset($_POST['registerStudent']))
					{
						add_user_meta( $user_id, 'parent_melli'		,'',true); 
						add_user_meta( $user_id, 'parent_relation'	,'',true); 
						
						update_user_meta( $user_id, 'parent_melli'		,sanitize_text_field( $_POST['parent_melli']  )); 
						update_user_meta( $user_id, 'parent_relation'	,sanitize_text_field( $_POST['parent_relation']  )); 
										
						
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
					 
					add_user_meta( $user_id, 'field','',true); 
					add_user_meta( $user_id, 'job','',true); 
					add_user_meta( $user_id, 'degree','',true); 
					add_user_meta( $user_id, 'childcount','',true); 
					
					add_user_meta( $user_id, 'birthdate','',true); 
					add_user_meta( $user_id, 'phone'	,'',true);
					add_user_meta( $user_id, 'mobile'	,'',true); 
					add_user_meta( $user_id, 'melli'	,'',true); 
					add_user_meta( $user_id, 'mail'		,'',true); 
					add_user_meta( $user_id, 'state'	,'',true); 
					add_user_meta( $user_id, 'city'		,'',true); 			
					add_user_meta( $user_id, 'agent_id'	,'',true); 	
				 
					add_user_meta( $user_id, 'married'	,'',true); 		
					add_user_meta( $user_id, 'father_name'	,'',true); 		
					
					update_user_meta( $user_id, 'birthdate'	,sanitize_text_field( $_POST['birthdate'])); 
					update_user_meta( $user_id, 'phone'		,sanitize_text_field( $_POST['phone'] )); 
					update_user_meta( $user_id, 'mobile'	,sanitize_text_field( $_POST['mobile']  )); 
					update_user_meta( $user_id, 'melli'		,sanitize_text_field( $_POST['melli']  )); 
					update_user_meta( $user_id, 'mail'		,sanitize_text_field( $_POST['user_email']  )); 
					update_user_meta( $user_id, 'state'		,sanitize_text_field( $_POST['state']  )); 
					update_user_meta( $user_id, 'city'		,sanitize_text_field( $_POST['city']  )); 
					update_user_meta( $user_id, 'first_name',sanitize_text_field( $_POST['name']  )); 
					update_user_meta( $user_id, 'last_name'	,sanitize_text_field( $_POST['family']  )); 
					update_user_meta( $user_id, 'agent_id'	,33) ; // agent1 ===>khalaghiatkadeh main agent 
		 
					$fullname=sanitize_text_field( $_POST['name'] ) .' ' .sanitize_text_field( $_POST['family'] );
 
					update_user_meta( $user_id, 'display_name'	,$fullname ); 
					update_user_meta( $user_id, 'user_nicename'	,$fullname); 
					
				
					if(!isset($_POST['loginAfterRegister']) || (intval($_POST['loginAfterRegister']) == 1 ))
					{						
						wp_clear_auth_cookie();
						
						wp_set_current_user( $user_id, $_POST['name']  . ' '. $_POST['family'] );
						wp_set_auth_cookie( $user_id );
						//do_action( 'wp_login', $user->user_login );
					}	
					echo (1);
					wp_die();
					//user_login
					// wp_update_user( array( 'ID' => $user_id, 'user_login' => sanitize_text_field( $_POST['melli']  )) );	
					
				}
			}
		
		}
		else
		{
			echo ('اطلاعات ورودی مقدار دهی نشده است .');
			wp_die();
		}
	
	}
	
	 
	add_action('wp_ajax_ajax_register','ajax_register',99);
	add_action('kh_ajax_register','ajax_register',99);
	add_action('wp_ajax_nopriv_ajax_register','ajax_register',99);
	
	
?>