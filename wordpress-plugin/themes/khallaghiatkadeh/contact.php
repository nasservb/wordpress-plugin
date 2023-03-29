<?php
/*!
 * Template Name: صفحه ی تماس با ما 
 * Theme URI: http://Khalaghiatkadeh.com
 * Author: nasser niazy mobasser
 * Author URI: http://niazy.ir/
 * Design: Nov 11, 2016 
 * Copyright: abrezendegi.ir all right reserved.
 */
 
get_header(); 	

function GetIP() 
{
    foreach (array('HTTP_CLIENT_IP', 'HTTP_X_FORWARDED_FOR', 'HTTP_X_FORWARDED', 'HTTP_X_CLUSTER_CLIENT_IP', 'HTTP_FORWARDED_FOR', 'HTTP_FORWARDED', 'REMOTE_ADDR') as $key)
    {
        if (array_key_exists($key, $_SERVER) === true)
        {
            foreach (array_map('trim', explode(',', $_SERVER[$key])) as $ip)
            {
                if (filter_var($ip, FILTER_VALIDATE_IP, FILTER_FLAG_NO_PRIV_RANGE | FILTER_FLAG_NO_RES_RANGE) !== false)
                {
                    return $ip;
                }
            }
        }
    }
}

	if(!isset($_POST['submit']))
	{
?>

  <!-- Material Design fonts -->     
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700">
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">

    <!-- Bootstrap Material Design -->
    <link rel="stylesheet" href="https://cdn.rawgit.com/FezVrasta/bootstrap-material-design/dist/dist/bootstrap-material-design.min.css">

<link rel="stylesheet" href="https://unpkg.com/leaflet@1.0.2/dist/leaflet.css" />
<script src="https://unpkg.com/leaflet@1.0.2/dist/leaflet.js"></script>

<!---machine picture area--->
	<section class="sec-course "  >
        <div class="content-bg"> 
	
<div class="post-box">
<?php 
if(have_posts() )
{
	the_post();
	the_content( );
}
?>

<style>
	.leaflet-popup-content{text-align:right}
	 
	 input:focus,.form-control:focus{
		border:0;
		box-shadow:none;
	}
	.radio label{
		padding-right:25px; 
		color:#656565;
		 font-family: IRANSans;
	}
	.radio label .bmd-radio, label.radio-inline .bmd-radio{
		left:unset; 
		right:0;
	}
	.navbar{box-shadow:none;border:0; font-family: IRANSans; }
	body{font-family: IRANSans;}
	.bmd-form-group .bmd-label-static, .bmd-form-group.is-filled .bmd-label-floating, .bmd-form-group .is-filled .bmd-label-floating, .bmd-form-group.is-focused .bmd-label-floating, .bmd-form-group .is-focused .bmd-label-floating
	{
		left:unset;
	}
</style>

<div id="mapid" style="width: 100%; height: 400px;"></div>

<link rel="stylesheet" href="https://unpkg.com/leaflet@1.0.2/dist/leaflet.css" />
<script src="https://unpkg.com/leaflet@1.0.2/dist/leaflet.js"></script>

<style>
	.leaflet-popup-content{text-align:right}
</style>
<script>
$(document).ready(function(){

	var mymap = L.map('mapid').setView([35.7014748,51.3500191 ], 16);
		L.tileLayer('http://{s}.tile.osm.org/{z}/{x}/{y}.png', {
			maxZoom: 17,
			attribution: 'آدرس دفتر مرکزی روی نقشه',
			id: 'mapbox.streets'
		}).addTo(mymap);
		L.marker([35.7014748,51.3500191]).addTo(mymap)
			.bindPopup("<b>شتابدهنده روشا</b><br />محل دفتر مرکزی شتابدهنده روشا. ").openPopup();
});
</script>	
	 
	

	<!-- jQuery first, then tether, then Bootstrap Material Design JS. -->
    <script src="https://code.jquery.com/jquery-3.1.0.min.js"></script>
    <script src="https://cdn.rawgit.com/HubSpot/tether/v1.3.4/dist/js/tether.min.js"></script>
    <script src="https://cdn.rawgit.com/FezVrasta/bootstrap-material-design/dist/dist/bootstrap-material-design.iife.min.js"></script>
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="https://maxcdn.bootstrapcdn.com/js/ie10-viewport-bug-workaround.js"></script>
    <script>
      $('body').bootstrapMaterialDesign();
    </script>
	<br>
	<br>
	<form method="POST">
		<div class="row"> 
			<div class="col-md-6" style="position:relative;left:25%;right:25%">
				<div class="col-md-6">
					<div class="form-group">
						<label for="inputName" class="bmd-label-floating">*نام و نام خانوادگی</label>
						<input type="text" class="form-control" id="inputName" name="inputName"/>
						 <span class="bmd-help">فارسی تایپ کنید</span>
					</div>
					<div class="form-group">
						<label for="inputPhone" class="bmd-label-floating">*شماره تماس</label>
						<input type="text" class="form-control" id="inputPhone" name="inputPhone"/>
						 <span class="bmd-help">شماره منزل یا همراه خود را وارد کنید</span>
					</div>					
				</div>
				<div class="col-md-6">
					<div class="form-group">
						<label for="inputEmail" class="bmd-label-floating">آدرس ایمیل</label>
						<input type="text" class="form-control" id="inputEmail" name="inputEmail"/>
						 <span class="bmd-help">اگر ایمیلی ندارید این کادر را خالی بگذارید</span>
					</div>
					
					
					<div class="form-group bmd-form-group is-filled">
						<label for="inputSubject1" class="bmd-label-floating">موضوع : </label>
						<select class="form-control combo-box" id="inputSubject1" name="inputSubject" >
						  <option value=1>انتقاد یا شکایت</option>
						  <option value=2> مدیریت</option>
						  <option value=3>سایر موضوعات</option>
						</select>
					</div>
  
					 
				</div>
				<div class="col-md-12">
					<div class="form-group">
						<label for="inputMessage"  rows="3" class="bmd-label-floating">*متن پیام</label>
						<textarea class="form-control" id="inputMessage" name="inputMessage"/></textarea>
					</div>
				</div>
				<div class="col-md-12">
					<div class="form-group">
						<input type="submit" name="submit" value="ارسال پیام" class="btn btn-success" />
					</div>
				</div>
			</div>
		</div>
	</form>
 <?php 
 
	}
	else 
	{
		$time = current_time('mysql');
		
		$subject='';
		
		if(	isset($_POST['inputSubject']))
		{
			if($_POST['inputSubject']=='1')
			{
				$subject = 'انتقاد یا شکایت' ;
			}
			else if($_POST['inputSubject']=='1')
			{
				$subject = 'مدیریت' ;
			}
			else 
			{
				$subject = 'سایر موضوعات' ;
			}
			
		}
		if(	empty($_POST['inputName']) || 	empty($_POST['inputPhone']) || 	empty($_POST['inputMessage'])  )
		{
			echo '<div class="alert alert-warning">اطلاعات به درستی مقدار دهی نشده است . لطفآ موارد ستاره دار را وارد نمائید  . </div>';
		}
		else 
		{
			$data = array(
				'comment_post_ID' => 1,
				'comment_author' =>$_POST['inputName'],
				'comment_author_email' => $_POST['inputEmail'],
				'comment_author_url' => $_POST['inputPhone'],
				'comment_content' => 
								('نام : ' . $_POST['inputName']. "\n" .
								'ایمیل : ' . $_POST['inputEmail']. "\n" .
								'تلفن : ' . $_POST['inputPhone']. "\n" .
								'موضوع : ' . $subject. "\n" .
								'پیام : ' . $_POST['inputMessage']),
				'comment_type' => '',
				'comment_parent' => 0,
				'user_id' => 1,
				'comment_author_IP' => GetIP(),
				'comment_agent' => $_SERVER['HTTP_USER_AGENT'] ,
				'comment_date' => $time,
				'comment_approved' => 1,
			);

			wp_insert_comment($data);
			
			echo '<div class="alert alert-info">نظر شما با موفقیت ارسال شد . </div>';
		}
		
		
	}
	
?>  
		</div>
	</div> 
</section>
<?php 

get_footer();


 ?> 
    
</body>   

</html>
