<?php
    /**
     * Template for the post excerpt slider on the homepage.
     *
     * @package corvette
     * @since corvette 1.0
     */
    ?>

    <!--  scroller -->
    <?php if( is_home() && get_theme_mod( 'corvette_customizer_slider_disable' ) != 'disable' ) {

        if(get_theme_mod('corvette_slider_designs')=='Slider1'){ ?>

            <div class="corvette_slides">
                    <?php
                    $image_size = "corvette-medium-image";
                    $number23 = get_theme_mod( 'corvette_slider_slides' );
                    $category=get_theme_mod('corvette_slider_category');

                        $featured_list_args  = array(
                            'posts_per_page' => $number23,
                            'cat' => $category
                        );
                        $featured_list_posts = new WP_Query( $featured_list_args );
                    ?>

                    <?php while( $featured_list_posts->have_posts() ) : $featured_list_posts->the_post() ?>
                <div class="item-slide">


                    <?php if ( has_post_thumbnail() ) {
                        $image = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), $image_size ); ?>
                        <div class="image-slide">
                            <a href="<?php echo esc_url(get_permalink()); ?>">
                                <div class="feat-item" style="background-image:url(<?php if(!$image) { echo get_template_directory_uri() . '/images/slider-default.png'; } else { echo esc_url($image[0]); } ?>);"></div>
                            </a>
                        </div>
                    <?php }
                    else { ?>
                        <div class="image-slide">
                            <a href="<?php echo esc_url(get_permalink()); ?>">
                                <div class="feat-item" style="background-image:url(<?php echo get_template_directory_uri() . '/images/slider-default.png'; ?>);"></div>
                            </a>
                        </div>
                    <?php } ?>


                    <div class="feat-item-wrapper">
                        <div class="feat-overlay">
                            <div class="feat-inner">
                                <div class="scroll-post">
                                    <?php echo corvette_getCategory(); ?>
                                </div>
                                <h2 class="feat-title">
                                    <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                                </h2>
                            </div>
                        </div>




                    </div>
                </div>
            <?php endwhile; ?>
                    <?php wp_reset_postdata(); ?>
            </div><!-- slides -->

        <?php }

        else if(get_theme_mod( 'corvette_slider_designs' ) != 'Slider2' && get_theme_mod( 'corvette_slider_designs' ) != 'Slider3'){ ?>
            <div class="corvette_slides">
                    <?php
                    $image_size = "corvette-medium-image";
                    $number23 = get_theme_mod( 'corvette_slider_slides' );
                    $category=get_theme_mod('corvette_slider_category');

                        $featured_list_args  = array(
                            'posts_per_page' => $number23,
                            'cat' => $category
                        );
                        $featured_list_posts = new WP_Query( $featured_list_args );
                    ?>

                    <?php while( $featured_list_posts->have_posts() ) : $featured_list_posts->the_post() ?>
                <div class="item-slide">


                    <?php if ( has_post_thumbnail() ) {
                        $image = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), $image_size ); ?>
                        <div class="image-slide">
                            <a href="<?php echo esc_url(get_permalink()); ?>">
                                <div class="feat-item" style="background-image:url(<?php if(!$image) { echo get_template_directory_uri() . '/images/slider-default.png'; } else { echo esc_url($image[0]); } ?>);"></div>
                            </a>
                        </div>
                    <?php }
                    else { ?>
                        <div class="image-slide">
                            <a href="<?php echo esc_url(get_permalink()); ?>">
                                <div class="feat-item" style="background-image:url(<?php echo get_template_directory_uri() . '/images/slider-default.png'; ?>);"></div>
                            </a>
                        </div>
                    <?php } ?>


                    <div class="feat-item-wrapper">
                        <div class="feat-overlay">
                            <div class="feat-inner">
                                <div class="scroll-post">
                                    <?php echo corvette_getCategory(); ?>
                                </div>
                                <h2 class="feat-title">
                                    <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                                </h2>
                            </div>
                        </div>




                    </div>
                </div>
            <?php endwhile; ?>
                    <?php wp_reset_postdata(); ?>
            </div><!-- slides -->
        <?php
        }

        if(get_theme_mod('corvette_slider_designs')=='Slider2'){ ?>

            <div class="corvette_slides2">
                <?php
                $image_size = "corvette-small-image";
                $number23 = get_theme_mod( 'corvette_slider_slides' );
                $category=get_theme_mod('corvette_slider_category');

                $featured_list_args  = array(
                    'posts_per_page' => $number23,
                    'cat' => $category
                );
                $featured_list_posts = new WP_Query( $featured_list_args );
                ?>

                <?php while( $featured_list_posts->have_posts() ) : $featured_list_posts->the_post() ?>
                    <div class="item-slide">


                        <?php if ( has_post_thumbnail() ) {
                            $image = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), $image_size ); ?>
                            <div class="image-slide">
                                <a href="<?php echo esc_url(get_permalink()); ?>">
                                    <div class="feat-item" style="background-image:url(<?php if(!$image) { echo get_template_directory_uri() . '/images/slider-default.png'; } else { echo esc_url($image[0]); } ?>);"></div>
                                </a>
                            </div>
                        <?php }
                        else { ?>
                            <div class="image-slide">
                                <a href="<?php echo esc_url(get_permalink()); ?>">
                                    <div class="feat-item" style="background-image:url(<?php echo get_template_directory_uri() . '/images/slider-default.png'; ?>);"></div>
                                </a>
                            </div>
                        <?php } ?>


                        <div class="feat-item-wrapper">
                            <div class="feat-overlay">
                                <div class="feat-inner">
                                    <div class="scroll-post">
                                        <?php echo corvette_getCategory(); ?>
                                    </div>
                                    <h2 class="feat-title">
                                        <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                                    </h2>
                                </div>
                            </div>




                        </div>
                    </div>
                <?php endwhile; ?>
                <?php wp_reset_postdata(); ?>
            </div><!-- slides -->

        <?php }


        if(get_theme_mod('corvette_slider_designs')=='Slider3'){ ?>

        <div class="corvette_slides3">
            <?php
            $image_size = "corvette-large-image";
            $number23 = get_theme_mod( 'corvette_slider_slides' );
            $category=get_theme_mod('corvette_slider_category');

            $featured_list_args  = array(
                'posts_per_page' => $number23,
                'cat' => $category
            );
            $featured_list_posts = new WP_Query( $featured_list_args );
            ?>

            <?php while( $featured_list_posts->have_posts() ) : $featured_list_posts->the_post() ?>
                <div class="item-slide">


                    <?php if ( has_post_thumbnail() ) {
                        $image = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), $image_size ); ?>
                        <div class="image-slide">
                            <a href="<?php echo esc_url(get_permalink()); ?>">
                                <div class="feat-item" style="background-image:url(<?php if(!$image) { echo get_template_directory_uri() . '/images/slider-default.png'; } else { echo esc_url($image[0]); } ?>);"></div>
                            </a>
                        </div>
                    <?php }
                    else { ?>
                        <div class="image-slide">
                            <a href="<?php echo esc_url(get_permalink()); ?>">
                                <div class="feat-item" style="background-image:url(<?php echo get_template_directory_uri() . '/images/slider-default.png'; ?>);"></div>
                            </a>
                        </div>
                    <?php } ?>


                    <div class="feat-item-wrapper">
                        <div class="feat-overlay">
                            <div class="feat-inner">
                                <div class="scroll-post">
                                    <?php echo corvette_getCategory(); ?>
                                </div>
                                <h2 class="feat-title">
                                    <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                                </h2>
                            </div>
                        </div>




                    </div>
                </div>
            <?php endwhile; ?>
            <?php wp_reset_postdata(); ?>
        </div><!-- slides -->

    <?php } ?>


    <?php } ?>