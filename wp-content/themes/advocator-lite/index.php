<?php
/**
 * The template file for the blog page.
 *
 */

get_header(); ?>

<div id="primary" class="page_wrap content-area">

  <div class="row" role="main">

    <div class="large-7 columns inner_content">

		<?php if ( have_posts() ) : ?>

			<?php /* Start the Loop */ ?>
			<?php while ( have_posts() ) : the_post(); ?>

				<?php
					/* Include the Post-Format-specific template for the content.
					 * If you want to override this in a child theme, then include a file
					 * called content-___.php (where ___ is the Post Format name) and that will be used instead.
					 */
					get_template_part( 'content', get_post_format() );
				?>

			<?php endwhile; ?>

			<?php the_posts_navigation(); ?>

		<?php else : ?>

			<?php get_template_part( 'content', 'none' ); ?>

		<?php endif; ?>

    </div><!-- .inner_content .large-7 -->

	<?php get_sidebar(); ?>

  </div><!-- .row -->

</div><!-- .page_wrap .content-area -->

<?php get_footer(); ?>
