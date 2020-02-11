<?php get_header(); ?>
	
	<div class="loop container">
		
		<div id="content-area">
		
			<div id="mainpage" <?php if(get_theme_mod('archive_sidebar') == true) : ?>class="fullwidth"<?php endif; ?>>
			
				<div class="archive_container">
	
					<span><?php _e( 'Search results for', 'vinethemes' ); ?></span>
					<h1><?php printf( __( '%s', 'vinethemes' ), get_search_query() ); ?></h1>
					
				</div>
			
				<?php if(get_theme_mod('archive_style') == 'grid' || get_theme_mod('archive_style') == 'full_grid') : ?><ul class="ct_grid_view"><?php endif; ?>
				
				<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
					
					<?php if(get_theme_mod('archive_style') == 'grid') : ?>
					
						<?php get_template_part('content-area', 'grid'); ?>
					
					<?php elseif(get_theme_mod('archive_style') == 'list') : ?>
					
						<?php get_template_part('content-area', 'list'); ?>
						
					<?php elseif(get_theme_mod('archive_style') == 'full_list') : ?>
					
						<?php if( $wp_query->current_post == 0 && !is_paged() ) : ?>
							<?php get_template_part('content-area'); ?>
						<?php else : ?>
							<?php get_template_part('content-area', 'list'); ?>
						<?php endif; ?>
					
					<?php elseif(get_theme_mod('archive_style') == 'full_grid') : ?>
					
						<?php if( $wp_query->current_post == 0 && !is_paged() ) : ?>
							<?php get_template_part('content-area'); ?>
						<?php else : ?>
							<?php get_template_part('content-area', 'grid'); ?>
						<?php endif; ?>
					
					<?php else : ?>
						
						<?php get_template_part('content-area'); ?>
						
					<?php endif; ?>	
						
				<?php endwhile; ?>
				
				<?php if(get_theme_mod('archive_style') == 'grid' || get_theme_mod('archive_style') == 'full_grid') : ?></ul><?php endif; ?>
				
					<?php my_pagination(); ?>
				
				<?php else : ?>
					
					<?php get_template_part('content-area', 'none'); ?>
					
				<?php endif; ?>
				
			</div>

<?php if(get_theme_mod('archive_sidebar')) : else : ?><?php get_sidebar(); ?><?php endif; ?>
<?php get_footer(); ?>