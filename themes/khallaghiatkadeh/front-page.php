<?php
/*
 * Template Name: صفحه ی اصلی
 *
 */

get_header();  ?>

	<!---slider area --->
	<section class="sec-slider " id="slider"> 
		<div class="slider-spliter"></div>
		
		<div id="sliders" class="carousel slide" data-ride="carousel">
		  <!-- slider indicators -->
		  
		  <div class="carousel-inner" role="listbox">
		  <!---slides--->
			<div class="item active">
			  <div class="first-slide slide" style="background-image:url(<?php echo get_template_directory_uri(); ?>/images/slider/slide0.jpg)"   >
			  </div>
			   
			</div>
			<div class="item ">
			  <div class="first-slide slide" style="background-image:url(<?php echo get_template_directory_uri(); ?>/images/slider/slide1.jpg)"   >
			  </div>
			   
			</div>
			<div class="item">
			  <div class="second-slide slide" style="background-image:url(<?php echo get_template_directory_uri(); ?>/images/slider/slide2.jpg)"     >
			  </div>
			  
			</div>
			<div class="item">
			  <div class="third-slide slide" style="background-image:url(<?php echo get_template_directory_uri(); ?>/images/slider/slide3.jpg)"  ></div>
			   
			</div>
			
			<div class="item">
			  <div class="forth-slide slide" style="background-image:url(<?php echo get_template_directory_uri(); ?>/images/slider/slide4.jpg)"   ></div>
			  
			</div>
			<div class="item">
			  <div class="fifth-slide slide" style="background-image:url(<?php echo get_template_directory_uri(); ?>/images/slider/slide5.jpg)"  ></div>
			   
			</div>
			<script>
				
				function hide() {
					
					$('#txt1').css('display','none');
					$('#txt2').css('display','none');
					$('#txt3').css('display','none');
					$('#txt4').css('display','none');
					$('#txt5').css('display','none');
					$('#txt6').css('display','none');
				}
				
				function next(id=1) {				
				
					var totalItems = $('.item').length;
					currentIndex = $('div.active').index()+1 ;
					if(currentIndex == 0 ) 
					{
						currentIndex = totalItems; 
					}					
					
					hide();
					
					$('#txt'+(currentIndex)).css('display','block');
					
					if(id == 1)
					{
						var $myCarousel = $('.slide') ;
						$myCarousel.carousel({interval: 5000});
						$myCarousel.carousel('prev');
					}					
					
				}
				
				function prev(id=1) {
					
					var totalItems = $('.item').length;
					currentIndex = $('div.active').index() + 1;				 
					
					hide();  
					$('#txt'+currentIndex).css('display','block');
					
					if(id == 1)
					{
						var $myCarousel = $('.slide') ;
						$myCarousel.carousel({interval: 5000});
						$myCarousel.carousel('next');
					}
					
					
				}
			
			</script>
			<div class="container">
				<div class="carousel-caption">
					
					<div class="frame">
						<script>
							function changeLogo()
							{
								//
								//$( ".link-logo" ).css( );
							}
							$( window ).resize(function() {
								changeLogo();
							  
							});
						</script>
						<div class="link-logo" >
							<div >
								<a href="#">شتابدهنده&nbsp;روشا</a>
							</div>
						</div>
						<div id="txt1" class="frame-text">
							<h3>شتابدهنده روشا </h3>
							روشا همانطور که از اسم آن پیداست بستری برای رویش و شکوفایی استعدادهای نواندیشان است. همه ما توانایی های زیادی داریم که در بیشتر موارد از آن آگاه نیستیم و اگر هم باشیم احتمالاً نمی دانیم چطور به بهترین نحو ممکن از آن استفاده کنیم. در شتابدهنده روشا تلاش شده است تا نواندیشان را با توانایی خود آشنا کند تا در آینده ای نچندان دور تجربه زتدگی شاد، موفق و سازنده ای را برای خود و دیگران به ارمغان آورند.
							 <br>
							 
						</div>
						<div id="txt2" class="frame-text" style="display:none;">
							<h4>شناخت استعدادهای خود</h4>
							یکی از راه‌های رسیدن به موفقیت، خودشناسی است. منظور از خودشناسی، شناسایی ذوق و استعداد و توانایی‌هاست. از ادیسون پرسیدند: چرا اغلب افراد موفق نمی‌شوند؟ گفت: برای این‌که راه خود را نمی‌شناسند و در جاده دیگری گام بر می‌دارند. پس اگر بخواهیم از نیروی خود و فرصت های زندگی حداکثر استفاده را داشته باشیم، لازم است  مواهب و استعدادهای  بالقوه خود  
							 را بشناسیم. <br>
							 
						</div>
						<div id="txt3" class="frame-text" style="display:none;">
							<h4>خلاقیت برای همه</h4>
							اندیشمندان معتقدند که همة افراد به طور ذاتی  خلاق هستند . آن ها معتقدند شکوفایی خلاقیت درون افراد رابطة مستقیمی به نوع آموزش های مربوطه دارد. برای داشتن فرزندانی خلاق لازم است در درجة اول، آن ها را باور داشته و در درجة دوم مهارت و دانش لازم برای خلاق شدنشان را داشته باشیم تا بتوانیم آن را آموزش دهیم. این آموزش ها در شتابدهنده روشا با نوین ترین شیوه ها وجود دارد.<br>
							 
						</div>
						<div id="txt4" class="frame-text" style="display:none;">
							<h4>تقویت تمرکز و توجه</h4>
							قدرت توجه و تمرکز فکر، یک پدیده اکتسابی است که با اختیار و تلاش فرد حاصل می شود و نه امری غیر اختیاری و خود به خودی. بنابراین، باید به دنبال شناخت دقیق تر آن و  به کارگیری روش هایی برای  تقویت آن بود تا به نتایج ارزشمند آن، در هر زمینه ای که برای طی کردن مسیر موفقیت آمیز زندگی مطلوب است، دست یافت.   <br>
							 
						</div>
						<div id="txt5" class="frame-text" style="display:none;">
							<h4>توقف عادت زندگی و تعصبات</h4>
							راز موفقیت و رسیدن به مرحله شکوفایی ذهنی، مسیری طولانی و پر رمز و راز دارد. در شتابدهنده روشا تلاش می کنیم تا در حد امکان با زمینه هایی که باعث توقف فکر یا ایجاد محدودیت در تفکر کودکان می شود، مبارزه کنیم. در این شرایط هیچ چیز کهنه، فرسوده و ایستا نیست و همه چیز رنگ طراوت، شادی و پویایی دارد.  <br>
							 
						</div>
						<div id="txt6" class="frame-text" style="display:none;">
							<h4>توانایی حل مسأله</h4>
							 ما در روز تعداد زیادی مسئله حل می‌کنیم. مسائل ریز و درشتی که در زندگی فردی، تحصیلی، خانوادگی و اجتماعی گریبان‌گیر‌مان هستند. ناگزیر هستیم برای هر یک از مسائل و مشکلاتی که در فعالیتهای مختلف پیش می‌آید، راه‌حلی بیابیم. با به کارگیری مهارت خلاقیت، بهره‌وری ما ارتقاء پیدا می‌کند زیرا  در خلاقیتکده همواره بر این باور هستیم کهیا راهی خواهم یافت یا راهی خواهم ساخت. <br>
							 
						</div>	
						
						<div class="indicator">
							<a class="next" onClick="next()" ><img src="<?php echo get_template_directory_uri(); ?>/images/arr_next.jpg" /> </a>
							<a class="prev" onClick="prev()"><img src="<?php echo get_template_directory_uri(); ?>/images/arr_back.jpg" /> </a>
						</div>
						
					</div>
								  
				</div>
				
			</div>
			
			
		  </div>
		</div> 
	</section>
	
	
	<section id="job" class="rooshd-job col-xs-12 col-sm-12 col-md-12 col-lg-12 no-padding">
	<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 job-grid">
		<div class="container job-list">
			<h2 class="job-title">فرآیند کار</h2> 
			<p class="para-job"> شتابدهنده روشا چگونه کار می کند؟</p>
			<div class="row-fluid">
			<div class="col-xs-12 col-sm-6 col-md-2 col-lg-2 proc-box ">
				  <div class="region region-job-one">
					<div id="farayand4" class="block block-block  wow fadeInUp jdbase-block animated" data-wow-duration="2s" data-wow-delay="3s" style="visibility: visible; animation-duration: 2s; animation-delay: 3s; animation-name: fadeInUp;">	
					<div class="block-contents " data-appear-animation="- هیچکدام -">
								
					  <div class="content">
						<p style="text-align:center">
						<img alt="" class="img-responsive" height="416" src="<?php echo get_template_directory_uri(); ?>/images/proc/j4.png" width="387"></p>
					  </div>
					</div>
					<div style="clear:both" class="clear-fix"></div>
				</div>
				  </div>
			</div>
			
			<div class="col-xs-12 col-sm-6 col-md-2 col-lg-2 proc-box" style="margin-top: 3px;">
				  <div class="region region-job-two">
				<div id="farayand3" class="block block-block  wow fadeInDown jdbase-block animated" data-wow-duration="2s" data-wow-delay="2s" style="visibility: visible; animation-duration: 2s; animation-delay: 2s; animation-name: fadeInDown;">
				
				<div class="block-contents " data-appear-animation="- هیچکدام -">
							
				  <div class="content">
					<p style="text-align:center"><img alt="" class="img-responsive" height="416" src="<?php echo get_template_directory_uri(); ?>/images/proc/j3.png" width="390"></p>
				  </div>
				</div>
				<div style="clear:both" class="clear-fix"></div>
				</div>
			  </div>
			</div>
			
			<div class="col-xs-12 col-sm-6 col-md-2 col-lg-2 proc-box">
				  <div class="region region-job-three">
					<div id="فرآیند 2" class="block block-block  wow fadeInUp jdbase-block animated" data-wow-duration="2s" data-wow-delay="1s" style="visibility: visible; animation-duration: 2s; animation-delay: 1s; animation-name: fadeInUp;">
					
					<div class="block-contents " data-appear-animation="- هیچکدام -">
								
					  <div class="content">
						<p style="text-align:center"><img alt="" class="img-responsive" height="416" src="<?php echo get_template_directory_uri(); ?>/images/proc/j2.png" width="390"></p>
					  </div>
					</div>
					<div style="clear:both" class="clear-fix"></div>
				</div>
				  </div>
			</div>
				
			<div class="col-xs-12 col-sm-6 col-md-2 col-lg-2 proc-box" style="margin-top: 3px;">
				  <div class="region region-job-four">
				<div id="farayand1" class="block block-block  wow fadeInDown jdbase-block animated" data-wow-duration="2s" style="visibility: visible; animation-duration: 2s; animation-name: fadeInDown;">
				
				<div class="block-contents " data-appear-animation="fadeInDown">
							
				  <div class="content">
					<p style="text-align:center"><img alt="" class="img-responsive" height="416" src="<?php echo get_template_directory_uri(); ?>/images/proc/j1.png" width="388"></p>
				  </div>
				</div>
				<div style="clear:both" class="clear-fix"></div>
				</div>
			  </div>
			</div>
			
			<div class="col-xs-12 col-sm-6 col-md-2 col-lg-2 proc-box">
				  <div class="region region-job-four">
				<div id="farayand1" class="block block-block  wow fadeInUp jdbase-block animated" data-wow-duration="2s" style="visibility: visible; animation-duration: 2s; animation-name: fadeInUp;">
				
				<div class="block-contents " data-appear-animation="fadeInUp">
							
				  <div class="content">
					<p style="text-align:center"><img alt="" class="img-responsive" height="416" src="<?php echo get_template_directory_uri(); ?>/images/proc/j0.png" width="388"></p>
				  </div>
				</div>
				<div style="clear:both" class="clear-fix"></div>
				</div>
			  </div>
			</div>
			
			</div>
			
			<div class="rtecenter col-lg-12 col-md-12 col-sm-12 col-xs-12 " style="text-align:center">
				<a class="btn btn-success btn" href="<?php echo site_url();?>/process">توضیحات بیشتر</a>
			</div>
			
			
		</div>
	</div>
