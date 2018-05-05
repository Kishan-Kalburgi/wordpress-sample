<?php
/**
 * The template used for displaying content in index.php (Blog page)
 */
?>

<?php if ( has_post_thumbnail()) : // Check if post has a featured image ?>
	<div class="featured_image">
		<a href="<?php esc_url( the_permalink() ); ?>" class="" title="<?php printf( __( 'Link to: %s', 'advocator-lite' ), esc_attr( get_the_title() ) ); ?>" >

			<?php the_post_thumbnail( 'blog_posts' );  ?>
	    </a>
	</div><!-- .featured_image -->
<?php endif; // featured image check ?>

<article id="post-<?php the_ID(); ?>" <?php post_class( 'clearfix' ); ?>>

	<header class="entry-header">
		<h2 class="entry-title"><a href="<?php esc_url( the_permalink() ); ?>" rel="bookmark"><?php the_title(); ?></a></h2>
	</header><!-- .entry-header -->

	<footer>
		<div class="entry-meta">
		<ul><?php $format = get_post_format(); ?>
			<li class="post_format"><span class="rescue_staff"><?php echo esc_attr( ucfirst( $format ) ); ?></span></li>
			<li><?php rescue_posted_on(); ?></li>
			<li><a href="<?php esc_url( the_permalink() ); ?>" title="<?php the_title(); ?>" rel="bookmark">#</a></li>
			<li><?php if ( ! post_password_required() && ( comments_open() || '0' != get_comments_number() ) ) : ?>
			<span class="comments-link"><?php comments_popup_link( __( 'Leave a comment', 'advocator-lite' ), __( '1 Comment', 'advocator-lite' ), __( '% Comments', 'advocator-lite' ) ); ?></span>
			<?php endif; ?></li>
			<li><?php edit_post_link( __( 'Edit', 'advocator-lite' ), '<span class="edit-link">', '</span>' ); ?></li>
		</ul>
		</div><!-- .entry-meta -->
	</footer>

	<?php if ( is_search() ) : // Only display Excerpts for Search ?>
	<div class="entry-summary">
		<?php the_excerpt(); ?>
	</div><!-- .entry-summary -->
	<?php else : ?>
	<div class="entry-content clearfix">

		<?php the_content( __( 'Continue Reading', 'advocator-lite' ) ); ?>

	</div><!-- .entry-content -->

	<?php endif; // end search check ?>

</article><!-- #post-## -->

<hr>
