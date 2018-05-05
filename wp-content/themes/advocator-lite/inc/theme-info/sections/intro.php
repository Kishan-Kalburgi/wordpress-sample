<?php
/**
 * Welcome screen intro template
 */
?>
<?php
$advocator = wp_get_theme( 'advocator-lite' );

?>
<div class="theme-intro">

	<div class="intro-text">
		<h1 style="margin-right: 0;"><?php echo '<strong>Advocator Lite</strong> <sup>' . esc_attr( $advocator['Version'] ) . '</sup>'; ?></h1>
		<p style="font-size: 1.2em;"><?php _e( 'Thanks for using the Advocator Lite theme! This info page should help you get started and serve as a handy reference area.', 'advocator-lite'  ); ?></p>
		<p><?php _e( 'Advocator Lite is a WordPress theme for non-profits, charities, and organizations that do good. It will help launch your online presence quickly so you can focus on your mission.', 'advocator-lite'  ); ?></p>
	</div><!-- .intro-text -->

	<div class="theme-screenshot">
		<img src="<?php echo esc_url( get_template_directory_uri() ) . '/screenshot.png'; ?>" alt="advocator" class="image-50" width="440" />
	</div><!-- .theme-screenshot -->

</div><!-- .theme-intro -->
