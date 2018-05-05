<?php
/**
 * Custom template tags for this theme.
 *
 */
 
/**
 * Default menu item if no menu is assigned in bottom header
 * Called in header.php
 */
if ( ! function_exists( 'advocator_demo_bottom_header_nav' ) ) :
	function advocator_demo_bottom_header_nav() { ?>

		<ul class="right">
			<li class="menu-item">
				<a href="<?php echo esc_url( home_url( '/' ) ); ?>"><?php _e('Home','advocator-lite') ?></a>
			</li>
			<li class="menu-item">
				<a href="#"><?php _e('Blog','advocator-lite') ?></a>
			</li>
			<li class="menu-item has-dropdown">
				<a href="#"><?php _e('Dropdown','advocator-lite') ?></a>
				<ul class="sub-menu dropdown">
					<li class="menu-item"><a href="#"><?php _e('First Level','advocator-lite') ?></a></li>
					<li class="menu-item"><a href="#"><?php _e('Second Level','advocator-lite') ?></a></li>
					<li class="menu-item"><a href="#"><?php _e('Third Level','advocator-lite') ?></a></li>
				</ul>
			</li>
			<li class="menu-item">
				<a href="#"><?php _e('Example Menu','advocator-lite') ?></a>
			</li>
		</ul>

	<?php }
endif;

/**
 * Default menu item if no menu is assigned in top and footer header
 * Called in header.php
 */
if ( ! function_exists( 'advocator_demo_top_header_nav' ) ) :
	function advocator_demo_top_header_nav() { ?>

		<ul class="right">
			<li class="menu-item">
				<a href="<?php echo esc_url( home_url( '/' ) ); ?>"><?php _e('Home','advocator-lite') ?></a>
			</li>
			<li class="menu-item">
				<a href="#"><?php _e('Blog','advocator-lite') ?></a>
			</li>
			<li class="menu-item">
				<a href="#"><?php _e('Example Menu','advocator-lite') ?></a>
			</li>
		</ul>

	<?php }
endif;

/*----------------------------------------------------*/
/*  Custom Walker for Foundation Nav - http://goo.gl/mTkWbg
/*----------------------------------------------------*/
class advocator_lite_foundation_walker extends Walker_Nav_Menu {

    function display_element($element, &$children_elements, $max_depth, $depth=0, $args, &$output) {
        $element->has_children = !empty($children_elements[$element->ID]);
        $element->classes[] = ($element->current || $element->current_item_ancestor) ? 'active' : '';
        $element->classes[] = ($element->has_children) ? 'has-dropdown' : '';

        parent::display_element($element, $children_elements, $max_depth, $depth, $args, $output);
    }

    function start_lvl(&$output, $depth = 0, $args = array()) {
        $output .= "\n<ul class=\"sub-menu dropdown\">\n";
    }

} // end custom walker

/*----------------------------------------------------*/
/*  Customize the_excerpt() Output and Length
/*----------------------------------------------------*/
if ( ! function_exists( 'rescue_excerpt_more' ) ) :
    function rescue_excerpt_more( $more ) {
      return ' &hellip <i><a class="read-more" href="'. esc_url( get_permalink( get_the_ID() ) ) . '">' . __('read more', 'advocator-lite' ) . '</a></i>';
    }
    add_filter( 'excerpt_more', 'rescue_excerpt_more' );
endif;

if ( ! function_exists( 'rescue_excerpt_length' ) ) :
    function rescue_excerpt_length( $length ) {
        return 80;
    }
    add_filter( 'excerpt_length', 'rescue_excerpt_length', 999 );
endif;

/*----------------------------------------------------*/
/*  Customize readmore link with a few more classes
/*----------------------------------------------------*/
if ( ! function_exists( 'rescue_readmore' ) ) :
	function rescue_readmore($content) {

	 	$pattern = "/class=\"more-link\"/";
	  	$replacement = "class=\"more-link button tiny radius left clearfix\" ";

	    $content = preg_replace($pattern, $replacement, $content);
	    return $content;

	}
	add_action('the_content', 'rescue_readmore');
endif;

