<?php 
// Register Custom Post Type
function supports_post_type() {

	$labels = array(
		'name'                  => _x( 'تیکت ها', 'Post Type General Name', 'text_domain' ),
		'singular_name'         => _x( 'تیکت', 'Post Type Singular Name', 'text_domain' ),
		'menu_name'             =>  'تیکت ها',
		'name_admin_bar'        =>  'تیکت',
		'archives'              =>  'Item Archives',
		'attributes'            =>  'Item Attributes',
		'parent_item_colon'     =>  'تیکت مربوط:',
		'all_items'             =>  'همه تیکت ها',
		'add_new_item'          =>  'ارسال تیکت جدید',
		'add_new'               =>  'ارسال تیکت جدید',
		'new_item'              =>  'تیکت جدید',
		'edit_item'             =>  'ویرایش تیکت',
		'update_item'           =>  'بروزرسانی تیکت',
		'view_item'             =>  'مشاهده تیکت',
		'view_items'            =>  'مشاهده آیتم',
		'search_items'          =>  'جستجوی تیکت',
		'not_found'             =>  'تیکت یافت نشد',
		'not_found_in_trash'    =>  'تیکتی در زباله دان نیست',
		'insert_into_item'      =>  'Insert into item',
		'uploaded_to_this_item' =>  'Uploaded to this item',
		'items_list'            =>  'Items list',
		'items_list_navigation' =>  'Items list navigation',
		'filter_items_list'     =>  'Filter items list',
	);
	$args = array(
		'label'                 =>  'تیکت' ,
		'description'           =>  'تیکت به هر فردی.' ,
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
	register_post_type( 'support', $args );

}


add_action( 'init', 'supports_post_type', 0 );




function add_meta_boxes2() {
    add_meta_box( 
        'fep_support_to_box',
        'ارسال تیکت به : ',
        'support_to_box_content',
        'support',
        'side',
        'high'
    );
	add_meta_box('submitdiv', 'ارسال تیکت' , 'support_submit_meta_box', 'support', 'side', 'core');

	
}

add_action ('add_meta_boxes',   'add_meta_boxes2'  );
	
function support_to_box_content( $post ) 
{
 
	if ( isset($_GET['action'])  && $_GET['action'] == 'edit' ) {
		$participants = get_post_meta( $post->ID, '_to' );
		
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

	
	
	
function columns_content2($column_name, $post_ID) 
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
add_action('manage_support_posts_custom_column', 'columns_content2' , 10, 2);
	
	
	/**
 * Save post metadata when a post is saved.
 *
 * @param int $post_id The post ID.
 * @param post $post The post object.
 * @param bool $update Whether this is an existing post being updated or not.
 */
function save_post_support( $post_id, $post) 
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
		update_post_meta( $post_id, '_to', sanitize_text_field( $_REQUEST['message_to'] ) );
	}
	unset( $_REQUEST['message_to'] );
	
}
add_action( 'publish_support', 'save_post_support', 1, 2 );

?>