<?php 
// Register Custom Post Type
function messages_post_type() {

	$labels = array(
		'name'                  => _x( 'پیام ها', 'Post Type General Name', 'text_domain' ),
		'singular_name'         => _x( 'پیام', 'Post Type Singular Name', 'text_domain' ),
		'menu_name'             =>  'پیام ها',
		'name_admin_bar'        =>  'پیام',
		'archives'              =>  'Item Archives',
		'attributes'            =>  'Item Attributes',
		'parent_item_colon'     =>  'پیام مربوط:',
		'all_items'             =>  'همه پیام ها',
		'add_new_item'          =>  'ارسال پیام جدید',
		'add_new'               =>  'ارسال پیام جدید',
		'new_item'              =>  'پیام جدید',
		'edit_item'             =>  'ویرایش پیام',
		'update_item'           =>  'بروزرسانی پیام',
		'view_item'             =>  'مشاهده پیام',
		'view_items'            =>  'مشاهده آیتم',
		'search_items'          =>  'جستجوی پیام',
		'not_found'             =>  'پیام یافت نشد',
		'not_found_in_trash'    =>  'پیامی در زباله دان نیست',
		'insert_into_item'      =>  'Insert into item',
		'uploaded_to_this_item' =>  'Uploaded to this item',
		'items_list'            =>  'Items list',
		'items_list_navigation' =>  'Items list navigation',
		'filter_items_list'     =>  'Filter items list',
	);
	$args = array(
		'label'                 =>  'پیام' ,
		'description'           =>  'پیام به هر فردی.' ,
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
	register_post_type( 'message', $args );

}


add_action( 'init', 'messages_post_type', 0 );




function add_meta_boxes() {
    add_meta_box( 
        'fep_message_to_box',
        'ارسال پیام به : ',
        'message_to_box_content',
        'message',
        'side',
        'high'
    );
	add_meta_box('submitdiv', 'ارسال پیام' , 'message_submit_meta_box', 'message', 'side', 'core');

	// remove_meta_box( 'slugdiv', 'fep_message', 'normal' );
	 //remove_meta_box( 'submitdiv', 'fep_message', 'core' );
	 // add_meta_box( 
				// 'fep_announcement_to',  
				// 'Announcement to roles',
				// array($this, 'announcement_to'), 
				// 'fep_announcement', 
				// 'side',
				// 'core' );
}
add_action ('add_meta_boxes',   'add_meta_boxes'  );
	
function message_to_box_content( $post ) 
{
 
	if ( isset($_GET['action'])  && $_GET['action'] == 'edit' ) {
		$participants = get_post_meta( $post->ID, '_participants' );
		
		if( $participants ) {
			foreach( $participants as $participant ) {
			
				if( $participant != $post->post_author )
				echo '<a href="'. get_edit_user_link( $participant ) .'" target="_blank">'. esc_attr( get_user_nicename( $participant, 'display_name', 'ID' ) ) .'</a>';
			}
		}
		echo '<h2>'.  'ارسالگر'  . '</h2>';
		echo '<a href="'. get_edit_user_link( $post->post_author ) .'" target="_blank">'. esc_attr( get_user_nicename( $post->post_author, 'display_name', 'ID' ) ) .'</a>';

	} else {

		$parent = ( !empty( $_REQUEST['parent_id'] ) ) ? absint( $_REQUEST['parent_id'] ) : '';
		$to 	= ( !empty( $_REQUEST['to'] ) ) ? $_REQUEST['to'] : '';
		
		if( $parent ) {
			echo 'پاسخ به :  '. $parent;
			echo '<input type="hidden" name="parent_id" value="' . $parent . '" />
					<script>
					 jQuery(document).ready(function( $ ){	

						$("#publish").val("ارسال پاسخ");
					});
					</script>
			';
		} else {
			 ?>
							
			<input type="hidden" name="message_to" id="message-to" autocomplete="off" value="<?php echo $to; ?>" />		
			
			<script>
			function changeUser()
			{
				$("#message-to").val($("#message_to_select").val());
			}
			</script>
			
			
			<select id="message_to_select" onchange="changeUser()">
				 
			<?php 
				//$users =get_users(array('role'=>'user') ); 
				$users =get_users(); 
				 
				foreach ( $users as $user ) {
					echo '<option value="'. $user->ID.'">'  . $user->display_name   . '</option>';
				}
			?>
				
			</select>
			
			<?php
		} 
	}
}



	function  get_user_nicename($data, $need = 'ID', $type = 'slug' )
	{
		if (!$data)
			return '';
		
		$type = strtolower($type);
		
		if( 'user_nicename' == $type )
			$type = 'slug';
			
		if ( !in_array($type, array ('id', 'slug', 'email', 'login' )))
			return '';
		
		$user = get_user_by( $type , $data);
		
		if ( $user && in_array($need, array('ID', 'user_login', 'display_name', 'user_email', 'user_nicename', 'user_registered' )))
			return $user->$need;
		else
			return '';
	}
	
	
	
	function columns_content($column_name, $post_ID) 
	{
		global $post;
		
		if ($column_name == 'parent') {
			$parent = $post->post_parent;
			
			if( $parent ) {
				//echo '<a href="'.wp_query_url('viewmessage', array( 'id' => $parent ) ).'" title="" target="_blank">View</a>';
				echo '<a href="#" title="" target="_blank">View</a>';
			} else {
				_e('No Parent', 'front-end-pm');
			}
		}
		if ($column_name == 'participants') {
			$participants = get_post_meta($post_ID, '_participants' );
			
			if( $participants ) {
				foreach( $participants as $participant ) {
				
					if( $participant != $post->post_author )
					echo '<a href="'. get_edit_user_link( $participant ) .'" target="_blank">'. esc_attr( get_user_nicename( $participant, 'display_name', 'ID' ) ) .'</a><br />';
				}
			} else {
				_e('No Participants', 'front-end-pm');
			}
		}
	}
	add_action('manage_message_posts_custom_column', 'columns_content' , 10, 2);
	
	
	/**
 * Save post metadata when a post is saved.
 *
 * @param int $post_id The post ID.
 * @param post $post The post object.
 * @param bool $update Whether this is an existing post being updated or not.
 */
	function save_post_message( $post_id, $post) 
	{	 
		if (defined('DOING_AUTOSAVE') && DOING_AUTOSAVE) 
		{
			return;
		}
		
		if ( empty( $post_id ) || empty( $post ) || empty( $_POST ) ) return;
		
		
		if( ! empty($_REQUEST['parent_id'] ) ) 
		{	
			wp_update_post(
						array(
							'ID' => $post_id, 
							'post_parent' => absint($_REQUEST['parent_id'])
						)
					);
			unset( $_REQUEST['parent_id'] );
		}
		// - Update the post's metadata.

		if ( ! empty( $_REQUEST['message_to'] ) ) {
			update_post_meta( $post_id, '_participants', sanitize_text_field( $_REQUEST['message_to'] ) );
		}
		unset( $_REQUEST['message_to'] );
		
	}
add_action( 'publish_message', 'save_post_message', 1, 2 );

?>