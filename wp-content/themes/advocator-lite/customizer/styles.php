<?php
/**
 * Implements styles set in the theme customizer
 *
 * @package Customizer Library Demo
 */
if ( ! function_exists( 'customizer_library_demo_build_styles' ) && class_exists( 'Customizer_Library_Styles' ) ) :
/**
 * Process user options to generate CSS needed to implement the choices.
 *
 * @since  1.0.0.
 *
 * @return void
 */
function customizer_library_demo_build_styles() {

	// Link Hover Color
	$setting = 'link_hover_color';
	$mod = get_theme_mod( $setting, customizer_library_get_default( $setting ) );
	if ( $mod !== customizer_library_get_default( $setting ) ) {
		$color = sanitize_hex_color( $mod );
		Customizer_Library_Styles()->add( array(
			'selectors' => array(
				'a:hover, a:focus, article .entry-meta a:hover, footer.entry_meta .post_details a:hover, .footer_widget a:hover,  .footer_widget a:focus, .footer_widget a.custom:hover, .footer_widget a.custom:focus, .copyright a:hover, .footer_copyright .copyright a:hover, .footer_social a:hover, .top_header_wrap .logo h3 a:hover, .top_header_wrap h1.site-title a:hover'
			),
			'declarations' => array(
				'color' => $color
			)
		) );
	}

	// Sitewide Buttons Color
	$setting = 'button_color';
	$mod = get_theme_mod( $setting, customizer_library_get_default( $setting ) );
	if ( $mod !== customizer_library_get_default( $setting ) ) {
		$color = sanitize_hex_color( $mod );
		Customizer_Library_Styles()->add( array(
			'selectors' => array(
				'button, .button, article .entry-meta .rescue_staff, .inner_content ul.pagination li.arrow a, .inner_content ul.pagination li span.current, a.tribe-events-read-more:hover, .wpcf7 input[type="submit"], .search .search-form input[type="submit"], .search .search-form input[type="submit"]:hover, #comments .rescue_staff, .widget_recent_entries span, .widget input[type="submit"], .format-quote .entry-content, .format-link .entry-content, .single-tribe_events .tribe-events-schedule .tribe-events-cost, a.tribe-events-read-more, .events-list .tribe-events-event-cost span, #tribe-bar-form .tribe-bar-submit input[type="submit"]'
			),
			'declarations' => array(
				'background-color' => $color
			)
		) );
	}

	// Sitewide Button Hover Color
	$setting = 'main_button_hover';
	$mod = get_theme_mod( $setting, customizer_library_get_default( $setting ) );
	if ( $mod !== customizer_library_get_default( $setting ) ) {
		$color = sanitize_hex_color( $mod );
		Customizer_Library_Styles()->add( array(
			'selectors' => array(
				'button:hover, button:focus, .button:hover, .button:focus, .wpcf7 input[type="submit"]:hover, .widget input[type="submit"]:hover, a.tribe-events-read-more:hover, #tribe-bar-form .tribe-bar-submit input[type="submit"]:hover'
			),
			'declarations' => array(
				'background-color' => $color
			)
		) );
	}

	//  Sitewide Button Border Color
	$setting = 'link_hover_color';
	$mod = get_theme_mod( $setting, customizer_library_get_default( $setting ) );
	if ( $mod !== customizer_library_get_default( $setting ) ) {
		$color = sanitize_hex_color( $mod );
		Customizer_Library_Styles()->add( array(
			'selectors' => array(
				'button, .button'
			),
			'declarations' => array(
				'border-color' => $color
			)
		) );
	}

	// Blockquote Color
	$setting = 'link_hover_color';
	$mod = get_theme_mod( $setting, customizer_library_get_default( $setting ) );
	if ( $mod !== customizer_library_get_default( $setting ) ) {
		$color = sanitize_hex_color( $mod );
		Customizer_Library_Styles()->add( array(
			'selectors' => array(
				'blockquote, .format-link'
			),
			'declarations' => array(
				'border-left-color' => $color
			)
		) );
	}

	// Donation Button Color
	$setting = 'donate_bg_color';
	$mod = get_theme_mod( $setting, customizer_library_get_default( $setting ) );
	if ( $mod !== customizer_library_get_default( $setting ) ) {
		$color = sanitize_hex_color( $mod );
		Customizer_Library_Styles()->add( array(
			'selectors' => array(
				'.advocator .donation_button .button'
			),
			'declarations' => array(
				'background' => $color
			)
		) );
	}

	// Donation Button Border Color
	$setting = 'donate_border_color';
	$mod = get_theme_mod( $setting, customizer_library_get_default( $setting ) );
	if ( $mod !== customizer_library_get_default( $setting ) ) {
		$color = sanitize_hex_color( $mod );
		Customizer_Library_Styles()->add( array(
			'selectors' => array(
				'.advocator .donation_button .button'
			),
			'declarations' => array(
				'border-color' => $color
			)
		) );
	}

	// Donation Button Color Hover
	$setting = 'donate_bg_color_hover';
	$mod = get_theme_mod( $setting, customizer_library_get_default( $setting ) );
	if ( $mod !== customizer_library_get_default( $setting ) ) {
		$color = sanitize_hex_color( $mod );
		Customizer_Library_Styles()->add( array(
			'selectors' => array(
				'.advocator .donation_button .button:hover, .advocator .donation_button .button:focus'
			),
			'declarations' => array(
				'background-color' => $color
			)
		) );
	}

	// Donation Button Border Color Hover
	$setting = 'donate_border_color_hover';
	$mod = get_theme_mod( $setting, customizer_library_get_default( $setting ) );
	if ( $mod !== customizer_library_get_default( $setting ) ) {
		$color = sanitize_hex_color( $mod );
		Customizer_Library_Styles()->add( array(
			'selectors' => array(
				'.advocator .donation_button .button:hover, .advocator .donation_button .button:focus'
			),
			'declarations' => array(
				'border-color' => $color
			)
		) );
	}

	// Header Top Background Color
	$setting = 'header_top_bg_color';
	$mod = get_theme_mod( $setting, customizer_library_get_default( $setting ) );
	if ( $mod !== customizer_library_get_default( $setting ) ) {
		$color = sanitize_hex_color( $mod );
		Customizer_Library_Styles()->add( array(
			'selectors' => array(
				'.top_header_wrap, .top_header_wrap nav, .top_header_wrap .top-bar-section li:not(.has-form) a:not(.button), .top_header_wrap .top-bar-section .dropdown li:not(.has-form) a:not(.button), .top_header_wrap .top-bar-section ul, .top_header_wrap .top-bar.expanded .title-area'
			),
			'declarations' => array(
				'background' => $color
			)
		) );
	}

	// Top Header Navigation Link Color
	$setting = 'header_top_nav_link_color';
	$mod = get_theme_mod( $setting, customizer_library_get_default( $setting ) );
	if ( $mod !== customizer_library_get_default( $setting ) ) {
		$color = sanitize_hex_color( $mod );
		Customizer_Library_Styles()->add( array(
			'selectors' => array(
				'.top_header_wrap .top_nav a'
			),
			'declarations' => array(
				'color' => $color
			)
		) );
	}

	// Top Header Navigation Link Hover Color
	$setting = 'header_top_nav_link_color_hover';
	$mod = get_theme_mod( $setting, customizer_library_get_default( $setting ) );
	if ( $mod !== customizer_library_get_default( $setting ) ) {
		$color = sanitize_hex_color( $mod );
		Customizer_Library_Styles()->add( array(
			'selectors' => array(
				'.top-bar-section ul li:hover:not(.has-form) a:hover:not(.button)'
			),
			'declarations' => array(
				'color' => $color
			)
		) );
	}

	// Header Bottom Background Color
	$setting = 'header_bottom_bg_color';
	$mod = get_theme_mod( $setting, customizer_library_get_default( $setting ) );
	if ( $mod !== customizer_library_get_default( $setting ) ) {
		$color = sanitize_hex_color( $mod );
		Customizer_Library_Styles()->add( array(
			'selectors' => array(
				'.bottom_header_wrap, .bottom_header_wrap nav, .bottom_header_wrap .top-bar-section li:not(.has-form) a:not(.button), .bottom_header_wrap .top-bar-section .dropdown li:not(.has-form) a:not(.button), .bottom_header_wrap .top-bar-section ul, .bottom_header_wrap .top-bar.expanded .title-area, .top-bar-section .dropdown li:hover:not(.has-form):not(.active) > a:not(.button), .top-bar-section li.active:not(.has-form) a:hover:not(.button)'
			),
			'declarations' => array(
				'background' => $color
			)
		) );
	}

	// Bottom Header Navigation Link Color
	$setting = 'header_bottom_nav_link_color';
	$mod = get_theme_mod( $setting, customizer_library_get_default( $setting ) );
	if ( $mod !== customizer_library_get_default( $setting ) ) {
		$color = sanitize_hex_color( $mod );
		Customizer_Library_Styles()->add( array(
			'selectors' => array(
				'.bottom_header_wrap .bottom_nav a, .top-bar-section li.active:not(.has-form) a:not(.button)'
			),
			'declarations' => array(
				'color' => $color
			)
		) );
	}

	// Header Font
	$setting = 'primary-font';
	$mod = get_theme_mod( $setting, customizer_library_get_default( $setting ) );
	$stack = customizer_library_get_font_stack( $mod );
	if ( $mod != customizer_library_get_default( $setting ) ) {
		Customizer_Library_Styles()->add( array(
			'selectors' => array(
				'h1,h2,h3,h4,h5,h6,h1 a,h2 a,h3 a,h4 a,h5 a,h6 a'
			),
			'declarations' => array(
				'font-family' => $stack
			)
		) );
	}

	// Header Font Color
	$setting = 'primary-font-color';
	$mod = get_theme_mod( $setting, customizer_library_get_default( $setting ) );
	$color = sanitize_hex_color( $mod );
	if ( $mod != customizer_library_get_default( $setting ) ) {
		Customizer_Library_Styles()->add( array(
			'selectors' => array(
				'h1, h2, h3, h4, h5, h6, .inner_sidebar .widget-title, .inner_sidebar .widget p .widget-title, footer.entry_meta .post_details, footer.entry_meta .share_title, .comment-respond h3'
			),
			'declarations' => array(
				'color' => $color
			)
		) );
	}

	// Paragraph Font
	$setting = 'secondary-font';
	$mod = get_theme_mod( $setting, customizer_library_get_default( $setting ) );
	$stack = customizer_library_get_font_stack( $mod );
	if ( $mod != customizer_library_get_default( $setting ) ) {
		Customizer_Library_Styles()->add( array(
			'selectors' => array(
				'body, p, blockquote, .format-link, p, pre, address, small, abbr, code, kbd, samp, small, var, form, legend, label, caption, .textwidget,.top-bar-section ul li > a, button, .button, .rescue-button span.rescue-button-inner, ol.vcalendar .duration, ol.vcalendar .vcard',
			),
			'declarations' => array(
				'font-family' => $stack
			)
		) );
	}

	// Home Top Widgets Background Color
	$setting = 'home_top_widgets_bg';
	$mod = get_theme_mod( $setting, customizer_library_get_default( $setting ) );
	if ( $mod !== customizer_library_get_default( $setting ) ) {
		$color = sanitize_hex_color( $mod );
		Customizer_Library_Styles()->add( array(
			'selectors' => array(
				'.home_top_bg, .home_top_wrap, .inner_sidebar #mc_signup, .footer_widget #mc_signup'
			),
			'declarations' => array(
				'background-color' => $color
			)
		) );
	}

	// Home Top Widgets Hover Color
	$setting = 'home_top_widgets_hover';
	$mod = get_theme_mod( $setting, customizer_library_get_default( $setting ) );
	if ( $mod !== customizer_library_get_default( $setting ) ) {
		$color = sanitize_hex_color( $mod );
		Customizer_Library_Styles()->add( array(
			'selectors' => array(
				'.home_widgets_top .icon_hover:hover i, .home_widgets_top .icon_hover:hover h3, .home_widgets_top .icon_hover:hover a'
			),
			'declarations' => array(
				'color' => $color
			)
		) );
	}

	// Footer Background Color
	$setting = 'footer_bg_color';
	$mod = get_theme_mod( $setting, customizer_library_get_default( $setting ) );
	if ( $mod !== customizer_library_get_default( $setting ) ) {
		$color = sanitize_hex_color( $mod );
		Customizer_Library_Styles()->add( array(
			'selectors' => array(
				'footer#site_footer'
			),
			'declarations' => array(
				'background-color' => $color
			)
		) );
	}

	// Social Icons Color
	$setting = 'footer_social_color';
	$mod = get_theme_mod( $setting, customizer_library_get_default( $setting ) );
	if ( $mod !== customizer_library_get_default( $setting ) ) {
		$color = sanitize_hex_color( $mod );
		Customizer_Library_Styles()->add( array(
			'selectors' => array(
				'.footer_social a'
			),
			'declarations' => array(
				'color' => $color
			)
		) );
	}

	// Social Icons Color Hover
	$setting = 'footer_social_color_hover';
	$mod = get_theme_mod( $setting, customizer_library_get_default( $setting ) );
	if ( $mod !== customizer_library_get_default( $setting ) ) {
		$color = sanitize_hex_color( $mod );
		Customizer_Library_Styles()->add( array(
			'selectors' => array(
				'.footer_social a:hover'
			),
			'declarations' => array(
				'color' => $color
			)
		) );
	}

}
endif;
add_action( 'customizer_library_styles', 'customizer_library_demo_build_styles' );
if ( ! function_exists( 'customizer_library_demo_styles' ) ) :
/**
 * Generates the style tag and CSS needed for the theme options.
 *
 * By using the "Customizer_Library_Styles" filter, different components can print CSS in the header.
 * It is organized this way to ensure there is only one "style" tag.
 *
 * @since  1.0.0.
 *
 * @return void
 */
