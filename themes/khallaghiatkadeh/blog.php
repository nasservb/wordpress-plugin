<?php
/*!
 * Template Name: صفحه ی وبلاگ 
 * Theme URI: http://Khalaghiatkadeh.com
 * Author: nasser niazy mobasser
 * Author URI: http://niazy.ir/
 * Design: Nov 11, 2016 
 * Copyright: abrezendegi.ir all right reserved.
 */
 
get_header(); 	
?>


<!---machine picture area--->
	<section class="sec-course "  >
        <div class="content-bg"> 
		<?php 
		
		 $args = array(
			'cat' => '12,1',
			'post_type' => 'post' ,
			'suppress_filters' => true,
			'post_status' => ' publish ', 			
			'orderby'   => 'ID',
			'order'     => 'DESC',
			'posts_per_page' => 12,
			'paged' =>$paged 
		);
		
		 $the_query = new WP_Query( $args	);
		   
		
		?> 	
<link rel="stylesheet" href="<?=get_template_directory_uri() ?>/css/blog.css">

<div class="cntainer box"> 
			<div  class="content-box">
				<header class="entry-header"> 
					<div class="about-text" >
						<h1><span class="title">آخرین مطالب</span></h1>
					</div>	
					</header><!-- .entry-header -->
		<div class="container" style="width:100%">
			<div class="row grid">
			<?php
		// Start the loop.
		while ( $the_query->have_posts() ) : $the_query->the_post();

			// Include the page content template.
			?>
			
			<article id="post-<?php echo $the_query->post->ID ?>" class="grid-item post" >
			
		<?php if ( has_post_thumbnail( ) && !  post_password_required( ) && !  is_attachment( ) ) : ?>
		<div class="entry-thumbnail">
			<div class="thumbnail" style="background-image:url('<?php echo  get_the_post_thumbnail_url( ); ?>')"></div>
		</div>
		<?php endif; ?>
			
				 			
					
		 
		<div class="about-text" >
			<h1><span class="title"><a href="<?php  the_permalink( ); ?>" rel="bookmark"><?php   the_title(  ); ?></a></span></h1>
		</div>	 
		
 </p>
		

	 
	<div class="entry-content">
	
	
		<?php
			 
			 the_content(  'مطالعه ادامه  <span class="meta-nav">&rarr;</span>' );

			 wp_link_pages( array( 'before' => '<div class="page-links"><span class="page-links-title">صفحه :</span>', 'after' => '</div>', 'link_before' => '<span>', 'link_after' => '</span>' ) );
		?>
	</div><!-- .entry-content -->
	 


	<footer class="entry-meta">
		<?php if ( comments_open( )   ) : ?>
			<div class="comments-link"><span class=" glyphicon glyphicon-comment">
				<?php  comments_popup_link( '0',  '1' ,   '%'  ); ?>
			</span></div><!-- .comments-link -->
		<?php endif; // comments_open() 
		echo '<span style="padding: 10px;">'. get_the_date('l').','. get_the_date('d F y') .' ساعت '.get_the_time('H:i') . '</span>';
		?>
		 
		 
		

	</footer><!-- .entry-meta -->

			
		</article><!-- #post -->
		<?php 		
		endwhile;
		?>				
		</div>
			</div>	
		</div>
			</div>	
		</div>
					 
			 
    </section> 
 
	



<script src="<?= get_template_directory_uri() ?>/js/masonry.pkgd.min.js"></script>
<script>
$( document ).ready(function() {
	$('.grid').masonry({
	  // options
	  itemSelector: '.grid-item'
	});
});
</script>
 <?php get_footer(); ?> 
    <script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/map-js.js"></script>

</body>

</html>
