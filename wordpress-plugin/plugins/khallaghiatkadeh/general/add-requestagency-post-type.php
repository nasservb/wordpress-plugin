<?php 
// Register Custom Post Type
function requestagency_post_type() {

	$labels = array(
		'name'                  => 'درخواست نمایندگی',
		'singular_name'         => 'درخواست نمایندگی',
		'menu_name'             =>  'درخواست های نمایندگی',
		'name_admin_bar'        =>  'درخواست نمایندگی',
		'archives'              =>  'Item Archives',
		'attributes'            =>  'Item Attributes',
		'parent_item_colon'     =>  'درخواست مربوط:',
		'all_items'             =>  'همه درخواست ها',
		'add_new_item'          =>  'ارسال درخواست جدید',
		'add_new'               =>  'ارسال درخواست جدید',
		'new_item'              =>  'درخواست جدید',
		'edit_item'             =>  'ویرایش درخواست',
		'update_item'           =>  'بروزرسانی درخواست',
		'view_item'             =>  'مشاهده درخواست',
		'view_items'            =>  'مشاهده آیتم',
		'search_items'          =>  'جستجوی درخواست',
		'not_found'             =>  'درخواست یافت نشد',
		'not_found_in_trash'    =>  'درخواستی در زباله دان نیست',
		'insert_into_item'      =>  'Insert into item',
		'uploaded_to_this_item' =>  'Uploaded to this item',
		'items_list'            =>  'Items list',
		'items_list_navigation' =>  'Items list navigation',
		'filter_items_list'     =>  'Filter items list',
	);
	$args = array(
		'label'                 =>  'درخواست' ,
		'description'           =>  'تیکت به هر درخواست.' ,
		'labels'                => $labels,
		'supports'              => array( 'title', 'editor',  'author' ),
		'taxonomies'            => array(), //array( 'category', 'post_tag' ),
		'hierarchical'          => true,
		'public'                => true,
		'show_ui'               => true,
		'show_in_menu'          => true,
		'delete_with_user'      => false,
		'menu_position'         => 5,
		'show_in_admin_bar'     => true,
		'show_in_nav_menus'     => true,
		'can_export'            => true,
		'has_archive'           => true,		
		'exclude_from_search'   => false,
		'publicly_queryable'    => true,
		'rewrite'     			=> false,
		'capability_type'       => 'page',
	);
	register_post_type( 'requestagency', $args );

}


add_action( 'init', 'requestagency_post_type', 0 );


	/**
 * Save post metadata when a post is saved.
 *
 * @param int $post_id The post ID.
 * @param post $post The post object.
 * @param bool $update Whether this is an existing post being updated or not.
 */
function save_post_requestagency( $post_id, $post) 
{	 
	if (defined('DOING_AUTOSAVE') && DOING_AUTOSAVE) 
	{
		return;
	}
	
	if ( empty( $post_id ) || empty( $post ) || empty( $_POST ) ) return;
	 			
		 
	
	if( ! empty($_REQUEST['family'] ) ) 
	{	
		add_post_meta( $post_id, 'family',$_POST['family'],true);
		wp_update_post( $post_id, 'family', $_POST['family']);
	}
	
	 
	
	if( ! empty($_REQUEST['user_email'] ) ) 
	{	
		add_post_meta( $post_id, 'user_email',$_POST['user_email'],true);
		wp_update_post( $post_id, 'user_email', $_POST['user_email']);
	}
	 
	
	if( ! empty($_REQUEST['melli'] ) ) 
	{	
		add_post_meta( $post_id, 'melli',$_POST['melli'],true);
		wp_update_post( $post_id, 'melli', $_POST['melli']);
	}
	 
	
	if( ! empty($_REQUEST['state'] ) ) 
	{	
		add_post_meta( $post_id, 'state',$_POST['state'],true);
		wp_update_post( $post_id, 'state', $_POST['state']);
	}
	 
	
	if( ! empty($_REQUEST['city'] ) ) 
	{	
		add_post_meta( $post_id, 'city',$_POST['city'],true);
		wp_update_post( $post_id, 'city', $_POST['city']);
	}
	 
	
	if( ! empty($_REQUEST['field'] ) ) 
	{	
		add_post_meta( $post_id, 'field',$_POST['field'],true);
		wp_update_post( $post_id, 'field', $_POST['field']);
	}
	 
	
	if( ! empty($_REQUEST['degree'] ) ) 
	{	
		add_post_meta( $post_id, 'degree',$_POST['degree'],true);
		wp_update_post( $post_id, 'degree', $_POST['degree']);
	}
	 
	
	if( ! empty($_REQUEST['phone'] ) ) 
	{	
		add_post_meta( $post_id, 'phone',$_POST['phone'],true);
		wp_update_post( $post_id, 'phone', $_POST['phone']);
	}
	 
	
	if( ! empty($_REQUEST['mobile'] ) ) 
	{	
		add_post_meta( $post_id, 'mobile',$_POST['mobile'],true);
		wp_update_post( $post_id, 'mobile', $_POST['mobile']);
	}
	 
	
	if( ! empty($_REQUEST['address'] ) ) 
	{	
		add_post_meta( $post_id, 'address',$_POST['address'],true);
		wp_update_post( $post_id, 'address', $_POST['address']);
	}
	
	if( ! empty($_REQUEST['pass'] ) ) 
	{	
		add_post_meta( $post_id, 'pass',$_POST['pass'],true);
		wp_update_post( $post_id, 'pass', $_POST['pass']);
	}
	 
	
	 
	
}
add_action( 'publish_support', 'save_post_requestagency', 1, 2 );

	

?>