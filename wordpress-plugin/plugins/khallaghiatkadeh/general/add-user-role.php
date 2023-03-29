<?php 

   function add_role_caps($roleName,$roleNiceName) 
   {
		$role = get_role( $roleName );
		// create if neccesary
		if (!$role) $role = add_role($roleName, $roleNiceName); 
		// add theme specific roles
		// $role->add_cap('delete_posts');
		// $role->add_cap('delete_published_posts');
		// $role->add_cap('edit_posts');
		// $role->add_cap('edit_published_posts');
		// $role->add_cap('publish_posts');
		$role->add_cap('read');
		$role->add_cap($roleName);
		// $role->add_cap('upload_files');
		//remove_role($roleName);
	}
	function addRols()
	{
		add_role_caps('user','نو اندیش');
		add_role_caps('teacher','مربی'); 
		add_role_caps('parent','والدین');
		add_role_caps('agent','نمایندگی');
	}
	add_action( 'admin_init', 'addRols');
 
?>