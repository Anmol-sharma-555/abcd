<?php

	/* Template Name: Full Width Page */

?>
<?php get_header(); ?>
	
	<div class="loop container">
		
		<div id="content-area">
		
			<div id="mainpage" class="fullwidth">
			
				<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
				
					<?php get_template_part('content-area', 'page'); ?>
						
				<?php endwhile; ?>
				
				<?php endif; ?>
				
			</div>

<?php get_footer(); ?>