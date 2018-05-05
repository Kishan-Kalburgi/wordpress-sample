<?php

function pperception_theme_customizer( $wp_customize ) {

	$wp_customize->add_panel( 'pperception_panel', array(
		'priority' => 200,
		'capability' => 'edit_theme_options',
		'title' => __( 'Theme Options', 'pperception' ),
	) );

	$wp_customize->add_section( 'pperception_top_header_section', array(
		'priority'       => 170,
		'capability'     => 'edit_theme_options',
		'theme_supports' => '',
		'title'          => __( 'Top Header Setting', 'pperception' ),
		'panel' => 'pperception_panel',
	) );


	/* social icons */
	$wp_customize->add_section( 'pperception_social_icons_section', array(
		'priority'       => 180,
		'capability'     => 'edit_theme_options',
		'theme_supports' => '',
		'title'          => __( 'Social Icon', 'pperception' ),
		'panel' => 'pperception_panel',
	) );


	/* Facebook Url*/
	$wp_customize->add_setting( 'pperception_social_icon_facebook_setting', array(
		'capability'        => 'edit_theme_options',
		'transport' => 'refresh',
		'default'           => '',
		'sanitize_callback' => 'esc_url_raw'
	) );

	$wp_customize->add_control( 'pperception_social_icon_facebook_control', array(
		'label'     => __( 'Facebook URL', 'pperception' ),
		'description' => __('Facebook URL', 'pperception'),
		'section'   => 'pperception_social_icons_section',
		'settings'  => 'pperception_social_icon_facebook_setting',
		'type'      => 'text',
		'priority'  => 24
	) );

	/* Linkedin Url*/
	$wp_customize->add_setting( 'pperception_social_linkedin_setting', array(
		'capability'        => 'edit_theme_options',
		'transport' => 'refresh',
		'default'           => '',
		'sanitize_callback' => 'esc_url_raw'
	) );

	$wp_customize->add_control( 'pperception_social_icon_linkedin_control', array(
		'label'     => __( 'Linkedin URL', 'pperception' ),
		'description' => __('Linkedin URL', 'pperception'),
		'section'   => 'pperception_social_icons_section',
		'settings'  => 'pperception_social_linkedin_setting',
		'type'      => 'text',
		'priority'  => 28
	) );

	/* Instagram Url*/
	$wp_customize->add_setting( 'pperception_social_icon_insta_setting', array(
		'capability'        => 'edit_theme_options',
		'transport' => 'refresh',
		'default'           => '',
		'sanitize_callback' => 'esc_url_raw'
	) );

	$wp_customize->add_control( 'pperception_social_icon_insta_control', array(
		'label'     => __( 'Instagram URL', 'pperception' ),
		'description' => __('Instagram URL', 'pperception'),
		'section'   => 'pperception_social_icons_section',
		'settings'  => 'pperception_social_icon_insta_setting',
		'type'      => 'text',
		'priority'  => 25
	) );

	/* Twitter Url*/
	$wp_customize->add_setting( 'pperception_social_icon_twitter_setting', array(
		'capability'        => 'edit_theme_options',
		'transport' => 'refresh',
		'default'           => '',
		'sanitize_callback' => 'esc_url_raw'
	) );

	$wp_customize->add_control( 'pperception_social_icon_twitter_control', array(
		'label'     => __( 'Twitter URL', 'pperception' ),
		'description' => __('Twitter URL', 'pperception'),
		'section'   => 'pperception_social_icons_section',
		'settings'  => 'pperception_social_icon_twitter_setting',
		'type'      => 'text',
		'priority'  => 26
	) );

	/* Youtube Url*/
	$wp_customize->add_setting( 'pperception_social_icon_youtube_setting', array(
		'capability'        => 'edit_theme_options',
		'transport' => 'refresh',
		'default'           => '',
		'sanitize_callback' => 'esc_url_raw'
	) );

	$wp_customize->add_control( 'pperception_social_icon_youtube_control', array(
		'label'     => __( 'Youtube URL', 'pperception' ),
		'description' => __('Youtube URL', 'pperception'),
		'section'   => 'pperception_social_icons_section',
		'settings'  => 'pperception_social_icon_youtube_setting',
		'type'      => 'text',
		'priority'  => 29
	) );



	//feature category include category list for slider

    $wp_customize->add_section('pperception_category_list', array(
        'priority' => 200,
        'capability' => 'edit_theme_options',
        'theme_supports' => '',
        'title' => __('Choose Your Category for Slider', 'pperception'),
        'panel' => 'pperception_panel',
    ));

    $wp_customize->add_setting('pperception_feature_category_setting',
        array(
            'capability' => 'edit_theme_options',
            'transport' => 'refresh',
            'default' => '',
            'sanitize_callback' => 'absint'
        ));

    $wp_customize->add_control(
        new pperception_Customize_Category_Dropdown_Control(
            $wp_customize, 'pperception_feature_category_setting',
            array(
                'label' => __('Select your feature category', 'pperception'),
                'section' => 'pperception_category_list',
                'settings' => 'pperception_feature_category_setting',
                'type' => 'category_dropdown',
                'priority' => 200
            )));
}
add_action( 'customize_register', 'pperception_theme_customizer' );