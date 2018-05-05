<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package pperception
 */

?>

<?php if ( is_sticky() ) { ?>
	<article  id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

		<div class="blog-content">
			<header class="entry-header">
				<?php
				if ( is_singular() ) :
					the_title( '<h1 class="entry-title blog-title">', '</h1>' );
				else :
					the_title( '<h2 class="entry-title blog-title text-center"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h2>' );
					if ( 'post' === get_post_type() ) : ?>
						<div class="entry-meta home-posted-by text-center">
							<?php pperception_posted_on(); ?>
						</div><!-- .entry-meta -->
						<?php
					endif; 
				endif; 
				
				 ?>
			</header><!-- .entry-header -->
			
			 <div class="strip_border"></div>   

			<?php if(!is_home()) : ?>
				<div class="entry-content">
					<?php
						the_content( sprintf(
							wp_kses(
								/* translators: %s: Name of current post. Only visible to screen readers */
								__( 'Continue reading<span class="screen-reader-text"> "%s"</span>', 'pperception' ),
								array(
									'span' => array(
										'class' => array(),
									),
								)
							),
							get_the_title()
						) );

						wp_link_pages( array(
							'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'pperception' ),
							'after'  => '</div>',
						) );
					?>
				</div><!-- .entry-content -->
			<?php else : ?>
				<div class="entry-content excerpt-content-blog">
				  <?php the_excerpt(); ?>
		    </div><!-- .entry-content -->
			<?php endif; ?>

			

			<?php pperception_post_thumbnail(); ?>


			<footer class="entry-footer">
				<?php //pperception_entry_footer(); ?>
			</footer><!-- .entry-footer -->
		</div><!-- blog-content -->
	</article><!-- #post-<?php the_ID(); ?> -->

<?php } else if(is_home()) { ?>
	<article  id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
			<div class="blog-content">
				<div class="row">
					<div class="col-sm-6">
						<?php pperception_post_thumbnail(); ?>
					</div>
					<?php if(has_post_thumbnail()): ?>	
						<div class="col-sm-6">
					<?php else: ?>
						<div class="col-sm-12">
				<?php endif ?>
						<header class="entry-header">
							<?php
							if ( is_singular() ) :
								the_title( '<h1 class="entry-title blog-title">', '</h1>' );
							else :
								the_title( '<h2 class="entry-title blog-title text-center"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h2>' );
								if ( 'post' === get_post_type() ) : ?>
									<div class="entry-meta home-posted-by text-center">
										<?php pperception_posted_on(); ?>
									</div><!-- .entry-meta -->
									<?php
								endif; 
							endif; 
							
							if ( 'post' === get_post_type() ) : ?>
							<div class="entry-meta">
								<?php //pperception_posted_on(); ?>
							</div><!-- .entry-meta -->
							<?php
							endif; ?>
						</header><!-- .entry-header -->
						
						 <div class="strip_border"></div>   

						<?php if(!is_home()) : ?>
							<div class="entry-content">
								<?php
									the_content( sprintf(
										wp_kses(
											/* translators: %s: Name of current post. Only visible to screen readers */
											__( 'Continue reading<span class="screen-reader-text"> "%s"</span>', 'pperception' ),
											array(
												'span' => array(
													'class' => array(),
												),
											)
										),
										get_the_title()
									) );

									wp_link_pages( array(
										'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'pperception' ),
										'after'  => '</div>',
									) );
								?>
							</div><!-- .entry-content -->
						<?php else : ?>
							<div class="entry-content excerpt-content-blog">
							  <?php the_excerpt(); ?>
					    </div><!-- .entry-content -->
						<?php endif; ?>

					</div><!-- column -->

				</div><!-- row -->
			</div><!-- blog-content -->
			
	</article><!-- #post-<?php the_ID(); ?> -->


<!-- For single page -->
 <?php
}else{?>
	<article  id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
			<div class="blog-content">
				<div class="row">
					
					
						<div class="col-sm-12 col-xs-12">
					
						<header class="entry-header">
							<?php
							if ( is_singular() ) :
								the_title( '<h1 class="entry-title blog-title">', '</h1>' );
							else :
								the_title( '<h2 class="entry-title blog-title text-center"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h2>' );
								if ( 'post' === get_post_type() ) : ?>
									<div class="entry-meta home-posted-by text-center">
										<?php pperception_posted_on(); ?>
									</div><!-- .entry-meta -->
									<?php
								endif; 
							endif; 
							
							if ( 'post' === get_post_type() ) : ?>
							<div class="entry-meta">
								<?php //pperception_posted_on(); ?>
							</div><!-- .entry-meta -->
							<?php
							endif; ?>
						</header><!-- .entry-header -->
						
						 <div class="strip_border"></div>   

						 <div class="col-sm-12 padding-top-50 padding-bottom-50">
							<?php pperception_post_thumbnail(); ?>
						</div>
						<?php if(!is_home()) : ?>
							<div class="entry-content">
								<?php
									the_content( sprintf(
										wp_kses(
											/* translators: %s: Name of current post. Only visible to screen readers */
											__( 'Continue reading<span class="screen-reader-text"> "%s"</span>', 'pperception' ),
											array(
												'span' => array(
													'class' => array(),
												),
											)
										),
										get_the_title()
									) );

									wp_link_pages( array(
										'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'pperception' ),
										'after'  => '</div>',
									) );
								?>
							</div><!-- .entry-content -->
						<?php else : ?>
							<div class="entry-content excerpt-content-blog">
							  <?php the_excerpt(); ?>
					    </div><!-- .entry-content -->
						<?php endif; ?>

					</div><!-- column -->

				</div><!-- row -->
			</div><!-- blog-content -->
			
	</article><!-- #post-<?php the_ID(); ?> -->

<?php
}
?>