</section>
	<script src="<?php echo get_template_directory_uri(); ?>/js/wow.min.js?ooalh6"></script>
	
	<!---course area--->
	<section class="sec-course " >
        <div class="course-bg" id="sec-course"> 
			<div class="span9 title-box">
				<span class="course-title">دوره و بسته های آموزشی روشا:</span>
			</div>	
							
			<div class="carousel carousel-showsixmoveone slide" id="carousel123"  data-ride="carousel">		
				
				<div   id="course-box"    >
					<div class="item active">
						<div class="col-xs-12 col-md-3 col-sm-3">
							<div class="course-frame" style=" border-color: #65b96b; border-bottom: 3px solid #65b96b;">
								<img class="img-circle" src="<?php echo get_template_directory_uri(); ?>/images/course/course1.jpg" />
								<h4>رویداد مقدماتی روشا </h4>
								<table class="table table-striped table-bordered">
									<tbody>
									  <tr>
										<td> برگزاری رویداری مهیج و پویا برای ساختن رویاهایمان!</td>
									  </tr>
									  <tr>
										<td>مدت زمان:۶ ساعت</td>
									  </tr>
									  <tr>
										<td>پیش نیاز: لازم ندارد</td>
									  </tr>
									  <tr>
										<td>
											مخاطبان:۶ -۱۸ سال 
										</td>
									  </tr>
									  <tr>
										<td>
											<a href="<?=site_url() ?>/%d8%b1%d9%88%db%8c%d8%af%d8%a7%d8%af-%d9%85%d9%82%d8%af%d9%85%d8%a7%d8%aa%db%8c-%d8%b1%d9%88%d8%b4%d8%a7/" class="btn btn-success"> مطالعه بیشتر</a>
										</td>
									  </tr>
									</tbody>
								</table>
							</div>
						</div>
					
					
						<div class="col-xs-12 col-md-3 col-sm-3">	
							<div class="course-frame" style=" border-color: #b8a266; border-bottom: 3px solid #b8a266;">
								<img class="img-circle" src="<?php echo get_template_directory_uri(); ?>/images/course/course2.jpg" />
								<h4>پکیج پیش شتابدهی</h4>
								<table class="table table-striped table-bordered">									
									<tbody>
									  <tr>
										<td>شناخت توانمندی ها و بسترسازی جهت شکوفایی استعدادها</td>
									  </tr>
									  <tr>
										<td>مدت زمان:٦٠ ساعت</td>
									  </tr>
									  <tr>
										<td>پیش نیاز: لازم ندارد</td>
									  </tr>
									  <tr>
										<td>مخاطبان:۶ -۱۸ سال 
										</td>
									  </tr>
									  <tr>
										<td>
												<a href="<?=site_url() ?>/%D9%BE%DA%A9%DB%8C%D8%AC-%DA%A9%D8%A7%D9%85%D9%84-%D9%BE%DB%8C%D8%B4-%D8%B4%D8%AA%D8%A7%D8%A8%D8%AF%D9%87%DB%8C/" class="btn btn-success"> مطالعه بیشتر</a>
										</td>
									  </tr>
									</tbody>
								</table> 
							</div>
						</div>
					
					
						<div class="col-xs-12 col-md-3 col-sm-3">	
							<div class="course-frame" style=" border-color: #b9667a; border-bottom: 3px solid #b9667a;">
								<img class="img-circle" src="<?php echo get_template_directory_uri(); ?>/images/course/course3.jpg" />
								<h4>پکیج شتابدهی</h4>
								<table class="table table-striped table-bordered">
									<tbody>
									  <tr>
										<td>حرکت در مسیر ساختن رؤیاها و ایده های ناب در دنیای واقعی</td>
									  </tr>
									  <tr>
										<td>مدت زمان:٤٠ ساعت</td>
									  </tr>
									  <tr>
										<td>پیش نیاز: لازم ندارد</td>
									  </tr>
									  <tr>
										<td>مخاطبان:١٢ -۱۸ سال </td>
									  </tr>
									  <tr>
										<td>
												<a href="<?=site_url() ?>/%D9%BE%DA%A9%DB%8C%D8%AC-%DA%A9%D8%A7%D9%85%D9%84-%D8%B4%D8%AA%D8%A7%D8%A8%D8%AF%D9%87%DB%8C/" class="btn btn-success"> مطالعه بیشتر</a>
										</td>
									  </tr>
									</tbody>
								</table> 
							</div>
						</div>
					 
					
						<div class="col-xs-12 col-md-3  col-sm-3">
							<div class="course-frame" style=" border-color: #6670b7; border-bottom: 3px solid #6670b7;">
								<img class="img-circle" src="<?php echo get_template_directory_uri(); ?>/images/course/course4.jpg" />
								<h4>رویداد ملی روشا</h4>
								<table class="table table-striped table-bordered">
								<tbody>
									  <tr>
										<td>رویدادی سراسر یادگرفتن، یاددادن، تجربه و خلق کردن</td>
									  </tr>
									  <tr>
										<td>مدت زمان:١٦ ساعت </td>
									  </tr>
									  <tr>
										<td>
											پیش نیاز: لازم ندارد</td>
									  </tr>
									  <tr>
										<td>
											مخاطبان:١٢ -۱۸ سال 
										</td>
									  </tr>		
									  <tr>
										<td>
												<a href="<?=site_url() ?>/%D8%B1%D9%88%DB%8C%D8%AF%D8%A7%D8%AF-%D9%85%D9%84%DB%8C-%D8%B1%D9%88%D8%B4%D8%A7/" class="btn btn-success"> مطالعه بیشتر</a>
										</td>
									  </tr>
									</tbody>
								 </table> 
							</div>
						</div>
					</div>
				</div>
			</div>		
		</div>	 
			 
    </section> 
 
	
	<div class="message-info" style="border-radius:0px;width:100%;text-align:center;">
