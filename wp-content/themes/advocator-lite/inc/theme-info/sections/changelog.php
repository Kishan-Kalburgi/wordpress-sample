<?php
/**
 * Welcome screen changelog template
 */
?>

<div id="changelog" class="advocator-lite-changelog panel">

	<div class="changelog-intro">

		<h3><?php _e( 'Version Update Details', 'advocator-lite'  ); ?> </h3>
		<p><?php _e( 'Review Advocator version details and release dates.', 'advocator-lite'  ); ?></p>

	</div><!-- .changelog-intro -->

	<div class="content-section">

		<?php
		/**
		 * Display the changelog file from the theme
		 */
			echo wp_kses_post ( $this->advocator_lite_changlog() );
		?>

	</div><!-- .content-section -->

</div><!-- #changelog -->
