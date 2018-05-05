<?php
// disable direct access
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

// display the event list
$output .= '<div id="event-'.get_the_ID().'" class="'.vsel_event_class().'">';
	if ( ($page_image_hide == 'yes') && ($page_info_hide == 'yes') ) {
		$output .= '<div class="vsel-meta-full">';
	} else {
		$output .= '<div class="vsel-meta">';
	}
		if ($page_link_title != 'yes') {
			$output .= '<h4 class="vsel-meta-title">' . get_the_title() . '</h4>';
		} else {
			$output .=  '<h4 class="vsel-meta-title"><a href="'. get_permalink() .'" rel="bookmark" title="'. get_the_title() .'">'. get_the_title() .'</a></h4>';
		}
		if ( !empty($page_start_date) && !empty($page_end_date) ) {
			// error in case of wrong date
			if ($page_start_date > $page_end_date) {
				$output .= '<p class="vsel-meta-date vsel-meta-error-date">';
				$output .= esc_attr__( 'Error: please reset date', 'very-simple-event-list' ); 
				$output .= '</p>';
			}
			if ( ($page_date_hide != 'yes') ) {
				if ($page_end_date > $page_start_date) {
					if ($page_date_combine == "yes") {
						$output .= '<p class="vsel-meta-date vsel-meta-combined-date">';
						$output .= sprintf(esc_attr($page_start_label), '<span>'.date_i18n( get_option( 'date_format' ), esc_attr($page_start_date) ).'</span>' ); 
						$output .= ' - ';
						$output .= sprintf(esc_attr($page_end_label), '<span>'.date_i18n( get_option( 'date_format' ), esc_attr($page_end_date) ).'</span>' ); 
						$output .= '</p>';
					} else {
						$output .= '<p class="vsel-meta-date vsel-meta-start-date">';
						$output .= sprintf(esc_attr($page_start_label), '<span>'.date_i18n( get_option( 'date_format' ), esc_attr($page_start_date) ).'</span>' ); 
						$output .= '</p>';
						$output .= '<p class="vsel-meta-date vsel-meta-end-date">';
						$output .= sprintf(esc_attr($page_end_label), '<span>'.date_i18n( get_option( 'date_format' ), esc_attr($page_end_date) ).'</span>' ); 
						$output .= '</p>';
					}
				} elseif ($page_end_date == $page_start_date) {
					$output .= '<p class="vsel-meta-date vsel-meta-single-date">';
					$output .= sprintf(esc_attr($page_date_label), '<span>'.date_i18n( get_option( 'date_format' ), esc_attr($page_end_date) ).'</span>' ); 
					$output .= '</p>';
				}
			}
		}
		if ( ($page_time_hide != 'yes') ) {
			if (!empty($page_time)){
				$output .= '<p class="vsel-meta-time">';
				$output .= sprintf(esc_attr($page_time_label), '<span>'.esc_attr($page_time).'</span>' ); 
				$output .= '</p>';
			}
		}
		if ( ($page_location_hide != 'yes') ) {
			if (!empty($page_location)){
				$output .= '<p class="vsel-meta-location">';
				$output .= sprintf(esc_attr($page_location_label), '<span>'.esc_attr($page_location).'</span>' ); 
				$output .= '</p>';
			}
		}
		if ( ($page_link_hide != 'yes') ) {
			if (!empty($page_link)){
				$output .= '<p class="vsel-meta-link">';
				$output .= sprintf( '<a href="%1$s"'. $page_link_target .'>%2$s</a>', esc_url($page_link), esc_attr($page_link_label) ); 
				$output .= '</p>';
			}
		}
		if ( ($page_cats_hide != 'yes') ) {
			$cats = get_the_term_list( get_the_ID(), 'event_cat', '<span>', ' | ', '</span>' );
			if( has_term( '', 'event_cat', get_the_ID() ) ) {
				$output .= '<p class="vsel-meta-cats">';
				$output .= $cats;
				$output .= '</p>';
			}
		}
	$output .= '</div>';
	if ( ($page_image_hide == 'yes') && ($page_info_hide == 'yes') ) {
		$output .= esc_attr('');
	} else { 
		$output .= '<div class="vsel-image-info">';
			if ( ($page_image_hide != 'yes') ) {
				if ( has_post_thumbnail() ) { 
					if ($page_link_image != 'yes') {
						$output .= get_the_post_thumbnail( null, $page_post_thumbnail, array('class' => 'vsel-image', 'alt' => ''. get_the_title() .'') );
					} else {
						$output .=  '<a href="'. get_permalink() .'">'. get_the_post_thumbnail( null, $page_post_thumbnail, array('class' => 'vsel-image', 'title' => ''. get_the_title() .'', 'alt' => ''. get_the_title() .'') ) .'</a>';
					}
				}
			}
			if ( ($page_info_hide != 'yes') ) {
				$output .= '<div class="vsel-info">';
					if ($page_excerpt != 'yes') {
						$output .= $content = apply_filters( 'the_content', get_the_content() ); 
					} elseif (!empty($page_summary)) {
						$output .= apply_filters( 'the_excerpt', $page_summary ); 
					}  else {
						$output .= $content = apply_filters( 'the_excerpt', get_the_excerpt() ); 
					}
				$output .= '</div>';
			}
		$output .= '</div>';
	}
$output .= '</div>';
