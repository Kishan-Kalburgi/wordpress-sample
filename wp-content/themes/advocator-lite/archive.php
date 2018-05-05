<?php
/**
 * The template for displaying Archive pages.
 *
 * Learn more: http://codex.wordpress.org/Template_Hierarchy
 *
 */

get_header(); ?>

<div id="primary" class="content-area">

  <div class="row" role="main">

    <div class="large-12 columns">

		<?php if ( have_posts() ) : ?>

			<header class="page-header">

				<?php
					the_archive_title( '<h1 class="page-title">', '</h1>' );
					the_archive_description( '<p class="taxonomy-description">', '</p>' );
				?>

			<hr>

			</header><!-- .page-header -->

</div><!-- .large-12 .columns -->
</div><!-- .row -->

  <div class="row" role="main">

    <div class="large-7 columns inner_content">

		<main id="main" class="site-main" role="main">

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

		</main><!-- #main -->

	</div><!-- .large-7 .columns .inner_content -->

<?php get_sidebar(); ?>

    </div><!-- .row -->

</div><!-- #primary .content-area -->

<?php get_footer(); ?>
