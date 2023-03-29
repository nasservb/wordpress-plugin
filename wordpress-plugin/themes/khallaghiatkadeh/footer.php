<?php
/*!
 * Template Name: Khalaghiatkadeh
 * Theme URI: http://Khalaghiatkadeh.com
 * Author: nasser niazy mobasser
 * Author URI: http://niazy.ir/
 * Design: Nov 11, 2016  
 * Copyright: abrezendegi.ir all right reserved.
 */

?>
<script>
function newslater(){
	var mail = $('#mail-box').val('');
	 $.ajax({
	   type: "POST",
	   url: "<?php echo site_url(); ?>/wp-admin/admin-ajax.php?action=ajax_register&scope=newslater",
	   data: $('#newsLater').serialize(), // serializes the form's elements.
	   success: function(data)
	   {
		  
		   if(data==1 )
		   {
			 alert('ایمیل شما در خبرنامه سایت ثبت شد . به زودی ایمیل های شتابدهنده روشارا دریافت خواهید کرد . '); 
		   }
		   else 
		   {
			   alert(data);							   
			   console.log(data);
		   }
	   }
	 }); 
	$('#mail-box').val('') ; 
	
}
</script>
 <!---power tips area -->
    <section class="sec-newslater" >
       <div class="container">
            <div class="row">
			
                <div class="col-lg-12 power-title">
					<h3>اولین نفری باشید که از اخبار شتابدهنده روشامطلع می شود </h3>
					<div class="newslater-box">
						
						<form name="newsLater" id="newsLater" method="post" > 
							<a class="send-icon" onclick="newslater()" ><img src="<?php echo get_template_directory_uri(); ?>/images/send.jpg" /></a>
							<input type="text" style="color:black" id="mail_box" name="mail_box" placeholder= "ایمیل خود را وارد کنید" />
						</form>	
					</div>
				</div>
                
                
            </div>
        </div>
    </section> 
   
	
	<!---footer area -->
	<footer class="sec-text-footer">
		<div class="container">
			<div class="row"> 
				<div class="col-sm-4 social-box pull-right">
					<h2 class="socials-title">ما را دنبال کنید </h2>  
					<ul class="socials ">
						<li><a target="_blank" href="https://telegram.me/khallaghiatkadeh"><img src="<?php echo get_template_directory_uri(); ?>/images/tg.jpg" class="icon" /></a></li>
						<li><a target="_blank" href="https://www.linkedin.com/company/khallaghiatkadeh"><img src="<?php echo get_template_directory_uri(); ?>/images/in.jpg" class="icon" /></a></li>
						<li><a target="_blank" href="https://www.instagram.com/khallaghiatkadeh/"><img src="<?php echo get_template_directory_uri(); ?>/images/ins.jpg" class="icon" /></a></li>
						
					</ul>
					 
					<div class="certificate" style="display:none">
						<a href="#"><img src="<?php echo get_template_directory_uri(); ?>/images/enamad.jpg" /></a>
						<a href="#"><img src="<?php echo get_template_directory_uri(); ?>/images/resaneh.jpg" /></a>
					</div>

				</div>
				<div class="col-sm-4 pull-right">
					<ul class="footer-menu">
						<li><a href="<?php echo site_url(); ?>/role">قوانین و مقررات</a></li>
						<li><a href="<?php echo site_url(); ?>/news/">اخبار و اطلاعیه ها</a></li>
						<li><a href="<?php echo site_url(); ?>/faq">سوالات متداول</a></li>
						<li><a href="<?php echo site_url(); ?>/colleague">همکاران استراتژیک</a></li>
						<li><a href="<?php echo site_url(); ?>/blog">وبلاگ</a></li>
						<li><a href="<?php echo site_url(); ?>/report">ثبت شکایات</a></li>
					</ul>
				</div>
				
				<div class="col-sm-4 footer-right-column pull-right">
					 
					<div class="foot-title">اطلاعات تماس شتابدهنده روشا</div>
					تهران، خیابان آزادی، بالاتر از دانشگاه شریف، کوچه صادقی، پلاک 9، طبقه دوم
					 <br>
					<span dir="rtl">دفتر مرکزی : 66054958-021</span><br>
					<span dir="rtl">دفتر شریف :66046018-021</span><br>
					<a href="mailto:info@roshaac.ir">info@roshaac.ir</a>
					
				</div>
			</div>
		</div>
	</footer>
</div>	 


<!---java script loading -->
<script src="<?php echo get_template_directory_uri(); ?>/js/bootstrap.min.js"></script>  
<script src="<?php echo get_template_directory_uri(); ?>/js/script.js"></script> 
<script src="<?php echo get_template_directory_uri(); ?>/js/carousel2.js"></script> 
	

<script src="<?php echo get_template_directory_uri(); ?>/js/persian-date.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/js/persian-datepicker-0.4.5.min.js"></script>    
  
<!-- Start of StatCounter Code for Default Guide -->
<script type="text/javascript">
var sc_project=11236128; 
var sc_invisible=1; 
var sc_security="b5937ac9"; 
var scJsHost = (("https:" == document.location.protocol) ?
"https://secure." : "http://www.");
document.write("<sc"+"ript type='text/javascript' src='" +
scJsHost+
"statcounter.com/counter/counter.js'></"+"script>");
</script>
<noscript><div class="statcounter"><a title="web analytics"
href="http://statcounter.com/" target="_blank"><img
class="statcounter"
src="//c.statcounter.com/11236128/0/b5937ac9/1/" alt="web
analytics"></a></div></noscript>
<!-- End of StatCounter Code for Default Guide -->


<?php wp_footer(); ?> 
<script type="text/javascript">
	$(document).ready(function() {
			$("#birthdate").pDatepicker({
				altFormat: "YYYY MM DD",
				format: 'YYYY/MM/DD',
				autoClose:true
			});
	});

</script>


</body>
</html>
