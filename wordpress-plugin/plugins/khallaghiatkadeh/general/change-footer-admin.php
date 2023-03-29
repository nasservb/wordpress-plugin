<?php 
	
	
	function remove_footer_admin () 
	{
		echo 'تمام حقوق برای 
خلاقیتکده شریف
		محفوظ است .
<br>
		طراحی و اجرا توسط <a href="abrezendegi.ir" target="_blank">آینده پژوهان ابر زندگی</a></p>';
	 
	}
 
	add_filter('admin_footer_text', 'remove_footer_admin');
	
	function change_footer_version() {return ' نسخه 1.1.0';}
	add_filter( 'update_footer', 'change_footer_version', 9999);
	
	
	

?>