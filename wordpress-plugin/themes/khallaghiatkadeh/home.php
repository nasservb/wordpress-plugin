<?php
/*!
 * Template Name: صفحه های داخلی
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
			'numberposts' => 7,
			'offset' => 0,
			'category' => 2,
			'orderby' => 'post_date',
			'order' => 'DESC',
			'include' => '',
			'exclude' => '',
			'meta_key' => '',
			'meta_value' =>'',
			'post_type' => 'post',
			'post_status' => ' publish',
			'suppress_filters' => true
		);

		$recent_posts = wp_get_recent_posts( $args, ARRAY_A );
		
		?> 
<link rel="stylesheet" href="<?=get_template_directory_uri() ?>/css/blog.css">
<style>
.single-article{
	     background-size: cover;  
}
</style>
<div class="cntainer box">
	
	
				<div class="widget_post_area">
				<?php 
					$post_id= 0;  
					$image = get_the_post_thumbnail_url($recent_posts[$post_id]['ID'],'full');
					$title =  $recent_posts[$post_id]['post_title']  ;
					$categories = get_the_category($recent_posts[$post_id]['ID']); 
					
					$author_id = $recent_posts[$post_id]['post_author'] ;
					
					$author =  get_the_author_meta( 'user_nicename' , $author_id ); 
					$date = get_the_date(null,$recent_posts[$post_id]['ID'] );
					$link = get_permalink( $recent_posts[$post_id]['ID'] );
					 
		
				?>
				<div class="col-md-3">
				
                    <div class="single-article"  style="background-image:url('<?php echo $image; ?>')">
                    
                 <div class="article-content widget_post_larg">
					<h3 class="entry-title">
					  <a href="<?php echo $link; ?>" rel="bookmark" alt="<?php echo $title; ?>"><?php echo $title; ?></a>  
                  </h3>
                  <div class="above-entry-meta">
					<span class="cat-links">
					<?php 
					if ( ! empty( $categories ) ) {
						$output='';
						foreach( $categories as $category ) {
							$output .= '<a href="' . esc_url( get_category_link( $category->term_id ) ) . '" alt="' . esc_attr(   'مشاهده تمام پست ها با موضوع  '. $category->name   ) . '"><span class="tag tag-default">' . esc_html( $category->name ) . '</span></a>&nbsp;'  ;
						}
						echo trim( $output  );
					}
					?>
					</span>
					</div>
                  <div class="below-entry-meta">
                     <span class="posted-on">
					 <a href="<?php echo $link; ?>" rel="bookmark"> <time class="entry-date published" datetime="<?php echo $date; ?>"><?php echo $date; ?> </time></a></span>
					 <span class="byline"><span class="author vcard"><i class="fa fa-user"></i><a class="url fn n" href="<?php echo site_url(); ?>/?author=<?php echo $author_id; ?>" title="<?php echo $author; ?>"><?php echo $author; ?></a></span></span>
                     
                  </div>
               </div>

            </div>
            
			
			<?php 
					$post_id= 1;  
					$image = get_the_post_thumbnail_url($recent_posts[$post_id]['ID'],'full');
					$title =  $recent_posts[$post_id]['post_title']  ;
					$categories = get_the_category($recent_posts[$post_id]['ID']); 
					
					
					$author_id = $recent_posts[$post_id]['post_author'] ;
					$author =  get_the_author_meta( 'user_nicename' , $author_id ); 
					$date = get_the_date(null,$recent_posts[$post_id]['ID'] );
					$link = get_permalink( $recent_posts[$post_id]['ID'] );
					 
		
				?>
			<div class="single-article"  style="background-image:url('<?php echo $image; ?>')">
					
                 <div class="article-content widget_post_small">
				  <h3 class="entry-title">
					  <a href="<?php echo $link; ?>" rel="bookmark" alt="<?php echo $title; ?>"><?php echo $title; ?></a> 
 
                  </h3>
                  <div class="above-entry-meta">
				  <span class="cat-links">
				  <?php 
					if ( ! empty( $categories ) ) {
						$output='';
						foreach( $categories as $category ) {
							$output .= '<a href="' . esc_url( get_category_link( $category->term_id ) ) . '" alt="' . esc_attr(   'مشاهده تمام پست ها با موضوع  '. $category->name   ) . '"><span class="tag tag-default">' . esc_html( $category->name ) . '</span></a>&nbsp;'  ;
						}
						echo trim( $output  );
					}
					?>
				  </span>
				  </div>
                  <div class="below-entry-meta">
                     <span class="posted-on">
					 <a href="<?php echo $link; ?>" rel="bookmark"> <time class="entry-date published" datetime="<?php echo $date; ?>"><?php echo $date; ?> </time></a></span>
					 <span class="byline"><span class="author vcard"><i class="fa fa-user"></i><a class="url fn n" href="<?php echo site_url(); ?>/?author=<?php echo $author_id; ?>" title="<?php echo $author; ?>"><?php echo $author; ?></a></span></span>
                     
                  </div>
               </div>

            </div>
                     
				</div>
				
				<?php 
					$post_id= 2;  
					$image = get_the_post_thumbnail_url($recent_posts[$post_id]['ID'],'full');
					$title =  $recent_posts[$post_id]['post_title']  ;
					$categories = get_the_category($recent_posts[$post_id]['ID']); 
					
					
					$author_id = $recent_posts[$post_id]['post_author'] ;
					
					$author =  get_the_author_meta( 'user_nicename' , $author_id ); 
					$date = get_the_date(null,$recent_posts[$post_id]['ID'] );
					$link = get_permalink( $recent_posts[$post_id]['ID'] );
					 
		
				?>
				<div class="col-md-3"> 
					<div class="single-article"  style="background-image:url('<?php echo $image; ?>')">
                    
                   <div class="article-content widget_post_small">                
				  <h3 class="entry-title">
					  <a href="<?php echo $link; ?>" rel="bookmark" alt="<?php echo $title; ?>"><?php echo $title; ?></a> 
 
                  </h3>
                  <div class="above-entry-meta">
				  <span class="cat-links">
				  <?php 
					if ( ! empty( $categories ) ) {
						$output='';
						foreach( $categories as $category ) {
							$output .= '<a href="' . esc_url( get_category_link( $category->term_id ) ) . '" alt="' . esc_attr(   'مشاهده تمام پست ها با موضوع  '. $category->name   ) . '"><span class="tag tag-default">' . esc_html( $category->name ) . '</span></a>&nbsp;'  ;
						}
						echo trim( $output  );
					}
					?>
				  </span>
				  </div> 
                  <div class="below-entry-meta">
                     <span class="posted-on">
					 <a href="<?php echo $link; ?>" rel="bookmark"> <time class="entry-date published" datetime="<?php echo $date; ?>"><?php echo $date; ?> </time></a></span>
					 <span class="byline"><span class="author vcard"><i class="fa fa-user"></i><a class="url fn n" href="<?php echo site_url(); ?>/?author=<?php echo $author_id; ?>" title="<?php echo $author; ?>"><?php echo $author; ?></a></span></span>
                     
                  </div>
               </div>

            </div>
			<?php 
					$post_id= 3;  
					$image = get_the_post_thumbnail_url($recent_posts[$post_id]['ID'],'full');
					$title =  $recent_posts[$post_id]['post_title']  ;
					$categories = get_the_category($recent_posts[$post_id]['ID']); 
					
					
					$author_id = $recent_posts[$post_id]['post_author'] ;
					
					$author =  get_the_author_meta( 'user_nicename' , $author_id ); 
					$date = get_the_date(null,$recent_posts[$post_id]['ID'] );
					$link = get_permalink( $recent_posts[$post_id]['ID'] );
					 
		
				?>
                     <div class="single-article"  style="background-image:url('<?php echo $image; ?>')">
                       
                <div class="article-content widget_post_larg">                
				  <h3 class="entry-title">
					  <a href="<?php echo $link; ?>" rel="bookmark" alt="<?php echo $title; ?>"><?php echo $title; ?></a> 
 
                  </h3>
                  <div class="above-entry-meta">
				  <span class="cat-links">
				  <?php 
					if ( ! empty( $categories ) ) {
						$output='';
						foreach( $categories as $category ) {
							$output .= '<a href="' . esc_url( get_category_link( $category->term_id ) ) . '" alt="' . esc_attr(   'مشاهده تمام پست ها با موضوع  '. $category->name   ) . '"><span class="tag tag-default">' . esc_html( $category->name ) . '</span></a>&nbsp;'  ;
						}
						echo trim( $output  );
					}
					?>
				  </span>
				  </div> 
                  <div class="below-entry-meta">
                     <span class="posted-on">
					 <a href="<?php echo $link; ?>" rel="bookmark"> <time class="entry-date published" datetime="<?php echo $date; ?>"><?php echo $date; ?> </time></a></span>
					 <span class="byline"><span class="author vcard"><i class="fa fa-user"></i><a class="url fn n" href="<?php echo site_url(); ?>/?author=<?php echo $author_id; ?>" title="<?php echo $author; ?>"><?php echo $author; ?></a></span></span>
                     
                  </div>
               </div>

            </div>
				
				</div>
				
				<?php 
					$post_id= 4;  
					$image = get_the_post_thumbnail_url($recent_posts[$post_id]['ID'],'full');
					$title =  $recent_posts[$post_id]['post_title']  ;
					$categories = get_the_category($recent_posts[$post_id]['ID']); 
					
					
					$author_id = $recent_posts[$post_id]['post_author'] ;
					
					$author =  get_the_author_meta( 'user_nicename' , $author_id ); 
					$date = get_the_date(null,$recent_posts[$post_id]['ID'] );
					$link = get_permalink( $recent_posts[$post_id]['ID'] );
					 
		
				?>
				<div class="col-md-6" >
				 
				 <div class="single-article" style="background-image:url('<?php echo $image; ?>')">
                       
                    <div class="article-content widget_post_larg">               
				  <h3 class="entry-title">
					  <a href="<?php echo $link; ?>" rel="bookmark" alt="<?php echo $title; ?>"><?php echo $title; ?></a> 
 
                  </h3>
                  <div class="above-entry-meta">
				  <span class="cat-links">
				  <?php 
					if ( ! empty( $categories ) ) {
						$output='';
						foreach( $categories as $category ) {
							$output .= '<a href="' . esc_url( get_category_link( $category->term_id ) ) . '" alt="' . esc_attr(   'مشاهده تمام پست ها با موضوع  '. $category->name   ) . '"><span class="tag tag-default">' . esc_html( $category->name ) . '</span></a>&nbsp;'  ;
						}
						echo trim( $output  );
					}
					?>
				  </span>
				  </div>  
                  <div class="below-entry-meta">
                     <span class="posted-on">
					 <a href="<?php echo $link; ?>" rel="bookmark"> <time class="entry-date published" datetime="<?php echo $date; ?>"><?php echo $date; ?> </time></a></span>
					 <span class="byline"><span class="author vcard"><i class="fa fa-user"></i><a class="url fn n" href="<?php echo site_url(); ?>/?author=<?php echo $author_id; ?>" title="<?php echo $author; ?>"><?php echo $author; ?></a></span></span>
                     
                  </div>
               </div>

            </div>
                <?php 
					$post_id= 5; 
					$image = get_the_post_thumbnail_url($recent_posts[$post_id]['ID'],'full');
					$title =  $recent_posts[$post_id]['post_title']  ;
					$categories = get_the_category($recent_posts[$post_id]['ID']); 
					
					
					$author_id = $recent_posts[$post_id]['post_author'] ;
					
					$author =  get_the_author_meta( 'user_nicename' , $author_id ); 
					$date = get_the_date(null,$recent_posts[$post_id]['ID'] );
					$link = get_permalink( $recent_posts[$post_id]['ID'] );
					 
		
				?>
				<div class="col-md-6" >	 
					 
					 <div class="single-article" style="background-image:url('<?php echo $image; ?>')">
                        
                  <div class="article-content widget_post_small">         
				  <h3 class="entry-title">
					  <a href="<?php echo $link; ?>" rel="bookmark" alt="<?php echo $title; ?>"><?php echo $title; ?></a> 
 
                  </h3>
                  <span class="cat-links">
				  <?php 
					if ( ! empty( $categories ) ) {
						$output='';
						foreach( $categories as $category ) {
							$output .= '<a href="' . esc_url( get_category_link( $category->term_id ) ) . '" alt="' . esc_attr(   'مشاهده تمام پست ها با موضوع  '. $category->name   ) . '"><span class="tag tag-default">' . esc_html( $category->name ) . '</span></a>&nbsp;'  ;
						}
						echo trim( $output  );
					}
					?>
				  </span>
				         
                  <div class="below-entry-meta">
                     <span class="posted-on">
					 <a href="<?php echo $link; ?>" rel="bookmark"> <time class="entry-date published" datetime="<?php echo $date; ?>"><?php echo $date; ?> </time></a></span>
					 <span class="byline"><span class="author vcard"><i class="fa fa-user"></i><a class="url fn n" href="<?php echo site_url(); ?>/?author=<?php echo $author_id; ?>" title="<?php echo $author; ?>"><?php echo $author; ?></a></span></span>
                     
                  </div>
               </div>

            </div>
            </div>
				
				   
				<?php 
					$post_id= 6; 
					$image = get_the_post_thumbnail_url($recent_posts[$post_id]['ID'],'full');
					$title =  $recent_posts[$post_id]['post_title']  ;
					$categories = get_the_category($recent_posts[$post_id]['ID']); 
					
					
					$author_id = $recent_posts[$post_id]['post_author'] ;
					
					$author =  get_the_author_meta( 'user_nicename' , $author_id ); 
					$date = get_the_date(null,$recent_posts[$post_id]['ID'] );
					$link = get_permalink( $recent_posts[$post_id]['ID'] );
					 
		
				?>
				<div class="col-md-6">	 
					 
					 <div class="single-article" style="background-image:url('<?php echo $image; ?>')">
						
                    <div class="article-content widget_post_small">              
				  <h3 class="entry-title">
					  <a href="<?php echo $link; ?>" rel="bookmark" alt="<?php echo $title; ?>"><?php echo $title; ?></a> 
 
                  </h3>
                  <div class="above-entry-meta">
				  <span class="cat-links">
				  <?php 
					if ( ! empty( $categories ) ) {
						$output='';
						foreach( $categories as $category ) {
							$output .= '<a href="' . esc_url( get_category_link( $category->term_id ) ) . '" alt="' . esc_attr(   'مشاهده تمام پست ها با موضوع  '. $category->name   ) . '"><span class="tag tag-default">' . esc_html( $category->name ) . '</span></a>&nbsp;'  ;
						}
						echo trim( $output  );
					}
					?>
				  </span>
				  </div>   
                  <div class="below-entry-meta">
                     <span class="posted-on">
					 <a href="<?php echo $link; ?>" rel="bookmark"> <time class="entry-date published" datetime="<?php echo $date; ?>"><?php echo $date; ?> </time></a></span>
					 <span class="byline"><span class="author vcard"><i class="fa fa-user"></i><a class="url fn n" href="<?php echo site_url(); ?>/?author=<?php echo $author_id; ?>" title="<?php echo $author; ?>"><?php echo $author; ?></a></span></span>
                     
                  </div>
               </div>

            </div>
				
				</div>
				
				</div>
               </div>
           
   



		
			<div  class="content-box">
				<header class="entry-header"> 
					<div class="about-text" >
						<h1><span class="title">آخرین مطالب</span></h1>
					</div>	
					</header><!-- .entry-header -->
		<div class="container" style="width:100%">
			<div class="row grid">
			<?php
			
			
		$paged = ( get_query_var( 'paged' ) ) ? get_query_var( 'paged' ) : 1;	 

		$the_query = new WP_Query(
		array(
			'category' => 2,	//news 
			'post_type' => 'post',
			'post_status' => ' publish ',		 
			'orderby'   => 'ID',
			'order'     => 'DESC',
			'posts_per_page' => 10,
			'paged' =>$paged 
		)  
	);
			
		// Start the loop.
		while ( $the_query->have_posts() ) : $the_query->the_post();

			// Include the page content template.
			?>
			
			<article id="post-<?php  the_ID(); ?>" class="grid-item post" >
			
		<?php if ( has_post_thumbnail( ) && !  post_password_required( ) && !  is_attachment( ) ) : ?>
		<div class="entry-thumbnail">
			<div class="thumbnail" style="background-image:url('<?php echo  get_the_post_thumbnail_url( ); ?>')"></div>
		</div>
		<?php endif; ?>
			
				 			
					
		<?php if ( is_single() ) : ?>
		<div class="about-text" >
			<h1><span class="title"><?php the_title(); ?></span></h1>
		</div>	
		 
		<?php else : ?>
		
		<div class="about-text" >
			<h1><span class="title"><a href="<?php  the_permalink( ); ?>" rel="bookmark"><?php   the_title(  ); ?></a></span></h1>
		</div>	 
		<?php endif; // is_single() ?>
 </p>
		
	

	<?php if ( is_search() ) : // Only display Excerpts for Search ?>
	<div class="entry-summary">
		<?php the_excerpt(); ?>
	</div><!-- .entry-summary -->
	<?php else : ?>
	<div class="entry-content">
	
	
		<?php
			
			the_content(  'مطالعه ادامه  ', '</span>', false );

			wp_link_pages( array( 'before' => '<div class="page-links"><span class="page-links-title">صفحه :</span>', 'after' => '</div>', 'link_before' => '<span>', 'link_after' => '</span>' ) );
		?>
	</div><!-- .entry-content -->
	<?php endif; ?>



	<footer class="entry-meta">
		<?php if ( comments_open() && ! is_single() ) : ?>
			<div class="comments-link">
				<?php comments_popup_link( '<span class="leave-reply">' .   '0 نظر'  . '</span>',  '1 نظر' ,   '% نظر'  ); ?>
			</div><!-- .comments-link -->
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
