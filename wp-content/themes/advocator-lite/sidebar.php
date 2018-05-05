<?php
/**
 * The Sidebar containing the main widget areas.
 *
 */
?>
    <div class="large-4 large-offset-1 columns inner_sidebar">

	<?php if ( is_active_sidebar( 'inner_sidebar' ) ) { dynamic_sidebar( 'inner_sidebar' ); } ?>

    </div><!-- .inner_sidebar .large-4 -->