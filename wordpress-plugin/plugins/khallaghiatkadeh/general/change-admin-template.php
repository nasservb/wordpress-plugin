<?php 


	function my_admin_theme_style() {
		wp_enqueue_style('my-admin-theme', plugins_url('khallaghiatkadeh/theme/css/admin-template.css'));
	}
	add_action('admin_enqueue_scripts', 'my_admin_theme_style');
	add_action('login_enqueue_scripts', 'my_admin_theme_style');
	/*
	echo '<script type="text/javascript">
		 
		  jQuery(document).ready(function( $ ){	
		   
			$("#wp-admin-bar-my-account").html($("#wp-admin-bar-my-account").html().replace("درود،" ,""));
		  });
		  
		</script>';
		*/
?>