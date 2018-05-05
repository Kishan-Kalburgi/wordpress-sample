<?php
// disable direct access
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

// get event meta
$page_start_date = get_post_meta( get_the_ID(), 'event-start-date', true );
$page_end_date = get_post_meta( get_the_ID(), 'event-date', true );
$page_time = get_post_meta( get_the_ID(), 'event-time', true ); 
$page_location = get_post_meta( get_the_ID(), 'event-location', true ); 
$page_link = get_post_meta( get_the_ID(), 'event-link', true ); 
$page_link_label = get_post_meta( get_the_ID(), 'event-link-label', true ); 
$page_link_target = get_post_meta( get_the_ID(), 'event-link-target', true ); 
$page_summary = get_post_meta( get_the_ID(), 'event-summary', true ); 

// get custom labels from settingspage
$page_date_label = esc_attr(get_option('vsel-setting-16'));
$page_start_label = esc_attr(get_option('vsel-setting-17'));
$page_end_label = esc_attr(get_option('vsel-setting-18'));
$page_time_label = esc_attr(get_option('vsel-setting-19'));
$page_location_label = esc_attr(get_option('vsel-setting-20'));

// get setting to combine dates on the same line
$page_date_combine = esc_attr(get_option('vsel-setting-15'));

// get setting to show excerpt
$page_excerpt = esc_attr(get_option('vsel-setting-13'));

// get settings to link title and image to single event page
$page_link_title = esc_attr(get_option('vsel-setting-9'));
$page_link_image = esc_attr(get_option('vsel-setting-29'));

// get setting to set featured image size
$page_image_size = esc_attr(get_option('vsel-setting-30'));

// get settings to hide elements
$page_date_hide = esc_attr(get_option('vsel-setting-8'));
$page_time_hide = esc_attr(get_option('vsel-setting-11'));
$page_location_hide = esc_attr(get_option('vsel-setting-12'));
$page_image_hide = esc_attr(get_option('vsel-setting-27'));
$page_info_hide = esc_attr(get_option('vsel-setting-28'));
$page_link_hide = esc_attr(get_option('vsel-setting-10'));
$page_cats_hide = esc_attr(get_option('vsel-setting-33'));

// show default label if no custom label is set
if (empty($page_date_label)) {
	$page_date_label = esc_attr__( 'Date: %s', 'very-simple-event-list' );
}
if (empty($page_start_label)) {
	$page_start_label = esc_attr__( 'Start date: %s', 'very-simple-event-list' );
}
if (empty($page_end_label)) {
	$page_end_label = esc_attr__( 'End date: %s', 'very-simple-event-list' );
}
if (empty($page_time_label)) {
	$page_time_label = esc_attr__( 'Time: %s', 'very-simple-event-list' );
}
if (empty($page_location_label)) {
	$page_location_label = esc_attr__( 'Location: %s', 'very-simple-event-list' );
}
if (empty($page_link_label)) {
	$page_link_label = esc_attr__( 'More info', 'very-simple-event-list' );
}
 
// set link target
if ($page_link_target == 'yes') {
	$page_link_target = ' target="_blank"';
} else {
	$page_link_target = ' target="_self"';
}

// set image size for featured image
if ($page_image_size == "small") {
	$page_post_thumbnail = 'thumbnail';
} elseif ($page_image_size == "medium") {
	$page_post_thumbnail = 'medium';
} elseif ($page_image_size == "large") {
	$page_post_thumbnail = 'large';
} else {
	$page_post_thumbnail = 'post-thumbnail';
}
