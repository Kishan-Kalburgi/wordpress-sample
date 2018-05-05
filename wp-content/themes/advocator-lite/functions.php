<?php
/**
 * Functions and definitions
 *
 */

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function rescuethemes_culinary_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'advocator-lite', 940 );
}

/*----------------------------------------------------*/
/*	Set defaults and register various WP features
/*----------------------------------------------------*/
if ( ! function_exists( 'rescue_setup' ) ) :

function rescue_setup() {

	/*
	 * Make theme available for translation.
	 * Translations can be filed in the /languages/ directory.
	 */
	load_theme_textdomain( 'advocator-lite' , get_template_directory() . '/languages' );

	// Add default posts and comments RSS feed links to head.
	add_theme_support( 'automatic-feed-links' );

    /*
     * Let WordPress manage the document title.
     * By adding theme support, we declare that this theme does not use a
     * hard-coded <title> tag in the document head, and expect WordPress to
     * provide it for us.
     */
    add_theme_support( 'title-tag' );

	// Enable featured images
	add_theme_support( 'post-thumbnails' );
    add_image_size( 'advocator-blog_posts', 550, 380, false );
    add_image_size( 'advocator-full_page', 1000, 550, false );

	// Register our navigation areas
	register_nav_menus(
        array(
		  'header_top' => __( 'Header Top', 'advocator-lite'  ),
          'header_bottom' => __( 'Header Bottom', 'advocator-lite'  ),
          'footer' => __( 'Footer', 'advocator-lite'  ),
	   )
    );

	// Enable support for Post Formats.
	add_theme_support( 'post-formats', array( 'aside', 'chat', 'quote', 'link', 'status' ) );

	// Setup the WordPress core custom background feature.
	add_theme_support( 'custom-background', apply_filters( 'rescue_custom_background_args', array(
		'default-color' => 'ffffff',
		'default-image' => '',
	) ) );

	// Enable support for HTML5 markup.
	add_theme_support( 'html5', array( 'comment-list', 'search-form', 'comment-form', ) );

}
endif; // rescue_setup
add_action( 'after_setup_theme', 'rescue_setup' );


/*----------------------------------------------------*/
/*	Register widgetized areas
/*----------------------------------------------------*/
function rescue_widgets_init() {
    register_sidebar( array(
        'name'           => __( 'Inner Pages', 'advocator-lite'  ),
        'id'             => 'inner_sidebar',
        'description'   => __( 'Inner Pages Sidebar', 'advocator-lite' ),
        'before_widget'  => '<aside id="%1$s" class="widget clearfix %2$s">',
        'after_widget'   => '</aside><br>',
        'before_title'   => '<h4 class="widget-title">',
        'after_title'    => '</h4>',
    ) );
    register_sidebar( array(
        'name'           => __( 'Home Hero Area', 'advocator-lite'  ),
        'id'             => 'home_slider',
        'description'   => __( 'Home Hero Area Sidebar', 'advocator-lite' ),
        'before_widget'  => '<div id="%1$s" class="home_widgets_hero %2$s">',
        'after_widget'   => '</div>',
        'before_title'   => '<h3 class="widget-title">',
        'after_title'    => '</h3>',
    ) );
    register_sidebar( array(
        'name'           => __( 'Home Top Area', 'advocator-lite'  ),
        'id'             => 'home_widgets_top',
        'description'   => __( 'Home Top Area Sidebar', 'advocator-lite' ),
        'before_widget'  => '<div id="%1$s" class="home_widgets_top medium-4 columns %2$s">',
        'after_widget'   => '</div>',
        'before_title'   => '<h3 class="widget-title">',
        'after_title'    => '</h3>',
    ) );
    register_sidebar( array(
        'name'           => __( 'Home Left Area', 'advocator-lite'  ),
        'id'             => 'home_left',
        'description'   => __( 'Home Left Area Sidebar', 'advocator-lite' ),
        'before_widget'  => '<div id="%1$s" class="home_widget_left %2$s">',
        'after_widget'   => '</div>',
        'before_title'   => '<h3 class="widget-title">',
        'after_title'    => '</h3>',
    ) );
    register_sidebar( array(
        'name'           => __( 'Home Right Area', 'advocator-lite'  ),
        'id'             => 'home_right',
        'description'   => __( 'Home Right Sidebar', 'advocator-lite' ),
        'before_widget'  => '<div id="%1$s" class="home_widget_right %2$s">',
        'after_widget'   => '</div>',
        'before_title'   => '<h3 class="widget-title">',
        'after_title'    => '</h3>',
    ) );
       register_sidebar( array(
        'name'           => __( 'Footer Left', 'advocator-lite'  ),
        'id'             => 'footer_sidebar-1',
        'description'   => __( 'Footer Left Sidebar', 'advocator-lite' ),
        'before_widget'  => '<aside id="%1$s" class="widget %2$s">',
        'after_widget'   => '</aside>',
        'before_title'   => '<h5 class="widget-title">',
        'after_title'    => '</h5>',
    ) );
    register_sidebar( array(
        'name'           => __( 'Footer Middle', 'advocator-lite'  ),
        'id'             => 'footer_sidebar-2',
        'description'   => __( 'Footer Middle Sidebar', 'advocator-lite' ),
        'before_widget'  => '<aside id="%1$s" class="widget %2$s">',
        'after_widget'   => '</aside>',
        'before_title'   => '<h5 class="widget-title">',
        'after_title'    => '</h5>',
    ) );
    register_sidebar( array(
        'name'           => __( 'Footer Right', 'advocator-lite'  ),
        'id'             => 'footer_sidebar-3',
        'description'   => __( 'Footer Right Sidebar', 'advocator-lite' ),
        'before_widget'  => '<aside id="%1$s" class="widget %2$s">',
        'after_widget'   => '</aside>',
        'before_title'   => '<h5 class="widget-title">',
        'after_title'    => '</h5>',
    ) );
}
add_action( 'widgets_init', 'rescue_widgets_init' );


