<article class="post">
					
	<div class="entry_article_header">
	
			<h1><?php _e( 'Nothing Found', 'vinethemes' ); ?></h1>
		
	</div>
	
	<div class="post-entry nothing">
	
		<?php if ( is_search() ) : ?>

			<p><?php _e( 'Sorry, the page you are looking for is not found. Please try again with some different keywords.', 'vinethemes' ); ?></p>
			<?php get_search_form(); ?>

		<?php else : ?>

			<p><?php _e( 'It seems we can&rsquo;t find what you&rsquo;re looking for. Perhaps searching can help you out.', 'vinethemes' ); ?></p>
			<?php get_search_form(); ?>

		<?php endif; ?>
		
	</div>
	
</article>