function customizer_library_demo_styles() {
	do_action( 'customizer_library_styles' );
	
	// Echo the rules
	
	$css = Customizer_Library_Styles()->build();
	if ( ! empty( $css ) ) {
		echo "\n<!-- Begin Custom CSS -->\n<style type=\"text/css\" id=\"demo-custom-css\">\n";
		echo wp_strip_all_tags($css);
		echo "\n</style>\n<!-- End Custom CSS -->\n";
	}
	
}
endif;
add_action( 'wp_head', 'customizer_library_demo_styles', 11 );

/*----------------------------------------------------*/
/*	Custom CSS Options
/*----------------------------------------------------*/
if ( ! function_exists( 'rescue_custom_css' ) ) :
function rescue_custom_css() { ?>

	<style type="text/css">
	<?php
	if( get_theme_mod('custom_css_textarea') ) {
		echo esc_attr( get_theme_mod( 'custom_css_textarea' ) );
	} ?>
	<?php
	if( get_theme_mod('home_events_img_border') ) { ?>
		ol.vcalendar li img, .tribe-events-list .tribe-events-event-image img, .tribe-events-single .tribe-events-event-image img, .tribe-events-tooltip .tribe-events-event-thumb img {
		    border-radius: 0;
		}
	<?php } ?>
	<?php
	if( get_theme_mod('header_bottom_nav_dropdown_indicator') == '1' ) { ?>
			.bottom_header_wrap .top-bar-section .has-dropdown > a::after {
				display: none;
			}
			.bottom_header_wrap .top-bar-section .has-dropdown > a {
				padding: 0 10px !important;
			}
		}
	<?php } ?>
	</style>

<?php }
endif;
add_action('wp_head','rescue_custom_css');
