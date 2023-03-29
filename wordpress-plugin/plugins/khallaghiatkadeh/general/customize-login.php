<?php

function my_custom_login() {

    $url =  basename($_SERVER['REQUEST_URI'], '?' . $_SERVER['QUERY_STRING']);

    if ( $url == 'wp-login.php' )
    {
        echo '
    <script src="'.get_template_directory_uri() . '/js/jquery.min.js"></script>
    <script src="'.get_template_directory_uri() .'/js/bootstrap-rtl.min.js"></script>
    <link rel="stylesheet" href="' .get_template_directory_uri() .'/css/bootstrap-rtl.min.css" type="text/css" media="all" />
    <link rel="stylesheet" type="text/css" href="' . plugins_url('khallaghiatkadeh/theme/css/login.css') . '" />
    <link rel="stylesheet" href="'. get_template_directory_uri().'/css/persian-datepicker-0.4.5.min.css"/>			
	
<script>
$( document ).ready(function() {
';



        if (isset($_GET['checkemail'] ) && ($_GET['checkemail'] == 'registered' ))
        {
            echo '
		$(".message").html("<div class=\"alert alert-info\">ثبت نام در خلاقیتکده انجام شد. <br> پس از ثبت نام اولیه بقیه مراحل  از داخل پنل کاربری سایت انجام می شود . <br> ایمیل ثبت نام به آدرس ایمیل شما ارسال شد. لطفآ جهت ادامه ثبت نام پوشه های ایمیل خود را چک کنید (هرزنامه ، اسپم , spam , ...</div>");';

        }
        elseif(isset($_GET['action'] ) && ($_GET['action'] == 'register' ))
        {
            echo '
	$(".message").html("ثبت نام اولیه در وب سایت خلاقیتکده . <br> پس از ثبت نام اولیه بقیه مراحل ثبت نام از داخل پنل کاربری سایت انجام می شود . <br>");';
        }
        echo ' $("#reg_passmail").html("تأیید  ثبت نام به شما ایمیل خواهد شد. ");
	

	
	$("#reg_passmail").html("تأیید  ثبت نام به شما ایمیل خواهد شد. ");
	
	$("#registerform>.submit>#wp-submit").val("ثبت نام اولیه در سایت");
	
	$("#loginform>.submit>#wp-submit").val("  ورود به پنل کاربری ");
	
	$("#wp-submit").addClass("btn btn-primary").removeClass("button button-primary button-large");
	
	$("#nav").children().addClass("btn");
	
	$("#login>h1>a").attr("href","http://abrezendegi.ir/");

	$("#login>h1>a").attr("title","آینده پژوهان ابر زندگی");

	$("#login>h1>a").html("آینده پژوهان ابر زندگی");
	
	
}
);
</script>

';


 }





}
add_action('login_head', 'my_custom_login');

?>