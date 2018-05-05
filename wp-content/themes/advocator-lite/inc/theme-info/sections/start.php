<?php
/**
 * Welcome screen getting started template
 */
?>

<div id="getting_started" class="col one-col panel">

	<div class="getting-started-intro">

		<h3><?php _e( 'Getting Started With Advocator Lite', 'advocator-lite' ); ?> </h3>
		<p><?php _e( 'We\'ve purposely kept Advocator Lite clean and fast but packed full of customization options so setup is a breeze. Here are some common tasks to get you started:', 'advocator-lite' ); ?></p>

	</div><!-- .getting-started-intro -->

	<div class="getting-started-content">

		<div class="content-section">

			<!-- Install Recommended Plugins -->
			<h3><?php _e( '1. Install Recommended Plugins' ,'advocator-lite' ); ?></h3>
			<p>
			<?php
				printf( __('Although Advocator Lite works fine as a standalone WordPress theme, there are a few <a href="%s">recommended plugins</a>. Once the plugins are installed, be sure to activate them.', 'advocator-lite'),
					esc_url( self_admin_url( 'themes.php?page=advocator-lite-install-plugins' ) )
				);
			?>
			</p>

		</div><!-- .content-section -->

		<hr>

		<div class="content-section">

			<h3><?php _e( '2. Import Demo Content' ,'advocator-lite' ); ?></h3>
			<p><?php _e( 'The quickest way to setup your site to mirror the demo is to install the supplied demo content:', 'advocator-lite' ); ?></p>

			<p><b><?php _e('Importing the Demo XML File','advocator-lite'); ?></b></p>

			<section class="callout-green">
				<?php _e('The demo XML file is available in the "All Files &amp Documentation" download package which is located in the <a href="https://rescuethemes.com/wordpress-themes/advocator-lite">theme home page</a>. Import the XML file at: <code>Tools > Import</code>','advocator-lite'); ?>
			</section>

			<p><b><?php _e('Importing the Demo Widgets WIE File','advocator-lite'); ?></b></p>
			<p>
				<?php _e('Install the <a href="https://wordpress.org/plugins/widget-importer-exporter/">Widget Importer &amp; Exporter</a> plugin to import the demo widgets','advocator-lite'); ?>
			</p>
			<section class="callout-green">
			<?php _e('The demo WIE file is available in the "All Files &amp Documentation" download package which is located in the <a href="https://rescuethemes.com/wordpress-themes/advocator-lite">theme home page</a>. Then import the WIE file at: <code>Tools > Widget Importer &amp; Exporter</code>','advocator-lite'); ?>
			</section>

		</div><!-- .content-section -->

		<hr>

		<div class="content-section">

			<h3><?php _e( '3. Assign Menus' ,'advocator-lite' ); ?></h3>
			<p><?php _e( 'Advocator Lite includes a Header Top and Header Bottom Menus located in the header of the theme and a Footer menu. The Header Bottom menu is perfect for your key pages like the blog and contact page.', 'advocator-lite' ); ?></p>
			<p><b>
				<?php _e('Assign the navigation menus to their locations:','advocator-lite'); ?></b>
			</p>
			<p><a href="<?php echo esc_url( self_admin_url( 'nav-menus.php' ) ); ?>" class="button"><?php _e( 'Configure Menu', 'advocator-lite' ); ?></a></p>

		</div><!-- .content-section -->

		<hr>

		<div class="content-section">

			<h3><?php _e( '4. Assign the Home and Blog Pages', 'advocator-lite' ); ?></h3>

			<p><?php _e( 'Once you have imported the demo content or created pages for your Home and Blog, assign "Home" as your Front Page and "Blog" as your Posts page in the Reading settings.', 'advocator-lite' ); ?></p>

			<p><a href="<?php echo esc_url( self_admin_url( 'options-reading.php' ) ); ?>" class="button button"><?php _e( 'Reading Settings', 'advocator-lite' ); ?></a></p>

		</div><!-- .content-section -->

		<hr>

		<?php
			// get theme customizer url
			$url 	= admin_url() . 'customize.php?';
			$url 	.= 'url=' . urlencode( site_url() . '?advocator-lite-customizer=true' );
			$url 	.= '&return=' . urlencode( admin_url() . 'themes.php?page=advocator-lite-welcome' );
			$url 	.= '&advocator-lite-customizer=true';
		?>

		<div class="content-section">

			<h3><?php _e( '5. Customize Theme Settings' ,'advocator-lite' ); ?></h3>
			<p><?php _e( 'Using the WordPress Customizer you can modify Advocator\'s appearance to match your own style.', 'advocator-lite' ); ?></p>
			<p><a href="<?php echo esc_url( $url ); ?>" class="button"><?php _e( 'Open the Customizer', 'advocator-lite' ); ?></a></p>

		</div><!-- .content-section -->

		<hr>

		<div class="content-section">

			<h3><?php _e( 'View Full Documentation', 'advocator-lite' ); ?></h3>
			<p><?php _e( 'You can read detailed information on Advocator\'s features and view additional instructions in the documentation:', 'advocator-lite' ); ?></p>
			<p><a href="http://docs.rescuethemes.com/collection/183-advocator" class="button" target="_blank"><?php _e( 'View documentation &rarr;', 'advocator-lite' ); ?></a></p>

		</div><!-- .content-section -->

	</div><!-- .getting-started-content -->

</div><!-- #getting_started -->
