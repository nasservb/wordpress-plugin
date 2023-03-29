<?php
/**
 * The default template for displaying content
 *
 * Used for both single and index/archive/search.
 *
 * @package WordPress
 * @subpackage Twenty_Thirteen
 * @since Twenty Thirteen 1.0 
 */
 
	
?>

<article id="post-<?php  the_ID(); ?>" class="post-box">
	<header class="entry-header">
	
		<?php if ( has_post_thumbnail() && ! post_password_required() && ! is_attachment() ) : ?>
		<div class="entry-thumbnail">
			<img style="max-width: 100%;" class="thumbnail" src="<?php echo get_the_post_thumbnail_url(); ?>" />
		</div>
		<?php endif; ?>
			
				 			
					
		<?php if ( is_single() ) : ?>
		<div class="about-text" >
			<h1><span class="title"><?php the_title(); ?></span></h1>
		</div>	
		 
		<?php else : ?>
		<div class="about-text" >
			<h1><span class="title"><a href="<?php the_permalink(); ?>" rel="bookmark"><?php the_title(); ?></a></span></h1>
		</div>	 
		<?php endif; // is_single()

if (! is_page() )
{   
		?>
<p class="post-meta">توسط  <span class="author vcard">
<a href="<?php echo get_author_posts_url( get_the_author_meta( 'ID' ), get_the_author_meta( 'user_nicename' ) ); ?>" title="پست توسط <?php echo get_the_author_meta(); ?>"><?php the_author(); ?></a>
</span> 


 |  <span class="published"><?php 
 
 echo '<span style="padding: 10px;">'. get_the_date('l').','. get_the_date('d F y') .' ساعت '.get_the_time('H:i') . '</span>';
 
 ?></span>  |  
<?php 
}

$categories = get_the_category();
$separator = ' '; 
if ( ! empty( $categories ) ) {
    $output='';
	foreach( $categories as $category ) {
		$output .= '<a href="' . esc_url( get_category_link( $category->term_id ) ) . '" alt="' . esc_attr(   'مشاهده تمام پست ها با موضوع  '. $category->name   ) . '"><span class="tag tag-default">' . esc_html( $category->name ) . '</span></a>&nbsp;'  ;
	}
	echo trim( $output  );
}
?>
 </p>
		<div class="entry-meta et_pb_row et_pb_row_0">
			 
			<?php edit_post_link( 'ویرایش' , '<span class="edit-link">', '</span>' ); ?>
		</div><!-- .entry-meta -->
	</header><!-- .entry-header -->

	<?php if ( is_search() ) : // Only display Excerpts for Search ?>
	<div class="entry-summary">
		<?php the_excerpt(); ?>
	</div><!-- .entry-summary -->
	<?php else : ?>
	<div class="entry-content">
		<?php
			/* translators: %s: Name of current post */
			the_content( sprintf(
				  'مطالعه ادامه  %s <span class="meta-nav">&rarr;</span>' ,
				the_title( '<span class="screen-reader-text">', '</span>', false )
			) );

			wp_link_pages( array( 'before' => '<div class="page-links"><span class="page-links-title">صفحه :</span>', 'after' => '</div>', 'link_before' => '<span>', 'link_after' => '</span>' ) );
		?>
	</div><!-- .entry-content -->
	<?php endif; ?>


		<?php if ( comments_open() && ! is_single() ) : ?>
			<div class="comments-link">
				<?php comments_popup_link( '<span class="leave-reply">' .   'اولین نظر را ثبت کنید'  . '</span>',  'یک نظر ثبت شده' ,   'دیدن همه  % نظر'  ); ?>
			</div><!-- .comments-link -->
		<?php endif; // comments_open() ?>

		 
	
</article><!-- #post -->
</div>