با خرید یکجای دروه های روشا از 20% تخفیف بهره مند شوید . <br>
  <a style="right: initial;" class="btn btn-register" href="<?=site_url() ?>/%d9%be%da%a9%db%8c%d8%ac-%d8%b4%d8%aa%d8%a7%d8%a8%d8%af%d9%87%db%8c-%d8%b1%d9%88%d8%b4%d8%a7/">مطالعه بیشتر</a>
  
</div>
	
	<!---course area--->
	<section class="sec-course " >
        <div class="course-bg" id="sec-course"> 
			<div class="span9 title-box">
				<span class="course-title">معرفي تيم هاي اعزام شده به المپياد بين المللي:</span>
			</div>	
							
			<div class="carousel carousel-showsixmoveone slide" id="carousel123"  data-ride="carousel">		
				
				<div   id="course-box"   role="listbox">
					
					<div class="item active">
						<div class="col-xs-12 col-md-3 col-sm-3">
							<div class="team-frame" style=" border-color: #b8a266; border-bottom: 3px solid #b8a266;">
								<a href="<?=site_url() ?>?p=446" class="btn-more">
								<h4 class="team-title">تيم ستاره</h4>
								</a>
								
								<p>
								از مرکز شکوفایی کرج  <br> 
								حوزه زیست فناوری
								</p>
								<a href="<?=site_url() ?>?p=446" class="btn btn-default"> مطالعه بیشتر</a>
								
							</div>
						</div>
					 
						<div class="col-xs-12 col-md-3  col-sm-3">
							<div class="team-frame" style=" border-color: #65b96b; border-bottom: 3px solid #65b96b;">
								<a href="<?=site_url() ?>?p=443" class="btn-more">
								<h4 class="team-title">تيم باران </h4>
								</a>
								<p>
								از مرکز رشد فناوری یزد <br> 
								حوزه سلامت و فناوری اطلاعات
								</p>
							<a href="<?=site_url() ?>?p=443" class="btn btn-default"> مطالعه بیشتر</a>
							</div>
						</div>
					
						<div class="col-xs-12 col-md-3  col-sm-3">
							<div class="team-frame" style=" border-color: #b9667a; border-bottom: 3px solid #b9667a;">
								<a href="<?=site_url() ?>?p=440" class="btn-more">
								<h4>تيم لاله</h4>
								</a>
								<p>
								از مرکز رشد دانشگاه الزهرا <br> 
								حوزه صنایع دستی و هنری 
								</p>
							<a href="<?=site_url() ?>?p=440" class="btn btn-default"> مطالعه بیشتر</a>
							</div>
						</div>
					
						<div class="col-xs-12 col-md-3  col-sm-3">
							<div class="team-frame" style=" border-color: #6670b7; border-bottom: 3px solid #6670b7;">
								<a href="<?=site_url() ?>?p=442"  >
									<h4>تيم سپهر </h4>
								</a>
								<p>
								از مرکز شتابدهی اصفهان <br>
								آموزش از راه دور نوین
								</p>
								<a href="<?=site_url() ?>?p=442" class="btn btn-default"> مطالعه بیشتر</a>
							</div>
						</div>
					</div>
					
					  
					
				</div>
					
				
			</div>		
		</div>
					 
			 
    </section> 
 
	
	<!---counter area--->
    <section class="sec-counter" >
       <div class="container">
            <div class="row">
			
				<div class="col-xs-12 col-md-3  col-sm-3 pull-right">
					<img class="  img-count" src="<?php echo get_template_directory_uri(); ?>/images/loc.png" />
					<h4 >نمایندگی ها </h4>
					<div class="rotated">35</div>
				</div>
				<div class="col-xs-12 col-md-3  col-sm-3 pull-right">
					<img class=" img-count" src="<?php echo get_template_directory_uri(); ?>/images/time.png" />
					<h4>تعداد بازدیدها </h4>
					<div class="rotated">353435</div>
				</div>
				<div class="col-xs-12 col-md-3  col-sm-3 pull-right">
					<img class=" img-count" src="<?php echo get_template_directory_uri(); ?>/images/cor.png" />
					<h4>دوره های برگزار شده </h4>
					<div class="rotated">186</div>
				</div>
				<div class="col-xs-12 col-md-3  col-sm-3 pull-right">
					<img class="img-count" src="<?php echo get_template_directory_uri(); ?>/images/user.png" />
					<h4>تعداد کاربران سایت </h4>
					<div class="rotated">3534</div>
				</div>
				
            </div>
        </div>
    </section>
	
	
	<!---comment tips area -->
    <section class="sec-comment"  >
		<div class="container">
			<div class="row comment">
				<div class="comment-box">
					<div class="comment-content" id="content1">
						<p>
						<blockquote>
						<strong>با خلاقیت اثری از خود به جا بگذارید . </strong><br>
