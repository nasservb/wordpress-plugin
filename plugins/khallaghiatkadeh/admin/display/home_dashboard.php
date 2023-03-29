<?php 
 
	
	function register_admin_dashboard_widget() {
		 
			wp_add_dashboard_widget(
				'my_dashboard_widget',
				'پرتال مدیریت ثبت وبسایت های سلامت',
				'admin_dashboard_widget_display'
			);
		 

	}
	
	 
	function admin_dashboard_widget_display() {
		echo ' به پرتال مدیریت ثبت وبسایت های سلامت خوش آمدید .<br>
		جهت مشاهده وب سایت های ثبت شده از منوی کنار صفحه گزینه وب سایت ها را انتخاب نمائید . ';
	}
  
	 
	
?>