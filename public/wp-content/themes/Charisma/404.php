<?php get_header(); ?>
	
	<div class="container">
		
		<div id="content-area">
		
			<div id="mainpage">
			
				<div class="404-page">
					
					<h1>404</h1>
					<p><?php _e( 'It seems we can&rsquo;t find what you&rsquo;re looking for. Perhaps searching can help.', 'vinethemes' ); ?></p>
					<?php get_search_form(); ?>
					
				</div>
				
			</div>

<?php get_sidebar(); ?>
<?php get_footer(); ?>