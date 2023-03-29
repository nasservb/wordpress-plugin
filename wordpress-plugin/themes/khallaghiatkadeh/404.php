<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @package WordPress
 * @subpackage Twenty_Sixteen
 * @since Twenty Sixteen 1.0
 */

get_header(); ?>
<section class="sec-course "  >
	<div class="content-bg"> 
	<div class="post-box">
	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

			<section class="error-404 not-found">
				<header class="page-header">
					<h1 class="page-title">صفحه ی مد نظر شما پیدا نشد 404</h1>
				</header><!-- .page-header -->

				<div class="page-content">
					<p>می توانید از کادر زیر در محتوای سایت جستجو نمایید </p>

					<?php get_search_form(); ?>
				</div><!-- .page-content -->
			</section><!-- .error-404 -->

		</main><!-- .site-main -->

		<?php get_sidebar( 'content-bottom' ); ?>

	</div><!-- .content-area -->

</div>
</div>
	</section>
<?php get_footer(); ?>
	
	
	</body>

</html>