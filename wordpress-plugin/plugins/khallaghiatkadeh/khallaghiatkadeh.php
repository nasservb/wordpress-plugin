<?php 
/**
 * Plugin Name: khallaghiatkadeh
 * Plugin URI:  https://niazy.ir/niazy
 * Text Domain: khallaghiatkadeh.com
 * Domain Path:  http://khallaghiatkadeh.com
 * Description: change admin page for khalaghiatkadeh.com.
 * Author:      nasser niazy
 * Author URI:  http://niazy.ir/
 * Version:     1.10.6
 * License:     private+
 *
 * @package WordPress
 * @author  nasser niazy <nasservb@gmail.com>
 * @license private
 * @version 1395-07-15
 */
 
 
 //	init
 
	add_action( 'plugins_loaded', 'khalaghiatkadeh_init' );
 
 
		
	function khalaghiatkadeh_init () 
	{	
		
		if (current_user_can('manage_options')) 
			require  'admin_functions.php';
		 
		 
		
		if (is_user_logged_in())
		{
			if (!current_user_can('manage_options')) 
			{
				include 'general/change-admin-template.php'; 				
			}
			
			
			include 'general/change-footer-admin.php';
			include 'general/add-user-role.php'; 			
			include 'general/add-message-post-type.php';
			include 'general/add-support-post-type.php';
			 
			include 'general/add-course-product-type.php';
		}
		include 'general/access-check.php';
		access_check(); 
		 
	}

    include 'general/load-panel.php';	 	
    include 'general/change-register.php';
    include 'general/customize-login.php';
    include 'general/email-setting.php';
    include 'general/register-ajax.php';
    include 'general/login-ajax.php';
    include 'general/addo-to-cart-redirect.php';
	



?>