<?php get_header(); ?>
	
	<div class="container">

		<div id="content-area">
		
			<div id="mainpage">
			
				<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
				
					<?php get_template_part('content-area', 'page'); ?>
						
				<?php endwhile; ?>
				
				<?php endif; ?>
				
			</div>

<?php get_sidebar(); ?>
<?php get_footer(); ?>