/*----------------------------------------------------*/
/*  Prints HTML with meta information for the current post-date/time.
/*----------------------------------------------------*/
if ( ! function_exists( 'rescue_posted_on' ) ) :
function rescue_posted_on() {
	$time_string = '<time class="entry-date published" datetime="%1$s">%2$s</time>';
	// if ( get_the_time( 'U' ) !== get_the_modified_time( 'U' ) ) {
	// 	$time_string .= '<time class="updated" datetime="%3$s">%4$s</time>';
	// }

	$time_string = sprintf( $time_string,
		esc_attr( get_the_date( 'c' ) ),
		esc_html( get_the_date() ),
		esc_attr( get_the_modified_date( 'c' ) ),
		esc_html( get_the_modified_date() )
	);

	// printf( __( '<span class="posted-on">Published %1$s</span><span class="byline"> by %2$s</span>', 'advocator-lite'  ),
	printf( __( '<span class="posted-on test">Published %1$s</span>', 'advocator-lite'  ),
		sprintf( '<a =href="%1$s" rel="bookmark">%2$s</a>',
			esc_url( get_permalink() ),
			$time_string
		),
		sprintf( '<span class="author vcard"><a class="url fn n" href="%1$s">%2$s</a></span>',
			esc_url( get_author_posts_url( get_the_author_meta( 'ID' ) ) ),
			esc_html( get_the_author() )
		)
	);
}
endif;

/*----------------------------------------------------*/
/*  Template for comments and pingbacks.
/*----------------------------------------------------*/
if ( ! function_exists( 'advocator_lite_comments' ) ) :
    function advocator_lite_comments( $comment, $args, $depth ) {
        $GLOBALS['comment'] = $comment;
        switch ( $comment->comment_type ) :
            case '' :
        ?>
        <li <?php comment_class('clearfix'); ?> id="li-comment-<?php comment_ID() ?>">
            <div id="comment-<?php comment_ID(); ?>" class=" clearfix">
                <div class="left">
                    <?php echo get_avatar($comment,$size='60'); ?>
                </div><!-- end left -->
                <div class="right-comments">
                    <div class="comment-text">

                        <p class='comment-meta-header'>
                            <?php // Check if comment is by an admin then add badge
                                $comment = get_comment( $comment_id );
                                if ( user_can( $comment->user_id, 'administrator' ) ) : ?>

                            <span class="rescue_staff"><?php _e('Staff', 'advocator-lite' ); ?></span>
                            <?php endif; ?>

                            <cite class="fn"><?php echo get_comment_author_link() ?></cite>
                            <span class="comment-meta commentmetadata"><?php comment_date(get_option('date_format')); ?></span>
                            <?php comment_reply_link(array_merge( $args, array('depth' => $depth, 'max_depth' => $args['max_depth']))) ?>
                        </p>

                        <?php if ($comment->comment_approved == '0') : ?><p class="moderated"><?php _e('Your comment is awaiting moderation.','advocator-lite' ); ?></p><?php endif; ?>
                        <div class="comment_content">
                        <?php comment_text() ?>
                        </div>

                    </div><!--//end comment-text-->
                </div><!--//end right-comments -->
            </div>

        <?php
            break;
            case 'pingback'  :
            case 'trackback' :
        ?>
            <li <?php comment_class('clearfix'); ?> id="li-comment-<?php comment_ID() ?>">
            <div id="comment-<?php comment_ID(); ?>" class="clearfix">
                    <?php echo "<div class='author'><em>" . __('Trackback:','advocator-lite' ) . "</em> ".get_comment_author_link()."</div>"; ?>
                    <?php echo strip_tags(substr(get_comment_text(),0, 110)) . "..."; ?>
                    <?php comment_author_url_link('', '<small>', '</small>'); ?>
             </div>
            <?php
            break;
        endswitch;
    }
    endif;

/*----------------------------------------------------*/
/*  Returns true if a blog has more than 1 category.
/*----------------------------------------------------*/
function advocator_lite_categorized_blog() {
	if ( false === ( $categories = get_transient( 'advocator_lite_categories' ) ) ) {
		// Create an array of all the categories that are attached to posts.
		$categories = get_categories( array(
			'hide_empty' => 1,
		) );
		// Count the number of categories that are attached to the posts.
		$categories = count( $categories );
		set_transient( 'advocator_lite_categories', $categories );
	}
	if ( '1' != $categories ) {
		// This blog has more than 1 category so _s_categorized_blog should return true.
		return true;
	} else {
		// This blog has only 1 category so _s_categorized_blog should return false.
		return false;
	}
}
/**
 * Flush out the transients used in _s_categorized_blog.
 */
function advocator_lite_category_transient_flusher() {
	// Like, beat it. Dig?
	delete_transient( 'advocator_lite_categories' );
}
add_action( 'edit_category', 'advocator_lite_category_transient_flusher' );
add_action( 'save_post',     'advocator_lite_category_transient_flusher' );
