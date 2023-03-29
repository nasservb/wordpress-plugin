
<?php
/*!
 * Template Name: parent_profile
 * Theme URI: http://Khalaghiatkadeh.com
 * Author: nasser niazy mobasser
 * Author URI: http://niazy.ir/
 * Design: Nov 11, 2016 
 * Copyright: abrezendegi.ir all right reserved.
 */
 
get_header(); 


$page = (isset($_REQUEST['p'] ) ? $_REQUEST['p'] : 'index'); 
$dir = (isset($_REQUEST['dir'] ) ? $_REQUEST['dir'] : 'edit'); 

?>
 <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/profile.css" type="text/css">
<!---machine picture area--->
	<section class="sec-course "  >
       <div class="content-bg"> 
			<div class="cntainer ">
				<div class="row">
					<div class="col-sm-2 col-md-3 panel">
						<div class="pull-right menu-frame">
							<a href="?dir=edit&p=profilePic">
							<img <?php
							
								$id = get_current_user_id();
								$profile_picture = '';
								$profile_picture =  get_user_meta( $id, 'profile_picture', true ) ;  
								echo ($profile_picture==''? '' : 'src="'.$profile_picture.'" ' );								
								
							?> class="img-circle" id="parentProfilePic" style="max-height:100px;max-width:100px" />
							</a>
							<div id="changePicture" ></div>
							<div class="menu-box">
								<ul >
									<li class="menu-name" style="left: 27px;"><?php
										global $current_user;
										wp_get_current_user();
										echo ($current_user->last_name == '' ? $current_user->display_name : $current_user->first_name .' '.$current_user->last_name ); 
									?></li>
									<li class="menu-edit <?php echo ($dir=='edit'? 'active' : '') ?>"><a href="?dir=edit">ویرایش اطلاعات</a></li>
									<li class="menu-shop <?php echo ($dir=='shop'? 'active' : '') ?>"><a href="?dir=shop">سفارشات فروشگاه</a></li>
									<li class="menu-course <?php echo ($dir=='course'? 'active' : '') ?>"><a href="?dir=course">دوره ها</a></li>
									<li class="menu-list <?php echo ($dir=='list'? 'active' : '') ?>"><a href="?dir=list">لیست فرزندان</a></li>
									<li class="menu-message <?php echo ($dir=='message'? 'active' : '') ?>"><a href="?dir=message">پیام ها</a></li>
									<li class="menu-request <?php echo ($dir=='request'? 'active' : '') ?>"><a href="?dir=request">درخواست ها</a></li>
									<li class="menu-exit" style="left: 65px; text-align: center; padding-right: 7px;"><a href="<?php echo wp_logout_url(); ?>">خروج</a></li>
								  </ul>
							</div>
						</div>
					</div>
			
					<div class="col-sm-9 pull-right panel-content">
						<?php 
							include 'profile/parent/'. $dir . '/' . $page . '.php';
						?>
					</div>
				</div>	
			</div>
			
		</div>			 
			 
    </section> 
 

 <?php get_footer(); ?> 
   

</body>

</html>
