<?php
/**
 * The template for displaying the footer.
 *
 */
?>

<footer id="site_footer">

  <div class="row footer_widget_wrap">

  	<div class="large-4 columns footer_widget">

		<?php if ( is_active_sidebar( 'footer_sidebar-1' ) ) { dynamic_sidebar( 'footer_sidebar-1' ); } ?>

	</div><!-- .large-4 .footer_widget -->


  	<div class="large-4 columns footer_widget">

		<?php if ( is_active_sidebar( 'footer_sidebar-2' ) ) { dynamic_sidebar( 'footer_sidebar-2' ); } ?>

	</div><!-- .large-4 .footer_widget -->


  	<div class="large-4 columns footer_widget">

		<?php if ( is_active_sidebar( 'footer_sidebar-3' ) ) { dynamic_sidebar( 'footer_sidebar-3' ); } ?>

	</div><!-- .large-4 .footer_widget -->

  </div><!-- .row .footer_widget_wrap -->

  <?php $footer_social_animation = get_theme_mod( 'footer_social_animation' ); ?>
  <div class="footer_social">

    <div class="row">
      <div class="large-12 columns">
        <ul class="<?php if ( $footer_social_animation != 'none' ) { echo 'wow '; echo esc_html( $footer_social_animation ) ; };  ?>">

			<?php $twitter_link = get_theme_mod( 'twitter_link', '' ); if ( $twitter_link  ) : ?> 
			<li><a href="<?php echo esc_url( $twitter_link ); ?>"><i class="fa fa-twitter fa-2x"></i></a></li>
			<?php endif; ?>

			<?php $facebook_link = get_theme_mod( 'facebook_link', '' ); if ( $facebook_link  ) : ?> 
			<li><a href="<?php echo esc_url( $facebook_link ); ?>"><i class="fa fa-facebook fa-2x"></i></a></li>
			<?php endif; ?>

			<?php $google_link = get_theme_mod( 'google_link', '' ); if ( $google_link  ) : ?> 
			<li><a href="<?php echo esc_url( $google_link ); ?>"><i class="fa fa-google-plus fa-2x"></i></a></li>
			<?php endif; ?>

			<?php $instagram_link = get_theme_mod( 'instagram_link', '' ); if ( $instagram_link  ) : ?> 
			<li><a href="<?php echo esc_url( $instagram_link ); ?>"><i class="fa fa-instagram fa-2x"></i></a></li>
			<?php endif; ?>

			<?php $vimeo_link = get_theme_mod( 'vimeo_link', '' ); if ( $vimeo_link  ) : ?> 
			<li><a href="<?php echo esc_url( $vimeo_link ); ?>"><i class="fa fa-vimeo-square fa-2x"></i></a></li>
			<?php endif; ?>	

			<?php $youtube_link = get_theme_mod( 'youtube_link', '' ); if ( $youtube_link  ) : ?> 
			<li><a href="<?php echo esc_url( $youtube_link ); ?>"><i class="fa fa-youtube fa-2x"></i></a></li>
			<?php endif; ?>

			<?php $pinterest_link = get_theme_mod( 'pinterest_link', '' ); if ( $pinterest_link  ) : ?> 
			<li><a href="<?php echo esc_url( $pinterest_link ); ?>"><i class="fa fa-pinterest fa-2x"></i></a></li>
			<?php endif; ?>

			<?php $linkedin_link = get_theme_mod( 'linkedin_link', '' ); if ( $linkedin_link  ) : ?> 
			<li><a href="<?php echo esc_url( $linkedin_link ); ?>"><i class="fa fa-linkedin fa-2x"></i></a></li>
			<?php endif; ?>

        </ul>
      </div><!-- .large-12 -->
    </div><!-- .row -->
    
  </div><!-- .footer_social -->

  <div class="footer_copyright">
    <div class="row">

      <div class="large-6 columns copyright">
        <span>
			<?php printf( __( '%s', 'advocator-lite'  ), wp_kses_post( get_theme_mod('footer_copyright') ) ); ?>
        </span>
      </div><!-- .large-6 .copyright -->

      <div class="large-6 columns footer_menu">

			<?php 
				$defaults = array(
			        'theme_location' => 'footer',
			        'container' => false,
			        'menu_class' => '',
			        'depth' => 5,
			        'fallback_cb' => 'advocator_demo_top_header_nav', // located at 'inc/template-tags.php'
			        'items_wrap'      => '<ul id="%1$s" class="%2$s">%3$s</ul>',
			        'walker' => new advocator_lite_foundation_walker()
				);

				wp_nav_menu( $defaults );
			?>

      </div><!-- .large-6 .footer_menu -->

    </div><!-- .row -->
    
  </div><!-- .footer_copyright -->

</footer><!-- .site_footer -->

<?php wp_footer(); ?>

</body>
</html>