پیام استیو این بود همه ی ما می توانیم دنیا را تغییر دهیم. او از همه ی ما خواست که متفاوت فکر کنیم او باور داشت و می دانست که انسان در صورت داشتن جرات و تلاش و پشتکار می تواند به اهداف بزرگ دست یابد . استیو همیشه به افراد توصیه می کرد تلاش کنید در دنیا اثری بگذارید  <br>
استیو جابز هیچ وقت مسیرهای ساده و بدون دشواری را انتخاب نمی کرد او هیچ وقت کلمه وضع موجود را هم نمی پذیرفت . هیچ جزییاتی از نر استیو دور نمی ماند . او باور داشت و می دانست که انسان در صورت داشتن جرئت و تلاش و پشتکار می تواند به اهداف بزرگ دست یابد . 
او می گفت ما می توانیم با یکدیگر دنیا رابه جای بهتری تبدیل کنیم.
						</blockquote>
						
						</p>
						<div class="writer-comment">
							<img class="img-comment" src="<?php echo get_template_directory_uri(); ?>/images/notic/1.jpg" />
							<h2> استیو جابز </h2>
							<h3>بنیانگذار فقید اپل</h3>
						</div>	
					</div>
					<div class="comment-content" id="content2">
						<p>
						<blockquote>
						 <strong>خلاقیت به اندازه ی سواد اهمیت دارد . </strong><br>
						يک سيستم آموزش و پرورش بايد خلاقيت را پرورش بدهد و نه اينکه آن را سرکوب کند. در اغلب جاهای دنیا همه آدم ها ابتدا به ریاضیات و علوم تجربی و سپس به علوم انسانی و بعد هنر اهمیت می دهند چرا که سیستم آموزشی زمانی که شکل گرفت برای رفع نیاز نیروی کار بود و طبعاً کارها در آن زمان بیشتر به ریاضیات و علوم تجربی و کمتر به دو تای بعدی نیاز داشتند و به مرور این جا افتاده است که رشته ریاضی مهم تر است . او معتقد است اوج و نهایت برون دادِ نظام آموزشی تولید استاد است و استاد کسی است درست شبیه ما که از بدنش برای حمل سرش استفاده می کند ، کسی که در کنفرانس های علمی شرکت می کند و درباره آنچه مطرح شده مقاله می نویسد . در واقع منظور او این است که نظام های آموزشی فقط روی سر به بالای انسان کار می کند و به سایر مهارت ها و استعدادها هیچ توجهی ندارد . مثل زبان بدن ، مهارت های حسی و به گفته او بچه های ما تنها به مدرسه می روند تا خواندن و نوشتن بیاموزند و این یک ظلم بزرگ است


						</blockquote>
						</p>
						<div class="writer-comment">
							<img class="img-comment" src="<?php echo get_template_directory_uri(); ?>/images/notic/2.jpg" />
							<h2>سرکن رابینسون </h2>
							<h3>پیشروی حوزه ی اموزش</h3>
						</div>
					</div>
					<div class="comment-content" id="content3">
						<p>
						<blockquote>
						 <strong>افراد خلاق بر آینده حکومت می کنند.</strong><br>
						 دهه های اخیر متعلق به افرادی خاص و با افکار متفاوت است 
