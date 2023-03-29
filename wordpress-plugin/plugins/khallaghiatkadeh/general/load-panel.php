<?php 
function load_panel( $user_login, $user ) {
	$url = site_url(); 
    if (current_user_can('manage_options')) 
	{	
	//	wp_redirect ($url. '/wp-admin');
		exit;
	} 
	if(current_user_can('user'))
	{
		wp_redirect ($url . '/student-profile');
		exit;
	}
	if(current_user_can('teacher'))
	{
		wp_redirect ($url . '/teacher-profile');
		exit;
	}
	if(current_user_can('parent'))
	{
		wp_redirect ($url . '/parent-profile');
		exit;
	}
	if(current_user_can('agent'))
	{
		wp_redirect ($url . '/agent-profile');
		exit; 
	}
}
add_action('wp_login', 'load_panel', 10, 2);
