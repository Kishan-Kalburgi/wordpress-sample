<?php
/**
 * Functions used to implement options
 *
 */
/**
 * Enqueue Google Fonts Example
 */
function advocator_lite_fonts() {
	// Font options
	$fonts = array(
		get_theme_mod( 'primary-font', customizer_library_get_default( 'primary-font' ) ),
		get_theme_mod( 'secondary-font', customizer_library_get_default( 'secondary-font' ) )
	);
	$font_uri = customizer_library_get_google_font_uri( $fonts );
	// Load Google Fonts
	wp_enqueue_style( 'advocator_lite_fonts', $font_uri, array(), null, 'screen' );
}
add_action( 'wp_enqueue_scripts', 'advocator_lite_fonts' );

/**
 * Custom Customizer Style
 */
function advocator_lite_customizer_style() {

	wp_enqueue_style( 'advocator-lite-customizer-style', get_template_directory_uri() . '/customizer/customizer.css', array(), '', 'all' );
}
add_action( 'customize_controls_enqueue_scripts', 'advocator_lite_customizer_style' );