اینده ی پیش رو متعلق به افراد بسیار متفاوت با افکار بسیار متفاوت است  افرادی که حساسیت و درک بالایی دارند و می توانند بیشترین سودهای اجتماعی را برای مردمب ه ارمغان بیاورند ضمن این که خودشان نیز احساس شادی می کنند .
						</blockquote>
						</p>
						<div class="writer-comment">
							<img class="img-comment" src="<?php echo get_template_directory_uri(); ?>/images/notic/3.jpg" />
							<h2>دنیل پینک</h2>
							<h3>یکی از پنجاه متفکر مدیریت جهان</h3>
						</div>
					</div>
					<div class="comment-content" id="content4">
						<p>
						<blockquote>
						برادران کلی باور دارند که در هر سن و موقعیت کاری نه تنها میتوانیم دوباره خلاقیت درونی خود را بارور و احیا کنیم بلکه می توانیم در رسیدن دیگران به خودباوری در خلاقیت نیز نقش آفرین باشیم.  <br>
 تام و دیوید کلی <br>
حتما برای شما هم پیش امده که از شنیدن پرسش ها و سخنان خلاقانه ی کودکان به وجد آمده و و از قدرت خلاقیت آن ها متعجب شده باشید و احتمالا تصدیق می کنید که بسیاری از کودکان این گونه اند

						</blockquote>
						</p>
						<div class="writer-comment">
							<img class="img-comment" src="<?php echo get_template_directory_uri(); ?>/images/notic/4.jpg" />
							<h2>برادران کلی </h2>
							<h3> مدیر و موسس شرکت IDEO</h3>
						</div>
					</div>
					 
				</div>
			</div>
		</div>
		<div class="comment-control">	
			<a class="next" onClick="showNextText()" ><img src="<?php echo get_template_directory_uri(); ?>/images/next.jpg" /> </a>
			<a class="prev" onClick="showPrevText()"><img src="<?php echo get_template_directory_uri(); ?>/images/prev.jpg" /> </a>					
		</div>
	    <div class="comment-counter">
		1 / 4
	    </div>
		
	<script>
	var currentText=1; 
	function hideText() {
		$('#content1').css('display','none');
		$('#content2').css('display','none');
		$('#content3').css('display','none');
		$('#content4').css('display','none'); 
	}
	function showNextText(){
		hideText();
		currentText++ ; 
		if(currentText == 5 )
			currentText = 1 ; 
		$('#content'+(currentText)).css('display','block');
		$('.comment-counter').html(currentText.toString()  + ' / 4');
	}
	function showPrevText(){
		hideText();
		currentText-- ; 
		if(currentText == 0 )
			currentText = 4 ; 
		$('#content'+(currentText)).css('display','block');
		$('.comment-counter').html(currentText.toString()  + ' / 4');
	}
	
	document.getElementById('content1').style['display']='block';
	</script>
	
    </section> 
   
   
<?php get_footer(); ?> 
    
</body>

</html>
