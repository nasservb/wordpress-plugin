<?php
/**
 * The template for displaying all single posts and attachments
 *
 * @package WordPress
 * @subpackage Twenty_Sixteen
 * @since Twenty Sixteen 1.0
 */

get_header(); ?>
<section class="sec-course "  >
    <div class="content-bg"> 
<div id="primary" class="post-box">
	<main id="main" class="site-main" role="main">
		<?php
		// Start the loop.
		while ( have_posts() ) : the_post();

			// Include the single post content template.
			get_template_part( 'content', 'single' );

			// If comments are open or we have at least one comment, load up the comment template.
			if ( comments_open() || get_comments_number() ) {
				comments_template('/comments.php');
			}

			if ( is_singular( 'attachment' ) ) {
				// Parent post navigation.
				the_post_navigation( array(
					'prev_text' => _x( '<span class="meta-nav">Published in</span><span class="post-title">%title</span>', 'Parent post link', 'twentysixteen' ),
				) );
			} elseif ( is_singular( 'post' ) ) {
				// Previous/next post navigation.
				
				//posts_nav_link('|','مطلب قبلی','مطلب بعدی');
				echo '<style>.screen-reader-text{font-size:10pt}</style>';
				the_post_navigation( array(
						'prev_text'                  =>   'مطلب قبلی: %title' ,
						'next_text'                  =>   'مطلب بعدی: %title'  ,
						'in_same_term'               => true,
						'screen_reader_text'		=>'نوشته های پیشین'
					) );
			}

			// End of the loop.
		endwhile;
		?>

	</main><!-- .site-main -->

	<?php get_sidebar( 'content-bottom' ); ?>

</div><!-- .content-area -->
</div>
</section>
<?php get_sidebar(); ?>
<?php get_footer(); ?>
