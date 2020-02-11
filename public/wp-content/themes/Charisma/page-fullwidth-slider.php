<?php

	/* Template Name: Full Width Page w/ Slider & featured-box Boxes */

?>
<?php get_header(); ?>
	
	<div class="loop container">
		
		<div id="content-area">
		
			<?php get_template_part('inc/slider/slider'); ?>
			
			<?php get_template_part('inc/featured-box/featured-box'); ?>

			<div id="mainpage" class="fullwidth">
			
				<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
				
					<?php get_template_part('content-area', 'page'); ?>
						
				<?php endwhile; ?>
				
				<?php endif; ?>
				
			</div>

<?php get_footer(); ?>