<?php
/**
 * The main template file.
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 * Learn more: http://codex.wordpress.org/Template_Hierarchy
 *
 * @package corvette
 * @since corvette 1.0
 */

get_header(); ?>

<?php get_template_part( 'inc/slider/slider' ); ?>

		<div id="content-wrap" class="clearfix">
			<!--  slider -->
            <?php if( is_home() ) { ?>
            <div class="below-slider-wrapper">
            <?php	/* Widget */	if ( !function_exists( 'dynamic_sidebar' ) || !dynamic_sidebar('Below Slider') ) ?>
</div>
 <?php } ?>

			<div id="content" class="post-list <?php if(get_theme_mod('corvette_general_sidebar_home') == true) : ?>fullwidth<?php endif; ?> ">
				<!-- post navigation -->
				<?php get_template_part( 'template-title' ); ?>

				<div class="post-wrap clearfix <?php if(get_theme_mod('corvette_general_post_layout')=='grid'){ ?>standard<?php } else if(get_theme_mod('corvette_general_post_layout')=='list'){ ?>standard<?php } else{?>standard<?php }  ?>">
					<!-- load the posts -->
					<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

						<div <?php post_class('post'); ?>>
							<div class="box">

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

                                        <?php if(get_theme_mod('corvette_general_post_layout')=='list'){ ?>
                                            <div class="featured-image-wrap"><a class="featured-image" href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>"><?php the_post_thumbnail( 'large-image' ); ?></a></div>
                                        <?php }

                                        else{ ?>
                                            <div class="featured-image-wrap"><a class="featured-image" href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>"><?php the_post_thumbnail( 'large-image' ); ?></a></div>
                                        <?php } ?>


									<?php } ?>

								<?php } ?>


									<div class="title-wrap <?php if(get_theme_mod('corvette_general_post_summary') == 'full') : ?>alignleft <?php endif; ?>">
										
					<?php corvette_getCategory(); ?>


										<h2 class="entry-title"><a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>" rel="bookmark"><?php the_title(); ?></a></h2>

                                        <div class="post-content">
                                            <?php if( is_search() || is_archive() || is_home() ) { ?>

                                                <?php if(get_theme_mod('corvette_general_post_summary') != 'full') : ?>

                                                    <p><?php the_excerpt(); ?></p>

                                                    <?php else:

                                                    if(get_theme_mod('corvette_general_post_layout')=='list'){
                                                        the_content();
                                                    }
                                                    else{
                                                        the_content();
                                                    }
                                                    ?>

                                                <?php endif; ?>

                                                <p class="align-center"><a href="<?php the_permalink(); ?>" class="readmore"><?php esc_html_e( 'Read More', 'corvette' ); ?></a></p>
                                            <?php } else { ?>
                                                <?php the_content( __( 'Read More', 'corvette' ) ); ?>

                                                <?php if( is_single() || is_page() ) { ?>
                                                    <div class="pagelink">
                                                        <?php wp_link_pages(); ?>
                                                    </div>
                                                <?php } ?>
                                            <?php } ?>
                                        </div><!-- post content -->

                                        <?php if( is_page() ) { } else { ?>
                                        <div class="title-meta clearfix">

                                            <div class="postdate"><?php echo get_the_date(); ?></div>

                                            <div class="postcomment"><?php comments_popup_link( __( '0 Comment', 'corvette' ), __( '1 Comment', 'corvette' ), __( '% Comments', 'corvette' ),'','' ); ?></div>


                                        </div>

                                        					<?php } ?>


									</div><!-- title wrap -->




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

			<!-- comments -->
			<?php if( is_single() && comments_open() ) {
				comments_template();
			} ?>
		</div><!--content-->

		<!-- load the sidebar -->
		<?php if(!get_theme_mod('corvette_general_sidebar_home')) {
            get_sidebar();
        } ?>
	</div><!-- content wrap -->

	<!-- load footer -->
	<?php get_footer(); ?>
