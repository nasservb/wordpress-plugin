<?php 
	
	remove_action( 'admin_color_scheme_picker', 'admin_color_scheme_picker' );
		
		echo '
		<script src="'.plugins_url('khallaghiatkadeh/theme/js/jquery.min.js').'"></script>
		<script type="text/javascript">
		 
		  jQuery(document).ready(function( $ ){	
		  
			$(".user-admin-bar-front-wrap").remove();
			$(".user-nickname-wrap").css("display","none");
			//$(".user-display-name-wrap").css("display","none");
			$(".user-url-wrap").css("display","none");
			$(".user-description-wrap").css("display","none");
			$(".user-profile-picture").css("display","none");
			$(".user-sessions-wrap").css("display","none");
			
			$(\'h2:contains("خودتان")\').remove();
			$(\'h2:contains("تماس")\').remove();
			$(\'h2:contains("حساب")\').remove();
			$(\'h2:contains("شخصی")\').remove();
		  });
		</script>
		'; 
?>