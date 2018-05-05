<?php
/*
Template Name: Home
*/

get_header(); ?>

    <!-- Slider -->
<div class="hero_slider">

  <?php if ( is_active_sidebar( 'home_slider' ) ) { dynamic_sidebar( 'home_slider' ); } ?>

</div> <!-- end .hero_slider -->

<div class="main_content_wrap">

  <?php if ( is_active_sidebar( 'home_widgets_top' ) ) { 
    $home_top_widgets_animation = get_theme_mod( 'home_top_widgets_animation' );
  ?>

  <div class="row home_top_bg <?php if ( $home_top_widgets_animation != 'none' ) { echo 'wow '; echo esc_attr( $home_top_widgets_animation ); };  ?>">

    <div class="home_top_wrap clearfix">

      <?php dynamic_sidebar( 'home_widgets_top' ); ?>

    </div><!-- .home_top_wrap -->

  </div><!-- .home_top_bg .row -->

  <?php } // end home_widgets_top sidebar check ?>

  <div class="row home_widgets_section">

    <div class="clearfix">

    <div class="large-12 columns">

        <div class="row">

    		  <!-- Home Widget Left -->
        	<div class="large-7 columns home_text_widget_left">

            <?php if ( is_active_sidebar( 'home_left' ) ) { dynamic_sidebar( 'home_left' ); } ?>

       	  </div><!-- .home_text_widget_left -->

    	   	<!-- Home Widget Right -->
        	<div class="large-4 large-offset-1 columns home_text_widget_right">

            <?php if ( is_active_sidebar( 'home_right' ) ) { dynamic_sidebar( 'home_right' ); } ?>

        	</div><!-- .home_text_widget_right -->

        </div><!-- .row -->

    </div><!-- .large-12 -->

    </div><!-- .clearfix -->

  </div><!-- .row .home_widgets_section -->


  <!-- Upcoming Events -->
  <?php if ( is_active_sidebar( 'home_events' ) ) { 
    $home_events_animation = get_theme_mod( 'home_events_animation' );
  ?>

  <div class="row home_events_wrap clearfix <?php if ( $home_events_animation != 'none' ) { echo 'wow '; echo esc_attr( $home_events_animation ); };  ?>">

    <div class="large-12 columns">

      <div class="row">

        <?php dynamic_sidebar( 'home_events' ); ?>

      </div><!-- .row -->

    </div><!-- .large-12 -->

  </div><!-- .row .home_events_wrap -->

  <?php } // end home_events sidebar check ?>


  <!-- News Area -->
  <?php if ( get_theme_mod('home_news_show') ) { 
    $home_news_animation = get_theme_mod( 'home_news_animation' );
  ?>

  <div class="home_latest_news clearfix <?php if ( $home_news_animation != 'none' ) { echo 'wow '; echo esc_attr( $home_news_animation ); };  ?>">

    <div class="row">

      <div class="large-12 columns">

        <h3>
            <?php printf( __( '%s', 'advocator-lite' ), esc_html( get_theme_mod('home_news_title', customizer_library_get_default( 'home_news_title' ) ) ) ); ?>
        </h3>

      </div><!-- .large-12 -->

    </div><!-- .row -->

      <?php 
        $home_blog_num = get_theme_mod('home_blog_num') ;
        $home_blog_category = get_theme_mod( 'home_blog_category' );

        $formats = new WP_Query( array( // Display most recent standard posts
      	  'posts_per_page' => (int) $home_blog_num ,
          'category_name' => esc_attr( $home_blog_category ),
      		'tax_query' => array(
      		  	array(
      		  	'taxonomy' => 'post_format',
      			  'field'    => 'slug',
      		  	'terms'    => array( 
                            'post-format-link', 
                            'post-format-aside', 
                            'post-format-gallery', 
                            'post-format-status', 
                            'post-format-quote', 
                            'post-format-chat', 
                            'post-format-image' ),
      		    'operator' => 'NOT IN',
      		  ))
          )
        );

      	if( $formats->have_posts() ) : while( $formats->have_posts() ) : $formats->the_post(); ?>

      <div class="row home_post">

        <div class="large-3 columns">

          <hr>

      		<h4><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h4>

        </div><!-- .large-3 -->

        <div class="large-9 columns">

    		  <?php the_excerpt(); ?>

        </div><!-- .large-9 -->

      </div><!-- .row -->

  <?php endwhile; endif; wp_reset_postdata(); // end most recent standard post ?>

  </div><!-- .home_latest_news -->

    <div class="row home-latest-news-button">
    
    <?php if ( get_theme_mod('home_news_link') ) { ?>

      <div class="small-12 columns">
        <a href="<?php echo esc_url( get_theme_mod('home_news_link') ); ?>" class="button tiny radius right">
          <?php printf( __( '%s', 'advocator-lite' ), esc_html( get_theme_mod( 'home_news_button_text', customizer_library_get_default( 'home_news_button_text' ) ) ) ); ?>
        </a>
      </div><!-- .small-12 -->

    <?php } // end blog button link check ?>

    </div><!-- .row -->

  <?php } // end check for latest news area show ?>

</div><!-- .main_content_wrap -->

<?php get_footer(); ?>