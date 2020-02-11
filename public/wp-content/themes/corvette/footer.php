<?php
/**
 * Template for displaying the footer.
 *
 * @package corvette
 * @since corvette 1.0
 */
?>

			<div id="footer" class="clearfix">
                <div id="insta_widget_footer">

                    <?php	/* Widget Area */	if ( !function_exists( 'dynamic_sidebar' ) || !dynamic_sidebar('Instagram Footer') ) ?>

                </div>
                <div id='credits'>
                        <div class='to_top' title='Scroll To Top'></div>
                    </div>
				<div class="footer-inside clearfix">

                    


                    <div class="footer-area-wrap">
                    <?php	/* Widget */	if ( !function_exists( 'dynamic_sidebar' ) || !dynamic_sidebar('Footer Left') ) ?>
                    </div>
                    <div class="footer-area-wrap">
                    <?php	/* Widget */	if ( !function_exists( 'dynamic_sidebar' ) || !dynamic_sidebar('Footer Center') ) ?>
                    </div>
                    <div class="footer-area-wrap">
                    <?php	/* Widget */	if ( !function_exists( 'dynamic_sidebar' ) || !dynamic_sidebar('Footer Right') ) ?>
                    </div>
					<div class="footer-copy clearfix">

						<p class="copyright"> <?php if(get_theme_mod('footer_copyright')): echo wp_kses_post(get_theme_mod('footer_copyright', 'Copyright &copy; 2018.')); else: ?> Copyright &copy; 2018. <?php endif; ?>  </p>

                        <div class="theme-author">
                            <?php if(get_theme_mod('footer_designed')): echo wp_kses_post(get_theme_mod('footer_designed')); else:

                                ?> Designed by <a href="<?php echo esc_url( 'http://www.vinethemes.com/' ); ?>">
                                <?php esc_html_e( 'VineThemes', 'corvette' ); ?>
                            </a> <?php
                            endif; ?>



                        </div>
                    </div>


				</div><!-- footer-inside -->
			</div><!--footer-->
		</div><!-- main -->
	</div><!-- wrapper -->

	<?php wp_footer(); ?>

</body>
</html>