/*----------------------------------------------------*/
/*  Foundation Setup
/*----------------------------------------------------*/
if ( ! function_exists( 'advocator_lite_enqueue_foundation' ) ) :

    function advocator_lite_enqueue_foundation() {
        wp_enqueue_style( 'advocator-lite-foundation-style', get_template_directory_uri() . '/app.css' );
        wp_enqueue_script( 'advocator-lite-foundation-js', get_template_directory_uri() . '/js/foundation.js', array( 'jquery' ), '5.4.7', true );
        wp_enqueue_script( 'advocator-lite-modernizr', get_template_directory_uri() . '/js/vendor/modernizr.js', array(), '2.8.3', true );
    }

endif; // advocator_lite_enqueue_foundation
add_action( 'wp_enqueue_scripts', 'advocator_lite_enqueue_foundation', 10 );

if ( ! function_exists( 'advocator_lite_admin_bar_nav' ) ) :

    // Fixes admin bar overlap
    function advocator_lite_admin_bar_nav() {
      if ( is_admin_bar_showing() ) { ?>
        <style>
        .fixed { margin-top: 32px; }
        @media screen and (max-width: 600px){
            .fixed { margin-top: 46px; }
            #wpadminbar { position: fixed !important; }
        }
        </style>
      <?php }
    }

endif; // advocator_lite_admin_bar_nav
add_action('wp_head', 'advocator_lite_admin_bar_nav');


/*----------------------------------------------------*/
/*	Enqueue scripts and styles
/*----------------------------------------------------*/
function rescue_scripts() {

    /**
     * Get the theme's version number for cache busting
     */
    $advocator = wp_get_theme();

    // Enqueue Styles & Scripts
    wp_enqueue_style( 'google-font-open-sans', '//fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,400,300,600,700,800');
    wp_enqueue_style( 'font-awesome', get_template_directory_uri() . '/fonts/font-awesome.css', array(), '4.6.1', 'all' );
    wp_enqueue_style( 'rescue_animate', get_template_directory_uri() . '/animate.css', array(), '', 'all' );
    wp_enqueue_style( 'rescue_style', get_stylesheet_uri(), array(), $advocator['Version'] );

    wp_enqueue_script( 'rescue_scripts', get_template_directory_uri() . '/js/custom.js', array( 'jquery' ), '', true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );

	}
}
add_action( 'wp_enqueue_scripts', 'rescue_scripts' );

/*----------------------------------------------------*/
/*  Customizer Library
/*----------------------------------------------------*/
// Helper library for the theme customizer.
require get_template_directory() . '/customizer/customizer-library/customizer-library.php';

// Define options for the theme customizer.
require get_template_directory() . '/customizer/customizer-options.php';

// Output inline styles based on theme customizer selections.
require get_template_directory() . '/customizer/styles.php';

// Additional filters and actions based on theme customizer selections.
require get_template_directory() . '/customizer/mods.php';

/*----------------------------------------------------*/
/*	Custom template tags
/*----------------------------------------------------*/
require get_template_directory() . '/inc/template-tags.php';

/*----------------------------------------------------*/
/*	Functions that act independently of the theme templates
/*----------------------------------------------------*/
require get_template_directory() . '/inc/extras.php';

/*----------------------------------------------------*/
/*  Theme Info Page
/*----------------------------------------------------*/
require get_template_directory() . '/inc/theme-info/welcome-screen.php';

/*----------------------------------------------------*/
/*  Recommended Plugins
/*----------------------------------------------------*/
require get_template_directory() . '/inc/class-tgm-plugin-activation.php';
require get_template_directory() . '/inc/plugins.php';

/**
 * Upgrade Notice
 */
require_once( trailingslashit( get_template_directory() ) . '/inc/upgrade/class-customize.php' );
