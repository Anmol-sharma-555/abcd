<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
					
	<div class="main_content_area entry_article_header">
		
		<?php if(!get_theme_mod('post_categories')) : ?>
		<span class="category"><?php the_category(' '); ?></span>


		<?php endif; ?>

		<?php if(is_single()) : ?>
			<h1><?php the_title(); ?></h1>
		<?php else : ?>
			<h2><a href="<?php echo get_permalink(); ?>"><?php the_title(); ?></a></h2>
		<?php endif; ?>
		
		<span class="separators"></span>

		<?php if(!get_theme_mod('article_date_area')) : ?>
		<span class="post-date"><?php _e( '', 'vinethemes' ); ?> <?php the_time( get_option('date_format') ); ?></span>
		<?php endif; ?>
        <?php if(!get_theme_mod('post_view_counter')) : ?>
            <span class="CT_view_counter">
        <?php
        echo getCTcounterViews(get_the_ID());
        ?>
        </span>

        <?php endif; ?>
	</div>
	
	<?php if(has_post_format('gallery')) : ?>
	
		<?php $images = get_post_meta( $post->ID, '_format_gallery_images', true ); ?>
		
		<?php if($images) : ?>
		<div class="chaos article_image">
		<div class="ct_slides_area">
		<ul class="hash ct_slider">
		<?php foreach($images as $image) : ?>
			
			<?php $the_image = wp_get_attachment_image_src( $image, 'full-thumb' ); ?> 
			<?php $the_caption = get_post_field('post_excerpt', $image); ?>
			<li><img src="<?php echo esc_url($the_image[0]); ?>" <?php if($the_caption) : ?>title="<?php echo $the_caption; ?>"<?php endif; ?> /></li>
			
		<?php endforeach; ?>
		</ul>
		</div>
		</div>
		<?php endif; ?>
	
	<?php elseif(has_post_format('video')) : ?>
	
		<div class="article_image">
			<?php $my_ct_video = get_post_meta( $post->ID, '_format_video_embed', true ); ?>
			<?php if(wp_oembed_get( $my_ct_video )) : ?>
				<?php echo wp_oembed_get($my_ct_video); ?>
			<?php else : ?>
				<?php echo $my_ct_video; ?>
			<?php endif; ?>
		</div>
	
	<?php elseif(has_post_format('audio')) : ?>
	
		<div class="article_image audio">
			<?php $my_ct_audio = get_post_meta( $post->ID, '_format_audio_embed', true ); ?>
			<?php if(wp_oembed_get( $my_ct_audio )) : ?>
				<?php echo wp_oembed_get($my_ct_audio); ?>
			<?php else : ?>
				<?php echo $my_ct_audio; ?>
			<?php endif; ?>
		</div>
	
	<?php else : ?>
		
		<?php if(has_post_thumbnail()) : ?>
		<?php if(!get_theme_mod('article_thumbnail_area')) : ?>
		<div class="article_image">
			<?php if(is_single()) : ?>
				<?php the_post_thumbnail('full-thumb'); ?>
			<?php else : ?>
				<a href="<?php echo get_permalink() ?>"><?php the_post_thumbnail('full-thumb'); ?></a>
			<?php endif; ?>
		</div>
		<?php endif; ?>
		<?php endif; ?>
		
	<?php endif; ?>
	
	<div class="post-entry">
		
		<?php if(is_single()) : ?>
		
			<?php the_content(); ?>
			
		<?php else : ?>
		
			<?php if(get_theme_mod('article_post_summary') == 'excerpt') : ?>
				
				<p><?php echo ct_string_limit_words(get_the_excerpt(), 80); ?>&hellip;</p>
				<p><a href="<?php echo get_permalink() ?>" class="more-link"><span class="more-button"><?php _e( 'Continue Reading', 'vinethemes' ); ?></span></a>
				
			<?php else : ?>
				
				<?php the_content(__('Continue Reading<span class="more-line"></span>', 'vinethemes')); ?>
				
			<?php endif; ?>
		
		<?php endif; ?>
		
		<?php wp_link_pages(); ?>
		
		<?php if(!get_theme_mod('article_tags')) : ?>
		<?php if(is_single()) : ?>
		<?php if(has_tag()) : ?>
			<div class="post-tags">
				<?php the_tags("",""); ?>
			</div>
		<?php endif; ?>	
		<?php endif; ?>
		<?php endif; ?>



        <?php if(!get_theme_mod('article_comment_link')) : ?>
            <div class="social_share_area-box share-comments">

                <?php comments_popup_link( '<span>0</span> Comments', '<span>1</span> Comment', '<span>%</span> Comments', '', ''); ?>
            </div>
        <?php endif; ?>


		
	</div>
	
	<?php if(get_theme_mod('article_comment_link') && get_theme_mod('article_social_share') && get_theme_mod('article_author_box')) : else : ?>	
	<div class="jack social_share_area">
	

		
		<?php if(!get_theme_mod('article_social_share')) : ?>
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
	
	<?php if(!get_theme_mod('article_author')) : ?>
	<?php if(is_single()) : ?>
		<?php get_template_part('inc/themes/author_box'); ?>
	<?php endif; ?>
	<?php endif; ?>
	
	<?php if(!get_theme_mod('article_related_post')) : ?>
	<?php if(is_single()) : ?>
		<?php get_template_part('inc/themes/ct_related_box'); ?>
	<?php endif; ?>
	<?php endif; ?>
	
	<?php comments_template( '', true );  ?>
	
</article>