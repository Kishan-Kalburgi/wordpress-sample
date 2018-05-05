<?php
// disable direct access
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

// single event
function vsel_single_content( $content ) { 
	if ( is_singular('event') && in_the_loop() ) { 
		// include the event meta
		include 'vsel-meta.php';

		// set variables
		$date = '';
		$startdate = '';
		$sep = '';
		$enddate = '';
		$time = '';
		$location = '';
		$link = '';
		$categories = '';

		// error in case of wrong date or no start date (no start date in version 4.0 and older)
		if ( empty($page_start_date) || ($page_start_date > $page_end_date) ) {
			$date = '<p class="vsel-meta-date vsel-meta-error-date">' . esc_attr__( 'Error: please reset date', 'very-simple-event-list' ) . '</p>'; 
		}

		if ($page_end_date > $page_start_date) {
			if ($page_date_combine == "yes") {
				$startdate = '<p class="vsel-meta-date vsel-meta-combined-date">' . sprintf(esc_attr($page_start_label), '<span>'.date_i18n( get_option( 'date_format' ), esc_attr($page_start_date) ).'</span>' ); 
				$sep = ' - '; 
				$enddate = sprintf(esc_attr($page_end_label), '<span>'.date_i18n( get_option( 'date_format' ), esc_attr($page_end_date) ).'</span>' ) . '</p>'; 

			} else { 
				$startdate = '<p class="vsel-meta-date vsel-meta-start-date">' . sprintf(esc_attr($page_start_label), '<span>'.date_i18n( get_option( 'date_format' ), esc_attr($page_start_date) ).'</span>' ) . '</p>'; 
				$enddate = '<p class="vsel-meta-date vsel-meta-end-date">'. sprintf(esc_attr($page_end_label), '<span>'.date_i18n( get_option( 'date_format' ), esc_attr($page_end_date) ).'</span>' ) . '</p>'; 
			}
		} elseif ($page_end_date == $page_start_date) {
			$date = '<p class="vsel-meta-date vsel-meta-page-date">' . sprintf(esc_attr($page_date_label), '<span>'.date_i18n( get_option( 'date_format' ), esc_attr($page_end_date) ).'</span>' ) . '</p>'; 
		}
		if(!empty($page_time)){
			$time = '<p class="vsel-meta-time">' . sprintf(esc_attr($page_time_label), '<span>'.esc_attr($page_time).'</span>' ) . '</p>';
		} 
		if(!empty($page_location)){
			$location = '<p class="vsel-meta-location">' . sprintf(esc_attr($page_location_label), '<span>'.esc_attr($page_location).'</span>' ) . '</p>';
		}
		if(!empty($page_link)){
			$link = '<p class="vsel-meta-link">' . sprintf( '<a href="%1$s"'. $page_link_target .'>%2$s</a>', esc_url($page_link), esc_attr($page_link_label) ) . '</p>';
		}
		$cats = get_the_term_list( get_the_ID(), 'event_cat', '<span>', ' | ', '</span>' );
		if( has_term( '', 'event_cat', get_the_ID() ) ) {
			$categories .= '<p class="vsel-meta-cats">' . $cats . '</p>';
		}
		$content = '<div id="vsel">' . '<div class="vsel-meta">' . $date . $startdate . $sep . $enddate . $time . $location . $link . $categories . '</div>' . '<div class="vsel-image-info">' . $content . '</div>' . '</div>';   
  	} 
	return $content; 
}
add_filter( 'the_content', 'vsel_single_content' );

