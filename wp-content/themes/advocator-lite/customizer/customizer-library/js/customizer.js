/**
 * Theme Customizer enhancements for a better user experience.
 *
 * Contains handlers to make Theme Customizer preview reload changes asynchronously.
 */

( function( $ ) {

	// Site title and description.
	wp.customize( 'blogname', function( value ) {
		value.bind( function( to ) {
			$( '.site-title a' ).text( to );
		} );
	} );

	wp.customize( 'blogdescription', function( value ) {
		value.bind( function( to ) {
			$( '.site-description' ).text( to );
		} );
	} );

	// Top Header Background Color
	wp.customize( 'header_top_bg_color', function( value ) {
		value.bind( function( to ) {
			$( '.top_header_wrap, .top_header_wrap nav, .top_header_wrap .top-bar-section li:not(.has-form) a:not(.button), .top_header_wrap .top-bar-section .dropdown li:not(.has-form) a:not(.button), .top_header_wrap .top-bar-section ul, .top_header_wrap .top-bar.expanded .title-area' ).css( 'background', to );
		} );
	} );

	// Top Header Navigation link Color
	wp.customize( 'header_top_nav_link_color', function( value ) {
		value.bind( function( to ) {
			$( '.top_header_wrap .top_nav a' ).css( 'color', to );
		} );
	} );

	// Bottom Header Background Color
	wp.customize( 'header_bottom_bg_color', function( value ) {
		value.bind( function( to ) {
			$( '.bottom_header_wrap, .bottom_header_wrap nav, .bottom_header_wrap .top-bar-section li:not(.has-form) a:not(.button), .bottom_header_wrap .top-bar-section .dropdown li:not(.has-form) a:not(.button), .bottom_header_wrap .top-bar-section ul, .bottom_header_wrap .top-bar.expanded .title-area, .top-bar-section .dropdown li:hover:not(.has-form):not(.active) > a:not(.button), .top-bar-section li.active:not(.has-form) a:hover:not(.button)' ).css( 'background', to );
		} );
	} );

	// Bottom Header Navigation link Color
	wp.customize( 'header_bottom_nav_link_color', function( value ) {
		value.bind( function( to ) {
			$( '.bottom_header_wrap .bottom_nav a, .top-bar-section li.active:not(.has-form) a:not(.button)' ).css( 'color', to );
		} );
	} );

	// Donation Button Text
	wp.customize( 'donate_button_text', function( value ) {
		value.bind( function( to ) {
			$( '.donation_button a' ).text( to );
		} );
	} );

	// Donation Button Background Color
	wp.customize( 'donate_bg_color', function( value ) {
		value.bind( function( to ) {
			$( '.donation_button .button' ).css( 'background', to );
		} );
	} );

	// Donation Button Border Color
	wp.customize( 'donate_border_color', function( value ) {
		value.bind( function( to ) {
			$( '.donation_button .button' ).css( 'border-color', to );
		} );
	} );

	// Home Top Widget Section Background Color
	wp.customize( 'home_top_widgets_bg', function( value ) {
		value.bind( function( to ) {
			$( '.home_top_bg, .home_top_wrap, .inner_sidebar #mc_signup, .footer_widget #mc_signup' ).css( 'background-color', to );
		} );
	} );

	// Home News Section Title
	wp.customize( 'home_news_title', function( value ) {
		value.bind( function( to ) {
			$( '.home_latest_news h3' ).text( to );
		} );
	} );

	// Home News Button Text
	wp.customize( 'home_news_button_text', function( value ) {
		value.bind( function( to ) {
			$( '.home-latest-news-button a.button' ).text( to );
		} );
	} );

	// Home Gallery Title
	wp.customize( 'home_gallery_title', function( value ) {
		value.bind( function( to ) {
			$( '.home_image_gallery h3' ).text( to );
		} );
	} );

	// Home Gallery Button Text
	wp.customize( 'home_gallery_button_text', function( value ) {
		value.bind( function( to ) {
			$( '.home-gallery-button-section a.button' ).text( to );
		} );
	} );

	// Primary Font
	wp.customize( 'primary-font', function( value ) {
		value.bind( function( to ) {
			$( 'h1,h2,h3,h4,h5,h6,h1 a,h2 a,h3 a,h4 a,h5 a,h6 a' ).css( 'font-family', to );
		} );
	} );

	// Secondary Font
	wp.customize( 'secondary-font', function( value ) {
		value.bind( function( to ) {
			$( 'body, p, blockquote, .format-link, p, pre, address, small, abbr, code, kbd, samp, small, var, form, legend, label, caption, .textwidget,.top-bar-section ul li > a, button, .button, .rescue-button span.rescue-button-inner, ol.vcalendar .duration, ol.vcalendar .vcard' ).css( 'font-family', to );
		} );
	} );

	// Button Color
	wp.customize( 'button_color', function( value ) {
		value.bind( function( to ) {
			$( 'button, .button, article .entry-meta .rescue_staff, .inner_content ul.pagination li.arrow a, .inner_content ul.pagination li span.current, a.tribe-events-read-more:hover, .wpcf7 input[type="submit"], .search .search-form input[type="submit"], .search .search-form input[type="submit"]:hover, #comments .rescue_staff, .widget_recent_entries span, .widget input[type="submit"], .format-quote .entry-content, .format-link .entry-content, .single-tribe_events .tribe-events-schedule .tribe-events-cost, a.tribe-events-read-more, .events-list .tribe-events-event-cost span, #tribe-bar-form .tribe-bar-submit input[type="submit"]' ).css( 'background-color', to );
		} );
	} );

	// Footer Background Color
	wp.customize( 'footer_bg_color', function( value ) {
		value.bind( function( to ) {
			$( 'footer#site_footer' ).css( 'background-color', to );
		} );
	} );

	// Social Icons Color
	wp.customize( 'footer_social_color', function( value ) {
		value.bind( function( to ) {
			$( '.footer_social a' ).css( 'color', to );
		} );
	} );

	// Social Icons Color
	wp.customize( 'primary-font-color', function( value ) {
		value.bind( function( to ) {
			$( 'h1, h2, h3, h4, h5, h6, .inner_sidebar .widget-title, .inner_sidebar .widget p .widget-title, footer.entry_meta .post_details, footer.entry_meta .share_title, .comment-respond h3' ).css( 'color', to );
		} );
	} );

} )( jQuery );
