<?php

	/* Template Name: Full Width Page Demo */

?>
<?php get_header(); ?>
    <div class="main-slider-top">


        <div class="<?php if(get_theme_mod('chick_themes_slider_full')=='full') : ?> container<?php else: ?> slider_style2<?php endif; ?> ">
            <?php if(get_theme_mod( 'chick_themes_slider' ) == true) : ?>
                <?php get_template_part('inc/slider/slider'); ?>
            <?php endif; ?>

        </div>
    </div>

	<div class="container">
		
		<div id="content-area" class="cf">

			<div id="mainpage">
                
                <ul class="ct_grid_view">
                <?php if ( have_posts() ) : ?>
<?php query_posts('post_type=post&post_status=publish&paged='. get_query_var('paged')); 
?>
			<?php while ( have_posts() ) : the_post(); ?>
					
							<?php get_template_part('content-area', 'grid'); ?>
						

			<?php endwhile; ?>

			<?php my_pagination(); ?>

                </ul>
		<?php else : ?>

			<?php get_template_part( 'content-area', 'none' ); ?>

		<?php endif; ?>
                
			
			</div>
<?php get_sidebar(); ?>
<?php get_footer(); ?>