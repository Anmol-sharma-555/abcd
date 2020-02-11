	
		<!-- END content-area -->
		</div>
	
	<!-- END CONTAINER -->
	</div>
	

	
	<footer id="footer" class="ct_footer_exist">
        <div id="insta_widget_footer">

            <?php	/* Widget Area */	if ( !function_exists( 'dynamic_sidebar' ) || !dynamic_sidebar('Instagram Footer') ) ?>

        </div>

		<div class="container">



            <!-- footer -->
            <div id="mainfooter">

                <!-- 1/3 -->
                <div class="four columns">
                    <?php if ( !function_exists( 'dynamic_sidebar' ) || !dynamic_sidebar('footer-left-widget') ) ?>
                </div>
                <!-- /End 1/3 -->
                <!-- 2/3 -->
                <div class="four columns">
                    <?php if ( !function_exists( 'dynamic_sidebar' ) || !dynamic_sidebar('footer-center-widget') ) ?>
                </div>
                <!-- /End 2/3 -->
                <!-- 3/3 -->
                <div class="four columns">
                    <?php if ( !function_exists( 'dynamic_sidebar' ) || !dynamic_sidebar('footer-right-widget') ) ?>
                </div>
                <!-- /End 3/3 -->

            </div>
            <!-- /End Footer -->






			<div id="copyright_area">


                <?php if(!get_theme_mod('ct_footer_share')) : ?>
                    <div id="ct_social_footer">

                        <?php if(get_theme_mod('ct_facebook')) : ?><a href="http://facebook.com/<?php echo esc_html(get_theme_mod('ct_facebook')); ?>" target="_blank"><i class="fa fa-facebook"></i> </a><?php endif; ?>
                        <?php if(get_theme_mod('ct_twitter')) : ?><a href="http://twitter.com/<?php echo esc_html(get_theme_mod('ct_twitter')); ?>" target="_blank"><i class="fa fa-twitter"></i> </a><?php endif; ?>
                        <?php if(get_theme_mod('ct_instagram')) : ?><a href="http://instagram.com/<?php echo esc_html(get_theme_mod('ct_instagram')); ?>" target="_blank"><i class="fa fa-instagram"></i> </a><?php endif; ?>
                        <?php if(get_theme_mod('ct_pinterest')) : ?><a href="http://pinterest.com/<?php echo esc_html(get_theme_mod('ct_pinterest')); ?>" target="_blank"><i class="fa fa-pinterest"></i> </a><?php endif; ?>
                        <?php if(get_theme_mod('ct_bloglovin')) : ?><a href="http://bloglovin.com/<?php echo esc_html(get_theme_mod('ct_bloglovin')); ?>" target="_blank"><i class="fa fa-heart"></i> </a><?php endif; ?>
                        <?php if(get_theme_mod('ct_google')) : ?><a href="http://plus.google.com/<?php echo esc_html(get_theme_mod('ct_google')); ?>" target="_blank"><i class="fa fa-google-plus"></i> </a><?php endif; ?>
                        <?php if(get_theme_mod('ct_tumblr')) : ?><a href="http://<?php echo esc_html(get_theme_mod('ct_tumblr')); ?>.tumblr.com/" target="_blank"><i class="fa fa-tumblr"></i> </a><?php endif; ?>
                        <?php if(get_theme_mod('ct_youtube')) : ?><a href="http://youtube.com/<?php echo esc_html(get_theme_mod('ct_youtube')); ?>" target="_blank"><i class="fa fa-youtube-play"></i> </a><?php endif; ?>
                        <?php if(get_theme_mod('ct_dribbble')) : ?><a href="http://dribbble.com/<?php echo esc_html(get_theme_mod('ct_dribbble')); ?>" target="_blank"><i class="fa fa-dribbble"></i> </a><?php endif; ?>
                        <?php if(get_theme_mod('ct_soundcloud')) : ?><a href="http://soundcloud.com/<?php echo esc_html(get_theme_mod('ct_soundcloud')); ?>" target="_blank"><i class="fa fa-soundcloud"></i> </a><?php endif; ?>
                        <?php if(get_theme_mod('ct_vimeo')) : ?><a href="http://vimeo.com/<?php echo esc_html(get_theme_mod('ct_vimeo')); ?>" target="_blank"><i class="fa fa-vimeo-square"></i> </a><?php endif; ?>
                        <?php if(get_theme_mod('ct_linkedin')) : ?><a href="<?php echo esc_html(get_theme_mod('ct_linkedin')); ?>" target="_blank"><i class="fa fa-linkedin"></i> </a><?php endif; ?>
                        <?php if(get_theme_mod('ct_rss')) : ?><a href="<?php echo esc_url(get_theme_mod('ct_rss')); ?>" target="_blank"><i class="fa fa-rss"></i> </a><?php endif; ?>

                    </div>
                <?php endif; ?>


				<p class="footerct copyright"><?php echo wp_kses_post(get_theme_mod('ct_footer_copyright1', '&copy; 2018 - VineThemes. Designed by <a href="http://www.vinethemes.com">VineThemes.com</a>')); ?></p>
				
			</div>
			
		</div>
		
	</footer>
	
	<?php wp_footer(); ?>
	
</body>

</html>