<?php
/**
 Customizer Style
 */

function corvette_customizer_css() {
    ?>
    <style type="text/css">
        .bar-categories a,span.post-category a, .below-slider-wrapper input[type="submit"], .readmore:hover,::selection,#sidebar .widget_categories li a:hover + span, .footer-inside .widget_categories li a:hover + span,.widget_archive li a:hover + span,.navigation li a:hover, .navigation li.active a,#commentform #submit:hover, .wpcf7-submit:hover ,#searchsubmit,#credits{  background:<?php echo esc_attr(get_theme_mod( 'corvette_main_color' )); ?>; }

        .readmore:hover,.navigation li a:hover, .navigation li.active a,#commentform #submit, .wpcf7-submit {  border-color:<?php echo esc_attr(get_theme_mod( 'corvette_main_color' )); ?>; }

        a:hover,.scroll-post .post-category a, .slick-dots li.slick-active button:before,#sidebar a:hover,.theme-author a,.post-content a,.corvette_bio_section a,#commentform #submit, .wpcf7-submit,.bar a:hover{  color:<?php echo esc_attr(get_theme_mod( 'corvette_main_color' )); ?>; }

        .logo-text h1 a , .logo-text span{ color:#<?php echo esc_attr(get_header_textcolor()); ?>; }
        .logo-text h1 a:hover{ color:<?php echo esc_attr(get_theme_mod('corvette_header_hover_color')); ?> }
        .corvette-top-bar,.slicknav_menu{ background:<?php echo esc_attr(get_theme_mod('corvette_top_header')); ?> }
        .corvette-top-bar a,#upper-search-area a{ color:<?php echo esc_attr(get_theme_mod('corvette_top_header_color')); ?> }
        
    </style>
    <?php
}
add_action( 'wp_head', 'corvette_customizer_css' );

?>