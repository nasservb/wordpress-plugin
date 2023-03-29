<?php 

function access_check() 
{
	
	$url = $_SERVER['PHP_SELF'].$_SERVER['QUERY_STRING'].$_SERVER['REQUEST_URI'] ;
	  
	if (!is_user_logged_in()&&(strpos($url ,'-profile')  !== false))
	{
		exit ('<div class="alert alert-danger">دسترسی به صفحه مورد نظر امکان پذیر نمی باشد . <br><a href="'.site_url().'">برگشت به صفحه اصلی</a></div>'); 		
	} 
	
	if (
			strpos($url ,'admin-ajax.php')  !== false ||
			strpos($url ,'/shop/')  !== false ||
			strpos($url ,'/checkout/')  !== false ||
			strpos($url ,'/cart/')  !== false 
			
			) //allow ajax req
	{
		return; 
	}	
	
	if (strpos($url ,'wp-login.php')  !== false)
	{
		wp_safe_redirect (site_url()); 
	}
    if (
		current_user_can('manage_options') && 
		(strpos($url ,'wp-admin')  === false) && 
		(strpos($url ,'-profile')  !== false) ) 
	{
		//Confilict on woocommerce (Display product)
		wp_safe_redirect (site_url() . '/wp-admin');
		exit; 
	}
	elseif(
		/*اگر دانشجو باشد و */
		current_user_can('user')&& 
		/*داخل پروفایل باشد ولی داخل پروفایل دانشجو نباشد  */
		((strpos($url ,'-profile')  !== false) && (strpos($url ,'student-profile')  === false) || 
		/*یا در پنل ادمین باشد  */
		(strpos($url ,'wp-admin')  !== false) ))
	{
		//Confilict on woocommerce (Display product)
		wp_safe_redirect (site_url() . '/student-profile');
		exit; 
	}
	elseif(
		/*اگر مربی باشد و */
		current_user_can('teacher')&& 
		/*داخل پروفایل باشد ولی داخل پروفایل مربی نباشد  */
		((strpos($url ,'-profile')  !== false) && (strpos($url ,'teacher-profile')  === false) || 
		/*یا در پنل ادمین باشد  */
		(strpos($url ,'wp-admin')  !== false) ))
	{
		wp_safe_redirect (site_url() . '/teacher-profile');
		exit; 
	}	
	elseif(
		/*اگر والدین باشد و */
		current_user_can('parent')&& 
		/*داخل پروفایل باشد ولی داخل پروفایل والدین نباشد  */
		((strpos($url ,'-profile')  !== false) && (strpos($url ,'parent-profile')  === false) || 
		/*یا در پنل ادمین باشد  */
		(strpos($url ,'wp-admin')  !== false) ))
	{
		wp_safe_redirect (site_url() . '/parent-profile');
		exit; 
	}
	elseif(
		/*اگر نماینده باشد و */
		current_user_can('agent')&& 
		/*داخل پروفایل باشد ولی داخل پروفایل نماینده نباشد  */
		((strpos($url ,'-profile')  !== false) && (strpos($url ,'agent-profile')  === false) || 
		/*یا در پنل ادمین باشد  */
		(strpos($url ,'wp-admin')  !== false) ))
	{
		wp_safe_redirect (site_url() . '/agent-profile');
		exit; 
	}	
		
}
 