// category and search results page
function vsel_archive_content( $content ) { 
	global $post_type;
	if( ( $post_type == 'event' && is_search() && in_the_loop() ) || ( is_tax('event_cat') && in_the_loop() ) ) {
		// include the event meta
		include 'vsel-meta.php';

		// set variables
		$date = '';
		$startdate = '';
		$sep = '';
		$enddate = '';
		$time = '';
		$location = '';
		$link = '';
		$image = '';
		$info = '';
		$categories = '';

		// containers
		if ( ($page_image_hide == 'yes') && ($page_info_hide == 'yes') ) {
			$meta_container_start = '<div class="vsel-meta-full">';
			$meta_container_end = '</div>';
			$image_info_container_start = '';
			$image_info_container_end = ''; 
		} else {
			$meta_container_start = '<div class="vsel-meta">';
			$meta_container_end = '</div>';
			$image_info_container_start = '<div class="vsel-image-info">';
			$image_info_container_end = '</div>'; 
		}

		// get post content
		$post = get_post( get_the_ID() );
		$post_content = wpautop( wp_kses_post( $post->post_content ) );

		// error in case of wrong date or no start date (no start date in version 4.0 and older)
		if ( empty($page_start_date) || ($page_start_date > $page_end_date) ) {
			$date = '<p class="vsel-meta-date vsel-meta-error-date">' . esc_attr__( 'Error: please reset date', 'very-simple-event-list' ) . '</p>'; 
		}

		if ( ($page_date_hide != 'yes') ) {
			if ($page_end_date > $page_start_date) {
				if ($page_date_combine == "yes") {
					$startdate = '<p class="vsel-meta-date vsel-meta-combined-date">' . sprintf(esc_attr($page_start_label), '<span>'.date_i18n( get_option( 'date_format' ), esc_attr($page_start_date) ).'</span>' ); 
					$sep = ' - '; 
					$enddate = sprintf(esc_attr($page_end_label), '<span>'.date_i18n( get_option( 'date_format' ), esc_attr($page_end_date) ).'</span>' ) . '</p>'; 	
				} else { 
					$startdate = '<p class="vsel-meta-date vsel-meta-start-date">' . sprintf(esc_attr($page_start_label), '<span>'.date_i18n( get_option( 'date_format' ), esc_attr($page_start_date) ).'</span>' ) . '</p>'; 
					$enddate = '<p class="vsel-meta-date vsel-meta-end-date">'. sprintf(esc_attr($page_end_label), '<span>'.date_i18n( get_option( 'date_format' ), esc_attr($page_end_date) ).'</span>' ) . '</p>'; 
				}
			} elseif ($page_end_date == $page_start_date) {
				$date = '<p class="vsel-meta-date vsel-meta-page-date">' . sprintf(esc_attr($page_date_label), '<span>'.date_i18n( get_option( 'date_format' ), esc_attr($page_end_date) ).'</span>' ) . '</p>'; 
			}
		}
		if ( ($page_time_hide != 'yes') ) {
			if(!empty($page_time)){
				$time = '<p class="vsel-meta-time">' . sprintf(esc_attr($page_time_label), '<span>'.esc_attr($page_time).'</span>' ) . '</p>';
			} 
		}
		if ( ($page_location_hide != 'yes') ) {
			if(!empty($page_location)){
				$location = '<p class="vsel-meta-location">' . sprintf(esc_attr($page_location_label), '<span>'.esc_attr($page_location).'</span>' ) . '</p>';
			}
		}
		if ( ($page_link_hide != 'yes') ) {
			if(!empty($page_link)){
				$link = '<p class="vsel-meta-link">' . sprintf( '<a href="%1$s"'. $page_link_target .'>%2$s</a>', esc_url($page_link), esc_attr($page_link_label) ) . '</p>';
			}
		}
		if ( ($page_cats_hide != 'yes') ) {
			$cats = get_the_term_list( get_the_ID(), 'event_cat', '<span>', ' | ', '</span>' );
			if( has_term( '', 'event_cat', get_the_ID() ) ) {
				$categories .= '<p class="vsel-meta-cats">' . $cats . '</p>';
			}
		}
		if ( ($page_image_hide != 'yes') ) {
			if ( has_post_thumbnail() ) { 
				if ($page_link_image != 'yes') {
					$image = get_the_post_thumbnail( null, $page_post_thumbnail, array('class' => 'vsel-image', 'alt' => ''. get_the_title() .'') );
				} else {
					$image =  '<a href="'. get_permalink() .'">'. get_the_post_thumbnail( null, $page_post_thumbnail, array('class' => 'vsel-image', 'title' => ''. get_the_title() .'', 'alt' => ''. get_the_title() .'') ) .'</a>';
				}
			}
		}
		if ( $page_info_hide != 'yes') {
			$info = '<div class="vsel-info">' . $post_content . '</div>';
		}
		$content = '<div id="vsel">' . $meta_container_start . $date . $startdate . $sep . $enddate . $time . $location . $link . $categories . $meta_container_end . $image_info_container_start . $image . $info . $image_info_container_end . '</div>';   
	}
	return $content; 
}
add_filter( 'the_content', 'vsel_archive_content' );

