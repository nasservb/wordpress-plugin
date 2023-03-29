<?php
/**
 * The template for displaying comments
 *
 * The area of the page that contains both current comments
 * and the comment form.
 *
 * @package WordPress
 * @subpackage Twenty_Sixteen
 * @since Twenty Sixteen 1.0
 */

/*
 * If the current post is protected by a password and
 * the visitor has not yet entered the password we will
 * return early without loading the comments.
 */
if ( post_password_required() ) {
	return;
}
?>
 <!-- Material Design fonts -->     
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700">
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">

    <!-- Bootstrap Material Design -->
    <link rel="stylesheet" href="https://cdn.rawgit.com/FezVrasta/bootstrap-material-design/dist/dist/bootstrap-material-design.min.css">

	
<style>
	  
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

<div class="content-bg">
	<div id="comments" class="comments-area post-box">

	<?php if ( have_comments() ) : ?>
		<h2 class="comments-title">
			<?php
				$comments_number = get_comments_number();
				if ( 1 === $comments_number ) {
					/* translators: %s: post title */
					printf( _x( 'One thought on &ldquo;%s&rdquo;', 'comments title', 'twentysixteen' ), get_the_title() );
				} else {
					printf(
						/* translators: 1: number of comments, 2: post title */
						_nx(
							'%1$s thought on &ldquo;%2$s&rdquo;',
							'%1$s thoughts on &ldquo;%2$s&rdquo;',
							$comments_number,
							'comments title',
							'twentysixteen'
						),
						number_format_i18n( $comments_number ),
						get_the_title()
					);
				}
			?>
		</h2>

		<?php the_comments_navigation(); ?>

		<ol class="comment-list">
			<?php
				wp_list_comments( array(
					'style'       => 'ol',
					'short_ping'  => true,
					'avatar_size' => 42,
				) );
			?>
		</ol><!-- .comment-list -->

		<?php the_comments_navigation(); ?>

	<?php endif; // Check for have_comments(). ?>

	<?php
		// If comments are closed and there are comments, let's leave a little note, shall we?
		if ( ! comments_open() && get_comments_number() && post_type_supports( get_post_type(), 'comments' ) ) :
	?>
		<p class="no-comments"> نظر دهی به این مطلب بسته شده است. </p>
	<?php endif; ?>

	<?php 
	$fields =  array(
	  'author' =>
		' 
		<div class="comment-form-author form-group">
			<label  class="bmd-label-floating" for="author">نام </label> 
			<span class="required">*</span>
			<input id="author" class="form-control" name="author" type="text" value="" size="30"  />
		</div>',

	  'email' =>
		'<div class="comment-form-email form-group">
			<label  class="bmd-label-floating" for="email">ایمیل</label> 
			<span class="required">*</span>
			<input id="email" class="form-control" name="email" type="text" value="" size="30"  />
		</div>' 
	);

		$comments_args = array(
			// change the title of send button 
			'label_submit'=>'ارسال',
			// change the title of the reply section
			'title_reply'=>'لطفآ یک پیام بنویسید',
			// remove "Text or HTML to be displayed after the set of comment fields"
			'comment_notes_after' => '',
			'fields' =>$fields ,
			// redefine your own textarea (the comment body)
			'comment_field' => '
				<div class="comment-form-comment form-group">
					<label  class="bmd-label-floating" for="comment">پیام</label><br />
					<textarea id="comment" class="form-control" name="comment" aria-required="true"></textarea>
				</div>'
		);

comment_form($comments_args);



		// comment_form( array(
			// 'title_reply_before' => '<h2 id="reply-title" class="comment-reply-title">',
			// 'title_reply_after'  => '</h2>',
		// ) );
	?>

	</div><!-- .comments-area -->
</div><!-- content-bg-->

<!-- jQuery first, then tether, then Bootstrap Material Design JS. -->
    <script src="https://code.jquery.com/jquery-3.1.0.min.js"></script>
    <script src="https://cdn.rawgit.com/HubSpot/tether/v1.3.4/dist/js/tether.min.js"></script>
    <script src="https://cdn.rawgit.com/FezVrasta/bootstrap-material-design/dist/dist/bootstrap-material-design.iife.min.js"></script>
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="https://maxcdn.bootstrapcdn.com/js/ie10-viewport-bug-workaround.js"></script>
    <script>
      $('body').bootstrapMaterialDesign();
    </script>