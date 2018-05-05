<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package pperception
 */

?>

	</div><!-- #content -->

	<footer id="colophon" class="site-footer">
		<div class="site-info">
			<a href="<?php echo esc_url( __( 'https://wordpress.org/', 'pperception' ) ); ?>"><?php
				/* translators: %s: CMS name, i.e. WordPress. */
				printf( esc_html__( 'Proudly powered by %s', 'pperception' ), 'WordPress' );
			?></a>
			<span class="sep"> | </span>
			<?php
				/* translators: 1: Theme name, 2: Theme author. */
				printf( esc_html__( 'Design %1$s by %2$s.', 'pperception' ), 'Narayan', '<a href="#">Narayan Adhikari</a>' );
			?>
		</div><!-- .site-info -->

		<div class="footer-social">
			<a href="<?php echo esc_url(get_theme_mod('pperception_social_icon_facebook_setting')); ?>"><i class="fa fa-facebook white-color" aria-hidden="true"></i></a>
			<span class="sep"> | </span>

			<a href="<?php echo esc_url(get_theme_mod('pperception_social_icon_twitter_setting')); ?>"><i class="fa fa-twitter white-color" aria-hidden="true"></i></a>
			<span class="sep"> | </span>

			<a href="<?php echo esc_url(get_theme_mod('pperception_social_icon_insta_setting')); ?>"><i class="fa fa-instagram white-color" aria-hidden="true"></i></a>
			<span class="sep"> | </span>

			<a href="<?php echo esc_url(get_theme_mod('pperception_social_icon_youtube_setting')); ?>"><i class="fa fa-youtube white-color" aria-hidden="true"></i></a>
			<span class="sep"> | </span>

			<a href="<?php echo esc_url(get_theme_mod('pperception_social_linkedin_setting')); ?>"><i class="fa fa-linkedin white-color" aria-hidden="true"></i></a>
			<span class="sep"> | </span>
		</div><!-- .footer-social -->
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
