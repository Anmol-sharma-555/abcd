<?php
//////////////////////////////////////////////////////////////////
// Customizer - Add CSS
//////////////////////////////////////////////////////////////////
function chickthemes_customizer_css() {
    ?>
    <style type="text/css">
	
		#logo { padding-top:<?php echo get_theme_mod( 'ct_header_padding_top' ); ?>px; padding-bottom:<?php echo get_theme_mod( 'ct_header_padding_bottom' ); ?>px; }
		<?php if(get_theme_mod('ct_promo_border') == true) : ?>.featured-box-overlay { border:none; }<?php endif; ?>
		

		<?php if(get_theme_mod( 'ct_topbar_nav_color' )) : ?>#navigation-wrap .menu li a{ color:<?php echo get_theme_mod( 'ct_topbar_nav_color' ); ?>; }<?php endif; ?>
		#navigation-wrap .menu li a:hover {  color:<?php echo get_theme_mod( 'ct_topbar_nav_color_hover' ); ?>; }
		
		#navigation-wrap .menu .sub-menu, #navigation-wrap .menu .children { background: <?php echo get_theme_mod( 'ct_drop_bg' ); ?>; }
		#navigation-wrap ul.menu ul a, #navigation-wrap .menu ul ul a { <?php if(get_theme_mod( 'ct_drop_border' )) : ?>border-top: 1px solid <?php echo get_theme_mod( 'ct_drop_border' ); ?>;<?php endif; ?> color:<?php echo get_theme_mod( 'ct_drop_text_color' ); ?>; }
		#navigation-wrap ul.menu ul a:hover, #navigation-wrap .menu ul ul a:hover { color: <?php echo get_theme_mod( 'ct_drop_text_hover_color' ); ?>; background:<?php echo get_theme_mod( 'ct_drop_text_hover_bg' ); ?>; }
		
		.slicknav_nav { background:<?php echo get_theme_mod( 'ct_mobile_bg' ); ?>; }
		.slicknav_nav a { color:<?php echo get_theme_mod( 'ct_mobile_text' ); ?>; }
		.slicknav_menu .slicknav_icon-bar { background-color:<?php echo get_theme_mod( 'ct_mobile_icon' ); ?>; }
		
		#upper-social-area a { color:<?php echo get_theme_mod( 'ct_topbar_social_color' ); ?>; }
		#upper-social-area a:hover { color:<?php echo get_theme_mod( 'ct_topbar_social_color_hover' ); ?>; }
		#upper-search-area i { color:<?php echo get_theme_mod( 'ct_topbar_search_magnify' ); ?>; }
		
		.widget-title { background: <?php echo get_theme_mod( 'ct_sidebar_title_bg' ); ?>; color: <?php echo get_theme_mod( 'ct_sidebar_title_text' ); ?>;}
		.widget-title:after { border-top-color:<?php echo get_theme_mod( 'ct_sidebar_title_bg' ); ?>; }
		<?php if(get_theme_mod( 'ct_sidebar_title_arrow' )) : ?>.widget-title:after { display:none;} <?php endif; ?>
		.social-widget a { color:<?php echo get_theme_mod( 'ct_sidebar_social_icon' ); ?>; }
		.social-widget a:hover { color:<?php echo get_theme_mod( 'ct_sidebar_social_icon_hover' ); ?>; }
		
		#footer { background:<?php echo get_theme_mod( 'ct_footer_bg' ); ?>; }
		#ct_social_footer a { color:<?php echo get_theme_mod( 'ct_footer_social' ); ?>; }
		#ct_social_footer a:hover { color:<?php echo get_theme_mod( 'ct_footer_social_hover' ); ?>; }
		#ct_social_footer { border-color:<?php echo get_theme_mod( 'ct_footer_social_line' ); ?>; }
		.copyright { color:<?php echo get_theme_mod( 'ct_footer_copyright_color' ); ?>; }
		.copyright a { color:<?php echo get_theme_mod( 'ct_footer_copyright_link' ); ?>; }
		
		.entry_article_header h2 a, .entry_article_header h1 { color:<?php echo get_theme_mod( 'ct_post_title' ); ?>; }
		.separators { color:<?php echo get_theme_mod( 'ct_post_title_divider' ); ?>; }
		.post-entry p { color:<?php echo get_theme_mod( 'ct_post_text' ); ?>; }
		.post-entry h1, .post-entry h2, .post-entry h3, .post-entry h4, .post-entry h5, .post-entry h6 { color:<?php echo get_theme_mod( 'ct_post_h' ); ?>; }
		.more-link { color:<?php echo get_theme_mod( 'ct_post_readmore_text' ); ?>; }
		a.more-link:hover { color:<?php echo get_theme_mod( 'ct_post_readmore_text_hover' ); ?>; }
		.more-line { color:<?php echo get_theme_mod( 'ct_post_readmore_line' ); ?>; }
		.more-link:hover > .more-line { color:<?php echo get_theme_mod( 'ct_post_readmore_line_hover' ); ?>; }
		.social_share_area-box.share-buttons a { color:<?php echo get_theme_mod( 'ct_post_share_color' ); ?>; }
		.social_share_area-box.share-buttons a:hover { color:<?php echo get_theme_mod( 'ct_post_share_color_hover' ); ?>; }
		
		.mc4wp-form { background:<?php echo get_theme_mod( 'ct_sidebar_newsletter_bg' ); ?>; }
		.mc4wp-form label { color:<?php echo get_theme_mod( 'ct_sidebar_newsletter_text' ); ?>; }
		.mc4wp-form button, .mc4wp-form input[type=button], .mc4wp-form input[type=submit] { background:<?php echo get_theme_mod( 'ct_sidebar_newsletter_button_bg' ); ?>; color:<?php echo get_theme_mod( 'ct_sidebar_newsletter_button_text' ); ?>; }
		.mc4wp-form button:hover, .mc4wp-form input[type=button]:hover, .mc4wp-form input[type=submit]:hover { background:<?php echo get_theme_mod( 'ct_sidebar_newsletter_button_bg_hover' ); ?>; color:<?php echo get_theme_mod( 'ct_sidebar_newsletter_button_text_hover' ); ?>; }


        #footer h2:before,a.read-more:before,.feat-overlay .category a:after, .feat-overlay .category a:before,.grid-item .entry_article_header .category:before{ background-color:<?php echo get_theme_mod( 'ct_accent_color' ); ?>; }


        .read-more,a, .entry_article_header .category a { color:<?php echo get_theme_mod( 'ct_accent_color' ); ?>; }
        .widget-title:after,.top-area-content:after,.entry_article_header .category a { border-color:<?php echo get_theme_mod( 'ct_accent_color' ); ?>; }
		
		<?php if(get_theme_mod( 'ct_custom_css' )) : ?>
		<?php echo get_theme_mod( 'ct_custom_css' ); ?>
		<?php endif; ?>
		
    </style>
    <?php
}
add_action( 'wp_head', 'chickthemes_customizer_css' );

?>