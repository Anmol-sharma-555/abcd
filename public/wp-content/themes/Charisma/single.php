<?php get_header(); ?>
	
	<div class="loop container">
		
		<div id="content-area">
		
			<div id="mainpage" <?php if(get_theme_mod('ct_sidebar_post') == true) : ?>class="fullwidth"<?php endif; ?>>
			
				<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
                    <?php
                    setCTcounterViews(get_the_ID());
                    ?>
					<?php get_template_part('content-area'); ?>
						
				<?php endwhile; ?>
				
				<?php endif; ?>
				
			</div>

<?php if(get_theme_mod('ct_sidebar_post')) : else : ?><?php get_sidebar(); ?><?php endif; ?>
<?php get_footer(); ?>