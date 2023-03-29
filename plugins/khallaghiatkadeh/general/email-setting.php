<?php 
 
 
function change_mail_from($email)
{
	return "info@khallaghiatkadeh.ir";
}
add_filter("wp_mail_from", "change_mail_from");

   
function change_mail_from_name($old) 
{
	return 'khallaghiatkadeh';
}
add_filter('wp_mail_from_name', 'change_mail_from_name');
 
?>