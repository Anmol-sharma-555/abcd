    <?php
    /**
     *
     * Displays all of the <head> section and everything before <div id="content-wrap">
     *
     * @package corvette
     * @since corvette 1.0
     */
    ?>
    <!DOCTYPE html>
    <html <?php language_attributes(); ?>>
    <head>
        <meta charset="<?php bloginfo( 'charset' ); ?>" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />

        <link rel="profile" href="http://gmpg.org/xfn/11" />

        <?php if ( is_singular() && pings_open() ) { ?>
            <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
        <?php } ?>

        <?php wp_head(); ?>
    </head>

    <body <?php body_class(); ?>>

        <div id="wrapper" class="clearfix">


                        <div class="corvette-top-bar">
                            <div class="menu-wrap">

                                <?php if ( has_nav_menu( 'main' ) ) { ?>
                                    <div class="top-bar">
                                        <div class="menu-wrap">
                                            <a class="menu-toggle" href="#"><i class="fa fa-bars"></i></a>
                                            <?php wp_nav_menu( array( 'theme_location' => 'main', 'menu_class' => 'main-nav clearfix' ) ); ?>

                                        </div>
                                    </div><!-- top bar -->
                                <?php } ?>



                                <div class="social-links">

                                <div class="socials">

                                <?php if ( get_theme_mod( 'corvette_facebook' ) ) : ?>
                                    <a href="<?php echo esc_url( get_theme_mod( 'corvette_facebook' ) ); ?>" class="facebook" data-title="Facebook" target="_blank"><span class="font-icon-social-facebook"><i class="fa fa-lg fa-facebook"></i></span></a>                        		    
                                <?php endif;  ?>

                                    <?php if ( get_theme_mod( 'corvette_twitter' ) ) : ?>
                                    <a href="<?php echo esc_url( get_theme_mod( 'corvette_twitter' ) ); ?>" class="twitter" data-title="Twitter" target="_blank"><span class="font-icon-social-twitter"><i class="fa fa-lg fa-twitter"></i></span></a>  
                                <?php endif;  ?>

                                    <?php if ( get_theme_mod( 'corvette_googleplus' ) ) : ?>
                                    <a href="<?php echo esc_url( get_theme_mod( 'corvette_googleplus' ) ); ?>" class="pinterest" data-title="Pinterest" target="_blank"><span class="font-icon-social-googleplus"><i class="fa fa-lg fa-google-plus"></i></span></a>                 

                                <?php endif;  ?>

                                    <?php if ( get_theme_mod( 'corvette_pinterest' ) ) : ?>
                                    <a href="<?php echo esc_url( get_theme_mod( 'corvette_pinterest' ) ); ?>" class="pinterest" data-title="Pinterest" target="_blank"><span class="font-icon-social-pinterest"><i class="fa fa-lg fa-pinterest"></i></span></a>                 
                                    <?php endif;  ?>

                                    <?php if ( get_theme_mod( 'corvette_linkedin' ) ) : ?>
                                    <a href="<?php echo esc_url( get_theme_mod( 'corvette_linkedin' ) ); ?>" class="linkedin" data-title="Linkedin" target="_blank"><span class="font-icon-social-linkedin"><i class="fa fa-lg fa-linkedin"></i></span></a>
                                <?php endif;  ?>

                                    <?php if ( get_theme_mod( 'corvette_instagram' ) ) : ?>
                                        <a href="<?php echo esc_url( get_theme_mod( 'corvette_instagram' ) ); ?>" class="instagram" data-title="Instagram" target="_blank"><span class="font-icon-social-instagram"><i class="fa fa-lg fa-instagram"></i></span></a>
                                    <?php endif;  ?>
                                    <?php if ( get_theme_mod( 'corvette_bloglovin' ) ) : ?>
                                        <a href="<?php echo esc_url( get_theme_mod( 'corvette_bloglovin' ) ); ?>" class="bloglovin" data-title="Bloglovin" target="_blank"><span class="font-icon-social-bloglovin"><i class="fa fa-lg fa-heart"></i></span></a>
                                    <?php endif;  ?>
                                    <?php if ( get_theme_mod( 'corvette_snapchat' ) ) : ?>
                                        <a href="<?php echo esc_url( get_theme_mod( 'corvette_snapchat' ) ); ?>" class="snapchat" data-title="Snapchat" target="_blank"><span class="font-icon-social-snapchat"><i class="fa fa-lg fa-snapchat"></i></span></a>
                                    <?php endif;  ?>
                                    <?php if ( get_theme_mod( 'corvette_tumblr' ) ) : ?>
                                        <a href="<?php echo esc_url( get_theme_mod( 'corvette_tumblr' ) ); ?>" class="tumblr" data-title="Tumblr" target="_blank"><span class="font-icon-social-tumblr"><i class="fa fa-lg fa-tumblr"></i></span></a>
                                    <?php endif;  ?>
                                    <?php if ( get_theme_mod( 'corvette_youtube' ) ) : ?>
                                        <a href="<?php echo esc_url( get_theme_mod( 'corvette_youtube' ) ); ?>" class="youtube" data-title="Youtube" target="_blank"><span class="font-icon-social-youtube"><i class="fa fa-lg fa-youtube"></i></span></a>
                                    <?php endif;  ?>
                                    <?php if ( get_theme_mod( 'corvette_dribbble' ) ) : ?>
                                        <a href="<?php echo esc_url( get_theme_mod( 'corvette_dribbble' ) ); ?>" class="dribbble" data-title="Dribbble" target="_blank"><span class="font-icon-social-dribbble"><i class="fa fa-lg fa-dribbble"></i></span></a>
                                    <?php endif;  ?>
                                    <?php if ( get_theme_mod( 'corvette_soundcloud' ) ) : ?>
                                        <a href="<?php echo esc_url( get_theme_mod( 'corvette_soundcloud' ) ); ?>" class="soundcloud" data-title="Soundcloud" target="_blank"><span class="font-icon-social-soundcloud"><i class="fa fa-lg fa-soundcloud"></i></span></a>
                                    <?php endif;  ?>
                                    <?php if ( get_theme_mod( 'corvette_vimeo' ) ) : ?>
                                        <a href="<?php echo esc_url( get_theme_mod( 'corvette_vimeo' ) ); ?>" class="vimeo" data-title="Vimeo" target="_blank"><span class="font-icon-social-vimeo"><i class="fa fa-lg fa-vimeo"></i></span></a>
                                    <?php endif;  ?>
                                    <?php if ( get_theme_mod( 'corvette_rss' ) ) : ?>
                                        <a href="<?php echo esc_url( get_theme_mod( 'corvette_rss' ) ); ?>" class="rss" data-title="RSS" target="_blank"><span class="font-icon-social-rss"><i class="fa fa-lg fa-envelope-o"></i></span></a>
                                    <?php endif;  ?>

                                    <?php if(!get_theme_mod('corvette_general_search_icon')) : ?>
                                        <div id="upper-search-area"><div class="searchwrap">
                                                <a href="#" class="ct_icon search"><i class="fa fa-search"></i></a>
                                                <div class="display-search-view">
                                                    <?php get_search_form(); ?>
                                                </div></div>

                                        </div>
                                    <?php endif; ?>



                            </div>




                            </div>

                            </div>


                            <div class="clearfix"></div>
                        </div><!-- top bar -->



            <div id="main" class="clearfix">
                <div class="header-wrapper clearfix">
                    <div class="header-inside clearfix">



                        <div class="hearder-holder">
                            <div class="custom-header-media">
                                <?php the_custom_header_markup(); ?>
                            </div>
                            <div class="logo-default">
                                <div class="logo-text">

                                <?php
                                if (has_custom_logo()) {
                                    the_custom_logo();
                                } ?>
                                <!-- load the logo -->
                                    <?php
                                        if (!has_custom_logo()) {
                                            ?>
                                            <h1>
                                                <a href="<?php echo esc_url( home_url('/') ); ?>"><?php bloginfo('name'); ?></a></h1>
                                            <span><?php bloginfo( 'description' ) ?></span>
                                            <?php
                                        } ?>
                                    <!-- otherwise show the site title and description -->

                                </div>

                            </div>

                        </div>

                    </div><!-- header inside -->
                </div><!-- header wrapper -->

