<?php
/**
 * Welcome Screen Class
 * Sets up the welcome screen page, hides the menu item
 * and contains the screen content.
 */
class advocator_lite_Welcome {

	/**
	 * Constructor
	 * Sets up the welcome screen
	 */
	public function __construct() {

		add_action( 'admin_menu', array( $this, 'advocator_lite_welcome_register_menu' ) );
		add_action( 'load-themes.php', array( $this, 'advocator_lite_activation_admin_notice' ) );
		add_action( 'admin_enqueue_scripts', array( $this, 'advocator_lite_welcome_scripts' ) );

		add_action( 'advocator_lite_welcome', array( $this, 'advocator_lite_welcome_intro' ), 				10 );
		add_action( 'advocator_lite_welcome', array( $this, 'advocator_lite_welcome_tabs' ), 				20 );
		add_action( 'advocator_lite_welcome', array( $this, 'advocator_lite_welcome_getting_started' ), 	30 );
		add_action( 'advocator_lite_welcome', array( $this, 'advocator_lite_welcome_enhance' ), 				40 );
		add_action( 'advocator_lite_welcome', array( $this, 'advocator_lite_welcome_changelog' ), 		50 );

	} // end constructor

	/**
	 * Adds an admin notice upon successful activation.
	 */
	public function advocator_lite_activation_admin_notice() {
		global $pagenow;

		if ( is_admin() && 'themes.php' == $pagenow && isset( $_GET['activated'] ) ) { // input var okay
			add_action( 'admin_notices', array( $this, 'advocator_lite_welcome_admin_notice' ), 99 );
		}
	}

	/**
	 * Display an admin notice linking to the welcome screen
	 */
	public function advocator_lite_welcome_admin_notice() {
		?>
			<div class="updated notice is-dismissible">
				<p><?php echo sprintf( esc_html__( 'Thanks for choosing Advocator Lite! Get started by activating the recommended plugins and importing the demo content! Read instructions on the %stheme info screen%s.', 'advocator-lite' ), '<a href="' . esc_url( admin_url( 'themes.php?page=advocator-lite-welcome' ) ) . '">', '</a>' ); ?></p>
				<p><a href="<?php echo esc_url( admin_url( 'themes.php?page=advocator-lite-welcome' ) ); ?>" class="button" style="text-decoration: none;"><?php _e( 'Theme Info Page', 'advocator-lite' ); ?></a></p>
			</div>
		<?php
	}

	/**
	 * Load welcome screen style and scripts
	 * @return void
	 */
	public function advocator_lite_welcome_scripts() {
		global $advocator_lite_version;

		wp_enqueue_style( 'advocator-lite-theme-info', get_template_directory_uri() . '/inc/theme-info/css/welcome.css', $advocator_lite_version );
		wp_enqueue_script( 'thickbox' );
		wp_enqueue_style( 'thickbox' );
	}

	/**
	 * Creates the dashboard page
	 * @see  add_theme_page()
	 */
	public function advocator_lite_welcome_register_menu() {
		add_theme_page( 'Theme Info', 'Theme Info', 'read', 'advocator-lite-welcome', array( $this, 'advocator_lite_welcome_screen' ) );
	}

	/**
	 * The welcome screen
	 */
	public function advocator_lite_welcome_screen() {
		require_once( ABSPATH . 'wp-admin/admin.php' );
		require_once( ABSPATH . 'wp-admin/admin-header.php' );
		?>
		<div class="wrap about-wrap">

			<?php
			/**
			 * @hooked advocator_lite_welcome_intro - 10
			 * @hooked advocator_lite_welcome_getting_started - 20
			 * @hooked advocator_lite_welcome_addons - 30
			 */
			do_action( 'advocator_lite_welcome' ); ?>

		</div>
		<?php
	}

	/**
	 * Welcome screen intro
	 */
	public function advocator_lite_welcome_intro() {
		require_once( get_template_directory() . '/inc/theme-info/sections/intro.php' );
	}

	/**
	 * Welcome screen intro
	 */
	public function advocator_lite_welcome_tabs() {
		require_once( get_template_directory() . '/inc/theme-info/sections/tabs.php' );
	}

	/**
	 * Welcome screen getting started section
	 */
	public function advocator_lite_welcome_getting_started() {
		require_once( get_template_directory() . '/inc/theme-info/sections/start.php' );
	}

	/**
	 * Welcome screen enhance theme
	 */
	public function advocator_lite_welcome_enhance() {
		require_once( get_template_directory() . '/inc/theme-info/sections/enhance.php' );
	}

	/**
	 * Welcome screen changelog
	 */
	public function advocator_lite_welcome_changelog() {
		require_once( get_template_directory() . '/inc/theme-info/sections/changelog.php' );
	}

	/**
	 * Display the changelog file from the theme
	 */
	public function advocator_lite_changlog() {

		WP_Filesystem();
		global $wp_filesystem;

		$file = $wp_filesystem->get_contents( get_template_directory_uri() . '/changelog.txt' );
		$readme = nl2br( $file );

		return $readme;

	}

}

$GLOBALS['advocator_lite_Welcome'] = new advocator_lite_Welcome();