function vsel_archive_excerpt( $excerpt ) { 
	global $post_type;
	if( ( $post_type == 'event' && is_search() && in_the_loop() ) || ( is_tax('event_cat') && in_the_loop() ) ) {
		// include the event meta
		include 'vsel-meta.php';

		// set variables
		$date = '';
		$startdate = '';
		$sep = '';
		$enddate = '';
		$time = '';
		$location = '';
		$link = '';
		$image = '';
		$info = '';
		$categories = '';

		// containers
		if ( ($page_image_hide == 'yes') && ($page_info_hide == 'yes') ) {
			$meta_container_start = '<div class="vsel-meta-full">';
			$meta_container_end = '</div>';
			$image_info_container_start = '';
			$image_info_container_end = ''; 
		} else {
			$meta_container_start = '<div class="vsel-meta">';
			$meta_container_end = '</div>';
			$image_info_container_start = '<div class="vsel-image-info">';
			$image_info_container_end = '</div>'; 
		}

		// get page summary and post content to create excerpt
		$post = get_post( get_the_ID() );
		$post_content = wp_strip_all_tags( $post->post_content );
		if ( !empty( $page_summary ) ) {
			$summary = esc_attr( $page_summary );
		} else {
			$summary = esc_attr( wp_trim_words( $post_content, 55, ' [&hellip;] ' ) );
		}

		// error in case of wrong date or no start date (no start date in version 4.0 and older)
		if ( empty($page_start_date) || ($page_start_date > $page_end_date) ) {
			$date = '<p class="vsel-meta-date vsel-meta-error-date">' . esc_attr__( 'Error: please reset date', 'very-simple-event-list' ) . '</p>'; 
		}

		if ( ($page_date_hide != 'yes') ) {
			if ($page_end_date > $page_start_date) {
				if ($page_date_combine == "yes") {
					$startdate = '<p class="vsel-meta-date vsel-meta-combined-date">' . sprintf(esc_attr($page_start_label), '<span>'.date_i18n( get_option( 'date_format' ), esc_attr($page_start_date) ).'</span>' ); 
					$sep = ' - '; 
					$enddate = sprintf(esc_attr($page_end_label), '<span>'.date_i18n( get_option( 'date_format' ), esc_attr($page_end_date) ).'</span>' ) . '</p>'; 	
				} else { 
					$startdate = '<p class="vsel-meta-date vsel-meta-start-date">' . sprintf(esc_attr($page_start_label), '<span>'.date_i18n( get_option( 'date_format' ), esc_attr($page_start_date) ).'</span>' ) . '</p>'; 
					$enddate = '<p class="vsel-meta-date vsel-meta-end-date">'. sprintf(esc_attr($page_end_label), '<span>'.date_i18n( get_option( 'date_format' ), esc_attr($page_end_date) ).'</span>' ) . '</p>'; 
				}
			} elseif ($page_end_date == $page_start_date) {
				$date = '<p class="vsel-meta-date vsel-meta-page-date">' . sprintf(esc_attr($page_date_label), '<span>'.date_i18n( get_option( 'date_format' ), esc_attr($page_end_date) ).'</span>' ) . '</p>'; 
			}
		}
		if ( ($page_time_hide != 'yes') ) {
			if(!empty($page_time)){
				$time = '<p class="vsel-meta-time">' . sprintf(esc_attr($page_time_label), '<span>'.esc_attr($page_time).'</span>' ) . '</p>';
			} 
		}
		if ( ($page_location_hide != 'yes') ) {
			if(!empty($page_location)){
				$location = '<p class="vsel-meta-location">' . sprintf(esc_attr($page_location_label), '<span>'.esc_attr($page_location).'</span>' ) . '</p>';
			}
		}
		if ( ($page_link_hide != 'yes') ) {
			if(!empty($page_link)){
				$link = '<p class="vsel-meta-link">' . sprintf( '<a href="%1$s"'. $page_link_target .'>%2$s</a>', esc_url($page_link), esc_attr($page_link_label) ) . '</p>';
			}
		}
		if ( ($page_cats_hide != 'yes') ) {
			$cats = get_the_term_list( get_the_ID(), 'event_cat', '<span>', ' | ', '</span>' );
			if( has_term( '', 'event_cat', get_the_ID() ) ) {
				$categories .= '<p class="vsel-meta-cats">' . $cats . '</p>';
			}
		}
		if ( ($page_image_hide != 'yes') ) {
			if ( has_post_thumbnail() ) { 
				if ($page_link_image != 'yes') {
					$image = get_the_post_thumbnail( null, $page_post_thumbnail, array('class' => 'vsel-image', 'alt' => ''. get_the_title() .'') );
				} else {
					$image =  '<a href="'. get_permalink() .'">'. get_the_post_thumbnail( null, $page_post_thumbnail, array('class' => 'vsel-image', 'title' => ''. get_the_title() .'', 'alt' => ''. get_the_title() .'') ) .'</a>';
				}
			}
		}
		if ( $page_info_hide != 'yes') {
			$info = '<div class="vsel-info">' . $summary . '</div>';
		}
		$excerpt = '<div id="vsel">' . $meta_container_start . $date . $startdate . $sep . $enddate . $time . $location . $link . $categories . $meta_container_end . $image_info_container_start . $image . $info . $image_info_container_end . '</div>';   
	}
	return $excerpt; 
}
add_filter( 'the_excerpt', 'vsel_archive_excerpt' );
