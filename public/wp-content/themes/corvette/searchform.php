<?php
/**
 * Search form template
 *
 * @package corvette
 * @since corvette 1.0
 */
?>
	
	<form method="get" id="searchform" action="<?php echo esc_url( home_url( '/' ) ); ?>" role="search">
		<label for="s" class="assistive-text"><?php _e( 'Search', 'corvette' ); ?></label>
		<input type="text" class="field" placeholder="Search" name="s" value="<?php echo esc_attr( get_search_query() ); ?>" id="s" />
		<input type="submit" class="submit" name="submit" id="searchsubmit" value="<?php esc_attr_e( 'Search', 'corvette' ); ?>" />
	</form>