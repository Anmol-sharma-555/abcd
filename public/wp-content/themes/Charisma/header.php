<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>

    <meta name="viewport" content-area="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content-area="IE=edge">
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <link rel="profile" href="http://gmpg.org/xfn/11" />
    <title><?php wp_title( '-', true, 'right' ); ?></title>
	<?php if(get_theme_mod('ct_favicon')) : ?>
	<link rel="shortcut icon" href="<?php echo get_theme_mod('ct_favicon'); ?>" />
	<?php endif; ?>
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
    <link rel="alternate" type="application/rss+xml" title="<?php bloginfo('name'); ?> RSS Feed" href="<?php bloginfo('rss2_url'); ?>" />
    <link rel="alternate" type="application/atom+xml" title="<?php bloginfo('name'); ?> Atom Feed" href="<?php bloginfo('atom_url'); ?>" />
    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

	
	<header id="header" <?php if(!get_theme_mod('chick_themes_slider')) : ?>class="missing_slider"<?php endif; ?>>
		
		<div class="frontclass container">
			
			<div id="logo">
				
				<?php if(!get_theme_mod('ct_logo')) : ?>
					
					<?php if(is_front_page()) : ?>
						<h1><a href="<?php echo home_url(); ?>"><?php bloginfo( 'name' ); ?></a></h1>
					<?php else : ?>
						<h2><a href="<?php echo home_url(); ?>"><?php bloginfo( 'name' ); ?></a></h2>
					<?php endif; ?>
					
				<?php else : ?>
					
					<?php if(is_front_page()) : ?>
						<h1><a href="<?php echo home_url(); ?>"><img src="<?php echo esc_url(get_theme_mod('ct_logo')); ?>" alt="<?php bloginfo( 'name' ); ?>" /></a></h1>
					<?php else : ?>
						<h2><a href="<?php echo home_url(); ?>"><img src="<?php echo esc_url(get_theme_mod('ct_logo')); ?>" alt="<?php bloginfo( 'name' ); ?>" /></a></h2>
					<?php endif; ?>
					
				<?php endif; ?>
				
			</div>
			
		</div>
		
	</header>

    <div id="top-area">
        <div class="top-area-content container">
            <div id="navigation-wrap">
                <?php wp_nav_menu( array( 'container' => false, 'theme_location' => 'mainpage-menu', 'menu_class' => 'menu' ) ); ?>
            </div>
            <div class="menu-mobile"></div>
            <?php if(!get_theme_mod('ct_topbar_search_check')) : ?>
                <div id="upper-search-area">
                    <a href="#" class="ct_icon search"><i class="fa fa-search"></i></a>
                    <div class="display-search-view">
                        <?php get_search_form(); ?>
                    </div>
                </div>
            <?php endif; ?>


        </div>

    </div>