<?php
/**
 * Defines customizer options
 *
 * @package Customizer_Library
 */

function customizer_library_rescue_options() {

	// Theme defaults
	$primary_color = '#e8554e';
	$secondary_color = '#666';
	$top_header = '#2c3135';
	$primary_green = '#1fa67a';
	$primary_green_hover = '#198562';
	$donation_bg = '#f1c40f';
	$donation_border = '#e2b709';
	$home_top_widgets_bg = '#34495e';
	$home_top_widgets_hover = '#a2da08';
	$social_icon = '#aaaaaa';
	$white = '#ffffff';
	$top_nav_link_color = '#888888';

	// Categories
    $categories = get_categories();
	$cats = array();
	$i = 0;
	foreach($categories as $category){
		if($i==0){
			$default = $category->slug;
			$i++;
		}
		$cats[$category->slug] = $category->name;
	}

    // Animations
    $animate = array(
        'none' => __('none', 'advocator-lite'),
        'bounce' => __('bounce', 'advocator-lite'),
        'flash' => __('flash', 'advocator-lite'),
        'pulse' => __('pulse', 'advocator-lite'),
        'shake' => __('shake', 'advocator-lite'),
        'wobble' => __('wobble', 'advocator-lite'),
        'bounceIn' => __('bounceIn', 'advocator-lite'),
        'bounceInDown' => __('bounceInDown', 'advocator-lite'),
        'bounceInLeft' => __('bounceInLeft', 'advocator-lite'),
        'bounceInRight' => __('bounceInRight', 'advocator-lite'),
        'bounceInUp' => __('bounceInUp', 'advocator-lite'),
        'fadeIn' => __('fadeIn', 'advocator-lite'),
        'fadeInDown' => __('fadeInDown', 'advocator-lite'),
        'fadeInDownBig' => __('fadeInDownBig', 'advocator-lite'),
        'fadeInLeft' => __('fadeInLeft', 'advocator-lite'),
        'fadeInLeftBig' => __('fadeInLeftBig', 'advocator-lite'),
        'fadeInRight' => __('fadeInRight', 'advocator-lite'),
        'fadeInRightBig' => __('fadeInRightBig', 'advocator-lite'),
        'fadeInUp' => __('fadeInUp', 'advocator-lite'),
        'fadeInUpBig' => __('fadeInUpBig', 'advocator-lite'),
        'lightSpeedIn' => __('lightSpeedIn', 'advocator-lite'),
        'lightSpeedOut' => __('lightSpeedOut', 'advocator-lite'),
        'rotateIn' => __('rotateIn', 'advocator-lite'),
        'rotateInDownLeft' => __('rotateInDownLeft', 'advocator-lite'),
        'rotateInDownRight' => __('rotateInDownRight', 'advocator-lite'),
        'rotateInUpLeft' => __('rotateInUpLeft', 'advocator-lite'),
        'rotateInUpRight' => __('rotateInUpRight', 'advocator-lite'),
        'zoomIn' => __('zoomIn', 'advocator-lite'),
        'zoomInDown' => __('zoomInDown', 'advocator-lite'),
        'zoomInLeft' => __('zoomInLeft', 'advocator-lite'),
        'zoomInRight' => __('zoomInRight', 'advocator-lite'),
        'zoomInUp' => __('zoomInUp', 'advocator-lite')
    );

	// Stores all the controls that will be added
	$options = array();

	// Stores all the sections to be added
	$sections = array();

	// Image path defaults=
	$imagepath =  get_template_directory_uri() . '/img/';

	$upgrade_link = "https://rescuethemes.com/wordpress-themes/advocator/";

	/**
	 * Advocator Plus Upgrade Options
	 *
	 */
	 
	// Adds the sections to the $options array
	$options['sections'] = $sections;

	// Header
	$section = 'header';

	$sections[] = array(
		'id' 			=> $section,
		'title' 		=> __( 'Header', 'advocator-lite' ),
		'priority' 		=> '30',
		'description' 	=> __( 'Header area options', 'advocator-lite' ),
		'panel' 		=> 'theme_options',
	);

	$options['header_logo'] = array(
		'id' 		=> 'header_logo',
		'label'   	=> __( 'Logo', 'advocator-lite' ),
		'section' 	=> $section,
		'type'    	=> 'upload',
		'default' 	=> '',
	);

	$options['header_top_bg_color'] = array(
		'id' 		=> 'header_top_bg_color',
		'label'   	=> __( 'Top header background color', 'advocator-lite' ),
		'section'	=> $section,
		'type'    	=> 'color',
		'default'	=> $top_header,
		'transport'	=> 'postMessage',
	);

	$options['header_top_nav_link_color'] = array(
		'id' 		=> 'header_top_nav_link_color',
		'label'   	=> __( 'Top header Navigation Link Color', 'advocator-lite' ),
		'section'	=> $section,
		'type'    	=> 'color',
		'default'	=> $top_nav_link_color,
		'transport'	=> 'postMessage',
	);

	$options['header_top_nav_link_color_hover'] = array(
		'id' 		=> 'header_top_nav_link_color_hover',
		'label'   	=> __( 'Top header Navigation Link Hover Color', 'advocator-lite' ),
		'section'	=> $section,
		'type'    	=> 'color',
		'default'	=> $white,
	);

	$options['header_bottom_bg_color'] = array(
		'id' 		=> 'header_bottom_bg_color',
		'label'   	=> __( 'Bottom header background color', 'advocator-lite' ),
		'section' 	=> $section,
		'type'    	=> 'color',
		'default' 	=> $primary_green,
		'transport'	=> 'postMessage',
	);

	$options['header_bottom_nav_link_color'] = array(
		'id' 		=> 'header_bottom_nav_link_color',
		'label'   	=> __( 'Bottom Header Navigation Link Color', 'advocator-lite' ),
		'section'	=> $section,
		'type'    	=> 'color',
		'default'	=> $white,
		'transport'	=> 'postMessage',
	);

	$options['header_bottom_nav_dropdown_indicator'] = array(
		'id' => 'header_bottom_nav_dropdown_indicator',
		'label'   	=> __( 'Check to remove the dropdown indicator circle', 'advocator-lite' ),
		'section' 	=> $section,
		'type'    	=> 'checkbox',
		'default' 	=> 0,
	);

	

	// Home Top Widgets
	$section = 'home-top-widgets';

	$sections[] = array(
		'id' 			=> $section,
		'title' 		=> __( 'Home Top Widgets', 'advocator-lite' ),
		'priority' 		=> '40',
		'description' 	=> __( 'This section will display on the home page once widgets are added to it in the widgets section.', 'advocator-lite' ),
		'panel' 		=> 'theme_options'
	);

	$options['home_top_widgets_bg'] = array(
		'id' 		=> 'home_top_widgets_bg',
		'label'   	=> __( 'Select the home top widgets background color', 'advocator-lite' ),
		'section' 	=> $section,
		'type'    	=> 'color',
		'default' 	=> $home_top_widgets_bg,
		'transport'	=> 'postMessage',
	);

	$options['home_top_widgets_hover'] = array(
		'id' 		=> 'home_top_widgets_hover',
		'label'   	=> __( 'Select the home top widgets text hover color', 'advocator-lite' ),
		'section' 	=> $section,
		'type'    	=> 'color',
		'default' 	=> $home_top_widgets_hover
	);
	

	// Typography
	$section = 'typography-plus';

	$sections[] = array(
		'id' 		=> $section,
		'title' 	=> __( 'Typography', 'advocator-lite' ),
		'priority' 	=> '60',
		'panel' 	=> 'theme_options',
	);

	


	// Footer
	$section = 'footer';

	$sections[] = array(
		'id' 			=> $section,
		'title' 		=> __( 'Footer', 'advocator-lite' ),
		'priority' 		=> '70',
		'description' 	=> __( '', 'advocator-lite' ),
		'panel' 		=> 'theme_options',
	);
	
	
	$options['twitter_link'] = array(
		'id' 		=> 'twitter_link',
		'label'   	=> __( 'Enter a Twitter link', 'advocator-lite' ),
		'section' 	=> $section,
		'type'    	=> 'text',
		'default' 	=> '',
	);

	$options['facebook_link'] = array(
		'id' 		=> 'facebook_link',
		'label'   	=> __( 'Enter a Facebook link', 'advocator-lite' ),
		'section' 	=> $section,
		'type'    	=> 'text',
		'default' 	=> '',
	);

	$options['google_link'] = array(
		'id' 		=> 'google_link',
		'label'   	=> __( 'Enter a Google link', 'advocator-lite' ),
		'section' 	=> $section,
		'type'    	=> 'text',
		'default' 	=> '',
	);

	$options['instagram_link'] = array(
		'id' 		=> 'instagram_link',
		'label'   	=> __( 'Enter a Instagram link', 'advocator-lite' ),
		'section' 	=> $section,
		'type'    	=> 'text',
		'default' 	=> '',
	);

	$options['vimeo_link'] = array(
		'id' 		=> 'vimeo_link',
		'label'   	=> __( 'Enter a Vimeo link', 'advocator-lite' ),
		'section' 	=> $section,
		'type'    	=> 'text',
		'default' 	=> '',
	);

	$options['youtube_link'] = array(
		'id' 		=> 'youtube_link',
		'label'   	=> __( 'Enter a Youtube link', 'advocator-lite' ),
		'section' 	=> $section,
		'type'    	=> 'text',
		'default' 	=> '',
	);

	$options['pinterest_link'] = array(
		'id' 		=> 'pinterest_link',
		'label'   	=> __( 'Enter a Pinterest link', 'advocator-lite' ),
		'section' 	=> $section,
		'type'    	=> 'text',
		'default' 	=> '',
	);

	$options['linkedin_link'] = array(
		'id' 		=> 'linkedin_link',
		'label'   	=> __( 'Enter a LinkedIn link', 'advocator-lite' ),
		'section' 	=> $section,
		'type'    	=> 'text',
		'default' 	=> '',
	);

	$options['footer_copyright'] = array(
		'id' 		=> 'footer_copyright',
		'label'   	=> __( 'Enter footer copyright text.', 'advocator-lite' ),
		'section' 	=> $section,
		'type'    	=> 'textarea',
		'default' 	=> '&#169; Copyright',
	);

	

	// Pro
	$section = 'pro';

	$sections[] = array(
		'id' 			=> $section,
		'title' 		=> __( 'Plus Features', 'advocator-lite' ),
		'priority' 		=> '70',
		'description' 	=> __( '', 'advocator-lite' ),
		'panel' 		=> 'theme_options',
	);
	
	$options['header-donate-plus'] = array(
	    'id' => 'header-donate-plus',
	    'label' => __( 'Display donation button', 'advocator-lite' ),
	    'section' 	=> $section,
	    'type' => 'content',
	    'input_attrs' => array(
	    'content' => __( '<p>Display a donation button right on the header menu:</p><ul><li>Button Color</li><li></li><li>Button Border Color</li><li>Button Hover Color</li><li>Button Hover Border Color</li><li>Button Animations</li></ul>', 'advocator-lite' )
	    ),
	);
	
	$options['home_top_widgets-plus'] = array(
	    'id' => 'home_top_widgets-plus',
	    'label' => __( 'Home Top Widget Animation Effects', 'advocator-lite' ),
	    'section' 	=> $section,
	    'type' => 'content',
	    'input_attrs' => array(
	    'content' => __( '<p></p><ul><li>Home Event Animations</li></ul>', 'advocator-lite' )
	    ),
	);
	
	  $options['home-events-plus'] = array(
	    'id' => 'home-events-plus',
	    'label' => __( 'Advanced Home Events Settings', 'advocator-lite' ),
	    'section' 	=> $section,
	    'type' => 'content',
	    'input_attrs' => array(
	    'content' => __( '<p>Display Events on the home page:</p><ul><li>Home Event Animations</li></ul>', 'advocator-lite' )
	    ),
	);
	
	$options['home-news-plus'] = array(
	    'id' => 'home-news-plus',
	    'label' => __( 'Advanced Home News/Blog Settings', 'advocator-lite' ),
	    'section' 	=> $section,
	    'type' => 'content',
	    'input_attrs' => array(
	    'content' => __( '<p>Display news and blogs posts on the home page:</p><ul><li>Number of posts to display</li><li>Home Blog Post Category to Display</li><li>Home Blog Post Animations</li></ul>', 'advocator-lite' )
	    ),
	);


	$options['home-gallery-plus'] = array(
	    'id' => 'home-gallery-plus',
	    'label' => __( 'Advanced Home Gallery Settings', 'advocator-lite' ),
	    'section' 	=> $section,
	    'type' => 'content',
	    'input_attrs' => array(
	    'content' => __( '<p>Add portfolio posts to display gallery images on the home page:</p><ul><li>Number of gallery images to display</li><li>Home Gallery animations</li></ul>', 'advocator-lite' )
	    ),
	);

	
	$options['typography-plus'] = array(
	    'id' => 'typography-plus',
	    'label' => __( 'Advanced Typography Settings', 'advocator-lite' ),
	    'section' 	=> $section,
	    'type' => 'content',
	    'input_attrs' => array(
	    'content' => __( '<p>You\'ll have access to 500+ Google Fonts to change for headers and paragraphs along with changing:</p><ul><li>Header Font Color</li><li>Button color</li><li>Button Hover Color</li><li>Content Link Hover Color</li></ul>', 'advocator-lite' )
	    ),
	);


	$options['footer-plus'] = array(
	    'id' => 'footer-plus',
	    'label' => __( 'Advanced Footer Settings', 'advocator-lite' ),
	    'section' 	=> $section,
	    'type' => 'content',
	    'input_attrs' => array(
	    'content' => __( '<p>You\'ll have access to add or change:</p><ul><li>Footer background Color</li><li>Add more Social Icon Buttons</li><li>Social Icon Color</li><li>Social Icon Hover Color</li><li>Social Icon Animations</li></ul>', 'advocator-lite' )
	    ),
	);
	
	$options['woocommerce-plus'] = array(
	    'id' => 'woocommerce-plus',
	    'label' => __( 'WooCommerce', 'advocator-lite' ),
	    'section' => $section,
	    'type' => 'content',
	    'input_attrs' => array(
	        'content' => __( '<p>Advocator Plus provides compatibility with the world\'s most popular ecommerce system, WooCommerce. Whether it\'s physical products, music files, or your time, it\'s all possible.</p>', 'advocator-lite' )
	    ),
	);

	$options['give-plus'] = array(
	    'id' => 'give-plus',
	    'label' => __( 'Give', 'advocator-lite' ),
	    'section' => $section,
	    'type' => 'content',
	    'input_attrs' => array(
	        'content' => __( '<p>Advocator Plus provides compatibility with the popular donation plugin, Give. Make your donation forms stand out.</p>', 'advocator-lite' )
	    ),
	);

	$options['events-calendar-plus'] = array(
	    'id' => 'events-calendar-plus',
	    'label' => __( 'Events Calendar', 'advocator-lite' ),
	    'section' => $section,
	    'type' => 'content',
	    'input_attrs' => array(
	        'content' => __( '<p>Advocator Plus provides compatibility with the popular event system, The Events Calendar. Your events will look beautiful and stunning.</p>', 'advocator-lite' )
	    ),
	);
	

	// Adds the sections to the $options array
	$options['sections'] = $sections;

	$customizer_library = Customizer_Library::Instance();
	$customizer_library->add_options( $options );

	// To delete custom mods use: customizer_library_remove_theme_mods();
	
	

}
add_action( 'init', 'customizer_library_rescue_options' );
