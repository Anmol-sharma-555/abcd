<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
					
	<div class="entry_article_header">
		
		<h1><?php the_title(); ?></h1>
		
		<span class="separators"></span>
		
	</div>
	
	<div class="article_image">
		
		<a href="<?php echo get_permalink() ?>"><?php the_post_thumbnail('full-thumb'); ?></a>
		
	</div>
	
	<div class="post-entry">
		<?php the_content(); ?>
		<?php wp_link_pages(); ?>
	</div>
	
	<?php if(get_theme_mod('ct_social_share') && !comments_open()) : else :?>
	<div class="kite social_share_area">
		
		<?php if(comments_open()) : ?>
		<div class="social_share_area-box share-comments">
			<?php comments_popup_link( '<span>0</span> Comments', '<span>1</span> Comment', '<span>%</span> Comments', '', ''); ?>
		</div>
		<?php endif; ?>
		
		<?php if(!get_theme_mod('ct_social_share')) : ?>
		<div class="social_share_area-box share-buttons">
			<a target="_blank" href="https://www.facebook.com/sharer/sharer.php?u=<?php the_permalink(); ?>"><i class="fa fa-facebook"></i></a>
			<a target="_blank" href="https://twitter.com/home?status=Check%20out%20this%20article:%20<?php print chickthemes_social_title( get_the_title() ); ?>%20-%20<?php echo urlencode(the_permalink()); ?>"><i class="fa fa-twitter"></i></a>
			<?php $pin_image = wp_get_attachment_url( get_post_thumbnail_id($post->ID)); ?>
			<a data-pin-do="skipLink" target="_blank" href="https://pinterest.com/pin/create/button/?url=<?php the_permalink(); ?>&media=<?php echo $pin_image; ?>&description=<?php the_title(); ?>"><i class="fa fa-pinterest"></i></a>
			<a target="_blank" href="https://plus.google.com/share?url=<?php the_permalink(); ?>"><i class="fa fa-google-plus"></i></a>
		</div>
		<?php endif; ?>
		
	</div>
	<?php endif; ?>
	
	<?php comments_template( '', true );  ?>
	
</article>