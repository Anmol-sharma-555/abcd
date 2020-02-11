<?php
/**
 * Template for the post and page titles.
 *
 * @package corvette
 * @since corvette 1.0
 */
?>

<?php if ( is_front_page() || is_single() || is_page() ) {} else { ?>
	<div class="sub-title">
		<h1>
		<?php
			if ( is_category() ) :
				printf( __( 'Category : ', 'corvette' ) ); single_cat_title();

			elseif ( is_tag() ) :
				printf( __( 'Tag : ', 'corvette' ) ); single_tag_title();

			elseif ( is_author() ) :
				printf( __( 'Author : %s', 'corvette' ), '' . get_the_author() . '');

			elseif ( is_day() ) :
				printf( __( 'Day : %s', 'corvette' ), '<span>' . get_the_date() . '</span>' );

			elseif ( is_month() ) :
				printf( __( 'Month : %s', 'corvette' ), '<span>' . get_the_date( 'F Y' ) . '</span>' );

			elseif ( is_year() ) :
				printf( __( 'Year : %s', 'corvette' ), '<span>' . get_the_date( 'Y' ) . '</span>' );

			elseif ( is_404() ) :
				_e( '404 / Page Not Found', 'corvette' );

			elseif ( is_search() ) :
				printf( __( 'Search Results for: %s', 'corvette' ), '<span>' . get_search_query() . '</span>' );

			endif;
		?>
		</h1>
	</div>
<?php } ?>