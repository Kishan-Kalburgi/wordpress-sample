<?php
/**
 * The template for displaying archive pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package pperception
 */

get_header(); ?>

	<div id="primary" class="content-area container margin-100-top margin-100-bottom single-blog-post">
		<main id="main" class="site-main">

		<div class="row">
			<div class="col-sm-8 col-xs-12">
				<?php
				if ( have_posts() ) :

					/* Start the Loop */
					while ( have_posts() ) : the_post();

						/*
						 * Include the Post-Format-specific template for the content.
						 * If you want to override this in a child theme, then include a file
						 * called content-___.php (where ___ is the Post Format name) and that will be used instead.
						 */

						get_template_part( 'template-parts/content', get_post_format() );

						if ( comments_open() || get_comments_number() ) :
							comments_template();
						endif;

					endwhile;
				?>
				<div class="p-pagination">
					<?php 

						the_posts_navigation();
					
					?>
				</div><!-- p-pagination -->
				<?php
				endif; ?>
				</div><!-- column -->

				<div class="col-sm-4 col-xs-12">
					<?php get_sidebar(); ?>
				</div><!-- column -->
			</div><!-- row -->
		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_footer();
