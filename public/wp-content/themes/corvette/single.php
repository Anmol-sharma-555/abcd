    <?php
    /**
     * Single Post Template
     * This template is used when a single post page is shown.
     *
     * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
     *
     * @package WordPress
     * @subpackage OpenTute+
     */

    get_header(); ?>

        <div id="content-wrap" class="clearfix">
            <div class="single-container"></div>

                <div id="content" class="<?php if(get_theme_mod('corvette_general_sidebar_post') == true) : ?>fullwidth<?php endif; ?>">
                    <!-- post navigation -->
                    <?php get_template_part( 'template-title' ); ?>

                    <div class="post-wrap">
                        <!-- load the posts -->
                        <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

                            <div <?php post_class('post'); ?>>
                                <div class="box">



                                    <div class="frame">
                                        <?php if( is_page() ) {} else { ?>
                                            <div class="bar-categories">
                                                <?php if ( has_category() ) { ?>
                                                    <div class="categories">
                                                        <?php the_category(); ?>
                                                    </div>
                                                <?php } ?>


                                            </div><!-- bar categories -->
                                        <?php } ?>
                                        <div class="title-wrap">

                                            <h2 class="entry-title"><?php the_title(); ?></h2>

                                            <?php if( is_page() ) { } else { ?>
                                                 <div class="title-meta">
                                    <?php echo get_avatar("thumbnail"); ?> <?php the_author_posts_link(); ?>

                                     <i class="fa fa-clock-o"></i><a href="<?php the_permalink(); ?>"><?php echo get_the_date(); ?></a>

                                     <i class="fa fa-comments-o"></i><?php comments_popup_link( __( '0 Comment', 'corvette' ), __( '1 Comment', 'corvette' ), __( '% Comments', 'corvette' ) ); ?>
                                </div><!-- title meta -->
                                            <?php } ?>

                                        </div><!-- title wrap -->


                                        <?php if ( has_post_format( 'gallery' , $post->ID ) ) { ?>
                                            <?php if ( function_exists( 'array_gallery' ) ) { array_gallery(); } ?>
                                        <?php } ?>

                                        <!-- load the video -->
                                        <?php if ( get_post_meta( $post->ID, 'arrayvideo', true ) ) { ?>
                                            <div class="arrayvideo">
                                                <?php echo get_post_meta( $post->ID, 'arrayvideo', true ) ?>
                                            </div>

                                        <?php } else { ?>

                                            <!-- load the featured image -->
                                            <?php if ( has_post_thumbnail() ) { ?>
                                                <a class="featured-image" href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>"><?php the_post_thumbnail( 'corvette-large-image' ); ?></a>
                                            <?php } ?>

                                        <?php } ?>


                                        <div class="post-content">
                                            <?php if( is_search() || is_archive() ) { ?>
                                                <?php the_excerpt(); ?>
                                                <p><a href="<?php the_permalink(); ?>" class="readmore"><?php _e( 'Read More', 'corvette' ); ?></a></p>
                                            <?php } else { ?>
                                                <?php the_content( __( 'Read More', 'corvette' ) ); ?>

                                                <?php if( is_single() || is_page() ) { ?>
                                                    <div class="pagelink">
                                                        <?php wp_link_pages(); ?>
                                                    </div>
                                                <?php } ?>
                                            <?php } ?>



                                           </div> 
                                        </div><!-- post content -->
                                    </div><!-- frame -->

                                    <!-- post meta -->
                                    <?php get_template_part( 'template-meta' ); ?>
                                </div><!-- box -->
                            </div><!-- post-->

                        <?php endwhile; ?>
                    </div><!-- post wrap -->

                    <!-- post navigation -->
                    <?php get_template_part( 'template-nav' ); ?>

                    <?php else: ?>
                </div><!-- content -->

                <?php endif; ?>
                <!-- end posts -->


<?php    if(get_theme_mod('corvette_general_author_post') != true) {
 do_action( 'corvette_authorbox' );
} ?>



                <!-- comments -->
                <?php if( is_single() && comments_open() ) {
                    comments_template();
                } ?>
            </div><!--content-->

            <!-- load the sidebar -->
    <?php if(!get_theme_mod('corvette_general_sidebar_post')) {
        get_sidebar();
    } ?>
        </div><!-- content wrap -->

        <!-- load footer -->
        <?php get_footer(); ?>
