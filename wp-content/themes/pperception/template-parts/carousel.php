<?php
            if (get_theme_mod( 'pperception_feature_category_setting') != '' ) {
                ?>
<div class="row">
    <!-- Carousel -->
    <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
        <!-- Indicators -->

        <!-- Wrapper for slides -->
        <div class="carousel-inner">

            <?php 
            $i=0;
            $cat_id=esc_html(get_theme_mod('pperception_feature_category_setting'));

            query_posts('cat='.$cat_id); ?>
            <?php    while (have_posts()) : the_post();?>

                <div class="item <?php if($i==0) { echo "active";} ?>">

                    <?php the_post_thumbnail(); ?>

                    <div class="header-text hidden-xs">
                        <div class="col-md-12 text-center">

                            <h3><?php the_title(); ?></h3>
                            <a class="btn btn-theme btn-sm btn-min-block" href="<?php the_permalink(); ?>"><?php esc_html_e('Learn More','pperception'); ?> </a>

                        </div><!-- /header-text -->
                    </div>
                </div>
                <?php  $i++; endwhile;
            wp_reset_query(); ?>

        </div>
        <!-- Controls -->
        <ol class="carousel-indicators">

            <?php
            for($count=0; $count<$i; $count++){ ?>
                <li data-target="#carousel-example-generic" data-slide-to="<?php echo $count; ?>" class=""></li>
            <?php }
            ?>

        </ol>
        <a class="left carousel-control" href="#carousel-example-generic" data-slide="prev">

        </a>
        <a class="right carousel-control" href="#carousel-example-generic" data-slide="next">

        </a>

       
    </div><!-- /carousel -->
</div>
 <?php     }?>